<?php
    // get the current view
    $count_dir = "browseCount/count.txt";
    if (!$isroot) {
        $count_dir = "../browseCount/count.txt";
    }
    $count = file_get_contents($count_dir);
    
    if (!isset($_COOKIE['article_read'])) {
        setcookie("article_read", 1, time()+3600);
        $count++;
        $fp = fopen("browseCount/count.txt", "w");
        fwrite($fp, $count);
        fclose($fp);
    }
    $browseCount = $count;
    //echo $count;
?>