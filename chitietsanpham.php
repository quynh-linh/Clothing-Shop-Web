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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" href="assets/font/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="/assets/font/fontawesome-free-5.15.4-web/css/all.min.css">
</head>
<?php
/* Kiểm tra id sản phẩm */
if (!isset($_GET['productId']) || $_GET['productId'] == NULL) {
} else {
    $id = $_GET['productId'];
}
// Thêm sản phẩm vào giỏ hàng
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
    if (Session::get('user_login') == false) {
        echo '<script type ="text/JavaScript">';
        echo 'alert("Bạn phải đăng nhập mới được mua hàng")';
        echo '</script>';
    } else {
        $quantity = $_POST['quantity'];
        if ($_POST['size'] != "") {
            $size = $_POST['size'];
            $addToCart = $cat->addProduct_cart($id, $quantity, $size, Session::get('user_id'));
        } else {
            echo '<script type ="text/JavaScript">';
            echo 'alert("Bạn chưa chọn size")';
            echo '</script>';
        }
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
            <?php
            $get_productDetails = $product->getProduct_Details($id);
            if ($get_productDetails) {
                while ($result_Details = $get_productDetails->fetch_assoc()) {
            ?>
                    <div class="app_details">
                        <div class="row">

                            <div class="col l-6 " style="font-family: var(--font-family-monospace);">
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
                            <div class="col l-6">
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
                                            </div>
                                            <div>
                                                <p id="checkSize" style="color:red; margin-left:10px;"></p>
                                            </div>
                                            <input type="hidden" id="btn_sizes" name="size" value="">

                                            <div class="buy_now">
                                                <span>Số lượng</span>
                                                <div class="home-product-item-size_quantity">
                                                    <input type="button" class="btn_quantity" value="-" onclick="down()">
                                                    <input type="text" id="input_quantity" value="1" name="quantity">
                                                    <input type="button" class="btn_quantity" value="+" onclick="up()">
                                                </div>
                                            </div>
                                            <div class="price-product">
                                                <span>Giá</span>
                                                <span><?php echo number_format($result_Details['price'], 0, ',', '.') . "" . "đ"  ?></span>
                                            </div>
                                            <div style="text-align: center;/* display: flex; */margin: 40px;align-items: center;/* justify-content: stretch; */display: flex;justify-content: center;">
                                                <input type="submit" name="submit" value="Thêm sản phẩm" class="btn--primary"><i class="fas fa-cart-plus" style="margin-left:10px; font-size:48px;"></i></input>
                                            </div>

                                        </form>
                                        <!-- hiên thị thông báo sản phẩm đã được cập nhật nếu đã có trong giỏ hàng -->
                                        <div>
                                            <?php
                                            if (isset($addToCart)) {
                                                $size = $_POST['size'];
                                                $quantity = $_POST['quantity'];
                                                $updateCart = $cat->updateQuantityandSize($size, $quantity, $id, Session::get('user_id'));
                                                echo '<span style="color:red;">Sản phẩm đã tồn tại trong giỏ hàng, size và số lượng đã được cập nhật </span>';
                                            }
                                            ?>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="app_content">
                        <div class="home-title">
                            <h4 class="home-title-all">CHI TIẾT SẢN PHẨM</h4>
                            <span><?php echo $result_Details['product_desc'] ?></span>
                        </div>
                    </div>
            <?php
                }
            }
            ?>
            <div>
                <h3>Sản phẩm liên quan</h1>
                    <div class="row">
                        <div class="col l-2-4">

                        </div>
                    </div>
            </div>
        </div>
    </div>
    <?php include './inc/footer.php' ?>
    <script src="./assets/js/chitietsp.js"></script>
</body>
</html>