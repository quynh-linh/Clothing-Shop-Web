<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
    <link rel="stylesheet" href="assets/font/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="assets/css/donhang.css">
    <title>Quản lý đơn hàng</title>
</head>
<?php include '../classses/order.php' ?>
<?php 
$order=new order();
if ( isset($_GET['order']) && $_GET['order']  && $_GET['userId']!=" ") {
        $userId=$_GET['userId'];
        $username=$_GET['username'];
        $orderId="(".$_GET['order']."-1)";  
        $update_status = $order->update_Status_Order($orderId,1,$userId);
        $str = substr($_GET['order'],0,-1);
        $explore = explode(',',$str);
        
        foreach($explore as $ex){
            $admin_confirm= $order ->admin_confirm_order($ex,$userId);
        }
        header('Location:chitietdonhang.php?userId='.$userId.'&action=0&username='.$username.'');

}

if ( isset($_GET['username'])  && $_GET['username']!=" ") {
    $username=$_GET['username'];
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
                            $order=new order();
                            if (isset($_GET['userId']) && $_GET['action']=="0") {
                                $userId = $_GET['userId'];
                                $status=$_GET['action'];
                                $date=$order->order_date($userId,$status);
                        ?>

                                <h2>ĐƠN HÀNG ĐANG CHỜ XÁC NHẬN</h2>

                        <?php
                                if($date==Null)
                                {

                                }else{
                                
                                $count=0;
                                while($result_date=$date->fetch_assoc()){
                                    $count+=1;
                                    foreach($result_date as $date_order){
                        ?>
                        
                        <table >
                            <thead>
                            <tr>
                                    <th>Đơn hàng: <?php echo $count;?></th>
                                    <th colspan="2">Account: <?php echo $username;?></th>
                                    <th colspan="5">Ngày đặt: <?php echo $date_order;?></th>
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
                                    $getOrder_waiting = $order->admin_getOrder_waiting($userId,$status,$date_order);
                                    if ($getOrder_waiting) {
                                        $i = 0;
                                        $tong0=0;
                                        $orderID="";
                                        while ($result_getOrder_waiting = $getOrder_waiting->fetch_assoc()) {
                                            $tong0+=$result_getOrder_waiting['thanhtien'];
                                            $orderID.=$result_getOrder_waiting['orderId'].",";
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
                                    <td style="width:250px;">
                                        <?= $result_getOrder_waiting['diaChi']; ?>
                                    </td>
                                    <td style="color:red;cursor:pointer">Đang chờ xác nhận</td>
                                    
                                </tr>
                                <?php
                                            
                                        }
                                ?>
                                <td colspan="9" style="background-color:#2a2b2c;text-align:center;color:white;">Tổng đơn hàng: <?php echo number_format($tong0, 0, ',', '.') . "" . "đ";?></td>
                                <td style="background-color:#2a2b2c;">
									<a style="font-size:20px;" onclick="return confirm('Bạn có chắc chắn muốn xác nhận đơn hàng này')" href="?order=<?php echo $orderID ?>&status=1&userId=<?php echo $userId; ?>&action=0&username=<?php echo $username;?>" class="ti-check"></a>
								</td>
                                <?php
                                    }
                                }
                            }
                                } 
                            }
                            ?>
                                </tbody>

                        </table>
                                
<!-- status=1 -->       
                        <?php
                            if (isset($_GET['userId']) && $_GET['action']=="1" ) {
                                $userId = $_GET['userId'];
                                $status=$_GET['action'];
                                $date=$order->order_date($userId,$status);
                        ?>

                            <h2>ĐƠN HÀNG ĐÃ GIAO</h2>
                            
                        <?php
                                $count=0;
                                while($result_date=$date->fetch_assoc()){
                                    $count+=1;
                                foreach($result_date as $date_order){
                        ?>
                        
                        <table >
                            <thead>
                            <tr>
                                    <th>Đơn hàng: <?php echo $count;?></th>
                                    <th colspan="2">Account: <?php echo $username;?></th>
                                    <th colspan="5">Ngày giao: <?php echo $date_order;?></th>
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
                                    $getOrder = $order->admin_getOrder_waiting($userId,$status,$date_order);
                                    if ($getOrder) {
                                        $i = 0;
                                        $tong1=0;
                                        while ($result_getOrder_waiting = $getOrder->fetch_assoc()) {
                                            $tong1+=$result_getOrder_waiting['thanhtien'];
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
                                    <td style="width:250px;">
                                        <?= $result_getOrder_waiting['diaChi']; ?>
                                    </td>
                                    <td style="color:blue;cursor:pointer">Đã nhận được hàng</td>
                                </tr>
                                <?php
                                            
                                        }
                                ?>
                                    <td colspan="11" style="background-color:#2a2b2c;text-align:center;color:white;">Tổng đơn hàng: <?php echo number_format($tong1, 0, ',', '.') . "" . "đ";?></td>
                                <?php
                                    }
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
                                $date=$order->order_date($userId,$status);
                        ?>

                                <h2>ĐƠN HÀNG ĐÃ HỦY</h2>

                        <?php
                                $count=0;
                                while($result_date=$date->fetch_assoc()){
                                    $count+=1;
                                foreach($result_date as $date_order){
                        ?>
                        <table >
                            <thead >
                            <tr>
                                    <th>Đơn hàng: <?php echo $count;?></th>
                                    <th colspan="2">Account: <?php echo $username;?></th>
                                    <th colspan="5">Ngày hủy: <?php echo $date_order;?></th>
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
                                    $getOrder = $order->admin_getOrder_waiting($userId,$status,$date_order);
                                    if ($getOrder) {
                                        $i = 0;
                                        $tong2=0;
                                        while ($result_getOrder_waiting = $getOrder->fetch_assoc()) {
                                            $tong2+=$result_getOrder_waiting['thanhtien'];
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
                                    <td style="width:250px;">
                                        <?= $result_getOrder_waiting['diaChi']; ?>
                                    </td>
                                    <td style="color:red;cursor:pointer">Đã hủy đặt hàng</td>
                                </tr>
                                <?php
                                            
                                        }
                                        ?>
                                        <td colspan="11" style="background-color:#2a2b2c;text-align:center;color:white;">Tổng đơn hàng: <?php echo number_format($tong2, 0, ',', '.') . "" . "đ";?></td>
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