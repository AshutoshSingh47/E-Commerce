-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2023 at 12:59 PM
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
-- Database: `gym_admin`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `aID` int(10) UNSIGNED NOT NULL,
  `FirstName` varchar(30) NOT NULL,
  `LastName` varchar(30) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(10) NOT NULL,
  `PhoneNo` varchar(10) NOT NULL,
  `GymName` varchar(20) NOT NULL,
  `Address` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`aID`, `FirstName`, `LastName`, `Email`, `Password`, `PhoneNo`, `GymName`, `Address`) VALUES
(1, 'Ashutosh', 'Singh', 'ashutosh@gmail.com', 'ashu', '4294967295', 'FitNationX', 'Noida'),
(2, 'Arvind', 'Singh', 'arvind@gmail.com', 'arvind', '4294967295', 'Smash Gym', 'Greater Noida'),
(3, 'John ', 'Doe', 'johndoe@gmail.com', 'john', '4294967295', 'Finoit Gym', 'Gurgaon'),
(4, 'Rahul', 'Gupta', 'rahulgupta@gmail.com', 'rahul', '4294967295', 'Muscle Mania', 'Agra'),
(5, 'Vernoica ', 'Costella', 'veronicacostella@gmail.com', 'veronica', '2637434837', 'Golds Gym', 'Faridabad'),
(6, 'Nicholas', 'Cage', 'nicholascage@gmail.com', 'cage', '7767645645', 'Nicholas Gym', 'Jaipur'),
(7, 'Bruce ', 'Wayne', 'brucewayne@gmail.com', 'bruce', '6745532432', 'Wayne Fitness', 'Guragon');

-- --------------------------------------------------------

--
-- Table structure for table `adminproducts`
--

