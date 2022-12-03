<?php 
    include("./sections/result_calc.php");
    // $q09_rank = [[1], [2], [3]];
    // $q09_score = [0, 0, 0];

    // $rank1 = [$q07_score[0], $q08_score[0], $q09_score[0]];
    // $rank2 = [$q07_score[1], $q08_score[1], $q09_score[1]];
    // $rank3 = [$q07_score[2], $q08_score[2], $q09_score[2]];
?>
<style>
    .row {
        justify-content: center;
    }
    .q_result {
        height: 30vh;
        align-items: flex-end;
        border: 1px solid rgb(112,239,239);
        border-radius: 15px;
    }
    .result_display {
        height: 60%;
        align-items: flex-end;
    }
    .result_display div {
        display: flex;
        justify-content: center !important;
        align-items: center;
    }
    .rank_1, .rank_2, .rank_3 {
        background-color: rgba(128, 128, 128, 0.7);
        backdrop-filter: blur(5px);
        border-radius: 10px 10px 0 0;
        padding: 0;
    }
</style>
<div class="section-title">
    <h2>觀展回饋＆抽獎</h2>
    <p>投票結果公布</p>
    <img src="../assets/img/lu_deco.png" alt="" class="section_title_deco">
</div>
<div class="row flex align-items-center justify-content-center" id="result_root">
    <div class="col-12 pt-4 pt-lg-0 container row align-items-end" data-aos="" data-aos-delay="100">
        <div id="q07" class="q_result col-10 col-lg-3 pt-4 pt-lg-0 container row m-3" data-aos="" data-aos-delay="100">
            <?php 
                // print_r($q07_rank); 
            ?>
            <div class="result_title h4 col-12 container d-flex justify-content-center">
                TECHPUNK獎
            </div>
            <div class="result_display col-12 container row">
                <div class="rank_2 col-3 ml-1 mr-1 pt-4 pt-lg-0 container" style="height: calc(100% * (<?php echo($q07_score[1] / $q07_score[0]); ?>))" data-aos="" data-aos-delay="100">
                    <?php 
                        for ($i = 0; $i < count($q07_rank[1]); $i++) {
                            echo "第" . $q07_rank[1][$i] . "組<br>";
                        }
                    ?>
                </div>
                <div class="rank_1 col-3 ml-1 mr-1 pt-4 pt-lg-0 container" style="height: calc(100% * (<?php echo($q07_score[0] / $q07_score[0]); ?>))" data-aos="" data-aos-delay="100">
                    <?php 
                        for ($i = 0; $i < count($q07_rank[0]); $i++) {
                            echo "第" . $q07_rank[0][$i] . "組<br>";
                        }
                    ?>
                </div>
                <div class="rank_3 col-3 ml-1 mr-1 pt-4 pt-lg-0 container" style="height: calc(100% * (<?php echo($q07_score[2] / $q07_score[0]); ?>))" data-aos="" data-aos-delay="100">
                    <?php 
                        for ($i = 0; $i < count($q07_rank[2]); $i++) {
                            echo "第" . $q07_rank[2][$i] . "組<br>";
                        }
                    ?>
                </div>
            </div>
        </div>
        <div id="q08" class="q_result col-10 col-lg-3 pt-4 pt-lg-0 container row m-3" data-aos="" data-aos-delay="100">
            <?php 
                // print_r($q08_rank); 
            ?>
            <div class="result_title h4 col-12 container d-flex justify-content-center">
                哇苦哇苦獎<br>
                わくわく
            </div>
            <div class="result_display col-12 container row">
                <div class="rank_2 col-3 ml-1 mr-1 pt-4 pt-lg-0 container" style="height: calc(100% * (<?php echo($q08_score[1] / $q08_score[0]); ?>))" data-aos="" data-aos-delay="100">
                    <?php 
                        for ($i = 0; $i < count($q08_rank[1]); $i++) {
                            echo "第" . $q08_rank[1][$i] . "組<br>";
                        }
                    ?>
                </div>
                <div class="rank_1 col-3 ml-1 mr-1 pt-4 pt-lg-0 container" style="height: calc(100% * (<?php echo($q08_score[0] / $q08_score[0]); ?>))" data-aos="" data-aos-delay="100">
                    <?php 
                        for ($i = 0; $i < count($q08_rank[0]); $i++) {
                            echo "第" . $q08_rank[0][$i] . "組<br>";
                        }
                    ?>
                </div>
                <div class="rank_3 col-3 ml-1 mr-1 pt-4 pt-lg-0 container" style="height: calc(100% * (<?php echo($q08_score[2] / $q08_score[0]); ?>))" data-aos="" data-aos-delay="100">
                    <?php 
                        for ($i = 0; $i < count($q08_rank[2]); $i++) {
                            echo "第" . $q08_rank[2][$i] . "組<br>";
                        }
                    ?>
                </div>
            </div>
        </div>
        <div id="q09" class="q_result col-10 col-lg-3 pt-4 pt-lg-0 container row m-3" data-aos="" data-aos-delay="100">
            <?php 
                // print_r($q09_rank); 
            ?>
            <div class="result_title h4 col-12 container d-flex justify-content-center">
                路過不錯過獎
            </div>
            <div class="result_display col-12 container row">
                <div class="rank_2 col-3 ml-1 mr-1 pt-4 pt-lg-0 container" style="height: calc(100% * (<?php echo($q09_score[1] / $q09_score[0]); ?>))" data-aos="" data-aos-delay="100">
                    <?php 
                        for ($i = 0; $i < count($q09_rank[1]); $i++) {
                            echo "第" . $q09_rank[1][$i] . "組<br>";
                        }
                    ?>
                </div>
                <div class="rank_1 col-3 ml-1 mr-1 pt-4 pt-lg-0 container" style="height: calc(100% * (<?php echo($q09_score[0] / $q09_score[0]); ?>))" data-aos="" data-aos-delay="100">
                    <?php 
                        for ($i = 0; $i < count($q09_rank[0]); $i++) {
                            echo "第" . $q09_rank[0][$i] . "組<br>";
                        }
                    ?>
                </div>
                <div class="rank_3 col-3 ml-1 mr-1 pt-4 pt-lg-0 container" style="height: calc(100% * (<?php echo($q09_score[2] / $q09_score[0]); ?>))" data-aos="" data-aos-delay="100">
                    <?php 
                        for ($i = 0; $i < count($q09_rank[2]); $i++) {
                            echo "第" . $q09_rank[2][$i] . "組<br>";
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>