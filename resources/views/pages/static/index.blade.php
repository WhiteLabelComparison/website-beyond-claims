@extends('themes.' . $theme . '.master')

@section('title', 'Claim your PPI and PBA back!')

@section('content')

    <div class="container marg75">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-xs-4 col-ms-4">
                <div class="iconbox"><span class="iconbox-cash"></span><br>
                    <h3>Package Bank Account</h3>
                    <p>If you pay a monthly fee for your bank account you may be entitled to claim all of the fees back. If the Terms and Conditions were not explained fully or you were upgraded without agreeing.</p>
                    <p class="read"><a href="/our-services/package-bank-accounts">Read More →</a></p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-xs-4 col-ms-4">
                <div class="iconbox"><span class="iconbox-calculator"></span><br>
                    <h3>Payment Protection Insurance</h3>
                    <p>Have you been paying a monthly insurance premium on your loan, credit card or mortgage? Consumers all across the UK have been mis-sold invalid insurance and can make a claim for a refund.</p>
                    <p class="read"><a href="/our-services/payment-protection-insurance">Read More →</a></p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-xs-4 col-ms-4">
                <div class="iconbox"><span class="iconbox-refresh"></span><br>
                    <h3>PPI Redress</h3>
                    <p>You may think that you have claimed your PPI back already, but are you aware that some banks only paid a small portion of the compensation you deserved? We can re-evaluate your win and claim back what you are actually entitled to.</p>
                    <p class="read"><a href="/our-services/payment-protection-insurance-redress">Read More →</a></p>
                </div>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 marg75" style="min-height: 200px;">
                <h3 class="title"><span>Clients Testimonials</span></h3>
                <div class="testimonialrotator skin_default marg25" id="tr1">
                    <div class="testimonial" style="display:block">
                        <div class="testtext">My experience was very positive and transparent. Choice Claims dealt with everything in a very professional and timely manner. I would not hesitate to recommend them, you have nothing to loose.</div>
                        <div class="testauthor">Mrs Morna Metzger</div>
                    </div>
                    <div class="testimonial" style="display:none">
                        <div class="testtext">Great service, signed the authorisation letter in January Nat West paid out by the end of February. Thank you for bringing this to my attention.</div>
                        <div class="testauthor">Anonymous</div>
                    </div>
                    <div class="testimonial" style="display:none">
                        <div class="testtext">I found the whole process very simple and hassle free. The staff I dealt with were very helpfull. I was so happy with the service I recommended them to my Fiance.</div>
                        <div class="testauthor">Anonymous</div>
                    </div>
                    <div class="testimonial" style="display:none">
                        <div class="testtext">Choice Claims were very thorough and processed my claim with the minimum amount of interaction from me. The process was very quick and painless. Thank You.</div>
                        <div class="testauthor">Anonymous</div>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection