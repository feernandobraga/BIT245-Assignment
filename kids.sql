-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 12, 2018 at 11:59 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fernando_awesomeDB`
--

-- --------------------------------------------------------

--
-- Table structure for table `kids`
--

CREATE TABLE `kids` (
  `kidID` int(11) NOT NULL,
  `givenName` varchar(50) DEFAULT NULL,
  `familyName` varchar(50) DEFAULT NULL,
  `gender` char(1) DEFAULT NULL,
  `dateOfBirth` date DEFAULT NULL,
  `carerGivenName` varchar(50) DEFAULT NULL,
  `carerFamilyName` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kids`
--

INSERT INTO `kids` (`kidID`, `givenName`, `familyName`, `gender`, `dateOfBirth`, `carerGivenName`, `carerFamilyName`) VALUES
(1, 'James', 'Bond', 'M', '1985-03-25', 'Fernando', 'Braga'),
(2, 'Will', 'Smith', 'M', '1960-07-12', 'Donald', 'Trump'),
(3, 'Angelina', 'Jolie', 'F', '1952-06-05', 'Brad', 'Pitt'),
(4, 'Leonardo', 'DiCaprio', 'M', '1970-01-24', 'George', 'Clooney'),
(5, 'Johnny', 'Depp', 'M', '1965-12-25', 'Santa', 'Claus'),
(6, 'Mia', 'Khalifa', 'F', '1993-02-10', 'Angela', 'White'),
(7, 'Silvia', 'Saint', 'F', '1973-02-12', 'Emma', 'Stone'),
(8, 'Julia', 'Roberts', 'F', '1967-10-29', 'Richard', 'Gere'),
(9, 'Emma', 'Watson', 'F', '1990-04-15', 'Daniel', 'Radcliffe'),
(10, 'Elvis', 'Presley', 'M', '1935-01-08', 'Paul', 'McCartney');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kids`
--
ALTER TABLE `kids`
  ADD PRIMARY KEY (`kidID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kids`
--
ALTER TABLE `kids`
  MODIFY `kidID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
