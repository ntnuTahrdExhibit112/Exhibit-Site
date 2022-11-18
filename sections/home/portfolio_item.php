<div class="col-lg-4 col-md-4 portfolio-item filter-<?php echo($filter); ?> <?php if($filter2) echo("filter-" . $filter2); ?>">
    <div class="portfolio-wrap"> 
        <a href="<?php echo($cover) ?>" class="portfolio-lightbox" id="portfolio-link-<?php echo $i ?>" data-gallery="portfolio-<?php echo $i ?>">
            <img src="<?php echo($cover); ?>" class="img-fluid" alt="">
            <div class="portfolio-info">
                <h4><?php echo($title); ?></h4>
                <h6><?php echo($subtitle); ?></h6>
                <p><?php echo($category); ?><?php if($category2) echo(", " . $category2); ?></p>
            </div>
        </a>
    </div>
    <script>
        l_id = "portfolio-link-<?php echo $i ?>";
        l_link = "<?php echo($link) ?>";
        setListener(l_id, l_link);
    </script>
</div>