<?php
    session_start();
    $entryID = $_SESSION['entryID'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    
    include("../../db/db_connect.php");

    $cmd_storeData = "INSERT INTO lottery(entryID, name, phone) VALUES('$entryID', '$name', '$phone')";
    $storeData = mysqli_query($db, $cmd_storeData);

    //mark as voted in signup table
    $cmd_markAsFilled = "UPDATE signup SET info_filled=1 WHERE code='$entryID'";
    $markAsFilled = mysqli_query($db, $cmd_markAsFilled);
    $_SESSION['status'] = "info_filled";

    header("Location: ../?vote=done");
?>