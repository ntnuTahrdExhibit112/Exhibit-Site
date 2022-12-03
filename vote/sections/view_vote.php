<?php
    include("../db/db_connect.php");

    $cmd_readData = "SELECT q07, q08 FROM vote";
    $readData = mysqli_query($db, $cmd_readData);

    $q07_result = ['1' => 0, '2' => 0, '3' => 0, '4' => 0, '5' => 0, '6' => 0, '7' => 0, '8' => 0, '9' => 0, '10' => 0, '11' => 0, '12' => 0, '13' => 0];
    $q08_result = ['1' => 0, '2' => 0, '3' => 0, '4' => 0, '5' => 0, '6' => 0, '7' => 0, '8' => 0, '9' => 0, '10' => 0, '11' => 0, '12' => 0, '13' => 0];

    for ($i = 0; $i < mysqli_num_rows($readData); $i++) {
        $row = mysqli_fetch_assoc($readData);
        $q07_result[$row['q07']]++;
        $q08_result[$row['q08']]++;
        // echo $row['q07'] . ", " . $row['q08'] . "<br>";
    }
?>
<style>
    table, tr, td {
        border: 2px solid rgba(255, 255, 255, 0.7);
    }
</style>
<table>
    <tr>
        <td style="width: 10%">組別</td>
        <td style="width: 20%">最喜歡作品</td>
        <td style="width: 20%">最喜歡攤位佈置</td>
    </tr>
    <tr>
        <td>01</td>
        <td><?php echo $q07_result['1']; ?></td>
        <td><?php echo $q08_result['1']; ?></td>
    </tr>
    <tr>
        <td>02</td>
        <td><?php echo $q07_result['2']; ?></td>
        <td><?php echo $q08_result['2']; ?></td>
    </tr>
    <tr>
        <td>03</td>
        <td><?php echo $q07_result['3']; ?></td>
        <td><?php echo $q08_result['3']; ?></td>
    </tr>
    <tr>
        <td>04</td>
        <td><?php echo $q07_result['4']; ?></td>
        <td><?php echo $q08_result['4']; ?></td>
    </tr>
    <tr>
        <td>05</td>
        <td><?php echo $q07_result['5']; ?></td>
        <td><?php echo $q08_result['5']; ?></td>
    </tr>
    <tr>
        <td>06</td>
        <td><?php echo $q07_result['6']; ?></td>
        <td><?php echo $q08_result['6']; ?></td>
    </tr>
    <tr>
        <td>07</td>
        <td><?php echo $q07_result['7']; ?></td>
        <td><?php echo $q08_result['7']; ?></td>
    </tr>
    <tr>
        <td>08</td>
        <td><?php echo $q07_result['8']; ?></td>
        <td><?php echo $q08_result['8']; ?></td>
    </tr>
    <tr>
        <td>09</td>
        <td><?php echo $q07_result['9']; ?></td>
        <td><?php echo $q08_result['9']; ?></td>
    </tr>
    <tr>
        <td>10</td>
        <td><?php echo $q07_result['10']; ?></td>
        <td><?php echo $q08_result['10']; ?></td>
    </tr>
    <tr>
        <td>11</td>
        <td><?php echo $q07_result['11']; ?></td>
        <td><?php echo $q08_result['11']; ?></td>
    </tr>
    <tr>
        <td>12</td>
        <td><?php echo $q07_result['12']; ?></td>
        <td><?php echo $q08_result['12']; ?></td>
    </tr>
    <tr>
        <td>13</td>
        <td><?php echo $q07_result['13']; ?></td>
        <td><?php echo $q08_result['13']; ?></td>
    </tr>
</table>