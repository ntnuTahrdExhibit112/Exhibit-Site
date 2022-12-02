<?php
    include("../db/db_connect.php");
    $cmd_getAll = "SELECT * FROM signup WHERE info_filled=1";
    $getAll = mysqli_query($db, $cmd_getAll);
    
    for ($i = 0; $i < mysqli_num_rows($getAll); $i++) {
        $row1 = mysqli_fetch_assoc($getAll);
        $entryID = $row1['code'];
        $cmd_getVote = "SELECT * FROM vote WHERE entryID='$entryID'";
        $getVote = mysqli_query($db, $cmd_getVote);
        $row2 = mysqli_fetch_assoc($getVote);
        $cmd_getInfo = "SELECT * FROM lottery WHERE entryID='$entryID'";
        $getInfo = mysqli_query($db, $cmd_getInfo);
        $row3 = mysqli_fetch_assoc($getInfo);

        echo "<p>" . $entryID . "  |  " . $row3['name'] . "  |  " . $row3['phone'] . "  |  " . $row2['time'] . "<br> --> 如何得知：" . $row2['q01'] . "<br> --> 對展覽滿意的地方：" . $row2['q02'] . "<br> --> 觀展動機：" . $row2['q03'] . "<br> --> 希望了解的資訊：" . $row2['q04'] . "<br> --> 是否知道有線上展：" . $row2['q05'] . "<br> --> 其他建議：" . $row2['q06'] . "<br> --> 最喜歡作品：" . $row2['q07'] . "<br> --> 最喜歡攤位佈置：" . $row2['q08'] . "</p>";
    }
?>