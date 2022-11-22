<div class="message_wrap col-12">
    <div class="h5">
        <span class="id" style="float: left;">B<?php echo $i+1; ?></span>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['name']; ?>
        <div style="float: right;">
            <?php
                if (isset($_SESSION['message_id'])) {
                    if ($_SESSION['message_id'] == ($i+1)) {
                        include("others_btn.php"); 
                    }
                }
            ?>
        </div>
    </div>
    <div><p class="h4 p-3" style="word-break:break-all; "><?php echo nl2br($row['message']); ?></p></div>
</div>