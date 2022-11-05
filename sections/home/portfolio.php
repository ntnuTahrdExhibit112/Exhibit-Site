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
</style>

<?php //include("./group/group_info.php"); ?>
<section id="portfolio" class="portfolio">
    <div class="container" data-aos="">
        <div class="section-title">
            <img src="assets/img/lu_deco.png" alt="" class="section_title_deco">
            <h2>作品廊</h2>
            <p>專題製作成果</p>
        </div>
        <div class="row" data-aos="" data-aos-delay="100">
            <div class="col-lg-12 d-flex justify-content-center">
                <ul id="portfolio-flters">
                    <li data-filter="*" class="filter-active">全部</li>
                    <li data-filter=".filter-Edu-Learning">教育／教材／學習系統</li>
                    <li data-filter=".filter-BoardGame">桌遊</li>
                    <li data-filter=".filter-ProductDesign">產品設計</li>
                </ul>
            </div>
        </div>
        <div class="row portfolio-container" data-aos="" data-aos-delay="200">
            <div class="portfolio-desktop row">
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
                <style>
                    .portfolio-mobile .portfolio-item { /* item style */
                        background-color: rgb(27, 40, 42);
                        border-radius: 15px;
                        padding: 1%;
                    }
                    .portfolio-mobile .portfolio-item {
                        margin-bottom: 2% !important;
                    }
                    .portfolio-mobile .divider {
                        border-top: 1px solid white;
                        width: 50%;
                        margin-top: 6% !important;
                        margin-bottom: 2% !important;
                    }
                    .portfolio-item_mobile {
                        width: 96%;
                        margin: 2%;
                    }
                    .portfolio-table_mobile td{
                        padding: 2%;
                    }
                    .portfolio-table_mobile .h5, .portfolio-table_mobile .h6 {
                        margin-top: 0.5rem;
                    }
                    .portfolio-item_mobile .portfolio-item_mobile_link {
                        display: block !important;
                    }
                </style>
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
        </div>
    </div>
</section>