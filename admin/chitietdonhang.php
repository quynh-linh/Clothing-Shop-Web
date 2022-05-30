<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
    <link rel="stylesheet" href="assets/font/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="assets/css/donhang.css">
    <title>Quản lý đơn hàng</title>
</head>
<?php include '../classses/order.php' ?>
<?php
$order = new order();
// xác nhận đơn hàng sẽ trừ số lượng của đơn hàng vào sản phẩm
if (isset($_GET['order']) && $_GET['order']  && $_GET['userId'] != " ") {
    $userId = $_GET['userId'];
    $username = $_GET['username'];
    $orderId = "(" . $_GET['order'] . "-1)";
    $update_status = $order->update_Status_Order($orderId, 1, $userId);
    $str = substr($_GET['order'], 0, -1);
    $explore = explode(',', $str);

    foreach ($explore as $ex) {
        $admin_confirm = $order->admin_confirm_order($ex, $userId, 1);
    }
    header('Location:chitietdonhang.php?userId=' . $userId . '&action=0&username=' . $username . '');
}
// xác nhận trả hàng sẽ cộng dồn số lượng của đơn hàng vào sản phẩm
if (isset($_GET['orderID']) && $_GET['orderID']  && $_GET['userId'] != " " && $_GET['status'] == 3) {

    $userId = $_GET['userId'];
    $username = $_GET['username'];
    $orderId = "(" . $_GET['orderID'] . "-1)";
    $update_status = $order->update_Status_Order($orderId, 4, $userId);
    $str = substr($_GET['orderID'], 0, -1);
    $explore = explode(',', $str);

    foreach ($explore as $ex) {
        $admin_confirm = $order->admin_confirm_order($ex, $userId, 2);
    }
    header('Location:chitietdonhang.php?userId=' . $userId . '&action=3&username=' . $username . '');
}

if (isset($_GET['username'])  && $_GET['username'] != " ") {
    $username = $_GET['username'];
}
?>

