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
    $typeProduct = new typeProduct();
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
        $insertTypeProduct = $typeProduct->insert_type_product($_POST);
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
                        <h3>Thêm sản phẩm</h3>
                        <?php
                            if(isset($insertTypeProduct)){
                                echo $insertTypeProduct;
                            }
                        ?>  
                    </div>
            <form action="typeProductadd.php" method="post">
            <table class="form">
                <tr>
                    <td class="form_title">
                        <label>Nhập kiểu</label>
                    </td>
                    <td>
                        <input type="text" name="typeProductName" placeholder="Nhập tên sản phẩm" class="medium" />
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
                            <option value="<?php echo $result['catId'] ?>"><?php echo $result["catName"] ?></option>
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
            </div>
            </div>
            </section>
        </main>
    </div>
</body>
</html>