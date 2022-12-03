<?php
    include("../db/db_connect.php");

    $cmd_readData = "SELECT q07, q08 FROM vote";
    $readData = mysqli_query($db, $cmd_readData);

    $q07_result = ['1' => 0, '2' => 0, '3' => 0, '4' => 0, '5' => 0, '6' => 0, '7' => 0, '8' => 0, '9' => 0, '10' => 0, '11' => 0, '12' => 0, '13' => 0];
    $q08_result = ['1' => 0, '2' => 0, '3' => 0, '4' => 0, '5' => 0, '6' => 0, '7' => 0, '8' => 0, '9' => 0, '10' => 0, '11' => 0, '12' => 0, '13' => 0];
    $q09_result = ['1' => 0, '2' => 0, '3' => 0, '4' => 0, '5' => 0, '6' => 0, '7' => 0, '8' => 0, '9' => 0, '10' => 0, '11' => 0, '12' => 0, '13' => 0];
    
    //test
    // $q07_result = ['1' => 10, '2' => 3, '3' => 4, '4' => 10, '5' => 7, '6' => 9, '7' => 10, '8' => 0, '9' => 0, '10' => 5, '11' => 0, '12' => 0, '13' => 0];
    // $q08_result = ['1' => 0, '2' => 0, '3' => 0, '4' => 0, '5' => 4, '6' => 0, '7' => 0, '8' => 10, '9' => 0, '10' => 20, '11' => 0, '12' => 0, '13' => 0];
    // echo count($q07_result);

    for ($i = 0; $i < mysqli_num_rows($readData); $i++) {
        $row = mysqli_fetch_assoc($readData);
        $q07_result[$row['q07']]++;
        $q08_result[$row['q08']]++;
        // echo $row['q07'] . ", " . $row['q08'] . "<br>";
    }
    
    function print_result() {
        echo " | ";
        foreach ($q07_result as $key => $val) {
            echo "(" . $key . ", " . $val . ") | ";
        }
        echo "<br> | ";
        foreach ($q08_result as $key => $val) {
            echo "(" . $key . ", " . $val . ") | ";
        }
        echo "<br> | ";
        foreach ($q09_result as $key => $val) {
            echo "(" . $key . ", " . $val . ") | ";
        }
        echo "<br>";
        echo "<br>";
    }

    $q07_sorted = $q07_result;
    $q08_sorted = $q08_result;
    $q09_sorted = $q09_result;
    arsort($q07_sorted);
    arsort($q08_sorted);
    arsort($q09_sorted);

    function print_sorted() {
        echo " | ";
        foreach ($q07_sorted as $key => $val) {
            // if ($i07 > 2) {break;}
            echo "(" . $key . ", " . $val . ") | ";
            // $i07++;
        }
        echo "<br> | ";
        foreach ($q08_sorted as $key => $val) {
            // if ($i08 > 2) {break;}
            echo "(" . $key . ", " . $val . ") | ";
            // $i08++;
        }
        echo "<br> | ";
        foreach ($q09_sorted as $key => $val) {
            // if ($i09 > 2) {break;}
            echo "(" . $key . ", " . $val . ") | ";
            // $i09++;
        }
        echo "<br>";
        echo "<br>";
    }

    $q07_rank = [[], [], []];
    $q07_score = [];
    $i07 = 0;
    $t_prev = -1;
    $t_rank = 0;
    foreach ($q07_sorted as $key => $val) {
        if ($i07 < 3) {
            // echo "(" . $key . ", " . $val . ")<br>";
            $i07++;
            if ($t_prev == -1) {
                $t_prev = $val;
            }
            else if ($t_prev == $val) {
                $i07--;
            }
            else {
                $t_rank++;
            }
            array_push($q07_rank[$t_rank], $key);
            $q07_score[$t_rank] = $val;
        }
        else {
            break;
        }
    }
    // echo "<br>";
    $q08_rank = [[], [], []];
    $q08_score = [];
    $i08 = 0;
    $t_prev = -1;
    $t_rank = 0;
    foreach ($q08_sorted as $key => $val) {
        if ($i08 < 3) {
            // echo "(" . $key . ", " . $val . ")<br>";
            $i08++;
            if ($t_prev == -1) {
                $t_prev = $val;
            }
            else if ($t_prev == $val) {
                $i08--;
            }
            else {
                $t_rank++;
            }
            array_push($q08_rank[$t_rank], $key);
            $q08_score[$t_rank] = $val;
        }
        else {
            break;
        }
    }
    $q09_rank = [[], [], []];
    $q09_score = [];
    $i09 = 0;
    $t_prev = -1;
    $t_rank = 0;
    foreach ($q09_sorted as $key => $val) {
        if ($i09 < 3) {
            // echo "(" . $key . ", " . $val . ")<br>";
            $i09++;
            if ($t_prev == -1) {
                $t_prev = $val;
            }
            else if ($t_prev == $val) {
                $i09--;
            }
            else {
                $t_rank++;
            }
            array_push($q09_rank[$t_rank], $key);
            $q09_score[$t_rank] = $val;
        }
        else {
            break;
        }
    }
    // echo "<br>";
    // echo "<br>";

    // print_r($q07_rank);
    // echo "<br>";
    // print_r($q08_rank);
?>