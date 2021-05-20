-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2021 at 07:20 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school`
--

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `Roll` int(3) NOT NULL,
  `name` varchar(256) NOT NULL,
  `class` varchar(3) NOT NULL,
  `section` varchar(2) NOT NULL,
  `Bengali` int(3) NOT NULL,
  `Bengali_grade` varchar(10) NOT NULL,
  `English` int(3) NOT NULL,
  `English_grade` varchar(10) NOT NULL,
  `Math` int(3) NOT NULL,
  `Math_grade` varchar(10) NOT NULL,
  `Science` int(3) NOT NULL,
  `Science_grade` varchar(10) NOT NULL,
  `Marks` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`Roll`, `name`, `class`, `section`, `Bengali`, `Bengali_grade`, `English`, `English_grade`, `Math`, `Math_grade`, `Science`, `Science_grade`, `Marks`) VALUES
(1, 'Test Name', '1', 'B', 90, 'A', 80, 'A', 95, 'A', 99, 'A', 364),
(2, 'test name 2', '2', 'A', 22, 'C', 50, 'B', 60, 'A', 30, 'C', 300);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
