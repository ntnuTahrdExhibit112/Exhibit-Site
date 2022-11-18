<div class="swiper-wrapper align-items-center">
    <?php 
        $media_count = 6;
        $media_src = [  // content, thumbnail
            ["1.jpg", "1.jpg"], 
            ["2.jpg", "2.jpg"], 
            ["3.jpg", "3.jpg"], 
            ["4.jpg", "4.jpg"], 
            ["5.mp4", "5.png"], 
            ["6.mp4", "6.png"]
        ];
        $i = 0;
        while ($i != $media_count) {
            include("./sections/photo_slide_item.php");
            $i++;
        }
    ?>
</div>