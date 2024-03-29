<?php
    session_start();
    $entryID = $_SESSION['entryID'];
    // echo $entryID;
    
    include("../../db/db_connect.php");

    $questions = ['q01', 'q02', 'q03', 'q04', 'q05', 'q06', 'q07', 'q08'];
    $data = [];

    //get counts
    $count_questions = count($questions);

    //store POSTed form data as $data
    for ($i = 0; $i < $count_questions; $i++) {
        $data[$i] = implode(", ", $_POST[$questions[$i]]);
    }
    // for ($i = 0; $i < $count_questions; $i++) {
    //     echo $data[$i] . '<br>';
    // }

    //store data into db
    date_default_timezone_set('Asia/Taipei');
    $currentTime = date("Y/m/d H:i:s");
    $cmd_storeData = "INSERT INTO vote(entryID, time, q01, q02, q03, q04, q05, q06, q07, q08) VALUES('$entryID', '$currentTime', '$data[0]', '$data[1]', '$data[2]', '$data[3]', '$data[4]', '$data[5]', '$data[6]', '$data[7]')";
    $storeData = mysqli_query($db, $cmd_storeData);

    //mark as voted in signup table
    $cmd_markAsVoted = "UPDATE signup SET voted=1 WHERE code='$entryID'";
    $markAsVoted = mysqli_query($db, $cmd_markAsVoted);
    $_SESSION['status'] = "voted";

    header("Location: ../?vote=lottery");

?>