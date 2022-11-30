<div>
    <p class="h2">reset page</p>
    <?php if (!isset($_SESSION['entryID'])) {echo "<!--";} ?>
    <a class="btn btn-danger m-3" href="?vote=<?php echo $resetter; ?>&reset=SignupStatus">reset Signup Status</a>
    <a class="btn btn-danger m-3" href="?vote=<?php echo $resetter; ?>&reset=stuSignupStatus">reset stu_Signup Status</a>
    <?php if (!isset($_SESSION['entryID'])) {echo "-->";} ?>
    <a class="btn btn-danger m-3" href="?vote=<?php echo $resetter; ?>&reset=truncateTable">truncate tables</a>
    <a class="btn btn-danger m-3" href="?vote=<?php echo $resetter; ?>&reset=entryID">reset entryID</a>
    <a class="btn btn-danger m-3" href="?vote=<?php echo $resetter; ?>&reset=group_id">reset group_id</a>
    <a class="btn btn-danger m-3" href="?vote=<?php echo $resetter; ?>&reset=name">reset name</a>

    <?php 
        include("../db/db_connect.php");

        function logger($msg) {
            echo $msg . "<br>";
        }

        function reset_SignupStatus($db) {
            $entryID = $_SESSION['entryID'];
            $cmd_reset_voted = "UPDATE signup SET voted=NULL WHERE code='$entryID'";
            $reset_voted = mysqli_query($db, $cmd_reset_voted);
            $cmd_reset_filled = "UPDATE signup SET info_filled=NULL WHERE code='$entryID'";
            $reset_filled = mysqli_query($db, $cmd_reset_filled);
            logger('status reset. ');
        }
        function reset_stuSignupStatus($db) {
            $entryID = $_SESSION['entryID'];
            $cmd_reset_voted = "UPDATE stu_signup SET voted=0 WHERE code='$entryID'";
            $reset_voted = mysqli_query($db, $cmd_reset_voted);
            $cmd_reset_filled = "UPDATE stu_signup SET info_filled=0 WHERE code='$entryID'";
            $reset_filled = mysqli_query($db, $cmd_reset_filled);
            logger('status reset. ');
        }

        function entryID() {
            unset($_SESSION['entryID']);
            logger('entryID cleared. ');
        }
        function group_id() {
            unset($_SESSION['group_id']);
            logger('group_id cleared. ');
        }
        function name() {
            unset($_SESSION['name']);
            logger('name cleared. ');
        }

        function truncate_table($db) {
            $cmd_vote = "TRUNCATE TABLE vote";
            $vote = mysqli_query($db, $cmd_vote);
            $cmd_lottery = "TRUNCATE TABLE lottery";
            $lottery = mysqli_query($db, $cmd_lottery);
            logger('table truncated. ');
        }

        if (isset($_GET['reset'])) {
            if ($_GET['reset'] == "SignupStatus") {
                reset_SignupStatus($db);
            }
            else if ($_GET['reset'] == "stuSignupStatus") {
                reset_stuSignupStatus($db);
            }
            else if ($_GET['reset'] == "truncateTable") {
                truncate_table($db);
            }
            else if ($_GET['reset'] == "entryID") {
                entryID();
            }
            else if ($_GET['reset'] == "group_id") {
                group_id();
            }
            else if ($_GET['reset'] == "name") {
                name();
            }
            // header("Location: ./?vote=$resetter");
            echo '<script type="text/javascript">window.location = "./?vote=' . $resetter . '"</script>';
        }
        // resetStatus($db);
        // entryID();
        // truncate_table($db);
    ?>
</div>