<?php
    session_start();
    include("../../db/db_connect.php");
    
    $entryID = $_POST['entryID'];
    echo $entryID;

    $cmd_verify = "SELECT * FROM signup WHERE code = '$entryID'";
    $verify = mysqli_query($db, $cmd_verify);

    if (mysqli_num_rows($verify) == 1) {
        $cmd_isVoted = "SELECT * FROM signup WHERE code = '$entryID' AND voted IS NULL";
        $isVoted = mysqli_query($db, $cmd_isVoted);
        
        if (mysqli_num_rows($verify) == 1) {
            $_SESSION['entryID'] = $entryID;
            $_SESSION['status'] = "verified";
            // echo "verified";
            header("Location: ../?vote=vote");
        }
        else {
            
        }
    }
    else {
        $_SESSION['status'] = "error";
        // echo "error";
        header("Location: ../?vote=signup");
    }
?>