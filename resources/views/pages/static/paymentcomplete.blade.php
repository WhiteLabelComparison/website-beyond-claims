<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="welcome">
                <div class="page-name pull-left"><h3>Thank You: <i class="text-muted">Payment Complete</i></h3></div>
            </div>
        </div>
    </div>
</div>
<div class="container marg50">
    <div class="row">
        <div class="col-lg-12">
            <p class="about_text">
                Thank you for your payment. This has been received and your case will be closed in due course. If there have been any problems with this payment we will contact you before closing your case.
            </p>
            <p class="about_text">
                For your reference the details of this payment are as follows:
            </p>

            <ul style="margin-top: 15px;">
                <li style="margin-bottom: 10px;"><b>Transaction Total:</b> £{{ number_format($payment_total, 2) }}</li>
                <li style="margin-bottom: 10px;"><b>Transaction ID:</b> {{ $transaction_id }}</li>
                <li style="margin-bottom: 10px;"><b>Transaction Date:</b> {{ \Carbon\Carbon::now()->format('d/m/Y H:i:s') }}</li>
            </ul>
        </div>
    </div>
</div>