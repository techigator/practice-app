<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Home Default || Personal Portfolio</title>
    <meta name="robots" content="noindex, follow"/>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/logo/logo.png') }}">
    <!-- CSS
    ============================================ -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.css">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/feature.css') }}">
    <!-- Style css -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>
<style>
    @font-face {
        font-family: 'Open Sans Regular';
        font-style: normal;
        font-weight: 400;
        src: url('chrome-extension://gkkdmjjodidppndkbkhhknakbeflbomf/fonts/open_sans/open-sans-v18-latin-regular.woff');
    }

    @font-face {
        font-family: 'Open Sans Bold';
        font-style: normal;
        font-weight: 800;
        src: url('chrome-extension://gkkdmjjodidppndkbkhhknakbeflbomf/fonts/open_sans/OpenSans-Bold.woff');
    }

    @font-face {
        font-family: 'Open Sans ExtraBold';
        font-style: normal;
        font-weight: 800;
        src: url('chrome-extension://gkkdmjjodidppndkbkhhknakbeflbomf/fonts/open_sans/open-sans-v18-latin-800.woff');
    }
</style>

<body class="template-color-1 spybody" data-spy="scroll" data-target=".navbar-example2" data-offset="70">

<!-- Start Header -->
<header class="rn-header haeder-default black-logo-version header--fixed header--sticky">
    <div class="header-wrapper rn-popup-mobile-menu m--0 row align-items-center">
        <!-- Start Header Left -->
        <div class="col-lg-2 col-6">
            <div class="header-left">
                <div class="logo">
                    <a href="{{ route('front.home') }}">
                        <img src="{{ asset('assets/images/logo/logo.png') }}" alt="logo"
                             style="filter: invert(1) brightness(2); width: 5rem;">
                        <span class="own-name">MAK</span>
                    </a>
                </div>
            </div>
        </div>
        <!-- End Header Left -->
        <!-- Start Header Center -->
        <div class="col-lg-10 col-6">
            <div class="header-center">
                <nav id="sideNav" class="mainmenu-nav navbar-example2 d-none d-xl-block onepagenav">
                    <!-- Start Mainmenu Nav -->
                    <ul class="primary-menu nav nav-pills">
                        <li class="nav-item"><a class="nav-link" href="{{ route('front.home') }}">Home</a></li>
                        <li class="nav-item"><a class="nav-link"
                                                href="{{ route('front.service') }}">Features</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('front.portfolio') }}">Portfolio</a>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('front.resume') }}">Resume</a>
                        </li>
                        <li class="nav-item current"><a class="nav-link" href="{{ route('front.client') }}">Clients</a>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('front.pricing') }}">Pricing</a>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('front.news.area') }}">blog</a>
                        </li>
                        <li class="nav-item"><a class="nav-link"
                                                href="{{ route('front.contact') }}">Contact</a></li>
                    </ul>
                    <!-- End Mainmenu Nav -->
                </nav>
                <!-- Start Header Right  -->
                <div class="header-right">
                    <a class="rn-btn" target="_blank"
                       href="https://themeforest.net/checkout/from_item/33188244?license=regular"><span>BUY NOW</span></a>
                    <div class="hamberger-menu d-block d-xl-none">
                        <i id="menuBtn" class="feather-menu humberger-menu"></i>
                    </div>
                    <div class="close-menu d-block">
                            <span class="closeTrigger">
                            <i data-feather="x"></i>
                        </span>
                    </div>
                </div>
                <!-- End Header Right  -->

            </div>
        </div>
        <!-- End Header Center -->
    </div>
</header>
<!-- End Header Area -->

