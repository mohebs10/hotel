-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2019 at 11:44 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(1) NOT NULL,
  `ad_name` varchar(15) NOT NULL,
  `ad_password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `ad_name`, `ad_password`) VALUES
(1, 'moheb', '123456'),
(2, 'hotel', '852456');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `res_date` varchar(11) NOT NULL,
  `leave_date` varchar(11) NOT NULL,
  `room` varchar(7) NOT NULL,
  `guest` varchar(9) NOT NULL,
  `email` varchar(30) NOT NULL,
  `note` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`res_date`, `leave_date`, `room`, `guest`, `email`, `note`) VALUES
('05/24/2019', '05/26/2019', '2', '3', 'mohebsamir808@yahoo.com', 'ya raaaab '),
('05/24/2019', '05/26/2019', '2', '3', 'mohebsamir808@yahoo.com', 'ya raaaab '),
('05/24/2019', '05/26/2019', '2 rooms', '3 guest', 'mohebsamir808@yahoo.com', 'ya raaaab '),
('05/24/2019', '05/26/2019', '2 rooms', '3 guest', 'mohebsamir808@yahoo.com', 'ya raaaab '),
('05/24/2019', '05/26/2019', '2 rooms', '3 guest', 'mohebsamir808@yahoo.com', 'ya raaaab '),
('05/24/2019', '05/26/2019', '2 rooms', '3 guest', 'mohebsamir808@yahoo.com', 'ya raaaab '),
('05/24/2019', '05/26/2019', '2 rooms', '3 guest', 'mohebsamir808@yahoo.com', 'ya raaaab '),
('05/24/2019', '05/26/2019', '2 rooms', '3 guest', 'mohebsamir808@yahoo.com', 'ya raaaab '),
('05/04/2019', '05/26/2019', '1 rooms', '1 guest', 'mohebsamir80@yahoo.com', 'ya rab '),
('05/21/2019', '05/21/2019', '1 rooms', '1 guest', 'mohebsamir808@yahoo.com', 'dsdsacfsf'),
('05/21/2019', '05/21/2019', '1 rooms', '1 guest', 'mohebsamir808@yahoo.com', 'dsdsacfsf'),
('05/04/2019', '05/21/2019', '1 rooms', '1 guest', 'mohebsamir80@yahoo.com', 'isa 5eer ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
