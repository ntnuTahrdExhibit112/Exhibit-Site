<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<title>首頁 - TECH PUNK</title>
<meta content="" name="description">
<meta content="techpunk, 科技應用與人力資源發展學系, 科技系, 畢業專題成果展, 112級" name="keywords">

<!-- Favicons -->
<link href="assets/img/favicon.png" rel="icon">
<link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

<!-- Google Fonts -->
<!-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet" media="print" onload="this.media='all'"> -->

<!-- Vendor CSS Files -->
<link href="assets/vendor/aos/aos.css" rel="stylesheet" media="print" onload="this.media='all'">
<link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<!-- <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet"> -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" rel="stylesheet" media="print" onload="this.media='all'">
<link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" media="print" onload="this.media='all'">
<link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet" media="print" onload="this.media='all'">
<link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet" media="print" onload="this.media='all'">
<link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" media="print" onload="this.media='all'">

<!-- Template Main CSS File -->
<link href="assets/css/style.css" rel="stylesheet">
<link href="assets/css/custom.css" rel="stylesheet">

<!-- countdown -->
<link href="assets/css/countdown.css" rel="stylesheet" media="print" onload="this.media='all'">

<!-- preload image -->
<link rel="preload" as="image" href="assets/img/hero-bg.jpg">
<link rel="preload" as="image" href="assets/img/hero-bg-mobile.jpg">

<!-- =======================================================
  * Template Name: Gp - v4.7.0
  * Template URL: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <?php include("./browseCount/counter.php") ?>
</head>

<body>
<!-- ======= Header ======= -->
<?php include("./sections/header.php"); ?>

<!-- End Header --> 

<!-- ======= Hero Section ======= -->
<?php include("./sections/home/hero.php"); ?>
<!-- End Hero -->

<main id="main"> 
    <!-- ======= Clients Section ======= -->
    <?php include("./sections/home/sponsors.php"); ?>
    <!-- End Clients Section --> 

    <!-- ======= Features Section ======= -->
    <?php //include("./sections/home/countdown.php"); ?>
    <!-- End Features Section -->
    
    <!-- ======= Features Section ======= -->
    <?php include("./sections/home/result.php"); ?>
    <!-- End Features Section -->

    <!-- ======= Features Section ======= -->
    <?php include("./sections/home/concept.php"); ?>
    <!-- End Features Section -->

    <!-- ======= Portfolio Section ======= -->
    <?php include("./sections/home/portfolio.php"); ?>
    <!-- End Portfolio Section --> 

    <!-- ======= Contact Section ======= -->
    <?php include("./sections/home/visit.php"); ?>
    <!-- End Contact Section --> 

    <!-- ======= About Section ======= -->
    <?php include("./sections/home/about.php"); ?>
    <!-- End About Section --> 

    <!-- ======= Team Section ======= -->
    <?php include("./sections/home/contact.php"); ?>
    <!-- End Team Section --> 

    <!-- ======= Features Section ======= -->
    <?php include("./sections/home/CTA_messages.php"); ?>
    <!-- End Features Section -->

</main>
<!-- End #main --> 

<!-- ======= Footer ======= -->
<?php include("./sections/footer.php"); ?>
<!-- End Footer --> 

<div id="preloader"></div>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a> 

<!-- Vendor JS Files --> 
<script defer src="assets/vendor/purecounter/purecounter.js"></script> 
<script defer src="assets/vendor/aos/aos.js"></script> 
<script defer src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script> 
<script defer src="assets/vendor/glightbox/js/glightbox.min.js"></script> 
<script defer src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script> 
<script defer src="assets/vendor/swiper/swiper-bundle.min.js"></script> 
<script defer src="assets/vendor/php-email-form/validate.js"></script> 

<!-- Template Main JS File --> 
<script defer src="assets/js/main.js"></script>

<!-- preload -->
<link rel="preload" as="image" href="assets/img/hero-bg.jpg">
<link rel="preload" as="image" href="assets/img/hero-bg-mobile.jpg">

</body>
</html>