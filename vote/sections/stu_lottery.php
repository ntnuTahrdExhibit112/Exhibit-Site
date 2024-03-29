<?php
    if (!isset($_SESSION['entryID'])) {
        $_SESSION['status'] = "not_verified";
        echo "<script>window.location.href = './?vote=stu_signup';</script>";
    }
    if ($_SESSION['status'] == "info_filled") {
        echo "<script>window.location.href = './?vote=done';</script>";
    }
    else if ($_SESSION['status'] == "verified") {
        echo "<script>window.location.href = './?vote=stu_vote';</script>";
    }
?>
<div class="section-title">
    <h2>觀展回饋＆抽獎</h2>
    <p>抽獎聯絡資訊</p>
    <img src="../assets/img/lu_deco.png" alt="" class="section_title_deco">
</div>
<div class="row flex align-items-center" id="lottery_form">
    <div class="col-10 col-lg-6 col-md-8 pt-4 pt-lg-0 container" data-aos="" data-aos-delay="100">
        <form class="form-horizontal" method="POST" action="./sections/stu_lottery_action.php">
            <div class="flex form_container" id="form_container">
                <div class="form-group group_flex h3 row">
                    <label for="entryID" class="control-label col-6"><center>叛軍號召者ID</center></label>
                    <div class="inline-block col-6">
                        <center><b class="h2" style="color: rgb(225,64,237) !important;"><?php echo $_SESSION['entryID'] ?></b></center>
                    </div>
                </div>
                <hr><hr>
                <div class="form-group group_flex h5">
                    <label for="name" class="control-label col-35p">姓名</label>
                    <div class="inline-block col-65p">
                        <input type="text" class="form-control" id="name" name="name" placeholder="請填寫完整姓名（例: 王小明）" required value="<?php if (isset($_SESSION['name'])) {echo $_SESSION['name'];} ?>">
                    </div>
                </div>
                <div class="form-group group_flex h5">
                    <label for="phone" class="control-label col-35p">手機號碼</label>
                    <div class="inline-block col-65p">
                        <input type="tel" class="form-control" id="phone" name="phone" placeholder="例: 0912345678" pattern="[0-9]{10}">
                    </div>
                </div>

                <div class="row flex justify-content-end mt-5">
                    <input class="btn btn-success col-4 col-lg-2" type="submit" value="送出">
                </div>
            </div>
        </form>
    </div>
</div>