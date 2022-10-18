<?php
    include("../db/db_connect.php");
    $signed_up = 0;
    if (!isset($_SESSION['ID'])) {  //not signed up yet
        $cmd_getCurCount = "SELECT * FROM signup";
        $getCurCount = mysqli_query($db, $cmd_getCurCount);
        $CurCount = mysqli_num_rows($getCurCount);
    }
    else {  //already signed up
        $showID = $_SESSION['ID'];
        $signed_up = 1;
    }

    
    $showID = "";

    function digitMaker($CurCount, $showID) {
        $digit_counter = 0;
        $Num = $CurCount;
        while ($Num != 0) {
            $Num = (int)($Num / 10);
            $digit_counter++;
        }

        for ($i = 0; $i < (4 - $digit_counter); $i++) {
            $showID .= "0";
        }
        $showID .= $CurCount;

        return $showID;
    }

    // $CurTime = date("Y-m-d H:i:s");
    // $cmd_signup = "INSERT INTO signup (time) VALUES ('$CurTime')";
    // $signup = mysqli_query($db, $cmd_signup);
    $showID = digitMaker($CurCount, $showID);
    if ($CurCount == 0) {
        $showID = "0000";
    }
?>
<style>
    .form-control {
        color: black !important;
    }
</style>
<div class="section-title">
    <h2>專題展入場</h2>
    <p>取得號碼牌</p>
</div>
<div class="row flex align-items-center justify-content-center" id="history"> <!--歷史沿革-->
    <div class="col-10 pt-4 pt-lg-0 content" data-aos="" data-aos-delay="100">
        <center>
            <h1 style="font-size: 3rem;">
                <?php 
                    if (!$signed_up) {
                        echo $showID;
                    }
                    else {
                        echo "<span>您已抽取過號碼牌！<br></span>";
                        echo $_SESSION['ID'];
                    }
                ?>
            </h1>
            <form class="row" method="POST" action="./sections/signup_action.php">
                <div class="form-group col-lg-6 mt-3">
                    <label class="h4" for="name">姓名</label>
                    <input class="form-control" name="name" placeholder="請填寫真實姓名唷！" required>
                </div>
                <div class="form-group col-lg-6 mt-3">
                    <label class="h4" for="phone">手機號碼</label>
                    <input class="form-control" name="phone" placeholder="Ex: 0912345678" required>
                </div>
                <div class="form-group mt-5">
                    <input class="hider" type="text" value="<?php echo $CurCount ?>">
                    <input class="btn get-started-btn" type="submit" value="領取號碼牌" style="margin-right: 0;">
                </div>
            </form>
        </center>
    </div>
</div>