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
<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-lg-between">
        <i class="bi bi-list mobile-nav-toggle"></i>
        <!-- <h1 class="logo me-auto me-lg-0"><a href="../">Logo</a></h1>-->
        <!-- Uncomment below if you prefer to use an image logo --> 
        <a href="../" class="logo me-auto me-lg-0"><img src="../assets/img/logo.png" alt="" class="img-fluid"></a>
        
        <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
                <li><a class="nav-link scrollto" href="../">首頁</a></li>
                <li><a class="nav-link scrollto" href="../#concept">專展理念</a></li>
                <li class="dropdown nav-link scrollto"><a class="nav-link scrollto active" href="../#portfolio"><span>作品廊</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <?php
                            $i = 0;
                            while ($i != 13) {
                                //echo($groups[$i]);
                                include("../group/g" . $groups[$i] . "/basic_info.php");
                                include("./sections/header_item.php");
            
                                $i++;
                            }
                        ?>
                    </ul>
                </li>
                <li><a class="nav-link scrollto" href="../onlineExhibit">線上展</a></li>
                <li><a class="nav-link scrollto" href="../ARinteract">展場AR互動</a></li>
                <li><a class="nav-link scrollto" href="../#visit">參觀資訊</a></li>
                <li><a class="nav-link scrollto" href="../#about">關於科技系</a></li>
                <li><a class="nav-link scrollto" href="../#contact">聯絡我們</a></li>
            </ul>
        </nav>
        <!-- .navbar -->
        
        <div> 
            <a href="https://www.instagram.com/ntnutahrdexhibit112" target="_blank" class="get-started-btn scrollto" title="Instagram"><i class="bi bi-instagram"></i></a> 
            <a href="https://www.facebook.com/tahrdgraduationexhibition" target="_blank" class="get-started-btn scrollto" title="Facebook"><i class="bi bi-facebook"></i></a> 
        </div>
    </div>
</header>