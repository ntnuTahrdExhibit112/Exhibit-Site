<div class="swiper-wrapper align-items-center">
    <?php 
        $media_count = 3;
        $media_src = [  // content, thumbnail
            ["1.png", "1.png"], 
            ["2.png", "2.png"], 
            ["3.jpg", "3.jpg"]
        ];
        $i = 0;
        while ($i != $media_count) {
            include("./sections/photo_slide_item.php");
            $i++;
        }
    ?>
</div>