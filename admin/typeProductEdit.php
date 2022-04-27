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
<?php include '../classses/category.php';?>
<?php include '../classses/typeProduct.php';?>
<?php
    // isset($_POST['submit']) nếu người dùng nhấn vào submit thì mới thêm còn lại thì không
    $type_product = new typeProduct();
    if (!isset($_GET['typeProductId']) || $_GET['typeProductId'] == NULL) {
        echo "<script>window.location = 'listTypeProduct.php'</script>";
    } else {
        $id = $_GET['typeProductId'];
    }
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
        $updateTypeProduct = $type_product->update_type_product($_POST,$id);
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
                        <h3>Sửa sản phẩm</h3>
                    <?php
                        if(isset($updateTypeProduct)){
                            echo $updateTypeProduct;
                        }
                    ?>  
                    </div>
            <?php
                $get_product_id = $type_product->getTypeProductById($id);
                if ($get_product_id) {
                    while ($result_product = $get_product_id->fetch_assoc()) {
            ?>    
            <form action="" method="post">
            <table class="form">
                <tr>
                    <td class="form_title">
                        <label>Nhập tên</label>
                    </td>
                    <td>
                        <input type="text" name="typeProductName" value="<?php echo $result_product['typeProductName'] ?>" placeholder="Nhập tên sản phẩm" class="medium" />
                    </td>
                </tr>
				<tr>
                    <td class="form_title">
                        <label>Danh mục sản phẩm</label>
                    </td>
                    <td>
                        <select id="select" name="category">
                            <option>Lựa chọn danh mục</option>
                            <?php
                                $cat = new category();
                                $catlist = $cat ->show_category();
                                if ($catlist) {
                                    while ($result = $catlist ->fetch_assoc()) {
                            ?>
                            <option 
                            <?php 
                                if ($result['catId'] == $result_product['catID']) {
                                    echo 'selected';
                                }
                            ?>
                            value="<?php echo $result['catId'] ?>"><?php echo $result["catName"] ?></option>
                            <?php
                                    }
                                }
                            ?>
                        </select>
                    </td>
                </tr>
				<tr>
                    <td></td>
                    <td>
                        <input type="submit" name="submit" Value="Save" />
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