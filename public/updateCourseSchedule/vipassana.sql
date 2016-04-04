-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2016 at 04:57 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `vipassana`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_account`
--

CREATE TABLE IF NOT EXISTS `admin_account` (
  `Index_no` int(4) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(25) NOT NULL,
  `password` varchar(50) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `secound_name` varchar(30) NOT NULL,
  `birthday` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `NIC` varchar(15) NOT NULL,
  `E_mail` varchar(40) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `location` varchar(20) NOT NULL,
  PRIMARY KEY (`Index_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `admin_account`
--

INSERT INTO `admin_account` (`Index_no`, `user_name`, `password`, `first_name`, `secound_name`, `birthday`, `gender`, `NIC`, `E_mail`, `mobile`, `location`) VALUES
(1, 'editer', 'asd', 'kusal', 'samitha', '1993-09-11', 'male', '932550512v', 'kusalkandanaarachchi@gmail.com', '715992550', 'kosgama'),
(2, 'example1', 'abc123', 'prabath', 'chathuranga', '1989-05-12', 'on', '347890234v', 'fgsjhjjd@gmail.com', '454556788', 'Peradeniya'),
(3, 'example2', 'qwe', 'Rahula', 'kumara', '1986-05-12', 'male', '467887528v', 'fghwjekj@gmail.com', '4567837882', 'Anuradhapura'),
(4, 'kusal1', 'abc', 'kusal', 'samitha', '1993-09-11', 'male', '932550512v', 'kusalkandanaarachchi@gmail.com', '719772550', 'Peradeniya'),
(5, 'account', 'asd', 'kusal', 'samitha', '1993-05-16', 'male', '932550512v', 'kusal@gmail.com', '712345678', 'Peradeniya'),
(6, 'qwe', 'abc123', 'kamal', 'samitha', '1981-02-13', 'male', '932550413v', 'abc@gmail.com', '716785678', 'Peradeniya'),
(7, 'qwe1', '6367c48dd193d56ea7b0baad25b19455e529f5ee', 'dfgh', 'vhx', '1988-09-10', 'male', '355628', 'dfgfgfg@gmail.com', '55688', 'Peradeniya'),
(8, 'Ishan', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'Ishan', 'jayasundara', '1992-08-08', 'male', '922212236v', 'ishan1316@gmail.com', '714034467', 'Kosgama'),
(9, 'kumara', '6367c48dd193d56ea7b0baad25b19455e529f5ee', 'kumara', 'piyadarshna', '1989-06-08', 'male', '896745671v', 'kumara@gmail.com', '0716734785', 'Kosgama'),
(10, 'ishan123', '6181504b51e7d5f666376a4c956c3460a5fd00f4', 'ishan', 'jayasundara', '1992-08-08', 'male', '922212236v', 'ishan1316@gmail.com', '714034467', 'Kosgama');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `comment` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `name`, `comment`) VALUES
(12, 'nuwan', 'I want to help you'),
(13, 'ruwan', 'Ok thank you very much...'),
(14, 'Chamara', 'Nice work bro'),
(15, 'Rasika', 'Ayyo salli'),
(17, 'kusal', 'Ok no problem...'),
(18, 'kasun', 'Add'),
(19, 'kusal', 'Ok or not...');

-- --------------------------------------------------------

--
-- Table structure for table `confermedapplication`
--

