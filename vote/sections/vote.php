<?php
    if (!isset($_SESSION['entryID'])) {
        $_SESSION['status'] = "not_verified";
        echo "<script>window.location.href = './?vote=signup';</script>";
    }
    if ($_SESSION['status'] == "info_filled") {
        echo "<script>window.location.href = './?vote=done';</script>";
    }
    else if ($_SESSION['status'] == "voted") {
        echo "<script>window.location.href = './?vote=lottery';</script>";
    }
?>
<script>
    $(document).ready(function() {
        $('.form_multiple').select2({
            tags: true, 
            tokenSeparators: [',', ' '], 
            placeholder: "請選擇或填寫您的答案"
        });
        // $('.form_single').select2({
        //     tokenSeparators: [',', ' '], 
        //     placeholder: "請選擇或填寫您的答案"
        // });
    });
</script>
<div class="section-title">
    <h2>觀展回饋＆抽獎</h2>
    <p>專題展覽回饋單</p>
    <img src="../assets/img/lu_deco.png" alt="" class="section_title_deco">
</div>
<div class="row flex align-items-center" id="vote_form">
    <div class="col-10 col-lg-6 col-md-8 pt-4 pt-lg-0 container" data-aos="" data-aos-delay="100">
        <form class="form-horizontal" method="POST" action="./sections/vote_action.php">
            <div class="flex form_container" id="form_container">
                <div class="form-group group_flex h3">
                    <label for="entryID" class="control-label col-6"><center>叛軍ID</center></label>
                    <div class="inline-block col-6">
                        <center><b class="h2" style="color: rgb(225,64,237) !important;"><?php echo $_SESSION['entryID'] ?></b></center>
                    </div>
                </div>
                <hr><hr>
                <!-- q01 -->
                <div class="form-group">
                    <label for="q01" class="control-label h5">您是如何得知「TECHPUNK」展覽活動？</label>
                    <div class="form_multiple_root">
                        <select class="form-select form_multiple" id="q01" name="q01[]" multiple required>
                            <option value="粉絲專頁">粉絲專頁</option>
                            <option value="海報">海報</option>
                            <option value="邀請卡">邀請卡</option>
                            <option value="宣傳小卡">宣傳小卡</option>
                            <option value="親友推薦">親友推薦</option>
                        </select>
                    </div>
                </div>
                <!-- q02 -->
                <div class="form-group">
                    <label for="q02" class="control-label h5">請問本次展覽令您滿意的地方？</label>
                    <div class="form_multiple_root">
                        <select class="form-select form_multiple" id="q02" name="q02[]" multiple required>
                            <option value="動線規劃">動線規劃</option>
                            <option value="攤位空間">攤位空間</option>
                            <option value="場地布置">場地布置</option>
                            <option value="展覽刊物">展覽刊物</option>
                            <option value="活動流程">活動流程</option>
                            <option value="接待服務">接待服務</option>
                            <option value="宣傳活動">宣傳活動</option>
                            <option value="工作坊">工作坊</option>
                            <option value="展覽時間與地點">展覽時間與地點</option>
                        </select>
                    </div>
                </div>
                <!-- q03 -->
                <div class="form-group h5">
                    <label for="q03" class="control-label h5">您參觀此展覽動機為？</label>
                    <div class="form_multiple_root">
                        <select class="form-select form_multiple" id="q03" name="q03[]" multiple required>
                            <option value="課堂參觀">課堂參觀</option>
                            <option value="創意觀摩">創意觀摩</option>
                            <option value="想接觸相關資訊">想接觸相關資訊</option>
                            <option value="拜訪朋友">拜訪朋友</option>
                            <option value="單純來看看">單純來看看</option>
                        </select>
                    </div>
                </div>
                <!-- q04 -->
                <div class="form-group">
                    <label for="q04" class="control-label h5">您希望在未來舉辦的展覽活動中可了解到的資訊？</label>
                    <div class="form_multiple_root">
                        <select class="form-select form_multiple" id="q04" name="q04[]" multiple required>
                            <option value="最新科技">最新科技</option>
                            <option value="科技系相關">科技系相關</option>
                            <option value="製作相關">製作相關</option>
                            <option value="程式相關">程式相關</option>
                            <option value="人力資源相關">人力資源相關</option>
                        </select>
                    </div>
                </div>
                <!-- q05 -->
                <div class="form-group">
                    <label for="q05" class="control-label h5">你是否知道本次展覽活動「TECHPUNK」有線上展覽的方式？</label>
                    <div class="form_multiple_root">
                        <select class="form-select form_single" id="q05" name="q05[]" required>
                            <option value="0" disabled selected>請選擇您的答案</option>
                            <option value="知道線上展覽，且有實際參與">知道線上展覽，且有實際參與</option>
                            <option value="知道線上展覽，沒有實際參與">知道線上展覽，沒有實際參與</option>
                            <option value="沒有接收到相關資訊">沒有接收到相關資訊</option>
                        </select>
                    </div>
                </div>
                <!-- q06 -->
                <div class="form-group">
                    <label for="q06" class="control-label h5">對於本次展覽是否有其他建議供我們改進？</label>
                    <div class="form_multiple_root">
                        <input type="text" class="form-control" id="q06" name="q06[]" placeholder="請填寫建議" required>
                    </div>
                </div>
                <!-- q07 -->
                <div class="form-group">
                    <label for="q07" class="control-label h5">您最喜歡的作品</label>
                    <div class="form_multiple_root">
                        <select class="form-select form_single" id="q07" name="q07[]" required>
                            <option value="" disabled selected>請選擇一個專題組別</option>
                            <option value="1">01 - 見紅就收</option>
                            <option value="2">02 - Face to Virtual：高中生非同步模擬面試平台</option>
                            <option value="3">03 - 體感互動遊戲輔助自閉症兒童動作學習系統</option>
                            <option value="4">04 - Westpath 西境山海：生活科技多人數位密室逃脫遊戲</option>
                            <option value="5">05 - 當科技與星星相遇：科技教育與特殊教育之整合探討</option>
                            <option value="6">06 - 結合實體機械手臂與虛擬動畫的機電整合教材</option>
                            <option value="7">07 - 快陶唄杯：特殊杯型咖啡保溫杯</option>
                            <option value="8">08 - 無人機虛擬實境STEM學習系統</option>
                            <option value="9">09 - Mini Escape：桌上型密室逃脫</option>
                            <option value="10">10 - 進位制轉換AR桌遊</option>
                            <option value="11">11 - 森の泉 - 療癒互動盆栽</option>
                            <option value="12">12 - Mycto自行車安全帽</option>
                            <option value="13">13 - 新式黑膠唱片機</option>
                        </select>
                    </div>
                </div>
                <!-- q08 -->
                <div class="form-group">
                    <label for="q08" class="control-label h5">你最喜歡的攤位空間佈置</label>
                    <div class="">
                        <select class="form-select form_single" id="q08" name="q08[]" required>
                            <option value="" disabled selected>請選擇一個專題組別</option>
                            <option value="1">01 - 見紅就收</option>
                            <option value="2">02 - Face to Virtual：高中生非同步模擬面試平台</option>
                            <option value="3">03 - 體感互動遊戲輔助自閉症兒童動作學習系統</option>
                            <option value="4">04 - Westpath 西境山海：生活科技多人數位密室逃脫遊戲</option>
                            <option value="5">05 - 當科技與星星相遇：科技教育與特殊教育之整合探討</option>
                            <option value="6">06 - 結合實體機械手臂與虛擬動畫的機電整合教材</option>
                            <option value="7">07 - 快陶唄杯：特殊杯型咖啡保溫杯</option>
                            <option value="8">08 - 無人機虛擬實境STEM學習系統</option>
                            <option value="9">09 - Mini Escape：桌上型密室逃脫</option>
                            <option value="10">10 - 進位制轉換AR桌遊</option>
                            <option value="11">11 - 森の泉 - 療癒互動盆栽</option>
                            <option value="12">12 - Mycto自行車安全帽</option>
                            <option value="13">13 - 新式黑膠唱片機</option>
                        </select>
                    </div>
                </div>

                <div class="row flex justify-content-end mt-5">
                    <input class="btn btn-success col-lg-4 col-md-4 col-6" type="submit" value="填寫抽獎資訊">
                </div>
            </div>
        </form>
    </div>
</div>