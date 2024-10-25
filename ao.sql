-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2024 at 05:36 AM
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
-- Database: `ao`
--

-- --------------------------------------------------------

--
-- Table structure for table `chinese/ filipino`
--

CREATE TABLE `chinese/ filipino` (
  `ID` int(12) NOT NULL,
  `Product name` varchar(255) NOT NULL,
  `Price` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `chinese/ filipino`
--

INSERT INTO `chinese/ filipino` (`ID`, `Product name`, `Price`) VALUES
(1, 'Chinese Soy Fried Chicken', 249),
(2, 'Chinese Soy Fried Chicken Plt', 479),
(3, 'Salt & Pepper Calamares', 299),
(4, 'Sweet & Sour Breaded Pork', 369),
(5, 'Tso Fried Chicken', 389),
(6, 'Sweet & Sour Shrimp', 399),
(7, 'Pork Chinese Asado', 389),
(8, 'Babyback Ribs', 249),
(9, 'Pancit Canton', 299),
(10, 'Pancit Bihon', 289),
(11, 'Garlic Buttered Shrimp', 419),
(12, 'Chow Mein Crispy', 309),
(13, 'Shrimp Relleno', 299),
(14, 'Chopsuey', 349),
(15, 'Buttered Shrimp', 399),
(16, 'Sinigang na Hipon', 419),
(17, 'Lechon Kawali', 299),
(18, 'Crispy Pata', 650),
(19, 'Kare-Kare', 529),
(20, 'Bulalo', 529),
(21, 'Sizzling Mixed Seafoods', 319),
(22, 'Sizzling Squid', 309),
(23, 'Pork Sisig', 229),
(24, 'Sizzling Tofu', 299),
(25, 'Chinese Kikiam', 249),
(26, 'Spicy Garlic Eggplant', 299),
(27, 'Shanghai Rolls', 249),
(28, 'Spicy Mix Seafoods & Cajun Sauce', 319),
(29, 'Orange Chicken', 389),
(30, 'Lemon Chicken', 389),
(31, 'Taiwan Fried Chicken', 359),
(32, 'Fish Fillet', 429),
(33, 'Pakbet Bagnet', 369),
(34, 'Sizzling Teriyaki Tofu', 229);

-- --------------------------------------------------------

--
-- Table structure for table `korean`
--

CREATE TABLE `korean` (
  `ID` int(12) NOT NULL,
  `Product name` varchar(255) NOT NULL,
  `Price` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `korean`
--

INSERT INTO `korean` (`ID`, `Product name`, `Price`) VALUES
(1, 'Korean Spicy Tofu Dubu Jurim', 199),
(2, 'Korean Chicken', 189),
(3, 'Korean Chicken Plt', 349),
(4, 'Korean Spicy Buffalo Wings', 349),
(5, 'Mandu Fried Korean Dumplings', 99),
(6, 'Mandu Fried Korean Dumplings Plt', 399),
(7, 'Japchae', 159),
(8, 'Japchae Plt', 339),
(9, 'Bibimbap Beef', 169),
(10, 'Spicy Fish & Chips', 169),
(11, 'Kimchi Fried Rice', 189),
(12, 'Korean Soy & Garlic Chicken', 349),
(13, 'KPOP(Chicken Poppers)', 209);

-- --------------------------------------------------------

--
-- Table structure for table `rice`
--

CREATE TABLE `rice` (
  `ID` int(12) NOT NULL,
  `Product name` varchar(255) NOT NULL,
  `Price` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rice`
--

INSERT INTO `rice` (`ID`, `Product name`, `Price`) VALUES
(1, 'Omurice', 189),
(2, 'Cheesy Curry Rice', 189),
(3, 'Chahan Japanese Chowfan', 179),
(4, 'Chahan Japanese Chowfan Plt', 379),
(5, 'Yang Chow Rice', 179),
(6, 'Yang Chow Rice Plt', 379),
(7, 'White Rice', 25),
(8, 'White Rice Plt', 149),
(9, 'Binondo Seafood Rice', 189),
(10, 'Binondo Seafood Rice Plt', 389),
(11, 'American Fried Rice', 179),
(12, 'American Fried Rice Plt', 379),
(13, 'Garlic Furikake Fried Rice', 189),
(14, 'Garlic Furikake Fried Rice Plt', 379),
(15, 'Curry Fried Rice', 189),
(16, 'Curry Fried Rice Plt', 379),
(17, 'Mixed Seafoods Fried Rice', 189),
(18, 'Mixed Seafoods Fried Rice Plt', 399);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chinese/ filipino`
--
ALTER TABLE `chinese/ filipino`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `korean`
--
ALTER TABLE `korean`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `rice`
--
ALTER TABLE `rice`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chinese/ filipino`
--
ALTER TABLE `chinese/ filipino`
  MODIFY `ID` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `korean`
--
ALTER TABLE `korean`
  MODIFY `ID` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `rice`
--
ALTER TABLE `rice`
  MODIFY `ID` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
