<?php
    include("./sections/draw_view.php");
?>
<style>
    .row {
        justify-content: center;
    }
    td {
        text-align: center;
    }
    .btn {
        color: white !important;
    }
    .message_wrap {
        border: 1px solid rgb(112,239,239);
        border-radius: 15px;
        padding: 1rem;
        margin: 0.3rem;
    }
</style>
<div class="section-title">
    <h2>觀展回饋＆抽獎</h2>
    <p>抽獎</p>
    <img src="../assets/img/lu_deco.png" alt="" class="section_title_deco">
</div>
<center>
<div class="row flex align-items-center justify-content-center" id="draw_root">
    <div class="col-10 pt-4 pt-lg-0 container row align-items-center" data-aos="" data-aos-delay="100">
        <!-- <?php //print_r($data); ?> -->
        <table>
            
        </table>
        <div class="col-lg-8 pt-4 pt-lg-0 content row justify-content-center" data-aos="" data-aos-delay="100">
            <?php 
                for ($i = 0; $i < count($data); $i++) {
                    include("./sections/draw_wrapper.php");
                }
            ?>
        </div>
        <form method="POST" action="./sections/draw_action.php">
            <input class="btn get-started-btn mt-5" type="submit" value="抽獎">
        </form>
    </div>
</div>
</center>