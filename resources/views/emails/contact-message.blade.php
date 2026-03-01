<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contactformulier website</title>
    <style>
        body { font-family: system-ui, -apple-system, sans-serif; line-height: 1.6; color: #1f2937; max-width: 600px; margin: 0 auto; padding: 24px; }
        h1 { font-size: 1.25rem; color: #0c2340; margin-bottom: 1rem; }
        .field { margin-bottom: 1rem; }
        .label { font-weight: 600; color: #374151; font-size: 0.875rem; }
        .value { margin-top: 0.25rem; }
        .message-box { background: #f3f4f6; padding: 1rem; border-radius: 8px; white-space: pre-wrap; }
        hr { border: none; border-top: 1px solid #e5e7eb; margin: 1.5rem 0; }
        .footer { font-size: 0.875rem; color: #6b7280; }
    </style>
</head>
<body>
    <h1>Nieuw bericht via contactformulier — Samen voor Barendrecht</h1>
    <p>Iemand heeft het contactformulier op de website ingevuld.</p>
    <hr>
    <div class="field">
        <div class="label">Naam</div>
        <div class="value">{{ $name }}</div>
    </div>
    <div class="field">
        <div class="label">E-mail</div>
        <div class="value"><a href="mailto:{{ $email }}">{{ $email }}</a></div>
    </div>
    <div class="field">
        <div class="label">Onderwerp</div>
        <div class="value">{{ $subjectLine }}</div>
    </div>
    <div class="field">
        <div class="label">Bericht</div>
        <div class="value message-box">{{ $messageText }}</div>
    </div>
    <hr>
    <p class="footer">Verzonden via het contactformulier op {{ config('app.url') }}. Je kunt direct op dit bericht antwoorden om de afzender te bereiken.</p>
</body>
</html>
