-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 16, 2024 at 04:27 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Ao`
--

-- --------------------------------------------------------

--
-- Table structure for table `Breakfast`
--

CREATE TABLE `Breakfast` (
  `ID` int(12) NOT NULL,
  `ProductName` varchar(50) NOT NULL,
  `Price` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Breakfast`
--

INSERT INTO `Breakfast` (`ID`, `ProductName`, `Price`) VALUES
(1, 'Bang Silog', 139),
(2, 'Luncheon Meat Silog', 139),
(3, 'Spanish Sardines Silog', 119),
(4, 'Corn Beef Silog', 129),
(5, 'Hot Silog', 109),
(6, 'Tapsilog', 129),
(7, 'Lucheon Silog', 139),
(8, 'Chicken Silog', 129),
(9, 'Bacon Silog', 129),
(10, 'Pork Silog', 129),
(11, 'Sausage Silog', 129);

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
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `ID` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `ticketNum` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`ID`, `username`, `ticketNum`) VALUES
(1, 'EJ', 1696),
(2, 'Bon Tokito', 1511);

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
-- Table structure for table `Japanese`
--

CREATE TABLE `Japanese` (
  `ID` int(12) NOT NULL,
  `ProductName` varchar(50) NOT NULL,
  `Price` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Japanese`
--

INSERT INTO `Japanese` (`ID`, `ProductName`, `Price`) VALUES
(1, 'Mapo Tofu', 299),
(2, 'Shrimp Fuyong', 219),
(3, 'Oyakudon Chicken', 189),
(4, 'Gyoza \'5', 99),
(5, 'Gyoza \'22', 399),
(6, 'Jap Siomai \'4', 89),
(7, 'Jap Siomai \'22', 269),
(8, 'Meat Overload Steak', 249),
(9, 'Sizzling Pork Steak', 179),
(10, 'Yakisoba Ankake', 199),
(11, 'Ao Sweet N Sour Ginger Chicken', 389),
(12, 'Beef Pepper Rice', 219),
(13, 'Pork Pepper Rice', 209),
(14, 'Sizzling Chicken Steak', 179),
(15, 'Gyudon', 219),
(16, 'ChknKtsdn', 189),
(17, 'Tori Katsu', 179),
(18, 'JPOP', 219),
(19, 'Ao Japanese Burger Steak ', 219),
(20, 'Cheesy Tuna Doria', 189),
(21, 'Ao Chicken', 399),
(22, 'Karaage', 189),
(23, 'Karaage Plt', 349),
(24, 'Tonkatsu', 179),
(25, 'Tonaktsu Plt', 339),
(26, 'Katsudon', 189),
(27, 'Katsu Curry', 199),
(28, 'Ebi Tempura', 189),
(29, 'Ebi Tempura Plt', 349),
(30, 'Ten Don', 199),
(31, 'Ebi Curry Don', 203),
(32, 'Vegetable Tempura', 179),
(33, 'Buta Don Teriyaki', 179),
(34, 'Buta Don Teriyaki Plt', 339),
(35, 'Ebi Fry', 199),
(36, 'Yakisoba', 159),
(37, 'Yakisoba Plt', 339),
(38, 'Teriyaki Chicken Don', 179),
(39, 'Teriyaki Chicken Don Plt', 339),
(40, 'Tamago Yaki Special', 159),
(41, 'Tamago Yaki', 149),
(42, 'Teriyaki Salmon', 189),
(43, 'Kakiage Tempura Don', 149),
(44, 'Chawanmushi', 219),
(45, 'Doria Japanese Rice Gratin', 189),
(46, 'Surf & Turf Platter A', 1499),
(47, 'Surf & Turf Platter B', 1499);

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
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `ID` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `usertype` varchar(50) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`ID`, `username`, `password`, `usertype`) VALUES
(1, 'admin', 'a13fcb3e7196cc9c93d8ee3cf594c3538b1b582a', 'admin'),
(2, 'user', '6789', 'user'),
(3, 'Aaron', '8ceb993588e1bd828aa46e49e1776e4680fc4d69', 'admin'),
(4, 'Aaron', '8ceb993588e1bd828aa46e49e1776e4680fc4d69', 'admin'),
(5, 'EJ', '8ceb993588e1bd828aa46e49e1776e4680fc4d69', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `Must_Try`
--

CREATE TABLE `Must_Try` (
  `ID` int(12) NOT NULL,
  `ProductName` varchar(50) NOT NULL,
  `Price` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Must_Try`
--

INSERT INTO `Must_Try` (`ID`, `ProductName`, `Price`) VALUES
(1, 'Kuro Yakisoba', 169),
(2, 'Kakeage Udon', 199),
(3, 'Karaage Udon', 229),
(4, 'Shoyu Udon', 229),
(5, 'Chicken Nanban', 199),
(6, 'Sesame Cucumber Salad', 229),
(7, 'Ebi Katsudon', 249),
(8, 'Pork Shogayaki', 219),
(9, 'Pork Shogayaki Platter', 499),
(10, 'Fried Overload w/ Salad', 249),
(11, 'Ebi Salad Sweet Spicy', 399),
(12, 'Ebi Salad Spicy', 399),
(13, 'Maze Soba', 249),
(14, 'Chasu Pork Don', 229),
(15, 'Ao Chicken Tatan Ramen', 239),
(16, 'Ao Seafood Yakisoba', 429),
(17, 'Ao Seafood Yakisoba Spicy', 459),
(18, 'Ao Seafood Udon', 429),
(19, 'Ao Seafood Udon Spicy', 459);

-- --------------------------------------------------------

--
-- Table structure for table `Pasta`
--

CREATE TABLE `Pasta` (
  `ID` int(12) NOT NULL,
  `ProductName` varchar(50) NOT NULL,
  `Price` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Pasta`
--

INSERT INTO `Pasta` (`ID`, `ProductName`, `Price`) VALUES
(1, 'Neopolitan', 189),
(2, 'Neopolitan Plt', 379),
(3, 'Kiddie ', 129),
(4, 'Kidde Plt', 279),
(5, 'Carbonara Pinoy', 159),
(6, 'Carbonara Pinoy Plt', 319),
(7, 'Carbonara Italiana ', 179),
(8, 'Carbonara Italiana Plt', 379),
(9, 'Shrimp', 189),
(10, 'Shrimp Plt', 419),
(11, 'Tuna Pasta', 189),
(12, 'Tuna Pasta Plt', 389),
(13, 'Aglio Peperonico', 149),
(14, 'Aglio Peperonico Plt', 299),
(15, 'Aglio Shrimp', 189),
(16, 'Aglio Shrimp Plt', 419),
(17, 'Sesame', 169),
(18, 'Sesame Plt', 309),
(19, 'Spanish Sardines Pasta', 169),
(20, 'Spanish Sardines Pasta Plt', 309),
(21, 'Charlie Chan', 349),
(22, 'Shrimp Marinara', 199),
(23, 'Ebi Neopolitan', 294),
(24, 'Bolognese', 179),
(25, 'Cacio E Pepe', 179),
(26, 'Creamy Seafood', 409);

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
-- Indexes for table `Breakfast`
--
ALTER TABLE `Breakfast`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `chinese/ filipino`
--
ALTER TABLE `chinese/ filipino`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `drinks`
--
ALTER TABLE `drinks`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `Japanese`
--
ALTER TABLE `Japanese`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `korean`
--
ALTER TABLE `korean`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `Must_Try`
--
ALTER TABLE `Must_Try`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `Pasta`
--
ALTER TABLE `Pasta`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `ramen/udon`
--
ALTER TABLE `ramen/udon`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `rice`
--
ALTER TABLE `rice`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `soup`
--
ALTER TABLE `soup`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `starters`
--
ALTER TABLE `starters`
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
-- AUTO_INCREMENT for table `Breakfast`
--
ALTER TABLE `Breakfast`
  MODIFY `ID` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `chinese/ filipino`
--
ALTER TABLE `chinese/ filipino`
  MODIFY `ID` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `drinks`
--
ALTER TABLE `drinks`
  MODIFY `ID` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `Japanese`
--
ALTER TABLE `Japanese`
  MODIFY `ID` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `korean`
--
ALTER TABLE `korean`
  MODIFY `ID` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `Must_Try`
--
ALTER TABLE `Must_Try`
  MODIFY `ID` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `Pasta`
--
ALTER TABLE `Pasta`
  MODIFY `ID` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `ramen/udon`
--
ALTER TABLE `ramen/udon`
  MODIFY `ID` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `rice`
--
ALTER TABLE `rice`
  MODIFY `ID` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `soup`
--
ALTER TABLE `soup`
  MODIFY `ID` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `starters`
--
ALTER TABLE `starters`
  MODIFY `ID` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `summer drinks`
--
ALTER TABLE `summer drinks`
  MODIFY `ID` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
