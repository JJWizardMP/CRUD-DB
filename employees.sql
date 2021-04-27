-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 27, 2021 at 06:51 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Employees`
--

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `ID` int(10) UNSIGNED NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Email` varchar(35) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Phone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`ID`, `Name`, `Email`, `Address`, `Phone`) VALUES
(1, 'Thomas Hardy', 'thomashardy@mail.com', '89 Chiaroscuro Rd, Portland, USA', '(171) 555-2222'),
(5, 'Dominique Perrier', 'dominiqueperrier@mail.com', 'Obere Str. 57, Berlin, Germany', '(313) 555-5735'),
(6, 'Maria Anders', 'mariaanders@mail.com', '25, rue Lauriston, Paris, France', '(503) 555-9931'),
(10, 'Fran Wilson', 'franwilson@mail.com', 'C/ Araquil, 67, Madrid, Spain', '(204) 619-5731'),
(23, 'Martin Blank', 'martinblank@mail.com', 'Via Monte Bianco 34, Turin, Italy', '(480) 631-2097'),
(24, 'Joan J', 'jjwizard@mail.com', 'Cancún Quintana Roo', '(998) 792-2508'),
(26, 'Alejandra D', 'da@mail.com', 'Cancún Quintana Roo', '(565) 131-3575'),
(27, 'Uzi Torres', 'torres@mail.com', 'Cancún Quintana Roo', '(561) 184-5609'),
(28, 'Karen B', 'bt@mail.com', 'Cancún Quintana Roo', '(980) 553-5687'),
(29, 'Thomas Wayne', 'wayne@mail.com', 'Gotham City', '(505) 321-6497'),
(30, 'Aether L', 'canon@mail.com', 'Teyvat', '(321) 896-7852'),
(31, 'Thom Yorke', 'radiohead@mail.com', 'Wellingborough, Reino Unido', '(865) 754-6538'),
(32, 'Liam Gallagher', 'oasis@mail.com', 'Burnage, Mánchester, Reino Unido', '(642) 645-8653');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD UNIQUE KEY `INDEX` (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
