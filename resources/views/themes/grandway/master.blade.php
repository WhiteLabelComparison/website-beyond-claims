
<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <title>@yield('title') - Choice Claims - choiceclaims.co.uk</title>
    <meta content="" name="description">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport"/>
    <link href="/assets/images/favicon.ico" rel="shortcut icon"/>
    <!-- JS FILES -->
    <script type="text/javascript" src="/assets/js/jquery-1.20.2.min.js"></script>
    <script type="text/javascript" src="/assets/js/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="/assets/js/modernizr.custom.js"></script>
    <!-- CSS FILES -->
    <link href="/assets/css/style.css" media="screen" rel="stylesheet" type="text/css">
    <link href="/assets/css/responsive.css" media="screen" rel="stylesheet" type="text/css">
    <link href="/assets/css/testimonialrotator.css" media="screen" rel="stylesheet" type="text/css">
    <link href="/assets/rs-plugin/css/settings.css" media="screen" rel="stylesheet" type="text/css">
    <link href="/assets/css/navstylechange.css" media="screen" rel="stylesheet" type="text/css">
    <link href="/assets/showbizpro/css/settings.css" media="screen" rel="stylesheet" type="text/css">
    <link href="/assets/showbizpro/fancybox/jquery.fancybox.css" media="screen" rel="stylesheet" type="text/css">
</head>
<body>
<div id="wrapper">
    <div class="page_head">
        <div class="nav-container" style="height: auto;">
            <nav>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 pull-left"><div class="logo"><a href="/"><img src="/assets/img/logo.png" alt="" height="30" /></a></div></div>
                        <div class="col-lg-9 pull-right">
                            <div class="menu">
                                <div id="dl-menu">
                                    <button class="dl-trigger">Open Menu</button>
                                    <ul class="dl-menu">
                                        <li @if($menuItem=='index')class="current"@endif><a href="/" data-description="Get Started">Home</a></li>
                                        <!-- <li @if($menuItem=='about')class="current"@endif><a href="/about-us" data-description="Who are we?">About Us</a></li> -->
                                        <li @if(substr($menuItem,0,8)=='services')class="current"@endif><a href="/our-services" data-description="How can we help?">Our Services</a>
                                            <ul class="dl-submenu">
                                                <li><a href="/our-services/package-bank-accounts">Package Bank Accounts</a></li>
                                                <li><a href="/our-services/payment-protection-insurance">Payment Protection Insurance</a></li>
                                                <!-- <li><a href="/our-services/payment-protection-insurance-redress">PPI Redress</a></li> -->
                                            </ul>
                                        </li>
                                        <li><a href="/won-what-now" data-description="What to do next">Won?</a></li>
                                        <li @if($menuItem=='contact')class="current"@endif><a href="/contact-us" data-description="Get In Touch">Contact</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>




    @yield('content')



    <div class="twitter_fot marg50">
        <div class="container ">
            <div class="row">

            </div>
        </div>
    </div>

    <div class="footer">
        <div class="container ">
            <div class="row">
                <div class="col-lg-5 col-md-5">
                    <div class="footer-block">Choice Claims</div>
                    <div class="foot-text">
                        <p>Choice Claims is a trading style of CDW Bureau Ltd (Company No. 07960985).</p>
                        <p>Regulated by the Claims Management Regulator in respect of regulated claims management activities, authorisation number CRM29686.</p>
                        <p>ICO Reg No. ZA076747.</p>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2">

                </div>

                <div class="col-lg-5 col-md-5">
                    <div class="footer-block">Contact info</div>
                    <ul class="contacts images_bg">
                        <li class="address">Unit 8 Quay Reach, Carolina Way, Salford, M50 2ZY.</li>
                        <li class="phone">Phone:  <a href="#">0161 396 0396</a></li>
                        <li class="email">E-Mail: <a href="mailto:info@choiceclaims.co.uk">info@choiceclaims.co.uk</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

</div>
<script type="text/javascript" src="/assets/rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
<script type="text/javascript" src="/assets/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<script type="text/javascript" src="/assets/showbizpro/js/jquery.themepunch.showbizpro.js"></script>
<script type="text/javascript" src="/assets/showbizpro/fancybox/jquery.fancybox.pack.js"></script>
<script type="text/javascript" src="/assets/js/waypoints.min.js"></script>
<script type="text/javascript" src="/assets/js/sticky.js"></script>
<script type="text/javascript" src="/assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/assets/js/jquery.tweet.min.js"></script>
<script type="text/javascript" src="/assets/js/jquery.cycle.all.js"></script>
<script type="text/javascript" src="/assets/js/retina.js"></script>
<script type="text/javascript" src="/assets/js/testimonialrotator.js"></script>
<script type="text/javascript" src="/assets/js/jquery.dlmenu.js"></script>
<script type="text/javascript" src="/assets/js/main.js"></script>
</body>
</html>