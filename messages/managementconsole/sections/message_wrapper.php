<div class="message_wrap col-12">
    <div class="h5">
        <span class="id" style="float: left;">
            ID: <?php echo $row['id']; ?>&nbsp;&nbsp;&nbsp;&nbsp;
        </span>
        <?php echo $row['name']; ?>&nbsp;&nbsp;&nbsp;&nbsp;
        <?php echo $row['time']; ?>
        <div style="float: right;">
            <?php
                include("others_btn.php");
            ?>
        </div>
    </div>
    <div><p class="h4 p-3" style="word-break:break-all; "><?php echo nl2br($row['message']); ?></p></div>
</div>