<div>
    <p>reset page</p>
    <?php 
        include("../db/db_connect.php");

        function logger($msg) {
            echo $msg . "<br>";
        }

        function entryID() {
            unset($_SESSION['entryID']);
            
            logger('entryID cleared.');
        }

        function truncate_table($db) {
            $cmd_vote = "TRUNCATE TABLE vote";
            $vote = mysqli_query($db, $cmd_vote);
            $cmd_lottery = "TRUNCATE TABLE lottery";
            $lottery = mysqli_query($db, $cmd_lottery);
            
            logger('table truncated.');
        }

        entryID();
        truncate_table($db);
    ?>
</div>