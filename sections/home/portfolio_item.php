<div class="col-lg-4 col-md-6 portfolio-item filter-<?php echo($filter); ?> <?php if($filter2) echo("filter-" . $filter2); ?>">
    <div class="portfolio-wrap"> 
        <a href="<?php echo($link) ?>">
            <img src="<?php echo($cover); ?>" class="img-fluid" alt="">
            <div class="portfolio-info">
                <h4><?php echo($title); ?></h4>
                <h6><?php echo($subtitle); ?></h6>
                <p><?php echo($category); ?><?php if($category2) echo(" / " . $category2); ?></p>
            </div>
        </a>
    </div>
</div>