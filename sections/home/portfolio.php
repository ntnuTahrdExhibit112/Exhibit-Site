<style>
    @media screen and (min-width: 993px) {
        #portfolio .portfolio-desktop {
            display: block !important;
        }
        #portfolio .portfolio-mobile {
            display: none !important;
        }
    }
    @media screen and (max-width: 992px) {
        #portfolio .portfolio-desktop {
            display: none !important;
        }
        #portfolio .portfolio-mobile {
            display: block !important;
        }
    }
    #portfolio .portfolio-wrap {
        background-color: rgba(255, 255, 255, 1) !important;
        /* background-image: url(../assets/img/lu_deco.png); */
        background-size: contain;
        background-repeat: no-repeat;
        background-position: center;
        border-radius: 15px;
        
    }
    #portfolio .portfolio-mobile .portfolio-item { /* item style */
        background-color: rgb(27, 40, 42);
        border-radius: 15px;
        padding: 1%;
    }
    #portfolio .portfolio-mobile .portfolio-item {
        margin-bottom: 2% !important;
    }
    #portfolio .portfolio-mobile .divider {
        border-top: 1px solid white;
        width: 50%;
        margin-top: 6% !important;
        margin-bottom: 2% !important;
    }
    #portfolio .portfolio-item_mobile {
        width: 96%;
        margin: 2%;
    }
    #portfolio .portfolio-table_mobile td{
        padding: 2%;
    }
    #portfolio .portfolio-table_mobile .h5, .portfolio-table_mobile .h6 {
        margin-top: 0.5rem;
    }
    #portfolio .portfolio-item_mobile .portfolio-item_mobile_link {
        display: block !important;
    }
    .portfolio_image_link img {
        cursor: pointer !important;
    }
    @media screen and (max-width: 992px) {
        #portfolio #portfolio-flters {
            display: flex;
            flex-direction: column;
        }
    }
</style>

<?php
    //include("./group/group_info.php"); 

    if (!isset($_SESSION['portfolio_visited'])) {
        $_SESSION['portfolio_visited'] = false;
        echo "<script>function firstVisit() {alert('點擊圖片進入專題介紹！');}</script>";
    }
    if (!$_SESSION['portfolio_visited']) {
        echo "<script>var portfolio_visited = 0;</script>";
    }
    else {
        echo "<script>var portfolio_visited = 1;</script>";
    }
?>
<section id="portfolio" class="portfolio">
    <div class="container" data-aos="">
        <div class="section-title">
            <h2>作品廊</h2>
            <p>專題製作成果</p>
            <img src="assets/img/lu_deco.png" alt="" class="section_title_deco">
        </div>
        <div class="row" data-aos="" data-aos-delay="100">
            <div class="col-lg-12 d-flex justify-content-center">
                <ul id="portfolio-flters">
                    <li data-filter="*" class="filter-active">全部</li>
                    <li data-filter=".filter-Educational">教育／教材／學習系統</li>
                    <li data-filter=".filter-BoardGame">桌遊</li>
                    <li data-filter=".filter-ProductDesign">產品設計</li>
                </ul>
            </div>
        </div>
        <div class="row portfolio-container justify-content-center" data-aos="" data-aos-delay="200">
            <script>
                function setListener(s_id, s_link) {
                    link = document.getElementById(s_id);
                    link.addEventListener('click', function(){
                        setTimeout(load_image_link(s_link), 1000)
                    });
                }
            </script>
            <div class="portfolio-desktop row" style="position: relative; width: 80%;">
                <?php
                    $i = 0;
                    while ($i != 13) {
                        //echo($groups[$i]);
                        include("./group/g" . $groups[$i] . "/basic_info.php");
                        include("./sections/home/portfolio_item.php");
                        
                        $i++;
                    }
                ?>
            </div>
            <div class="portfolio-mobile">
                <?php
                    $i = 0;
                    while ($i != 13) {
                        //echo($groups[$i]);
                        include("./group/g" . $groups[$i] . "/basic_info.php");
                        include("./sections/home/portfolio_item_mobile.php");

                        $i++;
                    }
                ?>
            </div>
            <script>
                function load_image_link(src) {
                    portfolioLightbox.on('open', function (){
                        console.log(portfolioLightbox.getActiveSlideIndex());
                        // var id = "portfolio-link-" + portfolioLightbox.getActiveSlideIndex();
                        var current = document.getElementsByClassName('gslide')[portfolioLightbox.getActiveSlideIndex()];
                        var cur_img = current.querySelector("img");
                        var img_root = cur_img.parentElement;
                        var link = document.createElement("a");
                        link.setAttribute("href", src);
                        link.setAttribute("class", "portfolio_image_link");
                        link.append(cur_img);
                        img_root.append(link);
                        console.log(img_root);

                        if (!portfolio_visited) {
                            firstVisit();
                            portfolio_visited = 1;
                        }
                    })
                }
            </script>
        </div>
    </div>
</section>