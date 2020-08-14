-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 27, 2018 at 10:52 PM
-- Server version: 5.6.39-cll-lve
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qapaperc_book`
--

-- --------------------------------------------------------

--
-- Table structure for table `college`
--

CREATE TABLE `college` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `college`
--

INSERT INTO `college` (`id`, `name`) VALUES
(1, 'SRM'),
(2, 'VIT'),
(3, 'BITS');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `username` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL,
  `email` varchar(180) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `photo` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `name`, `username`, `password`, `email`, `mobile`, `photo`) VALUES
(1, 'Shrey Garg', 'crazymeshrey', 'shrey', 'shreygarg_di@gmail.com', '8871009875', 'upload/26951761_1781563475249283_1475207799742887147_o.jpg'),
(3, 'unknown', 'unknown', 'shrey', 'shreygarg_di@gmail.com', '7828334458', 'upload/IMG_2051.JPG'),
(4, 'new', 'new', 'shrey', 'shrey4625@gmail.com', '8871009875', 'upload/IMG_2051.JPG'),
(5, 'Shrey Garg', 'sg', 'shrey', 'shrey4625@gmail.com', '8939352906', 'upload/IMG_2051.JPG'),
(6, 'surya', 'say2mesurya', 'crossx', 'say2mesurya@gmail.com', '7985344458', 'upload/people.png');

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
(33, 'APPLYING-UML-AND-PATTERNS', 'notesupload/APPLYING-UML-AND-PATTERNS.pdf', 1, 1),
(34, 'DBMS BOOK', 'notesupload/DBMS BOOK.pdf', 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `college`
--
ALTER TABLE `college`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`sub-id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `college`
--
ALTER TABLE `college`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `sub-id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
