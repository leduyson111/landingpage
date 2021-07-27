<!DOCTYPE html>
<html class="wide wow-animation" lang="en">

<head>
    <!-- Site Title-->
    <title>Home</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <!-- <script src="/cdn-cgi/apps/head/3ts2ksMwXvKRuG480KNifJ2_JNM.js"></script> -->
    <link rel="icon" href="{{ asset('frontend/images/favicon.png') }}" type="{{ asset('frontend/image/x-icon') }}">
    <!-- Stylesheets-->
    <link rel="preconnect" href="{{ asset('https://fonts.gstatic.com') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset("frontend/css/bootstrap.css") }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/fonts.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/all.min.css') }}">
    <!--[if lt IE 10]>
    <div style="background: #212121; padding: 10px 0; box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3); clear: both; text-align:center; position: relative; z-index:1;"><a href="https://windows.microsoft.com/en-US/internet-explorer/"><img src="{{asset('frontend/')}}/images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <script src="js/html5shiv.min.js"></script>
    <![endif]-->
</head>

<body>
    <div class="preloader">
        <div class="cssload-container">
            <div class="cssload-speeding-wheel"></div>
            <p>Loading...</p>
        </div>
    </div>
    <!-- Page-->
    <div class="page">
        <header class="page-header">
            <!-- RD Navbar-->
            <div class="rd-navbar-wrap">
                <nav class="rd-navbar" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-sm-device-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-device-layout="rd-navbar-static" data-lg-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-xl-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static" data-stick-up-clone="false" data-sm-stick-up="true" data-md-stick-up="true" data-lg-stick-up="true" data-md-stick-up-offset="110px" data-lg-stick-up-offset="1px">
                    <div class="rd-navbar-inner rd-navbar-search-wrap">
                        <!-- RD Navbar Panel-->
                        <div class="rd-navbar-panel rd-navbar-search-lg_collapsable">
                            <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                            <!-- RD Navbar Brand-->
                            <div class="rd-navbar-brand"><a class="brand-name" href="index.html"><img src="{{asset('frontend/')}}/images/logo-112x17.png" alt="" width="112" height="17" /></a></div>
                        </div>
                        <!-- RD Navbar Nav-->
                        <div class="rd-navbar-nav-wrap">
                            <ul class="rd-navbar-nav">
                                <li class="active"><a href="#home">Home</a>
                                </li>
                                <li><a href="#about">About Us</a>
                                </li>
                                <li><a href="#services">Services</a>
                                </li>
                                <li><a href="#our-team">Our team</a>
                                </li>
                                <li><a href="#portfolio">Portfolio</a>
                                </li>
                                <li><a href="#news">News</a>
                                </li>
                                <li><a href="#testimonials">Testimonials</a>
                                </li>
                                <li><a href="#clients">Clients</a>
                                </li>
                                <li><a href="#contacts">Contacts</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </header>
        <section id="home">
            <div class="swiper-container swiper-slider swiper-slider_fullheight-var-1" data-simulate-touch="false" data-loop="true" data-autoplay="5000">
                <div class="swiper-wrapper">
                    <div class="swiper-slide swiper-slide_video context-dark">
                        <video class="vide_bg" preload="" playsinline="" autoplay="false" muted="true" loop="true" src="{{ asset('frontend/images/video_slide.mp4') }}" type="video/mp4">
                        </video>
                        <div class="swiper-slide-caption text-center">
                          <div class="container">
                            <h1 data-caption-animate="fadeInUpSmall"><span>BUY & SELL</span></h1>
                            <h3 data-caption-animate="fadeInUpSmall" data-caption-delay="200">Professional Business Consulting</h3>
                            <div class="group-lg group-middle"><a class="button btn-nina" data-text="View more" data-caption-animate="fadeInUpSmall" data-caption-delay="350" href="#">View more</a><a class="button btn-nina btn-nina-black" data-text="Contacts" data-caption-animate="fadeInUpSmall" data-caption-delay="350" href="#" data-toggle="modal" data-target="#modalLogin">Contacts</a></div>
                          </div>
                        </div>
                    </div>
                    @foreach ($sliders as $slider)
                        <div class="swiper-slide" data-slide-bg={{ $slider->image }}>
                            <div class="swiper-slide-caption text-center">
                                <div class="container">
                                    <h1 data-caption-animate="fadeInUpSmall"><span>{{ $slider->title }}</span></h1>
                                    <h3 data-caption-animate="fadeInUpSmall" data-caption-delay="200">{!! $slider->description !!} </h3>
                                    <div class="group-lg group-middle"><a class="button btn-nina" data-text="View more" data-caption-animate="fadeInUpSmall" data-caption-delay="350" href="#">View more</a><a class="button btn-nina btn-nina-black" data-text="Contacts" data-caption-animate="fadeInUpSmall" data-caption-delay="350" href="#" data-toggle="modal" data-target="#modalLogin">Contacts</a></div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <!-- Swiper Pagination-->
                <div class="swiper-pagination"></div>
                <!-- Swiper Navigation-->
                <div class="swiper-button-prev linear-icon-chevron-left"></div>
                <div class="swiper-button-next linear-icon-chevron-right"></div>
            </div>
        </section>
        <section class="section-xs section-cta bg-gray-dark text-center text-md-left">
            <div class="container">
                <div class="row row-30 justify-content-between align-items-center">
                    <div class="col-12 col-md-8">
                        <h4>Like What We Offer?</h4>
                        <p>Feel free to browse our website for more information about our services.</p>
                    </div>
                    <div class="col-12 col-md-4 text-md-right"><a class="button btn-nina btn-nina-white" data-text="Read more" href="#">Read more</a></div>
                </div>
            </div>
        </section>
        <!-- About us-->
        <section class="bg-gray-lighter object-wrap" id="about">
            <div class="section-lg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5">
                            <h4 class="heading-decorated">About us</h4>
                            <p> {{ $aboutus->description }}</p>
                            <div class="row row-30">
                                <div class="col-xl-6">
                                    <!-- Blurb minimal-->
                                    <article class="blurb blurb-minimal">
                                        <div class="unit flex-row unit-spacing-md">
                                            <div class="unit-left">
                                                <div class="blurb-minimal__icon"><span class="icon linear-icon-menu3"></span></div>
                                            </div>
                                            <div class="unit-body">
                                                <p class="blurb__title heading-6"><a href="#">Lots of happy clients</a></p>
                                                <p>{{ $aboutus->happy_clients }} </p>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                                <div class="col-xl-6">
                                    <!-- Blurb minimal-->
                                    <article class="blurb blurb-minimal">
                                        <div class="unit flex-row unit-spacing-md">
                                            <div class="unit-left">
                                                <div class="blurb-minimal__icon"><span class="icon linear-icon-users2"></span></div>
                                            </div>
                                            <div class="unit-body">
                                                <p class="blurb__title heading-6"><a href="#">Qualified Employees</a></p>
                                                <p> {{ $aboutus->qualified }}</p>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            </div>
                            <div class="row justify-content-md-center">
                                <div class="col-md-12">
                                    <!-- Linear progress bar-->
                                    <div class="progress-linear progress-linear-modern">
                                        <div class="progress-header">
                                            <p>Risk Assurance</p><span class="progress-value">{{$aboutus->percent_risk  }}</span>
                                        </div>
                                        <div class="progress-bar-linear-wrap">
                                            <div class="progress-bar-linear"></div>
                                        </div>
                                    </div>
                                    <!-- Linear progress bar-->
                                    <div class="progress-linear progress-linear-modern">
                                        <div class="progress-header">
                                            <p>Audit</p><span class="progress-value">{{$aboutus->audit_percentage  }}</span>
                                        </div>
                                        <div class="progress-bar-linear-wrap">
                                            <div class="progress-bar-linear"></div>
                                        </div>
                                    </div>
                                    <!-- Linear progress bar-->
                                    <div class="progress-linear progress-linear-modern">
                                        <div class="progress-header">
                                            <p>Financial Modeling</p><span class="progress-value">{{$aboutus->financial_percent  }}</span>
                                        </div>
                                        <div class="progress-bar-linear-wrap">
                                            <div class="progress-bar-linear"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="object-wrap__body object-wrap__body-sizing-1 object-wrap__body-md-right bg-image" style="background-image: url({{ $aboutus->image }})"></div>
        </section>


        <section class="section-lg bg-default text-center" id="services">
            <div class="container">
                <h4 class="heading-decorated">Our Services</h4>
                <div class="row row-60">
                    @foreach ($services as $service)
                    <div class="col-md-6 col-xl-4">
                        <div class="thumbnail-classic"><a href="#"><img src="{{ $service->image }}" alt="" width="418" height="315" /></a>
                            <div class="caption">
                                <h5><a class="thumbnail-classic-title" href="#">{{ $service->title }}</a></h5>
                                <p>{!! $service->desc !!}    </p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>


        <section class="section-md bg-gray-lighter text-center">
            <div class="container">
                <h4 class="heading-decorated">Our working process</h4>
                <div class="row row-30 justify-content-center">
                    <div class="col-sm-10 col-lg-6"><img src="{{asset('frontend/')}}/images/home-var-2-650x495.jpg" alt="" width="650" height="495" />
                    </div>
                    <div class="col-sm-10 col-lg-6">
                        <!-- Blurb circle-->
                        <article class="blurb blurb-circle">
                            <div class="unit flex-row unit-spacing-md">
                                <div class="unit-left">
                                    <div class="blurb-circle__icon"><span class="icon linear-icon-feather"></span></div>
                                </div>
                                <div class="unit-body">
                                    <p class="blurb__title heading-6">Free Consultation</p>
                                    <p>First, we offer our clients a free consultation to find out the best possible solutions to their problems and discuss what we can provide.</p>
                                </div>
                            </div>
                        </article>
                        <!-- Blurb circle-->
                        <article class="blurb blurb-circle">
                            <div class="unit flex-row unit-spacing-md">
                                <div class="unit-left">
                                    <div class="blurb-circle__icon"><span class="icon linear-icon-menu3"></span></div>
                                </div>
                                <div class="unit-body">
                                    <p class="blurb__title heading-6">Company Analysis</p>
                                    <p>After that, we evaluate the clients’ company profile and assess its financial and economic potential to determine the best approach.</p>
                                </div>
                            </div>
                        </article>
                        <!-- Blurb circle-->
                        <article class="blurb blurb-circle">
                            <div class="unit flex-row unit-spacing-md">
                                <div class="unit-left">
                                    <div class="blurb-circle__icon"><span class="icon linear-icon-bag2"></span></div>
                                </div>
                                <div class="unit-body">
                                    <p class="blurb__title heading-6">Business Plan Development</p>
                                    <p>Finally, we develop the business plan for your company, which takes into account all important factors of your company’s market activity.</p>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </section>
        <!-- Call to Action-->
        <section class="section-md bg-accent bg-image text-center bg-overlay-darkest" style="background-image: url({{ asset('frontend/images/bg-image-8.jpg') }}); background-position: center 10%;">
            <div class="container">
                <div class="row justify-content-md-center">
                    <div class="col-md-11 col-lg-9 col-xl-8">
                        <h3 class="heading-decorated">We provide tailored solutions for your business</h3><a class="button btn-nina btn-nina-white" data-text="Contact Us" href="#" data-toggle="modal" data-target="#modalLogin">Contact Us</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Meet Our Team-->
        <section class="section-md bg-default text-center" id="our-team">
            <div class="container">
                <h4 class="heading-decorated">Meet Our Team</h4>
                <!-- Owl Carousel-->
                <div class="owl-carousel" data-items="1" data-sm-items="1" data-md-items="2" data-lg-items="3" data-loop="false" data-rewind="true" data-stage-padding="0" data-margin="30" data-dots="true" data-nav="true" data-autoplay="true">
                  @foreach ($teamwork as $team)
                    
                    <div class="item">
                        <!-- Thumb flat-->
                        <article class="thumb-flat"><img src="{{ $team->image }}" alt="" width="418" height="315" />
                            <div class="thumb-flat__body">
                                <p class="heading-6"><a href="#">{{ $team->name }}</a></p>
                                <p class="thumb-flat__subtitle">{{ $team->position }}</p>
                                <p>{!!$team->desc  !!}</p>
                            </div>
                        </article>
                    </div>

                  @endforeach
                </div>
                
            </div>
        </section>
        <section class="section-lg bg-default text-center" id="portfolio" data-lightgallery="group">
            <div class="container-fluid">
                <h4 class="heading-decorated">Our Portfolio</h4>
                <div class="row no-gutters">
                @foreach($portfolio as $port)
                    <div class="col-md-4 col-xl-3">
                        <a class="thumb-modern" data-lightgallery="item" href="{{ $port->image }}">
                            <figure><img src="{{ $port->image }}" alt="" width="418" height="315" />
                            </figure>
                            <div class="thumb-modern__overlay"></div>
                            <h4 class="thumb-modern_title">{{ $port->name }}</h4>
                        </a>
                    </div>
                @endforeach
                </div>
            </div>
        </section>


        <section class="bg-default section-md" id="news">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <h4 class="heading-decorated">News</h4>
                    </div>
                </div>
                <div class="row row-50">
                    <!-- Post classic-->
                    @foreach($news as $new)
                    <article class="col-md-6 col-lg-4 mt-0">
                        <div class="thumbnail-classic">
                            <a href="#" class="url-item-news">
                                <img src="{{  $new->image }}" alt="" width="886" height="668" />
                            </a>
                            <div class="post-classic-title">
                                <h6><a href="#" class="url-item-news">{{  $new->title }}</a></h6>
                            </div>
                            <div class="post-meta mt-1">
                                <div class="group">
                                    <time datetime="2018">{{  $new->date_update }}</time><span class="meta-author" href="#">by Brian Williamson</span>
                                </div>
                            </div>
                            <div class="post-classic-body mt-2">
                                <p>{!! $new->desc !!}</p>
                            </div>
                        </div>
                    </article>
                   
                    @endforeach
                </div>
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <button class="button btn-nina" type="button" data-text="View More">View More</button>
                    </div>
                </div>
            </div>
        </section>
        <section class="section parallax-container context-dark" data-parallax-img="{{ asset('frontend/images/bg-image-2.jpg') }}">
            <div class="parallax-content">
                <div class="container section-lg text-center" id="testimonials">
                    <h4 class="heading-decorated">WHAT PEOPLE SAY</h4>
                    <!-- Owl Carousel-->
                    <div class="owl-carousel" data-items="1" data-stage-padding="15" data-margin="30" data-dots="true" data-nav="true" data-autoplay="true">
                        @foreach ($testimonials as $item)
                            <div class="item">
                                <!-- Quote default-->
                                <div class="quote-default">
                                    <div class="quote-default__image"><img src="{{ $item->image }}" alt="" width="120" height="120" />
                                    </div>
                                    <div class="quote-default__text">
                                        <p class="q">{!! $item->desc !!}</p>
                                    </div>
                                    <p class="quote-default__cite">{{ $item->name }}</p>
                                </div>
                            </div>
                        @endforeach
                   
                    </div>
                </div>
            </div>
        </section>
        <section class="section-md text-center bg-default" id="clients">
            <div class="container">
                <h4 class="heading-decorated">Our Clients</h4>
                <div class="row row-30">
                    @foreach($clients as $client )
                    <div class="col-sm-6 col-md-3 col-6">
                        <figure class="box-icon-image"><a href="#"><img src="{{ $client->image }}" alt="" width="109" height="102" /></a></figure>
                    </div>
                    @endforeach
                  
                </div>
            </div>
        </section>
        <!-- get a quote-->
        <section class="bg-gray-lighter object-wrap" id="contacts">
            <div class="section-lg">
                <div class="container">
                    <div class="row justify-content-end">
                        <div class="col-lg-5">
                            <h4 class="heading-decorated">Get a Quote</h4>
                            <!-- RD Mailform-->
                            <form class="rd-mailform rd-mailform_style-1" data-form-output="form-output-global" data-form-type="contact" method="post" action="bat/rd-mailform.php">
                                <div class="form-wrap">
                                    <input class="form-input" id="contact-name" type="text" name="name" data-constraints="@Required">
                                    <label class="form-label" for="contact-name">Your name</label>
                                </div>
                                <div class="form-wrap">
                                    <input class="form-input" id="contact-email" type="email" name="email" data-constraints="@Email @Required">
                                    <label class="form-label" for="contact-email">Your e-mail</label>
                                </div>
                                <div class="form-wrap">
                                    <textarea class="form-input" id="contact-message" name="message" data-constraints="@Required"></textarea>
                                    <label class="form-label" for="contact-message">Your message</label>
                                </div>
                                <button class="button btn-nina" type="submit" data-text="Send"> send</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="object-wrap__body object-wrap__body-sizing-1 object-wrap__body-md-left bg-image" style="background-image: url({{ asset('frontend/images/bg-image-3.jpg') }})"></div>
        </section>
        <!-- Page Footer-->
        <section class="pre-footer-corporate bg-image-7 bg-overlay-darkest" style="background-size: cover;">
            <div class="container">
                <div class="row justify-content-sm-center justify-content-lg-start row-30 row-md-60">
                    <div class="col-sm-10 col-md-6 col-lg-10 col-xl-3"><a class="brand" href="index.html"><img src="{{asset('frontend/')}}/images/logo-inverse-127x19.png" alt="" width="127" height="19" /></a>
                        <p>BUY & SELL is a professional business advisory company offering a comprehensive range of outsourced business solutions for small-medium enterprises and owner managers. Our range of services includes business planning & strategy development as well as taxation management and accounting support for our clients.</p>
                    </div>
                    <div class="col-sm-10 col-md-6 col-lg-3 col-xl-3">
                        <h6>Navigation</h6>
                        <ul class="list-xxs list-primary">
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Our Team</a></li>
                            <li><a href="#">Services</a></li>
                            <li><a href="#">Portfolio</a></li>
                            <li><a href="#">Testimonials</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-10 col-md-6 col-lg-4 col-xl-3">
                        <h6>Contacts</h6>
                        <ul class="list-xs">
                            <li>
                                <dl class="list-terms-minimal">
                                    <dt>Address</dt>
                                    <dd>4578 Marmora Road, Glasgow, D04 89GR</dd>
                                </dl>
                            </li>
                            <li>
                                <dl class="list-terms-minimal">
                                    <dt>Phones</dt>
                                    <dd>
                                        <ul class="list-semicolon">
                                            <li><a href="tel:#">(800) 123-0045</a></li>
                                            <li><a href="tel:#">(800) 123-0045</a></li>
                                        </ul>
                                    </dd>
                                </dl>
                            </li>
                            <li>
                                <dl class="list-terms-minimal">
                                    <dt>E-mail</dt>
                                    <dd><a class="link-primary" href="mailto:#">info@demolink.org</a></dd>
                                </dl>
                            </li>
                            <li>
                                <dl class="list-terms-minimal">
                                    <dt>We are open</dt>
                                    <dd>Mn-Fr: 10 am-8 pm</dd>
                                </dl>
                            </li>
                        </ul>
                    </div>
                    <div class="col-sm-10 col-md-6 col-lg-5 col-xl-3">
                        <div class="google-map-footer">
                          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.0837927047965!2d105.79247121445468!3d21.029332993135675!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab1a1a505cd7%3A0x70e694055b4f3dad!2sCTVTRANS%20CO.%2CLTD!5e0!3m2!1svi!2s!4v1621581676040!5m2!1svi!2s" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer class="footer-corporate bg-gray-darkest">
            <div class="container">
                <div class="footer-corporate__inner">
                    <p class="rights"><span>BUY & SELL</span><span>&nbsp;&copy;&nbsp;</span><span class="copyright-year"></span>. All Rights Reserved.</p>
                    <ul class="list-inline-xxs">
                        <li><a class="icon icon-xxs icon-gray-darker fa fa-facebook" href="#"></a></li>
                        <li><a class="icon icon-xxs icon-gray-darker fa fa-twitter" href="#"></a></li>
                        <li><a class="icon icon-xxs icon-gray-darker fa fa-google-plus" href="#"></a></li>
                        <li><a class="icon icon-xxs icon-gray-darker fa fa-vimeo" href="#"></a></li>
                        <li><a class="icon icon-xxs icon-gray-darker fa fa-youtube" href="#"></a></li>
                        <li><a class="icon icon-xxs icon-gray-darker fa fa-pinterest" href="#"></a></li>
                    </ul>
                </div>
            </div>
        </footer>
    </div>
    <!-- Modal News Detail -->
    <div class="modal-news-detail hide">
      <div class="wrap-btn-back">
        <button type="button" class="close-news-detail"><i class="far fa-arrow-left"></i>Back</button>
      </div>
      <div class="container">
        <h4 class="heading-decorated">Our Clients</h4>
        <div class="ct-news-detail">
            <p>{!! $new->our_clients !!} </p>
        </div>
      </div>
    </div>
    <!-- Modal login window-->
    <div class="modal fade" id="modalLogin" role="dialog">
        <div class="modal-dialog modal-dialog_custom">
            <!-- Modal content-->
            <div class="modal-dialog__inner">
                <button class="close" type="button" data-dismiss="modal"></button>
                <div class="modal-dialog__content">
                    <h5 class="heading-decorated">Get in Touch</h5>
                    <!-- RD Mailform-->
                    <form class="rd-mailform rd-mailform_style-1" data-form-output="form-output-global" data-form-type="contact" method="post" action="bat/rd-mailform.php">
                        <div class="form-wrap form-wrap_icon linear-icon-man">
                            <input class="form-input" id="contact-popup-name" type="text" name="name" data-constraints="@Required">
                            <label class="form-label" for="contact-popup-name">Your name</label>
                        </div>
                        <div class="form-wrap form-wrap_icon linear-icon-envelope">
                            <input class="form-input" id="contact-popup-email" type="email" name="email" data-constraints="@Email @Required">
                            <label class="form-label" for="contact-popup-email">Your e-mail</label>
                        </div>
                        <div class="form-wrap form-wrap_icon linear-icon-feather">
                            <textarea class="form-input" id="contact-popup-message" name="message" data-constraints="@Required"></textarea>
                            <label class="form-label" for="contact-popup-message">Your message</label>
                        </div>
                        <button class="button btn-nina" type="submit" data-text="Send">Send</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"></div>
    <!-- Javascript-->
    <script src="{{ asset('frontend/js/core.min.js') }}"></script>
    <script src="{{ asset('frontend/js/script.js') }}"></script>
    <!-- coded by gel-->
</body>

</html>