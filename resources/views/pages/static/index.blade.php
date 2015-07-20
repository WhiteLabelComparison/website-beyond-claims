@extends('themes.' . $theme . '.master')

@section('title', 'Page Title')

@section('content')

    <div class="container marg75">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-xs-4 col-ms-4">
                <div class="iconbox"><span class="one"></span><br>
                    <h3>Very Flexible</h3>
                    <p>Praesent sodales ullamcorper felis, eget rutrum nisi dignissim vel. Nulla non fringilla metus, in tincidunt lacus aenean scelerisque</p>
                    <p class="read"><a href="#">Read More →</a></p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-xs-4 col-ms-4">
                <div class="iconbox"><span class="iconbox-mac"></span><br>
                    <h3>Fully Responsive</h3>
                    <p>Praesent sodales ullamcorper felis, eget rutrum nisi dignissim vel. Nulla non fringilla metus, in tincidunt lacus aenean scelerisque</p>
                    <p class="read"><a href="#">Read More →</a></p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-xs-4 col-ms-4">
                <div class="iconbox"><span class="iconbox-search"></span><br>
                    <h3>Bootstrap 3.1</h3>
                    <p>Praesent sodales ullamcorper felis, eget rutrum nisi dignissim vel. Nulla non fringilla metus, in tincidunt lacus aenean scelerisque</p>
                    <p class="read"><a href="#">Read More →</a></p>
                </div>
            </div>
        </div>
    </div>
    <div class="container marg75">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="title"><span>Recent Projects</span></h3>
                <div class="pagination">
                    <a href="" id="portfolio_left" class="prev"></a>
                    <a href="" id="portfolio_right" class="next"></a>
                </div>
            </div>
            <div class="col-lg-12">
                <div id="portfolio" class="marg25">
                    <div class="showbiz" data-left="#portfolio_left" data-right="#portfolio_right">
                        <div class="overflowholder">
                            <ul>
                                <li class="portfolio-block">
                                    <div class="mediaholder">
                                        <div class="mediaholder_innerwrap">
                                            <a href="#"><img alt="" src="assets/images/11.jpg"></a>
                                            <div class="hovercover" data-maxopacity="0.85">
                                                <a href="#"><div class="linkicon notalone"><i class="fa fa-link"></i></div></a>
                                                <a class="fancybox" rel="group2" href="assets/images/11.jpg"><div class="lupeicon notalone"><i class="fa fa-search"></i></div></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="detailholder">
                                        <div class="portfolio-name">Michela Chiucini</div>
                                        <div class="portfolio-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit illo voluptas aperiam impedit quidem</div>
                                    </div>
                                </li>
                                <li class="portfolio-block">
                                    <div class="mediaholder">
                                        <div class="mediaholder_innerwrap">
                                            <a href="#"><img alt="" src="assets/images/88.jpg"></a>
                                            <div class="hovercover" data-maxopacity="0.85">
                                                <a href="#"><div class="linkicon notalone"><i class="fa fa-link"></i></div></a>
                                                <a class="fancybox" rel="group2" href="assets/images/88.jpg"><div class="lupeicon notalone"><i class="fa fa-search"></i></div></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="detailholder">
                                        <div class="portfolio-name">Attack Pattern</div>
                                        <div class="portfolio-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit illo voluptas aperiam impedit quidem</div>
                                    </div>
                                </li>
                                <li class="portfolio-block">
                                    <div class="mediaholder">
                                        <div class="mediaholder_innerwrap">
                                            <a href="#"><img alt="" src="assets/images/77.jpg"></a>
                                            <div class="hovercover" data-maxopacity="0.85">
                                                <a href="#"><div class="linkicon notalone"><i class="fa fa-link"></i></div></a>
                                                <a class="fancybox" rel="group2" href="assets/images/77.jpg"><div class="lupeicon notalone"><i class="fa fa-search"></i></div></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="detailholder">
                                        <div class="portfolio-name">Cinnamon Toast</div>
                                        <div class="portfolio-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit illo voluptas aperiam impedit quidem</div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="prl-1 marg75">
        <div class="prlx">
            <div class="container">
                <div class="row marg50">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="progress-per">
                            <div class="prog-name">Front-end</div>
                            <div class="prog-per">84%</div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100" style="width: 84%"></div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="progress-per">
                            <div class="prog-name">Programming</div>
                            <div class="prog-per">85%</div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100" style="width: 85%"></div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="progress-per">
                            <div class="prog-name">Web Design</div>
                            <div class="prog-per">91%</div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100" style="width: 91%"></div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="progress-per">
                            <div class="prog-name">Web Developing</div>
                            <div class="prog-per">81%</div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100" style="width: 81%"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-7 marg75">
                <h3 class="title"><span>Recent Posts</span></h3>
                <div class="pagination">
                    <a href="" id="blog_left" class="prev"></a>
                    <a href="" id="blog_right" class="next"></a>
                </div>
                <div class="row marg25">
                    <div class="col-lg-12">
                        <div id="blog">
                            <div class="showbiz" data-left="#blog_left" data-right="#blog_right">
                                <div class="overflowholder">
                                    <ul>
                                        <li>
                                            <div class="mediaholder ">
                                                <div class="mediaholder_innerwrap">
                                                    <div class="blog-image"><img src="assets/images/john.jpg" alt=""></div>
                                                    <div class="reveal_opener show_on_hover"><a href="#" class="plus"><span class="openme"><i class="fa fa-plus"></i></span></a></div>
                                                </div>
                                                <div class="detailholder">
                                                    <div class="blog-name"><a href="#">Residence Mixte</a></div>
                                                    <div class="blog-text">Asunt in anim uis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat…</div>
                                                    <div class="blog-line"><hr>
                                                        <div class="blog-date pull-left">February 9, 2014</div>
                                                        <div class="blog-icons pull-right"><a href="#"><i class="fa fa-comments" style="font-size:14px;"></i> 17</a> <a href="#"><i class="fa fa-heart"></i> 137</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="mediaholder ">
                                                <div class="mediaholder_innerwrap">
                                                    <div class="blog-image"><img src="assets/images/business.png" alt=""></div>
                                                    <div class="reveal_opener show_on_hover"><a href="#" class="plus"><span class="openme"><i class="fa fa-plus"></i></span></a></div>
                                                </div>
                                                <div class="detailholder">
                                                    <div class="blog-name"><a href="#">New Deal Design</a></div>
                                                    <div class="blog-text">Asunt in anim uis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat…</div>
                                                    <div class="blog-line"><hr>
                                                        <div class="blog-date pull-left">March 12, 2014</div>
                                                        <div class="blog-icons pull-right"><a href="#"><i class="fa fa-comments" style="font-size:14px;"></i> 11</a> <a href="#"><i class="fa fa-heart"></i> 205</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-5 marg75">
                <h3 class="title"><span>Clients Testimonials</span></h3>
                <div class="testimonialrotator skin_default marg25" id="tr1">
                    <div class="testimonial" style="display:block">
                        <div class="testtext">Aenean luctus non eros et bibendum. Vivamus facilisis sollicitudin auctor. Asunt in anim uis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla. In tellus ante, porttitor et gravida non, tincidunt lacinia augue. Aliquam accumsan eros nec lectus tempus, sit amet sollicitudin lorem iaculis et suscipit risus metus.</div>
                        <div class="testauthor-img"><img src="assets/images/mike.jpg"></div>
                        <div class="testauthor">John Doe</div>
                        <div class="testauthor-desc">Menager CEO</div>
                    </div>
                    <div class="testimonial" style="display:none">
                        <div class="testtext">Duis nec neque bibendum, mollis arcu eget, lacinia sem. Sed nec purus a metus facilisis mollis. Aliquam accumsan eros nec lectus tempus, sit amet sollicitudi. Suscipit risus metus ac urna. Vivamus sollicitudin id sem a blandit. Donec ut imperdiet arcu. Integer aliquet scelerisque aliquet...</div>
                        <div class="testauthor-img"><img src="assets/images/mila.png"></div>
                        <div class="testauthor">Mila Markovna</div>
                        <div class="testauthor-desc">Disney Inc.</div>
                    </div>
                    <div class="testimonial" style="display:none">
                        <div class="testtext">Proin sagittis turpis nisi, sit amet bibendum odio faucibus at. Integer aliquet scelerisque aliquet. Nunc facilisis ipsum quis fermentum auctor. Curabitur felis lorem, aliquam quis ornare et, luctus a sapien. Nunc sollicitudin metus at condimentum adipiscing. Suscipit risus metus ac urnasa.</div>
                        <div class="testauthor-img"><img src="assets/images/mike.png"></div>
                        <div class="testauthor">Jonathan Smith</div>
                        <div class="testauthor-desc">Google Corp.</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container marg75">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="title"><span>Some of Our Clients</span></h3>
                <div class="pagination">
                    <a href="" id="clients_left" class="prev"></a>
                    <a href="" id="clients_right" class="next"></a>
                </div>
            </div>
        </div>
        <div class="row marg25">
            <div class="col-lg-12">
                <div id="clients" >
                    <div class="showbiz" data-left="#clients_left" data-right="#clients_right">
                        <div class="overflowholder">
                            <ul>
                                <li>
                                    <div class="mediaholder_innerwrap">
                                        <a href="#"><img alt="" src="assets/images/5_5.png"><div class="reveal_opener_clients show_on_hover"><img alt="" src="assets/images/5.png"></div></a>
                                    </div>
                                </li>
                                <li>
                                    <div class="mediaholder_innerwrap">
                                        <a href="#"><img alt="" src="assets/images/2_2.png"><div class="reveal_opener_clients show_on_hover"><img alt="" src="assets/images/2.png"></div></a>
                                    </div>
                                </li>
                                <li>
                                    <div class="mediaholder_innerwrap">
                                        <a href="#"><img alt="" src="assets/images/3_3.png"><div class="reveal_opener_clients show_on_hover"><img alt="" src="assets/images/3.png"></div></a>
                                    </div>
                                </li>
                                <li>
                                    <div class="mediaholder_innerwrap">
                                        <a href="#"><img alt="" src="assets/images/6_6.png"><div class="reveal_opener_clients show_on_hover"><img alt="" src="assets/images/6.png"></div></a>
                                    </div>
                                </li>
                                <li>
                                    <div class="mediaholder_innerwrap">
                                        <a href="#"><img alt="" src="assets/images/4_4.png"><div class="reveal_opener_clients show_on_hover"><img alt="" src="assets/images/4.png"></div></a>
                                    </div>
                                </li>
                                <li>
                                    <div class="mediaholder_innerwrap">
                                        <a href="#"><img alt="" src="assets/images/1_1.png"><div class="reveal_opener_clients show_on_hover"><img alt="" src="assets/images/1.png"></div></a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="twitter_fot marg50">
        <div class="container ">
            <div class="row">
                <div class="col-lg-11 col-md-10">
                    <div class="tweet"></div>
                </div>
                <div class="col-lg-1  col-md-2 hidden-pag">
                    <div class="paginat">
                        <a id="prev"><i class="fa fa-arrow-left"></i></a>
                        <a id="next"><i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection