<?php 
    $cmd_getLottery = "SELECT * FROM lottery";
    $getLottery = mysqli_query($db, $cmd_getLottery);
    $lottery_count = mysqli_num_rows($getLottery);
?>
<div class="h4">
    抽獎參與人數：<?php echo $lottery_count; ?>
</div>