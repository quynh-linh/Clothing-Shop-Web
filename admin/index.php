<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
    <link rel="stylesheet" href="assets/font/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <title>Admin</title>
</head>
<body>
    <?php include './inc/sidebar.php' ?>
         <div class="main-content">
            <?php include './inc/header.php' ?>
             <main>
                 <h2 class="dash-title">Tổng Quan</h2>

                 <div class="dash-cards">
                     <div class="card-single">
                             <div class="card-body">
                                <span class="ti-briefcase"> </span>
                                <div>
                                   <h5> Số dư hiện có </h5>
                                   <h4>300.000$</h4>
                                </div>
                             </div>
                             <div class="card-footer">
                                 <a href="">View all</a>
                             </div>
                     </div>
                     <div class="card-single">
                        <div class="card-body">
                           <span class="ti-reload"> </span>
                           <div>
                              <h5> Đang chờ xử lý</h5>
                              <h4>350.000$</h4>
                           </div>
                        </div>
                        <div class="card-footer">
                            <a href="">View all</a>
                        </div>
                     </div>
                     <div class="card-single">
                        <div class="card-body">
                           <span class="ti-check-box"> </span>
                           <div>
                              <h5> Đã xử lý</h5>
                              <h4>4.000.000$</h4>
                           </div>
                        </div>
                        <div class="card-footer">
                            <a href="">View all</a>
                        </div>
                     </div>
                 </div>
                 <section class="recent">
                    <div class="activity-grid">
                        <div class="activity-card">
                            <h3>Hoạt động gần đầy</h3>
                            <div class="table-responsive">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>Công việc</th>
                                            <th>Ngày bắt đầu</th>
                                            <th>Ngày kết thúc</th>
                                            <th>Thành viên phụ trách</th>
                                            <th>Tình trạng</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       <tr>
                                           <td>Nhập sản phẩm giày</td>
                                           <td>15 Aug , 2021</td>
                                           <td>22 Aug , 2021</td>
                                           <td class="td-team">
                                               <div class="img-1"></div>
                                               <div class="img-2"></div>
                                               <div class="img-3"></div>
                                           </td>
                                           <td>
                                               <span class="badge success">Success</span>
                                           </td>
                                       </tr>
                                       <tr>
                                        <td>Nhập dụng cụ thể thao</td>
                                        <td>15 Aug , 2021</td>
                                        <td>22 Aug , 2021</td>
                                        <td  class="td-team">
                                            <div class="img-1"></div>
                                            <div class="img-2"></div>
                                            <div class="img-3"></div>
                                        </td>
                                        <td>
                                            <span class="badge warning">Processing</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Thanh toán hoá đơn</td>
                                        <td>15 Aug , 2021</td>
                                        <td>22 Aug , 2021</td>
                                        <td  class="td-team">
                                            <div class="img-1"></div>
                                            <div class="img-2"></div>
                                            <div class="img-3"></div>
                                        </td>
                                        <td>
                                            <span class="badge success">Success</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Thanh toán thuế</td>
                                        <td>15 Aug , 2021</td>
                                        <td>22 Aug , 2021</td>
                                        <td  class="td-team">
                                            <div class="img-1"></div>
                                            <div class="img-2"></div>
                                            <div class="img-3"></div>
                                        </td>
                                        <td>
                                            <span class="badge warning">Processing</span>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="summary">
                            <div class="summary-card">
                                <div class="summary-single">
                                    <span class="ti-id-badge"></span>
                                    <div>
                                        <h5>196.000</h5>
                                        <small>Số lượng người truy cập</small>
                                    </div>
                                </div>
                                <div class="summary-single">
                                    <span class="ti-calendar"></span>
                                    <div>
                                        <h5>10.000</h5>
                                        <small>Số lượng vừa mới thoát</small>
                                    </div>
                                </div>
                                <div class="summary-single">
                                    <span class="ti-face-smile"></span>
                                    <div>
                                        <h5>198</h5>
                                        <small>Số lượng thành viên</small>
                                    </div>
                                </div>
                            </div>

                            <div class="bday-card">
                                <div class="bday-flex">
                                    <div class="bday-img"></div>
                                    <div class="bday-info">
                                        <h5>My is Linh</h5>
                                        <small>Birthday Today</small>
    
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button><span class="ti-gift"></span>
                                        Wish him
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                 </section>
             </main>
         </div>
</body>
</html>