<?php
    include("../../../db/db_connect.php");
    $cmd_getCode = "SELECT code FROM signup";
    $getCode = mysqli_query($db, $cmd_getCode);
    
    // $save = [0];
    for ($i = 0; $i < 500; $i++) {
        $code = mysqli_fetch_assoc($getCode);
        echo $code['code'] . "<br>";
        // $save[$i] = $code['code'];
    }
?>