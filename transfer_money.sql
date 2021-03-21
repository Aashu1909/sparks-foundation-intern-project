-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2021 at 03:44 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `transfer_money`
--

-- --------------------------------------------------------

--
-- Table structure for table `transactionhistory`
--

CREATE TABLE `transactionhistory` (
  `S.no` int(10) NOT NULL,
  `Sender` varchar(20) NOT NULL,
  `Receiver` varchar(20) NOT NULL,
  `Amount` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transactionhistory`
--

INSERT INTO `transactionhistory` (`S.no`, `Sender`, `Receiver`, `Amount`) VALUES
(1, 'Da', 'vs', 4500),
(2, 'Pr\r\n', 'PB', 1565),
(3, 'nsh\r\n', 'gr', 1985);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `name` text NOT NULL,
  `gender` varchar(25) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `balance` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `gender`, `email`, `balance`) VALUES
(1, 'Aa', 'M', 'Aa@gmail.com', 91765),
(2, 'Da', 'M', 'Da@gmail.com', 1411765),
(3, 'Pr\r\n', 'M', 'pr@gmail.com', 100000),
(4, 'PB', 'M', 'PBu@gmail.com', 68220),
(5, 'nsh\r\n', 'M', 'nsh@gmail.com', 90000),
(6, 'um', 'M', 'um@gmail.com', 63985),
(7, 'sb', 'M', 'sb@gmail.com', 97780),
(8, 'vs', 'M', 'vs@gmail.com', 85500),
(9, 'gr', 'others', 'gr@gmail.com', 102985),
(10, 'kk', 'F', 'kk@gmail.com', 4800000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `transactionhistory`
--
ALTER TABLE `transactionhistory`
  ADD PRIMARY KEY (`S.no`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `transactionhistory`
--
ALTER TABLE `transactionhistory`
  MODIFY `S.no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
