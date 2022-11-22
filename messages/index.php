<?php 
    session_start();
    $action = "";
    if (!isset($_GET['action'])) {
        $action = "show";
    }
    else {
        $action = $_GET['action'];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<title>留言板 - TECH PUNK</title>
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

<!-- countdown -->
<link href="../assets/css/countdown.css" rel="stylesheet">

<!-- =======================================================
  * Template Name: Gp - v4.7.0
  * Template URL: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <?php include("./sections/counter.php") ?> 

  <style>
    .message_wrap {
        border: 1px solid rgb(112,239,239);
        border-radius: 15px;
        padding: 1rem;
        margin: 1rem;
    }
    .btn-message {
        background-color: rgb(112,239,239) !important;
        color: black !important;
    }
    .btn-success {
        color: #fff !important;
    }
    input, select, option, textarea {
        color: black !important;
    }
    label {
        font-size: 1em;
    }
    .col-25p {
        width: 25% !important;
    }
    .col-75p {
        width: 75% !important;
    }
    .group_flex {
        display: flex;
        justify-content: space-around;
        align-items: center;
        margin-bottom: 3%;
    }
  </style>
</head>

<body>

<!-- ======= Header ======= -->
<?php 
    include("./sections/header.php"); 
    include("../db/db_connect.php");
?>
<!-- End Header -->

<main id="main" style="margin-top: 10vh;">
    <section id="vote" class="features">
        <div class="container justify-content-center" data-aos="">
            <div class="section-title">
                <h2>我有話想說！</h2>
                <p>留言板<?php if (isset($_SESSION['message_id'])) echo " / " . $_SESSION['message_id']; ?></p>
                <img src="../assets/img/lu_deco.png" alt="" class="section_title_deco">
            </div>
            <div class="row flex align-items-center mt-2 justify-content-center"> <!--活動理念-->
                <?php 
                    if ($action == "show") {
                        include("./sections/show.php");
                    }
                    else if ($action == "new_message") {
                        include("./sections/new_message.php");
                    }
                ?>
            </div>
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