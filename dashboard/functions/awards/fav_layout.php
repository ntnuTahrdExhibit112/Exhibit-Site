<?php 
    $cmd_getFavLayout = "SELECT q08 FROM vote";
    $getFavLayout = mysqli_query($db, $cmd_getFavLayout);
    // $fav_project = mysqli_num_rows($getFavProject);

    $q08_result = ['1' => 0, '2' => 0, '3' => 0, '4' => 0, '5' => 0, '6' => 0, '7' => 0, '8' => 0, '9' => 0, '10' => 0, '11' => 0, '12' => 0, '13' => 0];
    for ($i = 0; $i < mysqli_num_rows($getFavLayout); $i++) {
        $row = mysqli_fetch_assoc($getFavLayout);
        $q08_result[$row['q08']]++;
    }
    $js_output_08 = "";
    foreach ($q08_result as $key => $val) {
        $js_output_08 = $js_output_08 . $val;
        if ($key != '13') {
            $js_output_08 = $js_output_08 . ", ";
        }
    }
    echo "<script>var score=[" . $js_output_08 . "];</script>";
?>
<div class="col-12 col-lg-4 mt-3 d-flex align-items-center flex-column">
    <h4>最喜歡攤位佈置組別</h4>
    <p>回答數量：<?php echo mysqli_num_rows($getFavLayout); ?></p>
    <canvas id="fav_layout"></canvas>
    <script>
        const ctx2 = document.getElementById('fav_layout');

        new Chart(ctx2, {
            type: 'bar',
            data: {
            labels: group_list,
            datasets: [{
                label: '最喜歡的攤位佈置',
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