CREATE TABLE `adminproducts` (
  `pID` int(10) UNSIGNED NOT NULL,
  `aID` int(10) UNSIGNED DEFAULT NULL,
  `ProductName` varchar(20) NOT NULL,
  `ProductSKU` varchar(15) NOT NULL,
  `ProductDescription` varchar(200) NOT NULL,
  `Price` int(10) UNSIGNED DEFAULT NULL,
  `Quantity` int(10) UNSIGNED DEFAULT NULL,
  `ProductImage` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `adminproducts`
--

INSERT INTO `adminproducts` (`pID`, `aID`, `ProductName`, `ProductSKU`, `ProductDescription`, `Price`, `Quantity`, `ProductImage`) VALUES
(1, 1, 'treadmill', '#td101', 'treadmill', 200, 5, 'treadmill.jpg'),
(2, 1, 'dumbells', '#db102', 'dumbells', 20, 10, 'dumbbells.jpg'),
(3, 2, 'ab fitness crunch', '#abc199', 'ab fitness crunch', 30, 10, 'ab_fitness_crunch.jpeg'),
(4, 2, 'benchpress', '#bp195', 'benchpress', 199, 5, 'benchpress.jpg'),
(5, 3, 'chestpress', '#cp107', 'chestpress', 239, 10, 'chestpress.jpg'),
(6, 3, 'yoga ball', '#yb122', 'yoga ball', 50, 20, 'yoga_ball.jpg'),
(7, 4, 'yoga mat', '#ym192', 'yoga mat', 15, 20, 'yoga_mat.jpg'),
(8, 4, 'pull up bar', '#pb126', 'pull up bar', 159, 10, 'pull_up_bar.png'),
(9, 4, 'punching bag', '#pb120', 'punching bag', 100, 20, 'punching_bag.jpg'),
(10, 5, 'boxing gloves', '#bg167', 'boxing gloves', 129, 15, 'boxing_gloves.jpg'),
(12, 3, 'dumbells', '#db342', 'dumbells', 50, 10, 'dumb_bells.jpg'),
(13, 3, 'treadmill', '#td199', 'treadmill', 399, 5, 'tread_mill.jpg'),
(14, 2, 'treadmill', '#td101', 'treadmill', 200, 10, 'tread_mill.jpg'),
(16, 2, 'ab fitness crunch', '#cp107', 'ab fitness crunch', 100, 10, 'ab_fitness_crunch.jpeg'),
(17, 2, 'benchpress', '#bp103', 'benchpress', 299, 10, 'benchpress.jpg'),
(24, 2, 'yoga ball', '#yb120', 'yoga ball', 20, 20, 'yoga_ball.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cartID` int(6) UNSIGNED NOT NULL,
  `cID` int(6) UNSIGNED DEFAULT NULL,
  `pID` int(6) UNSIGNED DEFAULT NULL,
  `Quantity` int(6) UNSIGNED DEFAULT NULL,
  `TotalPrice` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cartID`, `cID`, `pID`, `Quantity`, `TotalPrice`) VALUES
(9, 6, 8, 2, 318),
(22, 3, 5, 1, 239),
(23, 3, 10, 1, 129),
(24, 3, 12, 1, 50),
(25, 3, 4, 1, 199);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cID` int(10) UNSIGNED NOT NULL,
  `FirstName` varchar(20) NOT NULL,
  `LastName` varchar(20) NOT NULL,
  `PhoneNo` varchar(10) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cID`, `FirstName`, `LastName`, `PhoneNo`, `Email`, `Password`) VALUES
(1, 'John ', 'Doe', '4294967295', 'doejhon@gmail.com', 'john'),
(2, 'Ashutosh ', 'Singh', '4294967295', 'ashutosh@gmail.com', 'ashu'),
(3, 'Arvind', 'Singh', '4294967295', 'arvind@gmail.com', 'arvind'),
(4, 'Vernoica', 'Costella', '2637434837', 'veronicacostella@gmail.com', 'veronica'),
(6, 'Richard', 'Park', '7463764437', 'richardpark@gmail.com', 'park'),
(7, 'Aditya', 'Dwivedi', '9474464445', 'adityadwivedi288@gmail.com', 'aditya');

-- --------------------------------------------------------

--
-- Table structure for table `shippingdetails`
--

CREATE TABLE `shippingdetails` (
  `addressID` int(10) UNSIGNED NOT NULL,
  `cID` int(10) UNSIGNED NOT NULL,
  `FirstName` varchar(30) NOT NULL,
  `LastName` varchar(30) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `PhoneNo` varchar(50) NOT NULL,
  `HouseNo` varchar(20) NOT NULL,
  `StreetName` varchar(200) NOT NULL,
  `City` varchar(50) NOT NULL,
  `State` varchar(50) NOT NULL,
  `Country` varchar(30) NOT NULL,
  `PinCode` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `shippingdetails`
--

INSERT INTO `shippingdetails` (`addressID`, `cID`, `FirstName`, `LastName`, `Email`, `PhoneNo`, `HouseNo`, `StreetName`, `City`, `State`, `Country`, `PinCode`) VALUES
(9, 3, '', '', '', '', 'P-701', 'Antriksh Golf View -1, Sector 78', 'Noida', 'Uttar Pradesh', 'India', '201305'),
(10, 3, 'John', 'Doe', 'doejhon@gmail.com', '9787484744', 'P-701', 'HNO. 215B, Daudpur, Near Aryan Hospital', 'Gorakhpur', 'UTTAR PRADESH', 'India', '273010'),
(11, 3, 'Arvind', 'Singh', 'arvind@gmail.com', '8303594560', 'P-701', 'HNO. 215B, Daudpur, Near Aryan Hospital', 'Gorakhpur', 'UTTAR PRADESH', 'India', '273010');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`aID`);

--
-- Indexes for table `adminproducts`
--
ALTER TABLE `adminproducts`
  ADD PRIMARY KEY (`pID`),
  ADD KEY `aID` (`aID`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cartID`),
  ADD KEY `cID` (`cID`),
  ADD KEY `pID` (`pID`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cID`);

--
-- Indexes for table `shippingdetails`
--
ALTER TABLE `shippingdetails`
  ADD PRIMARY KEY (`addressID`),
  ADD KEY `cID` (`cID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `aID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `adminproducts`
--
ALTER TABLE `adminproducts`
  MODIFY `pID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cartID` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `cID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `shippingdetails`
--
ALTER TABLE `shippingdetails`
  MODIFY `addressID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `adminproducts`
--
ALTER TABLE `adminproducts`
  ADD CONSTRAINT `adminproducts_ibfk_1` FOREIGN KEY (`aID`) REFERENCES `admin` (`aID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`cID`) REFERENCES `customer` (`cID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`pID`) REFERENCES `adminproducts` (`pID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `shippingdetails`
--
ALTER TABLE `shippingdetails`
  ADD CONSTRAINT `shippingdetails_ibfk_1` FOREIGN KEY (`cID`) REFERENCES `customer` (`cID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
