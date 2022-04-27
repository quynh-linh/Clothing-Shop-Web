<?php include './inc/handle.php' ?>
<?php 
    $search = '';
    if(isset($_GET['search']))
            $search = $_GET['search'];
    $search = $product->searchProduct($search);
	if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
		$showSearch = $product->searchProductRangePrice($_POST);
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Tìm kiếm nâng cao</title>
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
	<link rel="stylesheet" type="text/css" href="assets/css/main.css">
	<link rel="stylesheet" type="text/css" href="assets/css/timkiemnangcao.css">
	<link rel="stylesheet" type="text/css" href="assets/css/grid.css">
	<link rel="stylesheet" href="assets/font/themify-icons/themify-icons.css">
	<link rel="shortcut icon" href="assets/img/favicon_created_by_logaster.ico" type="image/x-icon">
	<script src="./assets/js/product.js"></script>
</head>
<body>
	<section class="app">
		<?php include 'inc/header.php' ?>
		<div class="app_search">
			<div class="pc">
				<div class="grid wide">
					<div class="row">
						<div class="col l-3">
							<form action="" method="post">
								<div class="tim-kiem-nang-cao">
									<div class="boloc-top">
										<i class="icon-boloc ti-menu-alt"></i>
										<span>BỘ LỌC TÌM KIẾM</span>
									</div>
									<div class="khoanggia">
										<h4 class="h4">Theo khoảng giá</h4>
										<div style="display: flex;align-items: center;justify-content: space-around;">
											<input type="range" name="range" min="100000" max="10000000" step="1000"
											oninput="document.getElementById('max').innerHTML=this.value;">
											<span id="max" style="font-family: var(--font-family-sans-serif);"></span>
										</div>
									</div>
									<div class="dmuc">
										<h4 class="h4">Theo danh mục</h4>
										<ul class="danhmuc">
										<?php 
											$show = $category->showCategory();
											if ($show) {
												while ($result = $show->fetch_assoc()) {
											
										?>
											<li>
												<input type="checkbox" id="category" name="category">
 												<label for="category" ><?php echo $result['catName'] ?></label><br>
											</li>
										<?php
												}
											}
										?>
										</ul>
									</div>
									<div class="t_hieu">
										<h4 class="h4">Thương Hiệu</h4>
										<ul class="thuonghieu">
										<?php 
											$show = $brand->showBrand();
											if ($show) {
												while ($result = $show->fetch_assoc()) {
											
										?>
											<li>
												<input type="checkbox" id="brand" name="brand">
 												<label for="brand" ><?php echo $result['brandName'] ?></label><br>
											</li>
										<?php
												}
											}
										?>
										</ul>
									</div>
									<div style="width: 100%; text-align: center;">
										<input class="tim-kiem-nang-cao-input" type="submit" name="submit" value="Tìm kiếm" />
									</div>	
								</div>
							</form>
						</div>
						<div class="col l-9">
							<div class="home-filter">
								<span class="ti-light-bulb"></span>
								<span>Kết quả tìm kiếm cho từ khoá  "<?php echo $_GET['search'] ?>"</span>
							</div>
							
							<div class="home-filter">
								<span class="home-filter__label">Sắp xếp theo</span>
								<button class="home-filter-btn  btn first-active " onclick="changeProductList('trend',this)">Phổ biến</button>
								<button class="home-filter-btn  btn  btn--primary" onclick="changeProductList('new',this)">Mới nhất</button>
								<button class="home-filter-btn  btn " onclick="changeProductList('selling',this)">Bán chạy</button>
								<form action="" method="POST">
									<select class="select-input" name="select">
										<option>Lựa chọn theo giá</option>
										<option value="value 1">Giá từ thấp đến cao</option>
										<option value="value 2">Giá từ cao đến thấp</option>
									</select>
								</form>
								<div class="home-filter__page">
									<span class="home-filter__page-num">
										<span class="home-filter__page-current">1</span>/14
									</span>
									<div class="home-filter__page-control">
										<a href="" class="home-filter__page-btn home-filter__page-btn--disabled">
											<i class="home-filter__page-icon ti-angle-left"></i>
										</a>
										<a href="" class=" home-filter__page-btn">
											<i class="home-filter__page-icon ti-angle-right"></i>
										</a>
									</div>
								</div>
							</div>
							<!-- Phổ biến -->
							<div id="trend" class="home-suggestion">
								<div class="row">
									<?php
										if($search){
										while ($row = $search->fetch_assoc()) {
										
									?>
									<div class="col l-4">
										<div class="home-product-item">
											<img src="./admin/upload/<?php echo $row['image'] ?>" alt="" class="home-product-item_img">
											<span class="home-product-item_name"><?php echo $row['productName'] ?></span>
											<div class="home-product-item_price">
												<span class="home-product-item_price"><?php echo $row['price'] ?></span>
											</div>
										</div>
									</div>
									<?php 
											}
										}
									?>
								
								</div>		
								<div class="home-foward">
									<span class="ti-angle-left"></span>
									<span class="foward-btn">
										<a href="" >1</a>
									</span>
									<span>
										<a href="">2</a>
									</span>
									<span>
										<a href="">3</a>
									</span>
									<span>
										<a href="">4</a>
									</span>
									<span>
										<a href="">5</a>
									</span>
									<span>
										<a href="">...</a>
									</span>
									<span class="ti-angle-right"></span>
								</div>
							</div>
							<!-- Mới nhất -->
							<div id="new" class="home-suggestion">
								<div class="row">
									<div class="col l-4">
										<div class="home-product-item">
											<img src="./assets/img/new/hinh1.jfif" alt="" class="home-product-item_img">
											<span class="home-product-item_name">F.C. Barcelona Men's Full-Zip Football Jacket</span>
											<div class="home-product-item_price">
												<span class="home-product-item_price-old">2.499.000đ</span>
												<span class="home-product-item_price-current">1.499.000đ</span>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- Bán chạy -->
							<div id="selling" class="home-suggestion">
								<div class="row">
									<div class="col l-4">
										<div class="home-product-item">
											<img src="./assets/img/selling/hinh1.jfif" alt="" class="home-product-item_img">
											<span class="home-product-item_name">Nike Dri-FIT Strike Men's Short-Sleeve Football Top</span>
											<div class="home-product-item_price">
												<span class="home-product-item_price-old">1.399.000đ</span>
												<span class="home-product-item_price-current">827.000đ</span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>	
				</div>
			</div>
		</div>
		<?php include './inc/footer.php' ?>
	</section>
</body>
</html>