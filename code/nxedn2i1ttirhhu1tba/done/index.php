<?php 
    session_start();
    if (!isset($_SESSION['code_status'])) {
        header("Location: ../");
    }
?>

<!DOCTYPE html>
<html lang="zh-TW">
<head>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<title>nxedn2i1ttirhhu1tba</title>
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
    .search_qr {
        width: 25%;
    }
    @media screen and (max-width: 992px) {
        .search_qr {
            margin-top: 2.5rem;
            width: 45%;
        }
    }
</style>
</head>

<body>
    <div id="nxedn2i1ttirhhu1tba" class="container">
        <div class="row d-flex justify-content-center align-items-center">
            <div id="form_root" class="col-10 col-lg-6 col-md-8 p-2 d-flex justify-content-center align-items-center">
                <?php
                    $exist_msg = "您已填寫過此表單<br>以下為您的資料<br><br>";
                    $done_msg = "已收到您的資料<br><br>";
                    if ($_SESSION['code_status'] == 'exist') {
                        echo $exist_msg;
                    } 
                    else if ($_SESSION['code_status'] == 'done') {
                        echo $done_msg;
                    }
                    $id = $_SESSION['code_id'];
                    $name = $_SESSION['code_name'];
                    $clear_time = $_SESSION['code_clear_time'];
                ?>
                姓名：<?php echo $_SESSION['code_name'];?><br>
                領獎編號：<?php echo $_SESSION['code_id'];?><br>
                <img class="search_qr" src="https://api.qrserver.com/v1/create-qr-code/?data=https://ntnutechpunk112.ml/code/nxedn2i1ttirhhu1tba/search/?str=<?php echo $id;?>_<?php echo $name;?>_<?php echo $clear_time;?>&end" alt="">
                <script>
                    alert("領獎當日需出示此頁面的資訊，請記得截圖！\n 若不克前來，獎品將會回收！");
                </script>
            </div>
            <div class="col-8 col-lg-4 col-md-6">
                <a class="btn btn-success mt-5" href="../info/" style="display: block;">領獎資訊</a>
            </div>
        </div>
    </div>
</body>

</html>