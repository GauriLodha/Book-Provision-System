-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 24, 2020 at 12:31 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bep`
--

-- --------------------------------------------------------

--
-- Table structure for table `book_info`
--

CREATE TABLE `book_info` (
  `id` int(11) NOT NULL,
  `irn` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `b_year` varchar(255) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `condt` varchar(255) NOT NULL,
  `author_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book_info`
--

INSERT INTO `book_info` (`id`, `irn`, `subject`, `b_year`, `branch`, `price`, `condt`, `author_name`) VALUES
(4, 'CT1714', 'COA', 'SE', 'IT', '280', '4', ''),
(7, 'C17016', 'TOC', 'TE', 'COMPUTER', '450', '3', ''),
(8, 'C17016', 'DBMS', 'TE', 'COMPUTER', '220', '3', ''),
(9, 'C17060', 'DBMS', 'TE', 'COMPUTER', '600', '1', 'Korth'),
(11, 'C17060', 'adas', 'FE', 'COMPUTER', '1654', '1', 'sacacs');

-- --------------------------------------------------------

--
-- Table structure for table `student_info`
--

CREATE TABLE `student_info` (
  `id` int(11) NOT NULL,
  `irn_no` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `p_year` varchar(255) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `email_stud` varchar(255) NOT NULL,
  `room_no` varchar(255) NOT NULL,
  `mobile_stud` varchar(255) NOT NULL,
  `password_one` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_info`
--

INSERT INTO `student_info` (`id`, `irn_no`, `first_name`, `last_name`, `p_year`, `branch`, `email_stud`, `room_no`, `mobile_stud`, `password_one`) VALUES
(1, 'C17060', 'Gauri', 'Lodha', 'TE', 'COMPUTER', 'gau@gmail.com', 'M11', '9096854515', 'G123'),
(2, 'CT1714', 'Avani', 'Pathak', 'TE', 'COMPUTER', 'pathakavani123@gmail.com', '204', '9011564032', 'AVANI123'),
(3, 'C17016', 'Manu', 'Pillai', 'TE', 'COMPUTER', 'manupillai249@gmail.com', 'Not Hostelite', '9588616921', '123'),
(4, 'c170008', 'aastha', 'sinha', 'FE', 'COMPUTER', 'abs@gmail.com', 'Not Hostelite', '09999999999', 'abcdefg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book_info`
--
ALTER TABLE `book_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_info`
--
ALTER TABLE `student_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book_info`
--
ALTER TABLE `book_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `student_info`
--
ALTER TABLE `student_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
