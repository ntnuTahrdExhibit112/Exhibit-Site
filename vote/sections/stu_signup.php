<?php
    if ($_SESSION['status'] == "info_filled") { //3rd status
        echo "<script>window.location.href = './?vote=done';</script>";
    }
    else if ($_SESSION['status'] == "voted") {  //2nd status
        echo "<script>window.location.href = './?vote=lottery';</script>";
    }
    else if ($_SESSION['status'] == "verified") {   //1st status
        if (isset($_SESSION['entryID'])) {
            echo "<script>window.location.href = './?vote=stu_vote';</script>";
        }
    }
?>
<style>
    .col-25p {
        width: 35% !important;
    }
    .col-75p {
        width: 65% !important;
    }
</style>
<div class="section-title">
    <h2>觀展回饋＆抽獎</h2>
    <p>叛軍號召者登入</p>
    <img src="../assets/img/lu_deco.png" alt="" class="section_title_deco">
</div>
<div class="row flex align-items-center" id="vote_form">
    <div class="col-10 col-lg-6 col-md-8 pt-4 pt-lg-0 container" data-aos="" data-aos-delay="100">
        <div>
            <?php
                if ($_SESSION['status'] == "error") {
                    echo "<p class='h4 mt-4 mb-4' style='color: red !important;'>查無此叛軍號召者ID，請重新輸入</p>";
                    unset($_SESSION['status']);
                }
                else if ($_SESSION['status'] == "not_verified") {
                    echo "<p class='h4 mt-4 mb-4' style='color: red !important;'>未偵測到叛軍號召者ID，請重新輸入</p>";
                    unset($_SESSION['status']);
                }
            ?>
        </div>
        <form class="form-horizontal" method="POST" action="./sections/stu_signup_action.php">
            <div class="flex" id="form_container">
                <div class="form-group group_flex h3">
                    <label for="entryID" class="control-label col-25p">叛軍號召者ID</label>
                    <div class="inline-block col-75p">
                        <input type="text" class="form-control" id="entryID" name="entryID" placeholder="例: 1a2b3c" required>
                    </div>
                </div>
                <div class="row flex justify-content-end mt-5">
                    <input class="btn btn-success col-2" type="submit" value="繼續">
                </div>
            </div>
        </form>
    </div>
</div>