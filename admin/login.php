<?php
include '../classses/adminlogin.php';
$class = new adminlogin();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $adminUser = $_POST['adminUser'];
    $adminPass = md5($_POST['adminPass']);

    $login_check = $class->login_admin($adminUser, $adminPass);
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
    <!-- partial:index.partial.html -->
    <form action="login.php" method="post" class="login-form">
        <p class="login-text">
            <span class="fa-stack fa-lg">
                <i class="fa fa-circle fa-stack-2x"></i>
                <i class="fa fa-lock fa-stack-1x"></i>
            </span>
        </p>
        <input type="text" name="adminUser" class="login-username" autofocus="true" required="true" placeholder="Tên đăng nhâp" />
        <input type="password" name="adminPass" class="login-password" required="true" placeholder="Password" />
        <div class="login-form-waring" >
            <?php
            if (isset($login_check)) {
                echo $login_check;
            }
            ?>
        </div>
        <input type="submit" name="Login" value="Login" class="login-submit" />

    </form>
    <a href="#" class="login-forgot-pass">forgot password?</a>
    <div class="underlay-photo"></div>
    <div class="underlay-black"></div>
    <!-- partial -->
</body>

</html>