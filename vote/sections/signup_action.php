<?php
    session_start();
    include("../../db/db_connect.php");
    
    $entryID = $_POST['entryID'];
    echo $entryID;

    $cmd_verify = "SELECT * FROM signup WHERE code = '$entryID'";
    $verify = mysqli_query($db, $cmd_verify);

    if (mysqli_num_rows($verify) == 1) {
        $_SESSION['entryID'] = $entryID;

        if (isset($_SESSION['lottery_only1'])) {
            $cmd_markAsVoted = "UPDATE signup SET voted=1 WHERE code='$entryID'";
            $markAsVoted = mysqli_query($db, $cmd_markAsVoted);
            $_SESSION['status'] = "voted";
            unset($_SESSION['lottery_only1']);
            header("Location: ../?vote=lottery");
        }
        else {
            $cmd_notVoted = "SELECT * FROM signup WHERE code = '$entryID' AND voted IS NULL";
            $notVoted = mysqli_query($db, $cmd_notVoted);
            if (mysqli_num_rows($notVoted) == 1) {
                $_SESSION['status'] = "verified";
                header("Location: ../?vote=vote");
            }
            else {
                $cmd_notFilled = "SELECT * FROM signup WHERE code = '$entryID' AND info_filled IS NULL";
                $notFilled = mysqli_query($db, $cmd_notFilled);
                if (mysqli_num_rows($notFilled) == 1) {
                    $_SESSION['status'] = "voted";
                    header("Location: ../?vote=lottery");
                }
                else {
                    $_SESSION['status'] = "info_filled";
                    header("Location: ../?vote=done");
                }
            }
        }
    }
    else {
        $_SESSION['status'] = "error";
        // echo "error";
        header("Location: ../?vote=signup");
    }
?>