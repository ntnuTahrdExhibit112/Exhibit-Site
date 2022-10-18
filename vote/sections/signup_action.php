<?php
    session_start();
    include("../../db/db_connect.php");
    
    $name = $_POST['name'];
    $phone = $_POST['phone'];

    // check if name and phone exists
    $cmd_CheckExist = "SELECT * FROM signup WHERE (name = '$name' OR phone = '$phone')";
    $CheckExist = mysqli_query($db, $cmd_CheckExist);

    if (mysqli_num_rows($CheckExist) >= 1) {
        
    }
    else {
        $CurTime = date("Y-m-d H:i:s", time() + 8 * 60 * 60);
        $cmd_signup = "INSERT INTO signup (name, phone, time) VALUES ('$name', '$phone', '$CurTime')";
        $signup = mysqli_query($db, $cmd_signup);
        
        $_SESSION['ID'] = 
    }

    header("Location: ../?vote=signup");
?>