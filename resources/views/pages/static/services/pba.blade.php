@extends('themes.' . $theme . '.master')

@section('title', 'Page Title')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="welcome">
                    <div class="page-name pull-left"><h3>Package Bank Accounts</h3></div>
                </div>
            </div>
        </div>
    </div>


    <div class="container marg75">
        <div class="row">
            <div class="col-lg-6">
                <img class="img-thumbnail" src="/assets/img/pba-benefits.png" alt="" >
            </div>
            <div class="col-lg-6">
                <div class="name_serv">Do I have a package bank account?</div>
                <p class="about_text">Package bank accounts are special accounts that have a fee associated with them. For this fee you receive a number of services, these could be any or all of the following:</p>

                <p class="marg25">
                    <div class="accordion">
                        <section id="one">
                            <span><a href="#one">Insurance Products</a></span>
                            <div style="display:block;">
                                <p>Insurance products will include items such as Breakdown Insurance for your car, Travel Insurance, Mobile Phone Insurance and Gadget Cover.</p>
                            </div>
                        </section>
                        <section id="two">
                            <span><a href="#two">Lifestyle Products</a></span>
                            <div>
                                <p>Lifestyle products could include items such as Early access to special events such as concerts, Cinema Tickets and Magazine Subscriptions.</p>
                            </div>
                        </section>
                        <section id="three">
                            <span><a href="#three">Preferential Access to Financial Services</a></span>
                            <div>
                                <p>Some banks will give clients who purchase Package Bank Accounts lower interest rates, overdrafts and also Mortgages.</p>
                            </div>
                        </section>
                    </div>
                </p>

                <p class="marg25">These benefits seem excellent on face value, however, far too many consumers have discovered they have been paying for something they are unable to claim for.</p>

            </div>
        </div>
    </div>


    <div class="container marg75">
        <div class="row">
            <div class="col-lg-8 col-md-8">
                <h3 class="title"><span>Were you miss-sold?</span></h3>

                <p class="about_text">Choice Claims can assess your claim and advise if we believe you have been miss-sold a package bank account. Our team knows where the banks have cut corners or not advised you as they should have. Get in touch for us to start your claim. You may have been miss-sold for one or more of the following reasons.</p>


                <div class="col-lg-6 marg25">
                    <div class="iconbox"><i class="fa fa-question-circle size_35"></i><br>
                        <div class="name_serv_icons">Informed of Upgrade?</div>
                        <p class="text_serv">Donec sed odio dui. Nulla vitae elit libero, a pharetra augue. Nullam id dolor id nibh ultricies vehicula ut id elit donec sed odio dui.</p>
                    </div>
                </div>
                <div class="col-lg-6 marg25">
                    <div class="iconbox"><i class="fa fa-file-text size_35"></i><br>
                        <div class="name_serv_icons">Conditions of Claiming?</div>
                        <p class="text_serv">Donec sed odio dui. Nulla vitae elit libero, a pharetra augue. Nullam id dolor id nibh ultricies vehicula ut id elit donec sed odio dui.</p>
                    </div>
                </div>
                <div class="col-lg-6 marg25">
                    <div class="iconbox"><i class="fa fa-gbp size_35"></i><br>
                        <div class="name_serv_icons">Told about the cost?</div>
                        <p class="text_serv">Donec sed odio dui. Nulla vitae elit libero, a pharetra augue. Nullam id dolor id nibh ultricies vehicula ut id elit donec sed odio dui.</p>
                    </div>
                </div>
                <div class="col-lg-6 marg25">
                    <div class="iconbox"><i class="fa fa-check-square size_35"></i><br>
                        <div class="name_serv_icons">Registration of Items?</div>
                        <p class="text_serv">Donec sed odio dui. Nulla vitae elit libero, a pharetra augue. Nullam id dolor id nibh ultricies vehicula ut id elit donec sed odio dui.</p>
                    </div>
                </div>
                <div class="col-lg-6 marg25">
                    <div class="iconbox"><i class="fa fa-forward size_35"></i><br>
                        <div class="name_serv_icons">Approved for Finance?</div>
                        <p class="text_serv">Donec sed odio dui. Nulla vitae elit libero, a pharetra augue. Nullam id dolor id nibh ultricies vehicula ut id elit donec sed odio dui.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4">
                <h3 class="title"><span>What do I receive?</span></h3>

                <p class="about_text">A typical claim results in a settlement of just over £760, is completed in 4-8 weeks and will be paid directly to you. Our simple process is described below.</p>

                <div class="col-lg-12 marg25">
                    <div class="iconbox"><i class="fa fa-phone-square size_35"></i><br>
                        <div class="name_serv_icons">Step 1</div>
                        <p class="text_serv">We will discuss your circumstances and establish if you have a valid claim. 1 in 5 people have a valid claim, according to regulators.</p>
                    </div>
                </div>

                <div class="col-lg-12 marg25">
                    <div class="iconbox"><i class="fa fa-quote-left size_35"></i><br>
                        <div class="name_serv_icons">Step 2</div>
                        <p class="text_serv">If we believe you have a valid claim we will start the process of contacting your bank. Our claims team will detail the specific regulations that the bank has breached.</p>
                    </div>
                </div>

                <div class="col-lg-12 marg25">
                    <div class="iconbox"><i class="fa fa-smile-o size_35"></i><br>
                        <div class="name_serv_icons">Step 2</div>
                        <p class="text_serv">Once we have managed to secure a settlement for you we will arrange for the bank to make payment to you. We will then invoice you our fee.</p>
                    </div>
                </div>

            </div>

        </div>
    </div>





@stop