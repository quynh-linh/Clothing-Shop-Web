<?php include '../classses/statistical.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
    <link rel="stylesheet" href="assets/font/themify-icons/themify-icons.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
    <link rel="stylesheet" href="assets/css/statistical.css">
    <link rel="stylesheet" href="assets/css/grid.css">
    <title>Thống kê</title>
</head>
<?php
$statistical = new statistical();
$getTongDoanhThu = $statistical->gettongKhachHang();
$demKH = 0;
while ($result = $getTongDoanhThu->fetch_assoc()) {
    $demKH++;
}
?>
<?php
$statistical = new statistical();
$getTongDoanhThu = $statistical->gettongSP();
$demSP = 0;
while ($result = $getTongDoanhThu->fetch_assoc()) {
    $demSP++;
}
?>
<?php
$statistical = new statistical();
$getTongAdmin = $statistical->gettongAdmin();
$result = $getTongAdmin->fetch_assoc();
$countAdmin = $result['countadmin'];
?>
<?php
$statistical = new statistical();
// Năm 2022 
$getTong2022 = $statistical->gettongSPTheoNam(2022);
$result2022 = $getTong2022->fetch_assoc();
$tongSPNam2022 = $result2022['value_count'];
$doanhThuNam2022 = $result2022['value_sumTT'];

?>
<style>
    #stacked,
    #pie-chart {
        min-height: 250px;
    }
</style>

<body>
    <?php include './inc/sidebar.php' ?>
    <div class="main-content">

        <div class="row">
            <div class="col-12 col-sm-offset-3 text-center">
                <div id="pie-chart"></div>
            </div>
            <div class="col-12 col-sm-offset-3 text-center">
                <div id="pie-chart"></div>
            </div>
        </div>
        <div class="col-12 text-center">
            <div id="stacked"></div>
        </div>
    </div>
</body>
<link rel='stylesheet' href='https://cdn.oesmith.co.uk/morris-0.5.1.css'>
<link rel="stylesheet" href="./style.css">
<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.2/raphael-min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.0/morris.min.js'></script>
<script text="text/javascript  ">
    var data = [{
                y: '2014',
                a: 50,
                b: 90
            },
            {
                y: '2015',
                a: 65,
                b: 75
            },
            {
                y: '2016',
                a: 50,
                b: 50
            },
            {
                y: '2017',
                a: 75,
                b: 60
            },
            {
                y: '2018',
                a: 80,
                b: 65
            },
            {
                y: '2019',
                a: 90,
                b: 70
            },
            {
                y: '2020',
                a: 100,
                b: 75
            },
            {
                y: '2021',
                a: 100,
                b: 100
            },
            {
                y: '2022',
                a: <?php echo $tongSPNam2022 ?>,
                b: <?php echo $doanhThuNam2022 ?>
            },
            {
                y: '2023',
                a: 145,
                b: 85
            },
            {
                y: '2024',
                a: 160,
                b: 95
            }
        ],
        config = {
            data: data,
            xkey: 'y',
            ykeys: ['a', 'b'],
            labels: ['Sản phẩm bán ra', 'Doanh thu'],
            fillOpacity: 0.6,
            hideHover: 'auto',
            behaveLikeLine: true,
            resize: true,
            pointFillColors: ['#ffffff'],
            pointStrokeColors: ['black'],
            lineColors: ['gray', 'red']
        };
    config.element = 'stacked';
    config.stacked = true;
    Morris.Bar(config);
    Morris.Donut({
        element: 'pie-chart',
        data: [{
                label: "Sản phẩm",
                value: <?php echo $demSP ?>
            },
            {
                label: "Nhân viên",
                value: <?php echo $countAdmin ?>
            },
            {
                label: "Khách hàng",
                value: <?php echo $demKH ?>
            }
        ]
    });
</script>

</html>