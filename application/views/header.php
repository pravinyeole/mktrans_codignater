<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>MK Transport Company</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="HTML, CSS, JavaScript">
    <meta name="description" content="MK Trasnsport Company">
    <meta name="author" content="Mayur Tidke">
  

    <!-- Favicon -->
    <link href="<?= site_url().'assets/img/logo.png';?>" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Ionicons CSS -->
    <link rel="stylesheet" href="<?= site_url().'assets/css/ionicons.min.css';?>">

    <!-- Icomoon CSS -->
    <link rel="stylesheet" href="<?= site_url().'assets/css/vendor/icomoon.min.css';?>">
    <!-- Swiper slider CSS -->
    <link rel="stylesheet" href="<?= site_url().'assets/css/plugins/swiper.min.css';?>">

    <!-- Libraries Stylesheet -->
    <link href="<?= site_url().'assets/lib/animate/animate.min.css';?>" rel="stylesheet">
    <link href="<?= site_url().'assets/lib/owlcarousel/assets/owl.carousel.min.css';?>" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?= site_url().'assets/css/bootstrap.min.css';?>" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?= site_url().'assets/css/style.css';?>" rel="stylesheet">
</head>


<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

    <!--  header area -->
    <div class="header-area header-sticky fixed-top">
        <div class="header-area__desktop">
            <!-- header top bar -->
            <div class="header-top-bar">
                <div class="container-fluid container-fluid--cp-60">
                    <div class="row align-items-center">
                        <div class="col-lg-8">
                            <!-- top bar left -->
                            <div class="top-bar-left-wrapper">
                                <ul class="topbar-menu">
                                    <li><a href="mailto:info@mktransport.in"><i class="ion-ios-email-outline"></i> mktransportcompany1199@gmail.com</a></li>
                                    <li><a href="tel:+912536622907" class="d-inline-block"><i class="ion-android-call"></i> 7588554482</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <!-- top bar right -->
                            <div class="top-bar-right-wrapper">
                                <ul class="topbar-info">
                                    <li><i class="ion-clock"></i> 24 Hr</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of header top bar -->
            <!-- header navigation area -->
            <div class="header-navigation-area">
                <div class="container-fluid container-fluid--cp-60">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="header-navigation-wrapper">
                                <!-- logo -->
                                <div class="logo">
                                    <a href="<?= site_url()?>">
                                        <img src="<?= site_url('assets/img/logo.png')?>" class="img-fluid" alt="">
                                    </a>
                                </div>

                                <!-- header navigation -->
                                <div class="header-navigation border-left border-right">
                                    <div class="header-navigation__nav">
                                        <nav>
                                            <ul>
                                                <li class="active"><a href="<?= site_url()?>">HOME</a></li>
                                                <li><a href="<?= site_url().'frontend/about'?>">About us</a></li>
                                                <li><a href="<?= site_url().'frontend/services'?>">Services</a></li>
                                                <li><a href="<?= site_url().'frontend/contact';?>">Contact Us</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                    <div class="header-navigation__contact">
                                        <div class="header-navigation__contact__image">
                                            <i class="ion-ios-telephone-outline"></i>
                                        </div>
                                        <div class="header-navigation__contact__content">
                                            <span class="text">Call us for any question</span>
                                            <a href="tel:+917588554482"><h4 class="sub-text">(+91)758.855.4482</h4></a>
                                        </div>
                                    </div>
                                </div>

                                <!-- header search -->
                                <!-- <div class="header-search d-flex align-items-end justify-content-end">
                                    <div class="social-links">
                                        <ul>
                                            <li><a href="#" data-tippy="Facebook" data-tippy-inertia="false" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder__yellow" data-tippy-placement="bottom"><i class="ion-social-facebook"></i></a>
                                            </li>
                                            <li><a href="#" data-tippy="Twitter" data-tippy-inertia="false" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder__yellow" data-tippy-placement="bottom"><i class="ion-social-twitter"></i></a>
                                            </li>
                                            <li><a href="#" data-tippy="Google plus" data-tippy-inertia="false" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder__yellow" data-tippy-placement="bottom"><i class="ion-social-googleplus"></i></a></li>
                                            <li><a href="#" data-tippy="TouTube" data-tippy-inertia="false" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder__yellow" data-tippy-placement="bottom"><i class="ion-social-youtube"></i></a>
                                            </li>
                                            <li><a href="#" data-tippy="Instagram" data-tippy-inertia="false" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder__yellow" data-tippy-placement="bottom"><i class="ion-social-instagram"></i></a></li>
                                        </ul>
                                    </div>
                                    <a href="#" class="ht-btn ht-btn--default d-inline-block text-white">GET A QUOTE</a>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of header navigation area-->
        </div>
        <div class="header-area__mobile">
            <!-- mobile menu -->
            <div class="mobile-menu-area">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-4 col-sm-6 col-5">
                            <div class="logo">
                                <a href="index.html">
                                    <img src="<?= site_url('assets/img/logo.png') ?>" class="img-fluid" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-8 col-sm-6 col-7">
                            <div class="mobile-menu-content">
                                <div class="social-links d-none d-md-block">
                                    <ul>
                                        <li><a href="#" data-tippy="Facebook" data-tippy-inertia="false" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder__yellow" data-tippy-placement="bottom"><i class="ion-social-facebook"></i></a>
                                        </li>
                                        <li><a href="#" data-tippy="Twitter" data-tippy-inertia="false" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder__yellow" data-tippy-placement="bottom"><i class="ion-social-twitter"></i></a>
                                        </li>
                                        <li><a href="#" data-tippy="Google plus" data-tippy-inertia="false" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder__yellow" data-tippy-placement="bottom"><i class="ion-social-googleplus"></i></a></li>
                                        <li><a href="#" data-tippy="TouTube" data-tippy-inertia="false" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder__yellow" data-tippy-placement="bottom"><i class="ion-social-youtube"></i></a>
                                        </li>
                                        <li><a href="#" data-tippy="Instagram" data-tippy-inertia="false" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder__yellow" data-tippy-placement="bottom"><i class="ion-social-instagram"></i></a></li>
                                    </ul>
                                </div>
                                <div class="mobile-navigation-icon" id="mobile-menu-trigger">
                                    <i></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--  End of header area  -->