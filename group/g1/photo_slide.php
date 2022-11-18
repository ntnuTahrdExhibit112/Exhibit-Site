<div class="swiper-wrapper align-items-center">
    <?php 
        $media_count = 4;
        $media_src = [  // content, thumbnail
            ["1.jpg", "1.jpg"], 
            ["2.jpg", "2.jpg"], 
            ["3.jpg", "3.jpg"], 
            ["4.mp4", "4.png"]
        ];
        $i = 0;
        while ($i != $media_count) {
            include("./sections/photo_slide_item.php");
            $i++;
        }
    ?>
</div>