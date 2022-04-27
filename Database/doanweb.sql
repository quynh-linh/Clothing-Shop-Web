-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 03, 2022 lúc 04:34 PM
-- Phiên bản máy phục vụ: 10.4.22-MariaDB
-- Phiên bản PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `doanweb`
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
(33, 'Áo'),
(34, 'Áo Khoác'),
(35, 'Quần&amp;JUMPSUIT'),
(36, 'Chân Váy'),
(37, 'Đầm');

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
(0, 'QuỳnhLinh', 'dd@gmail.com', 'linh22', '202cb962ac59075b964b07152d234b70', ''),
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
(5, 'IVY moda');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_cart`
--

CREATE TABLE `tbl_cart` (
  `cartID` int(11) NOT NULL,
  `productId` int(11) NOT NULL,
  `sessionId` varchar(255) NOT NULL,
  `productName` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `quantity` int(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_cart`
--

INSERT INTO `tbl_cart` (`cartID`, `productId`, `sessionId`, `productName`, `price`, `quantity`, `image`) VALUES
(7, 13, 'rksjrm07mpje733092gnt1gala', 'Đầm đuôi cá họa tiết hoa nhí', '1590000', 2, 'c69002fd9d.jpg');

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
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_product`
--

INSERT INTO `tbl_product` (`productId`, `productName`, `catId`, `brandId`, `product_desc`, `type`, `price`, `image`) VALUES
(9, 'Áo thun sweater phối ngọc', 33, 5, 'Áo thun cổ tròn, tay dài. Bo gấu ở cổ và tay áo. Mặt trước phối hạt giả ngọc trai tạo điểm nhấn. Dễ dàng mix đồ với quần dài, zuýp bò...để có ngay set đồ ưng ý đi chơi, hẹn hò, đi làm mà vẫn cá tính.\r\nMàu sắc: Cam - Đen\r\nMẫu mặc size S:\r\nChiều cao: 1m66\r\nCân nặng: 48kg\r\nSố đo 3 vòng: 78-61-88', 1, '297000', 'a46bc22bf3.jpg'),
(10, 'Áo thun Be Good', 33, 5, 'Áo thun cổ tròn, tay dài. 2 túi có nắp in chữ phía trước. Bo gấu ở cổ và tay áo bằng chun gân co giãn. Gấu áo có dây kéo rút. Vải thun dập nổi.\r\n\r\nDễ dàng mix đồ với quần dài, zuýp bò...để có ngay set đồ ưng ý đi chơi, hẹn hò, đi làm mà vẫn cá tính.\r\n\r\nMàu sắc: Bạc - Xanh Oliu\r\n\r\nMẫu mặc size S:\r\n\r\nChiều cao: 1m66\r\nCân nặng: 48kg\r\nSố đo 3 vòng: 78-61-88 cm', 1, '316000', 'c6fc5f5e76.jpg'),
(11, 'Áo thun gân bo gấu', 33, 5, 'Áo thun cổ tròn, tay dài bo gấu dài tạo bồng. Gấu áo bo. \r\n\r\nChiếc áo mang phong cách trẻ trung và dễ phối đồ. Chất liệu thun gân ôm nhẹ sẽ giúp nàng cảm thấy thoải mái và dễ chịu khi diện. Có thể thoải mái mix match mẫu áo kiểu này với nhiều món đồ thời trang khác nhau mà vẫn đẹp, sành điệu khi xuống phố.\r\n\r\nMàu sắc: Gold - Đen\r\n\r\nMẫu mặc size S:\r\n\r\nChiều cao: 1m66\r\nCân nặng: 48kg\r\nSố đo 3 vòng: 78-61-88', 1, '311000', 'a587d29260.jpg'),
(12, 'Đầm lệch vai ánh nhũ', 33, 5, 'Đầm lệch vai. Tay hến. Eo chiết, có đai chần chun co giãn - mặt kim loại phía trước. Tùng váy dài qua gối. Cài bằng khóa kéo ẩn sau lưng.\r\n\r\nVải lụa 2 lớp, cách điệu họa tiết có ánh nhũ bắt sáng. Thiết kế nổi bật với chi tiết vai lệch trendy.  Diện mẫu đầm này nàng sẽ trở thành quý cô sành điệu trong mọi buổi tiệc, cũng như nổi bật hơn trong mọi cuộc gặp gỡ đấy.\r\n\r\nMàu sắc: Đỏ ruby - Xanh Tím Than\r\n\r\nMẫu mặc size S:\r\n\r\nChiều cao: 1m66\r\nCân nặng: 48kg\r\nSố đo 3 vòng: 78-61-88 cm', 1, '1790000', '59221fff87.jpg'),
(13, 'Đầm đuôi cá họa tiết hoa nhí', 33, 5, 'Đầm cổ V có dây thắt phía trước, dáng ôm đuôi cá. Tay ngắn được rút dây kéo 2 bên. Mặt trước chần chun nhún tạo kiểu. Cài bằng dây kéo khóa ẩn sau lưng. Vải họa tiết hoa nhí\r\n\r\nĐiểm độc đáo của là phần tay bồng khiến thiết kế thêm phần nhẹ nhàng, giấu khéo nhược điểm bắp tay to. Thanh lịch và ngọt ngào, đây chắc chắn sẽ là mẫu đầm sẽ giúp nàng tỏa sáng khi diện đấy.\r\n\r\nMàu sắc: Họa tiết Vàng Nghệ - Họa tiết Tím Lavender\r\n\r\nMẫu mặc size S:\r\n\r\nChiều cao: 1m68\r\nCân nặng: 52kg\r\nSố đo 3 vòng: 83-62-95cm', 1, '1590000', 'c69002fd9d.jpg'),
(14, 'Áo thun Symphony', 33, 5, 'Áo phông chất thun, dáng Regular, độ dài thoải mái. Tay cộc, cổ tròn. Phía trước in lệch chữ Symphony. Phía sau in hình thiên nhiên khổ lớn.\r\n\r\nMột mẫu áo năng động, phối hình in sáng màu phù hợp cho chàng trẻ trung. Thiết kế có độ rộng thoải mái, cover tốt những khuyết điểm mà người mặc chưa tự tin.\r\n\r\nMàu sắc: Ghi khói - Đen\r\n\r\nMẫu mặc size L:\r\n\r\nChiều cao: 1m85\r\nCân nặng: 75kg\r\nSố đo 3 vòng: 100-78-95 cm', 0, '650000', '6cb7ad6c0e.jpg'),
(15, 'Áo thun Symphony', 33, 5, 'Áo phông chất thun, dáng Regular, độ dài thoải mái. Tay cộc, cổ tròn. Phía trước in lệch chữ Symphony. Phía sau in hình thiên nhiên khổ lớn.\r\n\r\nMột mẫu áo năng động, phối hình in sáng màu phù hợp cho chàng trẻ trung. Thiết kế có độ rộng thoải mái, cover tốt những khuyết điểm mà người mặc chưa tự tin.\r\n\r\nMàu sắc: Ghi khói - Đen\r\n\r\nMẫu mặc size L:\r\n\r\nChiều cao: 1m85\r\nCân nặng: 75kg\r\nSố đo 3 vòng: 100-78-95 cm', 0, '650000', '35f5838404.jpg'),
(16, 'Quần Tây cơ bản', 35, 5, 'Quần Tây cơ bản có độ dài ngang mắt cá chân. Phía trước có khuy cài phối màu từ IVY moda. Đai quần có đỉa. Đằng trước quần có 2 túi chéo. Đằng sau quần có 2 túi ngang.\r\n\r\nMột chiếc quần cơ bản sẽ giúp hoàn thiện mọi set đồ trong bất kỳ trường hợp nào. Nếu chàng băn khoăn không biết mặc gì hôm nay, hãy chọn chiếc quần Tây cơ bản này. Chất liệu đứng form và mềm, nhẹ, thấm hút mồ hôi tốt. Chiều dài ngang mắt cá chân giúp vóc dáng của người mặc trông cao ráo hơn.\r\n\r\nMàu sắc: Ghi khói - Đen\r\n\r\nMẫu mặc size L:\r\n\r\nChiều cao: 1m85\r\nCân nặng: 75kg\r\nSố đo 3 vòng: 100-78-95 cm', 0, '1150000', 'b404a8c4bd.jpg'),
(17, 'Quần dài fit dáng', 35, 5, 'Quần dài, ống ôm nhẹ. Độ dài chạm mắt cá chân. Đai quần có khuy cài và đỉa. Khóa dạng kéo. Đằng sau có 2 túi giả.\r\n\r\nMột chiếc quần fit dáng là item mà mọi chàng trai không thể bỏ qua. Thiết kế ôm nhẹ tôn dáng khiến đôi chân người mặc trông dài và thon hơn rất nhiều. Sắc tối dễ mix-match cùng nhiều thiết kế áo khác. Với những chàng trai trẻ trung, đây sẽ là chiếc quần phù hợp cho cả ngày đi chơi và đi làm.\r\n\r\nMàu sắc: Kẻ chì - Kẻ xanh tím than\r\n\r\nMẫu mặc size L:\r\n\r\nChiều cao: 1m85\r\nCân nặng: 75kg\r\nSố đo 3 vòng: 100-78-95 cm', 0, '1150000', '7684ebc61b.jpg'),
(19, 'Áo thun Anti-Haven ', 33, 5, 'Áo thun dáng Regular, độ dài vừa phải, tay cộc, cổ tròn. Phía trước in hình và chữ bắt mắt, trẻ trung.\r\n\r\nĐây là một chiếc áo thun cơ bản, năng động dành cho các chàng trai mùa hè. Gam đen dễ phối được kết hợp cùng hình in sáng màu trẻ trung. Dáng Regular vừa vặn giúp người mặc trông gọn gàng hơn.\r\n\r\nMàu sắc: Đen\r\n\r\nMẫu mặc size L:\r\n\r\nChiều cao: 1m85\r\nCân nặng: 75kg\r\nSố đo 3 vòng: 100-78-95 cm', 0, '650000', 'a16572f96f.jpg'),
(20, 'Đầm thun họa tiết da báo', 37, 5, 'Đầm thun cổ tròn, tay ngắn, viền bằng chun co giãn.  Eo chiết bằng chun nhúm có dây kéo rút. Vải họa tiết da báo trendy.\r\n\r\nMàu sắc: Họa tiết ', 2, '380000', '21f75c343a.jpg'),
(21, 'Quần sooc hoa thắt nơ', 35, 5, 'Quần sooc hoa cạp chun co giãn. Ống dài ngang đùi. 2 túi chéo 2 bên. Dây kéo rút 2 bên có dây thắt nơ.\r\n\r\nMàu sắc: Họa tiết Hồng san hô - Họa tiết Xanh Tím Than - Họa tiết Hồng Phấn', 2, '300000', '0dc8d9e2a2.jpg'),
(22, 'Đầm 2 dây', 37, 5, 'Đầm 2 dây bé gái. Diềm bèo. Phần áo được chần chun co giãn đều. Tùng xòe, có 2 túi vuông. Chất vải thô, có lớp lót rời bên trong.\r\n\r\nMàu sắc: Họa tiết Tím Đậm\r\n\r\nMẫu mặc size 8-9:\r\n\r\nChiều cao 1m29\r\nCân nặng 29,5kg', 2, '650000', 'cd21d6fdd7.jpg'),
(23, 'Áo thun tay bèo', 33, 5, 'Áo thun cổ đức có 2 khuy cài, tay ngắn được diềm bèo. Dáng áo xuông. Thêu họa tiết nổi thân áo.\r\n\r\nMàu sắc: Vàng Nghệ', 2, '550000', '3a27f8a245.jpg'),
(24, 'Combo 2 áo thun cổ sen ', 33, 5, 'Combo 2 áo (1 màu hồng + 1 màu trắng)\r\n\r\nÁo thun cổ sen có 2 khuy cài, tay ngắn  vai xếp nếp có bo gấu. Dáng áo xuông. Xẻ gấu 2 bên.', 2, '540000', 'fba8a526f6.jpg');

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
  ADD PRIMARY KEY (`cartID`);

--
-- Chỉ mục cho bảng `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`productId`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `catId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT cho bảng `tbl_brand`
--
ALTER TABLE `tbl_brand`
  MODIFY `brandId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `tbl_cart`
--
ALTER TABLE `tbl_cart`
  MODIFY `cartID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `productId` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
