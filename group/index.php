<style>
    .breadcrumbs {
        background-color: inherit !important;
    }
    .portfolio-details {
        padding-top: 20px !important;
    }
    #portfolio-details .swiper-slide {
        display: flex;
        align-items: center;
        justify-content: center;
    }
    #portfolio-details .portfolio-details-slider {
        display: flex;
        flex-direction: column;
        align-items: center;
    }
    #breadcrumbs .group_title_root {
        position: relative;
    }
    #breadcrumbs .section_title_deco {
        width: 90px !important;
        top: -20px !important;
        left: -25px !important;
    }
    .group-page_link {
        color: rgb(112,239,239) !important;
    }
</style>

<?php 
    $input = $_GET['project'];
    include("./group_info.php"); 
    include("./". $groupID . "/basic_info.php"); 
    include("./group_path.php"); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<title><?php echo($title); ?> - TECH PUNK</title>
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
<link href="../assets/css/custom.css" rel="stylesheet">

<!-- =======================================================
  * Template Name: Gp - v4.7.0
  * Template URL: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <?php include("./sections/counter.php") ?>
</head>

<body>

<!-- ======= Header ======= -->
<?php include("./sections/header.php"); ?>
<!-- End Header -->

<main id="main"> 
    <?php include("./". $groupID . "/basic_info.php"); ?>
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <div class="group_title_root">
                    <h1><?php echo($title); ?></h1>
                    <h3><?php echo($subtitle); ?></h3>
                </div>
                <h6><a href="../#portfolio" style="display: inline;">作品廊</a> / <?php echo($breadcrumb); ?></h6>
            </div>
        </div>
    </section>
    <!-- End Breadcrumbs --> 
    
    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
        <div class="container">
            <div class="row gy-4 gx-5 align-items-start">
                <div class="col-lg-5" style="display: flex; align-items: center;">
                    <div class="portfolio-details-slider swiper">
                        <?php include($photoSlide_path); ?>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
                <div class="col-lg-7" style="display: flex; align-items: center;">
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
<?php include("./sections/footer.php"); ?>
<!-- End Footer -->

<div id="preloader"></div>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a> 

<!-- Vendor JS Files --> 
<script defer src="../assets/vendor/purecounter/purecounter.js"></script> 
<script defer src="../assets/vendor/aos/aos.js"></script> 
<script defer src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script> 
<script defer src="../assets/vendor/glightbox/js/glightbox.min.js"></script> 
<script defer src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script> 
<script defer src="../assets/vendor/swiper/swiper-bundle.min.js"></script> 
<script defer src="../assets/vendor/php-email-form/validate.js"></script> 

<!-- Template Main JS File --> 
<script defer src="../assets/js/main.js"></script>
</body>
</html>