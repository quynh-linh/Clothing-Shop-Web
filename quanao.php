<?php include './inc/handle.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Quần áo</title>
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
	<link rel="stylesheet" type="text/css" href="assets/css/quanao.css">
	<link rel="stylesheet" type="text/css" href="assets/css/main.css">
	<link rel="stylesheet" type="text/css" href="assets/css/grid.css">
	<link rel="stylesheet" href="assets/font/themify-icons/themify-icons.css">
	<link rel="shortcut icon" href="assets/img/favicon_created_by_logaster.ico" type="image/x-icon">
	
</head>

<body>
	<section class="app">
		<?php include 'inc/header.php' ?>
		<div class="app_search">
			<div class="pc">
				<div class="grid wide">
					<div class="row">
						<div class="col l-3">
							<div class="tim-kiem-nang-cao">
								<div class="boloc-top">
									<span>Quần Áo Thể Thao</span>
								</div>
					
								<div class="tag-list">
									<ul>
                                        <li>Áo hoodie & Áo nỉ</li>
                                        <li>Áo khoác & Gilets</li>
                                        <li>Quần dài và quần bó</li>
                                        <li>Bộ đồ thể thao</li>
                                        <li>Vớ</li>
                                    </ul>				
								</div>
								<hr>
								<div class="dmuc">
									<h4 class="h4">Giới tính</h4>
								<ul class="danhmuc">
									<li>
										<i class="icon-danhmuc far fa-square"></i>
										<a href="">Nam</a>
									</li>
									<li>
										<i class="icon-danhmuc far fa-square"></i>
										<a href="">Nữ</a>
									</li>
									<li>
										<i class="icon-danhmuc far fa-square"></i>
										<a href="">	Unisex</a>
									</li>
								</ul>
								</div>
								<hr>					
								<div class="t_hieu">
									<h4 class="h4">Thương Hiệu</h4>
								<ul class="thuonghieu">
									<li>
										<i class="icon-danhmuc far fa-square"></i>
										<a href="">Adidas</a>
									</li>
									<li>
										<i class="icon-danhmuc far fa-square"></i>
										<a href="">Nike </a>
									</li>
									<li>
										<i class="icon-danhmuc far fa-square"></i>
										<a href="">Bitis</a>
									</li>
									<li>
										<i class="icon-danhmuc far fa-square"></i>
										<a href="">Puma </a>
									</li>
									<li>
										<i class="icon-danhmuc far fa-square"></i>
										<a href="">Li- ning</a>
									</li>
									<li>
										<i class="icon-danhmuc far fa-square"></i>
										<a href="">Uniqlo </a>
									</li>
									<li>
										<i class="icon-danhmuc far fa-square"></i>
										<a href="">Fila </a>
									</li>
									<li>
										<i class="icon-danhmuc far fa-square"></i>
										<a href="">Kappa </a>
									</li>
									<li>
										<i class="icon-danhmuc far fa-square"></i>
										<a href="">Champion </a>
									</li>
									<li>
										<i class="icon-danhmuc far fa-square"></i>
										<a href="">Wika </a>
									</li>
									<li>
										<i class="icon-danhmuc far fa-square"></i>
										<a href="">Under Armour</a>
									</li>
								</ul>
								</div>
								<hr>
					
								<div class="khoanggia">
                                    <h4 class="h4">Chiều dài tay áo</h4>
                                    <ul class="danhmuc">
                                        <li>
                                            <i class="icon-danhmuc far fa-square"></i>
                                            <a href="">Tay ngắn</a>
                                        </li>
                                        <li>
                                            <i class="icon-danhmuc far fa-square"></i>
                                            <a href="">Áo dài tay</a>
                                        </li>
                                        <li>
                                            <i class="icon-danhmuc far fa-square"></i>
                                            <a href="">	Không tay /Bể</a>
                                        </li>
                                    </ul>
								</div>			
								<hr>
								<div class="t_hieu">
									<h4 class="h4">Màu sắc</h4>
								    <div class="t_hieu-color">
                                        <button class="t_hieu-color-1">Mau</button>
                                        <button class="t_hieu-color-2">Mau</button>
                                        <button class="t_hieu-color-3">Mau</button>
                                        <button class="t_hieu-color-4">Mau</button>
                                    </div>
								</div>
							</div>
						</div>
						<div class="col l-9">
							<div class="row" id="sanpham">	
								<div class="col l-4" >
									<div class="home-product-item">
										<a href="">
											<img src="./assets/img/trend/hinh1.jfif" alt="" class="home-product-item_img">
										</a>
										<span class="home-product-item_name">Paris Saint-Germain Men's Fleece Trousers</span>
										<div class="home-product-item_price">
											<span class="home-product-item_price-old">999.000đ</span>
											<span class="home-product-item_price-current">538.000đ</span>
										</div>
									</div>
								</div>
							</div>		
							<div class="home-foward">
								<ul class="home-ul">
									<li class="ti-angle-left"></li>
									<div class="number-page" id="number-page">
											<li class="foward-btn">
												<a href="" >1</a>
											</li>
											<li>
												<a href="">2</a>
											</li>
											<li>
												<a href="">3</a>
											</li>
											<li>
												<a href="">4</a>
											</li>
											<li>
												<a href="">5</a>
											</li>
											<li>
												<a href="">...</a>
											</li>
									</div>
									<li class="ti-angle-right" onclick=""></li>
								</ul>
								
							</div>
						</div>
					</div>	
				</div>
			</div>
		</div>
		// Phần footer
		<?php include './inc/footer.php'?>
	</section>
<script src="./assets/js/data.js"></script>
</body>
</html>