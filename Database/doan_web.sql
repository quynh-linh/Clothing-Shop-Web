-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 28, 2022 lúc 08:21 PM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `doan_web`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `catId` int(11) NOT NULL,
  `catName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`catId`, `catName`) VALUES
(40, 'ÁO'),
(41, 'ÁO KHOÁC'),
(42, 'QUẦN &amp; JUMPSUIT'),
(43, 'CHÂN VÁY'),
(44, 'ĐẦM'),
(45, 'ĐỒ LÓT');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `adminId` int(11) NOT NULL,
  `adminName` varchar(255) NOT NULL,
  `adminEmail` varchar(150) NOT NULL,
  `adminUser` varchar(255) NOT NULL,
  `adminPass` varchar(255) NOT NULL,
  `level` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_admin`
--

INSERT INTO `tbl_admin` (`adminId`, `adminName`, `adminEmail`, `adminUser`, `adminPass`, `level`) VALUES
(1, 'QuỳnhLinh', 'dd@gmail.com', 'linh22', '202cb962ac59075b964b07152d234b70', ''),
(5, 'My Tom', 'linh@gmail.com', 'tom2105', 'c56d0e9a7ccec67b4ea131655038d604', '12');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_brand`
--

CREATE TABLE `tbl_brand` (
  `brandId` int(11) NOT NULL,
  `brandName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_brand`
--

INSERT INTO `tbl_brand` (`brandId`, `brandName`) VALUES
(14, 'Gucci'),
(15, 'IVY moda'),
(16, 'Chanel'),
(17, 'Hermès'),
(18, 'Gucci'),
(19, 'Louis Vuitton'),
(20, 'Prada'),
(21, 'Dior'),
(22, 'Burberry'),
(23, 'Dolce &amp; Gabbana'),
(24, 'Ralph Lauren'),
(25, 'Versace'),
(26, 'Armani'),
(27, 'Givenchy'),
(28, 'FENDI'),
(29, 'Yves Saint Laurent'),
(30, 'Bottega Veneta'),
(31, 'MESSI');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_cart`
--

