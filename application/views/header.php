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
    <link href="<?= site_url('assets/img/logo.png');?>" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?= site_url('assets/lib/animate/animate.min.css');?>" rel="stylesheet">
    <link href="<?= site_url('assets/lib/owlcarousel/assets/owl.carousel.min.css');?>" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?= site_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?= site_url('assets/css/style.css');?>" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow border-top border-5 border-primary sticky-top p-0">
        <a href="#" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h2 class="mb-2 text-white"><img src="<?= site_url('assets/img/logo.png');?>" alt="" class="logo"></h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="<?= site_url('/');?>" class="nav-item nav-link active">Home</a>
                <!-- <a href="<?= site_url('index.php/frontend/about');?>" class="nav-item nav-link">About</a> -->
                <a href="<?= site_url('index.php/frontend/services');?>" class="nav-item nav-link">Services</a>
                <a href="<?= site_url('index.php/frontend/contact');?>" class="nav-item nav-link">Contact</a>
            </div>
            <h4 class="m-0 pe-lg-5 d-none d-lg-block"><i class="fa fa-headphones text-primary me-3"></i>+91 75885 54482</h4>
        </div>
    </nav>
    <!-- Navbar End -->
