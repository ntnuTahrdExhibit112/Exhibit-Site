<style>
    @media screen and (max-width: 769px) {
        #header-logo {
            margin-left: auto !important;
        }
    }
    .container {
        padding: 0;
    }
</style>
<?php
  $groups = range(1, 13);
  shuffle($groups);
?>
<header id="header" class="fixed-top header-inner-pages">
    <div class="container d-flex align-items-center justify-content-lg-between">
        <!-- <h1 class="logo me-auto me-lg-0"><a href="../">Logo</a></h1>-->
        <!-- Uncomment below if you prefer to use an image logo --> 
        <a href="../" class="logo me-auto me-lg-0"><img src="../assets/img/logo.png" alt="" class="img-fluid"></a>
        
        <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
                <li class="nav-li">
                    <a class="nav-link scrollto" href="../">首頁</a>
                    <div class="space"></div>
                </li>
                <li class="nav-li">
                    <a class="nav-link scrollto" href="../#concept">專展理念</a>
                    <div class="space"></div>
                </li>
                <li class="dropdown nav-link scrollto nav-li active">
                    <a class="nav-link scrollto active" href="../#portfolio">作品廊 <i class="bi bi-chevron-down"></i></a>
                    <div class="space space_active"></div>
                    <ul>
                        <?php
                            $i = 0;
                            while ($i != 13) {
                                //echo($groups[$i]);
                                include("./g" . $groups[$i] . "/basic_info.php");
                                $link;
                                include("./sections/header_item.php");
            
                                $i++;
                            }
                        ?>
                    </ul>
                </li>
                <li class="nav-li">
                    <a class="nav-link scrollto" href="../online_exhibit/">線上展</a>
                    <div class="space"></div>
                </li>
                <li class="nav-li">
                    <a class="nav-link scrollto" href="../AR_interact/">展場AR互動</a>
                    <div class="space"></div>
                </li>
                <li class="nav-li">
                    <a class="nav-link scrollto" href="../#visit">參觀資訊</a>
                    <div class="space"></div>
                </li>
                <li class="nav-li">
                    <a class="nav-link scrollto" href="../#about">關於科技系</a>
                    <div class="space"></div>
                </li>
                <li class="nav-li">
                    <a class="nav-link scrollto" href="../#contact">聯絡我們</a>
                    <div class="space"></div>
                </li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i> </nav>
        <!-- .navbar -->
        
        <div> <a href="https://www.instagram.com" target="_blank" class="get-started-btn scrollto"><i class="bi bi-instagram"></i></a> <a href="https://www.facebook.com" target="_blank" class="get-started-btn scrollto"><i class="bi bi-facebook"></i></a> </div>
    </div>
</header>