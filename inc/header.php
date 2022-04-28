<header>
    <ul>
        <li>
        <div class="clearfix">
            <nav class="navigation">
                <ul class="nav">
                    <li class="nav-list">
                        <a href="lienhe.php">NAM</a>
                        <div class="header_menu-list-in-item">
                            <div class="header_menu-list">
                                <div class="row">   
                                    <div class="col c-5">
                                        <div class="header_menu-list-part">
                                            <h6>Thương hiệu</h6>
                                            <ul class="row header_menu-list-brand ">
                                                <?php
                                                    $brand = new brand();
                                                    $get_brand = $brand->show_brand();
                                                    if ($get_brand) {
                                                        while ($result = $get_brand->fetch_assoc()) {
                                                ?>
                                                <li class="col c-4">
                                                    <a href=""><?php echo $result['brandName'] ?></a>
                                                </li>
                                                    <?php
                                                        }
                                                    }
                                                ?>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col c-7">
                                        <div class="row header_menu-list-part">
                                            <ul>
                                                <li>
                                                    <h6>Áo</h6>
                                                    <ul class="row header_menu-list-brand ">                                              
                                                        <?php
                                                            $tpd = new typeProduct();
                                                            $get_tpd = $tpd->show_type_product_ao();
                                                            if ($get_tpd) {
                                                                while ($result = $get_tpd->fetch_assoc()) {
                                                        ?>
                                                        <li class="col c-12">
                                                            <a href=""><?php echo $result['typeProductName'] ?></a>
                                                        </li>
                                                            <?php
                                                                }
                                                            }
                                                        ?>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <h6>Áo khoác</h6>
                                                    <ul class="row header_menu-list-brand ">                                              
                                                        <?php
                                                            $tpd = new typeProduct();
                                                            $get_tpd = $tpd->show_type_product_aokhoac();
                                                            if ($get_tpd) {
                                                                while ($result = $get_tpd->fetch_assoc()) {
                                                        ?>
                                                        <li class="col c-12">
                                                            <a href=""><?php echo $result['typeProductName'] ?></a>
                                                        </li>
                                                            <?php
                                                                }
                                                            }
                                                        ?>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <h6>QUẦN & JUMPSUIT</h6>
                                                    <ul class="row header_menu-list-brand ">                                              
                                                        <?php
                                                            $tpd = new typeProduct();
                                                            $get_tpd = $tpd->show_type_product_quan();
                                                            if ($get_tpd) {
                                                                while ($result = $get_tpd->fetch_assoc()) {
                                                        ?>
                                                        <li class="col c-12">
                                                            <a href=""><?php echo $result['typeProductName'] ?></a>
                                                        </li>
                                                            <?php
                                                                }
                                                            }
                                                        ?>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <h6>CHÂN VÁY</h6>
                                                    <ul class="row header_menu-list-brand ">                                              
                                                        <?php
                                                            $tpd = new typeProduct();
                                                            $get_tpd = $tpd->show_type_product_chanvay();
                                                            if ($get_tpd) {
                                                                while ($result = $get_tpd->fetch_assoc()) {
                                                        ?>
                                                        <li class="col c-12">
                                                            <a href=""><?php echo $result['typeProductName'] ?></a>
                                                        </li>
                                                            <?php
                                                                }
                                                            }
                                                        ?>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <h6>ĐẦM</h6>
                                                    <ul class="row header_menu-list-brand ">                                              
                                                        <?php
                                                            $tpd = new typeProduct();
                                                            $get_tpd = $tpd->show_type_product_dam();
                                                            if ($get_tpd) {
                                                                while ($result = $get_tpd->fetch_assoc()) {
                                                        ?>
                                                        <li class="col c-12">
                                                            <a href=""><?php echo $result['typeProductName'] ?></a>
                                                        </li>
                                                            <?php
                                                                }
                                                            }
                                                        ?>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <h6>ĐỒ LÓT</h6>
                                                    <ul class="row header_menu-list-brand ">                                              
                                                        <?php
                                                            $tpd = new typeProduct();
                                                            $get_tpd = $tpd->show_type_product_DOLOT();
                                                            if ($get_tpd) {
                                                                while ($result = $get_tpd->fetch_assoc()) {
                                                        ?>
                                                        <li class="col c-12">
                                                            <a href=""><?php echo $result['typeProductName'] ?></a>
                                                        </li>
                                                            <?php
                                                                }
                                                            }
                                                        ?>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>   
                            </div>
                        </div>
                    </li>
                    <li class="nav-list">
                        <a href="gioithieu.php">NỮ</a>
                        <div class="header_menu-list-in-item">
                            <div class="header_menu-list">
                                <div class="row">   
                                    <div class="col c-5">
                                        <div class="header_menu-list-part">
                                            <h6>Thương hiệu</h6>
                                            <ul class="row header_menu-list-brand ">
                                                <?php
                                                    $brand = new brand();
                                                    $get_brand = $brand->show_brand();
                                                    if ($get_brand) {
                                                        while ($result = $get_brand->fetch_assoc()) {
                                                ?>
                                                <li class="col c-4">
                                                    <a href=""><?php echo $result['brandName'] ?></a>
                                                </li>
                                                    <?php
                                                        }
                                                    }
                                                ?>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col c-7">
                                        <div class="row header_menu-list-part">
                                            <ul>
                                                <li>
                                                    <h6>Áo</h6>
                                                    <ul class="row header_menu-list-brand ">                                              
                                                        <?php
                                                            $tpd = new typeProduct();
                                                            $get_tpd = $tpd->show_type_product_ao();
                                                            if ($get_tpd) {
                                                                while ($result = $get_tpd->fetch_assoc()) {
                                                        ?>
                                                        <li class="col c-12">
                                                            <a href=""><?php echo $result['typeProductName'] ?></a>
                                                        </li>
                                                            <?php
                                                                }
                                                            }
                                                        ?>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <h6>Áo khoác</h6>
                                                    <ul class="row header_menu-list-brand ">                                              
                                                        <?php
                                                            $tpd = new typeProduct();
                                                            $get_tpd = $tpd->show_type_product_aokhoac();
                                                            if ($get_tpd) {
                                                                while ($result = $get_tpd->fetch_assoc()) {
                                                        ?>
                                                        <li class="col c-12">
                                                            <a href=""><?php echo $result['typeProductName'] ?></a>
                                                        </li>
                                                            <?php
                                                                }
                                                            }
                                                        ?>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <h6>QUẦN & JUMPSUIT</h6>
                                                    <ul class="row header_menu-list-brand ">                                              
                                                        <?php
                                                            $tpd = new typeProduct();
                                                            $get_tpd = $tpd->show_type_product_quan();
                                                            if ($get_tpd) {
                                                                while ($result = $get_tpd->fetch_assoc()) {
                                                        ?>
                                                        <li class="col c-12">
                                                            <a href=""><?php echo $result['typeProductName'] ?></a>
                                                        </li>
                                                            <?php
                                                                }
                                                            }
                                                        ?>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <h6>CHÂN VÁY</h6>
                                                    <ul class="row header_menu-list-brand ">                                              
                                                        <?php
                                                            $tpd = new typeProduct();
                                                            $get_tpd = $tpd->show_type_product_chanvay();
                                                            if ($get_tpd) {
                                                                while ($result = $get_tpd->fetch_assoc()) {
                                                        ?>
                                                        <li class="col c-12">
                                                            <a href=""><?php echo $result['typeProductName'] ?></a>
                                                        </li>
                                                            <?php
                                                                }
                                                            }
                                                        ?>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <h6>ĐẦM</h6>
                                                    <ul class="row header_menu-list-brand ">                                              
                                                        <?php
                                                            $tpd = new typeProduct();
                                                            $get_tpd = $tpd->show_type_product_dam();
                                                            if ($get_tpd) {
                                                                while ($result = $get_tpd->fetch_assoc()) {
                                                        ?>
                                                        <li class="col c-12">
                                                            <a href=""><?php echo $result['typeProductName'] ?></a>
                                                        </li>
                                                            <?php
                                                                }
                                                            }
                                                        ?>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <h6>ĐỒ LÓT</h6>
                                                    <ul class="row header_menu-list-brand ">                                              
                                                        <?php
                                                            $tpd = new typeProduct();
                                                            $get_tpd = $tpd->show_type_product_DOLOT();
                                                            if ($get_tpd) {
                                                                while ($result = $get_tpd->fetch_assoc()) {
                                                        ?>
                                                        <li class="col c-12">
                                                            <a href=""><?php echo $result['typeProductName'] ?></a>
                                                        </li>
                                                            <?php
                                                                }
                                                            }
                                                        ?>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>   
                            </div>
                        </div>
                    </li>
                    <li class="nav-list">
                        <a href="quanao.php">TRẺ EM</a>
                        <div class="header_menu-list-in-item">
                            <div class="header_menu-list">
                                <div class="row">   
                                    <div class="col c-5">
                                        <div class="header_menu-list-part">
                                            <h6>Thương hiệu</h6>
                                            <ul class="row header_menu-list-brand ">
                                                <?php
                                                    $brand = new brand();
                                                    $get_brand = $brand->show_brand();
                                                    if ($get_brand) {
                                                        while ($result = $get_brand->fetch_assoc()) {
                                                ?>
                                                <li class="col c-4">
                                                    <a href=""><?php echo $result['brandName'] ?></a>
                                                </li>
                                                    <?php
                                                        }
                                                    }
                                                ?>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col c-7">
                                        <div class="row header_menu-list-part">
                                            <ul>
                                                <li>
                                                    <h6>Áo</h6>
                                                    <ul class="row header_menu-list-brand ">                                              
                                                        <?php
                                                            $tpd = new typeProduct();
                                                            $get_tpd = $tpd->show_type_product_ao();
                                                            if ($get_tpd) {
                                                                while ($result = $get_tpd->fetch_assoc()) {
                                                        ?>
                                                        <li class="col c-12">
                                                            <a href=""><?php echo $result['typeProductName'] ?></a>
                                                        </li>
                                                            <?php
                                                                }
                                                            }
                                                        ?>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <h6>Áo khoác</h6>
                                                    <ul class="row header_menu-list-brand ">                                              
                                                        <?php
                                                            $tpd = new typeProduct();
                                                            $get_tpd = $tpd->show_type_product_aokhoac();
                                                            if ($get_tpd) {
                                                                while ($result = $get_tpd->fetch_assoc()) {
                                                        ?>
                                                        <li class="col c-12">
                                                            <a href=""><?php echo $result['typeProductName'] ?></a>
                                                        </li>
                                                            <?php
                                                                }
                                                            }
                                                        ?>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <h6>QUẦN & JUMPSUIT</h6>
                                                    <ul class="row header_menu-list-brand ">                                              
                                                        <?php
                                                            $tpd = new typeProduct();
                                                            $get_tpd = $tpd->show_type_product_quan();
                                                            if ($get_tpd) {
                                                                while ($result = $get_tpd->fetch_assoc()) {
                                                        ?>
                                                        <li class="col c-12">
                                                            <a href=""><?php echo $result['typeProductName'] ?></a>
                                                        </li>
                                                            <?php
                                                                }
                                                            }
                                                        ?>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <h6>CHÂN VÁY</h6>
                                                    <ul class="row header_menu-list-brand ">                                              
                                                        <?php
                                                            $tpd = new typeProduct();
                                                            $get_tpd = $tpd->show_type_product_chanvay();
                                                            if ($get_tpd) {
                                                                while ($result = $get_tpd->fetch_assoc()) {
                                                        ?>
                                                        <li class="col c-12">
                                                            <a href=""><?php echo $result['typeProductName'] ?></a>
                                                        </li>
                                                            <?php
                                                                }
                                                            }
                                                        ?>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <h6>ĐẦM</h6>
                                                    <ul class="row header_menu-list-brand ">                                              
                                                        <?php
                                                            $tpd = new typeProduct();
                                                            $get_tpd = $tpd->show_type_product_dam();
                                                            if ($get_tpd) {
                                                                while ($result = $get_tpd->fetch_assoc()) {
                                                        ?>
                                                        <li class="col c-12">
                                                            <a href=""><?php echo $result['typeProductName'] ?></a>
                                                        </li>
                                                            <?php
                                                                }
                                                            }
                                                        ?>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <h6>ĐỒ LÓT</h6>
                                                    <ul class="row header_menu-list-brand ">                                              
                                                        <?php
                                                            $tpd = new typeProduct();
                                                            $get_tpd = $tpd->show_type_product_DOLOT();
                                                            if ($get_tpd) {
                                                                while ($result = $get_tpd->fetch_assoc()) {
                                                        ?>
                                                        <li class="col c-12">
                                                            <a href=""><?php echo $result['typeProductName'] ?></a>
                                                        </li>
                                                            <?php
                                                                }
                                                            }
                                                        ?>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>   
                            </div>
                        </div>
                    </li>
                    <li class="nav-list">
                        <a href="">BỘ SƯU TẬP</a>
                    </li>
                    <li class="nav-list">
                        <a href="giohang.php">VỀ CHÚNG TÔI</a>
                    </li>
                    <li class="nav-list">
                        <a href="donhang.php">LIÊN HỆ</a>
                    </li>
                </ul>
             </nav>
        </div>
        </li>
        <li>
            <div class="header__logo">
                <div class="logo">
                 <a href="index.php">
                    <img src="./assets/img/banner/messilogopng_350x.webp" alt="">
                 </a>
                </div>
            </div>
        </li>
        <li>
            <ul>
                <!-- thanh tìm kiếm -->
                <li class="header__search">
                    <form action="timkiemnangcao.php" method="GET">
                        <input type="text" name="search" class="header__search-input" placeholder="Tìm kiếm sản phẩm...">
                        <button type="submit" name="submit" class="ti-search"></button>
                    </form>
                </li>
                <li class="header__cart-wrap1">
                    <div class="header__cart">
                        <div class="header__cart-wrap">
                                <i class="header__cart-icon ti-shopping-cart-full"></i>
                                <span class="header_cart_quantity">
                                    <?php 

                                        $check_cart = $cat->checkCart(Session::get('user_id'));
                                        if ($check_cart && Session::get('user_login')) {
                                            $sum = Session::get("sum");
                                            echo $sum;
                                        } else if ($check_cart== false && Session::get('user_login')){
                                            echo '0';
                                        }
                                       if( Session::get('user_login')==false){
                                            echo '0';
                                        }
                                    ?>
                                </span>
                        </div>
                        <div class="header__cart-list header__cart-list--no-cart">
                            <h5 class="header__cart-list-title" id="style_1">Thông tin sản phẩm</h5>
                            <?php
                                $cart = new cart();
                                $getCart = $cart->showCart(Session::get('user_id'));
                                if( Session::get('user_id')){
                                    if ($getCart) {
                                        while ($result = $getCart->fetch_assoc()) {
							?>
                            <div class="header__cart-list-cart">
                                <img src="./admin/upload/<?php echo $result['image'] ?>" alt="">
                                <div class="header__cart-list-cart-name"><?php echo $result['productName']?>  </div>
                                <div class="header__cart-list-cart-price">
                                    <span><?php echo number_format($result['price'], 0, ',', '.').""."đ"?></span>
                                </div>
                            </div>
                            <?php
                                    }
                                } else {
                            ?>
                            <img src="assets/img/giohangtrong.png" alt="" class="header__cart-list--no-cart-img">
                            <span class="header__cart-list--no-cart-msg">
                                Chưa có sản phẩm
                            </span>
                            <?php
                                }
                                    }else{
                            ?>
                            <img src="assets/img/giohangtrong.png" alt="" class="header__cart-list--no-cart-img">
                            <span class="header__cart-list--no-cart-msg">
                                Chưa có sản phẩm
                            </span>
                            <?php
                                    }
                            ?>
                            <div class="header__cart-list-submit">
                                <a href="giohang.php">
                                <button>Xem tất cả</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </li>
                <?php
                    
                ?>
                <?php
                    $login_Check = Session::get('user_login');
                    if ($login_Check) {
                ?>
                <li  class="nav-list">
                    <div class="nav-account">
                        <div class="nav-account-img ti-headphone"></div>
                        <div class="nav-account-img ti-user"></div>
                        <ul class="nav-user_menu">
                            <li class="nav-user_menu-item">
                                <a style="color: #ffffff;  font-size: 14px; font-weight: 600; text-decoration: none; font-family: var(--font-family-monospace);
                                " href="account.php">Tài khoản của tôi</a>
                            </li>
                            <li class="nav-user_menu-item">
                                <a style="color: #ffffff;  font-size: 14px; font-weight: 600; text-decoration: none; font-family: var(--font-family-monospace);
                                " href="giohang.php">Giỏ hàng</a>
                            </li>
                            <li class="nav-user_menu-item">
                                <a style="color: #ffffff;  font-size: 14px; font-weight: 600; text-decoration: none; font-family: var(--font-family-monospace);
                                " href="lichsu.php">Quản lí đơn hàng</a>
                            </li>
                            <li class="nav-user_menu-item">
                                <input type="button" name="logout"><a style="color: #ffffff;  font-size: 14px; font-weight: 600; text-decoration: none; font-family: var(--font-family-monospace);
                                " href="?action=logout">Đăng xuất</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <?php
                    }
                    else {
                ?>
                    <a href="./login.php" style="text-decoration:none; color:black;">Đăng nhập</a>
                <?php
                    } 
                ?>
            </ul>
        </li>
    </ul>
    <?php
        if (isset($_GET['action']) && $_GET['action']){
            Session::destroy();
        }
    ?>

</header>