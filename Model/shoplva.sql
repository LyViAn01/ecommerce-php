-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 26, 2024 lúc 08:20 AM
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
-- Cơ sở dữ liệu: `shoplva`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan1`
--

CREATE TABLE `binhluan1` (
  `mabl` int(11) NOT NULL,
  `mahh` int(11) NOT NULL,
  `makh` int(11) NOT NULL,
  `ngaybl` date NOT NULL,
  `noidung` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment`
--

CREATE TABLE `comment` (
  `idcomment` int(11) NOT NULL,
  `idkh` int(11) NOT NULL,
  `idhanghoa` int(11) NOT NULL,
  `content` text NOT NULL,
  `luotthich` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `comment`
--

INSERT INTO `comment` (`idcomment`, `idkh`, `idhanghoa`, `content`, `luotthich`) VALUES
(1, 3, 24, '  đẹp', 0),
(2, 3, 22, '  thấp', 0),
(3, 6, 20, '  ahihi', 0),
(5, 6, 20, ' xịn', 0),
(6, 6, 20, '  đẹp', 0),
(7, 6, 20, ' tuyệt vời', 0),
(9, 6, 17, '  hello', 0),
(10, 6, 17, '  ahihih', 0),
(11, 6, 6, '  đẹp\r\n', 0),
(12, 8, 12, '  đẹp', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cthanghoa`
--

CREATE TABLE `cthanghoa` (
  `idhanghoa` int(11) NOT NULL,
  `idmau` int(11) NOT NULL,
  `dongia` float NOT NULL,
  `soluongton` int(11) NOT NULL,
  `soluotmua` int(11) NOT NULL,
  `hinh` varchar(100) NOT NULL,
  `giamgia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `cthanghoa`
--

INSERT INTO `cthanghoa` (`idhanghoa`, `idmau`, `dongia`, `soluongton`, `soluotmua`, `hinh`, `giamgia`) VALUES
(1, 0, 3990000, 10, 10, 'OPPO-A18.png', 0),
(1, 1, 3990000, 10, 10, 'OPPO-A18-1.png', 0),
(1, 2, 3990000, 10, 10, 'OPPO-A18-2.png', 0),
(1, 3, 3990000, 10, 10, 'OPPO-A18-3.png', 0),
(1, 4, 3990000, 10, 10, 'OPPO-A18-4.png', 0),
(2, 0, 4790000, 10, 100, 'Samsung-Galaxy-A15.png', 4990000),
(3, 0, 4390000, 10, 10, 'Redmi-Note-13-Series.png', 4890000),
(4, 0, 11990000, 10, 100, 'Samsung-Galaxy-S22-5G.png', 21990000),
(5, 0, 8990000, 10, 100, 'HONOR-X9b5G.png', 0),
(6, 0, 32490000, 8, 149, 'iPhone-15Pro-Max.png', 34990000),
(7, 0, 31490000, 10, 100, 'Samsung-Galaxy-Z-Fold5-5G.png', 40990000),
(8, 0, 23490000, 10, 10, 'Samsung-Galaxy-S23-Ultra-5G.png', 31990000),
(9, 0, 8990000, 4, 16, 'OPPO-Reno10-5G.png', 0),
(10, 0, 7490000, 10, 100, 'Samsung-Galaxy-A34-5G.png', 4990000),
(11, 0, 3790000, -5, 31, 'Xiaomi-Redmi-Note-12.png', 4990000),
(12, 0, 27190000, 8, 102, 'iPhone-14-Pro-Max.png', 29990000),
(13, 0, 17990000, 10, 100, 'Samsung-Galaxy-S23-Plus-5G.png', 26990000),
(14, 0, 11990000, 8, 102, 'Samsung-Galaxy-Z-Flip4-5G.png', 0),
(15, 0, 1890000, 4, 106, 'Xiaomi-Redmi-A2.png', 2190000),
(16, 0, 3690000, 5, 15, 'Samsung-Galaxy-A05s.png', 0),
(17, 0, 8190000, 9, 11, 'Vivo-V25-Pro-5G.png', 13990000),
(18, 0, 7490000, 10, 100, 'Vivo-V25-5G.png', 10490000),
(19, 0, 6490000, 7, 21, 'Vivo-V25e.png', 8490000),
(20, 0, 4990000, 3, 107, 'Vivo-Y35.png', 6990000),
(66, 3, 7000000, 10, 0, 'iPhone-14-Pro-Max.png', 0),
(67, 1, 5000, 10, 0, 'sen-1.jpg', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cthoadon`
--

CREATE TABLE `cthoadon` (
  `masohd` int(11) NOT NULL,
  `mahh` int(11) NOT NULL,
  `soluongmua` int(11) NOT NULL,
  `thanhtien` int(11) NOT NULL,
  `tinhtrang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `cthoadon`
--

INSERT INTO `cthoadon` (`masohd`, `mahh`, `soluongmua`, `thanhtien`, `tinhtrang`) VALUES
(1, 15, 1, 1890000, 0),
(2, 15, 1, 1890000, 0),
(3, 15, 1, 1890000, 0),
(4, 15, 1, 1890000, 0),
(5, 15, 1, 1890000, 0),
(6, 15, 4, 7560000, 0),
(7, 15, 4, 7560000, 0),
(8, 15, 4, 7560000, 0),
(8, 17, 3, 24570000, 0),
(9, 15, 4, 7560000, 0),
(9, 17, 3, 24570000, 0),
(10, 15, 4, 7560000, 0),
(10, 17, 3, 24570000, 0),
(11, 15, 4, 7560000, 0),
(11, 17, 3, 24570000, 0),
(12, 6, 3, 97470000, 0),
(13, 6, 3, 97470000, 0),
(13, 20, 1, 4990000, 0),
(14, 19, 1, 6490000, 0),
(15, 19, 1, 6490000, 0),
(16, 19, 1, 6490000, 0),
(16, 20, 1, 4990000, 0),
(17, 19, 1, 6490000, 0),
(17, 20, 2, 9980000, 0),
(18, 19, 1, 6490000, 0),
(19, 19, 1, 6490000, 0),
(20, 19, 1, 6490000, 0),
(21, 19, 1, 6490000, 0),
(22, 19, 1, 6490000, 0),
(23, 19, 1, 6490000, 0),
(24, 19, 1, 6490000, 0),
(25, 19, 1, 6490000, 0),
(26, 19, 1, 6490000, 0),
(27, 19, 1, 6490000, 0),
(28, 19, 1, 6490000, 0),
(29, 19, 1, 6490000, 0),
(30, 19, 1, 6490000, 0),
(31, 19, 1, 6490000, 0),
(32, 19, 1, 6490000, 0),
(33, 19, 1, 6490000, 0),
(34, 19, 1, 6490000, 0),
(35, 19, 1, 6490000, 0),
(36, 6, 1, 32490000, 0),
(37, 6, 1, 32490000, 0),
(38, 6, 1, 32490000, 0),
(39, 6, 1, 32490000, 0),
(40, 11, 4, 15160000, 0),
(41, 11, 4, 15160000, 0),
(42, 11, 4, 15160000, 0),
(43, 11, 4, 15160000, 0),
(44, 16, 1, 3690000, 0),
(45, 16, 3, 11070000, 0),
(46, 6, 3, 97470000, 0),
(47, 6, 3, 97470000, 0),
(48, 6, 3, 97470000, 0),
(49, 14, 1, 11990000, 0),
(50, 14, 1, 11990000, 0),
(51, 16, 1, 3690000, 0),
(51, 20, 3, 14970000, 0),
(52, 16, 1, 3690000, 0),
(52, 20, 3, 14970000, 0),
(53, 16, 1, 3690000, 0),
(53, 20, 3, 14970000, 0),
(54, 16, 1, 3690000, 0),
(54, 20, 3, 14970000, 0),
(55, 16, 1, 3690000, 0),
(55, 20, 3, 14970000, 0),
(56, 16, 1, 3690000, 0),
(56, 20, 3, 14970000, 0),
(57, 16, 1, 3690000, 0),
(57, 20, 3, 14970000, 0),
(58, 16, 1, 3690000, 0),
(58, 20, 3, 14970000, 0),
(59, 16, 1, 3690000, 0),
(59, 20, 3, 14970000, 0),
(60, 16, 1, 3690000, 0),
(60, 20, 3, 14970000, 0),
(61, 16, 1, 3690000, 0),
(61, 20, 3, 14970000, 0),
(62, 16, 1, 3690000, 0),
(62, 20, 3, 14970000, 0),
(63, 16, 1, 3690000, 0),
(63, 20, 3, 14970000, 0),
(64, 20, 1, 4990000, 0),
(65, 6, 2, 64980000, 0),
(66, 6, 2, 64980000, 0),
(67, 6, 2, 64980000, 0),
(68, 6, 2, 64980000, 0),
(69, 17, 1, 8190000, 0),
(70, 9, 2, 17980000, 0),
(71, 20, 3, 14970000, 0),
(72, 19, 1, 6490000, 0),
(73, 19, 1, 6490000, 0),
(74, 6, 1, 32490000, 0),
(75, 6, 1, 32490000, 0),
(76, 11, 1, 3790000, 0),
(76, 15, 2, 3780000, 0),
(77, 11, 1, 3790000, 0),
(77, 15, 2, 3780000, 0),
(78, 11, 1, 3790000, 0),
(78, 15, 2, 3780000, 0),
(79, 12, 2, 54380000, 0),
(80, 9, 1, 8990000, 0),
(80, 11, 2, 7580000, 0),
(81, 9, 1, 8990000, 0),
(81, 11, 2, 7580000, 0),
(82, 9, 1, 8990000, 0),
(82, 11, 2, 7580000, 0),
(83, 9, 1, 8990000, 0),
(83, 11, 2, 7580000, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hanghoa`
--

CREATE TABLE `hanghoa` (
  `mahh` int(11) NOT NULL,
  `tenhh` varchar(60) NOT NULL,
  `maloai` int(11) NOT NULL,
  `dacbiet` bit(1) NOT NULL,
  `soluotxem` int(11) NOT NULL,
  `ngaylap` date DEFAULT NULL,
  `hang` varchar(15) NOT NULL,
  `mota` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `hanghoa`
--

INSERT INTO `hanghoa` (`mahh`, `tenhh`, `maloai`, `dacbiet`, `soluotxem`, `ngaylap`, `hang`, `mota`) VALUES
(1, 'Samsung Galaxy S23 Plus 5G 256GB', 1, b'0', 150, '2025-01-01', 'Samsung', 'Proud to be the first Galaxy phone to possess a superb 200MP sensor, the Samsung Galaxy S23 Ultra takes users into a world of cutting-edge photography. The power is also explosive with the most powerful Snapdragon processor for revolutionary gaming performance. All wrapped up in a premium and sustainable design for now and the future.'),
(2, 'Samsung Galaxy A15 128GB', 1, b'0', 150, '2025-01-01', 'Samsung', 'Samsung Galaxy A15 is a great low-cost product for students in 2024. The phone stands out with new, modern technologies, combined with a youthful Key Island design, typical of Gen Z. Accompanying that is a large battery for you to comfortably use all day long. This is the smartphone that young users cannot ignore in 2024'),
(3, 'Redmi Note 13 Series', 1, b'0', 150, '2025-01-01', 'Xiaomi', 'Meticulously finished down to the smallest details, Xiaomi Redmi Note 13 was born to enhance the experience and provide users with the perfect entertainment space. The phone possesses a series of powerful parameters and outstanding features in the smartphone segment of around 5 million, definitely an excellent choice that Mi Fans should not miss.'),
(4, 'Samsung Galaxy S22 5G 128GB', 1, b'0', 150, '2025-01-01', 'Samsung', 'Samsung Galaxy S22 is a leap forward in video technology in the mobile generation. At the same time, the phone also opens up a series of today\'s leading breakthrough innovations, from the \"flattering\" flat beveled screen to the first advanced 4nm processor on the Samsung smartphone generation.'),
(5, 'HONOR X9b 5G', 1, b'0', 150, '2025-01-01', 'Honor', 'In addition to its modern and attractive appearance, HONOR X9b is also equipped with a super camera system, super sharp AMOLED screen, powerful Snapdragon processor, abundant RAM capacity and huge battery. Not only that, the product also impresses with its incredible durability and comprehensive drop protection for the screen.'),
(6, 'iPhone 15 Pro Max 256GB', 1, b'0', 150, '2025-01-01', 'Apple', 'iPhone 15 Pro Max is the most advanced iPhone with the largest screen, best battery life, strongest configuration and super durable, super light aerospace-standard Titanium frame design. iPhone 15 Pro Max possesses Apple\'s most outstanding features. Accordingly, users will experience a high-end iPhone with \"huge\" performance with A17 Pro chip, titanium frame, upgraded zoom capabilities, new action buttons,...'),
(7, 'Samsung Galaxy Z Fold5 5G 256GB ', 1, b'0', 150, '2025-01-01', 'Samsung', 'Samsung Galaxy Z Fold5 affirms its position as a pioneering folding phone, boldly breaking through old boundaries, leading with advanced Flex hinge technology. The device also opens up the most comprehensive range of smart experiences through a large screen, outstanding performance, S-Pen compatibility, allowing optimal multitasking, speeding up work effectively, giving users confidence. Connect flexibly with Galaxy Z Fold 5.'),
(8, 'Samsung Galaxy S23 Ultra 5G 256GB', 1, b'0', 150, '2025-01-01', 'Samsung', 'Proud to be the first Galaxy phone to possess a superb 200MP sensor, the Samsung Galaxy S23 Ultra takes users into a world of cutting-edge photography. The power is also explosive with the most powerful Snapdragon processor for revolutionary gaming performance. All wrapped up in a premium and sustainable design for now and the future.'),
(9, 'OPPO Reno10 5G 128GB', 1, b'0', 150, '2025-01-01', 'OPPO', 'Possessing many impressive improvements, OPPO Reno10 5G helps users enjoy new technologies. From the powerful Dimensity 7050 outstanding performance, convenient 67W fast charging to the professional portrait camera system. OPPO Reno10 5G will be for those who are looking for a phone with excellent portrait photography and smooth configuration.'),
(10, 'Samsung Galaxy A34 5G', 1, b'0', 150, '2025-01-01', 'Samsung', 'Possessing top features in the segment, with a reasonable price, Samsung Galaxy A34 is a \"comrade\" standing shoulder to shoulder with Gen Z, ready to scale all activities and conquer all challenges. Experience the Galaxy A34 5G, you will see the difference from modern design, 120Hz screen, 3 sharp 48MP cameras to powerful Dimensity 1080 performance.'),
(11, 'Xiaomi Redmi Note 12 4GB-128GB', 1, b'0', 150, '2025-01-01', 'Xiaomi', 'To enhance your experience and enjoy the perfect living space, Redmi Note 12 is an indispensable product. The phone possesses strong parameters in the 5 million VND segment. This is a choice that is difficult to ignore for MiFan in particular and users in general.'),
(12, 'iPhone 14 Pro Max 128GB', 1, b'0', 150, '2025-01-01', 'Apple', 'iPhone 14 Pro Max brings experiences that cannot be found on any previous generation of iPhone with luxurious Deep Purple color, first 48MP camera, A16 Bionic chip and flexible Dynamic Island \"pill\" screen, flattering eyes.'),
(13, 'Samsung Galaxy S23 Plus 5G 256GB', 1, b'0', 150, '2025-01-01', 'Samsung', 'Proud to be the first Galaxy phone to possess a superb 200MP sensor, the Samsung Galaxy S23 Ultra takes users into a world of cutting-edge photography. The power is also explosive with the most powerful Snapdragon processor for revolutionary gaming performance. All wrapped up in a premium and sustainable design for now and the future.'),
(14, 'Samsung Galaxy Z Flip4 5G 128GB', 1, b'0', 150, '2025-01-01', 'Samsung', 'Compact and sophisticated, Samsung Galaxy Z Flip4 is a smartphone born for fashionistas. The graceful folding mechanism, gentle color set and series of shooting functions will captivate beauty lovers.'),
(15, 'Xiaomi Redmi A2 2GB-32GB', 1, b'0', 150, '2025-01-01', 'Xiaomi', 'As the next low-cost smartphone coming to the Vietnamese market, Redmi A2 is a reasonable choice for common users looking for a tool to support video calling, web surfing or some other basic tasks. This new Xiaomi phone will ensure a large battery life for 2 days of use along with stable performance.'),
(16, 'Samsung Galaxy A05s 128GB', 1, b'0', 150, '2025-01-01', 'Samsung', 'Samsung Galaxy A05s is a low-cost, high-performance smartphone, possessing the segment\'s first Snapdragon 680 chip, helping users enjoy a smooth, stable experience. And yet, the phone also scores points with its 5,000mAh battery, 3 quality 50MP cameras and the largest screen ever in the Galaxy A series.'),
(18, 'Vivo V25 5G 8GB-128GB', 1, b'0', 150, '2025-01-01', 'Vivo', 'vivo V25 5G is destined to be the successor to the success of its predecessor, so the phone receives many upgrades and promises to bring a new winning formula. With an eye-catching appearance, a camera system like a professional camera and outstanding performance, it is not difficult for V25 to \"squeeze\" into the market.'),
(19, 'Vivo V25e 8GB - 128GB ', 1, b'0', 150, '2025-01-01', 'Vivo', 'As usual, vivo V25 series will be vivo\'s next V series that will launch this year. vivo V25e will bring many new improvements compared to its predecessor, bringing with it an \"attractive design\", a camera cluster that exceeds expectations, smooth performance and more. You won\'t be surprised by what this brand new phone brings.'),
(20, 'Vivo Y35 8GB-128GB', 1, b'0', 150, '2025-01-01', 'Vivo', 'As a product that continues the success of the Y-series, vivo Y35 continues to bring a unique design language with impressive lines. The phone also offers strong performance and great multitasking capabilities. Everything on the latest vivo phone promises to meet the needs of users in the price segment.');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

CREATE TABLE `hoadon` (
  `masohd` int(11) NOT NULL,
  `makh` int(11) NOT NULL,
  `ngaydat` date NOT NULL,
  `tongtien` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `hoadon`
--

INSERT INTO `hoadon` (`masohd`, `makh`, `ngaydat`, `tongtien`) VALUES
(1, 7, '2024-01-17', 1890000),
(2, 7, '2024-01-17', 1890000),
(3, 7, '2024-01-17', 1890000),
(4, 7, '2024-01-17', 1890000),
(5, 7, '2024-01-17', 1890000),
(6, 7, '2024-01-17', 7560000),
(7, 7, '2024-01-17', 7560000),
(8, 7, '2024-01-17', 32130000),
(9, 7, '2024-01-17', 32130000),
(10, 7, '2024-01-17', 32130000),
(11, 7, '2024-01-17', 32130000),
(12, 7, '2024-01-17', 97470000),
(13, 7, '2024-01-17', 102460000),
(14, 6, '2024-01-17', 6490000),
(15, 6, '2024-01-17', 6490000),
(16, 6, '2024-01-17', 11480000),
(17, 6, '2024-01-17', 16470000),
(18, 6, '2024-01-17', 6490000),
(19, 6, '2024-01-17', 6490000),
(20, 6, '2024-01-17', 6490000),
(21, 6, '2024-01-17', 6490000),
(22, 6, '2024-01-17', 6490000),
(23, 6, '2024-01-17', 6490000),
(24, 6, '2024-01-17', 6490000),
(25, 6, '2024-01-17', 6490000),
(26, 6, '2024-01-17', 6490000),
(27, 6, '2024-01-17', 6490000),
(28, 6, '2024-01-17', 6490000),
(29, 6, '2024-01-17', 6490000),
(30, 6, '2024-01-17', 6490000),
(31, 6, '2024-01-17', 6490000),
(32, 6, '2024-01-17', 6490000),
(33, 6, '2024-01-17', 6490000),
(34, 6, '2024-01-17', 6490000),
(35, 6, '2024-01-17', 6490000),
(36, 6, '2024-01-17', 32490000),
(37, 6, '2024-01-17', 32490000),
(38, 6, '2024-01-17', 32490000),
(39, 6, '2024-01-17', 32490000),
(40, 6, '2024-01-17', 15160000),
(41, 6, '2024-01-17', 15160000),
(42, 6, '2024-01-17', 15160000),
(43, 6, '2024-01-17', 15160000),
(44, 6, '2024-01-18', 3690000),
(45, 6, '2024-01-18', 11070000),
(46, 6, '2024-01-18', 97470000),
(47, 6, '2024-01-18', 97470000),
(48, 6, '2024-01-18', 97470000),
(49, 6, '2024-01-18', 11990000),
(50, 6, '2024-01-18', 11990000),
(51, 6, '2024-02-22', 18660000),
(52, 6, '2024-02-22', 18660000),
(53, 6, '2024-02-22', 18660000),
(54, 6, '2024-02-22', 18660000),
(55, 6, '2024-02-22', 18660000),
(56, 6, '2024-02-22', 18660000),
(57, 6, '2024-02-22', 18660000),
(58, 6, '2024-02-22', 18660000),
(59, 6, '2024-02-22', 18660000),
(60, 6, '2024-02-22', 18660000),
(61, 6, '2024-02-22', 18660000),
(62, 6, '2024-02-22', 18660000),
(63, 6, '2024-02-22', 18660000),
(64, 6, '2024-02-22', 4990000),
(65, 6, '2024-02-22', 64980000),
(66, 6, '2024-02-22', 64980000),
(67, 6, '2024-02-22', 64980000),
(68, 6, '2024-02-22', 64980000),
(69, 6, '2024-02-22', 8190000),
(70, 6, '2024-02-22', 17980000),
(71, 6, '2024-02-22', 14970000),
(72, 8, '2024-03-20', 6490000),
(73, 8, '2024-03-20', 6490000),
(74, 8, '2024-03-20', 32490000),
(75, 8, '2024-03-20', 32490000),
(76, 8, '2024-03-20', 7570000),
(77, 8, '2024-03-20', 7570000),
(78, 8, '2024-03-20', 7570000),
(79, 8, '2024-03-20', 54380000),
(80, 13, '2024-03-21', 16570000),
(81, 13, '2024-03-21', 16570000),
(82, 13, '2024-03-21', 16570000),
(83, 13, '2024-03-21', 16570000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `makh` int(11) NOT NULL,
  `tenkh` varchar(50) NOT NULL,
  `username` varchar(25) NOT NULL,
  `matkhau` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `diachi` text DEFAULT NULL,
  `sodienthoai` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`makh`, `tenkh`, `username`, `matkhau`, `email`, `diachi`, `sodienthoai`) VALUES
(1, 'Văn bé', 'Bé', '8f8e2909a8f683c31159ee51d593a642', 'be@gmail.com', 'hcm', '9090789678'),
(2, 'teo', 'teoteo', '3ff19fad9f5844248f601ab23381cc88', 'teo123@gmail.com', 'hcm', '9090789698'),
(3, 'béo', 'béo', '3ff19fad9f5844248f601ab23381cc88', 'beo123@gmail.com', 'hcm', '0987654321'),
(4, 'lý', 'Lý', '87f038af05196e3dfa958a521f6f400e', 'ly.itc@gmail.com', 'hcm', '9090789699'),
(6, 'Lý Vĩ An', 'bean', 'f5100501b826bb4429d26271506d56b7', 'lyvyan07@gmail.com', 'vũng tàu', '0388840179'),
(8, 'lva', 'lva', 'f5100501b826bb4429d26271506d56b7', 'lva@gmail.com', 'lva', '0388840179'),
(9, 'Bean', 'bean', '', 'bean@gmail.com', 'kênh tân hóa/phú trung/tân phú', '1234567890');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loai`
--

CREATE TABLE `loai` (
  `maloai` int(11) NOT NULL,
  `tenloai` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `loai`
--

INSERT INTO `loai` (`maloai`, `tenloai`) VALUES
(1, 'Điện thoại'),
(2, 'TiVi'),
(3, 'laptop');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `mausac`
--

CREATE TABLE `mausac` (
  `idmau` int(11) NOT NULL,
  `mausac` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `mausac`
--

INSERT INTO `mausac` (`idmau`, `mausac`) VALUES
(1, 'Black'),
(2, 'Silver'),
(3, 'White'),
(4, 'Blue'),
(5, 'Red'),
(6, 'Gold'),
(7, 'Green'),
(8, 'Dark Silver');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhanvien`
--

CREATE TABLE `nhanvien` (
  `idnv` int(11) NOT NULL,
  `hoten` varchar(250) NOT NULL,
  `dia` text NOT NULL,
  `username` varchar(250) NOT NULL,
  `matkhau` text NOT NULL,
  `role` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `nhanvien`
--

INSERT INTO `nhanvien` (`idnv`, `hoten`, `dia`, `username`, `matkhau`, `role`) VALUES
(1, 'admin', 'hcm', 'admin', '123', 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `binhluan1`
--
ALTER TABLE `binhluan1`
  ADD PRIMARY KEY (`mabl`);

--
-- Chỉ mục cho bảng `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`idcomment`);

--
-- Chỉ mục cho bảng `cthanghoa`
--
ALTER TABLE `cthanghoa`
  ADD PRIMARY KEY (`idhanghoa`,`idmau`) USING BTREE;

--
-- Chỉ mục cho bảng `cthoadon`
--
ALTER TABLE `cthoadon`
  ADD PRIMARY KEY (`masohd`,`mahh`);

--
-- Chỉ mục cho bảng `hanghoa`
--
ALTER TABLE `hanghoa`
  ADD PRIMARY KEY (`mahh`);

--
-- Chỉ mục cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`masohd`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`makh`);

--
-- Chỉ mục cho bảng `loai`
--
ALTER TABLE `loai`
  ADD PRIMARY KEY (`maloai`);

--
-- Chỉ mục cho bảng `mausac`
--
ALTER TABLE `mausac`
  ADD PRIMARY KEY (`idmau`);

--
-- Chỉ mục cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`idnv`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `binhluan1`
--
ALTER TABLE `binhluan1`
  MODIFY `mabl` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `comment`
--
ALTER TABLE `comment`
  MODIFY `idcomment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `hanghoa`
--
ALTER TABLE `hanghoa`
  MODIFY `mahh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `masohd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `makh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `loai`
--
ALTER TABLE `loai`
  MODIFY `maloai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT cho bảng `mausac`
--
ALTER TABLE `mausac`
  MODIFY `idmau` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  MODIFY `idnv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
