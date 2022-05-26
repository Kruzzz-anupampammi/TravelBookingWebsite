-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2021 at 12:28 PM
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
-- Database: `travel`
--

-- --------------------------------------------------------

--
-- Table structure for table `activities`
--

CREATE TABLE `activities` (
  `activityID` mediumint(8) UNSIGNED NOT NULL,
  `activity_name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(7,2) NOT NULL,
  `location` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `activities`
--

INSERT INTO `activities` (`activityID`, `activity_name`, `description`, `price`, `location`) VALUES
(1, 'Dowleshwaram Barrage', 'Dowleswaram Barrage is an irrigation structure which is built at Dowleswaram, on the lower stretch of the Godavari River before it empties into the Bay of Bengal. The barrage was built by a British irrigation engineer, Sir Arthur Thomas Cotton. ', '15.00', 'Rajahmundry'),
(2, 'Papikondalu', 'Papi kondalu is a magnificent location whose landscape resembles the Kashmir landscape (North India). Papi Kondalu\'s stunning landscape, the waterfalls at Munivaatam, and the calm environment in this tribal region offer tourists a nice look and quiet, making it a rare tourist attraction. ', '20.00', 'Papi Hills'),
(3, 'Dindi', 'Rajahmundry is about 80 kilometers from the peaceful and panoramic village of Dindi. Nestled on the lap of the river, Godavari, India\'s second longest river, Dindi is an undiscovered domain of natural beauty that, with its serene backwaters, vast lakes and palm-fringed canals, contains some of the most incredible elements of nature, making it the ultimate place for a perfect riverside holiday. ', '10.00', 'Rajahmundry'),
(4, 'Godavari River', 'With a reach of 1,465 kilometers, the Godavari River is the second longest river in India, after the Ganges. On the banks of the Godavari River, the town of Rajahmundry is situated and the river at this point is the widest. Its distance is around 5 kilometers from the other side of Rajahmundry, where Kovvur is situated. ', '10.00', 'Rajahmundry'),
(5, 'Iskon Temple', 'The ISKCON Temple, also known as the Gowthami Ghat, is the second largest temple in South India, the perfect place to find yourself in meditation and limber up with a few Yoga asanas. ', '15.00', 'Rajahmundry'),
(6, 'Coringa Wildlife Sanctury', 'Andhra Pradesh\'s largest living mangrove forest patch, with more than 65 species of mangrove tree. Home to the rare, endangered Indian Otter Sleek, Fishing Cat, Crocodile Estuarine. With plants such as Rhizophora, Avicennia, Sonneratia, Aegiceros, the Sanctuary in the estuary of the River Godavari supports rich mangrove vegetation.', '20.00', 'Kakinada'),
(7, 'Maredumilli Forest', 'The East Godavari District\'s Maredumilli Forests have rich biodiversity and the region has semi-evergreen forests with undulating terrain that forms part of the Eastern Ghats. The Maredumilli Community Conservation & Eco Tourism Area is located approximately 4 km away on the Maredumilli-Bhadrachalam route. ', '25.00', 'Bhadrachalam road');

-- --------------------------------------------------------

--
-- Table structure for table `booked_activities`
--

CREATE TABLE `booked_activities` (
  `activityID` mediumint(8) UNSIGNED NOT NULL,
  `customerID` mediumint(8) UNSIGNED NOT NULL,
  `date_of_activity` datetime NOT NULL,
  `number_of_tickets` mediumint(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booked_activities`
--

INSERT INTO `booked_activities` (`activityID`, `customerID`, `date_of_activity`, `number_of_tickets`) VALUES
(7, 14, '2021-01-15 00:00:00', 15);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customerID` mediumint(8) UNSIGNED NOT NULL,
  `username` varchar(30) NOT NULL,
  `password_hash` char(255) NOT NULL,
  `customer_forename` varchar(255) NOT NULL,
  `customer_surname` varchar(255) NOT NULL,
  `customer_postcode` varchar(255) NOT NULL,
  `customer_address1` varchar(255) NOT NULL,
  `customer_address2` varchar(255) DEFAULT NULL,
  `date_of_birth` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customerID`, `username`, `password_hash`, `customer_forename`, `customer_surname`, `customer_postcode`, `customer_address1`, `customer_address2`, `date_of_birth`) VALUES
(14, 'Kruzz', '$2y$10$sfKZIRASK8.0Ctk1Mc7o2eDowWQKE9EUiandFeDrkUY95L8T1vsre', 'Anupam', 'Pammi', 'NE45NS', '52 Brighton Grove', 'Newcastle', '1996-10-16 00:00:00'),
(15, 'abhi', '$2y$10$hULNnCQcfpVGUmVZm4YHFeP6z7cEv84MIw4DOUem1pu4Z.Oo00h5G', 'Abhi', 'Pammi', '534211', 'Devi Priya', 'Tanuku', '1999-10-09 00:00:00'),
(16, 'Roshan', '$2y$10$jtFxmNRnstRKJUPKUIhzmOE4lig.yoq.ix8pU7n2DS9agVCU6SEwG', 'Roshan', 'Murari', 'NE45NS', '52 Brighton Grove', 'UK', '1997-06-16 00:00:00'),
(17, 'venkat', '$2y$10$5wQuSzAfHAftCrpKrgyL5ewUOmU9vq/8hXKAmc3ptYdddY6nXpt7O', 'Ratnam', 'Kamatham', 'NE45NS', '52 Brighton Grove', 'Newcastle', '1998-11-09 00:00:00'),
(18, 'rahulsai', '$2y$10$MXgiCUiPpwkvLJqD/MX/duufNOyMzne7rESt2dYAFjQ7wh3nEwgO6', 'Rahul', 'Sai', 'NE45NS', '52 Brighton Grove', 'UK', '1998-05-09 00:00:00'),
(19, 'anupam', '$2y$10$tAvCBP11tQx9qCnPDBIa8eo4LKIy24d7nceKzZnFCzM/AxmKLPsoC', 'Anupam', 'Pammi', 'NE45NS', '52 Brighton Grove', 'Newcastle', '1996-10-16 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activities`
--
ALTER TABLE `activities`
  ADD PRIMARY KEY (`activityID`);

--
-- Indexes for table `booked_activities`
--
ALTER TABLE `booked_activities`
  ADD PRIMARY KEY (`activityID`,`customerID`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customerID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activities`
--
ALTER TABLE `activities`
  MODIFY `activityID` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customerID` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
