<?php
    include "libs/load.php";

    $conn = Database::getConnect();
    $category = Operations::getCateChecker($conn);
?>

<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Jaysun Exports</title>
    <meta name="robots" content="noindex, follow">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="images/homepage-6/header/logo-b.png">
    <!-- CSS
         ============================================ -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Fontawesome -->
    <link rel="stylesheet" href="css/fontawesome.css">
    <!-- Flaticon -->
    <link rel="stylesheet" href="css/flaticon.css">
    <!-- optico Icons -->
    <link rel="stylesheet" href="css/pbminfotech-base-icons.css">
    <!-- Themify Icons -->
    <link rel="stylesheet" href="css/themify-icons.css">
    <!-- Slick -->
    <link rel="stylesheet" href="css/swiper.min.css">
    <!-- Magnific -->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <!-- AOS -->
    <link rel="stylesheet" href="css/aos.css">
    <!-- Shortcode CSS -->
    <link rel="stylesheet" href="css/shortcode.css">
    <!-- Base CSS -->
    <link rel="stylesheet" href="css/base.css">
    <!-- root CSS -->
    <link rel="stylesheet" href="css/demo-3.css">
    <!-- Style CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- REVOLUTION STYLE SHEETS -->
    <link rel="stylesheet" type="text/css" href="revolution/rs6.css">
    <!-- Slider -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <!-- page wrapper -->
    <div class="page-wrapper">

        <!-- Header Main Area -->
        <header class="site-header header-style-6">
            <div class="pre-header">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="pbmit-pre-header-left">
                                    <ul class="pbmit-contact-info">
                                        <li><i class="pbmit-base-icon-location"></i>Coimbatore
                                        </li>
                                        <li><i class="pbmit-base-icon-mail-alt"></i> <a
                                                href="mailto: jaysunexportsllc@gmail.com"
                                                style="color:white;">jaysunexportsllc@gmail.com</a>
                                        </li>
                                        <li><i class="pbmit-base-icon-phone-volume-solid"></i><a href="tel: 9865096783"
                                                style="color:white;">+91 98650 96783</a></li>
                                        <li><i class="pbmit-base-icon-phone-volume-solid"></i><a href="tel:  6380216159"
                                                style="color:white;">+91 63802 16159</a></li>
                                    </ul>
                                </div>
                                <div class="pbmit-pre-header-right">
                                    <ul class="pbmit-social-links">
                                        <li class="pbmit-social-li pbmit-social-facebook">
                                            <a href="https://www.facebook.com/" target="_blank">
                                                <span><i class="pbmit-base-icon-facebook-squared"></i></span>
                                            </a>
                                        </li>
                                        <li class="pbmit-social-li pbmit-social-instagram">
                                            <a href="https://www.instagram.com/" target="_blank">
                                                <span><i class="pbmit-base-icon-instagram"></i></span>
                                            </a>
                                        </li>
                                        <li class="pbmit-social-li pbmit-social-youtube">
                                            <a href="https://www.youtube.com/" target="_blank">
                                                <span><i class="pbmit-base-icon-youtube-play"></i></span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="site-header-menu">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="d-flex justify-content-between align-items-center" style="height:90px;">
                                <div class="site-branding">
                                    <a href="index.php">
                                        <img class="logo-img" alt="colza" src="images/homepage-6/header/logo-b.png">
                                    </a>
                                </div>
                                <div class="site-navigation ml-auto">
                                    <nav class="main-menu navbar-expand-xl navbar-light">
                                        <div class="navbar-header">
                                            <!-- Toggle Button -->
                                            <button class="navbar-toggler" type="button">
                                                <i class="pbmit-base-icon-menu-1"></i>
                                            </button>
                                        </div>
                                        <div class="pbmit-mobile-menu-bg"></div>
                                        <div class="collapse navbar-collapse clearfix show" id="pbmit-menu">
                                            <div class="pbmit-menu-wrap">
                                                <span class="closepanel">
                                                    <i class="pbmit-base-icon-cancel"></i>
                                                </span>
                                                <ul class="navigation clearfix">
                                                    <li><a href="index.php">Home</a></li>
                                                    <li><a href="about.php">About Us</a></li>
                                                    <li class="dropdown active">
													    <a href="product.php">Product</a>
                                                        <ul>
                                                            <?php foreach ($category as $cate) { ?>												
                                                            <li><a href="product.php?data=<?= $cate['category'] ?>"><?= $cate['category'] ?></a></li>
                                                            <?php } ?>
                                                        </ul>
												    </li>
                                                    <li><a href="service.php">Services</a></li>
                                                    <li><a href="certificate.php">Certificates</a></li>
                                                    <li><a href="contact.php">Contact Us</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </nav>
                                </div>
                                <div class="pbmit-right-box">
                                    <a href="https://wa.me/919865096783" class="pbmit-btn pbmit-btn-hover-secondary">
                                        <span>Enquiry</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </header>
        <!-- Header Main Area End Here -->