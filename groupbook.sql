-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2021 at 06:18 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `groupbook`
--

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `cpassword` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `email`, `mobile`, `password`, `cpassword`) VALUES
(1, 'techakashwalke@gmail.com', '98370307155', '$2y$10$i3Xw3qWI7G/B0dJ1hP77W.JPaJf81Nq0jxFKUyvta0Na5C7xnARcy', '$2y$10$T0Ng7jLyZcoL8A09mSTsHOvHEquyfeyui5gXIPA3epvL4XqGVYF3K'),
(2, 'techakashwalke@gmail.com', '98370307155', '$2y$10$lU8VZvdAjv98sfclx98N9ePaLwIOwTmYrWfeWcwcTmxAIfgxXvbw6', '$2y$10$A3/zJ5n0Sc43OJF1wdcjbO.1UnzAM4bOZJjH61UXeV759bnWDwF/K'),
(3, 'techakashwalke@gmail.com', '98370307155', '$2y$10$GDm.cnXL19kJEEuDBXhW2.42Ga383xmgwy/p9OIsMrC1kBwgreMZW', '$2y$10$StJ4uB11GoGYWESFIxUTBuxB/iiDpGs/jaOFY/9HJ6LEWeGseRAsS'),
(4, 'akash@123gmail.com', '5465465456465', '$2y$10$e08SuwWKloN7a.LWvnx1xu3oLTyp8RMUMaEUtOmtkOlisIah7en1W', '$2y$10$SN4GoCxhSiZADEIyWmnpc.RntAitAGlg9uCKXRWBrk9j.I7QAhKdG'),
(5, 'akash@gmail.com', '9370307155', '$2y$10$booyTJBBo1aCCVS2fJMkC.opJkCYX8b/D0h8oJt95Ft.prKdP0gzS', '$2y$10$oAwFE9FXF.gFYM2Jju4f0ed92X7L/79NjHj1b0jvdHoKPcKBx7sC.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
