<?php
    // get the current view
    $count = file_get_contents("../browseCount/count.txt");
    
    /* if (!isset($_COOKIE['article_read'])) {
        setcookie("article_read", 1, time()+3600);
        $count++;
        $fp = fopen("./sections/browseCount/count.txt", "w");
        fwrite($fp, $count);
        fclose($fp);
    } */
    $browseCount = $count;
    //echo $count;
?>