CREATE TABLE IF NOT EXISTS `confermedapplication` (
  `RegNo` int(11) NOT NULL AUTO_INCREMENT,
  `participating1` varchar(3) NOT NULL,
  `personType` varchar(20) NOT NULL,
  `courseType` varchar(15) NOT NULL,
  `date1` int(3) NOT NULL,
  `month1` int(2) NOT NULL,
  `year1` int(6) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `date2` int(3) NOT NULL,
  `month2` int(3) NOT NULL,
  `year2` int(5) NOT NULL,
  `gender` varchar(7) NOT NULL,
  `nic2` int(15) NOT NULL,
  `email2` varchar(50) NOT NULL,
  `address1` varchar(60) NOT NULL,
  `address2` varchar(60) NOT NULL,
  `country` varchar(10) NOT NULL,
  `phone` int(20) NOT NULL,
  `fax` int(20) NOT NULL,
  `motherTounge` varchar(15) NOT NULL,
  `languagesKnown` varchar(50) NOT NULL,
  `job` varchar(60) NOT NULL,
  `helth` varchar(80) NOT NULL,
  `practicing` varchar(100) NOT NULL,
  PRIMARY KEY (`RegNo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=40 ;

--
-- Dumping data for table `confermedapplication`
--

INSERT INTO `confermedapplication` (`RegNo`, `participating1`, `personType`, `courseType`, `date1`, `month1`, `year1`, `fname`, `lname`, `date2`, `month2`, `year2`, `gender`, `nic2`, `email2`, `address1`, `address2`, `country`, `phone`, `fax`, `motherTounge`, `languagesKnown`, `job`, `helth`, `practicing`) VALUES
(19, 'No', 'teacher', '', 26, 1, 2016, 'bbbbbbb', 'bbbbbbbbbbb', 20, 1, 2016, 'Male', 3333333, 'ccccccccc@cccccccccc', 'bbbbbbbbbbb', 'bbbbbbbbbbb', '', 2147483647, 2147483647, 'bbbbbbbbbbbb', 'bbbbbbbbb', 'bbbbbbbbbbbb', 'bbbbbbbbb', 'bbbbbbb'),
(20, 'No', '', '', 26, 1, 2016, 'ccccccccccc', 'ccccccccc', 11, 1, 2016, 'Male', 2147483647, 'bbbbbbbbb@bbbbbbb', 'cccccccccc', 'cccccccccccc', '', 2147483647, 222222, 'cccccccccc', 'ccccccccccc', 'ccccccc', 'cccccccccc', 'ccccccccc'),
(21, 'No', 'teacher ', '', 26, 1, 2016, 'dddddddddddd', 'ddddddddddd', 0, 0, 0, 'Female', 2147483647, 'ddddddd@ddddddddddd', 'dddddddddd', 'dddddddd', '', 2147483647, 2147483647, 'ddddddddd', 'ddddddddd', 'ddddddd', 'ddddddddddddd', 'dddddddddddddd'),
(23, 'No', 'teacher', '', 25, 1, 2016, 'eeeeeeeeee', '', 0, 0, 0, 'Female', 88888888, 'eeeeeeeee@eeeeeeee', 'eeeeeee', 'eeeeeeeeeeeeeeeeeeeeeeeeeee', 'Algeria', 444444444, 2147483647, 'eeeeeeeeeeeeeee', 'eeeeeee', 'eeeeeeeeeeeeeeeeeeeeeeee', 'eeeeeeeeeeeeeeeeeee', 'eeeeeeeeeeeeeeeeeeee'),
(27, 'No', '', '', 26, 1, 2016, 'ggggggg', 'gggggggggggggggggggg', 20, 1, 2016, 'Male', 2147483647, 'ggggggggggggg@ggggggggggggg', 'gggggggggggggggggggggggggg', 'ggggggggggggggggggggggggggggggggggggggggggg', 'Australia', 2147483647, 9999999, 'ggggggggggggggg', 'gggggggggggggggg', 'gggggggggggggggggg', 'ggggggggggggggggg', 'gggggggggggggggggggggggggggg'),
(38, 'No', '', '', 25, 1, 2016, 'iiiiiiiiiiiiiiiii', 'iiiiiiiiiiiiiiiiiiiiiiiiiiiiii', 16, 11, 2015, 'Male', 0, 'iiiiiiiiiiiiiiiiiiiiiiiiiiiiiiii', 'iiiii', 'iiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiii', 'Israel', 0, 0, 'iiiiiiiiiiiiiii', 'iiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiii', 'iiiiiiiiiiiiiiiiiiiii', 'iiiiiiiiiiiiiiiiiiiiiiiii', 'iiiiiiiiiiiiiiiiiii'),
(39, 'No', '', '10 days', 26, 1, 2016, 'Dushman', 'Nalin', 18, 11, 1991, 'Male', 913233697, 'dusman.nalin@gmail.com', '15th mile post, pelawatta road,', 'pitigala', 'Sri Lanka', 719341502, 719341502, 'Sinhala', 'English', 'Software Enginear', 'no', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE IF NOT EXISTS `courses` (
  `courseID` int(11) NOT NULL AUTO_INCREMENT,
  `courseName` varchar(100) NOT NULL,
  `conduct` varchar(50) NOT NULL,
  `content` varchar(1000) NOT NULL,
  `startingDate` date NOT NULL,
  `members` int(11) NOT NULL,
  `gender` varchar(25) NOT NULL,
  `location` varchar(25) NOT NULL,
  PRIMARY KEY (`courseID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`courseID`, `courseName`, `conduct`, `content`, `startingDate`, `members`, `gender`, `location`) VALUES
(22, 'Advanced 20 days', 'Ruwan Samarasinghe', 'You should bring water bottle!', '2015-11-11', 150, 'Male', 'Kosgama'),
(23, 'Advanced 20 days', 'Saman Semasinghe', 'This is not boring..!', '2015-11-13', 120, 'Female', 'Peradeniya'),
(24, '10 days', 'Saman Kumara', 'This is not boring..!', '2015-11-28', 100, 'Male', 'Kosgama'),
(25, '10 days', 'Saman Semasinghe', '', '2016-01-02', 100, 'Male', 'Peradeniya'),
(26, '10 days', 'Saman Kumara', 'Nothing to Special', '2016-01-05', 100, 'Female', 'Kosgama'),
(27, '10 days', 'Ruwan Samarasinghe', '', '2016-01-08', 150, 'Male/Female', 'Anuradhapura'),
(28, '20 days', 'Saman Kumara', '', '2016-01-15', 50, 'Male', 'Peradeniya');

-- --------------------------------------------------------

--
-- Table structure for table `donoation`
--

CREATE TABLE IF NOT EXISTS `donoation` (
  `Id_number` int(5) NOT NULL AUTO_INCREMENT,
  `Name` varchar(40) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Address` varchar(60) NOT NULL,
  `Country` char(25) NOT NULL,
  `City` char(30) NOT NULL,
  `Zipcode` int(6) NOT NULL,
  `Phone_no` int(15) NOT NULL,
  `Discription` varchar(100) NOT NULL,
  `State` int(2) NOT NULL,
  `Password` varchar(80) NOT NULL,
  PRIMARY KEY (`Id_number`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `donoation`
--

INSERT INTO `donoation` (`Id_number`, `Name`, `Email`, `Address`, `Country`, `City`, `Zipcode`, `Phone_no`, `Discription`, `State`, `Password`) VALUES
(5, 'jhj', 'vmnmnm@jk.com', '', 'Australia', 'jjk', 2344, 12345556, '', 0, ''),
(6, 'we', 'th@fg.com', 'fgg', 'Canada', 'ghjhjs', 1232, 457774, '', 0, ''),
(7, 'ghh', 'aerr@ghjnj.com', 'hjjj', 'Sri lanka', 'bnm', 45656, 122455, '', 0, ''),
(8, 'fggfg', 'abhbkl@gj.com', 'gghgh', 'Bezila', 'ffggm', 34534, 456788823, '', 0, ''),
(9, 'bhbhstt', 'err33@ghj.com', 'fgfgfg', 'Bezila', 'bnss', 2434, 3434455, '', 0, ''),
(10, 'bdnjd', 'cggg@ghh.com', 'ddfd', 'France', 'fdsd', 22, 45555, '', 0, ''),
(11, 'kusal', 'qwe@gmail.com', 'horan', 'Sri lanka', 'horan', 1103, 764567234, '', 0, ''),
(12, 'dee', 'abd@gmail.com', 'ddd', 'Canada', 'ewe', 33, 444, '', 0, ''),
(13, 'hh', 'ggg@rgg.c', 'jj', 'China', 'jj', 0, 0, '', 0, ''),
(14, 'aaa', 'dvf@jj.fu', 'd', 'Belgium', 'ew', 22, 55, '', 0, ''),
(15, 'cf', 'xcgvg@mm.c', 'fg', 'Canada', 'swd', 22, 444, '', 0, ''),
(16, 'Ruwan', 'abc@gmail.com', 'Kurunagala', 'Sri lanka', 'colombo', 122, 726745789, '', 0, ''),
(17, 'sswd', 'df@hj.c', 'ww', 'Bangladesh', 'dd', 223, 33, '', 0, ''),
(18, 'Aruna', 'abcd@gmail.com', 'Hambanthota', 'Sri lanka', 'Hambanthota', 1222, 7777777, 'I will donate 20kg rice', 0, ''),
(19, 'sss', 'fgg@hj.hh', 'nnmnm', 'Bangladesh', 'bnm', 11, 44, 'hjjkklklllkl', 0, ''),
(20, 'ruwan', 'asd@gmail.com', 'colombo', 'Sri lanka', 'colombo', 1108, 723456789, 'I can donate 20', 0, ''),
(21, 'nuwan samarasinghe', 'nuwan@b.com', 'mawathagama', 'Sri Lanka', 'mawathagama', 60060, 754648707, 'any', 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `necessity`
--

CREATE TABLE IF NOT EXISTS `necessity` (
  `necessity_no` int(5) NOT NULL AUTO_INCREMENT,
  `description` varchar(500) NOT NULL,
  PRIMARY KEY (`necessity_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `necessity`
--

INSERT INTO `necessity` (`necessity_no`, `description`) VALUES
(8, 'donation'),
(9, 'We want 10 helpers for the next meditation course'),
(10, 'etyuyue iuiuirbb ghuu'),
(11, 'ghjk jijiojos jkjkk jkjkjk jkjkbnbcxmk'),
(12, 'In this month, Electric bill was 250.00.');

-- --------------------------------------------------------

--
-- Table structure for table `necessity_details`
--

CREATE TABLE IF NOT EXISTS `necessity_details` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `necessity` varchar(30) NOT NULL,
  `quantity` varchar(20) NOT NULL,
  `is_urgent` binary(1) NOT NULL,
  `description` varchar(50) NOT NULL,
  `submited_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=48 ;

--
-- Dumping data for table `necessity_details`
--

INSERT INTO `necessity_details` (`id`, `necessity`, `quantity`, `is_urgent`, `description`, `submited_date`) VALUES
(22, 'Rice', '54kg', '1', 'For prepare meals', '2015-09-27'),
(23, 'Rice-White', '40kg', '1', 'For prepare meals', '2015-09-20'),
(32, 'Dhall', '12kg', '0', 'susa', '2015-10-11'),
(34, 'Broom', '3', '0', 'swswsw', '2015-10-11'),
(35, 'Soap', '3', '0', '33333', '2015-10-11'),
(39, 'Rice-White', '67', '1', 'ddgdgdgdg', '2015-10-11'),
(42, 'Soap', '12', '1', '', '2015-10-12'),
(44, 'Sugar', '5Kg', '1', 'bbbb', '2015-10-13'),
(45, 'Broom', '2', '0', 'aaaa', '2015-10-19'),
(46, 'Soap', '5', '0', '', '2015-10-20'),
(47, 'Broom', '2', '0', '', '2015-10-20');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `userId` int(11) NOT NULL AUTO_INCREMENT,
  `userName` varchar(255) NOT NULL,
  `profile_img` varchar(255) NOT NULL,
  PRIMARY KEY (`userId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`userId`, `userName`, `profile_img`) VALUES
(1, 'Nuwan Samarasinghe', './comments/images/user.png'),
(2, 'dusman.nalin@gmail.com', '');

-- --------------------------------------------------------

--
-- Table structure for table `registerform`
--

CREATE TABLE IF NOT EXISTS `registerform` (
  `RegNo` int(7) NOT NULL AUTO_INCREMENT,
  `participating` varchar(3) NOT NULL,
  `personType` varchar(20) NOT NULL,
  `courseType` varchar(15) NOT NULL,
  `date1` int(3) NOT NULL,
  `month1` int(2) NOT NULL,
  `year1` int(6) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `date2` int(3) NOT NULL,
  `month2` int(3) NOT NULL,
  `year2` int(5) NOT NULL,
  `gender` varchar(7) NOT NULL,
  `nic2` varchar(15) NOT NULL,
  `email2` varchar(70) NOT NULL,
  `address1` varchar(60) NOT NULL,
  `address2` varchar(60) NOT NULL,
  `country` varchar(10) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `fax` int(20) NOT NULL,
  `motherTounge` varchar(15) NOT NULL,
  `languagesKnown` varchar(50) NOT NULL,
  `job` varchar(60) NOT NULL,
  `helth` varchar(80) NOT NULL,
  `practicing` varchar(100) NOT NULL,
  PRIMARY KEY (`RegNo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=37 ;

--
-- Dumping data for table `registerform`
--

INSERT INTO `registerform` (`RegNo`, `participating`, `personType`, `courseType`, `date1`, `month1`, `year1`, `fname`, `lname`, `date2`, `month2`, `year2`, `gender`, `nic2`, `email2`, `address1`, `address2`, `country`, `phone`, `fax`, `motherTounge`, `languagesKnown`, `job`, `helth`, `practicing`) VALUES
(18, '', '', '', 12, 1, 2016, 'aaaaaaaaaaaa', 'aaaaaaaa', 12, 1, 2016, 'Male', '111111111', 'aaaaaaaa@qaaaaaaaaa', 'aaaaaaaaaaaa', 'aaaaaaaaaaaa', 'Algeria', '1111111111', 11111111, 'aaaaa', 'aaaaa', 'aaaa', 'aaaaaaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaa'),
(25, '', '', '', 18, 1, 2016, 'ffffff', 'ffffffffffffffffffffff', 0, 0, 0, 'Male', '7777777777', 'ffffffffffff@fffffffffffffff', 'fffffff', 'ffffffffffffffffffffffffffff', '', '777777', 2147483647, 'fffffffffffffff', 'ffffffffffffffffffffffffff', 'ffffffffffffffffffffffffffffffffffffff', 'fffffffffffffffffffffffff', 'ffffffffffffffffffffffffffffffff'),
(26, '', '', '', 12, 1, 2016, 'lllllllllllll', 'lllllllllllllll', 20, 1, 2016, 'Male', '99999999', 'lllllllllll@hhhhhhhhhhh', 'jjjjjjjj', 'jjjjjjjjjjjjjjjjjjjj', 'Algeria', '99-', 888888, 'kkkkkkkkkk', 'kkkkkkk', 'kkkkkkk', 'kkkkkkkkkkkkkkkkk', 'kkkkkkkkkkk'),
(29, '', '', '', 18, 1, 2016, 'hhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh', 'hhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh', 11, 1, 2016, 'Male', '00000000000', 'hhhhhhhhhhhhhhhhhhhh@hhhhhhhhhhhh', 'hhhhhhhhhhhhhhhhhhhhhhhhhhh', 'hhhhhhhhhhhhhhhhhhhhhhhhh', 'Algeria', '00000000000000000000', 0, 'hhhhhhhhhhhhhhh', 'hhhhhhhhhhhhhhhhhhh', 'hhhhhhhhhhhhhh', 'hhhhhhhhhhhhhhhhhhhh', 'hhhhhhhhhhhhhhhh'),
(30, '', '', '', 18, 1, 2016, 'jjjjjj', 'jjjjjjjjjjjj', 27, 1, 2016, '', '0000000000', 'jjjjj@hhhhhhh', '00000', '000000000000000', '', '888888', 88888888, 'jjjjjjjj', 'jjjjjjjjjjjjj', 'jjj', 'jjjjjj', ''),
(31, '', '', '', 18, 1, 2016, '9999', '999999', 0, 0, 0, '', 'hhhh', '999999@hhhh', 'hhhhhhhhh', '', 'Sri Lanka', 'hhhhh', 0, 'kkkkkk', '', '', 'hhhhhhhhh', ''),
(32, '', '', '', 18, 1, 2016, '9999', '999999', 0, 0, 0, '', 'hhhh', '999999@hhhh', 'hhhhhhhhh', '', 'Sri Lanka', 'hhhhh', 0, 'kkkkkk', '', '', 'hhhhhhhhh', ''),
(33, '', '', '', 18, 1, 2016, 'hhhhhhhhhhhhh', 'hhhhhhhhhhhhhhhh', 13, 1, 2016, 'Male', '1234567890', 'hhhhhhh@ss.com', 'kkkkkkkkkk', '', 'Sri Lanka', '1234567890', 1234567890, 'kkkkkkkkk', '', 'mmmmm', 'mmmmmmm', ''),
(34, '', '', '', 0, 0, 0, 'kk', 'kkkkkkkkkkkkkkkkkk', 0, 0, 0, 'Male', '1234567890', 'jjjjjjjj@sss.com', 'hhhhhhhhhhh', '', 'Sri Lanka', '1234567890', 1234567890, 'fgggggggggggggg', '', '', '0000000000', ''),
(35, '', '', '', 18, 1, 2016, 'jjjjjjj', 'jjjjjjjjjjjjjjjjj', 28, 1, 2016, 'Male', '1234567890', 'hhhhhhhhhh@d.com', 'ssssssssssssss', '', 'Sri Lanka', '1234567890', 1234567890, 'ssssssss', 'ssss', 'kkk', 'kkkkkk', 'kkkkkk'),
(36, '', '', '', 18, 1, 2016, 'waddsss', 'ccccccccc', 19, 1, 2016, 'Male', '1234567890', 'aaaaaa@aaaaaaa.com', 'aaaaaaaaaa', '', 'Sri Lanka', '1234567890', 1234567890, 'jjjjjjjjjjjjj', 'ssss', 'ssssssss', 'jjjjjjjjjjjjjj', '');

-- --------------------------------------------------------

--
-- Table structure for table `user_account`
--

CREATE TABLE IF NOT EXISTS `user_account` (
  `Index_no` int(11) NOT NULL,
  `user_name` varchar(15) NOT NULL,
  `password` varchar(20) NOT NULL,
  `address` varchar(25) NOT NULL,
  `telephone` int(10) NOT NULL,
  PRIMARY KEY (`Index_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_account`
--

INSERT INTO `user_account` (`Index_no`, `user_name`, `password`, `address`, `telephone`) VALUES
(0, 'Rasika', 'abc123', ' Horana', 2147483647),
(1, 'kusal', 'abc123', 'bulathsinhala', 783532130),
(2, 'kasun', 'abc123', 'maminiyagodella', 715774231),
(3, 'Anushka', 'abc123', 'Egaloya', 774536890),
(4, 'Oshini', 'abc123', 'Bulathsinhala', 724231456),
(5, 'samith', 'abc123', 'Bulathsinhala', 724231456),
(6, 'sampath', 'abc123', ' Horana', 2147483647),
(7, 'kumara', 'abc123', 'Gampaha', 2147483647),
(8, 'Rahula', '/', 'matara', 647787823),
(9, 'lakmal', 'abc123', 'kalaniya', 2147483647),
(10, 'Amila', 'abc123', 'Bulathsinhala', 944668899),
(11, 'nuwan', 'abc123', 'kurunagala', 2147483647),
(12, 'poiya', 'abc123', 'malimbada', 2147483647),
(13, 'Ranga', 'abc123', 'Engiriya', 94576889),
(15, 'ku', '/', 'fhh', 94);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
