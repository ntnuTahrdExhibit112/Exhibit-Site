<div class="swiper-wrapper align-items-center">
    <?php 
        $media_count = 2;
        $media_src = [  // content, thumbnail
            ["1.jpg", "1.jpg"],
            ["2.png", "2.png"]
        ];
        $i = 0;
        while ($i != $media_count) {
            include("./sections/photo_slide_item.php");
            $i++;
        }
    ?>
</div>