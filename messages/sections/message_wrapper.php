<div class="message_wrap col-12">
    <div class="h5">
        <span class="id hider" style="float: left;">B<?php echo $row['id']; ?>/ &nbsp;&nbsp;&nbsp;&nbsp;</span><?php echo $row['name']; ?>
        <div style="float: right;">
            <?php
                if (isset($_SESSION['message_id'])) {
                    if ($_SESSION['message_id'] == ($row['id'])) {
                        include("others_btn.php"); 
                    }
                }
            ?>
        </div>
    </div>
    <div><p class="h4 p-3" style="word-break:break-all; "><?php echo nl2br($row['message']); ?></p></div>
</div>