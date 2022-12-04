<?php 
    $cmd_getVoted = "SELECT * FROM vote";
    $getVoted = mysqli_query($db, $cmd_getVoted);
    $vote_count = mysqli_num_rows($getVoted);

    $q07_result = ['1' => 0, '2' => 0, '3' => 0, '4' => 0, '5' => 0, '6' => 0, '7' => 0, '8' => 0, '9' => 0, '10' => 0, '11' => 0, '12' => 0, '13' => 0];
?>
<div class="h4">
    回饋及投票人數：<?php echo $vote_count; ?>
</div>