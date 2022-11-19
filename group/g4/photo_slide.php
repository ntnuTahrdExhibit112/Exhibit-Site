<div class="swiper-wrapper align-items-center">
    <?php 
        $media_count = 7;
        $media_src = [  // content, thumbnail
            ["1.jpg", "1.jpg"], 
            ["2.mp4", "2.png"], 
            ["3.png", "3.png"], 
            ["4.jpg", "4.jpg"], 
            ["5.jpg", "5.jpg"], 
            ["6.jpg", "6.jpg"], 
            ["7.jpg", "7.jpg"]
        ];
        $i = 0;
        while ($i != $media_count) {
            include("./sections/photo_slide_item.php");
            $i++;
        }
    ?>
</div>