<?php include './inc/handle.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="assets/css/grid.css">
    <link rel="stylesheet" href="assets/css/test1.css">
    <link rel="stylesheet" href="assets/css/main.css">
    
    <link rel="shortcut icon" href="assets/img/favicon_created_by_logaster.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="assets/font/themify-icons/themify-icons.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông tin tài khoản </title>
</head>
<body>
    <div class="content">   
        <div class="grid">
        <?php include 'inc/header.php' ?>
    </div>
        <div class="grid wide" style="border-top: 1px solid #ccc;">
            <div class="account-body">
                <div class="row">
                    <div class="col m-12 l-3  underline">
                       <div class="category-all">
                        <ul>
                            <li style="display: flex;
                                align-items: center;
                                justify-content: center;
                                padding: 10px;
                                border-bottom: 1px solid #ccc;">
                                <span class="ti-user" style="padding: 10px;border: 1px solid;border-radius: 50%;"></span>
                                <a href="" style="text-decoration: none;padding: 0 10px;font-family: var(--font-family-monospace); color: black;
                                font-weight: bold"> Quỳnh Linh</a>
                            </li>
                            <li class="category">
                                <span class="ti-user"></span>
                                <a href=""> Thông tin tài khoản</a>
                            </li>
                            <li class="category">
                                <span class="ti-comments"></span>
                                <a href=""> Thông báo của tôi</a>
                            </li>
                            <li class="category">
                                <span class="ti-printer"></span>
                                <a href=""> Quản lý đơn hàng</a>
                            </li>
                            <li class="category">
                                <span class="ti-location-pin"></span>
                                <a href=""> Số địa chỉ</a>
                            </li>
                            <li class="category">
                                <span class="ti-envelope"></span>
                                <a href=""> Thông tin thanh toán</a>
                            </li>
                            <li class="category">
                                <span class="ti-write"></span>
                                <a href=""> Nhận xét sản phẩm đã mua</a>
                            </li>
                            <li class="category">
                                <span class="ti-ink-pen"></span>
                                <a href=""> Sản phẩm đã xem</a>
                            </li>
                            <li class="category">
                                <span class="ti-ink-pen"></span>
                                <a href=""> Sản phẩm yêu thích</a>
                            </li>
                            <li class="category">
                                <span class="ti-shopping-cart-full"></span>
                                <a href=""> Sản phẩm mua sau</a>
                            </li>
                            <li class="category">
                                <span class="ti-star"></span>
                                <a href=""> Nhận xét của tôi</a>
                            </li>
                            <li class="category">
                                <span class="ti-ticket"></span>
                                <a href=""> Mã giảm giá</a>
                            </li>
                        </ul>
                       </div>
                    </div>
                    <div class="col m-12 l-9">
                        <div class="account-me">
                            <div class="row">
                                <div class="col l-7 m-12 underline">
                                    <div class="account-tt">
                                        <span class="account-title">Thông tin cá nhân</span>
                                    </div>
                                    <div class="information">
                                        <div class="information-name">
                                            <label>Họ & Tên</label>
                                            <input type="text" placeholder="Thêm họ tên">
                                        </div>
                                        <div class="information-name">
                                            <label>Số điện thoại</label>
                                            <input type="text" placeholder="Thêm Nickname">
                                        </div>
                                        <div class="information-name">
                                            <label>Email</label>
                                            <input type="text" placeholder="Thêm Nickname">
                                        </div>
                                        <div class="information-name">
                                            <label>Ngày sinh</label>
                                            <input type="text" placeholder="Thêm Nickname">
                                        </div>
                                         <div class="information-sex">
                                             <label>Giới tính</label>
                                             <form action="form_action.asp" method="get">
                                                 <input type="radio" name="Nam" id="Boy" >
                                                 <label for="Nam">Nam</label>
                                                 <input type="radio" name="Nu" id="Girl" >
                                                 <label for="Nu">Nữ</label>
                                                 <input type="radio" name="Nam" id="khac" >
                                                 <label for="Khac">Khác</label>
                                             </form>
                                         </div>
                                         <div class="infotmation-save">
                                            <input type="submit" value="Lưu thay đổi">
                                         </div>
                                    </div>
                                </div>
                                <div class="col l-5">
                                    <div class="form-upload__img">
                                        <input type="file" name="user_name">
                                    </div>
                                </div>
                            </div>    
                        </div>   
                    </div>
                </div>
            </div>
        <?php include './inc/footer.php' ?>
    </div>
</body>
</html>