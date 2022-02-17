-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2021 at 03:28 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

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
-- Table structure for table `accesslevel`
--

CREATE TABLE `accesslevel` (
  `ID` int(11) NOT NULL,
  `Name` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `accesslevel`
--

INSERT INTO `accesslevel` (`ID`, `Name`) VALUES
(1, 'Customer'),
(2, 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `foodorder`
--

CREATE TABLE `foodorder` (
  `ID` int(11) NOT NULL,
  `Customer` int(11) NOT NULL,
  `CreationTime` datetime NOT NULL DEFAULT current_timestamp(),
  `ProcessedTime` datetime DEFAULT NULL,
  `CompletedTime` datetime DEFAULT NULL,
  `Status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `foodorder`
--

INSERT INTO `foodorder` (`ID`, `Customer`, `CreationTime`, `ProcessedTime`, `CompletedTime`, `Status`) VALUES
(95, 19, '2021-05-30 15:13:29', '2021-05-30 15:13:51', NULL, 3),
(96, 19, '2021-05-30 15:13:51', NULL, NULL, 1),
(97, 20, '2021-05-30 15:14:43', NULL, NULL, 1),
(98, 20, '2021-05-30 15:14:51', NULL, NULL, 1),
(99, 19, '2021-05-30 15:26:44', NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `meal`
--

CREATE TABLE `meal` (
  `ID` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Description` text NOT NULL,
  `Price` decimal(10,0) NOT NULL,
  `inStock` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `meal`
--

INSERT INTO `meal` (`ID`, `Name`, `Description`, `Price`, `inStock`) VALUES
(1, 'Peperoni Pizza', 'Pepperoni is an American variety of salami, made from cured pork and beef seasoned with paprika or other chili pepper. Pepperoni is characteristically soft, slightly smoky, and bright red in color. Thinly sliced pepperoni is a popular pizza topping in American pizzerias.', '7', 1),
(2, 'Vegetarian Pizza', 'This vegetarian pizza will delight vegetarians and carnivores alike. It\'s fresh and full of flavor, featuring cherry tomatoes, artichoke, bell pepper, olives, red onion and some hidden (and optional) baby spinach. You\'ll find a base of rich tomato sauce and golden, bubbling mozzarella underneath, of course.', '9', 1),
(5, 'Almond and date cake', 'Moist cake made with blanched almond and crunchy date', '10', 1),
(6, 'Coconut and plantain vindaloo', 'Hot vindaloo made with fresh coconut and plantain', '12', 1),
(7, 'Garam masala and aubergine parcels', 'Thin filo pastry cases stuffed with garam masala and marinaded aubergine', '8', 1),
(8, 'Turbot and potato starch salad', 'A crunchy salad featuring turbot and potato starch', '5', 1),
(9, 'Fish and chicken wontons', 'Thin wonton cases stuffed with fish and corn-fed chicken', '12', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orderitem`
--

CREATE TABLE `orderitem` (
  `ID` int(11) NOT NULL,
  `OrderID` int(11) NOT NULL,
  `Meal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orderitem`
--

INSERT INTO `orderitem` (`ID`, `OrderID`, `Meal`) VALUES
(67, 95, 1),
(68, 95, 1);

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `ID` int(11) NOT NULL,
  `Name` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`ID`, `Name`) VALUES
(1, 'Pending'),
(2, 'Paid'),
(3, 'Completed');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID` int(11) NOT NULL,
  `Email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Pass` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `FirstName` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `LastName` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `AccessLevel` int(11) NOT NULL DEFAULT 1,
  `Street` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `StreetNr` int(11) DEFAULT NULL,
  `Zipcode` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `City` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Country` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `AddressAddition` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `Email`, `Pass`, `FirstName`, `LastName`, `AccessLevel`, `Street`, `StreetNr`, `Zipcode`, `City`, `Country`, `AddressAddition`) VALUES
(19, 'andreea@food.com', 'andreea123', 'Andreea', 'Sindrilaru', 1, 'Pastoor Petersstraat', 59, '5643LK', 'Eindhoven', 'Netherlands', ''),
(20, 'admin@food.com', 'test', 'Admin', 'Admin', 2, NULL, NULL, NULL, NULL, NULL, NULL),
(21, 'bohdan@food.com', 'bb', 'Bohdan', 'Tymofieienko', 1, 'somestr', 12, '5433EE', 'somecity', NULL, NULL),
(22, 'annelousLandzaat@dayrep.com', 'annelous123', 'Annelous ', 'Landzaat', 1, 'Grofbaan', 77, '3111KG ', 'Schiedam', 'Netherlands', NULL),
(23, 'amonvanSchie@rhyta.com', 'amon123', 'Amon ', 'van Schie', 1, 'Larikslaan', 165, '3833AM ', 'Leusden', 'Netherlands', NULL),
(24, 'sydneyAbels@teleworm.us', 'sydney123', 'Sydney ', 'Abels', 1, 'Akbarstraat', 153, '1061DR ', 'Amsterdam', 'Netherlands', NULL),
(25, 'roselynPostel@jourrapide.com', 'roselyn123', 'Roselyn ', 'Postel', 1, 'Samuel Mullerplein', 73, '3023SJ', 'Rotterdam', 'Netherlands', NULL),
(26, 'janeWilliams@gmail.com', 'jane123', 'Jane', 'WIlliams', 1, 'Pastoor Petersstraat ', 59, '5612 WB', 'Eindhoven', NULL, NULL),
(27, 'deeagirl1@gmail.com', '123', 'Andreea', 'Sindrilaru', 1, 'Pastoor Petersstraat', 59, '5612WB', 'Eindhoven', NULL, NULL),
(28, 'marietaWijnings@jourrapide.com', 'marieta123', 'Marieta', 'Wijnings', 1, 'Sans Souci', 88, '1902CR ', 'Castricum', 'Netherlands', NULL),
(29, 'gilbertovanSteensel@jourrapide.com', 'gilberto123', 'Gilberto', 'van Steensel', 1, 'Pijnackerplein', 6, '3035GE', 'Rotterdam', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accesslevel`
--
ALTER TABLE `accesslevel`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `foodorder`
--
ALTER TABLE `foodorder`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Customer` (`Customer`),
  ADD KEY `Status` (`Status`);

--
-- Indexes for table `meal`
--
ALTER TABLE `meal`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `orderitem`
--
ALTER TABLE `orderitem`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Meal` (`Meal`),
  ADD KEY `OrderID` (`OrderID`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `Email` (`Email`),
  ADD KEY `AccessLevel` (`AccessLevel`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accesslevel`
--
ALTER TABLE `accesslevel`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `foodorder`
--
ALTER TABLE `foodorder`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `meal`
--
ALTER TABLE `meal`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `orderitem`
--
ALTER TABLE `orderitem`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `foodorder`
--
ALTER TABLE `foodorder`
  ADD CONSTRAINT `foodorder_ibfk_1` FOREIGN KEY (`Customer`) REFERENCES `user` (`ID`),
  ADD CONSTRAINT `foodorder_ibfk_2` FOREIGN KEY (`Status`) REFERENCES `status` (`ID`);

--
-- Constraints for table `orderitem`
--
ALTER TABLE `orderitem`
  ADD CONSTRAINT `orderitem_ibfk_1` FOREIGN KEY (`Meal`) REFERENCES `meal` (`ID`),
  ADD CONSTRAINT `orderitem_ibfk_2` FOREIGN KEY (`OrderID`) REFERENCES `foodorder` (`ID`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`AccessLevel`) REFERENCES `accesslevel` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
