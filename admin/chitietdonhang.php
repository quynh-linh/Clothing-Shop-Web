<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
    <link rel="stylesheet" href="assets/font/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="assets/css/donhang.css">
    <title>Quản lý đơn hàng</title>
</head>
<?php include '../classses/order.php' ?>
<?php 
$order=new order();
if ( isset($_GET['order'])  && $_GET['userId']!=" " ) {
        $userId=$_GET['userId'];
        $orderId=$_GET['order'];    
    $update_status = $order->update_Status_Order($orderId,1,$userId);
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
                        <div class="activity-select">
                            <div class="activity-selec-1">
                                <select name="" id="">
                                    <option value="C1">Sắp xếp theo khoảng thời gian</option>
                                    <option value="C1">Ban đầu</option>
                                    <option value="C1">Gần đây nhất</option>
                                </select>
                            </div>
                            <div class="activity-selec-2">
                                <select name="" id="">
                                    <option value="C1">Sắp xếp theo giá tiền</option>
                                    <option value="C1">Từ thấp đến cao</option>
                                    <option value="C1">Từ cao đến thấp</option>
                                </select>
                            </div>
                        </div>

                        <!-- status=0 -->
                        <?php
                            $order=new order();
                            if (isset($_GET['userId']) && $_GET['action']=="0" ) {
                                $userId = $_GET['userId'];
                                $status=$_GET['action'];
                        ?>
                        <table >
                            <thead>
                                <tr>
                                    <th>Mã đơn</th>
                                    <th>Tên khách hàng</th>
                                    <th>Ảnh</th>
                                    <th>Tên</th>
                                    <th>Size</th>
                                    <th>Giá</th>
                                    <th>Số lượng</th>
                                    <th>Thành tiền</th>
                                    <th>Ngày đặt</th>
                                    <th>Tình trạng</th>
                                    <th>Xác nhận</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $getOrder_waiting = $order->admin_getOrder_waiting($userId,$status);
                                    if ($getOrder_waiting) {
                                        $i = 0;
                                        while ($result_getOrder_waiting = $getOrder_waiting->fetch_assoc()) {
                                ?>
                                <tr>
                                    <td><?= ($i = $i + 1); ?></td>
                                    <td><?= $result_getOrder_waiting['username']; ?></td>
                                    <td>
                                        <a href="../chitietsanpham.php?productId=<?php echo $result_getOrder_waiting['productId']?>">
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
                                    <td>
                                        <?= $result_getOrder_waiting['order_time']; ?>
                                    </td>
                                    <td style="color:red;cursor:pointer">Đang chờ xác nhận</td>
                                    <td>
										<a onclick="return confirm('Bạn có chắc chắn muốn xác nhận đơn hàng này')" href="?order=<?php echo $result_getOrder_waiting['orderId'] ?>&status=1&userId=<?php echo $result_getOrder_waiting['userId']; ?>&action=0" class="ti-close"></a>
									</td>
                                </tr>
                                <?php
                                            
                                        }
                                    }
                                ?>
                                </tbody>
                        </table>
                        <?php } ?>
<!-- status=1 -->
                        <?php
                            if (isset($_GET['userId']) && $_GET['action']=="1" ) {
                                $userId = $_GET['userId'];
                                $status=$_GET['action'];
                        ?>
                        <table >
                            <thead>
                                <tr>
                                    <th>Mã đơn</th>
                                    <th>Tên khách hàng</th>
                                    <th>Ảnh</th>
                                    <th>Tên</th>
                                    <th>Size</th>
                                    <th>Giá</th>
                                    <th>Số lượng</th>
                                    <th>Thành tiền</th>
                                    <th>Ngày đặt</th>
                                    <th>Tình trạng</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $getOrder = $order->admin_getOrder_waiting($userId,$status);
                                    if ($getOrder) {
                                        $i = 0;
                                        while ($result_getOrder_waiting = $getOrder->fetch_assoc()) {
                                ?>
                                <tr>
                                    <td><?= ($i = $i + 1); ?></td>
                                    <td><?= $result_getOrder_waiting['name']; ?></td>
                                    <td>
                                        <a href="../chitietsanpham.php?productId=<?php echo $result_getOrder_waiting['productId']?>">
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
                                    <td>
                                        <?= $result_getOrder_waiting['order_time']; ?>
                                    </td>
                                    <td style="color:blue;cursor:pointer">Đã nhận được hàng</td>
                                </tr>
                                <?php
                                            
                                        }
                                    }
                                ?>
                                </tbody>
                        </table>
                        <?php } ?>




                        <!-- status=-1 -->


                        <?php
                            if (isset($_GET['userId']) && $_GET['action']=="-1" ) {
                                $userId = $_GET['userId'];
                                $status=$_GET['action'];
                                
                        ?>
                        <table >
                            <thead>
                                <tr>
                                    <th>Mã đơn</th>
                                    <th>Tên khách hàng</th>
                                    <th>Ảnh</th>
                                    <th>Tên</th>
                                    <th>Size</th>
                                    <th>Giá</th>
                                    <th>Số lượng</th>
                                    <th>Thành tiền</th>
                                    <th>Ngày đặt</th>
                                    <th>Tình trạng</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $getOrder = $order->admin_getOrder_waiting($userId,$status);
                                    if ($getOrder) {
                                        $i = 0;
                                        while ($result_getOrder_waiting = $getOrder->fetch_assoc()) {
                                ?>
                                <tr>
                                    <td><?= ($i = $i + 1); ?></td>
                                    <td><?= $result_getOrder_waiting['name']; ?></td>
                                    <td>
                                        <a href="../chitietsanpham.php?productId=<?php echo $result_getOrder_waiting['productId']?>">
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
                                    <td>
                                        <?= $result_getOrder_waiting['order_time']; ?>
                                    </td>
                                    <td style="color:red;cursor:pointer">Đã hủy đặt hàng</td>
                                </tr>
                                <?php
                                            
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
<script src="././assets/js/donhang.js"></script>
</html>