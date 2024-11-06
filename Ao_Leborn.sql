-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 27, 2024 at 07:31 AM
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
-- Table structure for table `japanese`
--

CREATE TABLE `japanese` (
  `ID` int(12) NOT NULL,
  `ProductName` varchar(50) NOT NULL,
  `Price` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `japanese`
--

INSERT INTO `japanese` (`ID`, `ProductName`, `Price`) VALUES
(1, 'Karaage', 189),
(2, 'Karaage Plt', 349),
(3, 'Tonkatsu', 179),
(4, 'Tonaktsu Plt', 339),
(5, 'Katsudon', 189),
(6, 'Katsu Curry', 199),
(7, 'Ebi Tempura', 189),
(8, 'Ebi Tempura Plt', 349),
(9, 'Ten Don', 199),
(10, 'Ebi Curry Don', 203),
(11, 'Vegetable Tempura', 179),
(12, 'Buta Don Teriyaki', 179),
(13, 'Buta Don Teriyaki Plt', 339),
(14, 'Ebi Fry', 199),
(15, 'Yakisoba', 159),
(16, 'Yakisoba Plt', 339),
(17, 'Teriyaki Chicken Don', 179),
(18, 'Teriyaki Chicken Don Plt', 339),
(19, 'Tamago Yaki Special', 159),
(20, 'Tamago Yaki', 149),
(21, 'Teriyaki Salmon', 189),
(22, 'Kakiage Tempura Don', 149),
(23, 'Chawanmushi', 219),
(24, 'Doria Japanese Rice Gratin', 189),
(25, 'Surf & Turf Platter A', 1499),
(26, 'Surf & Turf Platter B', 1499);

-- --------------------------------------------------------

--
-- Table structure for table `ramen/udon`
--

CREATE TABLE `ramen/udon` (
  `ID` int(12) NOT NULL,
  `ProductName` varchar(50) NOT NULL,
  `Price` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ramen/udon`
--

INSERT INTO `ramen/udon` (`ID`, `ProductName`, `Price`) VALUES
(1, 'Shio Ramen', 209),
(2, 'Shouyu Ramen', 209),
(3, 'Miso Ramen', 209),
(4, 'Tantanmen', 219),
(5, 'Kuro Ramen', 219),
(6, 'Sipcy Shio Ramen', 219),
(7, 'Curry Ramen', 229),
(8, 'Sesame Ramen', 199),
(9, 'Takashi Shrimp Ramen', 229),
(10, 'AO Cheesy Chicken Ramen', 239),
(11, 'Summer Ramen Salad', 209),
(12, 'Kimchi Ramen', 229),
(13, 'Chicken Pesto Ramen', 229),
(14, 'Yaki Udon', 159),
(15, 'Yaki Udon Plt', 339),
(16, 'Kake Udon', 139),
(17, 'Tempura Ramen', 199),
(18, 'Niku Udon', 189),
(19, 'Katsu-Udon', 199),
(20, 'Katsu-Udon', 209),
(21, 'Creamy Bacon Udon', 219),
(22, 'Chicken Katsu Udon', 199),
(23, 'Chicken Katsu Udon Curry', 209);

-- --------------------------------------------------------

--
-- Table structure for table `starters`
--

CREATE TABLE `starters` (
  `ID` int(12) NOT NULL,
  `ProductName` varchar(50) NOT NULL,
  `Price` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `starters`
--

INSERT INTO `starters` (`ID`, `ProductName`, `Price`) VALUES
(1, 'Kani Maki', 119),
(2, 'Kani Maki Plt', 339),
(3, 'Ebi Maki', 129),
(4, 'Ebi Maki Plt', 369),
(5, 'Tuna Mayo Maki', 119),
(6, 'Tuna Mayo Maki Plt', 339),
(7, 'Kani Maki', 119),
(8, 'Kani Maki Plt', 339),
(9, 'Ebi Maki', 129),
(10, 'Ebi Maki Plt', 369),
(11, 'Tuna Mayo Maki', 119),
(12, 'Tuna Mayo Maki Plt', 339),
(13, 'Kimbap', 139),
(14, 'Kani Maki', 119),
(15, 'Kani Maki Plt', 339),
(16, 'Ebi Maki', 129),
(17, 'Ebi Maki Plt', 369),
(18, 'Tuna Mayo Maki', 119),
(19, 'Tuna Mayo Maki Plt', 339),
(20, 'Kimbap', 139),
(21, 'Kimbap Plt', 389),
(22, 'Furikake Porkfloss Maki', 139),
(23, 'Furikake Porkfloss Maki Plt', 389),
(24, 'Salted Egg Furikake Maki', 169),
(25, 'Salted Egg Furikake Maki Plt', 469),
(26, 'Salted Egg Maki', 149),
(27, 'Salted Egg Maki Plt', 399),
(28, 'Salmon Maki', 179),
(29, 'Salmon Maki Plt', 479),
(30, 'Cheesy Tuna Maki', 149),
(31, 'Cheesy Tuna Maki Plt', 399),
(32, 'Yakiniku Maki', 159),
(33, 'Yakiniku Maki Plt', 429),
(34, 'Onigiri Shrimp', 69),
(35, 'Onigiri Tuna Mayo', 59),
(36, 'Onigiri Karaage', 59),
(37, 'Onigiri Pork Teriyaki', 59),
(38, 'Onigiri Chicken', 59),
(39, 'Onigiri Teriyaki', 59),
(40, 'Onigiri Furikake', 59),
(41, 'Onigiri Cheese', 59),
(42, 'Musubi Tuna Mayo', 149),
(43, 'Musubi  Luncheon Meat Teriyaki', 149),
(44, 'Kani Salad', 149),
(45, 'Kani Salad Plt', 379),
(46, 'Emperor Souya\'s Salad', 219),
(47, 'Zeni Japanese  Fries', 189),
(48, 'Buttered Parmesan Fries', 189),
(49, 'Miya Metropolitan Fries', 239),
(50, 'AO Special Sumo Burger', 199),
(51, 'Clubhouse', 179),
(52, 'Ham & Cheese', 129),
(53, 'Egg & Cheese', 119),
(54, 'Buttered Cheese', 129),
(55, 'Toasted Garlic Bread', 25);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `japanese`
--
ALTER TABLE `japanese`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `ramen/udon`
--
ALTER TABLE `ramen/udon`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `starters`
--
ALTER TABLE `starters`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `japanese`
--
ALTER TABLE `japanese`
  MODIFY `ID` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `ramen/udon`
--
ALTER TABLE `ramen/udon`
  MODIFY `ID` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `starters`
--
ALTER TABLE `starters`
  MODIFY `ID` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
