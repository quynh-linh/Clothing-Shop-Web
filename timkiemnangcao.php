<?php include './inc/handle.php' ?>
<?php
if (isset($_GET['search']))
	$search = $_GET['search'];
else
	$search = "";

//$search = $product->searchProduct($search);
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
	$showSearch = $product->searchProductRangePrice($_POST);
}
$str_cate="";
$str_br="";
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Tìm kiếm nâng cao</title>
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
	<link rel="stylesheet" type="text/css" href="assets/css/main.css">
	<link rel="stylesheet" type="text/css" href="assets/css/timkiemnangcao.css">
	<link rel="stylesheet" type="text/css" href="assets/css/grid.css">
	<link rel="stylesheet" href="assets/font/themify-icons/themify-icons.css">
	<link rel="shortcut icon" href="assets/img/favicon_created_by_logaster.ico" type="image/x-icon">
	<script src="./assets/js/product.js"></script>

</head>
<?php

	if (isset($_GET['price'])) {
	 	$_SESSION['pr']=$_GET['price'];
	}else {
		$_GET['price']=0;
		$_SESSION['pr']=0;	
	}
?>
<body>
	<section class="app">
		<?php include 'inc/header.php' ?>
		<div class="app_search">
			<div class="pc">
				<div class="grid wide">
					<div class="row">
						<div class="col l-3">
							<form action="" method="GET">
								<div id=""  class="tim-kiem-nang-cao">
									<div class="boloc-top">
										<i class="icon-boloc ti-menu-alt"></i>
										<span>BỘ LỌC TÌM KIẾM</span>
									</div>
									<div class="khoanggia">
										<h4 class="h4">Theo khoảng giá</h4>
										<div style="display: flex;align-items: center;justify-content: space-around;">										
											<input id="slider_pr" type="range" name="price" min="0" max="30000000" value="0" >
											<span id="max" style="font-family: var(--font-family-sans-serif);"></span>
											đ
										</div>
									</div>
									<!--  -->
									<div class="dmuc">
										<h4 class="h4">Theo danh mục</h4>
										<ul class="danhmuc">
											<?php
											$show_category = $product->show_nameCategory();
											if ($show_category) {
												while ($result = $show_category->fetch_assoc()) {

													if (isset($_GET['category']) && is_string($_GET['category'])) {
														$a=explode(',', $_GET['category']);
													}elseif(isset($_GET['category']) && is_array($_GET['category'])){
														$checked=$_GET['category'];
													}
											?>
												<li>
													<input type="checkbox" id="category" name="category[]" value="<?= $result['catId'];?>"
														<?php 
														if (isset($_GET['category']) && is_string($_GET['category'])){
															if (in_array($result['catId'], $a)) {
																echo "checked";
															}
														}elseif(isset($_GET['category']) && is_array($_GET['category'])){
															if (in_array($result['catId'], $checked)) {
																echo "checked";
															}
														}
													
													?>>
													<label><?php echo $result['catName'] ?></label><br>
												</li>
											<?php
												}
											} else {
												echo "no category found";
											}
											?>
										</ul>
									</div>
									<div class="t_hieu">
										<h4 class="h4">Thương Hiệu</h4>
										<ul class="thuonghieu">
										<?php										
											$show_brand = $product->show_nameBrand();
											if ($show_brand) {
												while ($result = $show_brand->fetch_assoc()) {
													if (isset($_GET['brand']) && is_string($_GET['brand'])) {
														$a=explode(',', $_GET['brand']);
													}elseif(isset($_GET['brand']) && is_array($_GET['brand'])){
														$checked=$_GET['brand'];
													}
											?>
												<li>
													<input type="checkbox" id="brand" name="brand[]" value="<?= $result['brandId'];?>"
														<?php

														if (isset($_GET['brand']) && is_string($_GET['brand'])){
															if (in_array($result['brandId'], $a)) {
																echo "checked";
															}
														}elseif(isset($_GET['brand']) && is_array($_GET['brand'])){
															if (in_array($result['brandId'], $checked)) {
																echo "checked";
															}
														}
													?>>
													<label><?php echo $result['brandName'] ?></label><br>
												</li>
											<?php
												}
											} else {
												echo "no brand found";
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
						<div id="searchResults" class="col l-9">
							<div class="home-filter">
								<span class="home-filter__label">Sắp xếp theo</span>
								<form action="" method="GET">
									<div class="sort_price" style="display: flex;">										
										<select class="select-input" name="select" onchange="location = this.value;">																			
											<option>Lựa chọn theo giá</option>											
												<option value="timkiemnangcao.php?select=low-high" <?php if(isset($_GET['select']) && $_GET['select'] == 'low-high'){echo "selected";} ?>>Giá từ thấp đến cao</option>																		
												<option value="timkiemnangcao.php?select=high-low" <?php if(isset($_GET['select']) && $_GET['select'] == 'high-low'){echo "selected";} ?>>Giá từ cao đến thấp</option>
										</select>
									</div>
								</form>
							</div>
							<!-- Phổ biến -->
							<div id="trend" class="home-suggestion">
									<!-- Tìm kiếm nâng cao -->						
								<div class="row">
									<?php	

										//Chuyển mảng thành chuỗi
										
										if(isset($_GET['category']) && is_string($_GET['category']) && $_GET['category']!=""){
											$category =explode(',',$_GET['category']) ;
											$str = "";
											$str_cate="";

											foreach($category as $cate){
												$str.=$cate.",";
											}

											$category = "(".$str."-1)";
											$str_cate=$str."-1";
										}elseif(isset($_GET['category']) && is_array($_GET['category']) && $_GET['category']!=""){
											$category =$_GET['category'] ;
											$str = "";
											$str_cate="";

											foreach($category as $cate){
												$str.=$cate.",";
											}

											$category = "(".$str."-1)";
											$str_cate=$str."-1";
											         
										}elseif(!isset($_GET['category']) || $_GET['category']==""){
											$category = '(-1)';
											$str_cate=""; 
										}
				

										if(isset($_GET['brand']) && is_string($_GET['brand']) && $_GET['brand']!=""){
											$brand = explode(',',$_GET['brand']) ;
											$str = "";
											$str_br="";

											foreach($brand as $br){
												$str.=$br.",";
											}

											$brand = "(".$str."-1)";
											$str_br=$str."-1";
										}elseif(isset($_GET['brand']) && is_array($_GET['brand']) && $_GET['brand']!=""){
											$brand =$_GET['brand'] ;
											$str = "";
											$str_br="";

											foreach($brand as $br){
												$str.=$br.",";
											}

											$brand = "(".$str."-1)";
											$str_br=$str."-1";             
										}elseif(!isset($_GET['brand']) || $_GET['brand']==""){
											$brand = '(-1)'; 
											$str_br=""; 
										}

										if(isset($_GET['price']) && $_GET['price']>0){
											$price = $_GET['price'];
										}else{											
											$price = -1;
										}													
											

												$product_ct = $product->search_Advanced($category,$brand,$price,$search);
												if ($product_ct && !isset($_GET['select'])) {
													
													$i=0;
													while ($result=$product_ct->fetch_assoc()){
														$i+=1;
														if($i>6) break;
													?>													
														<div class="col l-4">
															<a href="chitietsanpham.php?productId=<?php echo $result['productId'] ?>&&brandId=<?php echo $result['brandId']?>&&type=<?php echo $result['type']?>">
															<div class="home-product-item">
																<img src="./admin/upload/<?php echo $result['image'] ?>" alt="" class="home-product-item_img">
																<span class="home-product-item_name"><?php echo $result['productName'] ?></span>
																<div class="home-product-item_price">
																	<span class="home-product-item_price"><?php echo number_format($result['price'],0,',','.')." " ."đ" ?></span>
																</div>
															</div>
														</a>
														</div>														
												<?php													
													}
											} elseif(!$product_ct && !isset($_GET['select'])) {
										?>
													 <span style="margin:50px auto;font-size:20px;">No product found</span>
										<?php
													}
										?>
	<!--select sort-->										
								<?php
								$sort_option = "";
								if(isset($_GET['select'])){									
									if($_GET['select'] == "low-high"){
										$sort_option = "ASC";							
									} elseif($_GET['select'] == "high-low"){
										$sort_option = "DESC";
									}
									$product_spr = $product->display_product_sortprice($sort_option);
									if($product_spr){
										while($result = $product_spr->fetch_assoc()){
											?>
											<div class="col l-4">
												<a href="chitietsanpham.php?productId=<?php echo $result['productId'] ?>&&brandId=<?php echo $result['brandId']?>&&type=<?php echo $result['type']?>">
												<div class="home-product-item">
													<img src="./admin/upload/<?php echo $result['image'] ?>" alt="" class="home-product-item_img">
													<span class="home-product-item_name"><?php echo $result['productName'] ?></span>
													<div class="home-product-item_price">
														<span class="home-product-item_price"><?php  echo number_format($result['price'],0,',','.')." "."đ" ?></span>
													</div>
												</div>
											</a>
											</div>	
								<?php	
										}
									}else {
										// echo "No product found";
									}
								}else {
									echo "";
								}
								?>
								</div>								
							</div>

							<div class="home-foward">
		<!-- 	Phân trang tìm kiếm -->
											<?php
											if(isset($_GET['search']))
												$search=$_GET['search'];
											else
												$search = "";
											if(!isset($_GET['select']) && $product_ct) {
												
												$number_page = $product->number_page($category,$brand,$price,$search);
												$current_page = !empty($_GET['trang'])?$_GET['trang']:1;					
												$product_count = mysqli_num_rows($number_page);
												$product_button = ceil($product_count/6);	
												if($product_count>6){
													if($current_page > 1){
														$prev_page = $current_page - 1;
														?>										
															 <a href="?trang=<?=$prev_page?>&price=<?=$_GET['price']?>&category=<?=$str_cate?>&brand=<?=$str_br?>&search=<?php echo $search?>">
																<span class="ti-angle-left"></span>
															</a>	
														<?php
													}							
													for($num = 1; $num <= $product_button;$num++){

														if( $num != $current_page){
															if($num > $current_page - 2 && $num < $current_page + 2){

																
														?>
														 <span style="margin: 0 15px ;" class="foward-btn">
															<a href="?trang=<?=$num?>&price=<?=$_GET['price']?>&category=<?=$str_cate?>&brand=<?=$str_br?>&search=<?php echo $search?>"><?=$num ?></a>				
														</span>
														<?php
															}
														}else {
															?>
															<strong style="background-color: #adb7b9; padding:5px 30px; border-radius: 3px;"><?=$num?></strong> 
															<?php
														}
													}
													if($current_page < $product_button){
														$next_page = $current_page + 1;
														?>										
															<a href="?trang=<?=$next_page?>&price=<?=$_GET['price']?>&category=<?=$str_cate?>&brand=<?=$str_br?>&search=<?php echo $search?>">
																<span class="ti-angle-right"></span>
															</a>																						
												<?php
													}									
											}
										}else echo "";
												?>		
<!-- Phân trang lựa  -->
								<?php
										if(isset($_GET['select'])) {
										$chon = $_GET['select'];																	
										$item_per_page = !empty($_GET['per_page'])?$_GET['per_page']:6;
										$current_page = !empty($_GET['page'])?$_GET['page']:1;			
										$product_all = $product->get_all_product();
										$product_count = mysqli_num_rows($product_all);
										$product_button = ceil($product_count/6);
										if($product_button > 1){
										if($current_page > 1){
											$prev_page = $current_page - 1;
											?>										
												 <a href="?per_page=<?=$item_per_page?>&price=<?=$_GET['price']?>&page=<?=$prev_page?>&select=<?=$chon?>">
													<span class="ti-angle-left"></span>
												</a>	
											<?php
										}							
										for($num = 1; $num <= $product_button;$num++){
											if( $num != $current_page){
												if($num > $current_page - 2 && $num < $current_page + 2){
											?>
											 <span style="margin: 0 15px ;" class="foward-btn">
												<a href="?per_page=<?=$item_per_page?>&price=<?=$_GET['price']?>&page=<?=$num?>&select=<?=$chon?>"><?=$num ?></a>										
											</span>
											<?php
												}
											}else {
												?>
												<strong style="background-color: #adb7b9; padding:5px 30px; border-radius: 3px;"><?=$num?></strong> 
												<?php
											}
										}
										if($current_page < $product_button){
											$next_page = $current_page + 1;
											?>										
												<a href="?per_page=<?=$item_per_page?>&price=<?=$_GET['price']?>&page=<?=$next_page?>&select=<?=$chon?>">
													<span class="ti-angle-right"></span>
												</a>																						
											<?php
										}									
								}}else echo ""
									?>		
							</div>	

						</div>						
					</div>
				</div>
			</div>
		</div>
		</div>
		
		<?php include './inc/footer.php' ?>
	</section>
<script>
		 // thanh trượt giá
		    var slider = document.getElementById("slider_pr");
		    var output = document.getElementById("max");
		    output.innerHTML = slider.value;

		    slider.oninput = function() {
		        max.innerHTML = this.value;;			
		    };
		    function load_data() {
		    var input = document.getElementById("slider_pr");
		    <?php
		        if(isset($_SESSION['pr']) && $_SESSION['pr']) {
		    ?>
		        input.value = <?=$_SESSION['pr']?>;
		    <?php
		    } else {
		    ?>
		        input.value = 0;
		    <?php
		    }
		    ?>
		    document.getElementById("max").innerHTML = slider.value;	
		}
		load_data();
</script>
</body>
</html>