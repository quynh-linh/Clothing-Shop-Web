<?php include './inc/handle.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sản phẩm</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">
    <link rel="stylesheet" type="text/css" href="assets/css/listProduct.css">
    <link rel="stylesheet" type="text/css" href="assets/css/grid.css">
    <link rel="stylesheet" href="assets/font/themify-icons/themify-icons.css">
    <link rel="shortcut icon" href="assets/img/favicon_created_by_logaster.ico" type="image/x-icon">
</head>

<body>
    <section class="app">
        <?php include 'inc/header.php' ?>
        <?php
        if (isset($_GET['idBrand'])) {
            $getProduct = $product->getproductbyBrandId($_GET['idBrand']);
        }
        // if (isset($_GET['idType'])) {
        //     $getProduct = $product->getproductbyTypeProductId($_GET['idType']);
        // }
        ?>
        <div class="app_search">
            <div class="pc">
                <div class="grid wide" style="max-width: 1300px ;">
                    <div class="row">
                        <div class="col l-12">
                            <div class="home-filter">
                                <div class="home-filter__page">
                                    <div class="sm-gutter app__header">
                                        <span class="title-direct"><a href="index.php">Trang chủ/</a></span>
                                        <span class="title-page"></span>

                                    </div>
                                </div>
                            </div>
                            <!-- Phổ biến -->
                            <div class="home-suggestion">
                                <div class="row">
                                    <?php
                                    if ($getProduct) {
                                        while ($showName = $getProduct->fetch_assoc()) {
                                    ?>
                                            <div class="col l-3">
                                                <a style="text-decoration: none;shape-rendering: #333;color: #333;" href="chitietsanpham.php?productId=<?php echo $showName['productId'] ?>">
                                                    <div class="home-product-item">
                                                        <img src="./admin/upload/<?php echo $showName['image'] ?>" alt="" class="home-product-item_img">
                                                        <span class="home-product-item_name"><?php echo $showName['productName'] ?></span>
                                                        <div class="home-product-item_price">
                                                            <span class="home-product-item_price"><?php echo number_format($showName['price'], 0, ',', '.') . "" . "đ"?></span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                    <?php
                                        }
                                    } else {
                                        echo "<div>Không có sản phẩm</div>";
                                    }
                                    ?>
                                </div>
                                <div class="home-foward">
                                    <span class="ti-angle-left"></span>
                                    <span class="foward-btn">
                                        <a href="">1</a>
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include './inc/footer.php' ?>
    </section>
</body>

</html>