<?php include './inc/handle.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>MLL SHOP</title>
	<link rel="stylesheet" href="assets/font/themify-icons/themify-icons.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
	<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/lightslider/1.1.5/css/lightslider.min.css'>
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
	<link rel="stylesheet" href="assets/css/main.css">
	<link rel="stylesheet" href="assets/css/grid.css">
	<link rel="stylesheet" href="assets/css/base.css">
	<link rel="stylesheet" href="assets/css/slider.css">
	<link rel="stylesheet" href="assets/css/newtodays.css">
	<link rel="stylesheet" href="assets/css/banners.css">

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

						<div class="fnc-slide m--blend-green m--active-slide">
							<div class="fnc-slide__inner">
								<div class="fnc-slide__mask">
									<div class="fnc-slide__mask-inner"></div>
								</div>
								<div class="fnc-slide__content">
									<h2 class="fnc-slide__heading">
										<div class="fnc-slide__heading-line">
											<span>BECCA</span>
										</div>
										<div class="fnc-slide__heading-line">
											<span>HILLER</span>
										</div>
									</h2>
									<button type="button" class="fnc-slide__action-btn">
										Shop now
										<span data-text="Shop now">Shop now</span>
									</button>
								</div>
							</div>
						</div>


						<div class="fnc-slide m--blend-dark">
							<div class="fnc-slide__inner">
								<div class="fnc-slide__mask">
									<div class="fnc-slide__mask-inner"></div>
								</div>
								<div class="fnc-slide__content">
									<h2 class="fnc-slide__heading">
										<div class="fnc-slide__heading-line">
											<span>UNIQUE &</span>
										</div>
										<div class="fnc-slide__heading-line">
											<span>TALENT</span>
										</div>
									</h2>
									<button type="button" class="fnc-slide__action-btn">
										Shop now
										<span data-text="Shop now">Shop now</span>
									</button>
								</div>
							</div>
						</div>

						<div class="fnc-slide m--blend-red">
							<div class="fnc-slide__inner">
								<div class="fnc-slide__mask">
									<div class="fnc-slide__mask-inner"></div>
								</div>
								<div class="fnc-slide__content">
									<h2 class="fnc-slide__heading">
										<div class="fnc-slide__heading-line">
											<span>BEAUTIFUL & </span>
										</div>
										<div class="fnc-slide__heading-line">
											<span>STYLE</span>
										</div>
									</h2>
									<button type="button" class="fnc-slide__action-btn">
										Shop now
										<span data-text="Shop now">Shop now</span>
									</button>
								</div>
							</div>
						</div>

						<div class="fnc-slide m--blend-blue">
							<div class="fnc-slide__inner">
								<div class="fnc-slide__mask">
									<div class="fnc-slide__mask-inner"></div>
								</div>
								<div class="fnc-slide__content">
									<h2 class="fnc-slide__heading">
										<div class="fnc-slide__heading-line">
											<span>INDIVIDUAL &</span>
										</div>
										<div class="fnc-slide__heading-line">
											<span>ONLY</span>
										</div>
									</h2>
									<button type="button" class="fnc-slide__action-btn">
										Shop now
										<span data-text="Shop now">Shop now</span>
									</button>
								</div>
							</div>
						</div>

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
								Slide 1
								<span class="fnc-nav__control-progress"></span>
							</button>
							<button class="fnc-nav__control">
								Slide 2
								<span class="fnc-nav__control-progress"></span>
							</button>
							<button class="fnc-nav__control">
								Slide 3
								<span class="fnc-nav__control-progress"></span>
							</button>
							<button class="fnc-nav__control">
								Slide 4
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
									<button class="arrow_left">
										<i class="class-ti ti-angle-left"></i> </button>
									<?php
									while ($result = $getProduct_Women->fetch_assoc()) {
									?>
										<div class="col l-3 ">
											<a href="chitietsanpham.php?productId=<?php echo $result['productId'] ?>&&brandId=<?php echo $result['brandId'] ?>&&type=<?php echo $result['type'] ?>">
												<div class="home-product-item">
													<div class="ovelay-img">
														<img src="./admin/upload/<?php echo $result['image'] ?>" alt="" class="home-product-item_img">
														<div class="overlay">
															<!--buy-btn------>
															<a href="chitietsanpham.php?productId=<?php echo $result['productId'] ?>&&brandId=<?php echo $result['brandId'] ?>&&type=<?php echo $result['type'] ?>" class="buy-btn">Buy Now</a>
														</div>
													</div>
													<h4 class="home-product-item_name"><?php echo $result['productName'] ?></h4>
													<div class="home-product-item_price">
														<span class="home-product-item_price-current"><?php echo number_format($result['price'], 0, ',', '.') . "" . "đ" ?></span>
													</div>
														<span style="margin-left:200px;font-family: var(--font-family-sans-serif);font-weight: 600;">Đã bán: <?=$result['quantitysales']?></span>
												</div>
											</a>
										</div>
									<?php
									}
									?>
									<button class="arrow_right"><i class="class-ti ti-angle-right"></i></button>
								<?php
								}
								?>
							</div>
						</div>
						<div id="men" class="row">

							<div class="app_suggestion ">
								<?php
								$getProduct_Men = $product->getProduct_Men();
								if ($getProduct_Men) {
								?>
									<button class="arrow_left">
										<i class="class-ti ti-angle-left"></i> </button>
									<?php
									while ($result = $getProduct_Men->fetch_assoc()) {
									?>
										<div class="col l-3 ">
											<a href="chitietsanpham.php?productId=<?php echo $result['productId'] ?>&&brandId=<?php echo $result['brandId'] ?>&&type=<?php echo $result['type'] ?>">
												<div class="home-product-item">
													<div class="ovelay-img">
														<img src="./admin/upload/<?php echo $result['image'] ?>" alt="" class="home-product-item_img">
														<div class="overlay">
															<!--buy-btn------>
															<a href="chitietsanpham.php?productId=<?php echo $result['productId'] ?>&&brandId=<?php echo $result['brandId'] ?>&&type=<?php echo $result['type'] ?>" class="buy-btn">Buy Now</a>
														</div>
													</div>
													<h4 class="home-product-item_name"><?php echo $result['productName'] ?></h4>
													<div class="home-product-item_price">
														<span class="home-product-item_price-current"><?php echo number_format($result['price'], 0, ',', '.') . "" . "đ" ?></span>
													</div>
														<span style="margin-left:200px;font-family: var(--font-family-sans-serif);font-weight: 600;">Đã bán: <?=$result['quantitysales']?></span>
												</div>
											</a>
										</div>
									<?php
									}
									?>
									<button class="arrow_right"><i class="class-ti ti-angle-right"></i></button>
								<?php
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
										<i class="class-ti ti-angle-left"></i> </button>
									<?php
									while ($result = $getProduct_Kid->fetch_assoc()) {
									?>
										<div class="col l-3 ">
											<a href="chitietsanpham.php?productId=<?php echo $result['productId'] ?>&&brandId=<?php echo $result['brandId'] ?>&&type=<?php echo $result['type'] ?>">
												<div class="home-product-item">
													<div class="ovelay-img">
														<img src="./admin/upload/<?php echo $result['image'] ?>" alt="" class="home-product-item_img">
														<div class="overlay">
															<!--buy-btn------>
															<a href="chitietsanpham.php?productId=<?php echo $result['productId'] ?>&&brandId=<?php echo $result['brandId'] ?>&&type=<?php echo $result['type'] ?>" class="buy-btn">Buy Now</a>
														</div>
													</div>
													<h4 class="home-product-item_name"><?php echo $result['productName'] ?></h4>
													<div class="home-product-item_price">
														<span class="home-product-item_price-current"><?php echo number_format($result['price'], 0, ',', '.') . "" . "đ" ?></span>
													</div>
														<span style="margin-left:200px;font-family: var(--font-family-sans-serif);font-weight: 600;">Đã bán: <?=$result['quantitysales']?></span>
												</div>
											</a>
										</div>
									<?php
									}
									?>
									<button class="arrow_right"><i class="class-ti ti-angle-right"></i></button>
								<?php
								}
								?>
							</div>
						</div>
					</div>
				</div>
				<div class="grid wide">
					<div class="ds-layout">
						<h2 class="section-font">
							<span class="small-up-caps">Model</span>
							<span class="light-shadow">Outstanding</span>
						</h2>
						<div class="row">
							<div class="ds-flex-container">
								<div class="ds-flex-item-image col l-5">
									<img id="ds-flex-img-1" src="./assets/img/bl3.jpg" alt="fashion model">

									<div class="ds-flex-item-text">
										<span class="small-up-caps">BECCA HILLER</span>
										<h3 class="medium-style">Becca Hiller là một người mẫu nữ được đại diện bởi MGM Models</h3>
									</div>
								</div>

								<div class="ds-flex-item-image col l-7">
									<img id="ds-flex-img-2" src="./assets/img/1118full-becca-hiller.jpg">
								</div>
							</div>
						</div>

						<!-- ds-flex-container -->
					</div>
				</div>

			</div>

			<div class="grid wide">
				<h2 class="app_view-shop_tile">NEWS TODAY</h2>
				<div class="app_view-shop">
					<div class="row">
						<div class="example-2 col l-4">
							<div class="wrapper">
								<div class="header">
									<div class="date">
										<span class="day">22</span>
										<span class="month">May</span>
										<span class="year">2022</span>
									</div>
									<ul class="menu-content">
										<li>
											<a href="#" class="fa fa-bookmark-o"></a>
										</li>
										<li><a href="#" class="ti-heart"><span>18k</span></a></li>
										<li><a href="#" class="ti-comments"><span>20k</span></a></li>
									</ul>
								</div>
								<div class="data">
									<div class="content">
										<span class="author">Jane Doe</span>
										<h1 class="title"><a href="#">Stranger Things: The sound of the Upside Down</a></h1>
										<p class="text">The antsy bingers of Netflix will eagerly anticipate the digital release of the Survive soundtrack, out today.</p>
										<a href="#" class="button">Read more</a>
									</div>
								</div>
							</div>
						</div>
						<div class="example-2 col l-4">
							<div class="wrapper1">
								<div class="header">
									<div class="date">
										<span class="day">23</span>
										<span class="month">May</span>
										<span class="year">2022</span>
									</div>
									<ul class="menu-content">
										<li>
											<a href="#" class="fa fa-bookmark-o"></a>
										</li>
										<li><a href="#" class="ti-heart"><span>1,8k</span></a></li>
										<li><a href="#" class="ti-comments"><span>3k</span></a></li>
									</ul>
								</div>
								<div class="data">
									<div class="content">
										<span class="author">Jane Doe</span>
										<h1 class="title"><a href="#">Stranger Things: The sound of the Upside Down</a></h1>
										<p class="text">The antsy bingers of Netflix will eagerly anticipate the digital release of the Survive soundtrack, out today.</p>
										<a href="#" class="button">Read more</a>
									</div>
								</div>
							</div>
						</div>
						<div class="example-2 col l-4">
							<div class="wrapper2">
								<div class="header">
									<div class="date">
										<span class="day">24</span>
										<span class="month">May</span>
										<span class="year">2022</span>
									</div>
									<ul class="menu-content">
										<li>
											<a href="#" class="fa fa-bookmark-o"></a>
										</li>
										<li><a href="#" class="ti-heart"><span>25k</span></a></li>
										<li><a href="#" class="ti-comments"><span>3,5k</span></a></li>
									</ul>
								</div>
								<div class="data">
									<div class="content">
										<span class="author">Jane Doe</span>
										<h1 class="title"><a href="#">Stranger Things: The sound of the Upside Down</a></h1>
										<p class="text">The antsy bingers of Netflix will eagerly anticipate the digital release of the Survive soundtrack, out today.</p>
										<a href="#" class="button">Read more</a>
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
	<button onclick="topFunction()" id="backToTop" title="Go to top" style="display: block;"><i class="ti-angle-up" style="font-size: 25px;"></i>
	</button>
	<script src="./assets/js/product.js"></script>
	<script src="./assets/js/slideshow.js"></script>
	<script type="text/javascript" src="./assets/js/script.js"></script>

</body>

</html>