<?php include './inc/handle.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- <link rel="stylesheet" href="assets/css/base.css"> -->
    <link rel="stylesheet" href="assets/css/grid.css">
    <link rel="stylesheet" href="assets/css/productCart.css">
    <link rel="stylesheet" href="assets/css/base.css">
    <link rel="stylesheet" href="assets/css/thanhtoan.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/test1.css">
    <link rel="stylesheet" href="assets/font/themify-icons/themify-icons.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giỏ hàng</title>
</head>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['save'])) {
    $idUser = Session::get('user_id');
    $update_user = $user->update_user($idUser, $_POST);
}
?>

<body>
    <div class="content">
        <div class="grid">
            <?php include 'inc/header.php' ?>
        </div>
        <div class="grid wide" style="border-top: 1px solid #ccc;">
            <div class="account-body">
                <div class="row">
                    <div class="col l-3  underline">
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
                                    <a href="lichsu.php"> Quản lý đơn hàng</a>
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
                        <h3 style="font-weight: 500;font-size: 24px;line-height: 32px;text-transform: uppercase;color: #221f20;display: flex;align-items: center;">Quản lí đơn hàng</h3>
                        <div class="col l-12">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Mã đơn hàng</th>
                                        <th>Ảnh</th>
                                        <th>Tên</th>
                                        <th>Size</th>
                                        <th>Giá</th>
                                        <th>Số lượng</th>
                                        <th>Số tiền</th>
                                        <th>Ngày đặt</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $getOrderHistory = $cat->getOrderHistory(Session::get('user_id'));
                                    if ($getOrderHistory) {
                                        $i = 0;
                                        $total = 0;
                                        while ($result_OrderHistory = $getOrderHistory->fetch_assoc()) {
                                            $total += $result_OrderHistory['thanhtien'];
                                    ?>
                                            <tr>
                                                <td><?= ($i = $i + 1); ?></td>
                                                <td>
                                                    <div class="cart-td_title">
                                                        <a href="chitietsanpham.php?productId=<?php echo $result_OrderHistory['productId']; ?>"><img style="cursor:pointer;" src="./admin/upload/<?php echo $result_OrderHistory['image'] ?>" alt="" class="app_cart-img"></a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span><?php echo $result_OrderHistory['productName'] ?></span>
                                                </td>
                                                <td><?php echo $result_OrderHistory['size'] ?></td>
                                                <td>
                                                    <div class="cart-btn">
                                                        <span><?php echo number_format($result_OrderHistory['price'], 0, ',', '.') . "" . "đ" ?></span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <form action="" method="post">
                                                        <!-- hidden loại type không hiên thị -->

                                                        <input style="border: none;background: none;" type="button" name="quantity" value="<?php echo $result_OrderHistory['quantity'] ?>" width="30px" />
                                                        <!-- <input type="submit" name="submit" value="Update"/> -->
                                                    </form>
                                                </td>

                                                <td>
                                                    <span class="cart-current"><?php
                                                                                echo number_format($result_OrderHistory['thanhtien'], 0, ',', '.') . " " . "đ";
                                                                                ?></span>
                                                </td>
                                                <td>
                                                    <?php
                                                    echo $result_OrderHistory['order_time'];
                                                    ?>
                                                </td>

                                            </tr>


                                    <?php
                                        }
                                    }
                                    ?>
                                </tbody>
                            </table>
                            <div class="cart-sum" style="padding: 20px;font-size: 25px;">
                                <span>Tổng tiền:</span>
                                <span><?php echo number_format($total, 0, ',', '.') . " " . "đ"; ?></span>
                                
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