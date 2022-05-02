<?php include '../classses/user.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
    <link rel="stylesheet" href="assets/font/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="assets/css/thongtin.css">
    <title>Thông tin khách hàng</title>
</head>
<?php
$pd = new user();
if (isset($_GET['delid'])) {
    $id = $_GET['delid'];
    $delproduct = $pd->del_user($id);
}
?>

<body>
    <?php include './inc/sidebar.php' ?>
    <div class="main-content">
        <?php include './inc/header.php' ?>
        <main>
            <h2 class="dash-title">Thông tin khách hàng</h2>
            <section class="recent">
                <div class="activity-grid">
                    <div class="activity-card">
                        <div class="table-responsive">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Mã KH</th>
                                        <th>Tên khách hàng</th>
                                        <th>SĐT</th>
                                        <th>Địa chỉ</th>
                                        <th>Ngày sinh</th>
                                        <th>Giới tính</th>
                                        <th>Tổng số tiền đã mua</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <?php
                                $user = new user();
                                $showUser = $user->showKHAdmin();
                                while ($result = $showUser->fetch_assoc()) {
                                ?>
                                    <tbody>
                                        <tr>
                                            <td><?php echo $result['userId'] ?></td>
                                            <td><?php echo $result['name'] ?></td>
                                            <td><?php echo $result['sdt'] ?></td>
                                            <td><?php echo $result['diaChi'] ?></td>
                                            <td><?php echo $result['ngaySinh'] ?></td>
                                            <td><?php echo $result['gioiTinh'] ?></td>
                                            <td><?php echo number_format($result['sumTT'], 0, ',', '.') . "" . "đ" ?></td>
                                            <td>
                                                <a onclick="return confirm('Bạn có chắc chắn muốn xóa')" href="?delid=<?php echo $result['userId'] ?>">Xóa</a>
                                            </td>
                                            </td>
                                        </tr>
                                    </tbody>
                                <?php
                                }
                                ?>
                            </table>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </div>
</body>

</html>