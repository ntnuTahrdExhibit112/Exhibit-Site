<?php
    session_start();
    include("../../db/db_connect.php");
    
    $entryID = $_POST['entryID'];
    echo $entryID;

    $cmd_verify = "SELECT * FROM stu_signup WHERE code = '$entryID'";
    $verify = mysqli_query($db, $cmd_verify);

    if (mysqli_num_rows($verify) == 1) {
        $_SESSION['entryID'] = $entryID;

        $cmd_notVoted = "SELECT * FROM stu_signup WHERE code = '$entryID' AND voted=0";
        $notVoted = mysqli_query($db, $cmd_notVoted);
        if (mysqli_num_rows($notVoted) == 1) {
            $agent = mysqli_fetch_assoc($notVoted);
            $group_id = $agent['group_id'];
            $name = $agent['name'];
            $_SESSION['status'] = "verified";
            $_SESSION['group_id'] = "$group_id";
            $_SESSION['name'] = "$name";
            header("Location: ../?vote=stu_vote");
        }
        else {
            $cmd_notFilled = "SELECT * FROM stu_signup WHERE code = '$entryID' AND info_filled=0";
            $notFilled = mysqli_query($db, $cmd_notFilled);
            if (mysqli_num_rows($notFilled) == 1) {
                $_SESSION['status'] = "voted";
                header("Location: ../?vote=stu_lottery");
            }
            else {
                $_SESSION['status'] = "info_filled";
                header("Location: ../?vote=done");
            }
        }
    }
    else {
        $_SESSION['status'] = "error";
        // echo "error";
        header("Location: ../?vote=stu_signup");
    }
?>