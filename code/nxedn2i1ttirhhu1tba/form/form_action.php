<?php
    session_start();
    include("../../../db/db_connect.php");

    $name = $_POST['name'];
    $email = $_POST['email'];
    $clear_time = $_SESSION['clear_time'];
    $difficulty = $_POST['difficulty'];
    $fun = $_POST['fun'];
    $advise = $_POST['advise'];

    $id = substr(md5($name . $email . $clear_time . $difficulty . $fun . $advise), 0, 10);
    $_SESSION['code_id'] = "$id";
    $_SESSION['code_name'] = "$name";
    $_SESSION['code_clear_time'] = "$clear_time";

    echo $name . "<br>";
    echo $email . "<br>";
    echo $clear_time . "<br>";
    echo $difficulty . "<br>";
    echo $fun . "<br>";
    echo $advise . "<br>";
    echo $id . "<br>";

    $cmd_checkExist = "SELECT * FROM code WHERE name='$name' AND email='$email'";
    $checkExist = mysqli_query($db, $cmd_checkExist);

    if (mysqli_num_rows($checkExist) >= 1) {
        $_SESSION['code_status'] = "exist";
    }
    else {
        $cmd_storeData = "INSERT INTO code(id, name, email, clear_time, difficulty, fun, advise) VALUES('$id', '$name', '$email', '$clear_time', '$difficulty', '$fun', '$advise')";
        $storeData = mysqli_query($db, $cmd_storeData);
        $_SESSION['code_status'] = "done";
    }

    header("Location: ../done/");
?>