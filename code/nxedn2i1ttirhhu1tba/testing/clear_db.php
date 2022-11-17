<?php 
    include("../../../db/db_connect.php");

    function logger($msg) {
        echo $msg . "<br>";
    }

    function truncate_table($db) {
        $cmd_code = "TRUNCATE TABLE code";
        $code = mysqli_query($db, $cmd_code);
        logger('table truncated. ');
    }
    
    truncate_table($db);
?>