<body>
    <?php include './inc/sidebar.php' ?>
    <div class="main-content">
        <?php include './inc/header.php' ?>
        <main>
            <section class="recent">
                <div class="activity-grid">
                    <div class="activity-card">

                        <!-- status=0 -->
                        <?php
                        $order = new order();
                        if (isset($_GET['userId']) && $_GET['action'] == "0") {
                            $userId = $_GET['userId'];
                            $date = $order->order_date($userId, '(0)');
                        ?>

                            <h2>ĐƠN HÀNG ĐANG CHỜ XÁC NHẬN</h2>

                            <?php
                            if ($date == Null) {
                            } else {

                                $count = 0;
                                while ($result_date = $date->fetch_assoc()) {
                                    $count += 1;
                                    //foreach($result_date as $date_order){
                            ?>

                                    <table>
                                        <thead>
                                            <tr>
                                                <th>Đơn hàng: <?php echo $count; ?></th>
                                                <th colspan="2">Account: <?php echo $username; ?></th>
                                                <th colspan="5">Ngày đặt: <?php echo $result_date['order_time']; ?></th>
                                                <th colspan="2" class="toggle">Xem chi tiết</th>
                                            </tr>
                                        </thead>
                                    </table>
                                    <table class="display">
                                        <thead style="background-color:#2a2b2c;">
                                            <tr>
                                                <th>STT</th>
                                                <th>Tên khách hàng</th>
                                                <th>Ảnh</th>
                                                <th>Tên</th>
                                                <th>Size</th>
                                                <th>Giá</th>
                                                <th>Số lượng</th>
                                                <th>Thành tiền</th>
                                                <th>Địa chỉ</th>
                                                <th>Tình trạng</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $getOrder_waiting = $order->admin_getOrder_waiting($userId, '(0)', $result_date['order_time']);
                                            if ($getOrder_waiting) {
                                                $i = 0;
                                                $tong0 = 0;
                                                $orderID = "";
                                                while ($result_getOrder_waiting = $getOrder_waiting->fetch_assoc()) {
                                                    $tong0 += $result_getOrder_waiting['thanhtien'];
                                                    $orderID .= $result_getOrder_waiting['orderId'] . ",";
                                            ?>
                                                    <tr>
                                                        <td><?= ($i = $i + 1); ?></td>
                                                        <td><?= $result_getOrder_waiting['name']; ?></td>
                                                        <td>
                                                            <a href="../chitietsanpham.php?productId=<?php echo $result_getOrder_waiting['productId'] ?>&&brandId=<?php echo $result_getOrder_waiting['brandId'] ?>">
                                                                <img style="width:100px;" src="../admin/upload/<?= $result_getOrder_waiting['image']; ?>"></a>
                                                        </td>
                                                        <td>
                                                            <?= $result_getOrder_waiting['productName']; ?>
                                                        </td>
                                                        <td>
                                                            <?= $result_getOrder_waiting['size']; ?>
                                                        </td>
                                                        <td>
                                                            <?= number_format($result_getOrder_waiting['price'], 0, ',', '.') . "" . "đ"  ?>
                                                        </td>
                                                        <td>
                                                            <?= $result_getOrder_waiting['quantity']; ?>
                                                        </td>
                                                        <td>
                                                            <?= number_format($result_getOrder_waiting['thanhtien'], 0, ',', '.') . "" . "đ"  ?>
                                                        </td>
                                                        <td style="width:250px;">
                                                            <?= $result_getOrder_waiting['diaChi']; ?>
                                                        </td>
                                                        <td style="color:red;cursor:pointer">Đang chờ xác nhận</td>

                                                    </tr>
                                                <?php

                                                }
                                                ?>
                                                <td colspan="6" style="background-color:#2a2b2c;text-align:center;color:white;">Tổng đơn hàng: <?php echo number_format($tong0, 0, ',', '.') . "" . "đ"; ?></td>
                                                <td colspan="4" style="background-color:#2a2b2c;">
                                                    <div>
                                                        
                                                        <a class="ti-check" style="font-size:15px;" onclick="return confirm('Bạn có chắc chắn muốn xác nhận đơn hàng này')" href="?order=<?php echo $orderID ?>&status=1&userId=<?php echo $userId; ?>&action=0&username=<?php echo $username; ?>"> Xác nhận đơn hàng </a>

                                                    </div>

                                                </td>
                                <?php
                                            }
                                        }
                                    }
                                    //} 
                                }
                                ?>
                                        </tbody>

                                    </table>

                                    <!-- status=1 -->
                                    <?php
                                    if (isset($_GET['userId']) && $_GET['action'] == "1") {
                                        $userId = $_GET['userId'];
                                        $status = $_GET['action'];
                                        $date = $order->order_date($userId, '(1)');

                                    ?>

                                        <h2>ĐƠN HÀNG ĐANG GIAO</h2>

                                        <?php
                                        if ($date == NULL) {
                                        } else {
                                            $count = 0;
                                            while ($result_date = $date->fetch_assoc()) {
                                                $count += 1;
                                                //foreach($result_date as $date_order){
                                        ?>

                                                <table>
                                                    <thead>
                                                        <tr>
                                                            <th>Đơn hàng: <?php echo $count; ?></th>
                                                            <th colspan="2">Account: <?php echo $username; ?></th>
                                                            <th colspan="5">Ngày đặt: <?php echo $result_date['order_time']; ?></th>
                                                            <th colspan="2" class="toggle">Xem chi tiết</th>
                                                        </tr>
                                                    </thead>
                                                </table>

                                                <table class="display">
                                                    <thead style="background-color:#2a2b2c;">
                                                        <tr>
                                                            <th>STT</th>
                                                            <th>Tên khách hàng</th>
                                                            <th>Ảnh</th>
                                                            <th>Tên</th>
                                                            <th>Size</th>
                                                            <th>Giá</th>
                                                            <th>Số lượng</th>
                                                            <th>Thành tiền</th>
                                                            <th>Địa chỉ</th>
                                                            <th>Tình trạng</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                        $getOrder = $order->admin_getOrder_waiting($userId, '(1)', $result_date['order_time']);
                                                        if ($getOrder) {
                                                            $i = 0;
                                                            $tong1 = 0;
                                                            while ($result_getOrder_waiting = $getOrder->fetch_assoc()) {
                                                                $tong1 += $result_getOrder_waiting['thanhtien'];
                                                        ?>
                                                                <tr>
                                                                    <td><?= ($i = $i + 1); ?></td>
                                                                    <td><?= $result_getOrder_waiting['name']; ?></td>
                                                                    <td>
                                                                        <a href="../chitietsanpham.php?productId=<?php echo $result_getOrder_waiting['productId'] ?>">
                                                                            <img style="width:100px;" src="../admin/upload/<?= $result_getOrder_waiting['image']; ?>"></a>
                                                                    </td>
                                                                    <td>
                                                                        <?= $result_getOrder_waiting['productName']; ?>
                                                                    </td>
                                                                    <td>
                                                                        <?= $result_getOrder_waiting['size']; ?>
                                                                    </td>
                                                                    <td>
                                                                        <?= number_format($result_getOrder_waiting['price'], 0, ',', '.') . "" . "đ"  ?>
                                                                    </td>
                                                                    <td>
                                                                        <?= $result_getOrder_waiting['quantity']; ?>
                                                                    </td>
                                                                    <td>
                                                                        <?= number_format($result_getOrder_waiting['thanhtien'], 0, ',', '.') . "" . "đ"  ?>
                                                                    </td>
                                                                    <td style="width:250px;">
                                                                        <?= $result_getOrder_waiting['diaChi']; ?>
                                                                    </td>
                                                                    <td style="color:blue;cursor:pointer">Đang vận chuyển</td>
                                                                </tr>
                                                            <?php

                                                            }
                                                            ?>
                                                            <td colspan="11" style="background-color:#2a2b2c;text-align:center;color:white;">Tổng đơn hàng: <?php echo number_format($tong1, 0, ',', '.') . "" . "đ"; ?></td>
                                                <?php
                                                        }
                                                    }
                                                }
                                                ?>
                                                    </tbody>
                                                </table>
                                            <?php } ?>




                                            <!-- status=2,5 -->


                                            <?php
                                            if (isset($_GET['userId']) && $_GET['action'] == "2") {
                                                $userId = $_GET['userId'];
                                                $status = $_GET['action'];
                                                $date = $order->order_date($userId, '(2,5)');
                                            ?>

                                                <h2>ĐƠN HÀNG ĐÃ GIAO</h2>

                                                <?php

                                                $count = 0;
                                                while ($result_date = $date->fetch_assoc()) {
                                                    $count += 1;
                                                    //foreach($result_date as $date_order){
                                                ?>
                                                    <table>
                                                        <thead>
                                                            <tr>
                                                                <th>Đơn hàng: <?php echo $count; ?></th>
                                                                <th colspan="2">Account: <?php echo $username; ?></th>
                                                                <th colspan="2">Ngày đặt: <?php echo $result_date['order_time']; ?></th>
                                                                <th colspan="3">Ngày giao: <?php echo $result_date['recieve_time']; ?></th>
                                                                <th colspan="2" class="toggle">Xem chi tiết</th>
                                                            </tr>
                                                        </thead>
                                                    </table>

                                                    <table class="display">
                                                        <thead style="background-color:#2a2b2c;">
                                                            <tr>
                                                                <th>STT</th>
                                                                <th>Tên khách hàng</th>
                                                                <th>Ảnh</th>
                                                                <th>Tên</th>
                                                                <th>Size</th>
                                                                <th>Giá</th>
                                                                <th>Số lượng</th>
                                                                <th>Thành tiền</th>
                                                                <th>Địa chỉ</th>
                                                                <th>Tình trạng</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php
                                                            $getOrder = $order->admin_getOrder_waiting($userId, '(2,5)', $result_date['order_time']);
                                                            if ($getOrder) {
                                                                $i = 0;
                                                                $tong2 = 0;
                                                                while ($result_getOrder_waiting = $getOrder->fetch_assoc()) {
                                                                    $tong2 += $result_getOrder_waiting['thanhtien'];
                                                            ?>
                                                                    <tr>
                                                                        <td><?= ($i = $i + 1); ?></td>
                                                                        <td><?= $result_getOrder_waiting['name']; ?></td>
                                                                        <td>
                                                                            <a href="../chitietsanpham.php?productId=<?php echo $result_getOrder_waiting['productId'] ?>">
                                                                                <img style="width:100px;" src="../admin/upload/<?= $result_getOrder_waiting['image']; ?>"></a>
                                                                        </td>
                                                                        <td>
                                                                            <?= $result_getOrder_waiting['productName']; ?>
                                                                        </td>
                                                                        <td>
                                                                            <?= $result_getOrder_waiting['size']; ?>
                                                                        </td>
                                                                        <td>
                                                                            <?= number_format($result_getOrder_waiting['price'], 0, ',', '.') . "" . "đ"  ?>
                                                                        </td>
                                                                        <td>
                                                                            <?= $result_getOrder_waiting['quantity']; ?>
                                                                        </td>
                                                                        <td>
                                                                            <?= number_format($result_getOrder_waiting['thanhtien'], 0, ',', '.') . "" . "đ"  ?>
                                                                        </td>
                                                                        <td style="width:250px;">
                                                                            <?= $result_getOrder_waiting['diaChi']; ?>
                                                                        </td>
                                                                        <td style="color:blue;cursor:pointer">Đã nhận được hàng</td>
                                                                    </tr>
                                                                <?php

                                                                }
                                                                ?>
                                                                <td colspan="11" style="background-color:#2a2b2c;text-align:center;color:white;">Tổng đơn hàng: <?php echo number_format($tong2, 0, ',', '.') . "" . "đ"; ?></td>
                                                        <?php
                                                                //}
                                                            }
                                                        }
                                                        ?>
                                                        </tbody>
                                                    </table>
                                                <?php } ?>

                                                <!-- status=3 -->


                                                <?php
                                                if (isset($_GET['userId']) && $_GET['action'] == "3") {
                                                    $userId = $_GET['userId'];
                                                    $status = $_GET['action'];
                                                    $date = $order->order_date($userId, '(3)');
                                                ?>

                                                    <h2>YÊU CẦU TRẢ HÀNG</h2>

                                                    <?php
                                                    if ($date == NULL) {
                                                    } else {
                                                        $count = 0;
                                                        while ($result_date = $date->fetch_assoc()) {
                                                            $count += 1;
                                                            //foreach($result_date as $date_order){
                                                    ?>
                                                            <table>
                                                                <thead>
                                                                    <tr>
                                                                        <th>Đơn hàng: <?php echo $count; ?></th>
                                                                        <th colspan="2">Account: <?php echo $username; ?></th>
                                                                        <th colspan="2">Ngày đặt: <?php echo $result_date['order_time']; ?></th>
                                                                        <th colspan="3">Ngày giao: <?php echo $result_date['recieve_time']; ?></th>
                                                                        <th colspan="2" class="toggle">Xem chi tiết</th>
                                                                    </tr>
                                                                </thead>
                                                            </table>

                                                            <table class="display">
                                                                <thead style="background-color:#2a2b2c;">
                                                                    <tr>
                                                                        <th>STT</th>
                                                                        <th>Tên khách hàng</th>
                                                                        <th>Ảnh</th>
                                                                        <th>Tên</th>
                                                                        <th>Size</th>
                                                                        <th>Giá</th>
                                                                        <th>Số lượng</th>
                                                                        <th>Thành tiền</th>
                                                                        <th>Địa chỉ</th>
                                                                        <th>Tình trạng</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php
                                                                    $getOrder = $order->admin_getOrder_waiting($userId, '(3)', $result_date['order_time']);
                                                                    if ($getOrder) {
                                                                        $i = 0;
                                                                        $tong2 = 0;
                                                                        $orderID = "";
                                                                        while ($result_getOrder_waiting = $getOrder->fetch_assoc()) {
                                                                            $tong2 += $result_getOrder_waiting['thanhtien'];
                                                                            $orderID .= $result_getOrder_waiting['orderId'] . ",";
                                                                    ?>
                                                                            <tr>
                                                                                <td><?= ($i = $i + 1); ?></td>
                                                                                <td><?= $result_getOrder_waiting['name']; ?></td>
                                                                                <td>
                                                                                    <a href="../chitietsanpham.php?productId=<?php echo $result_getOrder_waiting['productId'] ?>">
                                                                                        <img style="width:100px;" src="../admin/upload/<?= $result_getOrder_waiting['image']; ?>"></a>
                                                                                </td>
                                                                                <td>
                                                                                    <?= $result_getOrder_waiting['productName']; ?>
                                                                                </td>
                                                                                <td>
                                                                                    <?= $result_getOrder_waiting['size']; ?>
                                                                                </td>
                                                                                <td>
                                                                                    <?= number_format($result_getOrder_waiting['price'], 0, ',', '.') . "" . "đ"  ?>
                                                                                </td>
                                                                                <td>
                                                                                    <?= $result_getOrder_waiting['quantity']; ?>
                                                                                </td>
                                                                                <td>
                                                                                    <?= number_format($result_getOrder_waiting['thanhtien'], 0, ',', '.') . "" . "đ"  ?>
                                                                                </td>
                                                                                <td style="width:250px;">
                                                                                    <?= $result_getOrder_waiting['diaChi']; ?>
                                                                                </td>
                                                                                <td style="color:red;cursor:pointer">Yêu cầu trả hàng</td>
                                                                            </tr>
                                                                        <?php

                                                                        }
                                                                        ?>
                                                                        <td colspan="6" style="background-color:#2a2b2c;text-align:center;color:white;">Tổng đơn hàng: <?php echo number_format($tong2, 0, ',', '.') . "" . "đ"; ?></td>
                                                                        <td colspan="5" style="background-color:#2a2b2c;text-align:center;color:white;cursor:pointer;">
                                                                            <a style="text-decoration:none;font-size:15px;" onclick="return confirm('Bạn muốn xác nhận trả hàng?')" href="?orderID=<?php echo $orderID ?>&status=3&userId=<?php echo $userId; ?>&action=3&username=<?php echo $username; ?>" class="ti-check"> Chấp nhận yêu cầu</a>
                                                                        </td>
                    </div>

        <?php
                                                                    }
                                                                }
                                                            }
        ?>
        </tbody>
        </table>
    <?php } ?>


    <!-- status=-1,4 -->


    <?php
    if (isset($_GET['userId']) && $_GET['action'] == "4") {
        $userId = $_GET['userId'];
        $status = $_GET['action'];
        $date = $order->order_date($userId, '(-1,4)');
    ?>

        <h2>ĐƠN HÀNG ĐÃ HỦY</h2>

        <?php
        if ($date == NULL) {
        } else {
            $count = 0;
            while ($result_date = $date->fetch_assoc()) {
                $count += 1;
                //foreach($result_date as $date_order){
        ?>
                <table>
                    <thead>
                        <tr>
                            <th>Đơn hàng: <?php echo $count; ?></th>
                            <th colspan="2">Account: <?php echo $username; ?></th>
                            <th colspan="5">Ngày đặt: <?php echo $result_date['order_time']; ?></th>
                            <th colspan="2" class="toggle">Xem chi tiết</th>
                        </tr>
                    </thead>
                </table>

                <table class="display">
                    <thead style="background-color:#2a2b2c;">
                        <tr>
                            <th>STT</th>
                            <th>Tên khách hàng</th>
                            <th>Ảnh</th>
                            <th>Tên</th>
                            <th>Size</th>
                            <th>Giá</th>
                            <th>Số lượng</th>
                            <th>Thành tiền</th>
                            <th>Địa chỉ</th>
                            <th>Tình trạng</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $getOrder = $order->admin_getOrder_waiting($userId, '(-1,4)', $result_date['order_time']);
                        if ($getOrder) {
                            $i = 0;
                            $tong2 = 0;
                            while ($result_getOrder_waiting = $getOrder->fetch_assoc()) {
                                $tong2 += $result_getOrder_waiting['thanhtien'];
                        ?>
                                <tr>
                                    <td><?= ($i = $i + 1); ?></td>
                                    <td><?= $result_getOrder_waiting['name']; ?></td>
                                    <td>
                                        <a href="../chitietsanpham.php?productId=<?php echo $result_getOrder_waiting['productId'] ?>">
                                            <img style="width:100px;" src="../admin/upload/<?= $result_getOrder_waiting['image']; ?>"></a>
                                    </td>
                                    <td>
                                        <?= $result_getOrder_waiting['productName']; ?>
                                    </td>
                                    <td>
                                        <?= $result_getOrder_waiting['size']; ?>
                                    </td>
                                    <td>
                                        <?= number_format($result_getOrder_waiting['price'], 0, ',', '.') . "" . "đ"  ?>
                                    </td>
                                    <td>
                                        <?= $result_getOrder_waiting['quantity']; ?>
                                    </td>
                                    <td>
                                        <?= number_format($result_getOrder_waiting['thanhtien'], 0, ',', '.') . "" . "đ"  ?>
                                    </td>
                                    <td style="width:250px;">
                                        <?= $result_getOrder_waiting['diaChi']; ?>
                                    </td>
                                    <?php
                                    if ($result_getOrder_waiting['status'] == -1) {
                                    ?>
                                        <td style="color:red;cursor:pointer">Đã hủy</td>
                                    <?php
                                    } else {
                                    ?>
                                        <td style="color:red;cursor:pointer">Đã trả hàng</td>
                                    <?php } ?>
                                </tr>
                            <?php

                            }
                            ?>
                            <td colspan="11" style="background-color:#2a2b2c;text-align:center;color:white;">Tổng đơn hàng: <?php echo number_format($tong2, 0, ',', '.') . "" . "đ"; ?></td>
                <?php
                        }
                    }
                }

                ?>
                    </tbody>
                </table>
            <?php } ?>
                </div>
    </div>
    </section>
    </main>
    </div>

</body>
<script src="././assets/js/chitietdonhang.js"></script>

</html>