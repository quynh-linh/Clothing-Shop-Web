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
    if(isset($_GET['catid']) && $_GET['catid']!=NULL){
        $id = $_GET['catid'];
    }
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $catName = $_POST['catName'];
        $updateCat = $cat->update_category($catName,$id);
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
                    </div>
                    <!-- phần hiển thị thông báo kết quả khi cập nhập -->
                    <?php
                        if(isset($updateCat)){
                            echo $updateCat;
                        }
                    ?>
                    <?php
                    $get_cate_name = $cat->getcatbyId($id);
                    if ($get_cate_name) {
                        while ($result = $get_cate_name->fetch_assoc()) {
                     ?>
                    <form action="" method="post">
                    <table class="form" style="border-collapse: inherit;">					
                        <tr>
                            <td>
                                <input type="text" value="<?php echo $result['catName']  ?>" name="catName" placeholder="Sửa sản phẩm" class="medium" style="width: 50%;text-align: center;padding: 10px;border-radius: 6px;font-size: 20px;" />
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