-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2018 at 05:31 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `book`
--

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `sub-id` int(11) NOT NULL,
  `name-sub` varchar(250) NOT NULL,
  `location` varchar(500) NOT NULL,
  `id` int(11) NOT NULL,
  `college_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`sub-id`, `name-sub`, `location`, `id`, `college_id`) VALUES
(30, 'U1 - M1 - OVERVIEW OF OPERATING SYSTEMS ', 'notesupload/U1 - M1 - OVERVIEW OF OPERATING SYSTEMS .pdf', 1, 1),
(31, 'U1 - M2 - ASSEMBLY LEVEL MACHINE ORGANIZATION ALMO - 28 JUNE 2017', 'notesupload/U1 - M2 - ASSEMBLY LEVEL MACHINE ORGANIZATION ALMO - 28 JUNE 2017.pdf', 1, 1),
(32, 'OVERVIEW OF OPERATING SYSTEM', 'notesupload/OVERVIEW OF OPERATING SYSTEM.pdf', 1, 1),
(33, 'APPLYING-UML-AND-PATTERNS', 'notesupload/APPLYING-UML-AND-PATTERNS.pdf', 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`sub-id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `sub-id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
