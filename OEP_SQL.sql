-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2020 at 07:36 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wtlproj`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `uname` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `uname`, `password`) VALUES
(3, 'meghana', '$2y$10$UdJ/pRe0xITfBVXCP8nucuzkalDF2PnzBhhmgkX19kptbOZPlvPg6'),
(4, 'Sourav', '$2y$10$FoIKn8diKqvr.hLLEvx2CO988ZBJLWdBTm5p8JpkVOn.cfWnlnOey'),
(5, 'sakshi', '$2y$10$Ol7IRsrqQQiv/SveZoGzKuuJ6JGInZpdiSuzr/Bl933YlyIGc0sPi');

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `qid` int(11) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `diff_level` varchar(255) NOT NULL,
  `question` varchar(255) NOT NULL,
  `op1` varchar(255) NOT NULL,
  `op2` varchar(255) NOT NULL,
  `op3` varchar(255) NOT NULL,
  `op4` varchar(255) NOT NULL,
  `answer` varchar(255) NOT NULL,
  `marks` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`qid`, `subject`, `diff_level`, `question`, `op1`, `op2`, `op3`, `op4`, `answer`, `marks`) VALUES
(3, 'java', 'easy', 'urhgy5unhu', 'a', 'f', 'd', 'y', 'y', 1),
(4, 'java', 'easy', 'JAVA is delveloped in which lab', 'orbit', 'glaxy', 'sun', 'moon', 'sun', 1),
(5, 'java', 'easy', 'Which of the following is not a Java features?', 'Dynamic', 'Architecture Neutral', 'Use of pointers', 'Object-oriented', 'Use of pointers', 1),
(6, 'c', 'Moderate', 'C is a', 'procedural language', 'object oriented language', 'imperative language', 'none', 'procedural language', 2),
(7, 'c', 'Moderate', 'byrbvjutnbtk', 'd', 'r', 'h', 'g', 'r', 2),
(8, 'c', 'Moderate', 'jrg4jehbfi4th4bu', 'w', 'e', 'u', 'h', 'u', 2);

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `sid` int(11) NOT NULL,
  `sname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`sid`, `sname`) VALUES
(19, 'c'),
(9, 'cpp'),
(7, 'java');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `testurl` varchar(255) NOT NULL,
  `marks` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `testurl`, `marks`) VALUES
(5, 'Sourav Patil', '$2y$10$QaoPyomToH.ckbD5x0dNgOMHFs7sInFVi4JRtlyBYSpd9315IrUMi', 'https://localhost/projects/Minal/wtlproj/student/generate.php?cat=java&ID=5&qtype%5B%5D=Easy&Submit=Submit', 2),
(8, 'Meghana Naik', '$2y$10$MEt/fKdL1FiQtJP5Rgust..N5LmcDT2aYvb0WT1nvyQJJYZafhlNG', 'https://localhost/wtlproj1/student/generate.php?cat=c&ID=8&qtype%5B%5D=Moderate&Submit=Submit', 6),
(9, 'Minal', '$2y$10$CPYsH4NpchaC9rcVJXgM8ueAhpisF0iDaEpw1ryeXpvSCQEF344J6', 'https://localhost/wtlproj1/student/generate.php?cat=c&ID=9&qtype%5B%5D=Moderate&Submit=Submit', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`qid`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`sid`),
  ADD UNIQUE KEY `sname` (`sname`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `qid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
