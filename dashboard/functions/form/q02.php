<?php 
    $cmd_getQ02 = "SELECT q02 FROM vote WHERE NOT (q02 IS NULL OR q02='')";
    $getQ02 = mysqli_query($db, $cmd_getQ02);

    $q02 = [];
    $q02_title = [];
    for ($i = 0; $i < mysqli_num_rows($getQ02); $i++) {
        $row = mysqli_fetch_assoc($getQ02);
        $ans = explode(", ", $row['q02']);
        for ($j = 0; $j < count($ans); $j++) {
            if (array_key_exists($ans[$j], $q02)) {
                $q02[$ans[$j]]++;
            }
            else {
                $q02[$ans[$j]] = 1;
                array_push($q02_title, $ans[$j]);
            }
        }
    }
    $js_output_q02 = "";
    $js_output_q02_title = "";
    $js_output_q02_bgColor = "";
    foreach ($q02 as $key => $val) {
        $js_output_q02 = $js_output_q02 . $val;
        if ($key != $q02_title[count($q02_title)-1]) {
            $js_output_q02 = $js_output_q02 . ", "; 
        }
    }
    for ($i = 0; $i < count($q02_title); $i++) {
        $js_output_q02_title = $js_output_q02_title . "'" . $q02_title[$i] . "'";
        if ($i != (count($q02_title)-1)) {
            $js_output_q02_title = $js_output_q02_title . ", "; 
        }
    }
    for ($i = 0; $i < count($q02_title); $i++) {
        $rgb_value = rgbGen();
        $js_output_q02_bgColor = $js_output_q02_bgColor . "'" . $rgb_value . "'";
        if ($i != (count($q02_title)-1)) {
            $js_output_q02_bgColor = $js_output_q02_bgColor . ", "; 
        }
    }
    echo "<script>var score_q02=[" . $js_output_q02 . "];</script>";
    echo "<script>var title_q02=[" . $js_output_q02_title . "];</script>";
    echo "<script>var bgColor_q02=[" . $js_output_q02_bgColor . "];</script>";
?>
<div class="col-12 col-lg-6 mt-3 d-flex align-items-center flex-column">
    <h4>對展覽滿意的地方</h4>
    <p>回答數量：<?php echo mysqli_num_rows($getQ02); ?></p>
    <canvas id="q02"></canvas>
    <script>
        const ctx_q02 = document.getElementById('q02');

        new Chart(ctx_q02, {
            type: 'pie',
            data: {
                labels: title_q02,
                datasets: [{
                    data: score_q02,
                    backgroundColor: bgColor_q02,
                    hoverOffset: 4
                }]
            }
        });
    </script>
</div>