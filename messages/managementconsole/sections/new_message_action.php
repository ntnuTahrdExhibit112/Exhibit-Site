<?php
    include("../../db/db_connect.php");
    session_start();

    $name = $_POST['name'];
    $message = $_POST['message'];
    // echo $name . "<br><p class='m-5'>" . nl2br($message) . "</p>";
    date_default_timezone_set('Asia/Taipei');
    $currentTime = date("Y/m/d H:i:s");

    $cmd_storeData = "INSERT INTO messages(time, name, message) VALUES('$currentTime', '$name', '$message')";
    $storeData = mysqli_query($db, $cmd_storeData);

    $cmd_getID = "SELECT id FROM messages WHERE name='$name' AND time='$currentTime'";
    $getID = mysqli_query($db, $cmd_getID);
    $row = mysqli_fetch_assoc($getID);
    $id = $row['id'];
    // echo $id;
    $_SESSION['message_id'] = $id;

    header("Location: ../");
?>