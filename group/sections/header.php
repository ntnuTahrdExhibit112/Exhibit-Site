<?php
  $groups = range(1, 13);
//   shuffle($groups);
?>
<header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-lg-between">
        <!-- <i class="bi bi-list mobile-nav-toggle"></i> -->
        <a class="mobile-nav-toggle" href="#"><img src="../assets/img/menu_logo.png" alt="" width="28" height="28"></a>
        <!-- <h1 class="logo me-auto me-lg-0"><a href="./">Logo</a></h1>-->
        <!-- Uncomment below if you prefer to use an image logo -->
        <a id="header-logo" href="../" class="logo me-auto me-lg-0"><img src="../assets/img/logo.png" alt="" class="img-fluid"></a>

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
                <li class="dropdown nav-li">
                    <a class="nav-link scrollto desktop_nav active" href="#portfolio">作品廊 <i class="bi bi-chevron-down"></i></a>
                    <div class="space space_active"></div>
                    <a class="nav-link mobile_nav active" href="#">作品廊 <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <?php
                            $i = 0;
                            while ($i != 13) {
                                //echo($groups[$i]);
                                include("./g" . $groups[$i] . "/basic_info.php");
                                include("./sections/header_item.php");
                                
                                $i++;
                            }
                        ?>
                    </ul>
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
                <li class="nav-li">
                    <a class="nav-link scrollto" href="../messages/">留言板</a>
                    <div class="space"></div>
                </li>
                <li class="dropdown nav-li">
                    <a class="nav-link scrollto desktop_nav" href="#special_event">特別活動 <i class="bi bi-chevron-down"></i></a>
                    <div class="space"></div>
                    <a class="nav-link mobile_nav" href="#">特別活動 <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li>
                            <a class="nav-link scrollto" href="../online_exhibit/">線上展</a>
                            <div class="space"></div>
                        </li>
                        <li>
                            <a class="nav-link scrollto" href="../AR_interact/">展場AR互動</a>
                            <div class="space"></div>
                        </li>
                        <li>
                            <a class="nav-link scrollto" href="../vote/?vote=countdown">專題票選</a>
                            <div class="space"></div>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- .navbar -->

        <div class="desktop_share-btn">
            <a href="https://www.instagram.com/ntnutahrdexhibit112" target="_blank" class="get-started-btn scrollto" title="Instagram"><i class="bi bi-instagram"></i></a>
            <a href="https://www.facebook.com/tahrdgraduationexhibition" target="_blank" class="get-started-btn scrollto" title="Facebook"><i class="bi bi-facebook"></i></a>
        </div>
        <div class="mobile_share-btn">
            <a href="#mobile_share_btn" class="get-started-btn scrollto" title="mobile-links" onClick="mobile_share_toggle()">
                <i class="bi bi-link-45deg"></i>
            </a>
            <div class="shareBtn_root">
                <a href="https://www.instagram.com/ntnutahrdexhibit112" target="_blank" class="shareBtn get-started-btn scrollto" title="Instagram" onClick="mobile_share_toggle()">
                    <i class="bi bi-instagram"></i>
                </a>
                <a href="https://www.facebook.com/tahrdgraduationexhibition" target="_blank" class="shareBtn get-started-btn scrollto" title="Facebook" onClick="mobile_share_toggle()">
                    <i class="bi bi-facebook"></i>
                </a>
            </div>
            <script src="../assets/js/custom.js"></script>
        </div>
    </div>
</header>