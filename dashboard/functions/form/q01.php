<?php 
    $cmd_getQ01 = "SELECT q01 FROM vote WHERE NOT (q01 IS NULL OR q01='')";
    $getQ01 = mysqli_query($db, $cmd_getQ01);

    $q01 = [];
    $q01_title = [];
    for ($i = 0; $i < mysqli_num_rows($getQ01); $i++) {
        $row = mysqli_fetch_assoc($getQ01);
        $ans = explode(", ", $row['q01']);
        for ($j = 0; $j < count($ans); $j++) {
            if (array_key_exists($ans[$j], $q01)) {
                $q01[$ans[$j]]++;
            }
            else {
                $q01[$ans[$j]] = 1;
                array_push($q01_title, $ans[$j]);
            }
        }
    }
    $js_output_q01 = "";
    $js_output_q01_title = "";
    $js_output_q01_bgColor = "";
    foreach ($q01 as $key => $val) {
        $js_output_q01 = $js_output_q01 . $val;
        if ($key != $q01_title[count($q01_title)-1]) {
            $js_output_q01 = $js_output_q01 . ", "; 
        }
    }
    for ($i = 0; $i < count($q01_title); $i++) {
        $js_output_q01_title = $js_output_q01_title . "'" . $q01_title[$i] . "'";
        if ($q01_title[$i] != (count($q01_title)-1)) {
            $js_output_q01_title = $js_output_q01_title . ", "; 
        }
    }
    for ($i = 0; $i < count($q01_title); $i++) {
        $rgb_value = rgbGen();
        $js_output_q01_bgColor = $js_output_q01_bgColor . "'" . $rgb_value . "'";
        if ($i != (count($q01_title)-1)) {
            $js_output_q01_bgColor = $js_output_q01_bgColor . ", "; 
        }
    }
    echo "<script>var score_q01=[" . $js_output_q01 . "];</script>";
    echo "<script>var title_q01=[" . $js_output_q01_title . "];</script>";
    echo "<script>var bgColor_q01=[" . $js_output_q01_bgColor . "];</script>";
?>
<div class="col-12 col-lg-6 mt-3 d-flex align-items-center flex-column">
    <h4>如何得知</h4>
    <p>回答數量：<?php echo mysqli_num_rows($getQ01); ?></p>
    <canvas id="q01"></canvas>
    <script>
        const ctx_q01 = document.getElementById('q01');

        new Chart(ctx_q01, {
            type: 'pie',
            data: {
                labels: title_q01,
                datasets: [{
                    data: score_q01,
                    backgroundColor: bgColor_q01,
                    hoverOffset: 4
                }]
            }
        });
    </script>
</div>