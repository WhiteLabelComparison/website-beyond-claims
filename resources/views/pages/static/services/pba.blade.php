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
                <img class="img-thumbnail" src="/assets/images/pba-benefits.png" alt="" >
            </div>
            <div class="col-lg-6">
                <div class="name_serv">Do I have a package bank account?</div>
                <p class="about_text">Package bank accounts are special accounts that have a fee associated with them. For this fee you receive a number of services, these could be any or all of the following:</p>

                <p class="marg25">
                    <div class="accordion">
                        <section id="one">
                            <span><a href="#one">Insurance Products</a></span>
                            <div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            </div>
                        </section>
                        <section id="two">
                            <span><a href="#two">Lifestyle Products</a></span>
                            <div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            </div>
                        </section>
                        <section id="three">
                            <span><a href="#three">Preferential Access to Financial Services</a></span>
                            <div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            </div>
                        </section>
                    </div>
                </p>

                <p class="about_text">Although these benefits seem excellent on face value, far too many consumers have discovered they have been paying for something they are unable to claim for.</p>

            </div>
        </div>
    </div>
    <div class="container marg50">
        <div class="row">
            <h3 class="title"><span>Our Services</span></h3>
            <div class="col-lg-4 marg25">
                <div class="iconbox"><i class="fa fa-files-o size_35"></i><br>
                    <div class="name_serv_icons">45+ HTML Pages</div>
                    <p class="text_serv">Donec sed odio dui. Nulla vitae elit libero, a pharetra augue. Nullam id dolor id nibh ultricies vehicula ut id elit donec sed odio dui.</p>
                </div>
            </div>
            <div class="col-lg-4 marg25">
                <div class="iconbox"><i class="fa fa-arrows-alt size_35"></i><br>
                    <div class="name_serv_icons">Fully Responsive</div>
                    <p class="text_serv">Donec sed odio dui. Nulla vitae elit libero, a pharetra augue. Nullam id dolor id nibh ultricies vehicula ut id elit donec sed odio dui.</p>
                </div>
            </div>
            <div class="col-lg-4 marg25">
                <div class="iconbox"><i class="fa fa-picture-o size_35"></i><br>
                    <div class="name_serv_icons">Minimal Design</div>
                    <p class="text_serv">Donec sed odio dui. Nulla vitae elit libero, a pharetra augue. Nullam id dolor id nibh ultricies vehicula ut id elit donec sed odio dui.</p>
                </div>
            </div>
            <div class="col-lg-4 marg25">
                <div class="iconbox"><i class="fa fa-briefcase size_35"></i><br>
                    <div class="name_serv_icons">Bootstrap</div>
                    <p class="text_serv">Donec sed odio dui. Nulla vitae elit libero, a pharetra augue. Nullam id dolor id nibh ultricies vehicula ut id elit donec sed odio dui.</p>
                </div>
            </div>
            <div class="col-lg-4 marg25">
                <div class="iconbox"><i class="fa fa-cogs size_35"></i><br>
                    <div class="name_serv_icons">Customizations</div>
                    <p class="text_serv">Donec sed odio dui. Nulla vitae elit libero, a pharetra augue. Nullam id dolor id nibh ultricies vehicula ut id elit donec sed odio dui.</p>
                </div>
            </div>
            <div class="col-lg-4 marg25">
                <div class="iconbox"><i class="fa fa-users size_35"></i><br>
                    <div class="name_serv_icons">Dedicated Support</div>
                    <p class="text_serv">Donec sed odio dui. Nulla vitae elit libero, a pharetra augue. Nullam id dolor id nibh ultricies vehicula ut id elit donec sed odio dui.</p>
                </div>
            </div>
        </div>
    </div>

@stop