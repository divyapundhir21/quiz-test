-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 07, 2021 at 03:38 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quiz`
--

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `college` varchar(50) NOT NULL,
  `department` varchar(50) NOT NULL,
  `id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`name`, `email`, `mobile`, `gender`, `college`, `department`, `id`) VALUES
('Divya Pundhir', 'divyapundhir21@gmail.com', '46437783393930', 'female', 'PMC', 'BCA ', 14),
('Divya Pundhir', 'divyapundhir99@gmail.com', '6395305052', 'female', 'PMC', 'BCA ', 15),
('Rahul Pundhir', 'divyapundhir99@gmail.com', '6395305052', 'male', 'PMC', 'D El Ed ', 16);

-- --------------------------------------------------------

--
-- Table structure for table `exam`
--

CREATE TABLE `exam` (
  `id` int(10) NOT NULL,
  `question` varchar(500) NOT NULL,
  `option_a` varchar(500) NOT NULL,
  `option_b` varchar(500) NOT NULL,
  `option_c` varchar(500) NOT NULL,
  `option_d` varchar(500) NOT NULL,
  `answer` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `exam`
--

INSERT INTO `exam` (`id`, `question`, `option_a`, `option_b`, `option_c`, `option_d`, `answer`) VALUES
(1, 'Java was developed by:', 'James Gosling', 'John Backus', 'Dennis Ritchie', 'Walter Bright', 'James Gosling'),
(2, 'Who is co-inventor of Simula?', 'Ole-Johan Dahi', 'Ralph Griswold', 'Kristen Nygaard', 'Anders Hejlsberg', 'Kristen Nygaard'),
(3, 'Which file starts MS Word?', 'word.exe', 'msword.exe', 'word2007.exe', 'winword.exe', 'winword.exe'),
(4, 'In MICR, C stand for:', 'Code', 'Colour', 'Computer', 'Character', 'Character'),
(5, 'Python was developed by:', 'Guido Van Rossum', 'John Backus', 'Rob Pike', 'John Ousterhout', 'Guido Van Rossum'),
(6, 'Junk e-mail is also called ______:', 'Sniffer Script', 'Spam', 'Spoof', 'Spool', 'Spam'),
(7, 'Who is father of PHP?', 'Dennis Ritchie', 'Bjarne Stroustrup', 'Rasmus Lerdorf', 'Xavier Leroy', 'Rasmus Lerdorf'),
(8, 'The first Mechanical Computer designed by Charles Babbage was called?', 'Pascaline Machine', 'Analytical Engine', 'Abacus', 'Super Computer', 'Analytical Engine'),
(9, 'Where is RAM located?', 'Mother Board', 'Expansion Board', 'External Drive', 'None', 'Mother Board'),
(10, 'A computer cannot \"boot\" if it does not have the _______', 'Compiler', 'Loader', 'Operating System', 'Assembler', 'Operating System');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exam`
--
ALTER TABLE `exam`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `details`
--
ALTER TABLE `details`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `exam`
--
ALTER TABLE `exam`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
