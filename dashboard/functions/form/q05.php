<?php 
    $cmd_getQ05 = "SELECT q05 FROM vote WHERE NOT (q05 IS NULL OR q05='')";
    $getQ05 = mysqli_query($db, $cmd_getQ05);

    $q05 = [];
    $q05_title = [];
    for ($i = 0; $i < mysqli_num_rows($getQ05); $i++) {
        $row = mysqli_fetch_assoc($getQ05);
        $ans = explode(", ", $row['q05']);
        for ($j = 0; $j < count($ans); $j++) {
            if (array_key_exists($ans[$j], $q05)) {
                $q05[$ans[$j]]++;
            }
            else {
                $q05[$ans[$j]] = 1;
                array_push($q05_title, $ans[$j]);
            }
        }
    }
    $js_output_q05 = "";
    $js_output_q05_title = "";
    $js_output_q05_bgColor = "";
    foreach ($q05 as $key => $val) {
        $js_output_q05 = $js_output_q05 . $val;
        if ($key != $q05_title[count($q05_title)-1]) {
            $js_output_q05 = $js_output_q05 . ", "; 
        }
    }
    for ($i = 0; $i < count($q05_title); $i++) {
        $js_output_q05_title = $js_output_q05_title . "'" . $q05_title[$i] . "'";
        if ($i != (count($q05_title)-1)) {
            $js_output_q05_title = $js_output_q05_title . ", "; 
        }
    }
    for ($i = 0; $i < count($q05_title); $i++) {
        $rgb_value = rgbGen();
        $js_output_q05_bgColor = $js_output_q05_bgColor . "'" . $rgb_value . "'";
        if ($i != (count($q05_title)-1)) {
            $js_output_q05_bgColor = $js_output_q05_bgColor . ", "; 
        }
    }
    echo "<script>var score_q05=[" . $js_output_q05 . "];</script>";
    echo "<script>var title_q05=[" . $js_output_q05_title . "];</script>";
    echo "<script>var bgColor_q05=[" . $js_output_q05_bgColor . "];</script>";
?>
<div class="col-12 col-lg-6 mt-3 d-flex align-items-center flex-column">
    <h4>是否知道有線上展</h4>
    <p>回答數量：<?php echo mysqli_num_rows($getQ05); ?></p>
    <canvas id="q05"></canvas>
    <script>
        const ctx_q05 = document.getElementById('q05');

        new Chart(ctx_q05, {
            type: 'pie',
            data: {
                labels: title_q05,
                datasets: [{
                    data: score_q05,
                    backgroundColor: bgColor_q05,
                    hoverOffset: 4
                }]
            }
        });
    </script>
</div>