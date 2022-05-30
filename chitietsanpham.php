<?php include './inc/handle.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Chi tiết sản phẩm</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/comment.css">
    <link rel="stylesheet" href="assets/css/chitietsp.css">
    <link rel="stylesheet" href="assets/css/grid.css">
    <link rel="stylesheet" href="assets/css/base.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" href="assets/font/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="/assets/font/fontawesome-free-5.15.4-web/css/all.min.css">
    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
    <link rel="stylesheet" href="fancybox/jquery.fancybox.css?v=2.0.4" type="text/css" media="screen" />
    <script type="text/javascript" src="fancybox/jquery.fancybox.pack.js?v=2.0.4"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<?php
/* Kiểm tra id sản phẩm */
if (!isset($_GET['productId']) || $_GET['productId'] == NULL) {
} else {
    $id = $_GET['productId'];
}

/* Kiểm tra id brand */
if (isset($_GET['brandId']) && $_GET['brandId'] != NULL) {
    $br = $_GET['brandId'];
}

/* Kiểm tra loai sp*/
if (isset($_GET['type']) && $_GET['type'] != NULL) {
    $type = $_GET['type'];
}

// Thêm sản phẩm vào giỏ hàng
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
    if (Session::get('user_login') == false) {
    } else {
        $quantity = $_POST['quantity'];
        $checkQuantity = $product->checkQuantityProduct($_GET['productId']);
        if ($_POST['size'] == "") {
            echo '<script type ="text/JavaScript">';
            echo 'alert("Bạn chưa chọn size")';
            echo '</script>';
        } else if ($checkQuantity == false) {
            echo '<script type ="text/JavaScript">';
            echo 'alert("Sản phẩm đã hết hàng ,Mong quý khách quay lại sau !")';
            echo '</script>';
        } else {
            $size = $_POST['size'];
            $addToCart = $cat->addProduct_cart($id, $quantity, $size, Session::get('user_id'));
        }
    }
}
?>
<?php
if (isset($_POST['comments']) && $_POST['content'] != "" && $_POST['date_comment'] != "") {
    if (Session::get('user_login') == false) {
        $tb = '<span class="fix_bug">Yêu cầu đăng nhập !</span>';
    } else {
        $binhluan = $user->insert_comments();
    }
} elseif (isset($_POST['comments']) && $_POST['content'] == "") {
    $tb = '<span class="fix_bug">Bạn chưa nhập bình luận ?</span>';
}

?>
<?php
if (isset($_POST['rep_submit']) && $_POST['rep_content'] != "") {
    if (Session::get('user_login') == false) {
        $tb = '<span class="fix_bug">Yêu cầu đăng nhập !</span>';
    } else {
        $binhluan = $user->insert_rep_comments();
    }
} elseif (isset($_POST['rep_submit']) && $_POST['rep_content'] == "") {
    $tb = '<span class="fix_bug">Bạn chưa nhập phản hồi ?</span>';
} elseif (isset($_POST['comments']) && isset($_POST['rep_content']) == ' ') {
    $tb = '<span class="fix_bug">kí tự không hợp lệ !</span>';
} else {
    echo "";
}
?>

