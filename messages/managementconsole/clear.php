<?php
    session_start();
    include("../../db/db_connect.php");
    session_destroy();

    $cmd_clear = "TRUNCATE TABLE messages";
    $clear = mysqli_query($db, $cmd_clear);

    header("Location: ./");
?>