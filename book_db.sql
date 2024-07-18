-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 05, 2024 at 07:53 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `book_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `guests` int(11) NOT NULL,
  `arrival` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id`, `name`, `email`, `phone`, `address`, `location`, `guests`, `arrival`) VALUES
(90, 'Nayma ', 'nstamanna19@gmail.com', '01945549453', 'bup', 'Lalakhal', 8, '2024-05-28'),
(93, 'Swasty', 'deyswasty@gmail.com', '01734450786', 'Mirpur, DOHS', 'Gangamati', 2, '2024-06-07'),
(94, 'Bela', 'belamoni991@gmail.com', '01678392763', 'Mirpur 10, Dhaka', 'Jadipai Waterfall', 4, '2024-07-15');

-- --------------------------------------------------------

--
-- Table structure for table `destination`
--

CREATE TABLE `destination` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `solo` int(11) NOT NULL,
  `grp` int(11) NOT NULL,
  `duration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `destination`
--

INSERT INTO `destination` (`id`, `name`, `solo`, `grp`, `duration`) VALUES
(1, 'Lalakhal', 1500, 1400, 2),
(2, 'Darianagar', 750, 700, 1),
(3, 'Bhawal', 750, 700, 1),
(4, 'Char Kukri Mukri', 1500, 1400, 2),
(5, 'Bhitargarh', 750, 700, 1),
(6, 'Sonargaon', 750, 700, 1),
(7, 'Jadipai Waterfall', 1500, 1400, 2),
(8, 'Gangamati', 2500, 2300, 3),
(9, 'Ratnodweep', 2500, 2300, 3),
(10, 'Dulahazra', 1500, 1400, 1),
(11, 'Puthia', 750, 700, 1),
(12, 'Kantajew Temple', 750, 700, 1),
(13, 'Baikka ', 750, 700, 1),
(14, 'Lal Pahar', 1500, 1400, 2),
(15, 'Satla', 750, 700, 1),
(16, 'Godkhali', 750, 700, 1),
(17, 'Chandraghona', 1500, 1400, 2),
(18, 'Guava Market', 1500, 1400, 2),
(19, 'Baliati Palace', 750, 700, 1),
(20, 'Arial Beel', 750, 700, 1),
(21, 'Teota Palace', 750, 700, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `destination`
--
ALTER TABLE `destination`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- AUTO_INCREMENT for table `destination`
--
ALTER TABLE `destination`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
