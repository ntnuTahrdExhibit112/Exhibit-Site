<!DOCTYPE html>
<html lang="zh-TW">
<head>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<title>nxedn2i1ttirhhu1tba</title>
<meta content="" name="description">
<meta content="" name="keywords">

<!-- Favicons -->
<link href="../../assets/img/favicon.png" rel="icon">
<link href="../../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

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
            <div id="form_root" class="row col-10 col-lg-6 col-md-8 p-2 d-flex justify-content-center align-items-center">
                <?php 
                    if (isset($_SESSION['id'])) {
                        echo "<script>window.location.href = '../done/';</script>";
                    }
                ?>
                <form class="form-horizontal col-12" method="POST" action="./form_action.php">
                    <div class="flex" id="form_container">
                        <div class="form-group group_flex h3">
                            <label for="name" class="control-label col-25p">姓名</label>
                            <div class="inline-block col-75p">
                                <input type="text" class="form-control" id="name" name="name" placeholder="例: 王小明" required>
                            </div>
                        </div>
                        <div class="form-group group_flex h3">
                            <label for="name" class="control-label col-25p">電子郵件</label>
                            <div class="inline-block col-75p">
                                <input type="email" class="form-control" id="email" name="email" placeholder="例: abc@gmail.com" required>
                            </div>
                        </div>
                        <div class="form-group group_flex h3">
                            <label for="difficulty" class="control-label col-25p">關卡難度</label>
                            <div class="inline-block col-75p">
                                <select class="form-control" name="difficulty">
                                    <option value="0" disabled selected>請選擇</option>
                                    <option value="1">非常簡單</option>
                                    <option value="2">簡單</option>
                                    <option value="3">普通</option>
                                    <option value="4">困難</option>
                                    <option value="5">非常困難</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group group_flex h3">
                            <label for="fun" class="control-label col-25p">好玩程度</label>
                            <div class="inline-block col-75p">
                                <select class="form-control" name="fun">
                                    <option value="0" disabled selected>請選擇</option>
                                    <option value="1">非常無聊</option>
                                    <option value="2">無聊</option>
                                    <option value="3">普通</option>
                                    <option value="4">好玩</option>
                                    <option value="5">非常好玩</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group group_flex h3">
                            <label for="advise" class="control-label col-25p">其他建議</label>
                            <div class="inline-block col-75p">
                                <input type="text" class="form-control" id="advise" name="advise" placeholder="請填寫建議">
                            </div>
                        </div>
                        <div class="row flex align-items-center mt-5">
                            <input class="btn btn-success col-lg-4 col-md-4 col-6" type="submit" value="送出" style="color: white !important;">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>