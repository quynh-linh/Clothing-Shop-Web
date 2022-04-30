-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2022 at 03:26 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `doan_web`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `catId` int(11) NOT NULL,
  `catName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
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
-- Table structure for table `tbl_admin`
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
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`adminId`, `adminName`, `adminEmail`, `adminUser`, `adminPass`, `level`) VALUES
(1, 'QuỳnhLinh', 'dd@gmail.com', 'linh22', '202cb962ac59075b964b07152d234b70', ''),
(5, 'My Tom', 'linh@gmail.com', 'tom2105', 'c56d0e9a7ccec67b4ea131655038d604', '12');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_brand`
--

CREATE TABLE `tbl_brand` (
  `brandId` int(11) NOT NULL,
  `brandName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_brand`
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
-- Table structure for table `tbl_cart`
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
-- Table structure for table `tbl_order`
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
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`orderId`, `productId`, `size`, `price`, `image`, `quantity`, `thanhtien`, `userId`, `order_time`, `status`) VALUES
(25, 50, 'M', '1000', 'e6ff4b0900.jpg', 1, 1000, 3, '2022-04-30 04:20:18', -1),
(26, 50, 'M', '1000', 'e6ff4b0900.jpg', 6, 6000, 3, '2022-04-30 11:21:02', -1),
(27, 50, 'M', '1000', 'e6ff4b0900.jpg', 2, 2000, 3, '2022-04-30 11:27:18', -1),
(28, 50, 'S', '1000', 'e6ff4b0900.jpg', 1, 1000, 3, '2022-04-30 11:37:32', 1),
(29, 50, 'M', '1000', 'e6ff4b0900.jpg', 1, 1000, 3, '2022-04-30 12:07:17', 1),
(30, 50, 'M', '1000', 'e6ff4b0900.jpg', 1, 1000, 3, '2022-04-30 12:08:33', 1),
(31, 50, 'S', '1000', 'e6ff4b0900.jpg', 1, 1000, 3, '2022-04-30 12:18:24', 1),
(32, 50, 'S', '1000', 'e6ff4b0900.jpg', 1, 1000, 3, '2022-04-30 12:19:26', 1),
(33, 50, 'M', '1000', 'e6ff4b0900.jpg', 1, 1000, 3, '2022-04-30 12:46:45', 1),
(34, 50, 'M', '1000', 'e6ff4b0900.jpg', 1, 1000, 3, '2022-04-30 13:14:27', 1),
(35, 50, 'M', '1000', 'e6ff4b0900.jpg', 1, 1000, 3, '2022-04-30 13:15:36', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
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
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`productId`, `productName`, `catId`, `brandId`, `product_desc`, `type`, `price`, `image`, `typeProductId`) VALUES
(50, 'qưdqwd', 45, 18, 'dqwdqwdqwd', 0, '1000', 'e6ff4b0900.jpg', 44);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_type_product`
--

CREATE TABLE `tbl_type_product` (
  `typeProductID` int(100) NOT NULL,
  `typeProductName` varchar(255) NOT NULL,
  `catID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_type_product`
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
-- Table structure for table `tbl_uer`
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
-- Dumping data for table `tbl_uer`
--

INSERT INTO `tbl_uer` (`userId`, `name`, `username`, `userPassword`, `email`, `gioiTinh`, `sdt`, `ngaySinh`, `diaChi`) VALUES
(3, 'Nguyễn Thanh Quỳnh Linh', 'linh2106', '202cb962ac59075b964b07152d234b70', 'linh@gmail.com', 'Nam', 11111111, '22/06/2002', 'Phường 4 , Quận 5 , Thành phố hồ chí minh'),
(4, 'Thùy Linh', 'thuy122', '202cb962ac59075b964b07152d234b70', 'thuylinh2203@gmail.com', 'Nam', 2147483647, '22/06/2002', 'Hồ Chí Minh');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`catId`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`adminId`);

--
-- Indexes for table `tbl_brand`
--
ALTER TABLE `tbl_brand`
  ADD PRIMARY KEY (`brandId`);

--
-- Indexes for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  ADD PRIMARY KEY (`cartID`),
  ADD KEY `productId` (`productId`),
  ADD KEY `userId` (`userId`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`orderId`),
  ADD KEY `productId` (`productId`),
  ADD KEY `userId` (`userId`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`productId`),
  ADD KEY `brandId` (`brandId`),
  ADD KEY `catId` (`catId`),
  ADD KEY `typeProductId` (`typeProductId`);

--
-- Indexes for table `tbl_type_product`
--
ALTER TABLE `tbl_type_product`
  ADD PRIMARY KEY (`typeProductID`),
  ADD KEY `tbl_type_product_ibfk_1` (`catID`);

--
-- Indexes for table `tbl_uer`
--
ALTER TABLE `tbl_uer`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `catId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `adminId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_brand`
--
ALTER TABLE `tbl_brand`
  MODIFY `brandId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  MODIFY `cartID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `orderId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `productId` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `tbl_type_product`
--
ALTER TABLE `tbl_type_product`
  MODIFY `typeProductID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `tbl_uer`
--
ALTER TABLE `tbl_uer`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  ADD CONSTRAINT `tbl_cart_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `tbl_uer` (`userId`),
  ADD CONSTRAINT `tbl_cart_ibfk_2` FOREIGN KEY (`productId`) REFERENCES `tbl_product` (`productId`);

--
-- Constraints for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD CONSTRAINT `tbl_order_ibfk_1` FOREIGN KEY (`productId`) REFERENCES `tbl_product` (`productId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_order_ibfk_2` FOREIGN KEY (`userId`) REFERENCES `tbl_uer` (`userId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD CONSTRAINT `tbl_product_ibfk_1` FOREIGN KEY (`brandId`) REFERENCES `tbl_brand` (`brandId`),
  ADD CONSTRAINT `tbl_product_ibfk_2` FOREIGN KEY (`catId`) REFERENCES `category` (`catId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_product_ibfk_3` FOREIGN KEY (`typeProductId`) REFERENCES `tbl_type_product` (`typeProductID`);

--
-- Constraints for table `tbl_type_product`
--
ALTER TABLE `tbl_type_product`
  ADD CONSTRAINT `tbl_type_product_ibfk_1` FOREIGN KEY (`catID`) REFERENCES `category` (`catId`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