<body>
    <div class="grid">
        <section class="app">
            <?php include 'inc/header.php' ?>
        </section>
    </div>
    <!--sanpham-->
    <div class="PC">
        <div class="grid wide">
            <?php
            $get_productDetails = $product->getProduct_Details($id);
            if ($get_productDetails) {
                while ($result_Details = $get_productDetails->fetch_assoc()) {
            ?>
                    <div class="app_details">
                        <div class="row">
                            <div class="col l-6 " style="font-family: var(--font-family-monospace);">
                                <div class="app_details-img">
                                    <img src="./admin/upload/<?php echo $result_Details['image'] ?>" alt="" class="content-img">
                                </div>
                                <div>
                                    <div class="app_details-item">
                                        <div class="app_details-item-1">
                                            <span>Chia sẻ:</span>
                                            <span class="app_details-item-app">
                                                <i class="fab fa-facebook-messenger"></i>
                                                <i class="fab fa-facebook"></i>
                                                <i class="fab fa-instagram"></i>
                                                <i class="fab fa-twitter-square"></i>
                                            </span>
                                        </div>
                                        <div class="app_details-item-2">
                                            <i class="far fa-heart"></i>
                                            <span>Đã thích (7k)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col l-6">
                                <div class="home-product-icon">
                                    <h3 class="home-product-item__line"><?php echo $result_Details['productName'] ?></h3>
                                    <div class="home-product-item__sales">
                                        <span class="home-product-item__sales-star">
                                            <span class="home-product-item__time ">4.9</span>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </span>
                                        <span class="home-product-item__bot"></span>
                                        <span class="home-product-item__time ">761</span>
                                        <span class="home-product-item__click ">Đánh Giá</span>
                                        <span class="home-product-item__bot"></span>
                                        <span class="home-product-item__time ">2,4k</span>
                                        <span class="home-product-item__click">Đã Bán</span>
                                    </div>
                                    <div class="home-product-item__ship">
                                        <span class="home-product-item__ship-title">Vận chuyển</span>
                                        <div class="home-product-item__ship-with">
                                            <p class="home-product-item__ship-content">
                                                <i class="fas fa-truck"></i>
                                                Miễn phí vận chuyển
                                            </p>
                                            <p class="home-product-item__ship-canle">Miễn phí vận chuyển cho đơn hàng trên 300.000đ</p>
                                        </div>
                                    </div>
                                    <div class="all-form-controls">
                                        <form action="" method="post">
                                            <div style="display: flex;align-items: center;">
                                                <span class="ti-ruler"></span>
                                                <a href="" onclick="resgiter(event)" class="navbar-item-link text-bold navbar__item--separate" style="color: #666;">Kiểm tra size của bạn</a>
                                            </div>
                                            <div class="home-product-item-size">
                                                <span>Kích cỡ</span>
                                                <div class="home-product-item-size_input">
                                                    <input type="button" class="btn_size" name="" value="S">
                                                    <input type="button" class="btn_size" name="" value="M">
                                                    <input type="button" class="btn_size" name="" value="L">
                                                    <input type="button" class="btn_size" name="" value="XL">
                                                </div>
                                            </div>
                                            <div>
                                                <p id="checkSize" style="color:red; margin-left:10px;"></p>
                                            </div>
                                            <input type="hidden" id="btn_sizes" name="size" value="">
                                            <!-- Kiểm tra kích cỡ size -->
                                            <div class="overFlow"></div>
                                            <div class="modal">
                                                <div class="modal__overlay">
                                                    <div class="model__body">
                                                        <div class="table-size-product" style="display: none" id="table-size-product">
                                                            <div style="text-align: end;display: flex;justify-content: end;align-items: center;"> <input type="submit" value="X" id="cancelBtn" onclick="parent.jQuery.fancybox.close()" /></div>
                                                            <div class="title-table-size">BẢNG TƯ VẤN SIZE</div>
                                                            <div class="exclusive-tabs">
                                                                <div class="exclusive-head">
                                                                    <ul>
                                                                        <li class="exclusive-tab " onclick="changeBestSeller('men',this)">Nam</li>
                                                                        <li class="exclusive-tab  active " onclick="changeBestSeller('women',this)">Nữ</li>
                                                                        <li class="exclusive-tab " onclick="changeBestSeller('kids',this)">Trẻ Em</li>
                                                                    </ul>
                                                                </div>
                                                                <div class="exclusive-content">
                                                                    <div id="loading-bar-spinner" class="spinner">
                                                                        <div class="spinner-icon"></div>
                                                                    </div>
                                                                    <div class="exclusive-inner " id="men">
                                                                        <div class="row">
                                                                            <div class="col l-12">
                                                                                <table class="table-pc" style="width: 100%;">
                                                                                    <thead>
                                                                                        <tr>
                                                                                            <td class="title-table" colspan="7">
                                                                                                SIZE ÁO
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td><strong>STT</strong></td>
                                                                                            <td><strong>TÊN GỌI/SIZE</strong></td>
                                                                                            <td><strong>S</strong></td>
                                                                                            <td><strong>M</strong></td>
                                                                                            <td><strong>L</strong></td>
                                                                                            <td><strong>XL</strong></td>
                                                                                            <td><strong>XXL</strong></td>
                                                                                        </tr>
                                                                                    </thead>
                                                                                    <tbody>
                                                                                        <tr>
                                                                                            <td>1</td>
                                                                                            <td>Cổ</td>
                                                                                            <td>36</td>
                                                                                            <td>38</td>
                                                                                            <td>40</td>
                                                                                            <td>42</td>
                                                                                            <td>44</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>2</td>
                                                                                            <td>Vai</td>
                                                                                            <td>44</td>
                                                                                            <td>45</td>
                                                                                            <td>46</td>
                                                                                            <td>47</td>
                                                                                            <td>48</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>3</td>
                                                                                            <td>Ngực</td>
                                                                                            <td>90</td>
                                                                                            <td>94</td>
                                                                                            <td>98</td>
                                                                                            <td>102</td>
                                                                                            <td>106</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>4</td>
                                                                                            <td>Eo</td>
                                                                                            <td>88</td>
                                                                                            <td>92</td>
                                                                                            <td>96</td>
                                                                                            <td>100</td>
                                                                                            <td>104</td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                    <thead>
                                                                                        <tr>
                                                                                            <td class="title-table" colspan="7">
                                                                                                SIZE QUẦN
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td><strong>STT</strong></td>
                                                                                            <td><strong>TÊN GỌI/SIZE</strong></td>
                                                                                            <td><strong>S(26)</strong></td>
                                                                                            <td><strong>M(27)</strong></td>
                                                                                            <td><strong>L(28)</strong></td>
                                                                                            <td><strong>XL(29)</strong></td>
                                                                                            <td><strong>XXL(30)</strong></td>
                                                                                        </tr>
                                                                                    </thead>
                                                                                    <tbody>
                                                                                        <tr>
                                                                                            <td>1</td>
                                                                                            <td>Vòng Eo</td>
                                                                                            <td>76</td>
                                                                                            <td>80</td>
                                                                                            <td>84</td>
                                                                                            <td>86</td>
                                                                                            <td>90</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>2</td>
                                                                                            <td>Vòng Mông</td>
                                                                                            <td>91</td>
                                                                                            <td>95</td>
                                                                                            <td>99</td>
                                                                                            <td>104</td>
                                                                                            <td>109</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>3</td>
                                                                                            <td>Cân nặng (kg)</td>
                                                                                            <td>62 - 68</td>
                                                                                            <td>68 - 70</td>
                                                                                            <td>70 - 74</td>
                                                                                            <td>74 - 78</td>
                                                                                            <td>78 - 82</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>4</td>
                                                                                            <td>Chiều Cao (cm)</td>
                                                                                            <td>162 - 168</td>
                                                                                            <td>168 - 172</td>
                                                                                            <td>172 - 176</td>
                                                                                            <td>176 - 180</td>
                                                                                            <td>180 - 184</td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="exclusive-inner " id="women">
                                                                        <div class="row">
                                                                            <div class="col l-12">
                                                                                <table class="table-pc" style="width: 100%;">
                                                                                    <thead>
                                                                                        <tr>
                                                                                            <td class="title-table" colspan="7">
                                                                                                SIZE VÁY ÁO Nữ
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td><strong>STT</strong></td>
                                                                                            <td><strong>TÊN GỌI/SIZE</strong></td>
                                                                                            <td><strong>S</strong></td>
                                                                                            <td><strong>M</strong></td>
                                                                                            <td><strong>L</strong></td>
                                                                                            <td><strong>XL</strong></td>
                                                                                            <td><strong>XXL</strong></td>
                                                                                        </tr>
                                                                                    </thead>
                                                                                    <tbody>
                                                                                        <tr>
                                                                                            <td>1</td>
                                                                                            <td>Vai</td>
                                                                                            <td>36</td>
                                                                                            <td>37</td>
                                                                                            <td>38</td>
                                                                                            <td>39</td>
                                                                                            <td>40</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>2</td>
                                                                                            <td>Ngực</td>
                                                                                            <td>82</td>
                                                                                            <td>86</td>
                                                                                            <td>90</td>
                                                                                            <td>94</td>
                                                                                            <td>98</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>3</td>
                                                                                            <td>Eo</td>
                                                                                            <td>64</td>
                                                                                            <td>68</td>
                                                                                            <td>72</td>
                                                                                            <td>76</td>
                                                                                            <td>80</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>4</td>
                                                                                            <td>Hông</td>
                                                                                            <td>88</td>
                                                                                            <td>92</td>
                                                                                            <td>96</td>
                                                                                            <td>100</td>
                                                                                            <td>104</td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                    <thead>
                                                                                        <tr>
                                                                                            <td class="title-table" colspan="7">
                                                                                                SIZE QUẦN
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td><strong>STT</strong></td>
                                                                                            <td><strong>TÊN GỌI/SIZE</strong></td>
                                                                                            <td><strong>S(26)</strong></td>
                                                                                            <td><strong>M(27)</strong></td>
                                                                                            <td><strong>L(28)</strong></td>
                                                                                            <td><strong>XL(29)</strong></td>
                                                                                            <td><strong>XXL(30)</strong></td>
                                                                                        </tr>
                                                                                    </thead>
                                                                                    <tbody>
                                                                                        <tr>
                                                                                            <td>1</td>
                                                                                            <td>Vòng Eo</td>
                                                                                            <td>64</td>
                                                                                            <td>68</td>
                                                                                            <td>72</td>
                                                                                            <td>76</td>
                                                                                            <td>80</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>2</td>
                                                                                            <td>Vòng Mông</td>
                                                                                            <td>88</td>
                                                                                            <td>92</td>
                                                                                            <td>96</td>
                                                                                            <td>100</td>
                                                                                            <td>104</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>3</td>
                                                                                            <td>Vòng Bụng</td>
                                                                                            <td>68</td>
                                                                                            <td>72</td>
                                                                                            <td>76</td>
                                                                                            <td>80</td>
                                                                                            <td>84</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>4</td>
                                                                                            <td>Dài Quần</td>
                                                                                            <td>96</td>
                                                                                            <td>97</td>
                                                                                            <td>99</td>
                                                                                            <td>100</td>
                                                                                            <td>101</td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="exclusive-inner " id="kids">
                                                                        <div class="row">
                                                                            <div class="col l-12">
                                                                                <table class="table-pc" style="width: 100%;">
                                                                                    <thead>
                                                                                        <tr>
                                                                                            <td class="title-table" colspan="7">
                                                                                                SIZE VÁY ÁO Trẻ em
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td><strong>STT</strong></td>
                                                                                            <td><strong>CỠ / TUỔI</strong></td>
                                                                                            <td><strong>4-5</strong></td>
                                                                                            <td><strong>6-7</strong></td>
                                                                                            <td><strong>8-9</strong></td>
                                                                                            <td><strong>10-11</strong></td>
                                                                                            <td><strong>12-13</strong></td>
                                                                                        </tr>
                                                                                    </thead>
                                                                                    <tbody>
                                                                                        <tr>
                                                                                            <td>1</td>
                                                                                            <td>CHIẾU CAO (CM)</td>
                                                                                            <td>110</td>
                                                                                            <td>122</td>
                                                                                            <td>133</td>
                                                                                            <td>150</td>
                                                                                            <td>155</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>2</td>
                                                                                            <td>CÂN NẶNG (KG)</td>
                                                                                            <td>15-20</td>
                                                                                            <td>20-25</td>
                                                                                            <td>23-29</td>
                                                                                            <td>28-35</td>
                                                                                            <td>34-43</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>3</td>
                                                                                            <td>RỘNG VAI</td>
                                                                                            <td>29</td>
                                                                                            <td>30</td>
                                                                                            <td>31</td>
                                                                                            <td>32</td>
                                                                                            <td>33</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>4</td>
                                                                                            <td>VÒNG NGỰ</td>
                                                                                            <td>59</td>
                                                                                            <td>65</td>
                                                                                            <td>68</td>
                                                                                            <td>74</td>
                                                                                            <td>79</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>5</td>
                                                                                            <td>VÒNG BỤNG</td>
                                                                                            <td>54</td>
                                                                                            <td>59</td>
                                                                                            <td>62</td>
                                                                                            <td>65</td>
                                                                                            <td>69</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>6</td>
                                                                                            <td>VÒNG MÔNG</td>
                                                                                            <td>61</td>
                                                                                            <td>66</td>
                                                                                            <td>70</td>
                                                                                            <td>75</td>
                                                                                            <td>80</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>7</td>
                                                                                            <td>DÀI TAY</td>
                                                                                            <td>40</td>
                                                                                            <td>43</td>
                                                                                            <td>47</td>
                                                                                            <td>50</td>
                                                                                            <td>53</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>8</td>
                                                                                            <td>CHIỀU DÀI TỪ ĐŨNG ĐẾN ỐNG</td>
                                                                                            <td>42</td>
                                                                                            <td>52</td>
                                                                                            <td>59</td>
                                                                                            <td>66</td>
                                                                                            <td>72</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td colspan="6"><b>* Số đo trong "BẢNG THÔNG SỐ" là số đo cơ thể không phải số đo quần áo</b></td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="buy_now">
                                                <span>Số lượng</span>
                                                <div class="home-product-item-size_quantity">
                                                    <input type="button" class="btn_quantity" value="-" onclick="down()">
                                                    <input readonly="readonly" type="text" id="input_quantity" value="1" name="quantity">
                                                    <input type="button" class="btn_quantity" value="+" onclick="up()">
                                                </div>
                                            </div>
                                            <div style="padding: 20px 0;color: black;">
                                                <?php if ($result_Details['quantity'] > 0) {
                                                ?>
                                                    <span>Số lượng sản phẩm (<?php echo $result_Details['quantity'] ?> sản phẩm)</span>
                                                    <?php
                                                } else {
                                                ?>
                                                    <span style="color: red ;">Sản phẩm đã hết hàng</span>
                                                <?php
                                                }
                                                    ?> 

                                            </div>
                                            <div class="price-product">
                                                <span>Giá</span>
                                                <span><?php echo number_format($result_Details['price'], 0, ',', '.') . "" . "đ"  ?></span>
                                            </div>
                                            <!-- hiên thị thông báo sản phẩm đã được cập nhật nếu đã có trong giỏ hàng -->
                                            <div>
                                                <?php
                                                if (isset($addToCart)) {
                                                    $size = $_POST['size'];
                                                    $quantity = $_POST['quantity'];
                                                    $updateCart = $cat->updateQuantityandSize($size, $quantity, $id, Session::get('user_id'));
                                                    echo '<span style="color:red;">Sản phẩm đã tồn tại trong giỏ hàng, size và số lượng đã được cập nhật </span>';
                                                }
                                                ?>
                                            </div>
                                            <div style="text-align: center;padding: 40px;align-items: center; display: flex; justify-content: center;     border-bottom: 1px solid #ccc;">
                                                <?php
                                                if (Session::get('user_login') == false) {
                                                ?>
                                                    <input type="button" value="Thêm sản phẩm" class="btn--primary" onclick="swal_login_false()"><i class="fas fa-cart-plus" style="margin-left:10px; font-size:48px;"></i></input>
                                                <?php
                                                } else {
                                                ?>
                                                    <input type="submit" name="submit" value="Thêm sản phẩm" class="btn--primary"><i class="fas fa-cart-plus" style="margin-left:10px; font-size:48px;"></i></input>
                                                <?php

                                                }
                                                ?>

                                            </div>
                                            <div class="app_content">
                                                <div class="home-title">
                                                    <h4 class="home-title-all">CHI TIẾT SẢN PHẨM</h4>
                                                    <span><?php echo $result_Details['product_desc'] ?></span>
                                                </div>
                                            </div>

                                        </form>


                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
            <?php
                }
            }
            ?>
            <div class="col l-12">
                <div class="comment" style="border: 1px solid #ccc;border-radius: 10px;padding: 10px;">
                    <section style="border-bottom: 1px solid #ccc;">
                        <?php
                        $p = $_GET['productId'];
                        $count_comment = $user->display_comment($p);
                        if (empty($count_comment)) {
                            $count_comment = 0;
                        } else {
                            $count_comment = mysqli_num_rows($count_comment);
                        }
                        ?>
                        <div style="display: flex;">
                            <h2 class="comment-title">Bình luận
                        </div>
                        <?php
                        if (isset($binhluan)) {
                            echo $binhluan;
                        } else {
                            echo "";
                        }
                        if (isset($tb)) {
                            echo $tb;
                        } else {
                            echo "";
                        }
                        ?>
                        <form action="" method="post">
                            <div style="display: flex;align-items: center;justify-content: space-between;">
                                <?php
                                if (Session::get('user_login') == false) {
                                ?>
                                    <section style="width: 10%;">
                                        <input readonly="readonly" type="hidden" name="tenbinhluan" style="width: 100%;" value="">
                                        <img class="comment-ipname" src="./assets/img/About-Nike-Team_original.jpg" alt="">
                                    </section>

                                    <?php
                                } else {
                                    $userId = Session::get('user_id');
                                    $infor_user = $user->show_User($userId);
                                    while ($result_infor_user = $infor_user->fetch_assoc()) {
                                    ?>
                                        <section style="width: 10%;"><input class="comment-ipname" readonly="readonly" type="text" name="tenbinhluan" placeholder="username" value="<?php echo $result_infor_user['username'] ?>"></section>
                                <?php
                                    }
                                }
                                ?>
                                <section style="width: 90%;">
                                    <input pattern="\S+.*" autocomplete="off" class="comment-tacontent" name="content" placeholder="Nhập nội dung bình luận..."></input>
                                </section>
                            </div>

                            <input type="hidden" name="date_comment" value="<?php $today = date("d/m/Y");
                                                                            echo $today; ?>">
                            <section style="display: flex;align-items: center;justify-content: end;">
                                <input class="comment-ipsubmit" type="submit" name="comments" value="Gửi">
                            </section>
                            <div>
                                <?php
                                $p = $_GET['productId'];
                                $count_comment = $user->display_comment($p);
                                if (empty($count_comment)) {
                                    $count_comment = 0;
                                } else {
                                    $count_comment = mysqli_num_rows($count_comment);
                                }
                                ?>
                                <div class="sort_comment">
                                    <?php echo $count_comment ?> Bình luận
                                </div>
                            </div>
                        </form>
                    </section>
                    <?php
                    // $nameID = $_POST['nameId'];
                    $productId = $_GET['productId'];
                    $displaycomments = $user->display_comment($productId);
                    if ($displaycomments) {
                        while ($result = $displaycomments->fetch_assoc()) {
                            // echo  $result['id'];
                    ?>
                            <div class="display_coment">
                                <div style="display: flex;align-items: stretch;justify-content: flex-start;padding-top:10px;">
                                    <span class="display_coment-icon">
                                        <img src="./assets/img/Administrator-icon.png" alt="">
                                    </span>
                                    <span class="display_coment-name"><?php echo $result['namebl'] ?></span>
                                    <span class="display_coment-date"><?php echo $result['dateComment'] ?></span>
                                </div>
                                <div class="display_coment-content"><?php echo $result['comment'] ?></div>
                            </div>

                            <?php

                            // $nameID = $_POST['nameId'];
                            // echo $nameID;
                            $displayrepcomments = $user->display_rep_comment();
                            if ($displayrepcomments) {
                                while ($result_rep = $displayrepcomments->fetch_assoc()) {
                                    if ($result['id'] == $result_rep['nameId']) {
                            ?>

                                        <div class="background_comment">
                                            <div>
                                                <div class="display_rep_coment">
                                                    <span class="ti-user display_rep_coment-icon"></span>
                                                    <span class="display_rep_coment-name"><?php echo $result_rep['namerep'] . ":" ?></span>
                                                    <section class="display_rep_coment-content"><?php echo $result_rep['rep'] ?></section>
                                                </div>
                                            </div>
                                        </div>
                            <?php
                                    } else {
                                        echo "";
                                    }
                                }
                            }
                            ?>
                            <section></section>
                            <form action="" method="post">
                                <?php
                                if (Session::get('user_login') == false) {
                                ?>
                                    <input class="comment-ipname" type="hidden" name="name_rep">
                                    <?php
                                } else {
                                    // $nameID = $_POST['nameId'];
                                    $userId = Session::get('user_id');
                                    $infor_user = $user->show_User($userId);
                                    while ($result_infor_user = $infor_user->fetch_assoc()) {
                                    ?>
                                        <input class="comment-ipname" type="hidden" name="name_rep" value="<?php echo $result_infor_user['username'] ?>">
                                <?php
                                    }
                                }
                                ?>
                                <section style="display: flex;align-items: flex-start;">
                                    <input name="rep_submit" class="ok" type="submit" value="Phản hồi"></input>
                                    <input class="" type="hidden" name="nameId" value="<?php echo $result['id'] ?>">
                                    <input pattern="\S+.*" autocomplete="off" name="rep_content" class="rep" placeholder="........">
                                </section>
                            </form>
                    <?php
                        }
                    }
                    ?>
                </div>
            </div>
            <div class="related_products">
                <h3>Sản phẩm liên quan</h1>
                    <div class="row">
                        <?php
                        $get_productRelatetionship = $product->getProduct_Relationship($br, $id);
                        if ($get_productRelatetionship) {
                            while ($result = $get_productRelatetionship->fetch_assoc()) {
                        ?>
                                <div class="col l-2-4">
                                    <a href="chitietsanpham.php?productId=<?php echo $result['productId'] ?>&&brandId=<?php echo $result['brandId'] ?>&&type=<?php echo $result['type'] ?>">
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
    <?php include './inc/footer.php' ?>
    <script src="./assets/js/chitietsp.js"></script>
    <script>
        function up() {
            let Quantity = document.getElementById('input_quantity').value
            <?php
            $get_productDetails = $product->getProduct_Details($id);
            while ($result_Details = $get_productDetails->fetch_assoc()) {
            ?>
                if (Quantity >= <?= $result_Details['quantity'] ?>) {
                    Swal.fire({
                        icon: 'warning',
                        title: 'Oops...',
                        text: 'Đã đạt số lượng tối đa',
                    })
                } else {
                    Quantity++
                }
            <?php
            }
            ?>
            document.getElementById('input_quantity').value = Quantity
        }
        async function resgiter(e) {
            e.preventDefault();
            document.querySelector(".modal").style.display = 'flex';
            document.querySelector("#table-size-product").style.display = 'block';
        };
        document.querySelector('.modal__overlay') = function() {
            document.querySelector(".modal").style.display = 'none';
        };
        document.querySelector('.modal__overlay') = function() {
            document.querySelector(".modal").style.display = 'none';
        }
    </script>

</body>

</html>