<!-- Start Popup Mobile Menu  -->
<div class="popup-mobile-menu">
    <div class="inner">
        <div class="menu-top">
            <div class="menu-header">
                <a class="logo" href="{{ route('front.home') }}">
                    <img src="assets/images/logo/logos-circle.png" alt="Personal Portfolio">
                </a>
                <div class="close-button">
                    <button class="close-menu-activation close"><i data-feather="x"></i></button>
                </div>
            </div>
            <p class="discription">Inbio is a personal portfolio template. You can customize all.</p>
        </div>
        <div class="content">
            <ul class="primary-menu nav nav-pills onepagenav">
                <li class="nav-item current"><a class="nav-link smoth-animation active" href="{{ route('front.home') }}">Home</a></li>
                <li class="nav-item"><a class="nav-link smoth-animation" href="{{ route('front.service') }}">Features</a>
                </li>
                <li class="nav-item"><a class="nav-link smoth-animation"
                                        href="{{ route('front.portfolio') }}">Portfolio</a></li>
                <li class="nav-item"><a class="nav-link smoth-animation" href="{{ route('front.resume') }}">Resume</a>
                </li>
                <li class="nav-item"><a class="nav-link smoth-animation" href="{{ route('front.client') }}">Clients</a>
                </li>
                <li class="nav-item"><a class="nav-link smoth-animation" href="{{ route('front.pricing') }}">Pricing</a>
                </li>
                <li class="nav-item"><a class="nav-link smoth-animation" href="{{ route('front.news.area') }}">blog</a>
                </li>
                <li class="nav-item"><a class="nav-link smoth-animation" href="{{ route('front.contact') }}">Contact</a>
                </li>
            </ul>
            <!-- social sharea area -->
            <div class="social-share-style-1 mt--40">
                <span class="title">find with me</span>
                <ul class="social-share d-flex liststyle">
                    <li class="facebook"><a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round" class="feather feather-facebook">
                                <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
                            </svg>
                        </a>
                    </li>
                    <li class="instagram"><a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round" class="feather feather-instagram">
                                <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                                <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                                <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                            </svg>
                        </a>
                    </li>
                    <li class="linkedin"><a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round" class="feather feather-linkedin">
                                <path
                                    d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path>
                                <rect x="2" y="9" width="4" height="12"></rect>
                                <circle cx="4" cy="4" r="2"></circle>
                            </svg>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- end -->
        </div>
    </div>
</div>
<!-- End Popup Mobile Menu  -->

