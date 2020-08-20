-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 14, 2020 at 07:37 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `credit-mngmnt`
--

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `sender` varchar(50) DEFAULT NULL,
  `receiver` varchar(50) DEFAULT NULL,
  `credt` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`sender`, `receiver`, `credt`) VALUES
('Tony Stark', 'Akshay Kumar', 1000),
('Mack Patil', 'Kedar Raut', 200),
('Salman Khan', 'Mack Patil', 1000);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `credit` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `credit`) VALUES
(1, 'Aman Kapoor', 'aman87@gmail.com', 500),
(2, 'Dhanu Patil', 'dhanu@gmail.com', 4000),
(3, 'Kedar Raut', 'kedar@gmail.com', 5200),
(4, 'Mack Patil', 'mackpatil055@gmail.com', 2800),
(5, 'Shredha LT', 'shradhalt@gmal.com', 6000),
(6, 'Sneha Raut ', 'sneha2137@gmail.com', 6200),
(7, 'Akshay Kumar', 'akshay007@gmail.com', 7500),
(8, 'Salman Khan', 'salman@gmail.com', 5300),
(9, 'John Wick', 'johnwick56@gmail.com', 7000),
(10, 'Tony Stark', 'tonystar69@gmail.com', 8);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
