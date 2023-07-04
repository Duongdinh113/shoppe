-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th7 04, 2023 lúc 12:22 PM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `duan1`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bill`
--

CREATE TABLE `bill` (
  `id` varchar(500) NOT NULL,
  `id_user` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL,
  `diachi` varchar(255) NOT NULL,
  `orderstatus` varchar(255) NOT NULL DEFAULT 'Đang xử lý',
  `total_money` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `bill`
--

INSERT INTO `bill` (`id`, `id_user`, `fullname`, `phone`, `diachi`, `orderstatus`, `total_money`) VALUES
('643cc7ef9bf34', 43, 'Dương Văn Định', 978774092, 'Thanh Hóa', 'Đang giao hàng', 2222),
('643cc99851740', 43, 'Dương Văn Định', 978774092, 'Hà Nội', 'Hủy đơn hàng', 100),
('643d42e3cd220', 43, 'Định', 978774092, 'Thanh Hóa', 'Hủy đơn hàng', 1000),
('643d42e566c47', 43, 'Định', 978774092, 'Thanh Hóa', 'Hủy đơn hàng', 1000),
('643d42e569f20', 43, 'Định', 978774092, 'Thanh Hóa', 'Hủy đơn hàng', 1000),
('643e03843a51b', 43, 'Định', 978774092, 'Thanh Hóa', 'Hủy đơn hàng', 200),
('643e0410ecbd0', 43, 'Định', 978774092, 'Hà Nội', 'Đang xử lý', 400),
('643e0ea25560b', 44, 'Dương Văn Định', 978774092, 'Thanh Hóa', 'Đang giao hàng', 17400),
('6448b14086173', 44, 'Dương Văn Định', 978774092, 'Thanh Hóa', 'Hủy đơn hàng', 100);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `billdetail`
--

CREATE TABLE `billdetail` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_bill` varchar(500) NOT NULL,
  `id_sp` int(11) NOT NULL,
  `sl` int(11) NOT NULL,
  `total_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `billdetail`
--

INSERT INTO `billdetail` (`id`, `id_user`, `id_bill`, `id_sp`, `sl`, `total_price`) VALUES
(34, 43, '643cc7ef9bf34', 39, 1, 2222),
(35, 43, '643cc99851740', 37, 1, 100),
(36, 43, '643d42e3cd220', 36, 5, 1000),
(37, 43, '643e03843a51b', 41, 1, 200),
(38, 43, '643e0410ecbd0', 36, 2, 400),
(39, 44, '643e0ea25560b', 36, 87, 17400),
(40, 44, '6448b14086173', 37, 1, 100);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `id_p` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `sl` int(11) NOT NULL,
  `gia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categoryid`
--

CREATE TABLE `categoryid` (
  `iddm` int(11) NOT NULL,
  `namee` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `categoryid`
--

INSERT INTO `categoryid` (`iddm`, `namee`) VALUES
(1, 'vòng cổ'),
(2, 'vòng tay'),
(3, 'bông tai'),
(4, 'Đồng hồ'),
(5, 'Nhẫn vàng'),
(6, 'vòng chan');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `idu` int(11) NOT NULL,
  `idp` int(11) NOT NULL,
  `comment` varchar(500) NOT NULL,
  `name` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `comment`
--

INSERT INTO `comment` (`id`, `idu`, `idp`, `comment`, `name`, `date`) VALUES
(25, 43, 37, 'sản phẩm tốt', 'dinh@gmail.com', '2023-04-17 05:58:55'),
(26, 43, 41, 'sản phẩm tốt\r\n', 'dinh@gmail.com', '2023-04-18 02:41:00'),
(27, 43, 41, 'sản phẩm kém chất lượng', 'dinh@gmail.com', '2023-04-18 02:41:24');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `contact`
--

CREATE TABLE `contact` (
  `id_c` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `sdt` int(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `vande` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `contact`
--

INSERT INTO `contact` (`id_c`, `name`, `sdt`, `email`, `vande`) VALUES
(84, 'thanh', 0, 'thanhltph29388@fpt.edu.vn', 't'),
(85, 'thanh', 2147483647, 'thanhltph29388@fpt.edu.vn', 'muốn gọi cho bạn'),
(104, 'Dương Văn Định', 978774092, '', ''),
(105, 'Dương Văn Định', 978774092, '', ''),
(106, 'Dương Văn Định', 978774092, 'dinhdvph29050@fpt.edu.vn', 'hello'),
(107, 'Dương Văn Định', 978774092, 'dinhdvph29050@fpt.edu.vn', 'Thanh báo');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `descrtiption` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `deal` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `class` int(11) NOT NULL,
  `date` int(255) NOT NULL,
  `view` int(11) NOT NULL,
  `number` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `name`, `descrtiption`, `image`, `deal`, `price`, `class`, `date`, `view`, `number`) VALUES
(36, 'Đồng hồ', 'Đồng hồ hàng hiệu', '4.jpg', 150, 200, 4, 0, 0, 2),
(37, 'vòng tay', 'vòng tay cá tính', '5.jpg', 50, 100, 2, 0, 0, 47),
(39, 'Vòng cổ', 'tôn sắc đẹp', '2.jpg', 1000, 2222, 1, 0, 0, 49),
(40, 'Bông tai', 'Sản phẩm số 1 thế giới', '3.jpg', 150, 300, 1, 0, 0, 30),
(41, 'Nhẫn bạc', 'Sản phẩm tiêu chuẩn', '1.jpg', 50, 200, 5, 0, 0, 49),
(42, 'jsdaasd', 'adsadasdasd', '3.jpg', 100, 200, 6, 0, 0, 30);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `role` int(255) NOT NULL DEFAULT 2 COMMENT 'vai tro',
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `fullname`, `email`, `image`, `password`, `phone`, `role`, `address`) VALUES
(37, 'duongdinh', 'dinhdvph29050@fpt.edu.vn', '', 'cccccc', '', 1, ''),
(43, 'gaubu02', 'dinh@gmail.com', 'Screenshot 2023-03-08 112825.png', 'đuonginh', '', 2, ''),
(44, 'duongvandinh01', 'dinh@gmail.com', 'anh1.1_1.png', '123456', '', 2, '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `vaitro`
--

CREATE TABLE `vaitro` (
  `id` int(11) NOT NULL,
  `user` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `vaitro`
--

INSERT INTO `vaitro` (`id`, `user`) VALUES
(1, 'admin'),
(2, 'user');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bill_user` (`id_user`);

