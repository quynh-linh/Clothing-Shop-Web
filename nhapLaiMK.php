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
<?php
	if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
        $login_user = $user->updatePass($_POST);
    }
?>
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
                <form action="" method="post" class="auth__form-form">
                    <div class="co">
                        <div class="row">
                            <div class="auth__form-group1 col c-12">
                                <div class="auth__form-group-title">
                                </div>
                                <input type="text" name="passWord" class="auth__form-input" placeholder="Nhập mật khẩu">
                            </div>
                            <div class="auth__form-group1 col c-12 ">
                                <div class="auth__form-group-title">
                                </div>
                                <input type="password" name="RelypassWord" class="auth__form-input" placeholder="Nhập lại mật khẩu">
                            </div>
                        </div>
                        <input type="submit" name="submit" value="Gửi đi" class="btn-send">
                    </div>
                </form>
            </div>
        </div>
        <?php include './inc/footer.php' ?>
    </div>
</body>

</html>