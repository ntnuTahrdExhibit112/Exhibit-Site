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
    .col-25p {
        width: 30% !important;
    }
    .col-75p {
        width: 60% !important;
    }
</style>
<div class="section-title">
    <h2>觀展回饋＆抽獎</h2>
    <p>抽獎</p>
    <img src="../assets/img/lu_deco.png" alt="" class="section_title_deco">
</div>
<center>
<div class="row flex align-items-center justify-content-center" id="draw_root">
    <div class="col-8 pt-4 pt-lg-0 container row align-items-center" data-aos="" data-aos-delay="100">
        <div class="col-lg-8 pt-4 pt-lg-0 content row justify-content-center h3" data-aos="" data-aos-delay="100">
            目前可抽出人數：<?php echo $undrawn_count; ?>
            <?php
                if (!isset($_SESSION['draw_error'])) {
                    $_SESSION['draw_error'] = "no_error";
                }
            ?>
            <span class="mt-3<?php if ($_SESSION['draw_error'] != "insufficient") echo ' hider'; unset($_SESSION['draw_error']); ?>">參與抽獎人數不足<br>請重新設定欲抽出人數</span>
        </div>
        <form method="POST" action="./sections/draw_action.php">
            <div class="form-group group_flex h3 mt-5">
                <label for="draw" class="control-label col-25p">欲抽出人數</label>
                <div class="inline-block col-75p">
                    <input type="text" class="form-control" id="draw" name="draw" placeholder="欲抽出人數" required>
                </div>
            </div>
            <div class="row flex justify-content-end mt-5">
                <input class="btn get-started-btn col-4 col-lg-2" type="submit" value="抽獎">
            </div>
        </form>
    </div>
</div>
</center>