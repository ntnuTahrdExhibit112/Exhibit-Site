<?php 
    $cmd_getCode = "SELECT * FROM code";
    $getCode = mysqli_query($db, $cmd_getCode);
    $code_count = mysqli_num_rows($getCode);

    $diff_count = ["1" => 0, "2" => 0, "3" => 0, "4" => 0, "5" => 0];
    $fun_count = ["1" => 0, "2" => 0, "3" => 0, "4" => 0, "5" => 0];
    for ($i = 0; $i < mysqli_num_rows($getCode); $i++) {
        $row = mysqli_fetch_assoc($getCode);
        $diff_count[$row['difficulty']]++;
        $fun_count[$row['fun']]++;
    }
    $js_output_diff = "";
    $js_output_fun = "";
    foreach ($diff_count as $key => $val) {
        $js_output_diff = $js_output_diff . $val;
        if ($key != '5') {
            $js_output_diff = $js_output_diff . ", ";
        }
    }
    foreach ($fun_count as $key => $val) {
        $js_output_fun = $js_output_fun . $val;
        if ($key != '5') {
            $js_output_fun = $js_output_fun . ", ";
        }
    }
    echo "<script>var score_diff=[" . $js_output_diff . "];</script>";
    echo "<script>var score_fun=[" . $js_output_fun . "];</script>";
?>
<center>回答人數：<?php echo $code_count; ?></center>
<div class="col-12 col-lg-4 mt-3 d-flex align-items-center flex-column">
    <h4>困難度</h4>
    <canvas id="diff"></canvas>
    <script>
        const ctx_diff = document.getElementById('diff');

        new Chart(ctx_diff, {
            type: 'pie',
            data: {
                labels: [
                    '非常簡單',
                    '簡單',
                    '普通', 
                    '困難',
                    '非常困難'
                ],
                datasets: [{
                    data: score_diff,
                    backgroundColor: [
                        'rgb(0, 210, 0)',
                        'rgb(210, 210, 0)',
                        'rgb(255, 150, 0)',
                        'rgb(210, 130, 0)',
                        'rgb(255, 0, 0)'
                    ],
                    hoverOffset: 4
                }]
            },
            options: {
                legend: {
                    labels: {
                        generateLabels: function(chart) {
                            return "";
                        }
                    }
                }
            }
        });
    </script>
</div>
<div class="col-12 col-lg-4 mt-3 d-flex align-items-center flex-column">
    <h4>好玩程度</h4>
    <canvas id="fun"></canvas>
    <script>
        const ctx_fun = document.getElementById('fun');

        new Chart(ctx_fun, {
            type: 'pie',
            data: {
                labels: [
                    '非常無聊',
                    '無聊',
                    '普通', 
                    '好玩',
                    '非常好玩'
                ],
                datasets: [{
                    data: score_fun,
                    backgroundColor: [
                        'rgb(255, 0, 0)', 
                        'rgb(210, 130, 0)',
                        'rgb(255, 150, 0)',
                        'rgb(210, 210, 0)',
                        'rgb(0, 210, 0)'
                    ],
                    hoverOffset: 4
                }]
            },
            options: {
                labels: {
                    display: false
                }
            }
        });
    </script>
</div>