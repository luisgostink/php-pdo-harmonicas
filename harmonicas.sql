-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: mysql
-- Generation Time: Aug 08, 2023 at 09:50 AM
-- Server version: 8.0.33
-- PHP Version: 8.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `harmonicas`
--

CREATE TABLE `harmonicas` (
  `id` int NOT NULL,
  `brand` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `model` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `harmonicas`
--

INSERT INTO `harmonicas` (`id`, `brand`, `model`, `type`, `quantity`) VALUES
(1, 'Hohner', 'Special 20', 'Diatonic', 10),
(2, 'Hohner', 'Marine Band Deluxe', 'Diatonic', 10),
(3, 'Hohner', 'Rocket', 'Diatonic', 10),
(4, 'Seydel', '1847 Classic', 'Diatonic', 8),
(5, 'Lee Oskar', 'Major Diatonic', 'Diatonic', 7),
(6, 'Suzuki', 'Bluesmaster', 'Diatonic', 12),
(7, 'Seydel', 'Session Steel', 'Diatonic', 5),
(8, 'Suzuki', 'Manji', 'Diatonic', 9),
(9, 'Fender', 'Blues Deluxe', 'Diatonic', 15),
(10, 'Suzuki', 'Promaster', 'Diatonic', 6),
(11, 'Lee Oskar', 'Natural Minor', 'Diatonic', 4),
(12, 'Hohner', 'Golden Melody', 'Diatonic', 11),
(13, 'Seydel', 'Big Six', 'Diatonic', 13),
(14, 'Suzuki', 'Harpmaster', 'Diatonic', 8),
(15, 'Seydel', 'Fanfare', 'Tremolo', 3),
(16, 'Hohner', 'Echo Harp', 'Tremolo', 5),
(17, 'Suzuki', 'Fabulous F20', 'Chromatic', 7),
(18, 'Seydel', 'Saxony', 'Chromatic', 9),
(19, 'Hohner', 'Chromonica', 'Chromatic', 12),
(20, 'Suzuki', 'Sirius', 'Chromatic', 6);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `harmonicas`
--
ALTER TABLE `harmonicas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `harmonicas`
--
ALTER TABLE `harmonicas`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
