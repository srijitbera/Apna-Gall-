-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2024 at 04:12 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aapnadb`
--

-- --------------------------------------------------------

--
-- Table structure for table `place`
--

CREATE TABLE `place` (
  `Location_Id` int(11) NOT NULL,
  `Location` varchar(50) NOT NULL,
  `Place1` varchar(50) NOT NULL,
  `Address1` varchar(50) NOT NULL,
  `Image1` varchar(200) NOT NULL,
  `Place2` varchar(50) NOT NULL,
  `Address2` varchar(50) NOT NULL,
  `Image2` varchar(200) NOT NULL,
  `Place3` varchar(50) NOT NULL,
  `Address3` varchar(50) NOT NULL,
  `Image3` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `place`
--

INSERT INTO `place` (`Location_Id`, `Location`, `Place1`, `Address1`, `Image1`, `Place2`, `Address2`, `Image2`, `Place3`, `Address3`, `Image3`) VALUES
(8, 'Barasat', 'Siraj Uddan', 'Barasat Champadali', 'upload/111.jpg', 'Mauchak', 'Barasat, Kajipara Station', 'upload/122.jpg', 'The Radha Store', 'Bazar, K N C, Barasat Station Rd', 'upload/133.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `place`
--
ALTER TABLE `place`
  ADD PRIMARY KEY (`Location_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `place`
--
ALTER TABLE `place`
  MODIFY `Location_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
