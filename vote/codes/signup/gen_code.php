<?php
    // include("../../../db/db_connect.php");
    // $cmd_truncate = "TRUNCATE TABLE signup";
    // $truncate = mysqli_query($db, $cmd_truncate);

    $order = [0];
    $code = [0];
    $code1 = [0];
    for ($i = 1; $i <= 500; $i++) {
        $order[$i] = $i;
    }
    // shuffle($order);
    for ($i = 1; $i <= 500; $i++) {
        $code[$i] = sha1(md5($order[$i]));
        for ($j = 0; $j < 4; $j++) {
            $code1[$i][$j] = $code[$i][$j];
        }
        $code[$i] = str_shuffle(implode($code1[$i]));
    }
    for ($i = 1; $i <= 500; $i++) {
        echo $order[$i] . "(" . $code[$i] . ")<br>";
    }
    // for ($i = 1; $i <= 500; $i++) {
    //     $cmd_insert = "INSERT INTO signup (ID, code) VALUES ('$order[$i]', '$code[$i]')";
    //     $insert = mysqli_query($db, $cmd_insert);
    // }
    // echo '<script type="text/javascript">
    //        window.location = "./check_code.php"
    //   </script>';
?>