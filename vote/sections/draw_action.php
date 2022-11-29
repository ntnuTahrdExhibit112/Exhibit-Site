<?php
    session_start();
    include("../../db/db_connect.php");

    // if (!isset($_SESSION['draw_round'])) {
    //     $_SESSION['draw_round'] = 1;
    // }
    // else {
    //     $_SESSION['draw_round']++;
    // }
    // $draw_round = $_SESSION['draw_round'];
    $need = $_POST['draw'];

    $cmd_readData = "SELECT * FROM lottery WHERE drawn=0";
    $readData = mysqli_query($db, $cmd_readData);

    $data = [];
    $rows = mysqli_num_rows($readData);
    for ($i = 0; $i < $rows; $i++) {
        $row = mysqli_fetch_assoc($readData);
        array_push($data, $row);
    }

    // print_r($data);
    shuffle($data);
    // echo "<br>";
    // print_r($data);
    $data_return = [];
    if ($need <= $rows) {
        for ($i = 0; $i < $need; $i++) {
            array_push($data_return, $data[$i]);
            $entryID = $data[$i]['entryID'];
            $cmd_markAsDrawn = "UPDATE lottery SET drawn=1 WHERE entryID='$entryID'";
            $markAsDrawn = mysqli_query($db, $cmd_markAsDrawn);
        }
        $_SESSION['data_return'] = $data_return;

        header("Location: ../?vote=drawn");
    }
    else {
        $_SESSION['draw_error'] = "insufficient";
        header("Location: ../?vote=draw");
    }
    
    echo "<a href='../?vote=drawn'>continue</a>"
?>