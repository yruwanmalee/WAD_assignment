-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 04, 2016 at 10:55 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `wad_assignment`
--
CREATE DATABASE IF NOT EXISTS `wad_assignment` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `wad_assignment`;

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE IF NOT EXISTS `questions` (
  `question_id` int(12) NOT NULL,
  `question` varchar(1024) NOT NULL,
  `answer_01` varchar(255) NOT NULL,
  `answer_02` varchar(255) NOT NULL,
  `answer_03` varchar(255) NOT NULL,
  `answer_04` varchar(255) NOT NULL,
  `correct_answer` varchar(255) NOT NULL,
  `quiz_id` varchar(12) NOT NULL,
  PRIMARY KEY (`question_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`question_id`, `question`, `answer_01`, `answer_02`, `answer_03`, `answer_04`, `correct_answer`, `quiz_id`) VALUES
(1, 'CASE tool is', 'a. Constructive Aided Software Engineering', 'b. Computer Analysis Software Engineering ', 'c. Component Aided Software Engineering', 'd. Computer Aided Software Engineering Correct', '4', 'quiz001'),
(2, 'For a well understood data processing application, it is best to use', 'a. prototyping model', 'b. the evolutionary model', 'c. The waterfall model', 'd. the spiral model', '3', 'quiz001'),
(3, 'Which of the following is/are incorrect with respect to incremental development?', 'a. Highest priority requirements are included in early increments', 'b. It is embodied in extreme programming.', 'c. It is frequently used to develop application packages such as word processors and spreadsheets.', 'e. It is not an evolutionary software development model.\n', '4', 'quiz002'),
(4, 'Which of the following diagram(s) can be used to identify the system boundary of a system?', 'a.Use-case diagrams', 'b.Object sequence diagrams', 'c.Flow charts', 'd. Class diagrams', '3', 'quiz002'),
(5, 'Which of the following is/are true with respect to prototyping?', 'a. It is suitable to use it in the clean room approach to software development.', 'b. It is an evolutionary process model.', 'c. It is not applicable for projects with vague requirements.', 'd. It has an explicit risk analysis phase in it.', '2', ''),
(6, 'The Waterfall model', 'a. incorporates a working version of the program from the beginning so that the client can provide feedback.', 'b. is suitable for projects with stable requirements.', 'c. is appropriate to develop user interfaces.', 'd. is not a sequential model for software development.', '2', 'quiz001'),
(7, 'Which of the following sets represent the phases of the spiral model?', 'a. Component Analysis, Requirement Modification, System Design With Reuse, Development', 'b. Business Modeling, Data Modeling, Process Modeling, Application Generation, Testing', 'c. Establish Outline Specification, Develop Prototype, Evaluate Prototype, Specify System', 'd. Determine Goals, Alternatives & Constraints, Evaluate Alternatives & Risks, Develop & Test, Plan', '4', 'quiz001'),
(8, 'For a well understood data processing application, it is best to use', 'a. prototyping model', 'b. the spiral model', 'c. The waterfall model', 'd. Unified Process model', '3', 'quiz001'),
(9, 'The most important feature of spiral model is', 'a. quality management.', 'b. configuration management.', 'c. requirement analysis.', 'd. risk management.', '4', 'quiz001'),
(10, 'In the spiral model ‘risk analysis’ is performed', 'a. in the last loop', 'b. in the first loop', 'c. before using the spiral model', 'd. in every loop', '4', 'quiz001'),
(11, 'Which of the following process model is most suitable for requirement refinement? ', 'a. Prototyping model.', 'b. The waterfall model.', 'c. The Agile model.', 'd. Rational Unified Process.', '1', 'quiz001'),
(12, 'Extreme Programming ', 'a. is not a type of agile software development.', 'b. writing unit tests before programming', 'c. does not use of pair programming', 'd. is an iterative approach to development.', '2', 'quiz001'),
(13, 'Scrum is\r\n\r\n', 'a. not a acronym ', 'b. not an agile framework ', 'c. a linear sequential model', 'd. trying to deliver a workable component in the longest time', '1', 'quiz001'),
(14, 'One/Some of the problems associated with Evolutionary Development is/are,', 'a. Systems are usually poorly structured', 'b. The process is not visible', 'c. Not suitable for small systems', 'd. Suitable only for projects with clear and stable requirements', '1', 'quiz001'),
(15, 'The software process', 'a. is the general set of activities undertaken to develop a software product.', 'b. includes project management activities such as planning and scheduling.', 'c. includes configuration management activities as part of it.', 'ed. is concerned with engineering high quality defect free software.', '1', 'quiz001'),
(16, 'What is/are not an activity(ies) in software process among following?', 'a. Evaluation', 'b. Validation', 'c. Development', 'd. Specification', '1', 'quiz001'),
(17, 'The Waterfall Model is suitable for projects with,', 'a. Clear and unstable requirements', 'b. Vague and stable requirements', 'c. Vague and unstable requirements', 'd. Clear and stable requirements', '4', 'quiz001');

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

CREATE TABLE IF NOT EXISTS `quiz` (
  `quiz_id` varchar(12) NOT NULL,
  `quiz_name` varchar(50) NOT NULL,
  PRIMARY KEY (`quiz_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`quiz_id`, `quiz_name`) VALUES
('quiz001', 'Software Development Process Models'),
('quiz002', 'Requirement Analysis & Specification'),
('quiz003', 'Quality Management');

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE IF NOT EXISTS `results` (
  `Results_id` varchar(11) NOT NULL,
  `User_Name` int(11) NOT NULL,
  `quiz_id` varchar(12) NOT NULL,
  `marks` int(4) NOT NULL,
  `percentage_mark` int(4) NOT NULL,
  `grade` varchar(1) NOT NULL,
  PRIMARY KEY (`Results_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_name` varchar(12) NOT NULL,
  `password` varchar(12) NOT NULL,
  `f_name` varchar(30) NOT NULL,
  `l_name` varchar(30) NOT NULL,
  `contact_no` varchar(12) NOT NULL,
  `e_mail` varchar(50) NOT NULL,
  `is_admin` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`user_name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_name`, `password`, `f_name`, `l_name`, `contact_no`, `e_mail`, `is_admin`) VALUES
('admin', 'adminpass', 'Nuwan', 'Dinesh', '0711788810', 'ndmsgamage@gmail.com', 1),
('Ruby', 'rtu', 'Ruby', 'dis', '+65', '5', 0),
('user001', 'pass001', 'Dinesh', 'Gamage', '0711145122', 'dinesh@gmail.com', 0),
('user002', 'pass002', 'Ruwanmalee', 'Disanayaka', '0771231231', 'drmalee@gmail.com', 0),
('user003', 'pass003', 'Nuwini', 'Chamindi', '0114561230', 'chamindi@gmail.com', 0),
('user004', 'pass004', 'c', 'v', 'v', 'v', 0);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `results`
--
ALTER TABLE `results`
  ADD CONSTRAINT `results_ibfk_1` FOREIGN KEY (`Results_id`) REFERENCES `quiz` (`quiz_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
