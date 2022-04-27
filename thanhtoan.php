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
<?php
    if (isset($_GET['orderid']) && $_GET['orderid']=='order'){
        $idUser=1;
        $inserOder=$cat->insertOder($idUser);
        $delCart=$cat->del_Cart();
        header('Location:index.php');
    }
?>

<body>
	<div class="grid">
		<!-- Phần header -->	
		<?php include 'inc/header.php' ?>
	</div>
    <div class="header_payment">THANH TOÁN</div>
    <form action="" method="POST">
        <div class="grid">
            <div class="app">
                <div class="grid wide">
                    <div class="box">
                        <div class="box_left">
                        <table>
                                        <thead>
                                            <tr>
                                                <th style="width:5%;font-size:20px;">ID</th>
                                                <th style="width:15%;font-size:20px;">Ảnh</th>
                                                <th style="width:20%;font-size:20px;">Tên</th>
                                                <th style="width:10%;font-size:20px;">Size</th>
                                                <th style="width:15%;font-size:20px;">Giá</th>
                                                <th style="width:15%;font-size:20px;">Số lượng</th>
                                                <th style="width:20%;font-size:20px;">Số tiền</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                $getProductCat = $cat->getProductCart();
                                                if ($getProductCat) {
                                                    $dem=0;
                                                    $subTotal = 0;
                                                    $i=0;
                                                    while ($result_ProductCat = $getProductCat->fetch_assoc()) {
                                            ?>
                                            <tr>
                                                <td ><?=($i=$i+1);?></td>
                                                <td>
                                                    <div class="cart-td_title">
                                                    <a href="chitietsanpham.php?productId=<?php echo $result_ProductCat['productId'];?>">
                                                        <img style="cursor:pointer;" src="./admin/upload/<?php echo $result_ProductCat['image'] ?>" alt="" class="app_cart-img">
                                                    </a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span><?php echo $result_ProductCat['productName'] ?></span>
                                                </td>
                                                <td><?php echo $result_ProductCat['size'] ?></td>
                                                <td>
                                                    <div class="cart-btn">
                                                        <span><?php echo number_format($result_ProductCat['price'], 0, ',', '.').""."đ" ?></span>
                                                    </div>
                                                </td>
                                                <td>
                                                <form action="" method="post">
                                                    <!-- hidden loại type không hiên thị --> 
                                                    <input type="hidden" name="cartId" value="<?php echo $result_ProductCat['cartID'] ?>"/>
                                                    <input type="button" name="quantity" value="<?php echo $result_ProductCat['quantity'] ?>" width="30px"/>
                                                    <!-- <input type="submit" name="submit" value="Update"/> -->
                                                </form>
                                                </td>
                                                
                                                <td>
                                                    <span class="cart-current"><?php  $total = $result_ProductCat['price'] * $result_ProductCat['quantity'];
                                                        echo number_format($total, 0, ',', '.')." "."đ" ;
                                                    ?></span>
                                                </td>
                                                
                                            </tr>
                                            <?php
                                                        $dem++;
                                                        $subTotal+=$total;
                                                    }
                                                }
                                            ?>
                                        </tbody>
                                        <!-- <?php
                                            if (isset($update_quantity)) {
                                                echo $update_quantity;
                                            }
                                        ?>
                                        <?php
                                            if (isset($delProductCart)) {
                                                echo $delProductCart;
                                            }
                                        ?> -->
                                    </table>
                                    <div class="cart-voucher">
                                    <?php
                                        $check_cart = $cat->checkCart();
                                        if ($check_cart) {
                                    ?>
                                    <table>
                                        <thead>
                                            <th></th>
                                            <th></th>
                                        </thead >
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="voucher-title">
                                                        <span>Tổng tiền</span>
                                                        <span class="ti-receipt"></span>
                                                    </div>
                                                    
                                                </td>
                                                <td>
                                                    <div class="voucher-input"><?php echo number_format($subTotal, 0, ',', '.')." "."đ" ?></div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><span>VAT(10%)</span></td>
                                                <td><?php 
                                                    $vat = $subTotal*0.1;
                                                    echo number_format($vat, 0, ',', '.')." "."đ";	
                                                ?></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>
                                                <div class="cart-purchase">
                                                    <div class="cart-purchase-btn">
                                                        <span>Tổng thanh toán</span>
                                                        <span>(<?php 
                                                            Session::set('sum',$dem);
                                                            echo $dem ?> Sản phẩm)
                                                    </span>

                                                        <span>
                                                            <?php
                                                                $grand_Total = $subTotal - $vat;
                                                                echo number_format($grand_Total, 0, ',', '.')." "."đ";
                                                            ?>
                                                        </span>
                                                        
                                                        
                                                    </div>
                                            </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <?php
                                        } 
                                    ?>
                                </div>
                        </div>
                        <div class="box_right">
                        <table>
                                        
                                        <tbody>
                                            <tr style="line-height:50px;">
                                                <td style="width:20%">Tên:</td>
                                                <td></td>
                                            </tr>
                                            <tr style="line-height:50px;">
                                                <td>Email:</td>
                                                <td></td>
                                            </tr>
                                            <tr style="line-height:50px;">
                                                <td>SĐT:</td>
                                                <td></td>
                                            </tr>
                                            <tr style="line-height:50px;">
                                                <td>Địa chỉ:</td>
                                                <td></td>
                                            </tr>
                                            <tr style="line-height:50px;">
                                                <td colspan="2" style="cursor:pointer;">Cập nhật thông tin</td>
                                            </tr>
                                        </tbody>
                                       
                        </table>
                                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <p class="btn"><a href="?orderid=order" id="btn_order" onclick="return alert('Bạn đã đặt hàng thành công')" >Xác nhận đặt hàng</a></p>

    </form>
	<?php include './inc/footer.php' ?>
</body>
</html>