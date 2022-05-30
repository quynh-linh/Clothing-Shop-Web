<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
    <link rel="stylesheet" href="assets/font/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="assets/css/thongtin.css">
    <link rel="stylesheet" href="assets/css/grid.css">
    <link rel="stylesheet" href="assets/css/discount.css">
    <title>Mã khuyến mãi</title>
</head>
<?php include '../classses/discount.php' ?>
<?php
    $discount = new discount();
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
    //có $_FILES bởi vì có update hình ảnh
        $insertDiscount = $discount->insertDiscount($_POST);
    }
?>
<body>
    <?php include './inc/sidebar.php' ?>
    <div class="main-content">
        <?php include './inc/header.php' ?>
        <main>
            <h2 class="dash-title">Nhập mã giảm giá</h2>
            <section class="recent">
                <div class="activity-grid" style="margin-bottom: 20px;">
                    <form action="" method="POST">
                        <div class="row">
                            <div class="activity-card col l-9">
                                <div>
                                    <div class="discount_title">
                                        <label for="">Tên mã giảm giá</label>
                                    </div>

                                    <div class="discount_name">
                                        <input type="text" name="coupon_name" id="" placeholder="Nhập tên mã giảm giá">
                                    </div>
                                    <div class="discount_title">
                                        <label for="">Mã giảm giá</label>
                                    </div>

                                    <div class="discount_name">
                                        <input type="text" name="coupon_code" id="" placeholder="Nhập mã giảm giá">
                                    </div>
                                </div>
                            </div>
                            <div class="col l-3" style="background: white;border-left: 1px solid;border-radius: 7px;">
                                <div class="discount_date">Date Range</div>
                                <div>
                                    <div class="input-group">
                                        <span>Số lượng mã</span>
                                        <input type="text" name="coupon_time" id="">
                                    </div>
                                    <div class="input-group">
                                        <span>Nhập số % hoặc tiềm giảm</span>
                                        <input type="text" name="coupon_number" id="">
                                    </div>
                                    <div class="input-group">
                                        <span>Tính năng mã</span>
                                        <select name="coupon_conditions" id="" style="width: 100%;margin-bottom: 10px;text-align: center;">
                                            <option value="">-----Chọn-----</option>
                                            <option value="0">Giảm theo phần trăm</option>
                                            <option value="1">Giảm theo tiền</option>
                                        </select>
                                    </div>
                                </div>
                                <div>
                                    <?php
                                    if (isset($insertDiscount)) {
                                        echo $insertDiscount;
                                    }
                                    ?>
                                    <input type="submit" name="submit" value="Lưu mã" style="width: 100%;background: #323434;color: white;font-size: 25ppx;">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </section>
        </main>
    </div>
</body>

</html>