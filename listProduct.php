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
        if (isset($_GET['type'])) {
            $type = $_GET['type'];
        }
        if (isset($_GET['idBrand'])) {
            $getProduct = $product->getproductbyBrandId($_GET['idBrand'],$type);
        }
        if (isset($_GET['idType'])) {
            $getProduct = $product->getproductbyTypeProductId($_GET['idType'],$type);
        }

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
                                        while ($result = $getProduct->fetch_assoc()) {
                                    ?>
                                            <div class="col l-3">
                                                <a style="text-decoration: none;shape-rendering: #333;color: #333;" href="chitietsanpham.php?productId=<?php echo $result['productId'] ?>&&brandId=<?php echo $result['brandId']?>&&type=<?php echo $result['type']?>">
                                                    <div class="home-product-item">
                                                        <img src="./admin/upload/<?php echo $result['image'] ?>" alt="" class="home-product-item_img">
                                                        <span class="home-product-item_name"><?php echo $result['productName'] ?></span>
                                                        <div class="home-product-item_price">
                                                            <span class="home-product-item_price"><?php echo number_format($result['price'], 0, ',', '.') . "" . "đ"?></span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                    <?php
                                        }
                                    } else {
                                        ?>
                                        <div style="margin:20px auto;">Không có sản phẩm</div>
                                    <?php
                                    }
                                    ?>
                                </div>
                                <div class="home-foward">
                                   <?php
                                            if(isset($_GET['idBrand']) && $getProduct) {   
                                                $number_page = $product->getproductbyBrandId_number_page($_GET['idBrand'],$type,);
                                                $current_page = !empty($_GET['trang'])?$_GET['trang']:1;                    
                                                $product_count = mysqli_num_rows($number_page);
                                                $product_button = ceil($product_count/6);   
                                                if($product_count>8){
                                                    if($current_page > 1){
                                                        $prev_page = $current_page - 1;
                                                        ?>                                      
                                                             <a href="?trang=<?=$prev_page?>&idBrand=<?=$_GET['idBrand']?>&type=<?=$type?>">
                                                                <span class="ti-angle-left"></span>
                                                            </a>    
                                                        <?php
                                                    }                           
                                                    for($num = 1; $num <= $product_button;$num++){

                                                        if( $num != $current_page){
                                                            if($num > $current_page - 2 && $num < $current_page + 2){

                                                                
                                                        ?>
                                                         <span style="margin: 0 15px ;" class="foward-btn">
                                                            <a href="?trang=<?=$num?>&idBrand=<?=$_GET['idBrand']?>&type=<?=$type?>"><?=$num ?></a>             
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
                                                            <a href="?trang=<?=$next_page?>&idBrand=<?=$_GET['idBrand']?>&type=<?=$type?>">
                                                                <span class="ti-angle-right"></span>
                                                            </a>                                                                                        
                                                <?php
                                                    }                                   
                                            }
                                        }else echo "";
                                        ?>


                                        <?php
                                        if(isset($_GET['idType']) && $getProduct) {
                                                
                                                $number_page = $product->getproductbyTypeProductId_number_page($_GET['idType'],$type);
                                                $current_page = !empty($_GET['trang'])?$_GET['trang']:1;                    
                                                $product_count = mysqli_num_rows($number_page);
                                                $product_button = ceil($product_count/6);   
                                                if($product_count>8){
                                                    if($current_page > 1){
                                                        $prev_page = $current_page - 1;
                                                        ?>                                      
                                                             <a href="?trang=<?=$prev_page?>&idType=<?=$_GET['idType']?>&type=<?=$type?>">
                                                                <span class="ti-angle-left"></span>
                                                            </a>    
                                                        <?php
                                                    }                           
                                                    for($num = 1; $num <= $product_button;$num++){

                                                        if( $num != $current_page){
                                                            if($num > $current_page - 2 && $num < $current_page + 2){

                                                                
                                                        ?>
                                                         <span style="margin: 0 15px ;" class="foward-btn">
                                                            <a href="?trang=<?=$num?>&idType=<?=$_GET['idType']?>&type=<?=$type?>"><?=$num ?></a>             
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
                                                            <a href="?trang=<?=$next_page?>&idType=<?=$_GET['idType']?>&type=<?=$type?>">
                                                                <span class="ti-angle-right"></span>
                                                            </a>                                                                                        
                                                <?php
                                                    }                                   
                                            }
                                        }else echo "";
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
</body>

</html>