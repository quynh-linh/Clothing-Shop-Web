<?php
	include '../classses/adminlogin.php';
	$class = new adminlogin();
	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		$adminUser = $_POST['adminUser'];
		$adminPass = md5($_POST['adminPass']);

		$login_check = $class->login_admin($adminUser,$adminPass);
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/login.css">
    <link rel="stylesheet" href="assets/css/grid.css">
    <link rel="stylesheet" href="assets/font/themify-icons/themify-icons.css">
    <title>Đăng nhập admin</title>
</head>
<body>
    <div class="modal">
        <div class="modal__overlay"></div>
        <div class="modal__body">  
               <!-- Login form-->
            <form action="login.php" method="post" >
               <div class="auth__form">
                    <div class="auth__form-container">
                        <span class="ti-github"></span>
                        <div class="auth__form-header">
                            <h4 class="auth__form-heading">Đăng nhập</h4>
                        </div>
                        <div class="auth__form-form">
                            <div class="auth__form-group">
                                <input type="text" class="auth__form-input"  name="adminUser" >
                            </div>
                            <div class="auth__form-group">
                                <input type="password" class="auth__form-input"  name="adminPass" >
                            </div>
                        </div>
                        <div class="auth__form-aside">
                            <div class="auth__form-help">
                                <a href="" class="auth__form-help-link">Quên mật khẩu</a>
                                <span class="auth__form-help-separate"></span>
                                <div class="auth__form-aside__link">
                                    <a href="" class="auth__form-help-link">Cần trợ giúp ?</a>
                                </div>    
                            </div>
                        </div>
                        <div class="login-btn" style=" color: #fff; text-align: center; margin: 20px;">
                            <?php
                            if (isset($login_check)) {
                                echo $login_check;
                            }
                            ?>
                        </div>
                        <div class="auth__form-controls">
                            <input type="submit" value="Đăng nhập" class="btn btn-login mt-16">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>