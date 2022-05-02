<header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-lg-between">
        <h1 class="logo me-auto me-lg-0"><a href="./">Logo</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

        <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
                <li><a class="nav-link scrollto active" href="#hero">首頁</a></li>
                <li><a class="nav-link scrollto" href="#about">關於科技系</a></li>
                <li><a class="nav-link scrollto" href="#concept">專展理念</a></li>
                <li><a class="nav-link scrollto" href="./onlineExhibit">線上展</a></li>
                <li class="dropdown"><a class="nav-link scrollto" href="#portfolio"><span>作品廊</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <?php include("./group/group_info.php"); ?>
                        <li><a class="nav-link scrollto" href="./group?group=demo"><?php echo $demo_title; ?></a></li>
                        <li><a class="nav-link scrollto" href="./group?group=g01"><?php echo $g01_title; ?></a></li>
                        <li><a class="nav-link scrollto" href="./group?group=g02"><?php echo $g02_title; ?></a></li>
                        <li><a class="nav-link scrollto" href="./group?group=g03"><?php echo $g03_title; ?></a></li>
                        <li><a class="nav-link scrollto" href="./group?group=g04"><?php echo $g04_title; ?></a></li>
                        <li><a class="nav-link scrollto" href="./group?group=g05"><?php echo $g05_title; ?></a></li>
                        <li><a class="nav-link scrollto" href="./group?group=g06"><?php echo $g06_title; ?></a></li>
                        <li><a class="nav-link scrollto" href="./group?group=g07"><?php echo $g07_title; ?></a></li>
                        <li><a class="nav-link scrollto" href="./group?group=g08"><?php echo $g08_title; ?></a></li>
                        <li><a class="nav-link scrollto" href="./group?group=g09"><?php echo $g09_title; ?></a></li>
                        <li><a class="nav-link scrollto" href="./group?group=g10"><?php echo $g10_title; ?></a></li>
                        <li><a class="nav-link scrollto" href="./group?group=g11"><?php echo $g11_title; ?></a></li>
                        <li><a class="nav-link scrollto" href="./group?group=g12"><?php echo $g12_title; ?></a></li>
                        <li><a class="nav-link scrollto" href="./group?group=g13"><?php echo $g13_title; ?></a></li>
                    </ul>
                </li>
                <li><a class="nav-link scrollto" href="#visit">參觀資訊</a></li>
                <li><a class="nav-link scrollto" href="#contact">聯絡我們</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
        <!-- .navbar -->

        <div>
            <a href="https://www.instagram.com/ntnutahrdexhibit112" target="_blank" class="get-started-btn scrollto"><i class="bi bi-instagram"></i></a>
            <a href="https://www.facebook.com/tahrdgraduationexhibition" target="_blank" class="get-started-btn scrollto"><i class="bi bi-facebook"></i></a>
        </div>
    </div>
</header>