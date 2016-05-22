-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2016 at 01:01 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `e-learning`
--
CREATE DATABASE IF NOT EXISTS `e-learning` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `e-learning`;

-- --------------------------------------------------------

--
-- Table structure for table `content_page`
--

CREATE TABLE IF NOT EXISTS `content_page` (
  `section_id` varchar(10) NOT NULL,
  `page_no` varchar(11) NOT NULL,
  `content` blob
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `enrollment`
--

CREATE TABLE IF NOT EXISTS `enrollment` (
  `member_id` int(10) unsigned NOT NULL,
  `subject_code` varchar(10) NOT NULL,
  `type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `enrollment`
--

INSERT INTO `enrollment` (`member_id`, `subject_code`, `type`) VALUES
(1, '01555', 'Student'),
(1, '1111', 'Creator'),
(1, '7701', 'Creator'),
(1, '77012', 'Student'),
(1, 'E4501', 'Creator'),
(1, 'M150', 'Creator'),
(1, 'M151', 'Creator'),
(2, '4401', 'Creator'),
(2, 'M150', 'Student'),
(3, '01555', 'Creator'),
(3, '1111', 'Student'),
(3, '7701', 'Student'),
(3, '77012', 'Creator'),
(4, '01555', 'Student'),
(4, 'E4501', 'Student');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE IF NOT EXISTS `member` (
`member_id` int(10) unsigned NOT NULL,
  `username` varchar(45) DEFAULT NULL,
  `password` varchar(16) DEFAULT NULL,
  `gender` varchar(6) DEFAULT NULL,
  `name` varchar(45) DEFAULT NULL,
  `surname` varchar(45) DEFAULT NULL,
  `country` varchar(20) DEFAULT NULL,
  `tel` varchar(11) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`member_id`, `username`, `password`, `gender`, `name`, `surname`, `country`, `tel`, `email`) VALUES
(1, 'DUKE', '12345678', 'ชาย', 'Test 1', 'Test อีก', 'กรุงเทพมหานคร', '012345678', 'Nukem@mail.com'),
(2, 'Doctor', '12345678', 'หญิง', 'ดอกเตอร์', 'ด้วง', 'เชียงใหม่', '0222222222', 'Doc@ku.th'),
(3, 'werasit', '12345678', 'ชาย', 'werasit', 'mahannop', 'เชียงใหม่', '058665526', 'werasit@gmail.com'),
(4, 'wittaya', '22112536', 'ชาย', 'wittaya', 'borirakkun', 'เชียงราย', '098765431', 'toon.com'),
(5, 'kook', '12345678', 'ชาย', 'werasit', 'mahannop', 'กรุงเทพมหานคร', '02314568', 'werasi@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `section`
--

CREATE TABLE IF NOT EXISTS `section` (
  `section_id` varchar(10) NOT NULL,
  `parent_section_id` varchar(10) NOT NULL,
  `subject_code` varchar(10) NOT NULL,
  `section_name` varchar(100) DEFAULT NULL,
  `sequence` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE IF NOT EXISTS `subject` (
  `subject_code` varchar(10) NOT NULL,
  `group_id` varchar(10) NOT NULL,
  `title` varchar(200) DEFAULT NULL,
  `subtitle` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`subject_code`, `group_id`, `title`, `subtitle`) VALUES
('01555', '2', 'ตลกจุง', 'สนุก'),
('1111', '3', 'กินไก่', ''),
('4401', '7', 'กลิ้งลูกบอล', 'บอลกลิ้ง'),
('7701', '1', 'Calculus', ''),
('77012', '4', 'rttyu', 'cat'),
('E4501', '5', 'พรำพรา', ''),
('M150', '1', 'Calculus 1', ''),
('M151', '1', 'Calculus 2', '');

-- --------------------------------------------------------

--
-- Table structure for table `sub_group`
--

CREATE TABLE IF NOT EXISTS `sub_group` (
  `group_id` varchar(10) NOT NULL,
  `group_name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sub_group`
--

INSERT INTO `sub_group` (`group_id`, `group_name`) VALUES
('1', 'คณิตศาสตร์'),
('2', 'มนุษยศาสตร์'),
('3', 'เกษตรศาสตร์'),
('4', 'สัตวบาล'),
('5', 'พืชศาสตร์'),
('6', 'สังคมศาสตร์'),
('7', 'เทพศาสตร์'),
('8', 'ตลกศาสตร์'),
('9', 'computer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `content_page`
--
ALTER TABLE `content_page`
 ADD PRIMARY KEY (`section_id`);

--
-- Indexes for table `enrollment`
--
ALTER TABLE `enrollment`
 ADD PRIMARY KEY (`member_id`,`subject_code`), ADD KEY `fk_enrollment_subject1_idx` (`subject_code`), ADD KEY `fk_enrollment_member1_idx` (`member_id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
 ADD PRIMARY KEY (`member_id`);

--
-- Indexes for table `section`
--
ALTER TABLE `section`
 ADD PRIMARY KEY (`section_id`,`parent_section_id`,`subject_code`), ADD KEY `fk_document_subject1_idx` (`subject_code`), ADD KEY `fk_section_section1_idx` (`parent_section_id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
 ADD PRIMARY KEY (`subject_code`,`group_id`), ADD KEY `fk_subject_sub_group1_idx` (`group_id`);

--
-- Indexes for table `sub_group`
--
ALTER TABLE `sub_group`
 ADD PRIMARY KEY (`group_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
MODIFY `member_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `content_page`
--
ALTER TABLE `content_page`
ADD CONSTRAINT `fk_content_page_section1` FOREIGN KEY (`section_id`) REFERENCES `section` (`section_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `enrollment`
--
ALTER TABLE `enrollment`
ADD CONSTRAINT `fk_enrollment_member1` FOREIGN KEY (`member_id`) REFERENCES `member` (`member_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_enrollment_subject1` FOREIGN KEY (`subject_code`) REFERENCES `subject` (`subject_code`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `section`
--
ALTER TABLE `section`
ADD CONSTRAINT `fk_document_subject1` FOREIGN KEY (`subject_code`) REFERENCES `subject` (`subject_code`) ON DELETE NO ACTION ON UPDATE CASCADE,
ADD CONSTRAINT `fk_section_section1` FOREIGN KEY (`parent_section_id`) REFERENCES `section` (`section_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `subject`
--
ALTER TABLE `subject`
ADD CONSTRAINT `fk_subject_sub_group1` FOREIGN KEY (`group_id`) REFERENCES `sub_group` (`group_id`) ON DELETE NO ACTION ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
