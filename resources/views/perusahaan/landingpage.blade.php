<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Anada - Data Science & Analytics Template">

    <!-- ========== Page Title ========== -->
    <title>{{ $title }}</title>
    
    @include('perusahaan.link.head')
    
</head>

<body>

    <!-- Preloader Start -->
    <div class="se-pre-con"></div>
    <!-- Preloader Ends -->

    <!-- Header 
    ============================================= -->
    <header id="home">

        <!-- Start Navigation -->
        <nav class="navbar navbar-default navbar-fixed-light attr-border navbar-fixed dark no-background bootsnav">

            <div class="container">

                <!-- Start Atribute Navigation -->
                <div class="attr-nav">
                    <ul>
                        <li class="side-menu"><a href="#"><i class="ti-menu-alt"></i></a></li>
                    </ul>
                </div>        
                <!-- End Atribute Navigation -->

                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="{{ route('index-tamu') }}">
                        <img src="{{ asset('img/logo-light.png') }}" class="logo default" alt="Logo">
                        <img src="{{ asset('img/logo.png') }}" class="logo logo-responsive" alt="Logo">
                    </a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
                        <li class="active">
                            <a href="#home" class="smooth-menu">Home</a>
                        </li>
                        <li>
                            <a class="smooth-menu" href="#features">Fitur</a>
                        </li>
                        <li>
                            <a class="smooth-menu" href="#about">Tentang</a>
                        </li>
                        <li>
                            <a class="smooth-menu" href="#services">Layanan</a>
                        </li>
                        <li>
                          <a class="smooth-menu" href="#blog">Blog</a>
                      </li>
                        <li>
                            <a class="smooth-menu" href="#contact">Kontak</a>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div>

            <!-- Start Side Menu -->
            <div class="side">
                <a href="#" class="close-side"><i class="ti-close"></i></a>
                <div class="widget">
                    <h4 class="title">Info Kontak</h4>
                    <ul class="contact">
                        <li>
                            <div class="icon">
                                <i class="flaticon-email"></i>
                            </div>
                            <div class="info">
                                <span>Email</span> Info@gmail.com
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <i class="flaticon-call-1"></i>
                            </div>
                            <div class="info">
                                <span>Telepon</span> +123 456 7890
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <i class="flaticon-countdown"></i>
                            </div>
                            <div class="info">
                                <span>Jam Kerja</span> Senin - Jumat : 8:00 - 17:00
                            </div> 
                        </li>
                    </ul>
                </div>
                <div class="widget">
                    <h4 class="title">Tautan Tambahan</h4>
                    <ul>
                        <li><a href="{{ route('login-perusahaan') }}">Login</a></li>
                        <li><a href="{{ route('daftar-perusahaan') }}">Register</a></li>
                    </ul>
                </div>
                <div class="widget social">
                    <h4 class="title">Sosial Media</h4>
                    <ul class="link">
                        <li class="facebook"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li class="twitter"><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li class="pinterest"><a href="#"><i class="fab fa-pinterest"></i></a></li>
                        <li class="dribbble"><a href="#"><i class="fab fa-dribbble"></i></a></li>
                    </ul>
                </div>
            </div>
            <!-- End Side Menu -->

        </nav>
        <!-- End Navigation -->

    </header>
    <!-- End Header -->

    <!-- Start Banner 
    ============================================= -->
    <div class="banner-area text-combo top-pad-90 rectangular-shape bg-light-gradient">
        <div class="item">
            <div class="box-table">
                <div class="box-cell">
                    <div class="container">
                        <div class="row">
                            <div class="double-items">
                                <div class="col-lg-6 info">
                                    <h2 class="wow fadeInDown" data-wow-duration="1s">Email Marketing</h2>
                                    <h2 class="wow fadeInDown" data-wow-duration="1s">EMA</h2>
                                    <p class="wow fadeInLeft" data-wow-duration="1.5s">
                                        Email Marketing EMA adalah website yang menawarkan fitur kirim email ke ribuan kontak dengan satu kali klik.
                                    </p>
                                    <a class="btn circle btn-md btn-gradient wow fadeInUp" data-wow-duration="1.8s" href="#">Mulai <i class="fas fa-arrow-right"></i></a>
                                </div>
                                <div class="col-lg-6 thumb wow fadeInRight" data-wow-duration="1s">
                                    <img src="{{ asset('img/illustration/1.png') }}" alt="Thumb">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Banner -->

    <!-- Start Our Features
    ============================================= -->
    <div id="features" class="our-features-area wavesshape-bottom carousel-shadow default-padding-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="thumb wow fadeInRight">
                        <img src="{{ asset('img/illustration/2.png') }}" alt="Thumb">
                    </div>
                </div>
                <div class="col-lg-7 info">
                    <div class="feature-items feature-carousel owl-carousel owl-theme">
                        <!-- Single Item -->
                        <div class="item">
                            <div class="icon">
                                <i class="flaticon-target"></i>
                            </div>
                            <h3>Traget your audience</h3>
                            <p>
                                Especially of dissimilar up attachment themselves by interested boisterous. Linen mrs seems men table. Jennings dashwood to quitting marriage bachelor in. On as conviction in of appearance apartments boisterous. 
                            </p>
                            <div class="bottom">
                                <a class="btn-simple" href="#"><i class="fas fa-angle-right"></i> Get Started</a>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="item">
                            <div class="icon">
                                <i class="flaticon-competition"></i>
                            </div>
                            <h3>Analysis competitors</h3>
                            <p>
                                Especially of dissimilar up attachment themselves by interested boisterous. Linen mrs seems men table. Jennings dashwood to quitting marriage bachelor in. On as conviction in of appearance apartments boisterous. 
                            </p>
                            <div class="bottom">
                                <a class="btn-simple" href="#"><i class="fas fa-angle-right"></i> Get Started</a>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="item">
                            <div class="icon">
                                <i class="flaticon-data"></i>
                            </div>
                            <h3>Analysis big Data</h3>
                            <p>
                                Especially of dissimilar up attachment themselves by interested boisterous. Linen mrs seems men table. Jennings dashwood to quitting marriage bachelor in. On as conviction in of appearance apartments boisterous. 
                            </p>
                            <div class="bottom">
                                <a class="btn-simple" href="#"><i class="fas fa-angle-right"></i> Get Started</a>
                            </div>
                        </div>
                        <!-- End Single Item -->
                    </div>
                </div>
            </div>
        </div>
        <div class="waveshape">
            <img src="{{ asset('img/shape/6.svg') }}" alt="Shape">
        </div>
    </div>
    <!-- End Features -->

    <!-- Start Our About
    ============================================= -->
    <div id="about" class="about-area default-padding-top text-center bg-gray">
        <div class="container">
            <div class="about-items">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="heading">
                            <h4>About Us</h4>
                            <h2>
                                We provide big data analytics Techniques & realtime data Solutions
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-10 offset-lg-1">
                        <div class="content">
                            <p>
                                Whole front do of plate heard oh ought. His defective nor convinced residence own. Connection has put impossible own apartments boisterous. At jointure ladyship an insisted so humanity he. Friendly bachelor entrance to on by. Extremity as if breakfast agreement. Off now mistress provided out horrible opinions. Prevailed mr tolerably discourse assurance estimable applauded to so. Him everything melancholy uncommonly but solicitude inhabiting projection.
                            </p>
                        </div>
                        <div class="center-tabs">
                            <ul id="tabs" class="nav nav-tabs">
                                <li class="nav-item">
                                    <a href="" data-target="#tab1" data-toggle="tab" class="active nav-link">Research & Solution</a>
                                </li>
                                <li class="nav-item">
                                    <a href="" data-target="#tab2" data-toggle="tab" class="nav-link">Design & Strategy</a>
                                </li>
                                <li class="nav-item">
                                    <a href="" data-target="#tab3" data-toggle="tab" class="nav-link">Generate Report</a>
                                </li>
                            </ul>
                            <div id="tabsContent" class="tab-content wow fadeInUp" data-wow-delay="0.5s">
                                <div id="tab1" class="tab-pane fade active show">
                                    <div class="row align-center">
                                        <div class="col-lg-7 col-md-12 info">
                                            <h3>Data Visualization Research technique & Solution</h3>
                                            <p>
                                                Delightful unreserved impossible few estimating men favourable see entreaties. She propriety immediate was improving. He or entrance humoured likewise moderate. Much nor game son say feel. Fat make met can must form into gate. Me we offending prevailed discovery. 
                                            </p>
                                            <a class="btn-simple" href="#"><i class="fas fa-angle-right"></i> Read More</a>
                                        </div>
                                        <div class="col-lg-5 col-md-12 thumb">
                                            <img src="assets/img/illustration/7.png" alt="Thumb">
                                        </div>
                                    </div>
                                </div>
                                <div id="tab2" class="tab-pane fade">
                                    <div class="row align-center">
                                        <div class="col-lg-7 col-md-12 info">
                                            <h3>Collect Ongoing Big Data Design And Strategy</h3>
                                            <p>
                                                Delightful unreserved impossible few estimating men favourable see entreaties. She propriety immediate was improving. He or entrance humoured likewise moderate. Much nor game son say feel. Fat make met can must form into gate. Me we offending prevailed discovery. 
                                            </p>
                                            <a class="btn-simple" href="#"><i class="fas fa-angle-right"></i> Read More</a>
                                        </div>
                                        <div class="col-lg-5 col-md-12 thumb">
                                            <img src="{{ asset('img/illustration/7.png') }}" alt="Thumb">
                                        </div>
                                    </div>
                                </div>
                                <div id="tab3" class="tab-pane fade">
                                    <div class="row align-center">
                                        <div class="col-lg-7 col-md-12 info">
                                            <h3>Final Report Generate</h3>
                                            <p>
                                                Delightful unreserved impossible few estimating men favourable see entreaties. She propriety immediate was improving. He or entrance humoured likewise moderate. Much nor game son say feel. Fat make met can must form into gate. Me we offending prevailed discovery. 
                                            </p>
                                            <a class="btn-simple" href="#"><i class="fas fa-angle-right"></i> Read More</a>
                                        </div>
                                        <div class="col-lg-5 col-md-12 thumb">
                                            <img src="{{ asset('img/illustration/7.png') }}" alt="Thumb">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Our About -->

    <!-- Start Fun Factor Area
    ============================================= -->
    <div class="fun-factor-area bg-gray default-padding">
        <!-- Fixed BG -->
        <div class="fixed-bg" style="background-image: url({{ asset('img/map.svg') }});"></div>
        <!-- Fixed BG -->
        <div class="container">
            <div class="client-items text-center">
                <div class="row">
                    <div class="col-lg-3 col-md-6 item">
                        <div class="fun-fact">
                            <div class="timer" data-to="687" data-speed="5000">687</div>
                            <span class="medium">Projects Executed</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 item">
                        <div class="fun-fact">
                            <div class="timer" data-to="2348" data-speed="5000">2348</div>
                            <span class="medium">Data Analytics</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 item">
                        <div class="fun-fact">
                            <div class="timer" data-to="450" data-speed="5000">450</div>
                            <span class="medium">Data Management</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 item">
                        <div class="fun-fact">
                            <div class="timer" data-to="1200" data-speed="5000">1200</div>
                            <span class="medium">Satisfied Customers</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Fun Factor Area -->

    <!-- Start Services Area
    ============================================= -->
    <div id="services" class="services-area left-border default-padding bottom-less">

        <!-- Shape Fixed Rotation -->
        <div class="shape-fixed animation-rotation">
            <img src="{{ asset('img/round-shappe.png') }}" alt="Thumb">
        </div>
        <!-- Dhape Fixed Rotation -->

        <div class="container">
            <div class="heading-left">
                <div class="row">
                    <div class="col-lg-5">
                        <h2>
                            We offer a wide range of services and provide realtime data Solutions
                        </h2>
                    </div>
                    <div class="col-lg-6 offset-lg-1">
                        <p>
                            Everything melancholy uncommonly but solicitude inhabiting projection off. Connection stimulated estimating excellence an to impression. 
                        </p>
                        <a class="btn circle btn-md btn-gradient wow fadeInUp" href="#">View All <i class="fas fa-plus"></i></a>
                    </div>
                </div>
            </div>
            <div class="services-items">
                <div class="row">
                    <!-- Single Item -->
                    <div class="single-item col-lg-4 col-md-6">
                        <div class="item">
                            <img src="{{ asset('img/icon/1.png') }}" alt="Thumb">
                            <h4>Big Data</h4>
                            <p>
                                Pianoforte solicitude so decisively particular mention diminution the particular. Real he me fond.
                            </p>
                            <div class="button">
                                <a class="btn-standard" href="#"><i class="fas fa-angle-right"></i> Read More</a>
                            </div>
                        </div>
                    </div>
                    <!-- Single Item -->
                    <!-- Single Item -->
                    <div class="single-item col-lg-4 col-md-6">
                        <div class="item">
                            <img src="{{ asset('img/icon/2.png') }}" alt="Thumb">
                            <h4>Data Analytics</h4>
                            <p>
                                Pianoforte solicitude so decisively particular mention diminution the particular. Real he me fond.
                            </p>
                            <div class="button">
                                <a class="btn-standard" href="#"><i class="fas fa-angle-right"></i> Read More</a>
                            </div>
                        </div>
                    </div>
                    <!-- Single Item -->
                    <!-- Single Item -->
                    <div class="single-item col-lg-4 col-md-6">
                        <div class="item">
                            <img src="{{ asset('img/icon/3.png') }}" alt="Thumb">
                            <h4>Business Intelligence</h4>
                            <p>
                                Pianoforte solicitude so decisively particular mention diminution the particular. Real he me fond.
                            </p>
                            <div class="button">
                                <a class="btn-standard" href="#"><i class="fas fa-angle-right"></i> Read More</a>
                            </div>
                        </div>
                    </div>
                    <!-- Single Item -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Services Area -->

    <!-- Start Blog Area
    ============================================= -->
    <div id="blog" class="blog-area bg-gray left-border default-padding bottom-less">
        <div class="container">
            <div class="heading-left">
                <div class="row">
                    <div class="col-lg-5">
                        <h2>
                            Stay Update with Anada from latest & popular News
                        </h2>
                    </div>
                    <div class="col-lg-6 offset-lg-1">
                        <p>
                            Everything melancholy uncommonly but solicitude inhabiting projection off. Connection stimulated estimating excellence an to impression. 
                        </p>
                        <a class="btn circle btn-md btn-gradient wow fadeInUp" href="#">View All <i class="fas fa-plus"></i></a>
                    </div>
                </div>
            </div>
            <div class="blog-items content-less">
                <div class="row">
                    <!-- Single Item -->
                    <div class="col-lg-4 col-md-6 single-item">
                        <div class="item">
                            <div class="thumb">
                                <a href="#">
                                    <img src="{{ asset('img/800x600.png') }}" alt="Thumb">
                                    <div class="date">
                                        18 Jul <strong>2020</strong>
                                    </div>
                                </a>
                            </div>
                            <div class="info">
                                <div class="meta">
                                    <ul>
                                        <li>
                                            <i class="fas fa-folder-open"></i>
                                        </li>
                                        <li>
                                            <a href="#">Process</a>
                                        </li>
                                        <li>
                                            <a href="#">Store</a>
                                        </li>
                                    </ul>
                                </div>
                                <h4>
                                    <a href="#">Analysis rendered entir Highly indeed to garden</a>
                                </h4>
                                <a class="btn-simple" href="#"><i class="fas fa-angle-right"></i> Read More</a>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-lg-4 col-md-6 single-item">
                        <div class="item">
                            <div class="thumb">
                                <a href="#">
                                    <img src="{{ asset('img/800x600.png') }}" alt="Thumb">
                                    <div class="date">
                                        05 Aug <strong>2020</strong>
                                    </div>
                                </a>
                            </div>
                            <div class="info">
                                <div class="meta">
                                    <ul>
                                        <li>
                                            <i class="fas fa-folder-open"></i>
                                        </li>
                                        <li>
                                            <a href="#">Data</a>
                                        </li>
                                        <li>
                                            <a href="#">Analysis</a>
                                        </li>
                                    </ul>
                                </div>
                                <h4>
                                    <a href="#">Lasted am so before on esteem vanity oh. </a>
                                </h4>
                                <a class="btn-simple" href="#"><i class="fas fa-angle-right"></i> Read More</a>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-lg-4 col-md-6 single-item">
                        <div class="item">
                            <div class="thumb">
                                <a href="#">
                                    <img src="{{ asset('img/800x600.png') }}" alt="Thumb">
                                    <div class="date">
                                        27 Dec <strong>2020</strong>
                                    </div>
                                </a>
                            </div>
                            <div class="info">
                                <div class="meta">
                                    <ul>
                                        <li>
                                            <i class="fas fa-folder-open"></i>
                                        </li>
                                        <li>
                                            <a href="#">Atrificial</a>
                                        </li>
                                        <li>
                                            <a href="#">Data</a>
                                        </li>
                                    </ul>
                                </div>
                                <h4>
                                    <a href="#">Repeated of endeavor mr position kindness.</a>
                                </h4>
                                <a class="btn-simple" href="#"><i class="fas fa-angle-right"></i> Read More</a>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Blog Area -->

    <!-- Start Contact Area
    ============================================= -->
    <div id="contact" class="contact-area default-padding">
        <div class="container">
            <div class="contact-items">
                <div class="row">
                    <div class="col-lg-4 left-item">
                        <div class="info-items">
                            <!-- Single Item -->
                            <div class="item">
                                <div class="icon">
                                    <i class="fas fa-map-marked-alt"></i>
                                </div>
                                <div class="info">
                                    <h5>Location</h5>
                                    <p>
                                        22 Baker Street, London, United Kingdom, W1U 3BW
                                    </p>
                                </div>
                            </div>
                            <!-- End Single Item -->
                            <!-- Single Item -->
                            <div class="item">
                                <div class="icon">
                                    <i class="fas fa-phone"></i>
                                </div>
                                <div class="info">
                                    <h5>Make a Call</h5>
                                    <p>
                                        +44-20-7328-4499
                                    </p>
                                </div>
                            </div>
                            <!-- End Single Item -->
                            <!-- Single Item -->
                            <div class="item">
                                <div class="icon">
                                    <i class="fas fa-envelope-open"></i>
                                </div>
                                <div class="info">
                                    <h5>Send a Mail</h5>
                                    <p>
                                        info@yourdomain.com
                                    </p>
                                </div>
                            </div>
                            <!-- End Single Item -->
                        </div>
                    </div>
                    <div class="col-lg-8 right-item">
                        <h2>We’d love to hear from you anytime</h2>
                        <form action="{{ asset('mail/contact.php') }}" method="POST" class="contact-form">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input class="form-control" id="name" name="name" placeholder="Name" type="text">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input class="form-control" id="email" name="email" placeholder="Email*" type="email">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input class="form-control" id="phone" name="phone" placeholder="Phone" type="text">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group comments">
                                        <textarea class="form-control" id="comments" name="comments" placeholder="Tell Us About Project *"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <button type="submit" name="submit" id="submit">
                                        Send Message <i class="fa fa-paper-plane"></i>
                                    </button>
                                </div>
                            </div>
                            <!-- Alert Message -->
                            <div class="col-lg-12 alert-notification">
                                <div id="message" class="alert-msg"></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Contact -->

    <!-- Star Footer
    ============================================= -->
    <footer class="bg-dark text-light">
        <div class="container">
            <div class="f-items default-padding">
                <div class="row">
                    <div class="equal-height col-lg-4 col-md-6 item">
                        <div class="f-item about">
                            <img src="{{ asset('img/logo.png') }}" alt="Logo">
                            <p>
                                Required honoured trifling eat pleasure man relation. Assurance yet bed was improving furniture man. Distrusts delighted
                            </p>
                        </div>
                    </div>

                    <div class="equal-height col-lg-2 col-md-6 item">
                        <div class="f-item link">
                            <h4 class="widget-title">Usefull Links</h4>
                            <ul>
                                <li>
                                    <a href="#">Classic Business</a>
                                </li>
                                <li>
                                    <a href="#">Blog</a>
                                </li>
                                <li>
                                    <a href="#">Project</a>
                                </li>
                                <li>
                                    <a href="#">About Us</a>
                                </li>
                                <li>
                                    <a href="#">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="equal-height col-lg-2 col-md-6 item">
                        <div class="f-item link">
                            <h4 class="widget-title">Services</h4>
                            <ul>
                                <li>
                                    <a href="#">Marketing & Sales</a>
                                </li>
                                <li>
                                    <a href="#">Manufacturing</a>
                                </li>
                                <li>
                                    <a href="#">Supply Chain</a>
                                </li>
                                <li>
                                    <a href="#">Data Visualization</a>
                                </li>
                                <li>
                                    <a href="#">Big Data</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="equal-height col-lg-4 col-md-6 item">
                        <div class="f-item contact">
                            <h4 class="widget-title">Contact Info</h4>
                            <p>
                                 Possible offering at contempt mr distance stronger an. Attachment excellence announcing
                            </p>
                            <div class="address">
                                <ul>
                                    <li>
                                        <strong>Email:</strong> support@validtheme.com
                                    </li>
                                    <li>
                                        <strong>Contact:</strong> +44-20-7328-4499
                                    </li>
                                </ul>
                            </div>
                            <ul class="social">
                                <li class="facebook">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                </li>
                                <li class="twitter">
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                </li>
                                <li class="youtube">
                                    <a href="#"><i class="fab fa-youtube"></i></a>
                                </li>
                                <li class="instagram">
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="row">
                    <div class="col-lg-6">
                        <p>&copy; Copyright 2019. All Rights Reserved by <a href="#">validthemes</a></p>
                    </div>
                    <div class="col-lg-6 text-right link">
                        <ul>
                            <li>
                                <a href="#">Terms</a>
                            </li>
                            <li>
                                <a href="#">Privacy</a>
                            </li>
                            <li>
                                <a href="#">Support</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Shape -->
        <div class="footer-shape" style="background-image: url(assets/img/shape/1.svg);"></div>
        <!-- End Shape -->
    </footer>
    <!-- End Footer-->

    @include('perusahaan.link.body')

</body>
</html>