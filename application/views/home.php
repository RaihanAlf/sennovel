<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">

        <title>SenNovel</title>
        <meta content="" name="description">
        <meta content="" name="keywords">
        <script src="https://code.iconify.design/2/2.0.3/iconify.min.js"></script>

        <!-- Favicons -->
        <link href="<?php echo base_url('templates/img/favicon.jpg'); ?>" rel="icon">
        <link href="<?php echo base_url('templates/img/apple-touch-icon.png'); ?>" rel="apple-touch-icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

        <!-- Vendor CSS Files -->
        <link href="<?php echo base_url('templates/assets/aos/aos.css'); ?>" rel="stylesheet">
        <link href="<?php echo base_url('templates/assets/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
        <link href="<?php echo base_url('templates/assets/bootstrap-icons/bootstrap-icons.css'); ?>" rel="stylesheet">
        <link href="<?php echo base_url('templates/assets/boxicons/css/boxicons.min.css'); ?>" rel="stylesheet">
        <link href="<?php echo base_url('templates/assets/glightbox/css/glightbox.min.css'); ?>" rel="stylesheet">
        <link href="<?php echo base_url('templates/assets/remixicon/remixicon.css'); ?>" rel="stylesheet">
        <link href="<?php echo base_url('templates/assets/swiper/swiper-bundle.min.css'); ?>" rel="stylesheet">

        <!-- Template Main CSS File -->
        <link href="<?php echo base_url('templates/css/main.css'); ?>" rel="stylesheet">

        <!-- =======================================================
        * Template Name: Presento - v3.3.0
        * Template URL: https://bootstrapmade.com/presento-bootstrap-corporate-template/
        * Author: BootstrapMade.com
        * License: https://bootstrapmade.com/license/
        ======================================================== -->
    </head>

    <body>  
        <!-- ======= Header ======= -->
        <header id="header" class="fixed-top d-flex align-items-center">
            <div class="container d-flex align-items-center">
            <h1 class="logo me-auto"><a href="<?php echo site_url('welcome'); ?>"><span>Sen</span>Novel</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt=""></a>-->

            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li><a class="nav-link scrollto active" href="<?php echo site_url('welcome'); ?>">Home</a></li>
                    <li class="dropdown"><a href="#"><span>Stories</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>                            
                            <?php
                                foreach ($data as $book){
                            ?>
                            <li><a href="<?php echo site_url('welcome/detail/'.$book['id']); ?>"><?= $book['judul']; ?></a></li>                                    
                            <?php } ?>                                
                        </ul>
                    </li>
                    </li>
                    <li><a href="#" style="color: #fff">About Me</a></li>
                    <!-- <li><a href="#" style="color: #fff">About Me</a></li> -->
                    <li><a href="#hero">About Me</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

            <!-- <a href="<?php echo site_url('auth'); ?>" class="get-started-btn scrollto">Sign In</a> -->
            </div>
        </header><!-- End Header -->

        <!-- ======= Hero Section ======= -->
        <section id="hero" class="d-flex align-items-center">

        <div class="container" data-aos="zoom-out" data-aos-delay="100">
            <div class="row">
                <div class="col-xl-6">
                    <h1>Welcome to my private blog</h1>
                    <h2>My name is Raihan Alfandi, i'm a novelis, so please enjoy my books</h2>
                    <h2>Happy Reading!</h2>
                    <a href="#team" class="btn-get-started scrollto">Books List</a>
                </div>
            </div>
        </div>
        </section><!-- End Hero -->
        <section id="team" class="team section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                <h2>Book</h2>
                <p>Here is some of my current books</p>
                </div>
                <div class="row">
                <?php
                    foreach ($data as $book){
                ?>
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up" data-aos-delay="100">
                    <div class="member-img">
                        <img src="<?php echo base_url(); ?>templates/img/books/<?php echo $book['cover']; ?>" class="img-fluid" alt="">
                        <!-- <div class="social">
                        <a href="https://www.wattpad.com/story/280986042-stuck-with-you" target="_blank"><span class="iconify" data-icon="simple-icons:wattpad"></span></a>
                        </div> -->
                    </div>
                    <div class="member-info">
                        <h4><?= $book['judul']; ?></h4>
                        <span>Status : <?= $book['status']; ?></span>
                        <a href="<?php echo site_url('welcome/detail/'.$book['id']); ?>" class="btn btn-danger" style="float: right; margin-bottom: 10px;">Learn More <i class="bi bi-arrow-right"></i></a>
                    </div>
                    </div>
                </div>
                <?php } ?>
                </div>

            </div>
        </section>
        <!-- ======= Footer ======= -->
        <!-- <footer id="footer"> -->
        <div class="container d-md-flex py-4">

            <div class="me-md-auto text-center text-md-start">
                <div class="copyright">
                    &copy; Copyright <strong><span>SenNovel</span></strong>. All Rights Reserved
                </div>
                <div class="credits">
                   
                    Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                </div>
            </div>
            <div class="social-links text-center text-md-end pt-3 pt-md-0">
                <a href="https://www.instagram.com/rraihn.alf/" class="instagram"><i class="bx bxl-instagram"></i></a>
            </div>
        </div>
        <!-- </footer> -->
        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

        <!-- Vendor JS Files -->
        <script src="<?php echo base_url('templates/assets/aos/aos.js'); ?>"></script>
        <script src="<?php echo base_url('templates/assets/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
        <script src="<?php echo base_url('templates/assets/glightbox/js/glightbox.min.js'); ?>"></script>
        <script src="<?php echo base_url('templates/assets/isotope-layout/isotope.pkgd.min.js'); ?>"></script>
        <script src="<?php echo base_url('templates/assets/php-email-form/validate.js'); ?>"></script>
        <script src="<?php echo base_url('templates/assets/purecounter/purecounter.js'); ?>"></script>
        <script src="<?php echo base_url('templates/assets/swiper/swiper-bundle.min.js'); ?>"></script>

        <!-- Template Main JS File -->
        <script src="<?php echo base_url('templates/js/main.js'); ?>"></script>
    </body>
</html>