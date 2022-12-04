<?php 
    $cmd_getQ04 = "SELECT q04 FROM vote WHERE NOT (q04 IS NULL OR q04='')";
    $getQ04 = mysqli_query($db, $cmd_getQ04);

    $q04 = [];
    $q04_title = [];
    for ($i = 0; $i < mysqli_num_rows($getQ04); $i++) {
        $row = mysqli_fetch_assoc($getQ04);
        $ans = explode(", ", $row['q04']);
        for ($j = 0; $j < count($ans); $j++) {
            if (array_key_exists($ans[$j], $q04)) {
                $q04[$ans[$j]]++;
            }
            else {
                $q04[$ans[$j]] = 1;
                array_push($q04_title, $ans[$j]);
            }
        }
    }
    $js_output_q04 = "";
    $js_output_q04_title = "";
    $js_output_q04_bgColor = "";
    foreach ($q04 as $key => $val) {
        $js_output_q04 = $js_output_q04 . $val;
        if ($key != $q04_title[count($q04_title)-1]) {
            $js_output_q04 = $js_output_q04 . ", "; 
        }
    }
    for ($i = 0; $i < count($q04_title); $i++) {
        $js_output_q04_title = $js_output_q04_title . "'" . $q04_title[$i] . "'";
        if ($i != (count($q04_title)-1)) {
            $js_output_q04_title = $js_output_q04_title . ", "; 
        }
    }
    for ($i = 0; $i < count($q04_title); $i++) {
        $rgb_value = rgbGen();
        $js_output_q04_bgColor = $js_output_q04_bgColor . "'" . $rgb_value . "'";
        if ($i != (count($q04_title)-1)) {
            $js_output_q04_bgColor = $js_output_q04_bgColor . ", "; 
        }
    }
    echo "<script>var score_q04=[" . $js_output_q04 . "];</script>";
    echo "<script>var title_q04=[" . $js_output_q04_title . "];</script>";
    echo "<script>var bgColor_q04=[" . $js_output_q04_bgColor . "];</script>";
?>
<div class="col-12 col-lg-6 mt-3 d-flex align-items-center flex-column">
    <h4>希望了解的資訊</h4>
    <p>回答數量：<?php echo mysqli_num_rows($getQ04); ?></p>
    <canvas id="q04"></canvas>
    <script>
        const ctx_q04 = document.getElementById('q04');

        new Chart(ctx_q04, {
            type: 'pie',
            data: {
                labels: title_q04,
                datasets: [{
                    data: score_q04,
                    backgroundColor: bgColor_q04,
                    hoverOffset: 4
                }]
            }
        });
    </script>
</div>