-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 27, 2024 at 06:35 AM
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
-- Database: `ao japanese cuisine`
--

-- --------------------------------------------------------

--
-- Table structure for table `drinks`
--

CREATE TABLE `drinks` (
  `ID` int(12) NOT NULL,
  `Product_Name` varchar(255) NOT NULL,
  `Price` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `drinks`
--

INSERT INTO `drinks` (`ID`, `Product_Name`, `Price`) VALUES
(1, 'Kape Americano', 79),
(2, 'Hot Matcha', 109),
(3, 'Cappuccino', 99),
(4, 'Hot Choco', 69),
(5, 'Cafe Latte', 89),
(6, 'Cafe Mocha', 109),
(7, 'Caramel Macchiato', 109),
(8, 'Kape Americano', 89),
(9, 'Iced Matcha', 119),
(10, 'Cappuccino', 109),
(11, 'Iced Choco', 79),
(12, 'Cafe Latte', 99),
(13, 'Cafe Mocha', 119),
(14, 'Caramel Macchiato', 119),
(15, 'Juicy Peach', 49),
(16, 'Lemon Tea', 49),
(17, 'Red Apple', 49),
(18, 'Forest Fruits', 49),
(19, 'Strawberry', 49),
(20, 'Honey Lemon Tea', 59),
(21, '1.5 Coke/Sprite', 119),
(22, 'Coke/Sprite in Can', 59),
(23, 'Mango Juice in Can', 59),
(24, 'Pineapple in Can', 59),
(25, 'Orange Juice in Can', 59),
(26, 'San Mig Light', 89),
(27, 'Kirin', 109),
(28, 'San Mig Pale', 89),
(29, 'Soju', 109),
(30, 'Asahi', 109);

-- --------------------------------------------------------

--
-- Table structure for table `soup`
--

CREATE TABLE `soup` (
  `ID` int(12) NOT NULL,
  `Product_Name` varchar(255) NOT NULL,
  `Price` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `soup`
--

INSERT INTO `soup` (`ID`, `Product_Name`, `Price`) VALUES
(1, 'Mushroom Soup', 179),
(2, 'Corn Soup', 179),
(3, 'Crab & Mushroom', 179),
(4, 'Shrimp Egg Drop Soup', 229),
(5, 'Bacon & Butter Soup', 179);

-- --------------------------------------------------------

--
-- Table structure for table `summer drinks`
--

CREATE TABLE `summer drinks` (
  `ID` int(12) NOT NULL,
  `Product_Name` varchar(255) NOT NULL,
  `Price` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `summer drinks`
--

INSERT INTO `summer drinks` (`ID`, `Product_Name`, `Price`) VALUES
(1, 'Lychee', 79),
(2, 'Green Apple', 79),
(3, 'Lemon Yacult', 89),
(4, 'Blueberry', 79),
(5, 'Strawberry', 79),
(6, 'Strawberry', 79),
(7, 'Green Apple', 79),
(8, 'Lemon Soda', 89),
(9, 'Lychee', 69),
(10, 'Strawberry Milk', 119);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `drinks`
--
ALTER TABLE `drinks`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `soup`
--
ALTER TABLE `soup`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `summer drinks`
--
ALTER TABLE `summer drinks`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `drinks`
--
ALTER TABLE `drinks`
  MODIFY `ID` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `soup`
--
ALTER TABLE `soup`
  MODIFY `ID` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `summer drinks`
--
ALTER TABLE `summer drinks`
  MODIFY `ID` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
