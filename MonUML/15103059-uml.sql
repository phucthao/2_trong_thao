-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 21, 2020 lúc 08:49 AM
-- Phiên bản máy phục vụ: 10.1.29-MariaDB
-- Phiên bản PHP: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `15103059-uml`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donthuoc`
--

CREATE TABLE `donthuoc` (
  `IdKhamBenh` int(50) NOT NULL,
  `IdBenhNhan` int(50) NOT NULL,
  `TenThuoc` varchar(255) COLLATE utf32_unicode_ci NOT NULL,
  `DonVi` varchar(50) COLLATE utf32_unicode_ci NOT NULL,
  `SoLuong` int(255) NOT NULL,
  `DonGia` int(255) NOT NULL,
  `ThanhTien` int(255) NOT NULL,
  `CachDung` varchar(255) COLLATE utf32_unicode_ci NOT NULL,
  `NgayKhamBenh` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `donthuoc`
--

INSERT INTO `donthuoc` (`IdKhamBenh`, `IdBenhNhan`, `TenThuoc`, `DonVi`, `SoLuong`, `DonGia`, `ThanhTien`, `CachDung`, `NgayKhamBenh`) VALUES
(108, 7, 'Exsermita', 'Lọ', 2, 30000, 60000, 'Sáng 2 viên - Tối 2 viên', '2020-06-21 10:45:10'),
(108, 7, 'Paraxetamon', 'Vỉ', 4, 17000, 68000, 'Sáng 2 viên - Tối 2 viên', '2020-06-21 10:45:10'),
(108, 7, 'Pennicillin', 'Viên', 3, 40000, 120000, 'Tối 2 viên', '2020-06-21 10:45:10'),
(109, 7, 'Morphin', 'Viên', 1, 42000, 42000, 'Sáng 2 viên - Tối 1 Viên', '2020-06-21 10:49:03'),
(109, 7, 'Exsermita', 'Lọ', 2, 30000, 60000, 'Sáng 2 viên - Tối 2 Viên', '2020-06-21 10:49:04'),
(109, 7, 'Paradon', 'Viên', 3, 14000, 42000, 'Sáng 2 viên - Tối 2 Viên', '2020-06-21 10:49:04'),
(110, 7, 'Thao 1', 'Viên', 2, 70000, 140000, 'Sáng 2 viên - Tối 2 viên', '2020-06-21 10:50:03'),
(110, 7, 'Thao 2', 'Vỉ', 3, 64000, 192000, 'Sáng 2 viên - Tối 2 viên', '2020-06-21 10:50:03'),
(111, 8, 'Thao 1', 'Viên', 1, 70000, 70000, 'Sáng 2 viên - Tối 2 viên', '2020-06-21 10:51:05'),
(111, 8, 'Trọng 2', 'Vỉ', 2, 64000, 128000, 'Sáng 2 viên - Tối 2 viên', '2020-06-21 10:51:06'),
(112, 9, 'Paraxetamon', 'Vỉ', 1, 17000, 17000, 'Sáng 2 viên - chiều không uống', '2020-06-21 11:08:13'),
(112, 9, 'Paradon', 'Viên', 2, 14000, 28000, 'Sáng 2 viên - chiều 2 viên', '2020-06-21 11:08:13'),
(112, 9, 'Morphin', 'Viên', 3, 42000, 126000, 'Sáng 2 viên - chiều 2 viên', '2020-06-21 11:08:14'),
(113, 10, 'Thao 1', 'Viên', 1, 70000, 70000, 'Sáng 2 viên - Tối 2 viên', '2020-06-21 11:09:16'),
(113, 10, 'Trọng 2', 'Vỉ', 1, 64000, 64000, 'Sáng 2 viên - Tối 2 viên', '2020-06-21 11:09:17'),
(113, 10, 'Exsermita', 'Lọ', 1, 30000, 30000, 'Sáng 2 viên - Tối 2 viên', '2020-06-21 11:09:17'),
(114, 11, 'Exsermita', 'Lọ', 1, 30000, 30000, 'Sáng 2 viên - Tối 2 viên', '2020-06-21 11:10:59'),
(114, 11, 'Trọng 2', 'Vỉ', 2, 64000, 128000, 'Sáng 2 viên - Tối 2 viên', '2020-06-21 11:11:00'),
(115, 15, 'Exsermita', 'Lọ', 1, 30000, 30000, 'Sáng 2 viên - Tối 2 viên', '2020-06-21 11:11:27'),
(115, 15, 'Thao 3', 'Lọ', 1, 15000, 15000, 'Sáng 2 viên', '2020-06-21 11:11:27'),
(116, 19, 'Thao 3', 'Lọ', 2, 15000, 30000, 'Sáng 1 viên - tối 1 viên', '2020-06-21 11:12:21'),
(116, 19, 'Thao 1', 'Viên', 2, 70000, 140000, 'Sáng 1 viên - tối 1 viên', '2020-06-21 11:12:21'),
(116, 19, 'Thao 5', 'Vỉ', 2, 40000, 80000, 'Sáng 1 viên - tối 1 viên', '2020-06-21 11:12:21'),
(117, 20, 'Thao 3', 'Lọ', 2, 15000, 30000, 'Sáng 2 viên - tối 1 viên', '2020-06-21 11:13:13'),
(117, 20, 'Paraxetamon', 'Vỉ', 2, 17000, 34000, 'Sáng 2 viên - Tối không uống', '2020-06-21 11:13:13'),
(117, 20, 'Thao 1', 'Viên', 2, 70000, 140000, 'Sáng 2 viên - Tối không uống', '2020-06-21 11:13:13'),
(118, 18, 'Thao 5', 'Vỉ', 3, 40000, 120000, 'Sáng 1 viên - Tối 1 viên', '2020-06-21 11:17:01'),
(118, 18, 'Thao 4', 'Lọ', 3, 14000, 42000, 'Sáng 1 viên', '2020-06-21 11:17:01'),
(119, 17, 'Thao 3', 'Lọ', 2, 15000, 30000, 'Sáng 1 viên - tối 1 viên', '2020-06-21 11:17:43'),
(119, 17, 'Paraxetamon', 'Vỉ', 2, 17000, 34000, 'Sáng 1 viên - tối 1 viên', '2020-06-21 11:17:44'),
(120, 13, 'Exsermita', 'Lọ', 2, 30000, 60000, 'Sáng 1 viên - Tối 1 Viên', '2020-06-21 11:18:44'),
(120, 13, 'Trọng 2', 'Vỉ', 2, 64000, 128000, 'Sáng 1 viên - Tối 1 Viên', '2020-06-21 11:18:44'),
(120, 13, 'Paraxetamon', 'Vỉ', 2, 17000, 34000, 'Sáng 1 viên - Tối 1 Viên', '2020-06-21 11:18:45'),
(121, 17, 'Trọng 2', 'Vỉ', 2, 64000, 128000, 'Sáng 1 viên - Tối 1 Viên', '2020-06-21 11:20:23'),
(121, 17, 'Thao 1', 'Viên', 2, 70000, 140000, 'Sáng 1 viên - tối 1 viên', '2020-06-21 11:20:24'),
(122, 17, 'Exsermita', 'Lọ', 3, 30000, 90000, 'Sáng 1 viên - Tối 1 Viên', '2020-06-21 11:22:28'),
(122, 17, 'Thao 3', 'Lọ', 3, 15000, 45000, 'Sáng 1 viên - tối 1 viên', '2020-06-21 11:22:28'),
(122, 17, 'Paraxetamon', 'Vỉ', 3, 17000, 51000, 'Sáng 1 viên - Tối 1 Viên', '2020-06-21 11:22:28'),
(123, 12, 'Exsermita', 'Lọ', 3, 30000, 90000, 'Sáng 1 viên - Tối 1 Viên', '2020-06-21 11:24:07'),
(123, 12, 'Thao 3', 'Lọ', 3, 15000, 45000, 'Sáng 1 viên - tối 1 viên', '2020-06-21 11:24:07'),
(123, 12, 'Paraxetamon', 'Vỉ', 3, 17000, 51000, 'Sáng 1 viên - Tối 1 Viên', '2020-06-21 11:24:08'),
(124, 18, 'Thao 1', 'Viên', 3, 70000, 210000, 'Sáng 1 viên - tối 1 viên', '2020-06-21 11:25:48'),
(124, 18, 'Thao 2', 'Vỉ', 3, 64000, 192000, 'Sáng 1 viên - tối 1 viên', '2020-06-21 11:25:49'),
(124, 18, 'Trọng 2', 'Vỉ', 3, 64000, 192000, 'Sáng 1 viên - tối 1 viên', '2020-06-21 11:25:49'),
(125, 15, 'Thao 3', 'Lọ', 2, 15000, 30000, 'Sáng 1 viên - tối 1 viên', '2020-06-21 11:27:36'),
(125, 15, 'Paraxetamon', 'Vỉ', 2, 17000, 34000, 'Sáng 1 viên - tối 1 viên', '2020-06-21 11:27:36'),
(125, 15, 'Thao 1', 'Viên', 3, 70000, 210000, 'Sáng 1 viên - tối 1 viên', '2020-06-21 11:27:37'),
(126, 12, 'Paraxetamon', 'Vỉ', 2, 17000, 34000, 'Sáng 1 viên - Tối 1 Viên', '2020-06-21 11:28:12'),
(126, 12, 'Thao 1', 'Viên', 2, 70000, 140000, 'Sáng 1 viên - Tối 1 Viên', '2020-06-21 11:28:12'),
(127, 21, 'Paraxetamon', 'Vỉ', 3, 17000, 51000, 'Sáng 1 viên - Tối 1 Viên', '2020-06-21 11:49:57'),
(127, 21, 'Thao 1', 'Viên', 3, 70000, 210000, 'Sáng 1 viên - tối 1 viên', '2020-06-21 11:49:58'),
(127, 21, 'Exsermita', 'Lọ', 25, 30000, 750000, 'Sáng 1 viên - Tối 1 Viên', '2020-06-21 11:49:58'),
(128, 21, 'Trọng 1', 'Vỉ', 2, 70000, 140000, 'Sáng 1 viên - tối 1 viên', '2020-06-21 11:51:06'),
(128, 21, 'Trọng 2', 'Vỉ', 2, 64000, 128000, 'Sáng 1 viên - tối 1 viên', '2020-06-21 11:51:06'),
(129, 16, 'Paraxetamon', 'Vỉ', 1, 17000, 17000, 'Sáng 1 viên - Tối 1 Viên', '2020-06-21 13:26:11'),
(129, 16, 'Paradon', 'Viên', 2, 14000, 28000, 'Sáng 2 viên - Tối 2 Viên', '2020-06-21 13:26:12'),
(129, 16, 'Pennicillin', 'Viên', 3, 40000, 120000, 'Sáng 1 viên - Tối 1 Viên', '2020-06-21 13:26:12');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khambenh`
--

