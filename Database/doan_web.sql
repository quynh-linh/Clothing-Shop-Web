-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 15, 2022 lúc 11:44 AM
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
  `order_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_order`
--

INSERT INTO `tbl_order` (`orderId`, `productId`, `size`, `price`, `image`, `quantity`, `thanhtien`, `userId`, `order_time`, `status`) VALUES
(55, 58, 'L', '11500000', 'a84d252252.jpg', 3, 34500000, 5, '2022-05-15 09:09:38', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_pro`
--

CREATE TABLE `tbl_pro` (
  `ID` int(11) NOT NULL,
  `productName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_pro`
--

INSERT INTO `tbl_pro` (`ID`, `productName`) VALUES
(1, 'name'),
(2, 'tuấn'),
(3, 'tuấn'),
(4, 'tuấn'),
(5, 'tuấn'),
(6, 'tuấn'),
(7, 'ava'),
(8, 'ava'),
(9, 'cấcc'),
(10, 'cấcc');

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
(55, 'Áo Polo Gucci Logo-Patch Shirt Màu Xanh Lá', 40, 18, 'Áo Polo Gucci Logo-Patch Shirt Màu Xanh Lá là chiếc áo thời trang dành cho nam đến từ thương hiệu Gucci nổi tiếng. Với thiết kế hiện đại cùng họa tiết tinh tế nổi bật áoGucci Logo-Patch Shirt được nhiều tín đồ thời trang săn đón.', 0, '11000000', 'a5ce1e5572.jpg', 28),
(56, 'Áo Khoác Bomber Gucci Jacket Màu Xanh Navy Size ', 41, 18, 'Áo Khoác Bomber Gucci Jacket Màu Xanh Navy Size 44', 0, '5000000', '860d19c990.jpg', 34),
(57, 'Áo Khoác Bomber Gucci Jacket Màu Đen Size', 41, 18, 'Áo Khoác Bomber Gucci Jacket Màu Đen là chiếc áo thời trang dành cho nam đến từ thương hiệu Gucci nổi tiếng. Với thiết kế hiện đại cùng chất liệu cao cấp, chiếc áo Gucci Jacket Màu Đen được nhiều tín đồ thời trang săn đón.', 0, '6000000', '48babe3b85.jpg', 34),
(58, 'Áo Sơ Mi Gucci White Cotton Snake Embroidered Collar Duke Shirt', 40, 18, 'Áo Sơ Mi Gucci White Cotton Snake Embroidered Collar Duke Shirt Size 38 là chiếc áo thời trang dành cho nam đến từ thương hiệu Gucci nổi tiếng. Với thiết kế hiện đại cùng họa tiết tinh tế nổi bật áo Gucci White Cotton Snake Embroidered Collar Duke Shirt được nhiều tín đồ thời trang săn đón.', 0, '11500000', 'a84d252252.jpg', 29),
(59, 'Áo Cardigan Gucci Sweater 595514 XKA0Z 4206 Màu Xanh Navy', 41, 18, 'Áo Cardigan Gucci Sweater 595514 XKA0Z 4206 Màu Xanh Navy là chiếc áo thời trang dành cho nam đến từ thương hiệu Gucci nổi tiếng. Với thiết kế hiện đại cùng chất liệu cao cấp, chiếc áo Gucci Sweater 595514 XKA0Z 4206 Màu Xanh Navy được nhiều tín đồ thời trang săn đón.', 0, '30000000', '3dec240203.jpg', 34),
(60, 'Áo Dài Tay Gucci Web Stripe-Detail Polo Shirt Màu Đen', 40, 18, 'Áo Dài Tay Gucci Web Stripe-Detail Polo Shirt Màu Đen là chiếc áo thời trang dành cho nam đến từ thương hiệu Gucci nổi tiếng. Với thiết kế hiện đại cùng chất liệu cao cấp, chiếc áo Gucci Web Stripe-Detail Polo Shirt được nhiều tín đồ thời trang săn đón.', 0, '112560000', '1b792b54ed.jpg', 29),
(61, 'Áo Bomber Gucci Reversible Nylon GG Bomber Jacket Orange', 41, 18, 'Áo Bomber Gucci Reversible Nylon GG Bomber Jacket Orange là chiếc áo thời trang dành cho nam đến từ thương hiệu Gucci nổi tiếng. Với thiết kế hiện đại cùng chất liệu cao cấp, chiếc áo Gucci Reversible Nylon GG Bomber Jacket Orange được nhiều tín đồ thời trang săn đón.', 0, '2560000', '3354fdf70d.jpg', 34),
(62, 'Áo Sơ Mi Gucci Cotton Shirt With Symbols Màu Trắng ', 40, 18, 'Áo Sơ Mi Gucci Cotton Shirt With Symbols Màu Trắng là chiếc áo thời trang dành cho nam đến từ thương hiệu Gucci nổi tiếng. Với thiết kế hiện đại cùng họa tiết tinh tế nổi bật áo Gucci Cotton Shirt With Symbols được nhiều tín đồ thời trang săn đón.', 0, '25600000', '0bedfbdb7f.jpg', 29),
(63, 'Áo Polo Gucci Bee-Embroidered Slim-Fit Stretch-Cotton New SS2019 ', 40, 18, 'Áo Polo Gucci Bee-Embroidered Slim-Fit Stretch-Cotton New SS2019 Màu Đen được thiết kế cổ bẻ, tay ngắn cùng họa tiết con ong đặc trưng của Gucci tạo nên sự năng động, trẻ trung cho người mặc nhưng cũng không kém phần lịch lãm, sang trọng.', 0, '25600000', 'c0f99931c5.jpg', 28),
(64, 'Áo Polo Gucci Màu Xanh Viền Đỏ', 40, 18, 'Áo Polo Gucci Màu Xanh Viền Đỏ được thiết kế cổ bẻ, tay ngắn tạo nên sự năng động, trẻ trung cho người mặc nhưng cũng không kém phần lịch lãm, sang trọng. Với chất liệu 100% cotton, áo có mềm, mịn, thông thoáng tạo cảm giác thoải mái cho người mặc.', 0, '9000000', 'd9c66c0f90.jpg', 28),
(65, 'PARKA', 41, 30, ' Áo khoác parka có mũ trùm đầu bằng vải lanh và vải lanh\r\n\r\n• Lớp lót cắt lớp hình tam giác gợn sóng khâu tay có thể tháo rời • Khóa\r\n\r\nkéo giấu kín và nút đóng\r\n\r\n• Vừa vặn quá khổ\r\n\r\n Chất liệu: 60% cotton, 40% canvas\r\n• Màu sắc: Phấn\r\n Sản xuất tại: Italy', 0, '30000000', '5681815b98.jpg', 34),
(66, 'T-SHIRT', 40, 30, ' Áo phông nhuộm màu\r\n\r\n• Hình thêu tông màu \"Bottega\" ở mặt sau\r\n\r\n• Vừa vặn\r\n\r\n Chất liệu: 100% cotton\r\n• Màu sắc: Kiwi\r\n Sản xuất tại: Italy', 0, '56000000', 'bee7eedaa2.jpg', 29),
(67, 'COAT', 41, 30, '• Áo khoác cắt lớp intarsia tam giác gợn sóng khâu tay\r\n\r\n• Đai bằng vải\r\n\r\n• Không viền • Vừa\r\n\r\nvặn\r\n\r\n Chất liệu: 100% lông cừu\r\n• Màu sắc: Parakeet / Kiwi\r\n Sản xuất tại: Italy\r\n\r\nPhong cách: 647708V1KV07072', 0, '96000000', '0c5a4419ed.jpg', 34),
(68, 'SHORTS', 42, 30, ' Quần đùi thẳng bằng vải denim mềm với khóa cài vẹt đuôi dài 3 đường\r\n\r\n• Đóng cúc\r\n\r\n Chất liệu: 100% cotton\r\n• Màu sắc: Indigo\r\n Sản xuất tại: Italy', 0, '89000000', 'b416b41575.jpg', 38),
(69, 'ÁO KHOÁC', 41, 30, ' Áo khoác denim dệt kim với đường may khóa vẹt đuôi dài\r\n\r\n• Đóng cúc •\r\n\r\nKhông viền\r\n\r\n• Vừa vặn\r\n\r\n Chất liệu: 92% Cotton, 8% Polyester\r\n• Màu sắc: Xanh hải quân\r\n Sản xuất tại: Italy', 0, '7000000', '159cf726ce.jpg', 34),
(70, 'DRESS', 44, 30, 'Đầm xuyên thấu đan chéo bằng vải viscose pha ottoman\r\n\r\n• Đóng\r\n\r\nkhóa • Không viền • Vừa\r\n\r\nvặn\r\n\r\n Chất liệu: 63% Polyester, 37% Viscose\r\n• Màu sắc: Trắng / Đen\r\n Sản xuất tại: Italy', 1, '85200000', 'bf3ee98a96.jpg', 45),
(71, 'Váy nữ', 43, 30, 'Váy đan chéo mềm mại với lớp hoàn thiện chintz\r\n\r\n• Trang trí tua rua quanh cổ\r\n\r\n• Vừa vặn thoải mái\r\n\r\n Chất liệu: 100% Polyester\r\n• Màu đen\r\n Sản xuất tại: Italy', 1, '89000000', '45b2b29d11.jpg', 42),
(72, 'Áo len', 41, 30, ' Áo nịt len ​​hoa văn intreccio pha cotton • Đóng cúc\r\n\r\n• Vừa\r\n\r\nvặn\r\n\r\n Chất liệu: 61% Polyamide, 39% Cotton\r\n• Màu sắc: Parakeet\r\n Sản xuất tại: Italy', 1, '58900000', '6facb4dc25.jpg', 34),
(73, 'Quần đùi nữ', 42, 30, 'Quần đùi lót vải cotton pha cát • Cạp chun co giãn\r\n\r\nvới logo thêu ngược\r\n\r\n Chất liệu: 100% cotton\r\n• Màu trắng\r\n Sản xuất tại: Italy', 1, '4560000', '7ae82fe310.jpg', 39),
(74, 'Áo sơ mi', 40, 30, 'Áo sơ mi poplin co giãn\r\n\r\n• Đóng cúc\r\n\r\n• Vừa vặn\r\n\r\n Chất liệu: 96% Cotton, 4% Elastane\r\n• Màu sắc: Parakeet\r\n Sản xuất tại: Italy', 1, '6000000', '936e95c02b.jpg', 29);

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
  `diaChi` text COLLATE utf8_unicode_ci NOT NULL,
  `cauHoiBM` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_uer`
--

INSERT INTO `tbl_uer` (`userId`, `name`, `username`, `userPassword`, `email`, `gioiTinh`, `sdt`, `ngaySinh`, `diaChi`, `cauHoiBM`) VALUES
(5, 'Nguyễn Thanh Quỳnh Linh', 'thuy122', '202cb962ac59075b964b07152d234b70', 'nguyenthanhquynhlinh@gmail.com', 'Nam', 981984623, '2002-06-21', 'Hồ Chí Minh', 'Thanh');

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
-- Chỉ mục cho bảng `tbl_pro`
--
ALTER TABLE `tbl_pro`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`productId`),
  ADD KEY `brandId` (`brandId`),
  ADD KEY `catId` (`catId`),
  ADD KEY `typeProductId` (`typeProductId`);

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
  MODIFY `cartID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

--
-- AUTO_INCREMENT cho bảng `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `orderId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT cho bảng `tbl_pro`
--
ALTER TABLE `tbl_pro`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `productId` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT cho bảng `tbl_type_product`
--
ALTER TABLE `tbl_type_product`
  MODIFY `typeProductID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT cho bảng `tbl_uer`
--
ALTER TABLE `tbl_uer`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `tbl_cart`
--
ALTER TABLE `tbl_cart`
  ADD CONSTRAINT `tbl_cart_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `tbl_uer` (`userId`),
  ADD CONSTRAINT `tbl_cart_ibfk_2` FOREIGN KEY (`productId`) REFERENCES `tbl_product` (`productId`);

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
  ADD CONSTRAINT `tbl_product_ibfk_1` FOREIGN KEY (`brandId`) REFERENCES `tbl_brand` (`brandId`),
  ADD CONSTRAINT `tbl_product_ibfk_2` FOREIGN KEY (`catId`) REFERENCES `category` (`catId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_product_ibfk_3` FOREIGN KEY (`typeProductId`) REFERENCES `tbl_type_product` (`typeProductID`);

--
-- Các ràng buộc cho bảng `tbl_type_product`
--
ALTER TABLE `tbl_type_product`
  ADD CONSTRAINT `tbl_type_product_ibfk_1` FOREIGN KEY (`catID`) REFERENCES `category` (`catId`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
