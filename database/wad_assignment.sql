-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2016 at 03:31 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wad_assignment`
--

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `question_id` varchar(12) NOT NULL AUTO_INCREMENT,
  `question` varchar(1024) NOT NULL,
  `answer_01` varchar(255) NOT NULL,
  `answer_02` varchar(255) NOT NULL,
  `answer_03` varchar(255) NOT NULL,
  `answer_04` varchar(255) NOT NULL,
  `correct_answer` varchar(255) NOT NULL,
  `quiz_id` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`question_id`, `question`, `answer_01`, `answer_02`, `answer_03`, `answer_04`, `correct_answer`, `quiz_id`) VALUES
('Q01', 'CASE tool is', 'a. Constructive Aided Software Engineering', 'b. Computer Analysis Software Engineering ', 'c. Component Aided Software Engineering', 'd. Computer Aided Software Engineering Correct', 'd. Computer Aided Software Engineering Correct', 'quiz001'),
('Q02', 'For a well understood data processing application, it is best to use', 'a. prototyping model', 'b. the evolutionary model', 'c. The waterfall model', 'd. the spiral model', 'c. The waterfall model', 'quiz001'),
('Q03', 'There are various alternatives to the use of natural language in preparing Requirements Specifications. Identify them from among the following:\r\na. COBOL\r\nb. Graphical notations Correct\r\nc. Mathematical specifications Correct\r\nd. Structured Natural language Correct\r\ne. Design description language Correct', 'a.only a', 'b.only a and b', 'c.only b,c,d and e', 'd.a,b,c,d and e', 'c.only b,c,d and e', 'quiz002'),
('Q04', 'Which of the following diagram(s) can be used to identify the system boundary of a system?', 'a.Use-case diagrams', 'b.Object sequence diagrams', 'c.Flow charts', 'd. Class diagrams', 'a.Use-case diagrams', 'quiz002');

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

CREATE TABLE `quiz` (
  `quiz_id` varchar(12) NOT NULL,
  `quiz_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`quiz_id`, `quiz_name`) VALUES
('qu002', 'ddsdsd'),
('quiz001', 'Software Development Process Models'),
('quiz002', 'Requirement Analysis & Specification');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_name` varchar(12) NOT NULL,
  `password` varchar(12) NOT NULL,
  `f_name` varchar(30) NOT NULL,
  `l_name` varchar(30) NOT NULL,
  `contact_no` varchar(12) NOT NULL,
  `e_mail` varchar(50) NOT NULL,
  `is_admin` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_name`, `password`, `f_name`, `l_name`, `contact_no`, `e_mail`, `is_admin`) VALUES
('admin', 'adminpass', 'Nuwan', 'Dinesh', '0711788810', 'ndmsgamage@gmail.com', 1),
('user001', 'pass001', 'Dinesh', 'Gamage', '0711145122', 'dinesh@gmail.com', 0),
('user002', 'pass002', 'Ruwanmalee', 'Disanayaka', '0771231231', 'drmalee@gmail.com', 0),
('user003', 'pass003', 'Nuwini', 'Chamindi', '0114561230', 'chamindi@gmail.com', 0),
('user004', 'pass004', 'c', 'v', 'v', 'v', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`question_id`);

--
-- Indexes for table `quiz`
--
ALTER TABLE `quiz`
  ADD PRIMARY KEY (`quiz_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_name`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