<main class="main-page-wrapper">

    @yield('content')

    <!-- Modal Portfolio Body area Start -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i data-feather="x"></i></span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row align-items-center">

                        <div class="col-lg-6">
                            <div class="portfolio-popup-thumbnail">
                                <div class="image">
                                    <img class="w-100" src="assets/images/portfolio/portfolio-04.jpg" alt="slide">
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="text-content">
                                <h3>
                                    <span>Featured - Design</span> App Design Development.
                                </h3>
                                <p class="mb--30">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate
                                    distinctio assumenda explicabo veniam temporibus eligendi.</p>
                                <p>Consectetur adipisicing elit. Cupiditate distinctio assumenda. dolorum alias suscipit
                                    rerum maiores aliquam earum odit, nihil culpa quas iusto hic minus!</p>
                                <div class="button-group mt--20">
                                    <a href="#" class="rn-btn thumbs-icon">
                                        <span>LIKE THIS</span>
                                        <i data-feather="thumbs-up"></i>
                                    </a>
                                    <a href="#" class="rn-btn">
                                        <span>VIEW PROJECT</span>
                                        <i data-feather="chevron-right"></i>
                                    </a>
                                </div>

                            </div>
                            <!-- End of .text-content -->
                        </div>
                    </div>
                    <!-- End of .row Body-->
                </div>
            </div>
        </div>
    </div>
    <!-- End Modal Portfolio area -->

    <!-- Modal Blog Body area Start -->
    <div class="modal fade" id="exampleModalCenters" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-news" role="document">
            <div class="modal-content">

                <div class="modal-header">
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i data-feather="x"></i></span>
                    </button>
                </div>

                <!-- End of .modal-header -->

                <div class="modal-body">
                    <img src="assets/images/blog/blog-big-01.jpg" alt="news modal" class="img-fluid modal-feat-img">
                    <div class="news-details">
                        <span class="date">2 May, 2021</span>
                        <h2 class="title">Digital Marketo to Their New Office.</h2>
                        <p>Nobis eleifend option congue nihil imperdiet doming id quod mazim placerat
                            facer
                            possim assum.
                            Typi non
                            habent claritatem insitam; est usus legentis in iis qui facit eorum
                            claritatem.
                            Investigationes
                            demonstraverunt
                            lectores legere me lius quod ii legunt saepius. Claritas est etiam processus
                            dynamicus, qui
                            sequitur
                            mutationem consuetudium lectorum.</p>
                        <h4>Nobis eleifend option conguenes.</h4>
                        <p>Mauris tempor, orci id pellentesque convallis, massa mi congue eros, sed
                            posuere
                            massa nunc quis
                            dui.
                            Integer ornare varius mi, in vehicula orci scelerisque sed. Fusce a massa
                            nisi.
                            Curabitur sit
                            amet
                            suscipit nisl. Sed eget nisl laoreet, suscipit enim nec, viverra eros. Nunc
                            imperdiet risus
                            leo,
                            in rutrum erat dignissim id.</p>
                        <p>Ut rhoncus vestibulum facilisis. Duis et lorem vitae ligula cursus venenatis.
                            Class aptent
                            taciti sociosqu
                            ad litora torquent per conubia nostra, per inceptos himenaeos. Nunc vitae
                            nisi
                            tortor. Morbi
                            leo
                            nulla, posuere vel lectus a, egestas posuere lacus. Fusce eleifend hendrerit
                            bibendum. Morbi
                            nec
                            efficitur ex.</p>
                        <h4>Mauris tempor, orci id pellentesque.</h4>
                        <p>Nulla non ligula vel nisi blandit egestas vel eget leo. Praesent fringilla
                            dapibus dignissim.
                            Pellentesque
                            quis quam enim. Vestibulum ultrices, leo id suscipit efficitur, odio lorem
                            rhoncus dolor, a
                            facilisis
                            neque mi ut ex. Quisque tempor urna a nisi pretium, a pretium massa
                            tristique.
                            Nullam in
                            aliquam
                            diam. Maecenas at nibh gravida, ornare eros non, commodo ligula. Sed
                            efficitur
                            sollicitudin
                            auctor.
                            Quisque nec imperdiet purus, in ornare odio. Quisque odio felis, vestibulum
                            et.</p>
                    </div>

                    <!-- Comment Section Area Start -->
                    <div class="comment-inner">
                        <h3 class="title mb--40 mt--50">Leave a Reply</h3>
                        <form action="#">
                            <div class="row">
                                <div class="col-lg-6 col-md-12 col-12">
                                    <div class="rnform-group"><input type="text" placeholder="Name">
                                    </div>
                                    <div class="rnform-group"><input type="email" placeholder="Email">
                                    </div>
                                    <div class="rnform-group"><input type="text" placeholder="Website">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 col-12">
                                    <div class="rnform-group">
                                        <textarea placeholder="Comment"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <a class="rn-btn" href="#"><span>SUBMIT NOW</span></a>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- Comment Section End -->
                </div>
                <!-- End of .modal-body -->
            </div>
        </div>
    </div>
    <!-- End Modal Blog area -->

    <!-- Back to  top Start -->
    <div class="backto-top">
        <div>
            <i data-feather="arrow-up"></i>
        </div>
    </div>
    <!-- Back to top end -->

    <!-- Start Right Demo  -->
    <div class="rn-right-demo">
        <button class="demo-button">
            <span class="text">Demos</span>
        </button>
    </div>
    <!-- End Right Demo  -->

    <!-- Start Modal Area  -->
    <div class="demo-modal-area">
        <div class="wrapper">
            <div class="close-icon">
                <button class="demo-close-btn"><span class="feather-x"></span></button>
            </div>
            <div class="rn-modal-inner">
                <div class="demo-top text-center">
                    <h4 class="title">MAK</h4>
                    <p class="subtitle">Its a personal portfolio template. You can built any personal website
                        easily.</p>
                </div>
                <ul class="popuptab-area nav nav-tabs" id="popuptab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active demo-dark" id="demodark-tab" data-bs-toggle="tab" href="#demodark"
                           role="tab" aria-controls="demodark" aria-selected="true">Dark Demo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link demo-light" id="demolight-tab" data-bs-toggle="tab" href="#demolight"
                           role="tab" aria-controls="demolight" aria-selected="false">Light Demo</a>
                    </li>
                </ul>
                <div class="tab-content" id="popuptabContent">
                    <div class="tab-pane show active" id="demodark" role="tabpanel" aria-labelledby="demodark-tab">
                        <div class="content">
                            <div class="row">

                                <!-- Start Single Content  -->
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="single-demo">
                                        <div class="inner">
                                            <div class="thumbnail">
                                                <a href="{{ route('front.home') }}">
                                                    <img class="w-100" src="assets/images/demo/main-demo.png"
                                                         alt="Personal Portfolio">
                                                    <span class="overlay-content">
                                                    <span class="overlay-text">View Demo <i
                                                            class="feather-external-link"></i></span>
                                                        </span>
                                                </a>
                                            </div>
                                            <div class="inner">
                                                <h3 class="title"><a href="{{ route('front.home') }}">Main Demo</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Content  -->

                                <!-- Start Single Content  -->
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="single-demo">
                                        <div class="inner badge-2">
                                            <div class="thumbnail">
                                                <a href="index-technician.html">
                                                    <img class="w-100" src="assets/images/demo/index-technician.png"
                                                         alt="Personal Portfolio">
                                                    <span class="overlay-content">
                                                    <span class="overlay-text">View Demo <i
                                                            class="feather-external-link"></i></span>
                                                        </span>
                                                </a>
                                            </div>
                                            <div class="inner">
                                                <h3 class="title"><a href="index-technician.html">Technician</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Content  -->

                                <!-- Start Single Content  -->
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="single-demo">
                                        <div class="inner badge-2">
                                            <div class="thumbnail">
                                                <a href="index-model.html">
                                                    <img class="w-100" src="assets/images/demo/home-model-v2.png"
                                                         alt="Personal Portfolio">
                                                    <span class="overlay-content">
                                                    <span class="overlay-text">View Demo <i
                                                            class="feather-external-link"></i></span>
                                                        </span>
                                                </a>
                                            </div>
                                            <div class="inner">
                                                <h3 class="title"><a href="index-model.html">Model</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Content  -->

                                <!-- Start Single Content  -->
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="single-demo">
                                        <div class="inner badge-1">
                                            <div class="thumbnail">
                                                <a href="home-consulting.html">
                                                    <img class="w-100" src="assets/images/demo/home-consulting.png"
                                                         alt="Personal Portfolio">
                                                    <span class="overlay-content">
                                                    <span class="overlay-text">View Demo <i
                                                            class="feather-external-link"></i></span>
                                                        </span>
                                                </a>
                                            </div>
                                            <div class="inner">
                                                <h3 class="title"><a href="home-consulting.html">Consulting</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Content  -->

                                <!-- Start Single Content  -->
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="single-demo">
                                        <div class="inner badge-1">
                                            <div class="thumbnail">
                                                <a href="fashion-designer.html">
                                                    <img class="w-100" src="assets/images/demo/fashion-designer.png"
                                                         alt="Personal Portfolio">
                                                    <span class="overlay-content">
                                                    <span class="overlay-text">View Demo <i
                                                            class="feather-external-link"></i></span>
                                                        </span>
                                                </a>
                                            </div>
                                            <div class="inner">
                                                <h3 class="title"><a href="fashion-designer.html">Fashion Designer</a>
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Content  -->

                                <!-- Start Single Content  -->
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="single-demo">
                                        <div class="inner">
                                            <div class="thumbnail">
                                                <a href="index-developer.html">
                                                    <img class="w-100" src="assets/images/demo/developer.png"
                                                         alt="Personal Portfolio">
                                                    <span class="overlay-content">
                                                    <span class="overlay-text">View Demo <i
                                                            class="feather-external-link"></i></span>
                                                        </span>
                                                </a>
                                            </div>
                                            <div class="inner">
                                                <h3 class="title"><a href="index-developer.html">Developer</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Content  -->

                                <!-- Start Single Content  -->
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="single-demo">
                                        <div class="inner">
                                            <div class="thumbnail">
                                                <a href="instructor-fitness.html">
                                                    <img class="w-100" src="assets/images/demo/instructor-fitness.png"
                                                         alt="Personal Portfolio">
                                                    <span class="overlay-content">
                                                    <span class="overlay-text">View Demo <i
                                                            class="feather-external-link"></i></span>
                                                        </span>
                                                </a>
                                            </div>
                                            <div class="inner">
                                                <h3 class="title"><a href="instructor-fitness.html">Fitness
                                                        Instructor</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Content  -->
                                <!-- Start Single Content  -->
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="single-demo">
                                        <div class="inner badge-1">
                                            <div class="thumbnail">
                                                <a href="home-web-Developer.html">
                                                    <img class="w-100" src="assets/images/demo/home-model.png"
                                                         alt="Personal Portfolio">
                                                    <span class="overlay-content">
                                                    <span class="overlay-text">View Demo <i
                                                            class="feather-external-link"></i></span>
                                                        </span>
                                                </a>
                                            </div>
                                            <div class="inner">
                                                <h3 class="title"><a href="home-web-Developer.html">Web Developer</a>
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Content  -->

                                <!-- Start Single Content  -->
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="single-demo">
                                        <div class="inner">
                                            <div class="thumbnail">
                                                <a href="home-designer.html">
                                                    <img class="w-100" src="assets/images/demo/home-video.png"
                                                         alt="Personal Portfolio">
                                                    <span class="overlay-content">
                                                    <span class="overlay-text">View Demo <i
                                                            class="feather-external-link"></i></span>
                                                        </span>
                                                </a>
                                            </div>
                                            <div class="inner">
                                                <h3 class="title"><a href="home-designer.html">Designer</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Content  -->

                                <!-- Start Single Content  -->
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="single-demo">
                                        <div class="inner">
                                            <div class="thumbnail">
                                                <a href="home-content-writer.html">
                                                    <img class="w-100" src="assets/images/demo/text-rotet.png"
                                                         alt="Personal Portfolio">
                                                    <span class="overlay-content">
                                                    <span class="overlay-text">View Demo <i
                                                            class="feather-external-link"></i></span>
                                                        </span>
                                                </a>
                                            </div>
                                            <div class="inner">
                                                <h3 class="title"><a href="home-content-writer.html">Content Writter</a>
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Content  -->

                                <!-- Start Single Content  -->
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="single-demo">
                                        <div class="inner">
                                            <div class="thumbnail">
                                                <a href="home-instructor.html">
                                                    <img class="w-100" src="assets/images/demo/index-boxed.png"
                                                         alt="Personal Portfolio">
                                                    <span class="overlay-content">
                                                    <span class="overlay-text">View Demo <i
                                                            class="feather-external-link"></i></span>
                                                        </span>
                                                </a>
                                            </div>
                                            <div class="inner">
                                                <h3 class="title"><a href="home-instructor.html">Instructor</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Content  -->

                                <!-- Start Single Content  -->
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="single-demo">
                                        <div class="inner">
                                            <div class="thumbnail">
                                                <a href="home-freelancer.html">
                                                    <img class="w-100" src="assets/images/demo/home-sticky.png"
                                                         alt="Personal Portfolio">
                                                    <span class="overlay-content">
                                                    <span class="overlay-text">View Demo <i
                                                            class="feather-external-link"></i></span>
                                                        </span>
                                                </a>
                                            </div>
                                            <div class="inner">
                                                <h3 class="title"><a href="home-freelancer.html">Freelancer</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Content  -->

                                <!-- Start Single Content  -->
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="single-demo">
                                        <div class="inner">
                                            <div class="thumbnail">
                                                <a href="home-photographer.html">
                                                    <img class="w-100" src="assets/images/demo/index-bg-image.png"
                                                         alt="Personal Portfolio">
                                                    <span class="overlay-content">
                                                    <span class="overlay-text">View Demo <i
                                                            class="feather-external-link"></i></span>
                                                        </span>
                                                </a>
                                            </div>
                                            <div class="inner">
                                                <h3 class="title"><a href="home-photographer.html">Photographer</a>
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Content  -->

                                <!-- Start Single Content  -->
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="single-demo">
                                        <div class="inner">
                                            <div class="thumbnail">
                                                <a href="index-politician.html">
                                                    <img class="w-100" src="assets/images/demo/front-end.png"
                                                         alt="Personal Portfolio">
                                                    <span class="overlay-content">
                                                    <span class="overlay-text">View Demo <i
                                                            class="feather-external-link"></i></span>
                                                        </span>
                                                </a>
                                            </div>
                                            <div class="inner">
                                                <h3 class="title"><a href="index-politician.html">Politician</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Content  -->

                                <!-- Start Single Content  -->
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="single-demo coming-soon">
                                        <div class="inner">
                                            <div class="thumbnail">
                                                <a href="#">
                                                    <img class="w-100" src="assets/images/demo/coming-soon.png"
                                                         alt="Personal Portfolio">
                                                </a>
                                            </div>
                                            <div class="inner">
                                                <h3 class="title"><a href="#">Accountant</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Content  -->
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane" id="demolight" role="tabpanel" aria-labelledby="demolight-tab">
                        <div class="content">
                            <div class="row">

                                <!-- Start Single Content  -->
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="single-demo">
                                        <div class="inner">
                                            <div class="thumbnail">
                                                <a href="index-white-version.html">
                                                    <img class="w-100"
                                                         src="assets/images/demo/main-demo-white-version.png"
                                                         alt="Personal Portfolio">
                                                    <span class="overlay-content">
                                                    <span class="overlay-text">View Demo <i
                                                            class="feather-external-link"></i></span>
                                                        </span>
                                                </a>
                                            </div>
                                            <div class="inner">
                                                <h3 class="title"><a href="index-white-version.html">Main Demo</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Content  -->

                                <!-- Start Single Content  -->
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="single-demo">
                                        <div class="inner badge-2">
                                            <div class="thumbnail">
                                                <a href="index-technician-white-version.html">
                                                    <img class="w-100"
                                                         src="assets/images/demo/index-technician-white-version.png"
                                                         alt="Personal Portfolio">
                                                    <span class="overlay-content">
                                                    <span class="overlay-text">View Demo <i
                                                            class="feather-external-link"></i></span>
                                                        </span>
                                                </a>
                                            </div>
                                            <div class="inner">
                                                <h3 class="title"><a href="index-technician-white-version.html">Technician</a>
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Content  -->

                                <!-- Start Single Content  -->
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="single-demo">
                                        <div class="inner badge-2">
                                            <div class="thumbnail">
                                                <a href="index-model-white-version.html">
                                                    <img class="w-100" src="assets/images/demo/home-model-v2-white.png"
                                                         alt="Personal Portfolio">
                                                    <span class="overlay-content">
                                                    <span class="overlay-text">View Demo <i
                                                            class="feather-external-link"></i></span>
                                                        </span>
                                                </a>
                                            </div>
                                            <div class="inner">
                                                <h3 class="title"><a href="index-model-white-version.html">Model</a>
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Content  -->

                                <!-- Start Single Content  -->
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="single-demo">
                                        <div class="inner badge-1">
                                            <div class="thumbnail">
                                                <a href="home-consulting-white-version.html">
                                                    <img class="w-100"
                                                         src="assets/images/demo/home-consulting-white-version.png"
                                                         alt="Personal Portfolio">
                                                    <span class="overlay-content">
                                                    <span class="overlay-text">View Demo <i
                                                            class="feather-external-link"></i></span>
                                                        </span>
                                                </a>
                                            </div>
                                            <div class="inner">
                                                <h3 class="title"><a href="home-consulting-white-version.html">Consulting</a>
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Content  -->

                                <!-- Start Single Content  -->
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="single-demo">
                                        <div class="inner badge-1">
                                            <div class="thumbnail">
                                                <a href="fashion-designer-white-version.html">
                                                    <img class="w-100"
                                                         src="assets/images/demo/fashion-designer-white-version.png"
                                                         alt="Personal Portfolio">
                                                    <span class="overlay-content">
                                                    <span class="overlay-text">View Demo <i
                                                            class="feather-external-link"></i></span>
                                                        </span>
                                                </a>
                                            </div>
                                            <div class="inner">
                                                <h3 class="title"><a href="fashion-designer-white-version.html">Fashion
                                                        Designer</a>
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Content  -->

                                <!-- Start Single Content  -->
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="single-demo">
                                        <div class="inner">
                                            <div class="thumbnail">
                                                <a href="index-developer-white-version.html">
                                                    <img class="w-100"
                                                         src="assets/images/demo/developer-white-version.png"
                                                         alt="Personal Portfolio">
                                                    <span class="overlay-content">
                                                    <span class="overlay-text">View Demo <i
                                                            class="feather-external-link"></i></span>
                                                        </span>
                                                </a>
                                            </div>
                                            <div class="inner">
                                                <h3 class="title"><a
                                                        href="index-developer-white-version.html">Developer</a>
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Content  -->
                                <!-- Start Single Content  -->
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="single-demo">
                                        <div class="inner">
                                            <div class="thumbnail">
                                                <a href="instructor-fitness-white-version.html">
                                                    <img class="w-100"
                                                         src="assets/images/demo/instructor-fitness-white-version.png"
                                                         alt="Personal Portfolio">
                                                    <span class="overlay-content">
                                                    <span class="overlay-text">View Demo <i
                                                            class="feather-external-link"></i></span>
                                                        </span>
                                                </a>
                                            </div>
                                            <div class="inner">
                                                <h3 class="title"><a href="instructor-fitness-white-version.html">Fitness
                                                        Instructor</a>
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Content  -->
                                <!-- Start Single Content  -->
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="single-demo">
                                        <div class="inner badge-1">
                                            <div class="thumbnail">
                                                <a href="home-web-developer-white-version.html">
                                                    <img class="w-100"
                                                         src="assets/images/demo/home-model-white-version.png"
                                                         alt="Personal Portfolio">
                                                    <span class="overlay-content">
                                                    <span class="overlay-text">View Demo <i
                                                            class="feather-external-link"></i></span>
                                                        </span>
                                                </a>
                                            </div>
                                            <div class="inner">
                                                <h3 class="title"><a href="home-web-developer-white-version.html">Web
                                                        Developer</a>
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Content  -->

                                <!-- Start Single Content  -->
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="single-demo">
                                        <div class="inner">
                                            <div class="thumbnail">
                                                <a href="home-designer-white-version.html">
                                                    <img class="w-100"
                                                         src="assets/images/demo/home-video-white-version.png"
                                                         alt="Personal Portfolio">
                                                    <span class="overlay-content">
                                                    <span class="overlay-text">View Demo <i
                                                            class="feather-external-link"></i></span>
                                                        </span>
                                                </a>
                                            </div>
                                            <div class="inner">
                                                <h3 class="title"><a
                                                        href="home-designer-white-version.html">Designer</a>
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Content  -->

                                <!-- Start Single Content  -->
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="single-demo">
                                        <div class="inner">
                                            <div class="thumbnail">
                                                <a href="home-content-writer-white-version.html">
                                                    <img class="w-100"
                                                         src="assets/images/demo/text-rotet-white-version.png"
                                                         alt="Personal Portfolio">
                                                    <span class="overlay-content">
                                                    <span class="overlay-text">View Demo <i
                                                            class="feather-external-link"></i></span>
                                                        </span>
                                                </a>
                                            </div>
                                            <div class="inner">
                                                <h3 class="title"><a href="home-content-writer-white-version.html">Content
                                                        Writter</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Content  -->

                                <!-- Start Single Content  -->
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="single-demo">
                                        <div class="inner">
                                            <div class="thumbnail">
                                                <a href="home-instructor-white-version.html">
                                                    <img class="w-100"
                                                         src="assets/images/demo/index-boxed-white-version.png"
                                                         alt="Personal Portfolio">
                                                    <span class="overlay-content">
                                                    <span class="overlay-text">View Demo <i
                                                            class="feather-external-link"></i></span>
                                                        </span>
                                                </a>
                                            </div>
                                            <div class="inner">
                                                <h3 class="title"><a href="home-instructor-white-version.html">Instructor</a>
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Content  -->

                                <!-- Start Single Content  -->
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="single-demo">
                                        <div class="inner">
                                            <div class="thumbnail">
                                                <a href="home-freelancer-white-version.html">
                                                    <img class="w-100"
                                                         src="assets/images/demo/home-sticky-white-version.png"
                                                         alt="Personal Portfolio">
                                                    <span class="overlay-content">
                                                    <span class="overlay-text">View Demo <i
                                                            class="feather-external-link"></i></span>
                                                        </span>
                                                </a>
                                            </div>
                                            <div class="inner">
                                                <h3 class="title"><a href="home-freelancer-white-version.html">Freelancer</a>
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Content  -->

                                <!-- Start Single Content  -->
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="single-demo">
                                        <div class="inner">
                                            <div class="thumbnail">
                                                <a href="home-photographer-white-version.html">
                                                    <img class="w-100"
                                                         src="assets/images/demo/index-bg-image-white-version.png"
                                                         alt="Personal Portfolio">
                                                    <span class="overlay-content">
                                                    <span class="overlay-text">View Demo <i
                                                            class="feather-external-link"></i></span>
                                                        </span>
                                                </a>
                                            </div>
                                            <div class="inner">
                                                <h3 class="title"><a href="home-photographer-white-version.html">Photographer</a>
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Content  -->

                                <!-- Start Single Content  -->
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="single-demo">
                                        <div class="inner">
                                            <div class="thumbnail">
                                                <a href="index-politician-white-version.html">
                                                    <img class="w-100"
                                                         src="assets/images/demo/front-end-white-version.png"
                                                         alt="Personal Portfolio">
                                                    <span class="overlay-content">
                                                    <span class="overlay-text">View Demo <i
                                                            class="feather-external-link"></i></span>
                                                        </span>
                                                </a>
                                            </div>
                                            <div class="inner">
                                                <h3 class="title"><a href="index-politician-white-version.html">Politician</a>
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Content  -->

                                <!-- Start Single Content  -->
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="single-demo coming-soon">
                                        <div class="inner">
                                            <div class="thumbnail">
                                                <a href="#">
                                                    <img class="w-100" src="assets/images/demo/coming-soon.png"
                                                         alt="Personal Portfolio">
                                                </a>
                                            </div>
                                            <div class="inner">
                                                <h3 class="title"><a href="#">Accountant</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Content  -->

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Modal Area  -->

