<?php 
    include("../../../db/db_connect.php");
    session_start();

    $message_id = $_GET['message_id'];
    unset($_SESSION['message_id']);
    
    $cmd_getInfo = "SELECT * FROM messages WHERE id = '$message_id'";
    $getInfo = mysqli_query($db, $cmd_getInfo);
    $deleteTarget = mysqli_fetch_assoc($getInfo);

    $cmd_messageDelete = "DELETE FROM messages WHERE id = '$message_id'";
    $messageDelete = mysqli_query($db, $cmd_messageDelete);

    if ($messageDelete) {
        $_SESSION['message_deleted'] = "success";
    }
    else {
        $_SESSION['message_deleted'] = "failed";
    }
    header("Location: ../");
?>