--
-- Chỉ mục cho bảng `billdetail`
--
ALTER TABLE `billdetail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `billdetail_bill` (`id_bill`),
  ADD KEY `billdetail_products` (`id_sp`);

--
-- Chỉ mục cho bảng `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cart_idp` (`id_p`),
  ADD KEY `cart_idu` (`id_user`);

--
-- Chỉ mục cho bảng `categoryid`
--
ALTER TABLE `categoryid`
  ADD PRIMARY KEY (`iddm`);

--
-- Chỉ mục cho bảng `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `produuct` (`idp`),
  ADD KEY `user` (`idu`);

--
-- Chỉ mục cho bảng `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id_c`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categori` (`class`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `users` (`role`);

--
-- Chỉ mục cho bảng `vaitro`
--
ALTER TABLE `vaitro`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `billdetail`
--
ALTER TABLE `billdetail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT cho bảng `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT cho bảng `categoryid`
--
ALTER TABLE `categoryid`
  MODIFY `iddm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT cho bảng `contact`
--
ALTER TABLE `contact`
  MODIFY `id_c` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT cho bảng `vaitro`
--
ALTER TABLE `vaitro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `bill`
--
ALTER TABLE `bill`
  ADD CONSTRAINT `bill_user` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `billdetail`
--
ALTER TABLE `billdetail`
  ADD CONSTRAINT `billdetail_bill` FOREIGN KEY (`id_bill`) REFERENCES `bill` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `billdetail_products` FOREIGN KEY (`id_sp`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_idp` FOREIGN KEY (`id_p`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `cart_idu` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `produuct` FOREIGN KEY (`idp`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user` FOREIGN KEY (`idu`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `categori` FOREIGN KEY (`class`) REFERENCES `categoryid` (`iddm`);

--
-- Các ràng buộc cho bảng `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users` FOREIGN KEY (`role`) REFERENCES `vaitro` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
