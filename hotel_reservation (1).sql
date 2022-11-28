-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2021 at 02:56 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel_reservation`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer_det`
--

CREATE TABLE `customer_det` (
  `customerId` int(200) NOT NULL,
  `person` varchar(30) NOT NULL,
  `name` varchar(100) NOT NULL,
  `nic` varchar(20) NOT NULL,
  `mobileno` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(300) NOT NULL,
  `date` varchar(50) NOT NULL,
  `attendees` varchar(200) NOT NULL,
  `venue` varchar(100) NOT NULL,
  `package` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_det`
--

INSERT INTO `customer_det` (`customerId`, `person`, `name`, `nic`, `mobileno`, `email`, `address`, `date`, `attendees`, `venue`, `package`) VALUES
(3, 'groom', 'Minindu Thilakarathne', '975842582V', '0755832200', 'mininduthil@gmail.com', 'colombo road,kandy', '2021-11-12', '50', 'Oak Room', 'Platinum Crown'),
(4, 'groom', 'Kavindu Wijerathne', '966642582V', '0775832203', 'kavii@gmail.com', 'kurunegala road, colombo', '2021-10-18', '100', 'Outdoor', 'Gold Crown'),
(5, 'bride', 'Dewmika', '999999999V', '0711111111', 'dew@gmail.com', 'lotus lake road,Kandy', '2021-10-06', '200', 'Pool Terrace', 'Platinum Crown');

-- --------------------------------------------------------

--
-- Table structure for table `customer_reviews`
--

CREATE TABLE `customer_reviews` (
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `comments` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_reviews`
--

INSERT INTO `customer_reviews` (`fullname`, `email`, `comments`) VALUES
('Kavindu Induwara Kasthurirathne', 'kavindu.kasthu@gmail.com', 'uuuuuuuuuuuuu'),
('Saman Kumara', 'samankumara@gmail.com', 'Hotel eka nm patta ahh!'),
('Kavindu Induwara Kasthurirathne', 'kavindu.kasthu@gmail.com', 'Hotel services really awesome and I really appreciate the services and facilities you have.'),
('kavindu', 'kavindu@gmail.com', 'good');

-- --------------------------------------------------------

--
-- Table structure for table `enquiries`
--

CREATE TABLE `enquiries` (
  `name` varchar(20) CHARACTER SET armscii8 COLLATE armscii8_bin NOT NULL,
  `email` varchar(20) CHARACTER SET armscii8 COLLATE armscii8_bin NOT NULL,
  `contactNum` int(10) NOT NULL,
  `subject` varchar(50) CHARACTER SET armscii8 COLLATE armscii8_bin NOT NULL,
  `message` varchar(100) CHARACTER SET armscii8 COLLATE armscii8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `enquiries`
--

INSERT INTO `enquiries` (`name`, `email`, `contactNum`, `subject`, `message`) VALUES
('Minidu', 'minidu@gmail.com', 711332223, 'About Hall', 'I want to know more details about Ivy hall.'),
('Kavindu', 'kavi@gmail.com', 711114567, 'About Packages', 'I want to know about gold crown package.');

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `Package_ID` varchar(50) NOT NULL,
  `Package_Name` varchar(20) NOT NULL,
  `Package_Price` int(10) NOT NULL,
  `Package_Details` mediumtext NOT NULL,
  `Picture` varchar(100) NOT NULL,
  `Brocher` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`Package_ID`, `Package_Name`, `Package_Price`, `Package_Details`, `Picture`, `Brocher`) VALUES
('Pkg1', 'Platinum Crown', 7000, 'Before\r\nOn-site wedding coordinator\r\nSimple natural decoration of the venue\r\nCocktails for the bride and groom prior \r\nDuring\r\nTraditional floral decorated ‘poruwa’ \r\nDecorated reception setting\r\nServices of Ashtaka\r\nTraditional oil lamp decorated with flowers\r\nTraditional Kandyan dancers and drummers\r\nBottle of Sparkling wine for toasting', 'pkg1.jpg', 'Platinum Crown.pdf'),
('Pkg2', 'Gold Crown', 3000, 'Before\r\nOn-site wedding coordinator\r\nSimple natural decoration of the venue\r\nCocktails for the bride and groom prior \r\nDuring\r\nTraditional floral decorated ‘poruwa’ \r\nDecorated reception setting\r\nServices of Ashtaka\r\nTraditional oil lamp decorated with flowers\r\nTraditional Kandyan dancers and drummers\r\nBottle of Sparkling wine for toasting', 'pkg2.jpg', 'Gold Crown.pdf'),
('Pkg3', 'Silver Crown', 1000, 'Before\r\nOn-site wedding coordinator\r\nSimple natural decoration of the venue\r\nCocktails for the bride and groom prior \r\nDuring\r\nTraditional floral decorated ‘poruwa’ \r\nDecorated reception setting\r\nServices of Ashtaka\r\nTraditional oil lamp decorated with flowers\r\nTraditional Kandyan dancers and drummers\r\nBottle of Sparkling wine for toasting', 'pkg3.jpg', 'SIlver Crown.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `Payment_ID` varchar(100) NOT NULL,
  `Amount` varchar(20) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `CardType` varchar(10) NOT NULL,
  `CardNumber` varchar(20) NOT NULL,
  `ExpireYear` int(4) NOT NULL,
  `ExpireMonth` int(2) NOT NULL,
  `CvcNumber` int(4) NOT NULL,
  `DateTime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`Payment_ID`, `Amount`, `Name`, `CardType`, `CardNumber`, `ExpireYear`, `ExpireMonth`, `CvcNumber`, `DateTime`) VALUES
('HRSWPay1', '5000.00', 'kavindya', 'Visa', '4000000000000000', 2035, 11, 125, '2021-10-08 11:42:15'),
('HRSWPay2', '5000.00', 'kavi', 'Visa', '4000000000000000', 2035, 1, 123, '2021-10-09 17:20:36'),
('HRSWPay3', '5000.00', 'chathu', 'Visa', '4000000000000000', 2036, 9, 456, '2021-10-09 17:25:51'),
('HRSWPay4', '5000.00', 'kavi', 'Visa', '4000000000000000', 2038, 1, 123, '2021-10-10 11:55:38'),
('HRSWPay5', '455000.00', 'chathu', 'Visa', '4000111100001111', 2036, 9, 123, '2021-10-10 11:58:54'),
('HRSWPay6', '305000.00', 'kavi', 'Visa', '4000111100000000', 2030, 2, 123, '2021-10-10 13:42:18');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(10) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `email`, `password`) VALUES
(45, 'ashanu', 'kaveesha901@gmail.com', 'jklii'),
(46, 'ashanu', 'kaveesha901@gmail.com', 'jklii'),
(47, 'kaveesha', 'it21017506@my.sliit.lk', 'kutr'),
(49, 'kavindya', 'kavi@gmail.com', '11111'),
(50, 'chathu', 'chathu@gmail.com', '22222'),
(54, 'Admin', 'admin@gmail.com', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer_det`
--
ALTER TABLE `customer_det`
  ADD PRIMARY KEY (`customerId`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`Package_ID`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`Payment_ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer_det`
--
ALTER TABLE `customer_det`
  MODIFY `customerId` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
