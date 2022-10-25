<?php
    $questions = ['q01', 'q02', 'q03', 'q04', 'q05', 'q06', 'q07', 'q08'];
    for ($i = 0; $i < 8; $i++) {
        echo $questions[$i] . ": ";
        foreach ($_POST[$questions[$i]] as $item) {
            echo $item . " ";
        }
        echo "<br>";
    }
?>