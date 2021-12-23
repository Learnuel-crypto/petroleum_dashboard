-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 23, 2021 at 09:42 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `marketwatch_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `business`
--

CREATE TABLE `business` (
  `Regid` int(11) NOT NULL,
  `BusinessName` varchar(80) NOT NULL,
  `CAC` varchar(20) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `State` varchar(30) NOT NULL,
  `City` varchar(30) NOT NULL,
  `Contact` varchar(15) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `business`
--

INSERT INTO `business` (`Regid`, `BusinessName`, `CAC`, `Email`, `State`, `City`, `Contact`, `Address`, `Date`) VALUES
(3, 'Unique Gas stations', 'G323645', 'pisikimatonma@gmail.com', 'Rivers', 'Bonny', '08067584366', 'Long House Finma Bonny', '2021-12-18 15:43:30'),
(4, 'Coil Gas Station', 'G323645092', 'get.learnuel@gmail.com', 'Rivers', 'Bonny', '08067584345', 'Long House Finma Bonny', '2021-12-18 23:15:48');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `MesID` int(11) NOT NULL,
  `Fullname` varchar(50) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Text` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`MesID`, `Fullname`, `Email`, `Text`) VALUES
(1, 'Paulina Linus', 'get.learnuel@gmail.com', 'this si the'),
(2, 'Paulina Linus', 'get.learnuel@gmail.com', 'this si the'),
(3, 'Paulina Linus', 'get.learnuel@gmail.com', 'This is the message to test the page for contact of the admin for registration of the business ');

-- --------------------------------------------------------

--
-- Table structure for table `price`
--

CREATE TABLE `price` (
  `Priceid` int(11) NOT NULL,
  `Proid` int(11) NOT NULL,
  `Cost` decimal(7,2) NOT NULL,
  `Date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `Proid` int(11) NOT NULL,
  `Regid` int(11) DEFAULT NULL,
  `Name` varchar(50) NOT NULL,
  `Symbol` varchar(50) NOT NULL,
  `DateAdded` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Userid` int(11) NOT NULL,
  `Regid` int(11) DEFAULT NULL,
  `Password` varchar(50) NOT NULL,
  `Email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Userid`, `Regid`, `Password`, `Email`) VALUES
(1, 3, '1234', 'linus.zoea@gmail.com'),
(2, NULL, '12', 'linus2.zoea@gmail.com'),
(3, NULL, '1234', 'get.zoea@gmail.com'),
(4, NULL, '1234', 'learnueltech@gmail.com'),
(5, NULL, '123', 'pisikimatonma@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `business`
--
ALTER TABLE `business`
  ADD PRIMARY KEY (`Regid`,`CAC`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`MesID`);

--
-- Indexes for table `price`
--
ALTER TABLE `price`
  ADD PRIMARY KEY (`Priceid`),
  ADD KEY `PK_PriceProduct` (`Proid`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`Proid`),
  ADD KEY `PK_BusinessProduct` (`Regid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Userid`),
  ADD KEY `FK_UsersBusiness` (`Regid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `business`
--
ALTER TABLE `business`
  MODIFY `Regid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `MesID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `price`
--
ALTER TABLE `price`
  MODIFY `Priceid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `Proid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `Userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `price`
--
ALTER TABLE `price`
  ADD CONSTRAINT `PK_PriceProduct` FOREIGN KEY (`Proid`) REFERENCES `products` (`Proid`) ON DELETE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `PK_BusinessProduct` FOREIGN KEY (`Regid`) REFERENCES `business` (`Regid`) ON DELETE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `FK_UsersBusiness` FOREIGN KEY (`Regid`) REFERENCES `business` (`Regid`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
