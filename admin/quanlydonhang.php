<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
    <link rel="stylesheet" href="assets/font/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="assets/css/donhang.css">
    <title>Quản lý đơn hàng</title>
</head>
<body>
    <?php include './inc/sidebar.php' ?>
    <div class="main-content">
        <?php include './inc/header.php' ?>
        <main>
            <section class="recent">
            <div class="activity-grid">
                <div class="activity-card">
                        <div class="activity-select">
                            <div class="activity-selec-1">
                                <select name="" id="">
                                    <option value="C1">Sắp xếp theo khoảng thời gian</option>
                                    <option value="C1">Ban đầu</option>
                                    <option value="C1">Gần đây nhất</option>
                                </select>
                            </div>
                            <div class="activity-selec-2">
                                <select name="" id="">
                                    <option value="C1">Sắp xếp theo giá tiền</option>
                                    <option value="C1">Từ thấp đến cao</option>
                                    <option value="C1">Từ cao đến thấp</option>
                                </select>
                            </div>
                        </div>
                    <div class="table-responsive">
                        <table>
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Mã đơn hàng</th>
                                    <th>Tên khách hàng</th>
                                    <th>Ngày đặt</th>
                                    <th>Hình thức</th>
                                    <th>Trạng thái</th>
                                    <th>Xem chi tiết</th>
                                    <th>Tác vụ</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <input type="radio" name="animal" id="check" >
                                    </td>
                                    <td>MDL-21</td>
                                    <td>Nguyễn văn A</td>
                                    <td>
                                        20-11-2021
                                    </td>
                                    <td>
                                        Chuyển khoản
                                    </td>
                                    <td>
                                        <span class="td-delivering">Đang giao</span>
                                    </td>
                                    <td>
                                    <a href="">Xem chi tiết</a>
                                    </td>
                                    <td>
                                    <span class="ti-check_success ti-check"></span>
                                    </td>
                                </tr>
                                <tr>
                                <td>
                                    <input type="radio" name="animal" id="check" >
                                </td>
                                <td>MDL-22</td>
                                <td>Nguyễn văn B</td>
                                <td>
                                    20-11-2021
                                </td>
                                <td>
                                    Chuyển khoản
                                </td>
                                <td>
                                    <span class="td-not-give">Chưa giao</span>
                                </td>
                                <td>
                                <a href="">Xem chi tiết</a>
                                </td>
                                <td>
                                    <span class="ti-close_warning ti-close"></span>
                                </td>
                                </tr>
                                <tr>
                                <td>
                                    <input type="radio" name="animal" id="check" >
                                </td>
                                <td>MDL-23</td>
                                <td>Nguyễn văn C</td>
                                <td>
                                    20-11-2021
                                </td>
                                <td>
                                    Chuyển khoản
                                </td>
                                <td>
                                    <span class="td-not-give">Chưa giao</span>
                                </td>
                                <td>
                                <a href="">Xem chi tiết</a>
                                </td>
                                <td>
                                    <span class="ti-close_warning ti-close"></span>
                                </td>
                                </tr>
                                <tr>
                                <td>
                                    <input type="radio" name="animal" id="check" >
                                </td>
                                <td>MDL-24</td>
                                <td>Nguyễn văn D</td>
                                <td>
                                    20-11-2021
                                </td>
                                <td>
                                    Chuyển khoản
                                </td>
                                <td>
                                    <span class="td-delivering">Đang giao</span>
                                </td>
                                <td>
                                <a href="">Xem chi tiết</a>
                                </td>
                                <td>
                                    <span class="ti-check_success ti-check"></span>
                                </td>
                                </tr>
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