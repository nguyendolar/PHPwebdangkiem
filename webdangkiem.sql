-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 02, 2021 lúc 03:56 PM
-- Phiên bản máy phục vụ: 10.4.11-MariaDB
-- Phiên bản PHP: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `webdangkiem`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaixe`
--

CREATE TABLE `loaixe` (
  `id` int(11) NOT NULL,
  `tenloaixe` varchar(250) NOT NULL,
  `giadangkiem` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `loaixe`
--

INSERT INTO `loaixe` (`id`, `tenloaixe`, `giadangkiem`) VALUES
(1, 'Ô tô dưới 10 chỗ', 340000),
(2, 'Ô tô khách từ 10 đến 24 ghế', 330000),
(3, 'Ô tô khách từ 25 đến 40 ghế', 370000),
(4, 'Ô tô khách trên 40 ghế ', 400000),
(5, 'Ô tô tải có trọng tải đến 2 tấn', 330000),
(6, 'Ô tô tải có trọng tải trên 2 tấn đến 7 tấn', 370000),
(7, 'Ô tô cứu thương', 290000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `profile`
--

CREATE TABLE `profile` (
  `id` int(11) NOT NULL,
  `bienso` varchar(250) NOT NULL,
  `loaixe` int(11) NOT NULL,
  `sokhung` varchar(250) NOT NULL,
  `hoten` varchar(250) NOT NULL,
  `sodienthoai` int(11) NOT NULL,
  `socmnd` int(11) NOT NULL,
  `email` varchar(250) NOT NULL,
  `ngaydangkiem` datetime NOT NULL,
  `trangthai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `profile`
--

INSERT INTO `profile` (`id`, `bienso`, `loaixe`, `sokhung`, `hoten`, `sodienthoai`, `socmnd`, `email`, `ngaydangkiem`, `trangthai`) VALUES
(1, '92C6 - 632145', 1, '92C6 - 632145', 'Lê Văn Nguyên', 394073758, 206325110, 'nguyencao@gmail.com', '2021-11-02 21:10:00', 1),
(2, '92C6 - 632145', 7, '92C6 - 632145', 'Đăng Hoàng', 123456789, 203315220, 'hung29manh@gmail.com', '2021-11-02 10:26:00', 1),
(4, '92C6 - 632145', 7, '92C6 - 632145', 'VinaEnter Edu', 123456789, 4444, 'hung29manh@gmail.com', '2021-11-02 15:49:00', 1),
(5, '91D6 - 122457', 2, '91D6 - 122457', 'Bùi Dũng Đinh', 394073512, 201356879, 'dungdinh@gmail.com', '2021-11-03 22:40:00', 1),
(6, '92C6 - 632145', 2, '92C6 - 632145', 'Nguyễn Văn An', 394073156, 203144560, 'nguyenvanan@gmail.com', '2021-11-08 00:00:00', 1),
(7, '91D6 - 122457', 4, '91D6 - 122457', 'Minh nhã', 123456789, 44445, 'hung29manh@gmail.com', '2021-11-07 17:59:00', 0),
(9, '92C6 - 632145', 1, '92C6 - 632145', 'VinaEnter Edu', 395412365, 4444, 'nguyencaonguyencmu@gmail.com', '2021-11-15 12:41:00', 1),
(10, '92C6 - 632145', 3, '92C6 - 632145', 'Minh nhã', 123456789, 4444, 'nguyencaonguyencmu@gmail.com', '2021-11-15 15:29:00', 0),
(11, '92B1 - 14056', 7, '92B1 - 14056', 'Nguyễn Minh Nhã', 394073759, 4444, 'nguyencaonguyencmu@gmail.com', '2021-11-15 15:37:00', 0),
(12, '92C6 - 632145', 1, '92C6 - 632145', 'VinaEnter Edu', 123456789, 4444, 'nguyencaonguyencmu@gmail.com', '2021-11-15 15:38:00', 2),
(13, '92C6 - 632145', 1, '92C6 - 632145', 'VinaEnter Edu', 123456789, 4444, 'nguyencaonguyencmu@gmail.com', '2021-11-15 15:40:00', 2),
(14, '92C6 - 632145', 2, '92C6 - 632145', 'Nhân viên', 123456789, 4444, 'nguyencaonguyencmu@gmail.com', '2021-11-15 15:42:00', 1),
(15, '92C6 - 632145', 1, '92C6 - 632145', 'dá', 123456789, 4444, 'n2ftechnology@gmail.com', '2021-11-17 14:35:00', 0),
(16, '92B1 - 14056', 3, '92C6 - 632145', 'Bùi Xuân', 123456789, 4444, 'nguyencaonguyencmu@gmail.com', '2021-11-25 11:19:00', 2),
(17, '92C6 - 632145', 1, '92C6 - 632145', 'VinaEnter Edu', 123456789, 4444, 'nguyencaonguyencmu@gmail.com', '2021-12-07 14:26:00', 7),
(18, '92C6 - 632145', 1, '92C6 - 632145', 'Minh nhã', 123456789, 4444, 'nguyencaonguyencmu@gmail.com', '2021-12-22 15:33:00', 0),
(19, '91D6 - 122457', 1, '92C6 - 632146', 'VinaEnter Edu', 123456789, 4444, 'nguyencaonguyencmu@gmail.com', '2021-12-17 17:39:00', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `rolename` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `role`
--

INSERT INTO `role` (`id`, `rolename`) VALUES
(1, 'Admin'),
(2, 'User'),
(3, 'Nhân viên');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `fullname` varchar(250) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `role_id` int(11) NOT NULL,
  `chucnang` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `fullname`, `username`, `password`, `role_id`, `chucnang`) VALUES
(1, 'Lê Văn C', 'levanc', 'levanc', 2, NULL),
(2, 'Quản trị viên', 'admin', 'admin', 1, NULL),
(3, 'Minh nhã', 'minhnha', 'minhnha', 2, NULL),
(4, 'Đinh Lê', 'ledinh', 'ledinh', 3, 1),
(5, 'Phạm Lê Hoàng', 'lehoang', 'lehoang', 2, NULL),
(8, 'Xuân Thu', 'nhanvien', 'nhanvien', 3, 2),
(9, 'Phú Hoàng', 'phuhoang', 'phuhoang', 2, NULL),
(10, 'Quang Huy', 'quanghuy', 'quanghuy', 3, 6),
(11, 'VinaEnter Edu', 'huong', 'dangnha', 2, NULL),
(12, 'Dũng Đinh', 'dungdinh', 'dungdinh', 2, NULL),
(13, 'Viên Nhân', 'viennhan', 'viennhan', 3, 4),
(14, 'Nguyễn Văn A', 'nguyenvana', 'nguyenvana', 2, NULL),
(16, 'Đỗ Phát', 'dophat', 'dophat', 3, 5),
(17, 'Kiểm duyệt', 'kiemduyet', '123456', 3, 7),
(18, 'Đăng Huy', 'danghuy', 'danghuy', 2, NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `loaixe`
--
ALTER TABLE `loaixe`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `loaixe`
--
ALTER TABLE `loaixe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `profile`
--
ALTER TABLE `profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
