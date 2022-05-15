<style>
    #portfolio .filter-active {
        color: #000 !important;
    }
</style>

<?php //include("./group/group_info.php"); ?>
<section id="portfolio" class="portfolio">
    <div class="container" data-aos="fade-up">
        <div class="section-title">
            <h2>作品廊</h2>
            <p>各專題組 製作成果</p>
        </div>
        <div class="row" data-aos="fade-up" data-aos-delay="100">
            <div class="col-lg-12 d-flex justify-content-center">
                <ul id="portfolio-flters">
                    <li data-filter="*" class="filter-active">全部</li>
                    <li data-filter=".filter-education">教學發展</li>
                    <li data-filter=".filter-design">產品設計</li>
                </ul>
            </div>
        </div>
        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
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
    </div>
</section>
