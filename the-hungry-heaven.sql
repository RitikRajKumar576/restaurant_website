-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2023 at 07:44 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `the-hungry-heaven`
--

-- --------------------------------------------------------

--
-- Table structure for table `anniversary`
--

CREATE TABLE `anniversary` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `date` date NOT NULL,
  `people` int(11) NOT NULL,
  `totalbookingprice` float(14,2) NOT NULL,
  `time` time NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `anniversary`
--

INSERT INTO `anniversary` (`id`, `name`, `email`, `phone`, `date`, `people`, `totalbookingprice`, `time`, `status`) VALUES
(1, 'Ritik Raj Kumar', 'rajkumarritik@gmail.com', '07762844471', '2023-06-28', 3, 1500.00, '11:14:00', 1),
(2, 'Robert ', 'robert@gmail.com', '7854278901', '2023-06-28', 4, 2000.00, '20:00:00', 1),
(3, 'Ritik Raj Kumar', 'rajkumarritik@gmail.com', '07762844471', '2023-07-21', 4, 2000.00, '09:05:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `bachelor`
--

CREATE TABLE `bachelor` (
  `id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `date` date NOT NULL,
  `people` int(11) NOT NULL,
  `totalbookingprice` float(14,2) NOT NULL,
  `time` time NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bachelor`
--

INSERT INTO `bachelor` (`id`, `Name`, `Email`, `phone`, `date`, `people`, `totalbookingprice`, `time`, `status`) VALUES
(1, 'Ritik Raj Kumar', 'rajkumarritik@gmail.com', '07762844471', '2023-06-28', 4, 2000.00, '11:14:00', 1),
(2, 'Ritik Raj Kumar', 'rajkumarritik@gmail.com', '07762844471', '2023-07-13', 5, 2500.00, '15:02:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int(20) NOT NULL,
  `Banner_name` varchar(255) NOT NULL,
  `Banner_Desc` varchar(255) NOT NULL,
  `Banner_img` text NOT NULL,
  `action` varchar(30) NOT NULL,
  `status` tinyint(255) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `Banner_name`, `Banner_Desc`, `Banner_img`, `action`, `status`) VALUES
(4, 'Delicious Hungry Heaven', 'gift voucher', 'image/slider4.avif', '', 0),
(5, 'sale of 10% this dish', 'the fresh', 'image/slideshow-11.jpg', '', 1),
(6, 'Delicious Hungry Heaven', 'gift voucher', 'image/slideshow-10.jpg', '', 1),
(7, 'we are open', 'fresh fruits', 'image/freshfood.jpg', '', 1),
(8, 'Delicious Hungry Heaven', 'the fresh', 'image/bachelor_banner_slider_4.jpg', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `birthday`
--

CREATE TABLE `birthday` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `date` date NOT NULL,
  `people` int(10) NOT NULL,
  `totalbookingprice` float(14,2) NOT NULL,
  `time` time NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `birthday`
--

INSERT INTO `birthday` (`id`, `name`, `email`, `phone`, `date`, `people`, `totalbookingprice`, `time`, `status`) VALUES
(5, 'Aman Kumar', 'rajkumarritik@gmail.com', '07762844471', '2023-06-28', 3, 1500.00, '00:00:00', 0),
(6, 'Ritik Raj Kumar', 'rajkumarritik@gmail.com', '7762844471', '2023-06-28', 5, 2500.00, '11:14:00', 1),
(7, 'Ritik Raj Kumar', 'rajkumarritik@gmail.com', '07762844471', '2023-06-28', 4, 2000.00, '11:14:00', 1),
(8, 'manish Kumar', 'manishkumar@gmail.com', '9090908753', '2023-06-29', 4, 2000.00, '11:14:00', 1),
(9, 'Animesh Kumar', 'animeshkumar@gmail.com', '9261586835', '2023-07-12', 4, 2000.00, '03:54:00', 1),
(10, 'Ritik Raj Kumar', 'rajkumarritik@gmail.com', '07762844471', '2023-06-28', 4, 2000.00, '14:00:00', 1),
(11, 'Rahul Mahto', 'rahulmahto987@gmail.com', '7867896575', '2023-07-20', 2, 1000.00, '16:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `people` int(11) NOT NULL,
  `time` time NOT NULL,
  `phone` varchar(13) NOT NULL,
  `date` date NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `totalbookingprice` float(14,2) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `people`, `time`, `phone`, `date`, `name`, `email`, `totalbookingprice`, `status`) VALUES
(9, 6, '11:14:00', '7762844471', '2023-06-21', 'Ritik Raj Kumar', 'rajkumarritik@gmail.com', 600.00, 0),
(10, 2, '20:00:00', '9090909090', '2023-06-22', 'kaif Anwar', 'xyz@gmail.com', 200.00, 0),
(11, 3, '11:14:00', '7762844471', '2023-06-21', 'Ritik Raj Kumar', 'rajkumarritik@gmail.com', 300.00, 0),
(12, 3, '11:14:00', '07762844471', '2023-06-21', 'Ritik Raj Kumar', 'rajkumarritik@gmail.com', 300.00, 0),
(13, 4, '11:14:00', '07762844471', '2023-06-23', 'Ritik Raj Kumar', 'rajkumarritik@gmail.com', 5600.00, 0),
(14, 3, '09:00:00', '07762844471', '2023-06-23', 'Ritik', 'rajkumarritik@gmail.com', 4200.00, 0),
(15, 3, '11:14:00', '07762844471', '2023-06-23', 'Ritik Raj Kumar', 'rajkumarritik@gmail.com', 4200.00, 0),
(16, 4, '03:00:00', '07762844471', '2023-06-23', 'Ritik Raj Kumar', 'rajkumarritik@gmail.com', 5600.00, 0),
(17, 6, '11:14:00', '07762844471', '2023-06-23', 'Ritik Raj Kumar', 'rajkumarritik@gmail.com', 8400.00, 0),
(18, 3, '11:14:00', '07762844471', '2023-06-25', 'Ritik Raj ', 'rajkumarritik@gmail.com', 4200.00, 0),
(19, 5, '08:00:00', '9898008721', '2023-06-26', 'john', 'John@gmail.com', 7000.00, 1),
(20, 6, '11:14:00', '989898989', '2023-06-26', 'Ujjwal', 'ujjwal@gamil.com', 8400.00, 1),
(21, 3, '08:00:00', '909090980', '2023-06-29', 'manish Kumar', 'xyz@gmail.com', 4200.00, 1);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `message` text NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `phone`, `message`, `status`) VALUES
(1, 'Ritik Raj', 'xyz@gmail.com', '7762844471', 'Thank you for your kindness and the meal.....', 0),
(2, 'Ritik Raj Kumar', 'rajkumarritik@gmail.com', '07762844471', 'Thank you so much for your kindness and the meal.....', 1);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` text NOT NULL,
  `status` tinyint(255) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `email`, `password`, `status`) VALUES
(2, 'admin@gmail.com', 'admin', 1),
(4, 'team@gmail.com', '12345', 1),
(5, 'rajkumarritik@gmail.com', 'rR@9431595685', 1);

-- --------------------------------------------------------

--
-- Table structure for table `subscriber`
--

CREATE TABLE `subscriber` (
  `id` int(11) NOT NULL,
  `subscriber` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subscriber`
--

INSERT INTO `subscriber` (`id`, `subscriber`, `status`) VALUES
(3, 'nxyz@gmail.com', 0),
(4, 'mano@gmail.com', 1),
(5, 'rajkumarritik@gmail.com', 1),
(6, 'manishkumar@gmail.com', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anniversary`
--
ALTER TABLE `anniversary`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bachelor`
--
ALTER TABLE `bachelor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `birthday`
--
ALTER TABLE `birthday`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscriber`
--
ALTER TABLE `subscriber`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anniversary`
--
ALTER TABLE `anniversary`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `bachelor`
--
ALTER TABLE `bachelor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `birthday`
--
ALTER TABLE `birthday`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `subscriber`
--
ALTER TABLE `subscriber`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
