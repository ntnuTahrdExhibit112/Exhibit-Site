<?php
    session_start();
    include("../../db/db_connect.php");
    
    $entryID = $_POST['entryID'];
    echo $entryID;

    $cmd_verify = "SELECT * FROM signup WHERE code = '$entryID' AND voted IS NULL";
    $verify = mysqli_query($db, $cmd_verify);

    if (mysqli_num_rows($verify) == 1) {
        $_SESSION['entryID'] = $entryID;
        $_SESSION['status'] = "verified";
        // echo "verified";
        header("Location: ../?vote=vote");
    }
    else {
        $_SESSION['status'] = "error";
        // echo "error";
        header("Location: ../?vote=signup");
    }
?>