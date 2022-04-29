<?php include './inc/handle.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liên Hệ</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">
    <link rel="stylesheet" type="text/css" href="assets/css/grid.css">
    <link rel="stylesheet" type="text/css" href="assets/css/base.css">
    <link rel="stylesheet" type="text/css" href="assets/css/gioithieu.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:wght@300&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/font/themify-icons/themify-icons.css">
    <link rel="shortcut icon" href="assets/img/favicon_created_by_logaster.ico" type="image/x-icon">
    <script src="./assets/js/product.js"></script>
</head>

<body>
    <section class="app">
        <div class="grid">
            <!-- Phần header -->
            <?php include 'inc/header.php' ?>
        </div>
        <div class="app_search">
            <div class="grid wide">
                <div class="contact">
                    <div class="row">
                        <div class="col l-6">
                            <h1>Liên hệ</h1>
                            <div class="app_contact">
                                <div class="ti-location-pin">1035 Đ. Phạm Văn Đồng, P. Yên Thế, Thành phố Pleiku, Gia Lai</div>
                                <div class="ti-headphone-alt"> 0981984623</div>
                                <div class="ti-envelope"> nguyenthanhquynhlinh@gmail.com</div>
                            </div>
                            <h1>Form Liên hệ</h1>
                            <div class="contact-form">
                                <div class="contact-name">
                                    <input type="text" id="fname" name="fname" placeholder="Họ và tên">
                                    <input type="text" id="lname" name="lname" placeholder="Email">
                                </div>
                                <div class="contact-phone">
                                    <input type="text" id="phone" placeholder="Số điện thoại">
                                </div>

                                <div class="contact-mess">
                                    <input type="text" id="mess" name="lname" placeholder="Tin nhắn">
                                </div>
                                <div class="contact-BTN">
                                    <button>GỬI</button>
                                </div>
                            </div>

                        </div>
                        <div class="col l-6">
                            <div class="contact-map">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3870.604349031107!2d107.98469771414605!3d14.041451294299973!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x316c1e9b44a1a965%3A0xa1efec44aff77c87!2zMTAzNSDEkC4gUGjhuqFtIFbEg24gxJDhu5NuZywgUC4gWcOqbiBUaOG6vywgVGjDoG5oIHBo4buRIFBsZWlrdSwgR2lhIExhaSA2MDAwMDAsIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1641113272639!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
</body>

</html>