<?php
    include("../../../db/db_connect.php");
    $cmd_getAll = "SELECT * FROM code";
    $getAll = mysqli_query($db, $cmd_getAll);
    
    for ($i = 0; $i < mysqli_num_rows($getAll); $i++) {
        $code = mysqli_fetch_assoc($getAll);
        echo "<p>" . $code['id'] . "  |  " . $code['name'] . "  |  " . $code['email'] . "<br> --> 破關時間：" . $code['clear_time'] . "<br> --> 困難程度：" . $code['difficulty'] . "<br> --> 好玩程度" . $code['fun'] . "<br> --> " . $code['advise'] . "</p>";
    }
?>