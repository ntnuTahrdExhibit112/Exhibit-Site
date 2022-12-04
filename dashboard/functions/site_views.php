<?php
    $site_views = file_get_contents("../browseCount/count.txt");
?>
<div class="h4">
    網站瀏覽人次：<?php echo $site_views; ?>
</div>