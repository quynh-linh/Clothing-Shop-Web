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
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <title>Giỏ hàng</title>
</head>
<?php
if (isset($_GET['orderID']) && $_GET['orderID']) {
    $userId = Session::get('user_id');
    $orderId ="(".$_GET['orderID']."-1)";
    $update_status = $order->update_Status_Order($orderId, -1, $userId);
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
                        <!-- <table id="choXN" class="table table_0"> -->
                                <?php
                                    $date=$order->order_date(Session::get('user_id'),0);
                                    if($date==Null){
                                
                                    }else{

                                        $count=0;
                                        while($result_date=$date->fetch_assoc()){
                                        $count+=1;
                                        foreach($result_date as $date_order){
                                ?>
                                <table id="choXN" class="table table_0">
                                    <thead>
                                        <tr>
                                            <th>Đơn hàng: <?php echo $count;?></th>
                                            <th colspan="5">Ngày đặt: <?php echo $date_order;?></th>
                                            <th colspan="2" class="toggle">Xem chi tiết</th>
                                        </tr>
                                    </thead>
                                        <!-- </table> -->

                        <table class="display display_0">
                            <thead style="background-color:blue;">
                                <tr>
                                    <th>STT</th>
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
                                        $getOrderHistory0 = $order->getOrderHistory(Session::get('user_id'), 0,$date_order);
                                        
                                        if ($getOrderHistory0) {
                                        $i = 0;
                                        $total0 = 0;
                                        $orderID="";
                                        while ($result_OrderHistory0 = $getOrderHistory0->fetch_assoc()) {
                                            $total0 += $result_OrderHistory0['thanhtien'];
                                            $orderID.=$result_OrderHistory0['orderId'].",";
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
                                                
                                            </tr>
                                    <?php
                                        }
                                         
                                        ?>
                                        <td colspan="8" style="background-color:#2a2b2c;text-align:center;color:white;">Tổng đơn hàng: <?php echo number_format($total0, 0, ',', '.') . "" . "đ";?></td>
                                        <td colspan="2" class="huy_don" style="background-color:#2a2b2c;">
                                            <a style="text-decoration:none;font-size:20px;" onclick="return confirm('Bạn có chắc chắn muốn hủy đơn hàng này')" href="?orderID=<?php echo $orderID ?>" class="ti-trash"></a>
                                        </td>
                                        <?php
                                    }
                                }
                            }
                        
                                    ?>
                                    </tbody>
                            </table>
                            </table>
                            <?php } ?>


                            <!-- <table id="daGiao" class="table table_1"> -->
                                <?php
                                $date1=$order->order_date(Session::get('user_id'),1);
                                if($date1==Null){
                                    
                                        }else{
    
                                            $count=0;
                                            while($result_date1=$date1->fetch_assoc()){
                                            $count+=1;
                                            foreach($result_date1 as $date_order1){
                                    ?>
                                    <table id="daGiao" class="table table_1">
                                        <thead>
                                            <tr>
                                                <th>Đơn hàng: <?php echo $count;?></th>
                                                <th colspan="5">Ngày đặt: <?php echo $date_order1;?></th>
                                                <th colspan="2" class="toggle">Xem chi tiết</th>
                                            </tr>
                                        </thead>
                                    <!-- </table> -->
    
                            <table class="display display_1">
                                <thead style="background-color:blue;">
                                    <tr>
                                        <th>STT</th>
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
                                    $getOrderHistory1 = $order->getOrderHistory(Session::get('user_id'), 1,$date_order1);
                                
                                    if ($getOrderHistory1) {
                                        $i = 0;
                                        $total1 = 0;
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
                                                <td style="color:blue;">Đã giao</td>
                                            </tr>
                                            <?php
                                            
                                            }
                                        ?>
                                        <td colspan="11" style="background-color:#2a2b2c;text-align:center;color:white;">Tổng đơn hàng: <?php echo number_format($total1, 0, ',', '.') . "" . "đ";?></td>
                                        <?php
                                    }
                                }
                            }
                        
                                ?> 
                                    </tbody>
                            </table>
                            </table>
                            <?php } ?>


                            <!--huy-->
                            <!-- <table id="daHuy" class="table table_2"> -->
                                <?php
                                    $date2=$order->order_date(Session::get('user_id'),-1);
                                    if($date2==Null){
                                
                                        }else{
    
                                            $count=0;
                                            while($result_date2=$date2->fetch_assoc()){
                                            $count+=1;
                                            foreach($result_date2 as $date_order2){
                                ?>
                                <table id="daHuy" class="table table_2">
                                        <thead>
                                            <tr>
                                                <th>Đơn hàng: <?php echo $count;?></th>
                                                <th colspan="5">Ngày đặt: <?php echo $date_order2;?></th>
                                                <th colspan="2" class="toggle">Xem chi tiết</th>
                                            </tr>
                                        </thead>
                                    <!-- </table> -->
    
                            <table class="display display_2">
                                <thead style="background-color:blue;">
                                    <tr>
                                        <th>STT</th>
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
                                    $getOrderHistory2 = $order->getOrderHistory(Session::get('user_id'), -1,$date_order2);
                                    
                                    if ($getOrderHistory2) {
                                        $i = 0;
                                        $total2 = 0;
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
                                            <?php  
                                        }
                                    ?>
                                            <td colspan="11" style="background-color:#2a2b2c;text-align:center;color:white;">Tổng đơn hàng: <?php echo number_format($total2, 0, ',', '.') . "" . "đ";?></td>
                                    <?php
                                    }
                                }
                            }

                                    ?> 
                                </tbody>

                            </table>
                            </table>
                            <?php } ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include './inc/footer.php' ?>
    </div>
</body>

<script src="./assets/js/donhang.js"></script>
</html>