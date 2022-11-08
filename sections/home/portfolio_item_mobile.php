<div class="portfolio-item portfolio-item_mobile filter-<?php echo($filter); ?> <?php if($filter2) echo("filter-" . $filter2); ?>">
    <a href="<?php echo($cover) ?>" class="portfolio-item_mobile_link portfolio-lightbox" id="portfolio-mobile-link-<?php echo $i ?>" data-gallery="portfolio-mobile-<?php echo $i ?>">
        <table class="portfolio-table_mobile">
            <tr style="width: 100%;">
                <td style="width: 25%;"><img src="<?php echo($cover); ?>" class="img-fluid" alt="" style="border-radius: 5px;"></td>
                <td style="width: 55%;">
                    <p class="h5"><?php echo($title); ?></p>
                    <p class="h6"><?php echo($subtitle); ?></p>
                </td>
            </tr>
        </table>
    </a>
    <script>
        l_id = "portfolio-mobile-link-<?php echo $i ?>";
        l_link = "<?php echo($link) ?>";
        setListener(l_id, l_link);
    </script>
</div>