-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 31, 2022 lúc 05:14 AM
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
-- Cấu trúc bảng cho bảng `tbl_comment`
--

CREATE TABLE `tbl_comment` (
  `id` int(11) NOT NULL,
  `namebl` varchar(30) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `productId` int(11) NOT NULL,
  `dateComment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_comment`
--

INSERT INTO `tbl_comment` (`id`, `namebl`, `comment`, `productId`, `dateComment`) VALUES
(41, 'manhne', 'quas depluoon', 71, ''),
(42, 'manhne', 'hi', 71, ''),
(43, 'manhne', 'quá tuyet zoi', 71, ''),
(44, 'thuy122', 'okebyby', 71, ''),
(45, 'thuy122', 'hihihi', 71, ''),
(46, 'thuy122', 'hh', 71, ''),
(47, 'thuy122', 'qus tuyet zoi', 70, ''),
(48, 'thuy122', 'Sản phẩm đẹp quá', 71, ''),
(49, 'thuy122', 'qua dep lun anh oi', 58, ''),
(50, 'thuy122', 'okey bayby', 58, ''),
(51, 'thuy122', 'abc', 56, ''),
(52, 'thuy122', 'đá', 71, ''),
(53, 'thuy122', 'ádasd', 71, ''),
(54, 'thuy122', 'Đép quá', 55, '31/05/2022'),
(55, 'thuy122', 'gẻ', 55, '31/05/2022'),
(56, 'khanhlinh', 'sản phẩm đẹp', 81, '31/05/2022');

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
  `order_time` datetime NOT NULL,
  `recieve_time` datetime NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_order`
--

INSERT INTO `tbl_order` (`orderId`, `productId`, `size`, `price`, `image`, `quantity`, `thanhtien`, `userId`, `order_time`, `recieve_time`, `status`) VALUES
(56, 74, 'M', '6000000', '936e95c02b.jpg', 2, 12000000, 5, '2022-05-30 11:04:55', '2022-05-30 11:12:50', 4),
(57, 74, 'M', '6000000', '936e95c02b.jpg', 1, 6000000, 5, '2022-05-30 11:23:16', '2022-05-30 11:23:32', 4),
(58, 74, 'M', '6000000', '936e95c02b.jpg', 1, 6000000, 5, '2022-05-30 11:26:18', '0000-00-00 00:00:00', -1),
(59, 81, 'M', '1190000', 'f29695aac5.jfif', 19, 22610000, 5, '2022-05-31 00:51:26', '2022-05-31 00:52:29', 2),
(60, 77, 'L', '750000', '3a92fe9b64.jfif', 7, 5250000, 5, '2022-05-31 00:51:26', '2022-05-31 00:52:29', 2),
(61, 96, 'XL', '990000', 'f5a062b608.jfif', 2, 1980000, 5, '2022-05-31 00:51:26', '2022-05-31 00:52:29', 2),
(62, 88, 'M', '1690000', 'c6e718b57c.jfif', 3, 5070000, 5, '2022-05-31 00:51:26', '2022-05-31 00:52:29', 2),
(63, 79, 'S', '1369000', '428bb42f4d.jfif', 3, 4107000, 5, '2022-05-31 00:51:26', '2022-05-31 00:52:29', 2),
(64, 82, 'M', '1490000', 'a5f20177f0.jfif', 5, 7450000, 5, '2022-05-31 00:51:26', '2022-05-31 00:52:29', 2),
(65, 92, 'L', '1190000', 'ce32e86223.jfif', 6, 7140000, 5, '2022-05-31 00:51:26', '2022-05-31 00:52:29', 2),
(66, 91, 'M', '1090000', 'bd9400c2f4.jpg', 4, 4360000, 5, '2022-05-31 00:51:26', '2022-05-31 00:52:29', 2),
(67, 93, 'M', '1745000', '2b18d3adeb.jfif', 1, 1745000, 5, '2022-05-31 00:51:26', '2022-05-31 00:52:29', 2),
(68, 98, 'M', '548000', '59848e5c59.jfif', 10, 5480000, 5, '2022-05-31 00:57:50', '2022-05-31 00:58:35', 2),
(69, 95, 'M', '790000', '63afc5eb72.jfif', 5, 3950000, 5, '2022-05-31 00:57:50', '2022-05-31 00:58:35', 2),
(70, 103, 'M', '390000', '3e372328c0.jfif', 7, 2730000, 5, '2022-05-31 00:57:50', '2022-05-31 00:58:35', 2),
(71, 100, 'XL', '598000', '5a320bc109.jfif', 13, 7774000, 5, '2022-05-31 00:57:50', '2022-05-31 00:58:35', 2),
(72, 88, 'L', '1690000', 'c6e718b57c.jfif', 13, 21970000, 5, '2022-05-31 00:57:50', '2022-05-31 00:58:35', 2),
(73, 84, 'M', '950000', '7c81aa945b.jfif', 7, 6650000, 5, '2022-05-31 00:57:50', '2022-05-31 00:58:35', 2),
(74, 89, 'M', '1790000', '8ec266b465.jfif', 1, 1790000, 5, '2022-05-31 00:57:50', '2022-05-31 00:58:35', 2),
(75, 102, 'L', '698000', '5567c155a3.jfif', 1, 698000, 5, '2022-05-31 00:57:50', '2022-05-31 00:58:35', 2),
(76, 92, 'XL', '1190000', 'ce32e86223.jfif', 3, 3570000, 5, '2022-05-31 00:57:50', '2022-05-31 00:58:35', 2),
(77, 103, 'S', '390000', '3e372328c0.jfif', 4, 1560000, 8, '2022-05-31 07:59:05', '0000-00-00 00:00:00', 1),
(78, 77, 'M', '750000', '3a92fe9b64.jfif', 3, 2250000, 8, '2022-05-31 07:59:16', '0000-00-00 00:00:00', 0),
(79, 81, 'S', '1190000', 'f29695aac5.jfif', 6, 7140000, 10, '2022-05-31 09:40:40', '2022-05-31 09:41:17', 3),
(80, 88, 'S', '1690000', 'c6e718b57c.jfif', 11, 18590000, 10, '2022-05-31 09:40:40', '2022-05-31 09:41:17', 3);

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
  `price` bigint(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `typeProductId` int(100) NOT NULL,
  `quantity` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_product`
--

INSERT INTO `tbl_product` (`productId`, `productName`, `catId`, `brandId`, `product_desc`, `type`, `price`, `image`, `typeProductId`, `quantity`) VALUES
(55, 'Áo Polo Gucci Logo-Patch Shirt Màu Xanh Lá', 40, 18, 'Áo Polo Gucci Logo-Patch Shirt Màu Xanh Lá là chiếc áo thời trang dành cho nam đến từ thương hiệu Gucci nổi tiếng. Với thiết kế hiện đại cùng họa tiết tinh tế nổi bật áoGucci Logo-Patch Shirt được nhiều tín đồ thời trang săn đón.', 0, 11000000, 'a5ce1e5572.jpg', 28, 0),
(56, 'Áo Khoác Bomber Gucci Jacket Màu Xanh Navy Size ', 41, 18, 'Áo Khoác Bomber Gucci Jacket Màu Xanh Navy Size 44', 0, 5000000, '860d19c990.jpg', 34, 0),
(57, 'Áo Khoác Bomber Gucci Jacket Màu Đen Size', 41, 18, 'Áo Khoác Bomber Gucci Jacket Màu Đen là chiếc áo thời trang dành cho nam đến từ thương hiệu Gucci nổi tiếng. Với thiết kế hiện đại cùng chất liệu cao cấp, chiếc áo Gucci Jacket Màu Đen được nhiều tín đồ thời trang săn đón.', 0, 6000000, '48babe3b85.jpg', 34, 0),
(58, 'Áo Sơ Mi Gucci White Cotton Snake Embroidered Collar Duke Shirt', 40, 18, 'Áo Sơ Mi Gucci White Cotton Snake Embroidered Collar Duke Shirt Size 38 là chiếc áo thời trang dành cho nam đến từ thương hiệu Gucci nổi tiếng. Với thiết kế hiện đại cùng họa tiết tinh tế nổi bật áo Gucci White Cotton Snake Embroidered Collar Duke Shirt được nhiều tín đồ thời trang săn đón.', 0, 11500000, 'a84d252252.jpg', 29, 0),
(59, 'Áo Cardigan Gucci Sweater 595514 XKA0Z 4206 Màu Xanh Navy', 41, 18, 'Áo Cardigan Gucci Sweater 595514 XKA0Z 4206 Màu Xanh Navy là chiếc áo thời trang dành cho nam đến từ thương hiệu Gucci nổi tiếng. Với thiết kế hiện đại cùng chất liệu cao cấp, chiếc áo Gucci Sweater 595514 XKA0Z 4206 Màu Xanh Navy được nhiều tín đồ thời trang săn đón.', 0, 300000, '3dec240203.jpg', 34, 5),
(60, 'Áo Dài Tay Gucci Web Stripe-Detail Polo Shirt Màu Đen', 40, 18, 'Áo Dài Tay Gucci Web Stripe-Detail Polo Shirt Màu Đen là chiếc áo thời trang dành cho nam đến từ thương hiệu Gucci nổi tiếng. Với thiết kế hiện đại cùng chất liệu cao cấp, chiếc áo Gucci Web Stripe-Detail Polo Shirt được nhiều tín đồ thời trang săn đón.', 0, 1125600, '1b792b54ed.jpg', 29, 7),
(61, 'Áo Bomber Gucci Reversible Nylon GG Bomber Jacket Orange', 41, 18, 'Áo Bomber Gucci Reversible Nylon GG Bomber Jacket Orange là chiếc áo thời trang dành cho nam đến từ thương hiệu Gucci nổi tiếng. Với thiết kế hiện đại cùng chất liệu cao cấp, chiếc áo Gucci Reversible Nylon GG Bomber Jacket Orange được nhiều tín đồ thời trang săn đón.', 0, 2560000, '3354fdf70d.jpg', 34, 0),
(62, 'Áo Sơ Mi Gucci Cotton Shirt With Symbols Màu Trắng ', 40, 18, 'Áo Sơ Mi Gucci Cotton Shirt With Symbols Màu Trắng là chiếc áo thời trang dành cho nam đến từ thương hiệu Gucci nổi tiếng. Với thiết kế hiện đại cùng họa tiết tinh tế nổi bật áo Gucci Cotton Shirt With Symbols được nhiều tín đồ thời trang săn đón.', 0, 25600000, '0bedfbdb7f.jpg', 29, 0),
(63, 'Áo Polo Gucci Bee-Embroidered Slim-Fit Stretch-Cotton New SS2019 ', 40, 18, 'Áo Polo Gucci Bee-Embroidered Slim-Fit Stretch-Cotton New SS2019 Màu Đen được thiết kế cổ bẻ, tay ngắn cùng họa tiết con ong đặc trưng của Gucci tạo nên sự năng động, trẻ trung cho người mặc nhưng cũng không kém phần lịch lãm, sang trọng.', 0, 25600000, 'c0f99931c5.jpg', 28, 0),
(64, 'Áo Polo Gucci Màu Xanh Viền Đỏ', 40, 18, 'Áo Polo Gucci Màu Xanh Viền Đỏ được thiết kế cổ bẻ, tay ngắn tạo nên sự năng động, trẻ trung cho người mặc nhưng cũng không kém phần lịch lãm, sang trọng. Với chất liệu 100% cotton, áo có mềm, mịn, thông thoáng tạo cảm giác thoải mái cho người mặc.', 0, 9000000, 'd9c66c0f90.jpg', 28, 0),
(65, 'PARKA', 41, 30, ' Áo khoác parka có mũ trùm đầu bằng vải lanh và vải lanh\r\n\r\n• Lớp lót cắt lớp hình tam giác gợn sóng khâu tay có thể tháo rời • Khóa\r\n\r\nkéo giấu kín và nút đóng\r\n\r\n• Vừa vặn quá khổ\r\n\r\n Chất liệu: 60% cotton, 40% canvas\r\n• Màu sắc: Phấn\r\n Sản xuất tại: Italy', 0, 30000000, '5681815b98.jpg', 34, 0),
(66, 'T-SHIRT', 40, 30, ' Áo phông nhuộm màu\r\n\r\n• Hình thêu tông màu \"Bottega\" ở mặt sau\r\n\r\n• Vừa vặn\r\n\r\n Chất liệu: 100% cotton\r\n• Màu sắc: Kiwi\r\n Sản xuất tại: Italy', 0, 560000, 'bee7eedaa2.jpg', 29, 101),
(67, 'COAT', 41, 30, '• Áo khoác cắt lớp intarsia tam giác gợn sóng khâu tay\r\n\r\n• Đai bằng vải\r\n\r\n• Không viền • Vừa\r\n\r\nvặn\r\n\r\n Chất liệu: 100% lông cừu\r\n• Màu sắc: Parakeet / Kiwi\r\n Sản xuất tại: Italy\r\n\r\nPhong cách: 647708V1KV07072', 0, 9600000, '0c5a4419ed.jpg', 34, 10),
(68, 'SHORTS', 42, 30, ' Quần đùi thẳng bằng vải denim mềm với khóa cài vẹt đuôi dài 3 đường\r\n\r\n• Đóng cúc\r\n\r\n Chất liệu: 100% cotton\r\n• Màu sắc: Indigo\r\n Sản xuất tại: Italy', 0, 890000, 'b416b41575.jpg', 38, 10),
(69, 'ÁO KHOÁC', 41, 30, ' Áo khoác denim dệt kim với đường may khóa vẹt đuôi dài\r\n\r\n• Đóng cúc •\r\n\r\nKhông viền\r\n\r\n• Vừa vặn\r\n\r\n Chất liệu: 92% Cotton, 8% Polyester\r\n• Màu sắc: Xanh hải quân\r\n Sản xuất tại: Italy', 0, 7000000, '159cf726ce.jpg', 34, 0),
(70, 'DRESS', 44, 30, 'Đầm xuyên thấu đan chéo bằng vải viscose pha ottoman\r\n\r\n• Đóng\r\n\r\nkhóa • Không viền • Vừa\r\n\r\nvặn\r\n\r\n Chất liệu: 63% Polyester, 37% Viscose\r\n• Màu sắc: Trắng / Đen\r\n Sản xuất tại: Italy', 1, 852000, 'bf3ee98a96.jpg', 45, 5),
(71, 'Váy nữ', 43, 30, 'Váy đan chéo mềm mại với lớp hoàn thiện chintz\r\n\r\n• Trang trí tua rua quanh cổ\r\n\r\n• Vừa vặn thoải mái\r\n\r\n Chất liệu: 100% Polyester\r\n• Màu đen\r\n Sản xuất tại: Italy', 1, 890000, '45b2b29d11.jpg', 42, 5),
(72, 'Áo len', 41, 30, ' Áo nịt len ​​hoa văn intreccio pha cotton • Đóng cúc\r\n\r\n• Vừa\r\n\r\nvặn\r\n\r\n Chất liệu: 61% Polyamide, 39% Cotton\r\n• Màu sắc: Parakeet\r\n Sản xuất tại: Italy', 1, 589000, '6facb4dc25.jpg', 34, 70),
(73, 'Quần đùi nữ', 42, 30, 'Quần đùi lót vải cotton pha cát • Cạp chun co giãn\r\n\r\nvới logo thêu ngược\r\n\r\n Chất liệu: 100% cotton\r\n• Màu trắng\r\n Sản xuất tại: Italy', 1, 4560000, '7ae82fe310.jpg', 39, 0),
(74, 'Áo sơ mi', 40, 30, 'Áo sơ mi poplin co giãn\r\n\r\n• Đóng cúc\r\n\r\n• Vừa vặn\r\n\r\n Chất liệu: 96% Cotton, 4% Elastane\r\n• Màu sắc: Parakeet\r\n Sản xuất tại: Italy', 1, 6000000, '936e95c02b.jpg', 29, 698),
(75, 'ÁO SƠ MI CROPTOP PHỐI TÚI TRƯỚC', 40, 15, 'Áo sơ mi cổ đức, dáng croptop với độ dài lửng, tay ngắn. Dọc thân áo là khuy cài được ẩn ở trong. Phía trước có 2 túi vuông cùng khuy cài giả.', 1, 1090000, '7f4f581ada.jfif', 29, 100),
(76, 'QUẦN SUÔNG PHỐI TÚI VIỀN THÊU', 42, 16, 'Phần viền thêu sẽ có màu ngẫu nhiên (hồng, đỏ, đen, trắng). Quần dáng suông, độ dài ngang mắt cá chân. Chất liệu chính là Tuysi dày dặn. Trên đai quần có khuy cài ẩn. Phía trước có 2 túi hộp, phần viền cách điệu được thêu chỉ nổi', 1, 800000, 'b65d52f15c.jfif', 39, 100),
(77, 'ÁO THUN MONGTOGHI', 40, 16, 'Áo thun dáng croptop, cổ V, tay ngắn, phong cách mongtoghi. Dáng áo ôm, phía trước có khuy vân mini.', 1, 750000, '3a92fe9b64.jfif', 28, 93),
(78, 'ĐẦM CỔ TIM PHỐI DÂY NƠ EO', 44, 15, 'Đầm cổ tim dáng dài. Thân đầm được tạo nên từ 2 vạt đắp chéo và cố định phần eo bằng dây nơ có thể tùy chỉnh. Đầm không tay, đai áo nối dài che đi phần bả vai người mặc.', 1, 1590000, 'dc7d439423.jfif', 46, 100),
(79, 'ĐẦM CHỮ A PHỐI DÂY KIM LOẠI', 44, 21, 'Đầm dáng chữ A, cổ V. Thiết kế đầm không tay. Phía trước ngực là phần vặn xoắn phối với dây xích nhỏ kim loại màu gold. Dáng đầm có chiết eo và thả nhẹ thoải mái.', 1, 1369000, '428bb42f4d.jfif', 46, 997),
(80, 'ÁO SƠ MI LỤA ĐŨI', 40, 21, 'Áo sơ mi dáng suông, chất liệu lụa. Cổ đức, ống tay dài. Phối màu trơn.', 1, 1090000, '62e5238c9d.jfif', 29, 123),
(81, 'ÁO SƠ MI PHỐI NƠ BẢN LỚN', 40, 19, 'Áo sơ mi được làm từ chất liệu voan nhẹ. Dáng áo suông, tay áo rộng được bo ở phần đầu ống. Dọc thân áo là khuy kim loại ánh vàng. Cổ áo cách điệu với tơ thắt to bản. Set áo có kèm áo 2 dây ở trong.\r\n\r\n', 1, 1190000, 'f29695aac5.jfif', 29, 138),
(82, 'ÁO SƠ MI LỤA THÊU NỔI', 40, 22, 'Áo sơ mi dáng suông, cổ tròn. Ống tay được bo dần về phía đầu. Dọc thân áo là họa tiết cây cỏ được thêu nổi.', 1, 1490000, 'a5f20177f0.jfif', 29, 1232),
(83, 'ÁO SƠ MI LỤA PHỐI BÈO', 40, 19, 'Áo dáng sơ với cổ đức cơ bản. Thiết kế không tay, dáng suông. Dọc viền khuy là hàng bèo nhún bản lớn. Chất liệu chính là lụa cao cấp và voan mềm mịn.\r\n\r\n', 1, 850000, '98d199e397.jfif', 29, 769),
(84, 'ÁO SƠ MI ĐÍNH NƠ NGỌC TRAI', 40, 16, 'Áo sơ mi cổ đức. Chất liệu voan. Tay ngắn và phồng nhẹ, bo ở đầu ống. Phía trước là khuy bấm kim loại. Trên cổ áo được đính nơ ngọc trai. Cổ áo, viền tay áo và viền khuy được phối cùng một màu.', 1, 950000, '7c81aa945b.jfif', 29, 73),
(85, 'ÁO LỤA ĐÍNH TRÁI TIM', 40, 15, 'Thiết kế áo dáng suông, cổ tàu trụ, tay dài. Cổ áo được phối cùng bèo nhún nhỏ. Hai bên ống tay được thiết kế cùng layer bèo lớn và phối với phụ kiện trái tim tinh xảo. Phần cổ áo đằng sau có khuy cà', 1, 1590000, '35105a5e9a.jfif', 29, 964),
(86, 'BLAZER DẠ 4 KHUY', 41, 19, 'Áo khoác dáng blazer, vải dạ cổ 2 ve lật khoét chữ K, tay dài có đai. 2 túi chéo 2 bên. 4 khuy phía trước. Thông qua những đường nét tinh xảo như cầu vai sắc nét, hàng khuy và phom dáng chuẩn từng centimet đã mang', 1, 1953000, '0f80304c03.jfif', 35, 14),
(87, 'BLAZER DẠ ', 41, 20, 'Áo khoác dáng blazer, vải dạ cổ 2 ve lật khoét chữ K, tay dài có đai. 2 túi chéo 2 bên. 4 khuy phía trước. Thông qua những đường nét tinh xảo như cầu vai sắc nét, hàng khuy và phom dáng chuẩn từng centimet đã mang', 1, 1953000, '694bc64b29.jfif', 35, 324),
(88, 'JUMPSUIT LỤA SUÔNG TRƠN', 42, 16, 'Jumpsuit trơn dáng suông. Dáng áo không tay, vạt đổ từ đằng trước xuống đằng sau. Dáng quần ống đứng, rộng, độ dài chạm gót. 2 bên có 2 túi chéo. Chất liệu chính là lụa.', 1, 1690000, 'c6e718b57c.jfif', 41, 11),
(89, 'JUMPSUIT VEST PHỐI ĐAI', 42, 22, 'Thiết kế Jumpsuit dáng suông, giữa eo được nhấn bằng đai cài. Phần áo dáng cổ vest, tay ngắn vén ống. Quần ống đứng, độ dài chạm mắt cá chân. Chất liệu chính là lụa mềm có độ bóng nhẹ.', 1, 1790000, '8ec266b465.jfif', 41, 40),
(90, 'ÁO SƠ MI KẺ CHẤT LỤA', 40, 15, 'Áo sơ mi dáng ôm, thân áo có độ đứng. Thiết kế cổ đức. Phía trước có 2 túi hộp phối cùng khuy kim loại. Tại phần khủy tay có khuy để cài cố định khi gập ống tay. Tà áo dáng đuôi tôm xẻ ở 2 bên.\r\n\r\n\r\n\r\n\r\n', 1, 1490000, '15177fd3b3.jpg', 29, 4234),
(91, 'QUẦN TÂY NAM KHAKI DÂY KÉO RÚT', 42, 19, 'Quần khaki ống bo chun co giãn kiểu bó, cạp chần chun có dây kéo rút. Có túi phía trước và 2 túi có nắp phía sau.', 0, 1090000, 'bd9400c2f4.jpg', 39, 70),
(92, 'QUẦN BÒ', 42, 15, 'Quần bò form dài chạm mắt cá chân, chất liệu thoải mái dễ vận động\r\nThiết kế trẻ trung năng động của thiết kế dáng slim fit có túi hộp may đằng sau và 2 túi chéo 2 bên hông. Mang tính ứng dụng cao khi chàng', 0, 1190000, 'ce32e86223.jfif', 38, 49),
(93, 'ÁO VEST KẺ', 41, 21, 'Áo vest cổ hai ve cách điệu. Tay dài có 4 khuy. Có 1 túi trước ngực, 2 vuông có nắp 2 bên, có 3 túi lót bên trong. Có 2 khuy cài mặt trước. Xẻ tà 2 bên phía sau.', 0, 1745000, '2b18d3adeb.jfif', 36, 4563),
(94, 'ÁO KHOÁC DẠ NAM DÁNG DÀI', 41, 23, 'Áo khoác dạ cổ 2 ve khoét chữ K. Tay dài có 3 khuy trang trí. 2 túi vuông có nắp 2 bên. Dáng áo suông dài. Cài bằng hàng khuy phía trước. Với chất liệu dạ ép cao cấp, mềm mại, giữ ấm tốt, không bám bụi, thiết kế thời trang, phong cách trang nhã, lịch thiệp. ', 0, 3690000, 'befc208b26.jfif', 34, 48),
(95, 'ÁO POLO CỔ ĐỨC', 40, 19, 'Với chất vải thun cùng form áo tay ngắn dễ mặc sẽ mang lại cho người mặc cảm giác thoải mái, mát mẻ', 0, 790000, '63afc5eb72.jfif', 28, 68),
(96, 'QUẦN SOOC JEANS NAM', 42, 27, 'Quần sooc bò màu đen dáng regular fit. Có 5 túi. Cạp sử dụng khóa và khuy kim loại, mặt trước rách cá tính. Màu đen hiện đại, phù hợp với thời trang dạo phố.', 0, 990000, 'f5a062b608.jfif', 38, 4),
(98, 'SET ÁO THUN VÀ QUẦN LỬNG CÙNG MÀU', 40, 19, 'Một set bao gồm áo ngắn tay và quần lửng có cùng màu. Màu của set sẽ được giao ngẫu ngẫu nhiên.', 2, 548000, '59848e5c59.jfif', 28, 42),
(99, 'QUẦN SOOC NƠ', 42, 18, 'Quần sooc thun, độ dài ngang đùi. Dáng quần hơi ôm nhẹ. Phía trước có nơ buộc xinh xắn. Chất liệu thun thoáng mát, nhẹ nhàng', 2, 450000, 'c1a7aa790d.jfif', 40, 73),
(100, 'SET THUN COOL GIRL HAVE FUN', 40, 16, 'Set thun bao gồm áo và quần ngắn. Áo tay cộc, dáng suông, phía trước in hình ngộ nghĩnh. Quần dáng ngắn, đai chun, phía trước có túi chéo, hình in trùng với áo.', 2, 598000, '5a320bc109.jfif', 40, 597987),
(101, 'BỘ THUN TIE DYE', 43, 18, 'Bộ thun bao gồm áo ngắn tay và quần short. Họa tiết chính là Tie Dye. Phía trước áo được in dòng quotes bằng chất liệu nổi. Quần short có túi hộp ở 2 bên.', 2, 739000, 'cbb5f00d61.jfif', 50, 346),
(102, 'SET THUN IN HÌNH TÚI CHÉO', 40, 15, 'Bộ thun cho bé trai rộng rãi, thoáng mát. Hình in túi đeo chéo độc đáo khiến set đồ bắt mắt hơn. Bộ thun này phù hợp để bé diện đến lớp hoặc đi chơi cùng gia đình.', 2, 698000, '5567c155a3.jfif', 28, 11),
(103, 'QUẦN KHAKI KHỦNG LONG NHÍ', 40, 16, '\r\nQuần Khaki có họa tiết khủng long nhí dễ thương. Dáng quần suông nhẹ, đứng dáng mà vẫn tạo cảm giác thoải mái cho con các con. Quần có cạp chun giả khóa kéo, xinh xắn và phù hợp diện hằng ngày.', 2, 390000, '3e372328c0.jfif', 41, 64);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_repcomment`
--

CREATE TABLE `tbl_repcomment` (
  `id` int(11) NOT NULL,
  `nameId` int(11) NOT NULL,
  `rep` varchar(255) NOT NULL,
  `namerep` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_repcomment`
--

INSERT INTO `tbl_repcomment` (`id`, `nameId`, `rep`, `namerep`) VALUES
(1, 43, 'hay quas chij', ' thuy122'),
(2, 43, 'oichi', ' thuy122'),
(3, 43, 'oichi', ' thuy122'),
(4, 46, 'hhh', ' thuy122'),
(5, 47, 'hihi', ' thuy122'),
(6, 46, 'hihimNH', ' thuy122'),
(7, 45, 'anh manh rat deptrai', ' thuy122'),
(8, 41, 'an com ddi', ' thuy122'),
(9, 48, 'droi', ' thuy122'),
(10, 48, 'cc', ' thuy122'),
(11, 48, 'cc', ' thuy122'),
(12, 48, 'cc', ' thuy122'),
(13, 48, 'cc', ' thuy122'),
(14, 48, 'cc', ' thuy122'),
(15, 46, 'oke', ' thuy122'),
(16, 49, 'thank', ' thuy122'),
(17, 50, 'tim', ' thuy122'),
(18, 53, 'dkfjskdjf', ' thuy122'),
(19, 53, 'lkifpkakfpas', ' thuy122');

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
(5, 'Nguyễn Thanh Quỳnh Linh', 'thuy122', '202cb962ac59075b964b07152d234b70', 'linh2106@gmail.com', 'Nữ', 981984623, '2002-06-21', 'Hồ Chí Minh', 'Thanh'),
(7, 'Quan Văn Mạnh', 'manhne', '202cb962ac59075b964b07152d234b70', 'quanmanh901@gmail.com', 'nam', 899391826, '18-04-2002', '309/1/4 Lê Đức Thọ', '0909'),
(8, 'Quan Văn Mạnh', 'manh22', '202cb962ac59075b964b07152d234b70', 'manh2106@gmail.com', 'Nam', 981984623, '2002-21-06', 'Hồ Chí Minh', 'Thanh'),
(10, 'Phạm Khánh Linh', 'khanhlinh', '202cb962ac59075b964b07152d234b70', 'nguyenthanhquynhlinh@gmail.com', 'Nam', 981984623, '2002-21-06', 'Hồ Chí Minh', 'Thanh');

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
-- Chỉ mục cho bảng `tbl_comment`
--
ALTER TABLE `tbl_comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `productId` (`productId`);

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
-- Chỉ mục cho bảng `tbl_repcomment`
--
ALTER TABLE `tbl_repcomment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nameId` (`nameId`);

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
  MODIFY `cartID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=134;

--
-- AUTO_INCREMENT cho bảng `tbl_comment`
--
ALTER TABLE `tbl_comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT cho bảng `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `orderId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT cho bảng `tbl_pro`
--
ALTER TABLE `tbl_pro`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `productId` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT cho bảng `tbl_repcomment`
--
ALTER TABLE `tbl_repcomment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `tbl_type_product`
--
ALTER TABLE `tbl_type_product`
  MODIFY `typeProductID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT cho bảng `tbl_uer`
--
ALTER TABLE `tbl_uer`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

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
-- Các ràng buộc cho bảng `tbl_comment`
--
ALTER TABLE `tbl_comment`
  ADD CONSTRAINT `tbl_comment_ibfk_1` FOREIGN KEY (`productId`) REFERENCES `tbl_product` (`productId`);

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
-- Các ràng buộc cho bảng `tbl_repcomment`
--
ALTER TABLE `tbl_repcomment`
  ADD CONSTRAINT `tbl_repcomment_ibfk_1` FOREIGN KEY (`nameId`) REFERENCES `tbl_comment` (`id`);

--
-- Các ràng buộc cho bảng `tbl_type_product`
--
ALTER TABLE `tbl_type_product`
  ADD CONSTRAINT `tbl_type_product_ibfk_1` FOREIGN KEY (`catID`) REFERENCES `category` (`catId`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
