<?php include './inc/handle.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>MLL SHOP</title>
	<link rel="stylesheet" href="assets/font/themify-icons/themify-icons.css">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
	<link rel="stylesheet" href="assets/css/main.css">
	<link rel="stylesheet" href="assets/css/grid.css">
	<link rel="stylesheet" href="assets/css/base.css">
	<link rel="stylesheet" href="assets/css/slider.css">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;800;900&display=swap" rel="stylesheet">
	<link rel="shortcut icon" href="assets/img/favicon_created_by_logaster.ico" type="image/x-icon">

</head>

<body>
	<section class="app">
		<?php include 'inc/header.php' ?>
		<div class="app_body">
			<div class="grid">
				<div class="fnc-slider example-slider">
					<div class="fnc-slider__slides">
						<!-- slide start -->
						<div class="fnc-slide m--blend-green m--active-slide">
							<div class="fnc-slide__inner">
								<div class="fnc-slide__mask">
									<div class="fnc-slide__mask-inner"></div>
								</div>
								<div class="fnc-slide__content">
									<h2 class="fnc-slide__heading">
										<div class="fnc-slide__heading-line">
											<span>LOINEL</span>
										</div>
										<div class="fnc-slide__heading-line">
											<span>MESSI</span>
										</div>
									</h2>
									<button type="button" class="fnc-slide__action-btn">
										Shop now
										<span data-text="Credits">Shop now</span>
									</button>
								</div>
							</div>
						</div>
						<!-- slide end -->
						<!-- slide start -->
						<div class="fnc-slide m--blend-dark">
							<div class="fnc-slide__inner">
								<div class="fnc-slide__mask">
									<div class="fnc-slide__mask-inner"></div>
								</div>
								<div class="fnc-slide__content">
									<h2 class="fnc-slide__heading">
										<div class="fnc-slide__heading-line">
											<span>Cristiano</span>
										</div>
										<div class="fnc-slide__heading-line">
											<span>Ronaldo</span>
										</div>
									</h2>
									<button type="button" class="fnc-slide__action-btn">
										Shop now
										<span data-text="Credits">Shop now</span>
									</button>
								</div>
							</div>
						</div>
						<!-- slide end -->
						<!-- slide start -->
						<div class="fnc-slide m--blend-red">
							<div class="fnc-slide__inner">
								<div class="fnc-slide__mask">
									<div class="fnc-slide__mask-inner"></div>
								</div>
								<div class="fnc-slide__content">
									<h2 class="fnc-slide__heading">
										<div class="fnc-slide__heading-line">
											<span>Kylian </span>
										</div>
										<div class="fnc-slide__heading-line">
											<span>Mbappé</span>
										</div>
									</h2>
									<button type="button" class="fnc-slide__action-btn">
										Shop now
										<span data-text="Credits">Shop now</span>
									</button>
								</div>
							</div>
						</div>
						<!-- slide end -->
						<!-- slide start -->
						<div class="fnc-slide m--blend-blue">
							<div class="fnc-slide__inner">
								<div class="fnc-slide__mask">
									<div class="fnc-slide__mask-inner"></div>
								</div>
								<div class="fnc-slide__content">
									<h2 class="fnc-slide__heading">
										<div class="fnc-slide__heading-line">
											<span>Junior </span>
										</div>
										<div class="fnc-slide__heading-line">
											<span>Neymar</span>
										</div>
									</h2>
									<button type="button" class="fnc-slide__action-btn">
										Shop now
										<span data-text="Credits">Shop now</span>
									</button>
								</div>
							</div>
						</div>
						<!-- slide end -->
					</div>
					<nav class="fnc-nav">
						<div class="fnc-nav__bgs">
							<div class="fnc-nav__bg m--navbg-green m--active-nav-bg"></div>
							<div class="fnc-nav__bg m--navbg-dark"></div>
							<div class="fnc-nav__bg m--navbg-red"></div>
							<div class="fnc-nav__bg m--navbg-blue"></div>
						</div>
						<div class="fnc-nav__controls">
							<button class="fnc-nav__control">
								Lionel Messi
								<span class="fnc-nav__control-progress"></span>
							</button>
							<button class="fnc-nav__control">
								Cristiano Ronaldo
								<span class="fnc-nav__control-progress"></span>
							</button>
							<button class="fnc-nav__control">
								Kylian Mbappé
								<span class="fnc-nav__control-progress"></span>
							</button>
							<button class="fnc-nav__control">
								Junior Neymar
								<span class="fnc-nav__control-progress"></span>
							</button>
						</div>
					</nav>
				</div>
				<div class="grid wide ">
					<div class="best_seller">
						<div class="row">
							<h1>BEST SELLER</h1>
						</div>
						<div class="row">
							<ul>
								<li>
									<button class="best_Seller " onclick="changeBestSeller('women',this)">
										MLL Women
									</button>
								</li>
								<li>
									<button class="best_Seller" onclick="changeBestSeller('men',this)">
										MLL Men
									</button>
								</li>
								<li>
									<button class="best_Seller" onclick="changeBestSeller('kids',this)">
										MLL Kids
									</button>
								</li>
							</ul>
						</div>
						<div id="women" class="row">
							<div class="app_suggestion">
								<?php
								$getProduct_Women = $product->getProduct_Women();
								if ($getProduct_Women) {
								?>
									<button class="arrow_left">< </button>
											<button class="arrow_right">></button>
											<?php
											while ($result = $getProduct_Women->fetch_assoc()) {
											?>
												<div class="col l-2-4 ">
													<a href="chitietsanpham.php?productId=<?php echo $result['productId'] ?>&&brandId=<?php echo $result['brandId']?>&&type=<?php echo $result['type']?>">
														<div class="home-product-item">
															<img src="./admin/upload/<?php echo $result['image'] ?>" alt="" class="home-product-item_img">
															<h4 class="home-product-item_name"><?php echo $result['productName'] ?></h4>
															<div class="home-product-item_price">
																<span class="home-product-item_price-current"><?php echo number_format($result['price'], 0, ',', '.') . "" . "đ" ?></span>
															</div>
														</div>
													</a>
												</div>
										<?php
											}
										}
										?>
							</div>
						</div>
						<div id="men" class="row">

							<div class="app_suggestion ">
								<?php
								$getProduct_Women = $product->getProduct_Men();
								if ($getProduct_Women) {
								?>
									<button class="arrow_left">
										< </button>
											<button class="arrow_right">></button>
											<?php

											while ($result = $getProduct_Women->fetch_assoc()) {
											?>
												<div class="col l-2-4 men_products">
													<a href="chitietsanpham.php?productId=<?php echo $result['productId'] ?>&brandId=<?php echo $result['brandId']?>&&type=<?php echo $result['type']?>">
														<div class="home-product-item men_product">
															<img src="./admin/upload/<?php echo $result['image'] ?>" alt="" class="home-product-item_img">
															<h4 class="home-product-item_name"><?php echo $result['productName'] ?></h4>
															<div class="home-product-item_price">
																<span class="home-product-item_price-current"><?php echo number_format($result['price'], 0, ',', '.') . "" . "đ" ?></span>
															</div>
														</div>
													</a>
												</div>
										<?php
											}
										}
										?>

							</div>
						</div>
						<div id="kids" class="row">
							<div class="app_suggestion">
								<?php
								$getProduct_Kid = $product->getProduct_Kid();
								if ($getProduct_Kid) {
								?>
									<button class="arrow_left">
										< </button>
											<button class="arrow_right">></button>
											<?php
											while ($result = $getProduct_Kid->fetch_assoc()) {
											?>
												<div class="col l-2-4 kid">
													<a href="chitietsanpham.php?productId=<?php echo $result['productId'] ?>&brandId=<?php echo $result['brandId']?>&&type=<?php echo $result['type']?>">
														<div class="home-product-item">
															<img src="./admin/upload/<?php echo $result['image'] ?>" alt="" class="home-product-item_img">
															<h4 class="home-product-item_name"><?php echo $result['productName'] ?></h4>
															<div class="home-product-item_price">
																<span class="home-product-item_price-current"><?php echo number_format($result['price'], 0, ',', '.') . "" . "đ" ?></span>
															</div>
														</div>
													</a>
												</div>
										<?php
											}
										}
										?>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="app_banner-web">
				<div class="banner-web">
					<div class="banner-web_list">
						<div class="banner-web_btn">
							<button>SHOP NOW</button>
						</div>
					</div>
				</div>
			</div>

			<div class="grid wide">
				<div class="row">
					<div class="col l-6">
						<img src="./assets/img/banner/banner7.jpg" style="object-fit: fill;width: 100%;border-radius: 50px 0 50px 0;" alt="">
					</div>
					<div class="col l-6">
						<img src="./assets/img/banner/banner8.jpg" style="object-fit: fill;width: 100%;border-radius: 50px 0 50px 0;" alt="">
					</div>
				</div>
				<div class="row">

				</div>
			</div>

			<div class="grid wide">
			</div>
			<div class="grid wide">
				<h2 class="app_view-shop_tile">NEWS TODAY</h2>
				<div class="app_view-shop">
					<div class="row">
						<div class="col l-4">
							<div class="view-shop">
								<div class="view-shop_img">
									<img src="./assets/img/NewToDay/M-17_LOW-RES Not for Production-17AW_RT_World-Champs_Bolt_Anatomical_RYW_3389_rgb.jpg" alt="">
								</div>
								<div class="view-shop_title">
									<h3>Makers of History, Makers of the Future</h3>
									<small>Kể từ năm 1948, những đổi mới do PUMA thực hiện đã trở thành tâm điểm của các vận động viên viết lịch sử thể thao.
										Những khoảnh khắc được đánh giá bằng cảm xúc, được hỗ trợ bởi khoa học</small>
								</div>
								<div class="view-shop_btn">
									<button>READ NOW</button>
								</div>
							</div>
						</div>
						<div class="col l-4">
							<div class="view-shop">
								<div class="view-shop_img">
									<img src="./assets/img/NewToDay/726f72377d3054223dab85155d39e3d4.webp" alt="">
								</div>
								<div class="view-shop_title">
									<h3>How Kobe Bryant Changed Sneakers</h3>
									<small>Hãy nhớ lại rằng, trước khi xuất hiện Black Mamba, Hệ thống Kobe,
										và dòng giày có chữ ký được đeo nhiều nhất tại NBA, Kobe Bryant đã được ký hợp đồng với Adidas. </small>
								</div>
								<div class="view-shop_btn">
									<button>READ NOW</button>
								</div>
							</div>
						</div>
						<div class="col l-4">
							<div class="view-shop">
								<div class="view-shop_img">
									<img src="./assets/img/NewToDay/rich-paul-new-balance-550-3.jpg" alt="">
								</div>
								<div class="view-shop_title">
									<h3>New Balance Reveals Klutch Sports Founder Rich Paul`s Collaborative 550 Sneaker and Apparel Range</h3>
									<small>Không lâu sau khi đôi giày bị rò rỉ trên mạng xã hội, New Balance đã tiết lộ thông tin phát hành cho bộ sưu tập hợp tác của mình với người sáng
										lập và đại diện Rich Paul nổi tiếng của Klutch Sports Group.</small>
								</div>
								<div class="view-shop_btn">
									<button>READ NOW</button>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
		<?php include './inc/footer.php' ?>
	</section>
	<button onclick="topFunction()" id="backToTop" title="Go to top" style="display: block;"><i class="ti-angle-up"></i>
	</button>
	<script src="./assets/js/product.js"></script>
	<script src="./assets/js/slideshow.js"></script>
</body>

</html>