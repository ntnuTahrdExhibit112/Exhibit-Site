<?php 
    // $cmd_getFavLayout = "SELECT q08 FROM vote";
    // $getFavLayout = mysqli_query($db, $cmd_getFavLayout);
    // $fav_project = mysqli_num_rows($getFavProject);

    $q09_result = ['1' => 70, '2' => 51, '3' => 68, '4' => 58, '5' => 30, '6' => 51, '7' => 78, '8' => 60, '9' => 61, '10' => 87, '11' => 68, '12' => 53, '13' => 14];
    // for ($i = 0; $i < mysqli_num_rows($getFavProject); $i++) {
    //     $row = mysqli_fetch_assoc($getFavProject);
    //     $q08_result[$row['q08']]++;
    // }
    $js_output_09 = "";
    $favLayout_count = 0;
    foreach ($q09_result as $key => $val) {
        $js_output_09 = $js_output_09 . $val;
        if ($key != '13') {
            $js_output_09 = $js_output_09 . ", ";
        }
        $favLayout_count+=$val;
    }
    echo "<script>var score=[" . $js_output_09 . "];</script>";
?>
<div class="col-12 col-lg-4 mt-3 d-flex align-items-center flex-column">
    <h4>最多人觀看組別</h4>
    <p>回答數量：<?php echo $favLayout_count; ?></p>
    <canvas id="most_visited"></canvas>
    <script>
        const ctx3 = document.getElementById('most_visited');

        new Chart(ctx3, {
            type: 'bar',
            data: {
            labels: group_list,
            datasets: [{
                label: '最多人參觀',
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