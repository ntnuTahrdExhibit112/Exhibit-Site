<?php
    include("../db/db_connect.php");

    $cmd_getCurCount = "SELECT * FROM signup";
    $getCurCount = mysqli_query($db, $cmd_getCurCount);
    $CurCount = mysqli_num_rows($getCurCount);
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
<div class="section-title">
    <h2>專題展入場</h2>
    <p>取得號碼牌</p>
</div>
<div class="row flex align-items-center" id="history"> <!--歷史沿革-->
    <div class="col-12 pt-4 pt-lg-0 content" data-aos="" data-aos-delay="100">
        <center>
            <h1 ><?php echo $showID ?></h1>
            <form method="POST" action="./sections/signup_action.php">
                <input class="btn get-started-btn" type="submit" value="領取號碼牌">
            </form>
        </center>
    </div>
</div>