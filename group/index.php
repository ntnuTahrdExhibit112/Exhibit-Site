<?php 
    $groupID = $_GET['group'];
    include("./". $groupID . "/basic_info.php"); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<title><?php echo($title); ?> - 專展標題</title>
<meta content="" name="description">
<meta content="" name="keywords">

<!-- Favicons -->
<link href="../assets/img/favicon.png" rel="icon">
<link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

<!-- Vendor CSS Files -->
<link href="../assets/vendor/aos/aos.css" rel="stylesheet">
<link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
<link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
<link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
<link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
<link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

<!-- Template Main CSS File -->
<link href="../assets/css/style.css" rel="stylesheet">
<link href="assets/css/custom.css" rel="stylesheet">

<!-- =======================================================
  * Template Name: Gp - v4.7.0
  * Template URL: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

<!-- ======= Header ======= -->
<header id="header" class="fixed-top header-inner-pages">
    <div class="container d-flex align-items-center justify-content-lg-between">
        <h1 class="logo me-auto me-lg-0"><a href="../">Logo</a></h1>
        <!-- Uncomment below if you prefer to use an image logo --> 
        <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="../assets/img/logo.png" alt="" class="img-fluid"></a>-->
        
        <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
                <li><a class="nav-link scrollto" href="../">首頁</a></li>
                <li><a class="nav-link scrollto" href="../#about">關於科技系</a></li>
                <li><a class="nav-link scrollto" href="../#concept">專展理念</a></li>
                <li class="dropdown"><a class="nav-link scrollto active" href="../#portfolio"><span>作品廊</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <?php include("group_info.php"); ?>
                        <li><a class="nav-link scrollto" href="?group=demo"><?php echo $demo_title; ?></a></li>
                        <li><a class="nav-link scrollto" href="?group=g01"><?php echo $g01_title; ?></a></li>
                        <li><a class="nav-link scrollto" href="?group=g02"><?php echo $g02_title; ?></a></li>
                        <li><a class="nav-link scrollto" href="?group=g03"><?php echo $g03_title; ?></a></li>
                        <li><a class="nav-link scrollto" href="?group=g04"><?php echo $g04_title; ?></a></li>
                        <li><a class="nav-link scrollto" href="?group=g05"><?php echo $g05_title; ?></a></li>
                        <li><a class="nav-link scrollto" href="?group=g06"><?php echo $g06_title; ?></a></li>
                        <li><a class="nav-link scrollto" href="?group=g07"><?php echo $g07_title; ?></a></li>
                        <li><a class="nav-link scrollto" href="?group=g08"><?php echo $g08_title; ?></a></li>
                        <li><a class="nav-link scrollto" href="?group=g09"><?php echo $g09_title; ?></a></li>
                        <li><a class="nav-link scrollto" href="?group=g10"><?php echo $g10_title; ?></a></li>
                        <li><a class="nav-link scrollto" href="?group=g11"><?php echo $g11_title; ?></a></li>
                        <li><a class="nav-link scrollto" href="?group=g12"><?php echo $g12_title; ?></a></li>
                        <li><a class="nav-link scrollto" href="?group=g13"><?php echo $g13_title; ?></a></li>
                    </ul>
                </li>
                <li><a class="nav-link scrollto" href="../#visit">參觀資訊</a></li>
                <li><a class="nav-link scrollto" href="../#contact">聯絡我們</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i> </nav>
        <!-- .navbar -->
        
        <div> <a href="https://www.instagram.com" target="_blank" class="get-started-btn scrollto"><i class="bi bi-instagram"></i></a> <a href="https://www.facebook.com" target="_blank" class="get-started-btn scrollto"><i class="bi bi-facebook"></i></a> </div>
    </div>
</header>
<!-- End Header -->

<main id="main"> 
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <div></div>
                <h1><?php echo($title); ?></h1>
                <h6><a href="../#portfolio">作品廊</a>／<?php echo($breadcrumb); ?></h6>
            </div>
        </div>
    </section>
    <!-- End Breadcrumbs --> 
    
    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
        <div class="container">
            <div class="row gy-4 gx-5">
                <div class="col-lg-6">
                    <div class="portfolio-details-slider swiper">
                        <?php include($photoSlide_path); ?>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
                <div class="col-lg-6" style="display: flex; align-items: center;">
                    <div class="portfolio-description" style="">
                        <?php include($description_path); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Portfolio Details Section --> 
    
</main>
<!-- End #main --> 

<!-- ======= Footer ======= -->
<?php include("../sections/footer.php"); ?>
<!-- End Footer -->

<div id="preloader"></div>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a> 

<!-- Vendor JS Files --> 
<script src="../assets/vendor/purecounter/purecounter.js"></script> 
<script src="../assets/vendor/aos/aos.js"></script> 
<script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script> 
<script src="../assets/vendor/glightbox/js/glightbox.min.js"></script> 
<script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script> 
<script src="../assets/vendor/swiper/swiper-bundle.min.js"></script> 
<script src="../assets/vendor/php-email-form/validate.js"></script> 

<!-- Template Main JS File --> 
<script src="../assets/js/main.js"></script>
</body>
</html>