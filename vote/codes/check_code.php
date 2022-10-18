<?php
    include("../../db/db_connect.php");
    $cmd_getCode = "SELECT code FROM signup";
    $getCode = mysqli_query($db, $cmd_getCode);
    
    $save = [0];
    $collisions = [0];
    print_r($collisions);
    $count = 0;
    for ($i = 0; $i < 500; $i++) {
        $code = mysqli_fetch_assoc($getCode);
        // echo $code['code'] . "<br>";
        $save[$i] = $code['code'];
    }
    function checkRepeat($a, $b) {
        if ($a == $b) {
            return true;
        }
    }
    function check($save) {
        for ($i = 0; $i < 500; $i++) {
            // echo $save[$i] . "<br>";
            for ($j = $i; $j < 500; $j++) {
                if ($j == $i) {
                    continue;
                }
                else if (checkRepeat($save[$i], $save[$j])) {
                    echo $i . "/" . $j . ": " . $save[$i] . "<br>";
                    $collisions[$count] = $i . "/" . $j;
                }
            }
        }

        return count($collisions);
    }
    if (check($save) != 0) {
        echo '<script type="text/javascript">
           window.location = "./gen_code.php"
      </script>';
    }
    else {
        echo "No codes collided. ";
    }
?>