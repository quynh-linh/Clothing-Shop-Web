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

                        <ul style="display:flex;">
                                <li class="QLdonhang">Chờ xác nhận</li>
                                <li class="QLdonhang">Đang giao</li>
                                <li class="QLdonhang">Đã giao</li>
                                <li class="QLdonhang">Trả hàng</li>
                                <li class="QLdonhang">Đã hủy</li>
                        </ul>

                    <div class="table-responsive">
                    <table class="table table_0">
                            <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Tên khách hàng</th>
                                    <th>Tài khoản</th>
                                    <th style="width:500px;">Xem chi tiết</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $order=new order();
                                    $getOrderHistory0 = $order->admin_getOrder('(0)');
                                    if ($getOrderHistory0) {
                                        $i = 0;
                                        while ($result_OrderHistory0 = $getOrderHistory0->fetch_assoc()) {
                                ?>
                                <tr>
                                    <td><?= ($i = $i + 1); ?></td>
                                    <td><?= $result_OrderHistory0['name']; ?></td>
                                    <td>
                                        <?= $result_OrderHistory0['username']; ?>
                                    </td>
                                    <td>
                                        <a href="chitietdonhang.php?userId=<?php echo $result_OrderHistory0['userId']?>&action=0&username=<?php echo $result_OrderHistory0['username'];?> ">Xem chi tiết</a>
                                    </td>
                                </tr>
                                <?php
                                        }
                                    }
                                ?>
                                </tbody>
                        </table>

                        <table class="table table_1">
                            <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Tên khách hàng</th>
                                    <th>Tài khoản</th>
                                    <th style="width:500px;">Xem chi tiết</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $order=new order();
                                    $getOrderHistory1 = $order->admin_getOrder('(1)');
                                    $total1 = 0;
                                    if ($getOrderHistory1) {
                                        $i = 0;
                                        while ($result_OrderHistory1 = $getOrderHistory1->fetch_assoc()) {
                                ?>
                                <tr>
                                    <td><?= ($i = $i + 1); ?></td>
                                    <td><?= $result_OrderHistory1['name']; ?></td>
                                    <td>
                                        <?= $result_OrderHistory1['username']; ?>
                                    </td>
                                    <td>
                                    <a href="chitietdonhang.php?userId=<?php echo $result_OrderHistory1['userId']?>&action=1&username=<?php echo $result_OrderHistory1['username'];?> ">Xem chi tiết</a>
                                    </td>
                                </tr>
                                <?php
                                        }
                                    }
                                ?>
                                </tbody>
                        </table>

                        <table class="table table_2">
                            <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Tên khách hàng</th>
                                    <th>Tài khoản</th>
                                    <th style="width:500px;">Xem chi tiết</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $order=new order();
                                    $getOrderHistory2 = $order->admin_getOrder('(2,5)');
                                    $total2 = 0;
                                    if ($getOrderHistory2) {
                                        $i = 0;
                                        while ($result_OrderHistory2 = $getOrderHistory2->fetch_assoc()) {
                                ?>
                                <tr>
                                    <td><?= ($i = $i + 1); ?></td>
                                    <td><?= $result_OrderHistory2['name']; ?></td>
                                    <td>
                                        <?= $result_OrderHistory2['username']; ?>
                                    </td>
                                    <td>
                                        <a href="chitietdonhang.php?userId=<?php echo $result_OrderHistory2['userId']?>&action=2&username=<?php echo $result_OrderHistory2['username'];?> ">Xem chi tiết</a>
                                    </td>
                                </tr>
                                <?php
                                        }
                                    }
                                ?>
                                </tbody>
                        </table>


                        <table class="table table_3" >
                            <thead >
                                <tr >
                                    <th>STT</th>
                                    <th >Tên khách hàng</th>
                                    <th >Tài khoản</th>
                                    <th >Xem chi tiết</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $order=new order();
                                    $getOrderHistory0 = $order->admin_getOrder('(3)');
                                    if ($getOrderHistory0) {
                                        $i = 0;
                                        while ($result_OrderHistory0 = $getOrderHistory0->fetch_assoc()) {
                                ?>

                                <tr>
                                    <td><?= ($i = $i + 1); ?></td>
                                    <td><?= $result_OrderHistory0['name']; ?></td>
                                    <td>
                                        <?= $result_OrderHistory0['username']; ?>
                                    </td>
                                    <td>
                                        <a href="chitietdonhang.php?userId=<?php echo $result_OrderHistory0['userId']?>&action=3&username=<?php echo $result_OrderHistory0['username'];?> ">Xem chi tiết</a>
                                    </td>
                                </tr>
                                <?php
                                        }
                                    }
                                ?>
                                </tbody>
                        </table>

                        <table class="table table_4">
                            <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Tên khách hàng</th>
                                    <th>Tài khoản</th>
                                    <th style="width:450px;">Xem chi tiết</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $order=new order();
                                    $getOrderHistory0 = $order->admin_getOrder('(-1,4)');
                                    if ($getOrderHistory0) {
                                        $i = 0;
                                        while ($result_OrderHistory0 = $getOrderHistory0->fetch_assoc()) {
                                ?>
                                <tr>
                                    <td><?= ($i = $i + 1); ?></td>
                                    <td><?= $result_OrderHistory0['name']; ?></td>
                                    <td>
                                        <?= $result_OrderHistory0['username']; ?>
                                    </td>
                                    <td>
                                        <a href="chitietdonhang.php?userId=<?php echo $result_OrderHistory0['userId']?>&action=4&username=<?php echo $result_OrderHistory0['username'];?> ">Xem chi tiết</a>
                                    </td>
                                </tr>
                                <?php
                                        }
                                    }
                                ?>
                                </tbody>
                        </table>
                    </div>
                </div>
            </div>
            </section>
        </main>
    </div>
    
</body>
<script src="././assets/js/donhang.js"></script>
</html>