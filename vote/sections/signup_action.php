<?php
    include("../../db/db_connect.php");

    $CurTime = date("Y-m-d H:i:s");
    $cmd_signup = "INSERT INTO signup (time) VALUES ('$CurTime')";
    $signup = mysqli_query($db, $cmd_signup);

    header("Location: ../?vote=signup");
?>