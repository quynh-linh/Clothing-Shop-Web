<?php include './inc/handle.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- <link rel="stylesheet" href="assets/css/base.css"> -->
    <link rel="stylesheet" href="assets/css/grid.css">
	<link rel="stylesheet" href="assets/css/xemlaidonhang.css">
	<link rel="stylesheet" href="assets/font/themify-icons/themify-icons.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đơn hàng</title>
</head>
<body>
	<div class="grid">
		<!-- Phần header -->	
		<?php include 'inc/header.php' ?>
	</div>
	<div class="grid">
		<div class="app">
			<div class="grid wide">
				<div class="app_cart">
					<div class="row">	
							<div class="col l-2">
								<div class="navbar-logo">
                                    <span>
                                        <img src="./assets/img/243298213_1333840867072468_3557306755313176949_n.jpg" alt="">
                                    </span>
                                    <span class="navbar-logo-tt">
                                        <div class="navbar-name">Quỳnh Linh</div>
                                        <div class="navbar-remove">
                                            <span class="ti-marker-alt"></span>
                                            Sửa hồ sơ
                                        </div>
                                    </span>
                                </div>
                                <div class="navbar-list">
                                    <ul>
                                        <li>
                                            <span class="ti-user"></span>
                                            <span>Tài Khoản Của Tôi</span>
                                        </li>
                                        <li>
                                            <span class="ti-bookmark-alt"></span>
                                            <span>Đơn Mua</span>
                                        </li>
                                        <li>
                                            <span class="ti-wallet"></span>
                                            <span>TGL Xu</span>
                                        </li>
                                        <li>
                                            <span class="ti-shortcode"></span>
                                            <span>Kho Voucher</span>
                                        </li>
                                    </ul>
                                </div>
                                
							</div>
                            <div class="col l-10">
								<div class="list_order">
                                    <a href="" class="list_order-success" style="color: red;">Tất cả</a>
                                    <a href="">Chờ xác nhận</a>
                                    <a href="">Chờ lấy hàng</a>
                                    <a href="">Đang giao</a>
                                    <a href="">Đã giao</a>
                                    <a href="">Đã huỷ</a>
                                </div>
                                <div class="table-order">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th>Sản Phẩm</th>
                                                <th>Tổng đơn hàng</th>
                                                <th>Tình trạng</th>
                                                <th>Đơn vị vận chuyển</th>
                                                <th>Thao tác</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="cart-td_title">
                                                        <img src="./assets/img/sanpham/ao1.jpg" alt="" class="app_cart-img">
                                                        <span>Áo Thể Thao Nam ROMAN  Chất Thun Lạnh Co Giãn  x1</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="cart-classify">
                                                       <span>148.000đ</span>
                                                    </div>
                                                </td>
                                                <td class="cart-wait">
                                                 <span>Chờ lấy hàng</span>
                                                </td>
                                                <td>
                                                    <span class="cart-current">Giao hàng tiết kiệm</span>
                                                </td>
                                                <td>
                                                    <div class="cart-operation">
                                                       <button>Huỷ đơn hàng</button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="cart-td_title">
                                                        <img src="./assets/img/sanpham/aonu1.jpg" alt="" class="app_cart-img">
                                                        <span>Áo Thể Thao dài tay khóa kéo thời trang cho nữ  x2</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="cart-classify">
                                                       <span>248.000đ</span>
                                                    </div>
                                                </td>
                                                <td class="cart-wait">
                                                 <span>Chờ lấy hàng</span>
                                                </td>
                                                <td>
                                                    <span class="cart-current">Giao hàng tiết kiệm</span>
                                                </td>
                                                <td>
                                                    <div class="cart-operation">
                                                       <button>Huỷ đơn hàng</button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="cart-td_title">
                                                        <img src="./assets/img/sanpham/bong1.jpg" alt="" class="app_cart-img">
                                                        <span>Quả bóng EURO 2021 cao cấp tặng kim bơm  x1</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="cart-classify">
                                                       <span>148.000đ</span>
                                                    </div>
                                                </td>
                                                <td class="cart-wait">
                                                 <span>Chờ xác nhận</span>
                                                </td>
                                                <td>
                                                    <span class="cart-current">Giao hàng tiết kiệm</span>
                                                </td>
                                                <td>
                                                    <div class="cart-operation">
                                                       <button>Huỷ đơn hàng</button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="cart-td_title">
                                                        <img src="./assets/img/sanpham/giay1.jpg" alt="" class="app_cart-img">
                                                        <span>Giày thể thao B GC có vân chìm, hàng Quảng Châu  x1</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="cart-classify">
                                                       <span>348.000đ</span>
                                                    </div>
                                                </td>
                                                <td class="cart-wait">
                                                 <span>Đang giao</span>
                                                </td>
                                                <td>
                                                    <span class="cart-current">Giao hàng tiết kiệm</span>
                                                </td>
                                                <td>
                                                    <div class="cart-operation">
                                                       <button>Huỷ đơn hàng</button>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
							</div>				
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php include './inc/footer.php' ?>
</body>
</html>