CREATE TABLE `tbl_cart` (
  `cartID` int(11) NOT NULL,
  `productId` int(11) NOT NULL,
  `sessionId` varchar(255) NOT NULL,
  `productName` varchar(255) NOT NULL,
  `size` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `quantity` int(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `userId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_order`
--

CREATE TABLE `tbl_order` (
  `orderId` int(11) NOT NULL,
  `productId` int(11) NOT NULL,
  `size` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `thanhtien` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `order_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_product`
--

CREATE TABLE `tbl_product` (
  `productId` int(100) NOT NULL,
  `productName` tinytext NOT NULL,
  `catId` int(110) NOT NULL,
  `brandId` int(110) NOT NULL,
  `product_desc` text NOT NULL,
  `type` int(11) NOT NULL,
  `price` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `typeProductId` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_product`
--

INSERT INTO `tbl_product` (`productId`, `productName`, `catId`, `brandId`, `product_desc`, `type`, `price`, `image`, `typeProductId`) VALUES
(40, 'MESSI LEGEND 10 GRAPHIC HOODIE', 41, 31, 'Once a legend, always a legend.\r\n\r\nCelebrate Leo\'s legendary career at Barcelona with the Legend 10 capsule collection. One of his most iconic moments at Barca memorialized forever on t-shirts and hoodies.\r\n\r\nThank you, Leo.\r\n\r\nWho knew that the softest hoodie you\'ll ever own comes with such a cool design. You won\'t regret buying this classic streetwear piece of apparel with a convenient pouch pocket and warm hood for chilly evenings.\r\n\r\n• 100% cotton face\r\n• 65% ring-spun cotton, 35% polyester\r\n• Front pouch pocket\r\n• Self-fabric patch on the back\r\n• Matching flat drawstrings\r\n• 3-panel hood', 0, '5500000', '5f9e40a0ca.webp', 34),
(41, 'MESSI LEGEND 10 GRAPHIC HOODIE', 41, 31, 'Once a legend, always a legend.\r\n\r\nCelebrate Leo\'s legendary career at Barcelona with the Legend 10 capsule collection. One of his most iconic moments at Barca memorialized forever on t-shirts and hoodies.\r\n\r\nThank you, Leo.\r\n\r\nWho knew that the softest hoodie you\'ll ever own comes with such a cool design. You won\'t regret buying this classic streetwear piece of apparel with a convenient pouch pocket and warm hood for chilly evenings.\r\n\r\n• 100% cotton face\r\n• 65% ring-spun cotton, 35% polyester\r\n• Front pouch pocket\r\n• Self-fabric patch on the back\r\n• Matching flat drawstrings\r\n• 3-panel hood', 0, '5500000', 'd8415a1c47.webp', 34),
(42, 'MESSI LEGEND GRAPHIC T-SHIRT', 40, 31, 'Messi Legend Painting is now available on t-shirt. \r\n\r\nApril 23, 2017. The date that Leo Messi changed the celebration game forever after he secured a priceless 3-2 victory over Real Madrid. After scoring the late winning goal, Leo raised his shirt in celebration to the crowd: a truly legendary moment. \r\n\r\nThis t-shirt is everything you\'ve dreamed of and more. It feels soft and lightweight, with the right amount of stretch. It\'s comfortable and flattering for both men and women.\r\n\r\n• 100% combed and ring-spun cotton (Heather colors contain polyester)\r\n• Heather colors are 52% combed and ring-spun cotton, 48% polyester\r\n• Athletic Heather are 90% combed and ring-spun cotton, 10% polyester\r\n• Fabric weight: 4.2 oz (142 g/m2)\r\n• Pre-shrunk fabric\r\n• Shoulder-to-shoulder taping\r\n• Side-seamed', 0, '4000000', 'd4eb3c2c80.webp', 28),
(43, 'MESSI LEGEND 10 GRAPHIC T-SHIRT', 40, 31, 'Once a legend, always a legend.\r\n\r\nCelebrate Leo\'s legendary career at Barcelona with the Legend 10 capsule collection. One of his most iconic moments at Barca memorialized forever on t-shirts and hoodies.\r\n\r\nThank you, Leo.\r\n\r\nThis t-shirt is everything you\'ve dreamed of and more. It feels soft and lightweight, with the right amount of stretch. It\'s comfortable and flattering for both men and women.\r\n\r\n• 100% combed and ring-spun cotton (Heather colors contain polyester)\r\n• Heather colors are 52% combed and ring-spun cotton, 48% polyester\r\n• Athletic Heather is 90% combed and ring-spun cotton, 10% polyester\r\n• Fabric weight: 4.2 oz (142 g/m2)\r\n• Pre-shrunk fabric\r\n• Side-seamed construction\r\n• Shoulder-to-shoulder taping', 0, '3000000', 'a724fe8c0a.webp', 28),
(44, 'MESSI SILHOUETTE GRAPHIC HOODIE', 41, 31, 'If you know Leo, you know his iconic celebration after he scores: pointing each of his index fingers up to the sky. For many, this has turned into a symbol of celebration, success, hope, and more. What does it mean to you?\r\n\r\nWho knew that the softest hoodie you\'ll ever own comes with such a cool design. You won\'t regret buying this classic streetwear piece of apparel with a convenient pouch pocket and warm hood for chilly evenings.\r\n\r\n• 100% cotton face\r\n• 65% ring-spun cotton, 35% polyester\r\n• Front pouch pocket\r\n• Self-fabric patch on the back\r\n• Matching flat drawstrings\r\n• 3-panel hood', 0, '10000000', 'd185ca7e43.webp', 34),
(45, 'ICONIC MESSI PORTRAIT WOMEN\'S GRAPHIC T-SHIRT', 40, 31, 'The much anticipated limited-edition Leo Messi portrait graphic tee is here, now available in women\'s sizes. Iconic Messi portrait graphic tee in honor of Leo\'s legendary career.\r\n\r\nYour typical 100% cotton t-shirt.\r\n\r\n• 100% jersey knit\r\n• Pre-shrunk\r\n• Seamless, double-need ⅞” collar\r\n• Taped neck and shoulders\r\n• Classic fit', 1, '5000000', '4aa6267446.webp', 28),
(46, 'SIXTH BALLON D\'OR GRAPHIC WOMEN\'S GRAPHIC T-SHIRT', 40, 31, 'Now available in women\'s sizes.\r\n\r\n2009. 2010. 2011. 2012. 2015. 2019 = The years that Leo was awarded the iconic Ballon d\'Or trophy! Celebrate this historic accomplishment with the Sixth Ballon d\'Or Graphic T-Shirt - showcasing the six trophies on the front of the shirt, for everyone to see.\r\n\r\nThis t-shirt is everything you\'ve dreamed of and more. It feels soft and lightweight, with the right amount of stretch.\r\n\r\nYour typical 100% cotton t-shirt.\r\n\r\n• 100% jersey knit\r\n• Pre-shrunk\r\n• Seamless, double-need ⅞” collar\r\n• Taped neck and shoulders\r\n• Classic fit', 1, '7000000', '78fc3013d5.webp', 28);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_type_product`
--

CREATE TABLE `tbl_type_product` (
  `typeProductID` int(100) NOT NULL,
  `typeProductName` varchar(255) NOT NULL,
  `catID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_type_product`
--

INSERT INTO `tbl_type_product` (`typeProductID`, `typeProductName`, `catID`) VALUES
(28, 'Áo thun', 40),
(29, 'Áo sơ mi', 40),
(30, 'Áo peplum', 40),
(31, 'Áo kiểu', 40),
(32, 'Áo croptop', 40),
(33, 'Áo len', 40),
(34, 'Áo khoác', 41),
(35, 'Áo blazer', 41),
(36, 'Áo vest', 41),
(37, 'Áo măng tô', 41),
(38, 'Quần jeans', 42),
(39, 'Quần dài', 42),
(40, 'Quần lửng/short', 42),
(41, 'Jumpsuit', 42),
(42, 'Chân Váy', 43),
(43, 'Chân váy xếp ly', 43),
(44, 'Chân váy chữ A', 43),
(45, 'Đầm', 44),
(46, 'Đầm maxi/voan', 44),
(47, 'Đầm thun', 44),
(48, 'Senora - Đầm dạ hội', 44),
(49, 'Đồ lót', 45),
(50, 'Áo bra', 45),
(51, 'Quần lót', 45),
(52, 'Pyjama', 45),
(53, 'Bikini', 45);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_uer`
--

CREATE TABLE `tbl_uer` (
  `userId` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `userPassword` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gioiTinh` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sdt` int(11) NOT NULL,
  `ngaySinh` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `diaChi` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_uer`
--

INSERT INTO `tbl_uer` (`userId`, `name`, `username`, `userPassword`, `email`, `gioiTinh`, `sdt`, `ngaySinh`, `diaChi`) VALUES
(3, 'Nguyễn Thanh Quỳnh Linh', 'linh2106', '202cb962ac59075b964b07152d234b70', 'linh@gmail.com', 'Nam', 11111111, '22/06/2002', 'Phường 4 , Quận 5 , Thành phố hồ chí minh'),
(4, 'Thùy Linh', 'thuy122', '202cb962ac59075b964b07152d234b70', 'thuylinh2203@gmail.com', 'Nam', 2147483647, '22/06/2002', 'Hồ Chí Minh');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`catId`);

--
-- Chỉ mục cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`adminId`);

--
-- Chỉ mục cho bảng `tbl_brand`
--
ALTER TABLE `tbl_brand`
  ADD PRIMARY KEY (`brandId`);

--
-- Chỉ mục cho bảng `tbl_cart`
--
ALTER TABLE `tbl_cart`
  ADD PRIMARY KEY (`cartID`),
  ADD KEY `productId` (`productId`),
  ADD KEY `userId` (`userId`);

--
-- Chỉ mục cho bảng `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`orderId`),
  ADD KEY `productId` (`productId`),
  ADD KEY `userId` (`userId`);

--
-- Chỉ mục cho bảng `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`productId`),
  ADD KEY `brandId` (`brandId`),
  ADD KEY `catId` (`catId`),
  ADD KEY `tbl_product_ibfk_3` (`typeProductId`);

--
-- Chỉ mục cho bảng `tbl_type_product`
--
ALTER TABLE `tbl_type_product`
  ADD PRIMARY KEY (`typeProductID`),
  ADD KEY `tbl_type_product_ibfk_1` (`catID`);

--
-- Chỉ mục cho bảng `tbl_uer`
--
ALTER TABLE `tbl_uer`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `catId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `adminId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `tbl_brand`
--
ALTER TABLE `tbl_brand`
  MODIFY `brandId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT cho bảng `tbl_cart`
--
ALTER TABLE `tbl_cart`
  MODIFY `cartID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT cho bảng `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `orderId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT cho bảng `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `productId` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT cho bảng `tbl_type_product`
--
ALTER TABLE `tbl_type_product`
  MODIFY `typeProductID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT cho bảng `tbl_uer`
--
ALTER TABLE `tbl_uer`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `tbl_cart`
--
ALTER TABLE `tbl_cart`
  ADD CONSTRAINT `tbl_cart_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `tbl_uer` (`userId`);

--
-- Các ràng buộc cho bảng `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD CONSTRAINT `tbl_order_ibfk_1` FOREIGN KEY (`productId`) REFERENCES `tbl_product` (`productId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_order_ibfk_2` FOREIGN KEY (`userId`) REFERENCES `tbl_uer` (`userId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD CONSTRAINT `tbl_product_ibfk_1` FOREIGN KEY (`brandId`) REFERENCES `tbl_brand` (`brandId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_product_ibfk_2` FOREIGN KEY (`catId`) REFERENCES `category` (`catId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_product_ibfk_3` FOREIGN KEY (`typeProductId`) REFERENCES `tbl_type_product` (`typeProductID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `tbl_type_product`
--
ALTER TABLE `tbl_type_product`
  ADD CONSTRAINT `tbl_type_product_ibfk_1` FOREIGN KEY (`catID`) REFERENCES `category` (`catId`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
