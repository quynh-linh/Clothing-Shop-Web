<?php include './inc/handle.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- <link rel="stylesheet" href="assets/css/base.css"> -->
    <link rel="stylesheet" href="assets/css/grid.css">
    <link rel="stylesheet" href="assets/css/base.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/test1.css">
    <link rel="stylesheet" href="assets/css/xemlaidonhang.css">
    <link rel="stylesheet" href="assets/font/themify-icons/themify-icons.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giỏ hàng</title>
</head>
<?php
if (isset($_GET['orderID']) && $_GET['orderID']) {
    $userId = Session::get('user_id');
    $orderId = $_GET['orderID'];
    $update_status = $order->update_Status_Order($orderId, $userId, -1);
}
?>
<body>
    <div class="content">
        <div class="grid">
            <?php include 'inc/header.php' ?>
        </div>
        <div class="grid wide" style="border-top: 1px solid #ccc;">
            <div class="account-body1">
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
                                    <a href="tinhtrangdonhang.php"> Tình trạng đơn hàng</a>
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
                        <ul style="display:flex;">
                            <li class="QLdonhang" onclick="changeProductList('choXN',this)">Chờ xác nhận</li>
                            <li class="QLdonhang" onclick="changeProductList('daGiao',this)">Đã giao</li>
                            <li class="QLdonhang" onclick="changeProductList('daHuy',this)">Đã hủy</li>
                        </ul>
                        <div class="col l-12">
                            <table id="choXN" class="table table_0">
                                <?php
                                $getOrderHistory0 = $order->getOrderHistory(Session::get('user_id'), 0);
                                $total0 = 0;
                                if ($getOrderHistory0) {
                                    $i = 0;
                                ?>
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
                                            <th>Tình trạng </th>
                                            <th>Hủy đơn</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        while ($result_OrderHistory0 = $getOrderHistory0->fetch_assoc()) {
                                            $total0 += $result_OrderHistory0['thanhtien'];
                                        ?>
                                            <tr>
                                                <td><?= ($i = $i + 1); ?></td>
                                                <td>
                                                    <div class="cart-td_title">
                                                        <a href="chitietsanpham.php?productId=<?php echo $result_OrderHistory0['productId']; ?>"><img style="cursor:pointer;" src="./admin/upload/<?php echo $result_OrderHistory0['image'] ?>" alt="" class="app_cart-img"></a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span><?php echo $result_OrderHistory0['productName'] ?></span>
                                                </td>
                                                <td><?php echo $result_OrderHistory0['size'] ?></td>
                                                <td>
                                                    <div class="cart-btn">
                                                        <span><?php echo number_format($result_OrderHistory0['price'], 0, ',', '.') . "" . "đ" ?></span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <form action="" method="post">
                                                        <!-- hidden loại type không hiên thị -->

                                                        <input style="border: none;background: none;" type="button" name="quantity" value="<?php echo $result_OrderHistory0['quantity'] ?>" width="30px" />
                                                        <!-- <input type="submit" name="submit" value="Update"/> -->
                                                    </form>
                                                </td>

                                                <td>
                                                    <span class="cart-current"><?php
                                                                                echo number_format($result_OrderHistory0['thanhtien'], 0, ',', '.') . " " . "đ";
                                                                                ?></span>
                                                </td>
                                                <td>
                                                    <?php
                                                    echo $result_OrderHistory0['order_time'];
                                                    ?>
                                                </td>
                                                <td style="color:red;cursor:pointer">Đang chờ xác nhận</td>
                                                <td>
                                                    <a onclick="return confirm('Bạn có chắc chắn muốn hủy đơn hàng này')" href="?orderID=<?php echo $result_OrderHistory0['orderId'] ?>" class="ti-close"><?php ?></a>
                                                </td>
                                            </tr>
                                    <?php
                                        }
                                    }
                                    ?>
                                    </tbody>
                                    <td colspan="3">
                                        <div class="cart-sum" style="padding: 20px;font-size: 25px;">
                                            <span>Tổng tiền:</span>
                                            <span><?php echo number_format($total0, 0, ',', '.') . " " . "đ"; ?></span>
                                        </div>
                            </table>

                            <table id="daGiao" class="table table_1">
                                <?php
                                $getOrderHistory1 = $order->getOrderHistory(Session::get('user_id'), 1);
                                $total1 = 0;
                                if ($getOrderHistory1) {
                                    $i = 0;
                                ?>
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
                                        while ($result_OrderHistory1 = $getOrderHistory1->fetch_assoc()) {
                                            $total1 += $result_OrderHistory1['thanhtien'];
                                        ?>
                                            <tr>
                                                <td><?= ($i = $i + 1); ?></td>
                                                <td>
                                                    <div class="cart-td_title">
                                                        <a href="chitietsanpham.php?productId=<?php echo $result_OrderHistory1['productId']; ?>"><img style="cursor:pointer;" src="./admin/upload/<?php echo $result_OrderHistory1['image'] ?>" alt="" class="app_cart-img"></a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span><?php echo $result_OrderHistory1['productName'] ?></span>
                                                </td>
                                                <td><?php echo $result_OrderHistory1['size'] ?></td>
                                                <td>
                                                    <div class="cart-btn">
                                                        <span><?php echo number_format($result_OrderHistory1['price'], 0, ',', '.') . "" . "đ" ?></span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <form action="" method="post">
                                                        <!-- hidden loại type không hiên thị -->

                                                        <input style="border: none;background: none;" type="button" name="quantity" value="<?php echo $result_OrderHistory1['quantity'] ?>" width="30px" />
                                                        <!-- <input type="submit" name="submit" value="Update"/> -->
                                                    </form>
                                                </td>

                                                <td>
                                                    <span class="cart-current"><?php
                                                                                echo number_format($result_OrderHistory1['thanhtien'], 0, ',', '.') . " " . "đ";
                                                                                ?></span>
                                                </td>
                                                <td>
                                                    <?php
                                                    echo $result_OrderHistory1['order_time'];
                                                    ?>
                                                </td>

                                            </tr>
                                    <?php
                                        }
                                    }
                                    ?>
                                    </tbody>
                                    <td colspan="3">
                                        <div class="cart-sum" style="padding: 20px;font-size: 25px;">
                                            <span>Tổng tiền:</span>
                                            <span><?php echo number_format($total1, 0, ',', '.') . " " . "đ"; ?></span>
                                        </div>
                                    </td>
                            </table>

                            <table id="daHuy" class="table table_2">
                                <?php
                                $getOrderHistory2 = $order->getOrderHistory(Session::get('user_id'), -1);
                                $total2 = 0;
                                if ($getOrderHistory2) {
                                    $i = 0;
                                ?>
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
                                            <th>Tình trạng </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        while ($result_OrderHistory2 = $getOrderHistory2->fetch_assoc()) {
                                            $total2 += $result_OrderHistory2['thanhtien'];
                                        ?>
                                            <tr>
                                                <td><?= ($i = $i + 1); ?></td>
                                                <td>
                                                    <div class="cart-td_title">
                                                        <a href="chitietsanpham.php?productId=<?php echo $result_OrderHistory2['productId']; ?>"><img style="cursor:pointer;" src="./admin/upload/<?php echo $result_OrderHistory2['image'] ?>" alt="" class="app_cart-img"></a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span><?php echo $result_OrderHistory2['productName'] ?></span>
                                                </td>
                                                <td><?php echo $result_OrderHistory2['size'] ?></td>
                                                <td>
                                                    <div class="cart-btn">
                                                        <span><?php echo number_format($result_OrderHistory2['price'], 0, ',', '.') . "" . "đ" ?></span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <form action="" method="post">
                                                        <!-- hidden loại type không hiên thị -->

                                                        <input style="border: none;background: none;" type="button" name="quantity" value="<?php echo $result_OrderHistory2['quantity'] ?>" width="30px" />
                                                        <!-- <input type="submit" name="submit" value="Update"/> -->
                                                    </form>
                                                </td>

                                                <td>
                                                    <span class="cart-current"><?php
                                                                                echo number_format($result_OrderHistory2['thanhtien'], 0, ',', '.') . " " . "đ";
                                                                                ?></span>
                                                </td>
                                                <td>
                                                    <?php
                                                    echo $result_OrderHistory2['order_time'];
                                                    ?>
                                                </td>
                                                <td style="color:red;cursor:pointer">Đã hủy</td>

                                            </tr>

                                            <td colspan="3">
                                                <div class="cart-sum" style="padding: 20px;font-size: 25px;">
                                                    <span>Tổng tiền:</span>
                                                    <span><?php echo number_format($total2, 0, ',', '.') . " " . "đ"; ?></span>
                                                </div>
                                            </td>
                                    <?php
                                        }
                                    }
                                    ?>
                                    </tbody>

                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include './inc/footer.php' ?>
    </div>
</body>
<script src="./assets/js/lichsu.js"></script>

</html>