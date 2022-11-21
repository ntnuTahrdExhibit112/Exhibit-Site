<div class="swiper-wrapper align-items-center">
    <?php 
        $media_count = 5;
        $media_src = [  // content, thumbnail
            ["1.jpg", "1.jpg"], 
            ["2.jpg", "2.jpg"], 
            ["3.mp4", "3.png"], 
            ["4.jpg", "4.jpg"], 
            ["5.JPG", "5.JPG"]
        ];
        $i = 0;
        while ($i != $media_count) {
            include("./sections/photo_slide_item.php");
            $i++;
        }
    ?>
</div>