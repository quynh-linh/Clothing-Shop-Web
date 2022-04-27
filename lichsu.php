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
	<link rel="stylesheet" href="assets/font/themify-icons/themify-icons.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giỏ hàng</title>
</head>
<body>
	<div class="grid">
		<!-- Phần header -->	
		<?php include 'inc/header.php' ?>
	</div>
        <div class="grid">
            <div class="app">
            <div class="header_payment">LỊCH SỬ ĐẶT HÀNG</div>
                <div class="grid wide">
                    <div class="payment-table">
                    <table>
                                        <thead>
                                            <tr>
                                                <th>ID</th>
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
                                                $getOrderHistory = $cat->getOrderHistory();
                                                if ($getOrderHistory) {
                                                    $i=0;
                                                    $total=0;
                                                    while ($result_OrderHistory = $getOrderHistory->fetch_assoc()) {
                                                        $total+=$result_OrderHistory['thanhtien'];
                                            ?>
                                            <tr>
                                                <td ><?=($i=$i+1);?></td>
                                                <td>
                                                    <div class="cart-td_title">
                                                        <a href="chitietsanpham.php?productId=<?php echo $result_OrderHistory['productId'];?>"><img style="cursor:pointer;"src="./admin/upload/<?php echo $result_OrderHistory['image'] ?>" alt="" class="app_cart-img"></a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span><?php echo $result_OrderHistory['productName'] ?></span>
                                                </td>
                                                <td><?php echo $result_OrderHistory['size'] ?></td>
                                                <td>
                                                    <div class="cart-btn">
                                                        <span><?php echo number_format($result_OrderHistory['price'], 0, ',', '.').""."đ" ?></span>
                                                    </div>
                                                </td>
                                                <td>
                                                <form action="" method="post">
                                                    <!-- hidden loại type không hiên thị --> 
                                                    
                                                    <input type="button" name="quantity" value="<?php echo $result_OrderHistory['quantity'] ?>" width="30px"/>
                                                    <!-- <input type="submit" name="submit" value="Update"/> -->
                                                </form>
                                                </td>
                                                
                                                <td>
                                                    <span class="cart-current"><?php 
                                                        echo number_format($result_OrderHistory['thanhtien'], 0, ',', '.')." "."đ" ;
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
                                            <tr>
                                                <th colspan="2">Tổng giá trị</th>
                                                <th><?php echo number_format($total, 0, ',', '.')." "."đ" ; ?></th>
                                            </tr>
                                        </tbody>
                                    </table>
                    </div>
                </div>
            </div>
                </div>
            </div>
        </div>
    
<?php include './inc/footer.php' ?>
</body>
</html>