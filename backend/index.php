<?php 
    session_start();
    $function = "";
    if (isset($_GET['function'])) {
        $function = $_GET['function'];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<title>後台資訊 - TECH PUNK</title>

<!-- Favicons -->
<link href="../assets/img/favicon.png" rel="icon">
<link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

<!-- Google Fonts -->
<!-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet"> -->

<!-- Vendor CSS Files -->
<link href="../assets/vendor/aos/aos.css" rel="stylesheet" media="print" onload="this.media='all'">
<link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<!-- <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" media="print" onload="this.media='all'"> -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" rel="stylesheet" media="print" onload="this.media='all'">
<link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" media="print" onload="this.media='all'">
<link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet" media="print" onload="this.media='all'">
<link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet" media="print" onload="this.media='all'">
<link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" media="print" onload="this.media='all'">

<!-- Template Main CSS File -->
<link href="../assets/css/style.css" rel="stylesheet">
<link href="../assets/css/custom.css" rel="stylesheet">

<!-- countdown -->
<link href="../assets/css/countdown.css" rel="stylesheet">

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

<main id="main" style="margin-top: 10vh;">
    <section id="vote" class="features">
        <div class="container justify-content-center" data-aos="">
            <a>留言管理</a>
            <a>解謎後臺</a>
            <a>各組票數分佈</a>
            <a>投票前三名</a>
            <a>外賓觀展回饋</a>
            <a>學生觀展回饋</a>
            <?php
                date_default_timezone_set('Asia/Taipei');
                $resetter = 'reset_' . date("mdHi");
                echo "<script>console.log('" . $resetter . "');</script>";

                if ($function == 'message_manage') {
                    include("./sections/signup.php");
                }
                else if ($vote_action == 'vote') {
                    include("./sections/vote.php");
                }
            ?>
        </div>
    </section>
</main>

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