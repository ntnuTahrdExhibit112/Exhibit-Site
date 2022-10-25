<?php 
    session_start();
    $vote_action = $_GET['vote'];

    if ((isset($_SESSION['entryID']))) {
        echo "<script>console.log('entryID = " . $_SESSION['entryID'] . "');</script>";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<title>專題票選 - TECH PUNK</title>
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
  <style>
    input, select, option, .form_multiple_root *, .select2-results * {
        color: black !important;
    }
    label {
        font-size: 1em;
    }
    #vote_form .col-25p {
        width: 25% !important;
    }
    #vote_form .col-75p {
        width: 75% !important;
    }
    #vote_form .inline-block {
        display: inline-block !important;
    }
    #vote_form .group_flex {
        display: flex;
        justify-content: space-around;
        align-items: center;
        margin-bottom: 3%;
    }
    .select2-search {
        display: flex;
        line-height: 20px;
    }
  </style>

  <!-- select2 -->
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.0/dist/jquery.slim.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
  <script defer src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
</head>

<body>

<!-- ======= Header ======= -->
<?php include("./sections/header.php"); ?>
<!-- End Header -->

<main id="main" style="margin-top: 10vh;">
    <section id="vote" class="features">
        <div class="container" data-aos="">
            <?php
                if ($vote_action == 'signup') {
                    include("./sections/signup.php");
                }
                else if ($vote_action == 'vote') {
                    include("./sections/vote.php");
                }
                else if ($vote_action == 'lottery') {
                    include("./sections/lottery.php");
                }
                else if ($vote_action == 'countdown' || $vote_action == 'done') {
                    include("./sections/countdown.php");
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