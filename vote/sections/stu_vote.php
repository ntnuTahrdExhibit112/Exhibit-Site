<?php
    if (!isset($_SESSION['entryID'])) {
        $_SESSION['status'] = "not_verified";
        echo "<script>window.location.href = './?vote=stu_signup';</script>";
    }
    if ($_SESSION['status'] == "info_filled") {
        echo "<script>window.location.href = './?vote=done';</script>";
    }
    else if ($_SESSION['status'] == "voted") {
        echo "<script>window.location.href = './?vote=lottery';</script>";
    }
    $group_name = [
        "01 - 見紅就收", 
        "02 - Face to Virtual：高中生非同步模擬面試平台", 
        "03 - 體感互動遊戲輔助自閉症兒童動作學習系統", 
        "04 - Westpath 西境山海：生活科技多人數位密室逃脫遊戲", 
        "05 - 當科技與星星相遇：科技教育與特殊教育之整合探討", 
        "06 - 結合實體機械手臂與虛擬動畫的機電整合教材", 
        "07 - 快陶唄杯：特殊杯型咖啡保溫杯", 
        "08 - 無人機虛擬實境STEM學習系統", 
        "09 - Mini Escape：桌上型密室逃脫", 
        "10 - 進位制轉換AR桌遊", 
        "11 - 森の泉 - 療癒互動盆栽", 
        "12 - Mycto自行車安全帽", 
        "13 - 新式黑膠唱片機"
    ];
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
        <form class="form-horizontal" method="POST" action="./sections/stu_vote_action.php">
            <div class="flex form_container" id="form_container">
                <div class="form-group group_flex h3">
                    <label for="entryID" class="control-label col-6"><center>叛軍號召者姓名</center></label>
                    <div class="inline-block col-6">
                        <center><b class="h2" style="color: rgb(225,64,237) !important;"><?php echo $_SESSION['name'] ?></b></center>
                    </div>
                </div>
                <hr><hr>
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
                            <?php 
                                $disable = "";
                                for ($i = 0; $i < count($group_name); $i++) {
                                    if ($_SESSION['group_id'] == $i+1) {
                                        $disable = "disabled";
                                    }
                                    $value = $i+1;
                                    $option = '<option value="' . $value . '" ' . $disable . '>' . $group_name[$i] . '</option>';
                                    echo $option;
                                    $disable = "";
                                }
                            ?>
                        </select>
                    </div>
                </div>
                <!-- q08 -->
                <div class="form-group">
                    <label for="q08" class="control-label h5">你最喜歡的攤位空間佈置</label>
                    <div class="">
                        <select class="form-select form_single" id="q08" name="q08[]" required>
                            <option value="" disabled selected>請選擇一個專題組別</option>
                            <?php 
                                $disable = "";
                                for ($i = 0; $i < count($group_name); $i++) {
                                    if ($_SESSION['group_id'] == $i+1) {
                                        $disable = "disabled";
                                    }
                                    $value = $i+1;
                                    $option = '<option value="' . $value . '"' . $disable . '>' . $group_name[$i] . '</option>';
                                    echo $option;
                                    $disable = "";
                                }
                            ?>
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