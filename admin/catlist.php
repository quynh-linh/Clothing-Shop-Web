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
<?php include '../classses/category.php' ?>
<?php
    $cat = new category();
    if (isset($_GET['delid'])) {
		$id = $_GET['delid'];
		$delcat = $cat->del_category($id);
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
                            <a href="catadd.php"> <h4>Thêm sản phẩm</h4></a>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table>
                            <thead>
                                <tr>
                                    <th>Số thứ tự</th>
                                    <th>Tên danh mục</th>
                                    <th>Sửa</th>
                                    <th>Xoá</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                $show_cate = $cat->show_category();
                                if ($show_cate) {
                                    $i = 0 ;
                                    while($result = $show_cate->fetch_assoc()) {
                                    $i++;
                                ?>
                                <tr>  
                                    <td><?php echo $i ?></td>    
                                    <td><?php echo $result['catName'] ?></td>
                                    <td>
                                        <a href="catedit.php?catid=<?php echo $result['catId'] ?>" class="img-link">Sửa</a>
                                    </td>
                                    <td>
                                    <a onclick="return confirm('Bạn có chắc chắn muốn xóa')" href="?delid=<?php echo $result['catId'] ?>" class="img-link"class ="cat__link">Xoá</a>
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