-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 23, 2024 at 03:43 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `food_menu`
--

-- --------------------------------------------------------

--
-- Table structure for table `foods`
--

CREATE TABLE `foods` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `type` varchar(100) NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT 200,
  `img` varchar(1023) NOT NULL,
  `visible` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `foods`
--

INSERT INTO `foods` (`id`, `name`, `description`, `price`, `type`, `quantity`, `img`, `visible`) VALUES
(1, 'Phở Bò Tái Nạm', 'Phở ngon 123', 99999.00, 'Món mặn', 1234, 'mon1.jpg', 1),
(2, 'Bánh cuộn Mexicana', 'Bánh ngon tuyệt đối', 99000.00, 'Bánh', 1951, 'mon2.jpg', 1),
(3, 'Bánh cuộn Tex', 'Bánh ngon tuyệt vời', 99000.00, 'Bánh', 200, 'mon3.jpg', 1),
(4, 'Nộm hải sản', 'Nộm ngon tuyệt đỉnh', 120000.00, 'Gỏi, nộm', 200, 'mon4.jpg', 1),
(5, 'Gỏi cuốn', 'Gỏi ngon tuyệt hảo', 110000.00, 'Gỏi, nộm', 200, 'mon5.jpg', 1),
(6, 'Sườn xào', 'Sườn xào siêu ngon', 70000.00, 'Món mặn', 200, 'mon6.jpg', 1),
(7, 'Gà giòn không xương', 'Gà ngon', 50000.00, 'Món mặn', 200, 'mon7.jpg', 1),
(8, 'Khuỷu cánh gà cay', 'Cánh gà ngon', 60000.00, 'Món mặn', 200, 'mon8.jpg', 1),
(9, 'Pepsi', 'Nước giải khát ngon', 10000.00, 'Đồ uống', 200, 'mon9.jpg', 1),
(10, 'Trà Olong', 'Trà olong ngon', 10000.00, 'Đồ uống', 200, 'mon10.jpg', 1),
(11, 'Sữa chua hoa quả', 'Món tráng miệng ngon', 25000.00, 'Món tráng miệng', 200, 'mon11.jpg', 1),
(12, 'Bánh bông lan nho nhỏ', 'Bánh bông lan ngon', 30000.00, 'Món tráng miệng', 200, 'mon12.jpg', 1),
(13, 'Đậu lướt ván', 'Đậu rán ngon', 20000.00, 'Món mặn', 200, 'mon14.jpg', 1),
(14, 'Bánh bông lan nho lớn', 'Bánh bông lan ngon', 38000.00, 'Món tráng miệng', 200, 'mon13.jpg', 1),
(21, 'Minh Tu Tran', 'Phở ngon tuyệt hảo', 123.00, 'Bánh', 2, 'mon1.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(5) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`) VALUES
(3, 'minh', '202cb962ac59075b964b07152d234b70', 'user'),
(4, 'superadmin', '44a44f44dee10dbf5855bd92a678fab5', 'admin'),
(5, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'user'),
(6, 'trmmo', '202cb962ac59075b964b07152d234b70', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `foods`
--
ALTER TABLE `foods`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `foods`
--
ALTER TABLE `foods`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
