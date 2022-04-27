<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
    <link rel="stylesheet" href="assets/font/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="assets/css/sp.css">
    <title>Sản phẩm</title>
</head>
<?php include '../classses/brand.php' ?>
<?php
    $brand = new brand();
    if(isset($_GET['brandid']) && $_GET['brandid']!=NULL){
        $id = $_GET['brandid'];
    }
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $brandName = $_POST['brandName'];
        $updateBrand = $brand->update_brand($brandName,$id);
    }
?>
<body>
    <?php include './inc/sidebar.php' ?>
    <div class="main-content">
        <?php include './inc/header.php' ?>
        <main>
            <section class="recent">
            <div class="activity-grid">
                <div class="activity-card">
                    <div class="activity-header">
                        <h3>Thêm thương hiệu</h3>
                    </div>
                    <!-- phần hiển thị thông báo kết quả khi cập nhập -->
                    <?php
                        if(isset($updateBrand)){
                            echo $updateBrand;
                        }
                    ?>
                    <?php
                    $get_brand_name = $brand->getbrandbyId($id);
                    if ($get_brand_name) {
                        while ($result = $get_brand_name->fetch_assoc()) {
                     ?>
                    <form action="" method="post">
                    <table class="form" style="border-collapse: inherit;">					
                        <tr>
                            <td>
                                <input type="text" value="<?php echo $result['brandName']  ?>" name="brandName" placeholder="Sửa sản phẩm" class="medium" style="width: 50%;text-align: center;padding: 10px;border-radius: 6px;font-size: 20px;" />
                            </td>
                        </tr>
						<tr> 
                            <td>
                                <input type="submit" name="submit" Value="Save" style="padding: 10px 20px;border-radius: 6px;color: #fff;background: #323434;" />
                            </td>
                        </tr>
                    </table>
                    </form>
                    <?php
                        }
                    }
                     ?>
                </div>
            </div>
            </section>
        </main>
    </div>
</body>
</html>