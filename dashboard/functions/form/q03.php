<?php 
    $cmd_getQ03 = "SELECT q03 FROM vote WHERE NOT (q03 IS NULL OR q03='')";
    $getQ03 = mysqli_query($db, $cmd_getQ03);

    $q03 = [];
    $q03_title = [];
    for ($i = 0; $i < mysqli_num_rows($getQ03); $i++) {
        $row = mysqli_fetch_assoc($getQ03);
        $ans = explode(", ", $row['q03']);
        for ($j = 0; $j < count($ans); $j++) {
            if (array_key_exists($ans[$j], $q03)) {
                $q03[$ans[$j]]++;
            }
            else {
                $q03[$ans[$j]] = 1;
                array_push($q03_title, $ans[$j]);
            }
        }
    }
    $js_output_q03 = "";
    $js_output_q03_title = "";
    $js_output_q03_bgColor = "";
    foreach ($q03 as $key => $val) {
        $js_output_q03 = $js_output_q03 . $val;
        if ($key != $q03_title[count($q03_title)-1]) {
            $js_output_q03 = $js_output_q03 . ", "; 
        }
    }
    for ($i = 0; $i < count($q03_title); $i++) {
        $js_output_q03_title = $js_output_q03_title . "'" . $q03_title[$i] . "'";
        if ($i != (count($q03_title)-1)) {
            $js_output_q03_title = $js_output_q03_title . ", "; 
        }
    }
    for ($i = 0; $i < count($q03_title); $i++) {
        $rgb_value = rgbGen();
        $js_output_q03_bgColor = $js_output_q03_bgColor . "'" . $rgb_value . "'";
        if ($i != (count($q03_title)-1)) {
            $js_output_q03_bgColor = $js_output_q03_bgColor . ", "; 
        }
    }
    echo "<script>var score_q03=[" . $js_output_q03 . "];</script>";
    echo "<script>var title_q03=[" . $js_output_q03_title . "];</script>";
    echo "<script>var bgColor_q03=[" . $js_output_q03_bgColor . "];</script>";
?>
<div class="col-12 col-lg-6 mt-3 d-flex align-items-center flex-column">
    <h4>觀展動機</h4>
    <p>回答數量：<?php echo mysqli_num_rows($getQ03); ?></p>
    <canvas id="q03"></canvas>
    <script>
        const ctx_q03 = document.getElementById('q03');

        new Chart(ctx_q03, {
            type: 'pie',
            data: {
                labels: title_q03,
                datasets: [{
                    data: score_q03,
                    backgroundColor: bgColor_q03,
                    hoverOffset: 4
                }]
            }
        });
    </script>
</div>