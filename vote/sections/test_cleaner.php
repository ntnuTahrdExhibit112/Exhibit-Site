<div>
    <p>reset page</p>
    <?php 
        include("../db/db_connect.php");

        function logger($msg) {
            echo $msg . "<br>";
        }

        function resetStatus($db) {
            $entryID = $_SESSION['entryID'];
            $cmd_reset_voted = "UPDATE signup SET voted=NULL WHERE code='$entryID'";
            $reset_voted = mysqli_query($db, $cmd_reset_voted);
            $cmd_reset_filled = "UPDATE signup SET info_filled=NULL WHERE code='$entryID'";
            $reset_filled = mysqli_query($db, $cmd_reset_filled);
            logger('status reset. ');
        }

        function entryID() {
            unset($_SESSION['entryID']);
            logger('entryID cleared. ');
        }

        function truncate_table($db) {
            $cmd_vote = "TRUNCATE TABLE vote";
            $vote = mysqli_query($db, $cmd_vote);
            $cmd_lottery = "TRUNCATE TABLE lottery";
            $lottery = mysqli_query($db, $cmd_lottery);
            logger('table truncated. ');
        }

        resetStatus($db);
        entryID();
        truncate_table($db);
    ?>
</div>