<?php

namespace App\Http\Controllers;

use App\Models\Donation;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\View\View;
use Mollie\Api\MollieApiClient;

class DonationController extends Controller
{
    public function index(): View
    {
        return view('donate', [
            'metaTitle' => 'Steun ons',
            'metaDescription' => 'Steun de campagne van Lijst 8 met een donatie.',
        ]);
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'amount' => 'nullable',
            'amount_custom' => 'required_if:amount,custom|nullable|numeric|min:1',
            'message' => 'nullable|string|max:1000',
            'anonymous' => 'nullable|boolean',
        ], [
            'amount_custom.required_if' => 'Vul een bedrag in.',
        ]);

        $amount = ($validated['amount'] ?? '') === 'custom'
            ? (float) ($validated['amount_custom'] ?? 0)
            : (float) ($validated['amount'] ?? 0);
        if ($amount <= 0) {
            return back()->withErrors(['amount' => 'Kies een bedrag of vul een eigen bedrag in.'])->withInput();
        }

        $apiKey = config('services.mollie.key');
        if (empty($apiKey)) {
            return back()->with('error', 'Betaling is tijdelijk niet beschikbaar. Probeer het later opnieuw.')->withInput();
        }

        $donation = Donation::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'amount' => $amount,
            'payment_status' => 'pending',
            'payment_id' => null,
            'message' => $validated['message'] ?? null,
            'anonymous' => $request->boolean('anonymous'),
        ]);

        try {
            $mollie = new MollieApiClient;
            $mollie->setApiKey($apiKey);

            $redirectUrl = url()->route('donate.return', ['donation' => $donation->id]);
            $webhookUrl = url()->route('donate.webhook');
            $amountValue = number_format((float) $amount, 2, '.', '');

            $payment = $mollie->payments->create([
                'amount' => [
                    'currency' => 'EUR',
                    'value' => $amountValue,
                ],
                'description' => 'Donatie Lijst 8 – € ' . $amountValue,
                'redirectUrl' => $redirectUrl,
                'webhookUrl' => $webhookUrl,
                'metadata' => [
                    'donation_id' => (string) $donation->id,
                ],
                'locale' => 'nl_NL',
            ]);

            $donation->update(['payment_id' => $payment->id]);
            $checkoutUrl = $payment->getCheckoutUrl();
            if (empty($checkoutUrl)) {
                throw new \RuntimeException('Geen checkout-URL ontvangen van Mollie.');
            }
            return redirect()->away($checkoutUrl);
        } catch (\Throwable $e) {
            Log::error('Mollie payment creation failed', [
                'donation_id' => $donation->id,
                'error' => $e->getMessage(),
            ]);
            return back()->with('error', 'De betaling kon niet worden gestart. Probeer het later opnieuw.')->withInput();
        }
    }

    /**
     * Na betaling redirect Mollie terug naar deze URL.
     */
    public function return(Request $request, Donation $donation): RedirectResponse
    {
        return redirect()->route('donate')->with(
            'success',
            $donation->payment_status === 'completed'
                ? 'Bedankt voor je donatie! Je betaling is ontvangen.'
                : 'Je bent teruggekeerd van het betalingsscherm. We verwerken je donatie en nemen bij vragen contact op.'
        );
    }

    /**
     * Webhook: Mollie stuurt status-updates naar deze URL (POST, zonder CSRF).
     */
    public function webhook(Request $request): \Illuminate\Http\Response
    {
        $paymentId = $request->input('id');
        if (empty($paymentId)) {
            return response('', 400);
        }

        $apiKey = config('services.mollie.key');
        if (empty($apiKey)) {
            return response('', 500);
        }

        try {
            $mollie = new MollieApiClient;
            $mollie->setApiKey($apiKey);
            $payment = $mollie->payments->get($paymentId);
        } catch (\Throwable $e) {
            Log::warning('Mollie webhook: could not fetch payment', ['id' => $paymentId, 'error' => $e->getMessage()]);
            return response('', 500);
        }

        $donation = Donation::where('payment_id', $payment->id)->first();
        if (!$donation) {
            return response('', 200);
        }

        $status = (string) $payment->status;
        if ($status === 'paid') {
            $donation->update(['payment_status' => 'completed']);
        } elseif (in_array($status, ['failed', 'canceled', 'expired'], true)) {
            $donation->update(['payment_status' => 'failed']);
        }

        return response('', 200);
    }
}
