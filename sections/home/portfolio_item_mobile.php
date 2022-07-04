<div class="portfolio-item portfolio-item_mobile filter-<?php echo($filter); ?> <?php if($filter2) echo("filter-" . $filter2); ?>">
    <a href="<?php echo($link) ?>" class="portfolio-item_mobile_link">
        <table class="portfolio-table_mobile">
            <tr style="width: 100%;">
                <td style="width: 20%;"><img src="<?php echo($cover); ?>" class="img-fluid" alt="" style="border-radius: 5px;"></td>
                <td style="width: 60%;">
                    <p class="h5"><?php echo($title); ?></p>
                    <p class="h6"><?php echo($subtitle); ?></p>
                </td>
            </tr>
        </table>
    </a>
    <center><div class="divider"></div></center>
</div>