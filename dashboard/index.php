<?php 
    session_start();
    include("../db/db_connect.php");
    include("./sections/rgbGen.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<title>專展總結 - TECH PUNK</title>

<!-- Favicons -->
<link href="../assets/img/favicon.png" rel="icon">
<link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

<!-- Google Fonts -->
<!-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet"> -->

<!-- Vendor CSS Files -->
<link href="../assets/vendor/aos/aos.css" rel="stylesheet" media="print" onload="this.media='all'">
<link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<!-- <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet"> -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" rel="stylesheet" media="print" onload="this.media='all'">
<link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" media="print" onload="this.media='all'">
<link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet" media="print" onload="this.media='all'">
<link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet" media="print" onload="this.media='all'">
<link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" media="print" onload="this.media='all'">

<!-- Template Main CSS File -->
<link href="../assets/css/style.css" rel="stylesheet">
<link href="../assets/css/custom.css" rel="stylesheet">

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    var group_list = [
        "01", 
        "02", 
        "03", 
        "04", 
        "05", 
        "06", 
        "07", 
        "08", 
        "09", 
        "10", 
        "11", 
        "12", 
        "13"
    ];
</script>

<!-- =======================================================
    * Template Name: Gp - v4.7.0
    * Template URL: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-template/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
    <?php include("./sections/counter.php") ?> 
</head>

<body style="height: 90vh;">

<!-- ======= Header ======= -->
<?php include("./sections/header.php"); ?>
<!-- End Header -->

<main id="main" style="margin-top: 10vh;">
    <section id="vote" class="features">
        <div class="container justify-content-center" data-aos="">
            <div class="section-title">
                <h2>Dashboard</h2>
                <p>專題總結</p>
                <img src="../assets/img/lu_deco.png" alt="" class="section_title_deco">
            </div>
            <div class="row flex align-items-center mt-2"> <!--活動理念-->
                <div class="col-lg-12 pt-4 pt-lg-0 content row justify-content-center" data-aos="" data-aos-delay="100">
                    <!--
                        網站瀏覽人次
                        留言人數
                        投票
                            回饋人數
                            抽獎人數
                            各項表單問題填答
                        人氣
                            最喜歡作品
                            最喜歡攤位佈置
                            參觀人數
                        解謎
                            完成人數
                            難度分數分佈
                            好玩程度分數分佈
                        
                    -->
                    <!-- 網站瀏覽人次 -->
                    <?php include("./functions/site_views.php"); ?>
                    <!-- 留言人數 -->
                    <?php include("./functions/message_count.php"); ?>
                    <!-- 投票：回饋及投票人數 -->
                    <?php include("./functions/vote/vote_count.php"); ?>
                    <!-- 投票：抽獎參與人數 -->
                    <?php include("./functions/vote/lottery_count.php"); ?>
                    <hr>
                    <div class="row mt-3 col-12">
                        <center><h3>人氣獎項x3</h3></center>
                        <!-- 人氣：最喜歡作品 -->
                        <?php include("./functions/awards/fav_project.php"); ?>
                        <!-- 人氣：最喜歡攤位佈置 -->
                        <?php include("./functions/awards/fav_layout.php"); ?>
                        <!-- 人氣：最多人參觀 -->
                        <?php include("./functions/awards/most_visited.php"); ?>
                    </div>
                    <hr>
                    <div class="row mt-3 col-12 justify-content-center">
                        <center><h3>解謎遊戲</h3></center>
                        <!-- 解謎遊戲 -->
                        <?php include("./functions/code/code_count.php"); ?>
                    </div>
                    <hr>
                    <div class="row mt-3 col-12 col-lg-10 justify-content-center">
                        <center><h3>表單問題填答狀況</h3></center>
                        <div class="row mt-3 col-12 col-lg-10">
                            <!-- 如何得知 -->
                            <?php include("./functions/form/q01.php"); ?>
                            <!-- 對展覽滿意的地方 -->
                            <?php include("./functions/form/q02.php"); ?>
                        </div>
                        <div class="row mt-3 col-12 col-lg-10">
                            <!-- 觀展動機 -->
                            <?php include("./functions/form/q03.php"); ?>
                            <!-- 希望了解的資訊 -->
                            <?php include("./functions/form/q04.php"); ?>
                        </div>
                        <div class="row mt-3 col-12 col-lg-10 justify-content-center">
                            <!-- 是否知道有線上展 -->
                            <?php include("./functions/form/q05.php"); ?>
                        </div>
                    </div>
                </div>
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