CREATE TABLE `khambenh` (
  `IdKhamBenh` int(30) UNSIGNED NOT NULL,
  `IdBenhNhan` int(50) NOT NULL,
  `ChuanDoan` varchar(255) COLLATE utf32_unicode_ci NOT NULL,
  `LoiDan` varchar(500) COLLATE utf32_unicode_ci NOT NULL,
  `TongTien` int(255) NOT NULL,
  `NgayKhamBenh` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khambenh`
--

INSERT INTO `khambenh` (`IdKhamBenh`, `IdBenhNhan`, `ChuanDoan`, `LoiDan`, `TongTien`, `NgayKhamBenh`) VALUES
(108, 7, 'Bị viêm dạ dày', '10 ngày sau tái khám', 248000, '2019-09-10 11:51:05'),
(109, 7, 'Bị đau nửa đầu', '11 ngày sau tái khám', 144000, '2019-09-11 10:56:05'),
(110, 7, 'Viêm dạ dày', '12 ngày sau tái khám', 332000, '2019-05-13 10:53:05'),
(111, 8, 'Bị đau khớp', '13 ngày sau tái khám', 198000, '2019-05-12 10:51:05'),
(112, 9, 'Bị viêm dạ dày', '14 ngày sau tái khám', 171000, '2020-06-16 11:08:12'),
(113, 10, 'Bị viêm trực tràng', 'Không ăn đồ nóng, 10 ngày sau tái khám', 164000, '2020-06-17 11:09:16'),
(114, 11, 'Bị dị ứng da', '10 ngày sau tái khám', 158000, '2020-06-18 11:10:59'),
(115, 15, 'Bị đau nửa đầu', '14 ngày sau tái khám', 45000, '2020-06-19 11:11:27'),
(116, 19, 'Bị viêm phế quản', '10 ngày sau tái khám', 250000, '2020-04-17 11:12:20'),
(117, 20, 'Bị phong tê thấp', '10 ngày sau tái khám', 204000, '2020-06-15 11:13:13'),
(118, 18, 'Bị đau bụng', '10 ngày sau tái khám', 162000, '2020-04-14 11:17:01'),
(119, 17, 'Bị đau bụng', '10 ngày sau tái khám', 64000, '2020-05-20 11:17:43'),
(120, 13, 'Bị đau chân', '10 ngày sau tái khám', 222000, '2020-05-21 11:18:44'),
(121, 17, 'Bị viên khớp ', '12 ngày sau tái khám', 268000, '2020-03-10 11:20:23'),
(122, 17, 'Bị đau tay', 'Không được làm gì cả', 186000, '2020-03-11 11:22:27'),
(123, 12, 'Bị loét dạ dày', '10 ngày sau tái khám', 186000, '2020-02-21 11:24:07'),
(124, 18, 'Bị viêm đường ruột', '10 ngày sau tái khám', 594000, '2020-02-22 11:25:48'),
(125, 15, 'Bị viêm chân lông', '12 ngày sau tái khám', 274000, '2020-01-04 11:27:36'),
(126, 12, 'Viêm phế quản', '12 ngày sau tái khám', 174000, '2020-01-14 11:28:12'),
(127, 21, 'Bị viêm dạ dày', '10 ngày sau tái khám', 1011000, '2020-06-21 11:49:57'),
(128, 21, 'bị đau chân', '12 ngày sau tái khám', 268000, '2020-06-21 11:51:06'),
(129, 16, 'Bị viêm dạ dày', '12 ngày sau tái khám', 165000, '2020-06-21 13:26:11');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `kho_thuoc`
--

CREATE TABLE `kho_thuoc` (
  `Id` int(10) UNSIGNED NOT NULL,
  `TenThuoc` varchar(255) COLLATE utf32_unicode_ci NOT NULL,
  `DonVi` varchar(50) COLLATE utf32_unicode_ci NOT NULL,
  `SoLuong` int(50) NOT NULL,
  `DonGia` int(50) NOT NULL,
  `TrangThai` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `kho_thuoc`
--

INSERT INTO `kho_thuoc` (`Id`, `TenThuoc`, `DonVi`, `SoLuong`, `DonGia`, `TrangThai`) VALUES
(14, 'Thao 1', 'Viên', 700, 70000, 1),
(15, 'Thao 2', 'Vỉ', 790, 64000, 1),
(16, 'Thao 3', 'Lọ', 49, 15000, 1),
(17, 'Thao 4', 'Lọ', 28, 14000, 1),
(18, 'Thao 5', 'Vỉ', 10, 40000, 1),
(19, 'Thao 6', 'Vỉ', 0, 20000, 1),
(20, 'Paraxetamon', 'Vỉ', 145, 17000, 1),
(21, 'Trọng 1', 'Vỉ', 48, 70000, 1),
(22, 'Trọng 2', 'Vỉ', 0, 64000, 1),
(23, 'Paradon', 'Viên', 133, 14000, 1),
(24, 'Exsermita', 'Lọ', 0, 30000, 1),
(25, 'Morphin', 'Viên', 56, 42000, 1),
(26, 'Pennicillin', 'Viên', 74, 40000, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thongtin_benhnhan`
--

CREATE TABLE `thongtin_benhnhan` (
  `Id` int(50) UNSIGNED NOT NULL,
  `HoVaTen` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `NgaySinh` varchar(50) COLLATE utf8_vietnamese_ci NOT NULL,
  `GioiTinh` varchar(5) COLLATE utf8_vietnamese_ci NOT NULL,
  `SoDT` varchar(20) COLLATE utf8_vietnamese_ci NOT NULL,
  `SoCMND` int(20) NOT NULL,
  `TrangThai` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `thongtin_benhnhan`
--

INSERT INTO `thongtin_benhnhan` (`Id`, `HoVaTen`, `NgaySinh`, `GioiTinh`, `SoDT`, `SoCMND`, `TrangThai`) VALUES
(7, 'Nguyễn Văn Hoàng', '1997-04-18', '0', '09886304', 2147483647, 1),
(8, 'Huỳnh Thị Thảo', '1998-11-24', '1', '09414754', 1235487148, 1),
(9, 'Lê Thị Thu Nguyệt', '1998-08-27', '1', '016572194', 1235497123, 1),
(10, 'Ngô Đăng Tuyên', '1995-06-24', '0', '016655890', 2147483647, 1),
(11, 'Lê Quốc Tuấn', '1997-03-27', '0', '09104444', 241793520, 1),
(12, 'La Thảo', '1997-04-14', '1', '0123456789', 2147483647, 1),
(13, 'Tuyết Nhung', '1997-02-12', '1', '012345678', 2147483647, 1),
(15, 'Đặng Trung Bơ', '1997-01-13', '0', '0962474234', 2147483647, 1),
(16, 'Đặng Ngọc Nhi', '2015-01-15', '0', '0125487456', 1564875123, 1),
(17, 'Nguyễn Hải Đức', '1997-09-24', '0', '0945135481', 1234884354, 1),
(18, 'Thạch Toàn Trung', '1995-04-18', '0', '0975561245', 164687498, 1),
(19, 'Nguyễn Phương Tuyền', '1991-11-05', '1', '0124874655', 1548943542, 1),
(20, 'Nguyễn Hữu Tín', '1994-02-11', '0', '0974513512', 2147483647, 1),
(21, 'Đặng Lê Phúc Thảo', '1997-04-18', '0', '0964104754', 64815452, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `Id` int(50) UNSIGNED NOT NULL,
  `Username` varchar(50) COLLATE utf8_vietnamese_ci NOT NULL,
  `Password` varchar(50) COLLATE utf8_vietnamese_ci NOT NULL,
  `QuyenTruyCap` varchar(50) COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`Id`, `Username`, `Password`, `QuyenTruyCap`) VALUES
(1, 'admin', 'e10adc3949ba59abbe56e057f20f883e', 'admin'),
(11, 'thaoadmin', 'e10adc3949ba59abbe56e057f20f883e', 'nguoidung'),
(12, 'trongadmin', 'e10adc3949ba59abbe56e057f20f883e', 'admin'),
(14, 'minhtrong123', 'e10adc3949ba59abbe56e057f20f883e', 'admin'),
(15, 'phucthao', '123456', '');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `khambenh`
--
ALTER TABLE `khambenh`
  ADD PRIMARY KEY (`IdKhamBenh`);

--
-- Chỉ mục cho bảng `kho_thuoc`
--
ALTER TABLE `kho_thuoc`
  ADD PRIMARY KEY (`Id`);

--
-- Chỉ mục cho bảng `thongtin_benhnhan`
--
ALTER TABLE `thongtin_benhnhan`
  ADD PRIMARY KEY (`Id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `khambenh`
--
ALTER TABLE `khambenh`
  MODIFY `IdKhamBenh` int(30) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=130;

--
-- AUTO_INCREMENT cho bảng `kho_thuoc`
--
ALTER TABLE `kho_thuoc`
  MODIFY `Id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT cho bảng `thongtin_benhnhan`
--
ALTER TABLE `thongtin_benhnhan`
  MODIFY `Id` int(50) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `Id` int(50) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
