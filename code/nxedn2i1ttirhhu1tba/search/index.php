<?php
    session_start();

    $str = "";
    $search_id = "";
    $search_name = "";
    $search_clear_time = "";
    $error = 0;
    $hide = 0;
    if (isset($_GET['str'])) {
        $str = $_GET['str'];
        $str_exploded = explode("_", $str);
        $search_id = $str_exploded[0];
        $search_name = $str_exploded[1];
        $search_clear_time = rtrim($str_exploded[2], "/");
    }
    else if (isset($_GET['id']) && isset($_GET['name']) && isset($_GET['clear_time'])) {
        $search_id = $_GET['id'];
        $search_name = $_GET['name'];
        $search_clear_time = $_GET['clear_time'];
    }
    else if (isset($_GET['no_result'])) {
        $error = 1;
    }
    else {
        $hide = 1;
    }
    
?>
<!DOCTYPE html>
<html lang="zh-TW">
<head>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<title>領獎查詢</title>
<meta content="" name="description">
<meta content="" name="keywords">

<!-- Favicons -->
<link href="../../../assets/img/favicon.png" rel="icon">
<link href="../../../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

<!-- Vendor CSS Files -->
<link href="../../../assets/vendor/aos/aos.css" rel="stylesheet">
<link href="../../../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<!-- <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet"> -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" rel="stylesheet">
<link href="../../../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
<link href="../../../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
<link href="../../../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
<link href="../../../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

<!-- Template Main CSS File -->
<link href="../../../assets/css/style.css" rel="stylesheet">
<link href="../../../assets/css/custom.css" rel="stylesheet">

<script src="../../../assets/js/code.js"></script>
<link href="../../../assets/css/code.css" rel="stylesheet">
<style>
    #nxedn2i1ttirhhu1tba #form_root {
        margin-top: calc(30vh / 2);
    }
    @media screen and (max-width: 992px) {
        #nxedn2i1ttirhhu1tba #form_root {
            margin-top: calc(45vh / 2);
        }
    }
</style>
</head>

<body>
    <div id="nxedn2i1ttirhhu1tba" class="container">
        <div class="row d-flex justify-content-center align-items-center">
            <div id="form_root" class="col-10 col-lg-6 col-md-8 p-2 d-flex justify-content-center align-items-center code_info">
                <div class="mb-5<?php if($hide==1 || $error==1){echo ' hider';}?>">
                    姓名：<?php echo $search_name; ?><br>
                    領獎編號：<?php echo $search_id; ?><br>
                    破關時間：<?php echo $search_clear_time; ?><br>
                </div>
                <div class="mb-5<?php if($error==0){echo ' hider';}?>">
                    查無此領獎編號，請重新輸入
                </div>
                <form class="form-horizontal col-12" method="POST" action="./form_action.php">
                    <div class="flex" id="form_container">
                        <div class="form-group group_flex h4">
                            <label for="id" class="control-label col-25p">領獎編號</label>
                            <div class="inline-block col-75p">
                                <input type="text" class="form-control" id="id" name="id" placeholder="請輸入領獎編號" required>
                            </div>
                        </div>
                        <div class="row flex align-items-center mt-5">
                            <input class="btn btn-success col-lg-4 col-md-4 col-6" type="submit" value="查詢" style="color: white !important;">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-8 col-lg-4 col-md-6 hider">
                <a class="btn btn-success mt-5" href="./all.php" style="display: block;">查看全部</a>
            </div>
        </div>
    </div>
</body>

</html>