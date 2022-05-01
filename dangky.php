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
    <title>Đăng ký tài khoản</title>
</head>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
    $insertProduct = $user->insert_user($_POST);
}
?>

<body>
    <!-- Phần header -->
    <?php include 'inc/header.php' ?>
    <div class="app">
        <div class="grid wide">
            <div class="app_content-all">
                <div class="row">
                    <div class="auth__form-header">
                        <h2>ĐĂNG KÝ</h2>
                    </div>
                </div>
                <form action="" method="post" class="auth__form-form">
                    <div class="row">
                        <div class="col c-6">
                            <div class="auth__form">
                                <div class="auth__form-container">
                                    <div class="auth__form-container-title">Thông tin khách hàng</div>
                                    <div class="row">
                                        <div class="auth__form-group col c-6 ">
                                            <div class="auth__form-group-title">
                                                <span>Họ và tên</span>
                                                <span style="color: red;">*</span>
                                            </div>
                                            <input type="text" name="name" class="auth__form-input" placeholder="Nhập họ và tên">
                                        </div>
                                        <div class="auth__form-group col c-6">
                                            <div class="auth__form-group-title">
                                                <span>Email</span>
                                                <span style="color: red;">*</span>
                                            </div>
                                            <input type="text" name="email" class="auth__form-input" placeholder="Nhập địa chỉ email">
                                        </div>
                                        <div class="auth__form-group col c-6">
                                            <div class="auth__form-group-title">
                                                <span>Số điện thoại</span>
                                                <span style="color: red;">*</span>
                                            </div>
                                            <input type="text" name="phone" class="auth__form-input" placeholder="Nhập số điện thoại">
                                        </div>
                                        <div class="auth__form-group col c-6">
                                            <div class="auth__form-group-title">
                                                <span>Giới tính</span>
                                                <span style="color: red;">*</span>
                                            </div>
                                            <input type="text" name="sex" class="auth__form-input" placeholder="Nhập giới tính">
                                        </div>
                                        <div class="auth__form-group col c-6">
                                            <div class="auth__form-group-title">
                                                <span>Ngày sinh</span>
                                                <span style="color: red;">*</span>
                                            </div>
                                            <input type="text" name="date" class="auth__form-input" placeholder="Nhập ngày sinh">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="auth__form-group col c-12">
                                            <div class="auth__form-group-title">
                                                <span>Địa chỉ</span>
                                                <span style="color: red;">*</span>
                                            </div>
                                            <textarea name="address" id="" cols="30" rows="10"></textarea>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col c-6">
                            <div class="auth__form-container-title">Thông tin đăng ký</div>
                            <div class="row">
                                <div class="auth__form-group col c-12 ">
                                    <div class="auth__form-group-title">
                                        <span>Tên đăng nhập</span>
                                        <span style="color: red;">*</span>
                                    </div>
                                    <input type="text" name="username" class="auth__form-input" placeholder="Nhập tên đăng nhập">
                                </div>
                                <div class="auth__form-group col c-12 ">
                                    <div class="auth__form-group-title">
                                        <span>Mật khẩu</span>
                                        <span style="color: red;">*</span>
                                    </div>
                                    <input type="password" name="password" class="auth__form-input" placeholder="Nhập mật khẩu">
                                </div>
                                <div class="auth__form-group col c-12 ">
                                    <div class="auth__form-group-title">
                                        <span>Nhập lại mật khẩu</span>
                                        <span style="color: red;">*</span>
                                    </div>
                                    <input type="password" name="relyPassword" class="auth__form-input" placeholder="Nhập lại mật khẩu">
                                </div>
                                <div class="auth__form-group col c-12 ">
                                    <select class="auth__form-input" id="select" name="category">
                                        <option>Lựa chọn câu hỏi</option>
                                        <option>Bạn thích ai nhất ?</option>
                                        <option>Bố bạn tên gì?</option>
                                        <option>Số tài khoản bạn là bao nhiêu?</option>
                                        <option>Bạn thích ăn món gì?</option>
                                    </select>
                                    <input type="password" name="cauHoiBiMat" class="auth__form-input" placeholder="Trả lời câu hỏi bí mật">
                                </div>
                            </div>
                            <div class="baoloi">
                                <?php
                                if (isset($insertProduct)) {
                                    echo $insertProduct;
                                }
                                ?>
                            </div>
                            <input type="submit" name="submit" value="Đăng ký" class="btn btn-login mt-16">
                            <div style="text-align: right ; padding: 15px 0;">
                                <a href="login.php" style="color: #221f20;font-family: var(--font-family-sans-serif);margin: 24px;">Đăng nhập</a>
                            </div>

                        </div>
                    </div>
                </form>
            </div>
        </div>
        <?php include './inc/footer.php' ?>
    </div>
</body>

</html>