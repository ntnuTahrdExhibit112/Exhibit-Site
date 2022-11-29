<?php
    include("../../db/db_connect.php");

    $cmd_readData = "SELECT * FROM lottery";
    $readData = mysqli_query($db, $cmd_readData);

    $data = [];
    // $rows = mysqli_num_rows($readData);
    for ($i = 0; $i < mysqli_num_rows($readData); $i++) {
        $row = mysqli_fetch_assoc($readData);
        array_push($data, $row);
    }
    
?>