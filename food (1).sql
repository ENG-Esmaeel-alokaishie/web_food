-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2023 at 03:31 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `food`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_prodect`
--

CREATE TABLE `admin_prodect` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `id_cat` int(11) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_prodect`
--

INSERT INTO `admin_prodect` (`id`, `name`, `price`, `id_cat`, `image`) VALUES
(5, 'بتزاء', '100', 1, 'images/burger.png'),
(6, 'سندوتش', '120', 2, 'images/cat_4.png'),
(7, 'بيض', '100', 3, 'images/pizza3.png'),
(10, 'سمك', '210', 1, 'images/2.png'),
(11, 'أندومي', '80', 1, 'images/3.png'),
(12, 'سلطه', '30', 1, 'images/6.png');

-- --------------------------------------------------------

--
-- Table structure for table `categ`
--

CREATE TABLE `categ` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categ`
--

INSERT INTO `categ` (`id`, `name`, `image`) VALUES
(1, 'أيسكريم', 'images/burger.png'),
(2, 'حلويات', ''),
(3, 'موكلات رمضانية', ''),
(4, 'مشروبات', ''),
(5, 'كيك', ''),
(6, 'معجنات', '');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name_pro` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `quan` int(100) NOT NULL,
  `total` int(100) NOT NULL,
  `id_pro` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`id`, `user_id`, `name_pro`, `price`, `image`, `quan`, `total`, `id_pro`) VALUES
(17, 1, 'سندوتش', '120', 'images/cat_4.png', 30, 360, 6),
(18, 1, 'سمك', '210', 'images/2.png', 8, 1260, 10),
(19, 1, 'بتزاء', '100', 'images/burger.png', 5, 500, 5);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `street` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `phone`, `email`, `password`, `city`, `street`) VALUES
(1, 'ali', 'alkpati', '777777777', 'ahmed@gmail.com', '1234', 'Taiz', 'gamal'),
(2, 'Ali', 'Alabsi', '0771750533', 'admin1@gmail.com', '11', 'Taiz', 'Yemen'),
(3, 'abu', 'bakr', '666', 'admin1@gmail.com', '1111', 'Taiz', 'Yemen'),
(4, 'abu', 'bakr', '7777', 'admin1@gmail.com', '1234', 'Taiz', 'Yemen');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_prodect`
--
ALTER TABLE `admin_prodect`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_cat` (`id_cat`);

--
-- Indexes for table `categ`
--
ALTER TABLE `categ`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
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
-- AUTO_INCREMENT for table `admin_prodect`
--
ALTER TABLE `admin_prodect`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `categ`
--
ALTER TABLE `categ`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin_prodect`
--
ALTER TABLE `admin_prodect`
  ADD CONSTRAINT `admin_prodect_ibfk_1` FOREIGN KEY (`id_cat`) REFERENCES `categ` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
