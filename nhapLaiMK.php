<?php include './inc/handle.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/dangnhap.css">
    <link rel="stylesheet" href="assets/css/base.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/grid.css">
    <link rel="stylesheet" href="assets/font/themify-icons/themify-icons.css">
    <link rel="shortcut icon" href="assets/img/favicon_created_by_logaster.ico" type="image/x-icon">
    <title>Nhập lại mật khẩu</title>
</head>

<body>
    <!-- Phần header -->
    <?php include 'inc/header.php' ?>
    <div class="app">
        <div class="grid wide">
            <div id="NhapLaiMK" class="app_content-allQMK">
                <div class="row">
                    <div class="auth__form-header">
                        <h2>Nhập mật khẩu mới của bạn</h2>
                        <p>Vui lòng nhập lại email đã đăng ký, hệ thống của chúng tôi sẽ gửi cho bạn 1 đường dẫn để thay đổi mật khẩu.</p>
                    </div>
                </div>
                <form action="" method="POST">
                    <div class="form-group">
                        <input value="" name="email" type="email" placeholder="Email">
                    </div>
                    <div class="form-group-tt">
                        <?php
                        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
                            $senmail = $sendMail->sendMail($_POST);
                            echo $senmail;
                        }
                        ?>
                        <button type="submit" name="submit" value="Gửi Mail">Gửi Mail</button>
                    </div>
                    <div style="display: flex;align-items: center;padding: 10px 0;">
                        <span style="font-family: var(--font-family-monospace);">Bạn đã có mật khẩu đăng nhập ngay</span>
                        <a href="index.php" style="text-decoration: revert !important;padding: 0 10px;">Đăng nhập</a>
                    </div>
                </form>
            </div>
        </div>
        <?php include './inc/footer.php' ?>
    </div>
</body>

</html>