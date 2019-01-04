-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 04, 2019 at 10:08 AM
-- Server version: 5.7.23
-- PHP Version: 7.1.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `teacher_panel`
--

-- --------------------------------------------------------

--
-- Table structure for table `answer`
--

CREATE TABLE `answer` (
  `id` int(250) NOT NULL,
  `ans1` varchar(250) NOT NULL,
  `ans2` varchar(250) NOT NULL,
  `ans3` varchar(250) NOT NULL,
  `ans4` varchar(250) NOT NULL,
  `subject_code` varchar(250) NOT NULL,
  `aadhar_no` int(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `answer`
--

INSERT INTO `answer` (`id`, `ans1`, `ans2`, `ans3`, `ans4`, `subject_code`, `aadhar_no`) VALUES
(5, 'njesnghrebgr', 'f sdngfiehgtywreg', 'rferbhegtbtr', 'ef jewbfhe', 'ras_098', 12345),
(4, 'fvdsgfrsg', 'tsgrtgtrgbs', 'fefgregrthrs', 'sgrtghrthre', 'ras_098', 12345),
(3, 'ds fdskfn', 'fjnfkej', 'dfdknsffdsf', 'f fejsa efe', 'ras_098', 12345),
(1, 'sdfdsfdsf', 'efdfedf', 'dfdsfds', 'fdfsefre', 'ras_098', 12345),
(2, 'scjdbsfcjh', 'rjebrfhj', 'fkjenfekjnf', 'dejnfk', 'ras_098', 12345),
(2, 'jbj', 'jhgvjh', 'jbk', 'kbhk', 'RAS_103', 12345),
(1, 'Answer', 'dfddfdfgdf', 'dfdfg', 'fgfgr', 'RAS_103', 12345),
(6, 'tsahosadf', 'fjenkfe', 'fasnfjenf', 'df kesjge', 'ras_098', 12345);

-- --------------------------------------------------------

--
-- Table structure for table `available_quiz`
--

CREATE TABLE `available_quiz` (
  `Name` varchar(250) NOT NULL,
  `subject_code` varchar(250) NOT NULL,
  `aadhar_no` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `available_quiz`
--

INSERT INTO `available_quiz` (`Name`, `subject_code`, `aadhar_no`) VALUES
('mathematics', 'ras_098', 12345);

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `id` int(250) NOT NULL,
  `ques` varchar(250) NOT NULL,
  `correct_answer` int(2) NOT NULL,
  `subject_code` varchar(250) NOT NULL,
  `aadhar_no` int(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`id`, `ques`, `correct_answer`, `subject_code`, `aadhar_no`) VALUES
(1, 'This is a question For Physics?', 2, 'RAS_103', 12345),
(2, 'This is a  Next Question Of physics', 3, 'RAS_103', 12345),
(1, 'dnskjdnckdsjsdfds', 3, 'ras_098', 12345),
(2, 'e3wrethhbfhjw', 4, 'ras_098', 12345),
(3, 'bdjsbhjbfhabe', 1, 'ras_098', 12345),
(4, 'fabfjabfhehfhegrfiebfejd fdz', 2, 'ras_098', 12345),
(5, 'ebfjebfhberwhbgrhw', 2, 'ras_098', 12345),
(6, 'cbashgfudgufe', 2, 'ras_098', 12345);

-- --------------------------------------------------------

--
-- Table structure for table `quiz_name`
--

CREATE TABLE `quiz_name` (
  `Name` varchar(250) NOT NULL,
  `subject_code` varchar(10) NOT NULL,
  `ques_mark` int(20) NOT NULL,
  `neg_mark` int(10) NOT NULL DEFAULT '0',
  `aadhar_no` int(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quiz_name`
--

INSERT INTO `quiz_name` (`Name`, `subject_code`, `ques_mark`, `neg_mark`, `aadhar_no`) VALUES
('mathematics', 'ras_098', 5, 2, 12345),
('Chemistry', 'RME_452', 5, 1, 12345),
('Physics', 'RAS_103', 4, 1, 12345);

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `roll_no` int(250) NOT NULL,
  `subject_code` varchar(250) NOT NULL,
  `sahi` int(250) NOT NULL,
  `galat` int(250) NOT NULL,
  `marks` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`roll_no`, `subject_code`, `sahi`, `galat`, `marks`) VALUES
(223444, 'RAS_103', 2, 2, 0),
(987, 'RAS_103', 0, 1, 0),
(209625, 'RAS_103', 1, 0, 4),
(209625, 'ras_098', 0, 2, -4);

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `fullname` varchar(255) NOT NULL,
  `rName` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`fullname`, `rName`, `email`, `pass`) VALUES
('amit kumar tiwari', 3, 'shriannu129@gmail.com', 'q'),
('radhey', 987, 'njn', '0987'),
('tyagi', 1234, 'jlckxvjdl', 'a'),
('root', 1245, 'rohan@gmail.com', 'DDDDDD'),
('root', 12345, 'rohan@gmail.oOR', 'DDDDDD'),
('scndskjcn', 123000, 'sdklfndslknf', 'qqwe'),
('SUMIT TIWARI', 123456, 'tsumit1199@gmail.com', 'qqw'),
('djsakhdkj', 209625, 'nddkjnjks', '209625'),
('SUMIT TIWARI', 656575, 'tsumit1199@gmail.com', 'qqw');

-- --------------------------------------------------------

--
-- Table structure for table `stu_info`
--

CREATE TABLE `stu_info` (
  `Name` varchar(250) NOT NULL,
  `roll_no` int(250) NOT NULL,
  `Password` varchar(250) NOT NULL,
  `phone_no` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `teacher_info`
--

CREATE TABLE `teacher_info` (
  `aadhar_no` int(250) NOT NULL,
  `Name` varchar(250) NOT NULL,
  `Password` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher_info`
--

INSERT INTO `teacher_info` (`aadhar_no`, `Name`, `Password`, `email`) VALUES
(12345, 'Rohan Dixit', '12345', 'somkclkdsdjf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`rName`);

--
-- Indexes for table `stu_info`
--
ALTER TABLE `stu_info`
  ADD PRIMARY KEY (`roll_no`);

--
-- Indexes for table `teacher_info`
--
ALTER TABLE `teacher_info`
  ADD PRIMARY KEY (`aadhar_no`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
