<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Donation;
use Illuminate\View\View;

class DonationController extends Controller
{
    public function index(): View
    {
        $donations = Donation::latest()->paginate(20);
        $totalAmount = Donation::where('payment_status', 'completed')->sum('amount')
            ?: Donation::sum('amount');

        return view('admin.donations.index', [
            'donations' => $donations,
            'totalAmount' => $totalAmount,
        ]);
    }
}
