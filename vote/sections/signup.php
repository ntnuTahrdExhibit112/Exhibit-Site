<?php
    if (!(isset($_SESSION['status']))) {
        $_SESSION['status'] = "unset";
    }
    if ($_SESSION['status'] == "verified") {
        if (isset($_SESSION['entryID'])) {
            echo "<script>window.location.href = './?vote=vote';</script>";
        }
        unset($_SESSION['entryID']);
    }
?>
<div class="section-title">
    <h2>觀展回饋＆抽獎</h2>
    <p>入場號碼</p>
</div>
<div class="row flex align-items-center" id="vote_form">
    <div class="col-10 pt-4 pt-lg-0 container" data-aos="" data-aos-delay="100">
        <div>
            <?php
                if ($_SESSION['status'] == "error") {
                    echo "<p class='h4 mt-4 mb-4' style='color: red !important;'>查無此入場號碼，請重新輸入</p>";
                    unset($_SESSION['status']);
                }
                else if ($_SESSION['status'] == "not_verified") {
                    echo "<p class='h4 mt-4 mb-4' style='color: red !important;'>未偵測到入場號碼，請重新輸入</p>";
                    unset($_SESSION['status']);
                }
            ?>
        </div>
        <form class="form-horizontal" method="POST" action="./sections/signup_action.php">
            <div class="flex" id="form_container">
                <div class="form-group group_flex">
                    <label for="entryID" class="control-label col-25p">入場號碼</label>
                    <div class="inline-block col-75p">
                        <input type="text" class="form-control" id="entryID" name="entryID" placeholder="例: 1a2b" required>
                    </div>
                </div>
                <div class="row flex justify-content-end mt-5">
                    <input class="btn btn-success col-2" type="submit" value="繼續">
                </div>
            </div>
        </form>
    </div>
</div>