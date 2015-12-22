@extends('themes.' . $theme . '.master')

@section('title', 'What happens now you have won?')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="welcome">
                    <div class="page-name pull-left"><h3>Won? Now what to do</h3></div>
                </div>
            </div>
        </div>
    </div>
    <div class="container marg50">
        <div class="row">
            <div class="col-lg-9">
                <div class="row">
                    <div class="col-lg-12">
                        <div style="display:block">
                            <p>Firstly we would like to congratulate you on your win. Be it for a package bank account or payment protection insurance we are glad that you have managed to reclaim what you are due. Depending on the claim that you have been successful with will dictate if there is anything further for you to do before we close your case, these are shown below.</p>
                        </div>

                        <div class="">
                            <div class="accordion">
                                <section id="two">
                                    <span class="active"><a href="#two">Payment Protection Insurance</a></span>
                                    <div style="display:block;">
                                        <p>If you have had a win from a Payment Protection Insurance claim then we will have sent you a letter detailing the full details of the refund that you have received. The company you purchased PPI from will have refunded the money directly to your bank account. In this case we will send you an invoice for our standard fee along with a copy of your win letter. This fee will now be payable and can be done over the phone by calling us on 0161 241 4650, alternatively you can use the 'Pay Now' section on the right which will securely take your payment online and automatically close your case.</p>
                                    </div>
                                </section>
                                <section id="three">
                                    <span><a href="#three">Package Bank Account</a></span>
                                    <div>
                                        <p>If you have had a win from a Package Bank Account then your win would have been directly credited to your account by the bank. In this case we will send you an invoice for our standard fee along with a copy of your win letter. This fee will now be payable and can be done over the phone by calling us on 0161 241 4650, alternatively you can use the 'Pay Now' section on the right which will securely take your payment online and automatically close your case.</p>
                                    </div>
                                </section>
                            </div>
                        </div>
                        <p>
                            If you were happy with our service then we would love it if you would send us a testimonial. You will have received a form alongside your win letter to fill in and send back to us, however, if you would like to do this online please visit our <a href="/contact-us">contact page</a>.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="ask-question">
                    <span class="iconbox-mail"></span>Pay Now
                </div>

                <p class="marg25">
                    To pay online, please fill in the following page. Please note your details are not stored and all payments are taken using our secure processing server.
                </p>

                <form action="/won-what-now/process" method="POST" id="payment-form">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    @if ($errors->any())
                    <div class="payment-errors alert alert-danger">
                        <p><b>Error: </b> {{ $errors->first() }}</p>
                    </div>
                    @endif

                    <div class="row form-group">
                        <div class="col-md-6">
                            <label><span>First Name</span></label>
                            <input type="text" name="first-name" class="form-control" required>
                        </div>
                        <div class="col-md-6">
                            <label>Last Name</label>
                            <input type="text" name="last-name" class="form-control" required>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-12">
                            <label>Due Fee £</label>
                            <input type="text" name="fee" class="form-control" required placeholder="00.00"/>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-12">
                            <label>
                                <span>Card Number</span>
                            </label>
                            <input type="text" size="20" maxlength="20" class="form-control cc-number"
                                   data-stripe="number" placeholder="XXXX XXXX XXXX XXXX" required/>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-7">
                            <label>
                                Expiration (MM/YYYY)
                            </label>
                            <input type="text" class="form-control cc-expire" placeholder="MM / YYYY" required/>
                        </div>
                        <div class="col-md-5">
                            <label>
                                <span>
                                    CVC
                                    <a href="#" rel="tooltip" data-placment="top"
                                       title="CVC is located on the back of the card, it's a 3 to 4 digit number">
                                        <i class="fa fa-info-circle"></i>
                                    </a>
                                </span>
                            </label>
                            <input type="text" size="4" maxlength="4" class="form-control cc-cvc" data-stripe="cvc"
                                   required/>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-success">Submit Payment</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="https://js.stripe.com/v2/"></script>
    <script type="text/javascript" src="/assets/js/jquery.payment.js"></script>
    <script type="text/javascript">
        $(function () {
            Stripe.setPublishableKey('{{ config('services.stripe.key') }}');

            $('input.cc-number').payment('formatCardNumber');
            $('input.cc-expire').payment('formatCardExpiry');
            $('input.cc-cvc').payment('formatCardCVC');

            $('#payment-form').on('submit', function (e) {
                e.preventDefault();
                var $form = $(this);

                $('.payment-errors').removeClass('in');
                $form.find('.has-error').removeClass('has-error');

                if (!$.payment.validateCardNumber($('input.cc-number').val())) {
                    $('.cc-number').parent().addClass('has-error');
                    $('.payment-errors').text('Invalid Card Number').addClass('in');
                    return;
                }

                var expiry = $.payment.cardExpiryVal($('input.cc-expire').val());
                if (!$.payment.validateCardExpiry(expiry.month, expiry.year)) {
                    $('.cc-expire').parent().addClass('has-error');
                    $('.payment-errors').text('Invalid Expiration Number').addClass('in');
                    return;
                }

                if (!$.payment.validateCardCVC($('.cc-cvc').val(), $.payment.cardType($('.cc-number').val()))) {
                    $('.cc-cvc').parent().addClass('has-error');
                    $('.payment-errors').text('Invalid CVC').addClass('in');
                    return;
                }

                Stripe.card.createToken({
                    'number': $('.cc-number').val(),
                    'cvc': $('.cc-cvc').val(),
                    'exp_month': expiry.month,
                    'exp_year': expiry.year
                },stripeResponseHandler);

                $form.find('button').prop('disabled', true);
            });

            function stripeResponseHandler(status, response) {

                var $form = $('#payment-form');

                if (response.error) {
                    // Show the errors on the form
                    $form.find('.payment-errors').text(response.error.message).addClass('in');
                    $form.find('button').prop('disabled', false);
                } else {
                    // response contains id and card, which contains additional card details
                    var token = response.id;
                    // Insert the token into the form so it gets submitted to the server
                    $form.append($('<input type="hidden" name="stripeToken" />').val(token));
                    // and submit
                    $form.get(0).submit();

                }
            }
        });
    </script>
@stop