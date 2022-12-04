<?php 
    $cmd_getFavProject = "SELECT q07 FROM vote";
    $getFavProject = mysqli_query($db, $cmd_getFavProject);
    // $fav_project = mysqli_num_rows($getFavProject);

    $q07_result = ['1' => 0, '2' => 0, '3' => 0, '4' => 0, '5' => 0, '6' => 0, '7' => 0, '8' => 0, '9' => 0, '10' => 0, '11' => 0, '12' => 0, '13' => 0];
    for ($i = 0; $i < mysqli_num_rows($getFavProject); $i++) {
        $row = mysqli_fetch_assoc($getFavProject);
        $q07_result[$row['q07']]++;
    }
    $js_output_07 = "";
    foreach ($q07_result as $key => $val) {
        // echo $key . ": " . "$val" . "<br>";
        $js_output_07 = $js_output_07 . $val;
        if ($key != '13') {
            $js_output_07 = $js_output_07 . ", ";
        }
    }
    echo "<script>var score=[" . $js_output_07 . "];</script>";
?>
<div class="col-12 col-lg-4 mt-3 d-flex align-items-center flex-column">
    <h4>最喜歡作品組別</h4>
    <p>回答數量：<?php echo mysqli_num_rows($getFavProject); ?></p>
    <canvas id="fav_project"></canvas>
    <script>
        const ctx1 = document.getElementById('fav_project');

        new Chart(ctx1, {
            type: 'bar',
            data: {
            labels: group_list,
            datasets: [{
                label: '最喜歡的作品',
                data: score,
                borderWidth: 1
            }]
            },
            options: {
            scales: {
                y: {
                beginAtZero: true
                }
            }
            }
        });
    </script>
</div>