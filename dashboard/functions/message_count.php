<?php 
    $cmd_GetMessage = "SELECT * FROM messages";
    $GetMessage = mysqli_query($db, $cmd_GetMessage);
    $message_count = mysqli_num_rows($GetMessage);
?>
<div class="h4">
    留言人數：<?php echo $message_count; ?>
</div>