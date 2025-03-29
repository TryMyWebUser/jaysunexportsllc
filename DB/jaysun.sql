-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2025 at 06:21 AM
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
-- Database: `jaysun`
--

-- --------------------------------------------------------

--
-- Table structure for table `auth`
--

CREATE TABLE `auth` (
  `id` int(11) NOT NULL,
  `username` varchar(225) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `auth`
--

INSERT INTO `auth` (`id`, `username`, `email`, `password`, `created_at`) VALUES
(1, 'jaysun', 'jaysunexportsllc@gmail.com', 'jaysun@2025', '2025-03-28 01:40:13');

-- --------------------------------------------------------

--
-- Table structure for table `cate`
--

CREATE TABLE `cate` (
  `id` int(11) NOT NULL,
  `category` varchar(225) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cate`
--

INSERT INTO `cate` (`id`, `category`, `created_at`) VALUES
(3, 'Fan Blade', '2025-03-29 10:15:30'),
(4, 'Elevator', '2025-03-29 10:16:35'),
(5, 'Terminal Plate', '2025-03-29 10:16:48'),
(6, 'Silicon Carbite', '2025-03-29 10:16:57'),
(7, 'Conveyor Belt', '2025-03-29 10:17:09'),
(8, 'Bearing', '2025-03-29 10:17:27'),
(9, 'Impellers', '2025-03-29 10:17:38'),
(10, 'Cooling Fan', '2025-03-29 10:17:47'),
(11, 'Capacitors', '2025-03-29 10:17:58'),
(12, 'Air Filters', '2025-03-29 10:18:09');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `img` varchar(1024) NOT NULL,
  `title` varchar(255) NOT NULL,
  `category` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `img`, `title`, `category`, `created_at`) VALUES
(10, '../uploads/Products/b-blog-01.jpg', 'COOLING FAN BLADE', 'Fan Blade', '2025-03-29 10:20:02'),
(11, '../uploads/Products/b-blog-02.jpg', 'AXIAL FAN BLADE', 'Fan Blade', '2025-03-29 10:20:45'),
(12, '../uploads/Products/b-blog-023.jpg', 'PLASTIC COOLING FAN BLADE', 'Fan Blade', '2025-03-29 10:21:28'),
(13, '../uploads/Products/b-blog-03.jpg', 'PLASTIC ELEVATOR BUCKET', 'Elevator', '2025-03-29 10:21:58'),
(14, '../uploads/Products/b-blog-04.jpg', 'M.S ELEVATOR BUCKET', 'Elevator', '2025-03-29 10:22:14'),
(15, '../uploads/Products/b-blog-05.jpg', 'S.S. ELEVATOR BUCKET', 'Elevator', '2025-03-29 10:22:28'),
(16, '../uploads/Products/b-blog-022.jpg', 'PLASTIC ELEVATOR BUCKET', 'Elevator', '2025-03-29 10:22:47'),
(17, '../uploads/Products/b-blog-06.jpg', 'MOTOR TERMINAL PLATE', 'Terminal Plate', '2025-03-29 10:23:10'),
(18, '../uploads/Products/b-blog-07.jpg', 'SILICON CARBIDE POWDER', 'Silicon Carbite', '2025-03-29 10:23:32'),
(19, '../uploads/Products/b-blog-08.jpg', 'SILICON CARBIDE ROD', 'Silicon Carbite', '2025-03-29 10:23:52'),
(20, '../uploads/Products/b-blog-09.jpg', 'RUBBER CONVEYOR BELT', 'Conveyor Belt', '2025-03-29 10:24:16'),
(21, '../uploads/Products/b-blog-010.jpg', 'STAINLESS STEEL CONVEYOR BELT', 'Conveyor Belt', '2025-03-29 10:24:32'),
(22, '../uploads/Products/b-blog-011.jpg', 'PVC CONVEYOR BELT', 'Conveyor Belt', '2025-03-29 10:24:48'),
(23, '../uploads/Products/b-blog-012.jpg', 'PU CONVEYOR BELT', 'Conveyor Belt', '2025-03-29 10:25:05'),
(24, '../uploads/Products/b-blog-022 - Copy.jpg', 'PLASTIC ELEVATOR BUCKET', 'Conveyor Belt', '2025-03-29 10:25:38'),
(25, '../uploads/Products/b-blog-021.jpg', 'STEEL CONVEYOR BELT', 'Conveyor Belt', '2025-03-29 10:26:01'),
(26, '../uploads/Products/b-blog-020.jpg', 'STEEL CONVEYOR BELT', 'Conveyor Belt', '2025-03-29 10:26:18'),
(27, '../uploads/Products/b-blog-013.jpg', 'BEARINGS', 'Bearing', '2025-03-29 10:26:45'),
(28, '../uploads/Products/b-blog-014.jpg', 'FRP IMPELLER', 'Impellers', '2025-03-29 10:27:05'),
(29, '../uploads/Products/b-blog-025.jpg', 'IMPELLER', 'Impellers', '2025-03-29 10:27:22'),
(30, '../uploads/Products/b-blog-01 - Copy.jpg', 'COOLING FAN BLADE', 'Cooling Fan', '2025-03-29 10:27:47'),
(31, '../uploads/Products/b-blog-015.jpg', 'CAPACITORS', 'Capacitors', '2025-03-29 10:28:11'),
(32, '../uploads/Products/b-blog-024.jpg', 'CAPACITOR', 'Capacitors', '2025-03-29 10:28:31'),
(33, '../uploads/Products/b-blog-019.jpg', 'CAPACITORS', 'Capacitors', '2025-03-29 10:28:49'),
(34, '../uploads/Products/b-blog-017.jpg', 'AIR FILTERS', 'Air Filters', '2025-03-29 10:29:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auth`
--
ALTER TABLE `auth`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cate`
--
ALTER TABLE `cate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auth`
--
ALTER TABLE `auth`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cate`
--
ALTER TABLE `cate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
