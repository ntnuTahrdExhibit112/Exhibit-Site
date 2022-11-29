<?php
    include("../db/db_connect.php");

    $cmd_readData = "SELECT * FROM lottery WHERE drawn=0";
    $readData = mysqli_query($db, $cmd_readData);

    $undrawn_count = mysqli_num_rows($readData);
?>