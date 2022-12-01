<?php
    date_default_timezone_set('Asia/Taipei');
    $endDate = new DateTime('2022-12-2 00:54:00');
    $currentDate = new DateTime();
    if ($endDate < $currentDate) {
        echo "passed";
    }
    else {
        echo "nope";
    }
?>