<?php include './inc/handle.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Chi tiết sản phẩm</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/chitietsp.css">
    <link rel="stylesheet" href="assets/css/grid.css">
    <link rel="stylesheet" href="assets/css/base.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/font/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="/assets/font/fontawesome-free-5.15.4-web/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap&subset=vietnamese" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
</head>
<?php
    /* Kiểm tra id sản phẩm */
  	if (!isset($_GET['productId']) || $_GET['productId'] == NULL) {
        
	} else {
		$id = $_GET['productId'];
	} 
    // Thêm sản phẩm vào giỏ hàng
	if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) { 
		$quantity = $_POST['quantity'];
        if($_POST['size']!=""){
            $size=$_POST['size'];
            $addToCart = $cat -> addProduct_cart($id,$quantity,$size); 
        }else{
            echo '<script type ="text/JavaScript">';  
            echo 'alert("Bạn chưa chọn size")';  
            echo '</script>'; 
        }
        
    }
?>

<body>
    <div class="grid">
        <section class="app">
        <?php include 'inc/header.php' ?>
        </section>
    </div>
    <!--sanpham-->
    <div class="PC">
        <div class="grid wide">
            <div class="app_details">
                <div class="row">
                     <?php
				        $get_productDetails = $product-> getProduct_Details($id);
				        if ($get_productDetails) {
					        while ($result_Details = $get_productDetails->fetch_assoc()) {
			        ?>
                    <div class="col l-5 c-12">
                        <div class="app_details-img">
                            <img src="./admin/upload/<?php echo $result_Details['image'] ?>" alt="" class="content-img">
                        </div>
                        <div>
                            <div class="app_details-item">
                                <div class="app_details-item-1">
                                    <span>Chia sẻ:</span>
                                    <span class="app_details-item-app">
                                        <i class="fab fa-facebook-messenger"></i>
                                        <i class="fab fa-facebook"></i>
                                        <i class="fab fa-instagram"></i>
                                        <i class="fab fa-twitter-square"></i>
                                    </span>
                                </div>
                                <div class="app_details-item-2">
                                    <i class="far fa-heart"></i>
                                    <span>Đã thích (7k)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col l-7">
                        <div class="home-product-icon">
                            <h3 class="home-product-item__line"><?php echo $result_Details['productName'] ?></h3>
                            <div class="home-product-item__sales">
                                <span class="home-product-item__sales-star">
                                    <span class="home-product-item__time ">4.9</span>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </span>
                                <span class="home-product-item__bot"></span>
                                <span class="home-product-item__time ">761</span>
                                <span class="home-product-item__click ">Đánh Giá</span>
                                <span class="home-product-item__bot"></span>
                                <span class="home-product-item__time ">2,4k</span>
                                <span class="home-product-item__click">Đã Bán</span>
                            </div>
                            <div class="home-product-item__price">
                                <div class="home-product-item__price-optimus">
                                    <div class="home-product-item__price-money">
                                        <span class="home-product__price-current"><?php echo number_format($result_Details['price'], 0, ',', '.')."đ" ?></span>
                                        <span class="home-product__price-sale">25% GIẢM</span>
                                    </div>
                                    <span>
                                        <div class="home-product__price-link">
                                            <i class="ti-money"></i>
                                            Gì cũng rẻ
                                        </div>
                                        <div class="home-product__price-bill">Giá tốt nhất so với những sản phẩm cùng loại trên Shop!</div>
                                    </span>
                                </div>
                            </div>
                            <div class="home-product-item__promotion">
                                <span class="home-product-item__promotion-name">Combo khuyến mãi</span>
                                <p class="home-product-item__promotion-with">Mua 3 & giảm 3%</p>
                            </div>
                            <div class="home-product-item__ship">
                                <span class="home-product-item__ship-title">Vận chuyển</span>
                                <div class="home-product-item__ship-with">
                                    <p class="home-product-item__ship-content">
                                        <i class="fas fa-truck"></i>
                                        Miễn phí vận chuyển
                                    </p>
                                    <p class="home-product-item__ship-canle">Miễn phí vận chuyển cho đơn hàng trên 300.000đ</p>
                                </div>
                            </div>
                            <div class="all-form-controls">
                                <form action="" method="post">

                                    <div class="home-product-item-size">
                                            <span>Kích cỡ</span>
                                            <div class="home-product-item-size_input">
                                                <input type="button" class="btn_size" name="" value="S">
                                                <input type="button" class="btn_size" name="" value="M">
                                                <input type="button" class="btn_size" name="" value="L">
                                                <input type="button" class="btn_size" name="" value="XL">
                                            </div>
                                            <p id="checkSize" style="color:red; margin-left:10px;"></p>
                                        </div>
                                        <input type="hidden" id="btn_sizes" name="size" value="">

                                    <div class="buy_now">
                                        <!-- <input type="number" name="quantity" value="1" min="1" class="btn-with-icon">
                                            <i class="fas fa-cart-plus"></i>
                                        </input> -->
                                        <div class="home-product-item-size_quantity">
                                            <span style="margin-right:100px;">Số lượng</span>
                                            <input type="button" class="btn_quantity" value="-" onclick="down()">
                                            <input type="text" id="input_quantity" value="1" name="quantity">
                                            <input type="button" class="btn_quantity" value="+" onclick="up()">
                                        </div>
                                        <input type="submit" name="submit"  value="Thêm sản phẩm" class="btn--primary"><i class="fas fa-cart-plus" style="margin-left:10px; font-size:20px;"></i></input>
                                    </div>
                                </form>

                                <!-- hiên thị thông báo sản phẩm đã được cập nhật nếu đã có trong giỏ hàng -->
                                <div>
                                    <?php
                                        if (isset($addToCart)) {
                                            $size=$_POST['size'];
                                            $quantity = $_POST['quantity'];
                                            $updateCart = $cat-> updateQuantityandSize($size, $quantity, $id);
                                            echo '<span style="color:red;">Sản phẩm đã tồn tại trong giỏ hàng, size và số lượng đã được cập nhật </span>';
                                        }
                                    ?>
                                </div>
                                
                            </div>
                        </div>
                    </div>  
                    <?php
				             }
			            } 
                    ?>
                </div>    
            </div>
    
            <div class="app_content">
                <div class="home-title">
                    <h4 class="home-title-all">CHI TIẾT SẢN PHẨM</h4>
                    <span>Nike Sportswear Essential Women's Bike Shorts</span>
                </div>
                <div class="home-title-boder"></div>
                <div class="home-title-edit">
                    <div class="home-title-edit-social">
                        <i class="fas fa-user-edit"></i>
                        MÔ TẢ SẢN PHẨM   
                    </div>
                    <div class="home-title-content">
                        <div class="home-title-content__form">
                            <i class="fas fa-arrow-circle-right"></i>
                            Có chân đế cao su kèm theo sử dụng trong trường hợp nền nhà trơn hoặc tránh xước gạch men.
                        </div>
                        <div class="home-title-content__form">
                            <i class="fas fa-arrow-circle-right"></i>
                            Tay cầm có đệm mút giúp êm tay hơn trong quá trình luyện tập.
                        </div>
                        <div class="home-title-content__form">
                            <i class="fas fa-arrow-circle-right"></i>
                            Chất liệu: nhựa ABS Cao Cấp chịu lực cực tốt và cực bền.
                        </div>
                        <div class="home-title-content__form">
                            <i class="fas fa-arrow-circle-right"></i>
                            Kích thước sản phẩm: Chiều dài 62cm x 19cm x 2cm.
                        </div>
                        <div class="home-title-content__form">
                            <i class="fas fa-arrow-circle-right"></i>
                            Tải trọng tối đa 150kg.
                        </div>
                    </div>
                </div>
                <div class="home-title-edit">
                    <div class="home-title-edit-social">
                        <i class="fas fa-user-edit"></i>
                        THÔNG TIN CHI TIẾT SẢN PHẨM     
                    </div>
                    <div class="home-title-content">
                        <div class="home-title-content__form">
                            <i class="fas fa-arrow-circle-right"></i>
                            Luyện tập các cơ: Cơ ngực, cơ vai, cơ lưng, cơ bắp tay với các vị trí được thể hiện trên bảng tập.
                        </div>
                        <div class="home-title-content__form">
                            <i class="fas fa-arrow-circle-right"></i>
                            Bảng tập chia theo màu với từng vài tập các loại cơ khác nhau (có 4 màu chính: Xanh Lá, Xanh Dương, Vàng, Đỏ)
                        </div>
                        <div class="home-title-content__form">
                            <i class="fas fa-arrow-circle-right"></i>
                            Thiết kế nhỏ gọn, kiểu dáng đơn giản, tiện lợi, có thể tháo lắp dễ dàng.
                        </div>
                        <div class="home-title-content__form">
                            <i class="fas fa-arrow-circle-right"></i>
                            An toàn khi sử dụng và có độ bền cao theo thời gian.
                        </div>
                        <div class="home-title-content__form">
                            <i class="fas fa-arrow-circle-right"></i>
                            Màu xanh dương (blue): Sử dụng để luyện tập, Cơ vai.
                        </div>
                        <div class="home-title-content__form">
                            <i class="fas fa-arrow-circle-right"></i>
                            Màu Đỏ/hồng  (red/bink): Sử dụng để luyện tập, Cơ ngực.
                        </div>
                        <div class="home-title-content__form">
                            <i class="fas fa-arrow-circle-right"></i>
                            Màu Vàng (yellow): Sử dụng để luyện tập, Cơ tay.
                        </div>
                        <div class="home-title-content__form">
                            <i class="fas fa-arrow-circle-right"></i>
                            Màu xanh lá (green): Sử dụng để luyện tập, Cơ xô, liên sườn.
                        </div>
                </div>
                <div class="home-title-boder"></div>
                <div class="home-title-edit">
                    <div class="home-title-edit-social">
                        <i class="fas fa-user-edit"></i>
                        CHÍNH SÁCH ĐỔI TRẢ HÀNG   
                    </div>
                    <div class="home-title-content">
                        <div class="home-title-content__form">
                            <i class="fas fa-arrow-circle-right"></i>
                            TRƯỜNG HỢP CHẤP NHẬN ĐỔI TRẢ
                        </div>
                        <div class="home-title-content__form">
                            <i class="fas fa-arrow-circle-right"></i>
                            Đổi trả trong trường hợp sai hàng, hỏng hàng, hàng không đủ số lượng
                        </div>
                    </div>
                </div>
                <div class="home-title-edit">
                    <div class="home-title-edit-social">
                        <i class="fas fa-user-edit"></i>
                        TRƯỜNG HỢP KHÔNG CHẤP NHẬN ĐỔI TRẢ   
                    </div>
                    <div class="home-title-content">
                        <div class="home-title-content__form">
                            <i class="fas fa-arrow-circle-right"></i>
                            Hỏng hàng do quá trình sử dụng của khách hàng
                        </div>
                        <div class="home-title-content__form">
                            <i class="fas fa-arrow-circle-right"></i>
                            Sai hàng, thiếu hàng, lỗi hàng nhưng khách hàng không quay video
                        </div>
                    </div>
                </div>
                <div class="home-title-boder"></div>
                <div class="home-title-insurence">
                    <div class="home-title-insurence__social">
                        <i class="fas fa-bolt"></i>
                        CHÍNH SÁCH BÁN HÀNG HTSPORT CAM KẾT
                    </div>
                    
                    <div class="home-title-final">
                        <div class="home-title-final__form">
                            <i class="fas fa-check"></i>
                            Về sản phẩm: Shop cam kết cả về CHẤT LIỆU cũng như HÌNH DÁNG ( đúng với những gì được nêu bật trong phần mô tả và hình ảnh sản phẩm).
                        </div>
                        <div class="home-title-final__form">
                            <i class="fas fa-check"></i>
                            Về giá cả: Shop nhập với số lượng nhiều và trực tiếp từ hãng nên giá sẽ luôn TỐT NHẤT và CHẤT LƯỢNG nhất
                        </div>
                        <div class="home-title-final__form">
                            <i class="fas fa-check"></i>
                            Về dịch vụ: Shop sẽ cố gắng trả lời hết những thắc mắc xoay quanh sản phẩm các bạn cứ Inbox cho shop
                        </div>
                        <div class="home-title-final__form">
                            <i class="fas fa-check"></i>
                            Thời gian chuẩn bị hàng: Hàng có sẵn, thời gian chuẩn bị tối ưu nhất.
                        </div>
                        
                    </div>
                    <div class="home-title-boder"></div>
                </div>
                <div class="home-title-insurence">
                    <div class="home-title-insurence__social">
                        <i class="fas fa-bolt"></i>
                        QUYỀN LỢI CỦA KHÁCH HÀNG 
                    </div>
                    <div class="home-title-final">
                        <div class="home-title-final__form">
                            <i class="fas fa-check"></i>
                            Cam kết 100% đổi hàng trong vòng 3 ngày theo chính sách Shop nếu sản phẩm khách đặt lỗi do nhà sản xuất 
                        </div>
                        <div class="home-title-final__form">
                            <i class="fas fa-check"></i>
                            Shop hỗ trợ đổi sang sản phẩm khác cùng giá hoặc cao hơn nếu khách có nhu cầu đổi mẫu khác.
                        </div>
                        <div class="home-title-final__form">
                            <i class="fas fa-check"></i>
                            Nếu có bất kì khiếu nại cần Shop hỗ trợ về sản phẩm, khi mở sản phẩm các bạn vui lòng quay lại video quá trình mở sản phẩm để được đảm bảo 100% đổi lại sản phẩm mới nếu Shop giao bị lỗi.
                        </div>
                        <div class="home-title-final__form">
                            <i class="fas fa-check"></i>
                            Các bạn nhận được sản phẩm, vui lòng đánh giá giúp Shop để hưởng thêm nhiều ưu đãi hơn
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
    <?php include './inc/footer.php' ?>
    <script src="./assets/js/chitietsp.js"></script>
</body>
</html>