-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2021 at 02:59 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `formdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `firstdb`
--

CREATE TABLE `firstdb` (
  `id` int(11) NOT NULL,
  `userName` char(20) COLLATE utf8mb4_polish_ci NOT NULL,
  `userEmail` varchar(30) COLLATE utf8mb4_polish_ci NOT NULL,
  `userPassword` char(20) COLLATE utf8mb4_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Dumping data for table `firstdb`
--

INSERT INTO `firstdb` (`id`, `userName`, `userEmail`, `userPassword`) VALUES
(1, 'wojtek', 'wojtek@wojtek.pl', '123'),
(2, 'Anna', 'Kowalska@kowalska.pl', '123'),
(3, 'Maria', 'M.Kowalska@kowalska.pl', '123'),
(5, 'dsv', 'sv', 'svs');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `firstdb`
--
ALTER TABLE `firstdb`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `firstdb`
--
ALTER TABLE `firstdb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
