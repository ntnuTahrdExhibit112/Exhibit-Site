<div class="swiper-wrapper align-items-center">
    <?php 
        $media_count = 8;
        $media_src = [  // content, thumbnail
            ["1.png", "1.png"], 
            ["2.png", "2.png"], 
            ["3.png", "3.png"], 
            ["4.png", "4.png"], 
            ["5.png", "5.png"], 
            ["6.png", "6.png"], 
            ["7.png", "7.png"], 
            ["8.mp4", "8.png"]
        ];
        $i = 0;
        while ($i != $media_count) {
            include("./sections/photo_slide_item.php");
            $i++;
        }
    ?>
</div>