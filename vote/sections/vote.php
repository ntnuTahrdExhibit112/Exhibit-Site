<?php
    if (!isset($_SESSION['entryID'])) {
        $_SESSION['status'] = "not_verified";
        echo "<script>window.location.href = './?vote=signup';</script>";
    }
?>
<style>
    #vote_form .form_btn {
        padding: 1% !important;
        background-color: #0d6efd;
        cursor: pointer;
    }
    #vote_form .form_flex {
        display: flex;
    }
    #vote_form .form-group {
        margin-bottom: 5% !important;
    }
</style>
<script>
    $(document).ready(function() {
        $('.form_multiple').select2({
            tags: true, 
            tokenSeparators: [',', ' '], 
            placeholder: "請選擇..."
        });
    });
</script>
<div class="section-title">
    <h2>觀展回饋＆抽獎</h2>
    <p>專題展覽回饋單</p>
</div>
<div class="row flex align-items-center" id="vote_form">
    <div class="col-10 pt-4 pt-lg-0 container" data-aos="" data-aos-delay="100">
        <form class="form-horizontal" action="/action_page.php">
            <div class="flex form_container" id="form_container">
                <div class="form-group group_flex">
                    <label for="entryID" class="control-label col-25p">入場號碼</label>
                    <div class="inline-block col-75p">
                        <center><b><?php echo $_SESSION['entryID'] ?></b></center>
                    </div>
                </div>
                <div class="form-group">
                    <label for="q01" class="control-label">您是如何得知「TECHPUNK」展覽活動？</label>
                    <div class="form_multiple_root">
                        <select class="form-select form_multiple" id="q01" name="q01" multiple size="5">
                            <option value="粉絲專頁">粉絲專頁</option>
                            <option value="海報">海報</option>
                            <option value="邀請卡">邀請卡</option>
                            <option value="宣傳小卡">宣傳小卡</option>
                            <option value="親友推薦">親友推薦</option>
                        </select>
                    </div>
                </div>
                <div class="form-group hider">
                    <label for="q02" class="control-label">承上題，請輸入其他之原因</label>
                    <div class="">
                        <input type="text" class="form-control" id="q02" name="entryID" placeholder="請輸入其他之原因" >
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>