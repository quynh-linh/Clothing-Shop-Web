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
	<link rel="stylesheet" href="assets/css/main.css">
	<link rel="stylesheet" href="assets/font/themify-icons/themify-icons.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giỏ hàng</title>
</head>
<?php
	// Cập nhập số lượng sản phẩm vào giỏ hàng
	if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['click_+'])) {
		$cartId = $_POST['cartId']; 
		$quantity = $_POST['quantity_+'];
        $update_quantity = $cat-> updateQuantity($cartId, $quantity);
    }
	if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['click_-'])) {
		$cartId = $_POST['cartId']; 
		$quantity = $_POST['quantity_-'];
        $update_quantity = $cat-> updateQuantity($cartId, $quantity);
    }
	// Xóa sản phẩm ra khỏi giỏ hàng
	if (isset($_GET['cartID'])) {
		$cartId = $_GET['cartID']; 
		$delProductCart = $cat->del_ProductCart($cartId);
	}
	if (!$_GET['id']) {
		echo "<meta http-equiv='refresh' content='0;URL=?id=live'>";
	}
?>
<body>
	<div class="grid">
		<!-- Phần header -->	
		<?php include 'inc/header.php' ?>
	</div>
	<div class="grid">
		<div class="app">
			<div class="grid wide">
				<div class="app_cart">
					<div class="row">
						<div class="table-pc">
							<div class="col l-12">
								<table>
									<thead>
										<tr>
											<th>Ảnh sản phẩm</th>
											<th>Tên Sản Phẩm</th>
											<th>Giá</th>
											<th>Số lượng</th>
											<th>Số tiền</th>
											<th>Trạng thái</th>
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
													$i++;	
										?>
										<tr>
											<td>
												<div class="cart-td_title">
													<img src="./admin/upload/<?php echo $result_ProductCat['image'] ?>" alt="" class="app_cart-img">
												</div>
											</td>
											<td>
												<span><?php echo $result_ProductCat['productName'] ?></span>
											</td>
											<td>
												<div class="cart-btn">
													<span><?php echo number_format($result_ProductCat['price'], 0, ',', '.').""."đ" ?></span>
												</div>
											</td>
											<td>
											<form action="" method="post">
												<div class="quantity">
													<input type="submit" class="btn" value="-" onclick="down(<?php echo $i;?>)" name="click_-" style="width:40px;">
													<input type="hidden" name="cartId" value="<?php echo $result_ProductCat['cartID'] ?>"/>
													<input type="hidden" name="quantity_+" value="<?=$result_ProductCat['quantity']+1 ?>" id="hidden_input<?php echo $i;?>"/>
													
													<?php if( $result_ProductCat['quantity'] ==1){ ?>
														<input type="hidden" name="quantity_-" value="<?=$result_ProductCat['quantity'] ?>" id="hidden_input<?php echo $i;?>"/>
													<?php
														}else{
													?>
														<input type="hidden" name="quantity_-" value="<?=$result_ProductCat['quantity']-1 ?>" id="hidden_input<?php echo $i;?>"/>
													<?php
														}
													?>

													<input class="input" id="id<?php echo $i;?>" type="text" value="<?=$result_ProductCat['quantity'] ?>" style="width:80px; text-align:center;">
													<input type="submit" class="btn" value="+" onclick="up(<?php echo $i;?>)" name="click_+" style="width:40px;">
												</div>
											</form>
											</td>
											
											<td>
												<span class="cart-current"><?php  $total = $result_ProductCat['price'] * $result_ProductCat['quantity'];
													echo number_format($total, 0, ',', '.').""."đ";
							
												?></span>
											</td>
											<td>
												<a onclick="return confirm('Bạn có chắc chắn muốn xóa')" href="?cartID=<?php echo $result_ProductCat['cartID'] ?>" class="ti-close"><?php ?></a>
											</td>
										</tr>
										<?php
													$dem++;
													$subTotal+=$total;
												}
											}
										?>
									</tbody>
									<?php
										if (isset($update_quantity)) {
											echo $update_quantity;
										}
									?>
									<?php
										if (isset($delProductCart)) {
											echo $delProductCart;
										}
									?>
								</table>
							</div>
							<div class="col m-12 l-12">
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
												<div class="voucher-input"><?php echo number_format($subTotal, 0, ',', '.').""."đ"?></div>
											</td>
										</tr>
										<tr>
											<td><span>VAT(10%)</span></td>
											<td><?php 
												$vat = $subTotal*0.1;
												echo number_format($vat, 0, ',', '.').""."đ";
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
															echo number_format($grand_Total, 0, ',', '.').""."đ"
														?>
													</span>
													<a href="thanhtoan.php"><button>Mua hàng</button></a>
													<a href="lichsu.php"><button >Lịch sử</button></a>
												</div>
										</div>
											</td>
										</tr>
									</tbody>
								</table>
								<?php
									} else {
										echo '<div class="cart-purchase-btn">
												Giỏ hàng trống
												<a href="lichsu.php"><button >Lịch sử</button></a>
											  </div>';
									}
								?>
							</div>
							
						</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php include './inc/footer.php' ?>
	<script src="./assets/js/cart.js"></script>
</body>
</html>