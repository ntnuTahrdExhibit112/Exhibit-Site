<?php
    include("../../../db/db_connect.php");
    $cmd_getAll = "SELECT * FROM code";
    $getAll = mysqli_query($db, $cmd_getAll);
    
    for ($i = 0; $i < mysqli_num_rows($getAll); $i++) {
        $code = mysqli_fetch_assoc($getAll);
        echo $code['id'] . ", " . $code['name'] . ", " . $code['clear_time'];
    }
?>