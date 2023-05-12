<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title><?=$titre?></title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="<?=img_url('favicon.ico')?>" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;500&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?=lib_url('animate/animate.min.css')?>" rel="stylesheet">
    <link href="<?=lib_url('owlcarousel/assets/owl.carousel.min.css')?>" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?=css_url('bootstrap.min')?>" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?=css_url('style')?>" rel="stylesheet">

    <!-- Vendor Stylesheet -->
    <link href="<?=css_url('faq')?>" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-info" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <div class="container-fluid fixed-top px-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="top-bar row gx-0 align-items-center d-none d-lg-flex">
            <div class="col-lg-6 px-5 text-start">
                <small><i class="fa fa-map-marker-alt text-info me-2"></i>90000 Belfort, France</small>
            </div>
            <div class="col-lg-6 px-5 text-end">
                <small><i class="fa fa-envelope text-info me-2"></i>tricom@gmail.com</small>
                <small class="ms-4"><i class="fa fa-phone-alt text-info me-2"></i>+33 7 52 08 06 02</small>
            </div>
        </div>

        <nav class="navbar navbar-expand-lg navbar-light py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
            <a href="<?=base_url();?>" class="navbar-brand ms-4 ms-lg-0">
                <h1 class="display-5 text-info m-0" >Tricom-Coiffure</h1>
            </a>
            <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse"
                data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto p-4 p-lg-0">
                    <a href="<?=base_url();?>" class="nav-item nav-link active">Accueil</a>
                    <a href="about.html" class="nav-item nav-link">Coiffure</a>
                    <a href="service.html" class="nav-item nav-link">Boutique</a>
                    <a href="contact.html" class="nav-item nav-link">A propos</a>
                    <a href="contact.html" class="nav-item nav-link">Contacts</a>
                    <a href="login-form.php" class="nav-item nav-link onglet-connexion-mobile">Connexion</a>
                </div>
                <div class="d-none d-lg-flex ms-2">
                    <a href="login-form.php" class="btn btn-info onglet-connexion-pc">Connexion</a>
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->