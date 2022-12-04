<?php
    function rgbGen() {
        $r = rand(0, 255);
        $g = rand(0, 255);
        $b = rand(0, 255);
        return "rgb(" . $r . ", " . $g . ", " . $b . ")";
    }
?>