</main>

<!-- Start Footer Area -->
<div class="rn-footer-area rn-section-gap section-separator">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="footer-area text-center">

                    <div class="logo">
                        <a href="{{ route('front.home') }}">
                            <img src="{{ asset('assets/images/logo/logo.png') }}" alt="logo"
                                 style="filter: invert(1) brightness(2); width: 5rem;">
                        </a>
                    </div>

                    <p class="description mt--30">Copyright © 2022. All rights reserved by
                        <a target="_blank"
                           href="mailto:adilm0616@gmail.com">Muhammad Adil Khan.</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Footer Area -->

<!-- JS ============================================ -->
<script src="assets/js/vendor/jquery.js"></script>
<script src="assets/js/vendor/modernizer.min.js"></script>
<script src="assets/js/vendor/feather.min.js"></script>
<script src="assets/js/vendor/slick.min.js"></script>
<script src="assets/js/vendor/bootstrap.js"></script>
<script src="assets/js/vendor/text-type.js"></script>
<script src="assets/js/vendor/wow.js"></script>
<script src="assets/js/vendor/aos.js"></script>
<script src="assets/js/vendor/particles.js"></script>
<script src="assets/js/vendor/jquery-one-page-nav.js"></script>
<!-- main JS -->
<script src="assets/js/main.js"></script>

<script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
</body>

</html>
