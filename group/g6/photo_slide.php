<div class="swiper-wrapper align-items-center">
    <?php 
        $media_count = 7;
        $media_src = [  // content, thumbnail
            ["1.jpg", "1.jpg"], 
            ["2.png", "2.png"], 
            ["3.jpg", "3.jpg"], 
            ["4.jpg", "4.jpg"], 
            ["5.JPG", "5.JPG"], 
            ["6.mp4", "6.png"], 
            ["7.mp4", "7.png"]
        ];
        $i = 0;
        while ($i != $media_count) {
            include("./sections/photo_slide_item.php");
            $i++;
        }
    ?>
</div>