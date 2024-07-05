-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2024 at 01:00 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `youtubeuserdata`
--

-- --------------------------------------------------------

--
-- Table structure for table `userinputdata`
--

CREATE TABLE `userinputdata` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(150) NOT NULL,
  `comment` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `userinputdata`
--

INSERT INTO `userinputdata` (`id`, `username`, `email`, `mobile`, `comment`) VALUES
(1, 'Aharwar ', 'ABC@gmail.com', '1234567', 'ghhjhghgfjhghjhgh\r\n              '),
(2, 'Aharwar ', 'ABC@gmail.com', '1234567', 'ghhjhghgfjhghjhgh\r\n              '),
(3, 'Avyaan', 'avyaan@gmail.com', '1234567890', '              Like Your Website.'),
(4, 'Avyaan', 'avyaan@gmail.com', '1234567890', '              Like Your Website.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `userinputdata`
--
ALTER TABLE `userinputdata`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `userinputdata`
--
ALTER TABLE `userinputdata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
