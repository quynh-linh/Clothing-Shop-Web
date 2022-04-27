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
<?php include '../classses/typeProduct.php'?>
<?php
    $tpd = new typeProduct();
    if (isset($_GET['delid'])) {
		$id = $_GET['delid'];
		$delcat = $tpd->del_type_product($id);
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
                        <h3>Danh sách sản phẩm</h3>
                        <div class="activity-more">
                            <span class="ti-plus"></span>
                            <a href="typeProductadd.php"> <h4>Thêm sản phẩm</h4></a>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table>
                            <thead>
                                <tr>
                                    <th>Số thứ tự</th>
                                    <th>Kiểu sản phẩm</th>
                                    <th>Tên danh mục</th>
                                    <th>Sửa</th>
                                    <th>Xoá</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                $show_type_product = $tpd->show_type_product();
                                if ($show_type_product) {
                                    $i = 0 ;
                                    while($result = $show_type_product->fetch_assoc()) {
                                    $i++;
                                ?>
                                <tr>  
                                    <td><?php echo $i ?></td>   
                                    <td><?php echo $result['typeProductName'] ?></td>     
                                    <td><?php echo $result['catName'] ?></td>
                                    <td>
                                        <a href="typeProductEdit.php?typeProductId=<?php echo $result['typeProductID'] ?>" class="img-link">Sửa</a>
                                    </td>
                                    <td>
                                    <a onclick="return confirm('Bạn có chắc chắn muốn xóa')" href="?delid=<?php echo $result['typeProductID'] ?>" class="img-link"class ="cat__link">Xoá</a>
                                    </td>
                                </tr>
                                <?php
							         }
						        }
				                 ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            </section>
        </main>
    </div>
</body>
</html>