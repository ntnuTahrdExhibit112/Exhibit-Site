<?php
    session_start();
    include("../../../db/db_connect.php");

    $id = $_POST['id'];

    $cmd_checkExist = "SELECT * FROM code WHERE id='$id'";
    $checkExist = mysqli_query($db, $cmd_checkExist);

    if (mysqli_num_rows($checkExist) >= 1) {
        $_SESSION['search_status'] = "done";
        $row = mysqli_fetch_row($checkExist);
        $id = $row[0];
        $name = $row[1];
        $clear_time = $row[3];
        header("Location: ../search/?id=$id&name=$name&clear_time=$clear_time&end");
    }
    else {
        header("Location: ../search/?no_result=1&end");
    }

    
?>