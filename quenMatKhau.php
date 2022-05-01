<?php include './inc/handle.php'?>
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
    <title>Đăng ký tài khoản</title>
</head>
<?php
	if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
        $userName = $_POST['username'];
        $cauHoiBiMat = $_POST['cauHoiBiMat'];
        $login_user = $user->showCauHoiBiMat($userName, $cauHoiBiMat);
        if ($login_user) {
            header('Location:login.php');
        }
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
                        <h2>Bạn muốn tìm lại mật khẩu</h2>
                        <p>Vui lòng nhập lại email đã đăng ký, hệ thống của chúng tôi sẽ gửi cho bạn 1 đường dẫn để thay đổi mật khẩu.</p>
                    </div>
                </div>
                <form action="" method="post" class="auth__form-form">
                    <div class="co">
                        <div class="row">
                            <div class="auth__form-group1 col c-12">
                                <div class="auth__form-group-title">
                                </div>
                                <input type="text" name="username" class="auth__form-input" placeholder="Nhập tên đăng nhập">
                            </div>
                            <div class="auth__form-group1 col c-12 ">
                                <select class="auth__form-input" id="select" name="category">
                                    <option>Lựa chọn câu hỏi</option>
                                    <option>Bạn thích ai nhất ?</option>
                                    <option>Bố bạn tên gì?</option>
                                    <option>Số tài khoản bạn là bao nhiêu?</option>
                                    <option>Bạn thích ăn món gì?</option>
                                </select>
                            </div>
                            <div class="auth__form-group1 col c-12 ">
                                <div class="auth__form-group-title">
                                </div>
                                <input type="password" name="cauHoiBiMat" class="auth__form-input" placeholder="Trả lời câu hỏi">
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