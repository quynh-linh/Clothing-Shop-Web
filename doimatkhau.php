
<?php include './inc/handle.php' 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="assets/css/grid.css">
    <link rel="stylesheet" href="assets/css/test1.css">
    <link rel="stylesheet" href="assets/css/main.css">

    <link rel="shortcut icon" href="assets/img/favicon_created_by_logaster.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="assets/font/themify-icons/themify-icons.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đổi mật khẩu người dùng </title>
</head>
<?php
    if(isset($_POST['doimatkhau'])){
        $taikhoan = $_POST['username'];
        $matkhaucu = md5($_POST['password_cu']);
        $matkhaumoi = md5($_POST['password_moi']);
        $row = $user->doimatkhau($taikhoan,$matkhaucu);
        if(empty($row)){
            $count = 0;
        }else{
            $count = mysqli_num_rows($row); 
        }
        if( $count > 0){
            $up = $user->updatedoimatkhau($matkhaumoi);
            echo '<script>alert("Đổi mật khẩu thành công !")</script>';
        }else {
            echo '<script>alert("Tên tài khoản hoặc mật khẩu không đúng !")</script>';
        }
    }
?>
<body>
   
    <div class="content">
        <div class="grid">
            <?php include 'inc/header.php' ?>
        </div>
        <div style="margin-top: 100px;" class="col m-12">
                        <div class="account-me">                           
                                <div style="margin: auto;" class="col l-7 m-12">
                                    <div class="account-tt">
                                        <span style="margin: auto;" class="account-title">Thay đổi mật khẩu người dùng</span>
                                    </div> 
                                    <?php      
                                    $userId = Session::get('user_id');
                                    $infor_user = $user->show_User($userId);
                                    while ($result_infor_user = $infor_user->fetch_assoc()) {
                                    ?>                            
                                        <form action="" method="post">
                                            <div class="information">
                                                <div class="information-name">
                                                    <label>Tài khoản</label>
                                                    <input readonly="readonly" type="text" name="username" value="<?php echo $result_infor_user['username']?>">
                                                </div>
                                                <div class="information-name">
                                                    <label>Mật khẩu cũ</label>
                                                    <input type="password" name="password_cu" value="">
                                                </div>
                                                <div class="information-name">
                                                    <label>Mật khẩu mới</label>
                                                    <input type="password" name="password_moi" value="">
                                                </div>                                               
                                                <div style="display: flex;" class="infotmation-save">
                                                    <a style="color:black; font-size: 25px; margin-top: 20px;margin-right: 150px;" href="index.php" class="ti-arrow-left">Back</a>
                                                    <input type="submit" name="doimatkhau" value="Lưu thay đổi">
                                                </div>  
                                        </form>                                       
                                    <?php } ?>
                                </div>                        
                        </div>
                    </div>
        <?php include './inc/footer.php' ?>
    </div>
</body>

</html>
