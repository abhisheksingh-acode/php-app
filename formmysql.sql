-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2021 at 11:58 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `new_form`
--

-- --------------------------------------------------------

--
-- Table structure for table `formmysql`
--

CREATE TABLE `formmysql` (
  `id` int(7) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(300) NOT NULL,
  `password` varchar(4000) NOT NULL,
  `phone` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `formmysql`
--

INSERT INTO `formmysql` (`id`, `name`, `email`, `password`, `phone`) VALUES
(23, 'abhishek', 'abhisheksinghk30@gmail.com', '$2y$10$xDRkOiqh9JoFTqRCHnjWKucnhfI.rlgMKTuIFev8BZc3xlB1.SFmi', '8587899030');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `formmysql`
--
ALTER TABLE `formmysql`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_3` (`id`),
  ADD UNIQUE KEY `id_4` (`id`),
  ADD KEY `id` (`id`),
  ADD KEY `id_2` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `formmysql`
--
ALTER TABLE `formmysql`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
