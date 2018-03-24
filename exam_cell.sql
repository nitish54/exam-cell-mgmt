-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 27, 2012 at 02:22 PM
-- Server version: 5.1.37
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `exam_cell`
--

-- --------------------------------------------------------

--
-- Table structure for table `2008`
--

CREATE TABLE IF NOT EXISTS `2008` (
  `enroll_no` varchar(13) NOT NULL,
  `branch` varchar(45) NOT NULL,
  PRIMARY KEY (`enroll_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2008`
--

INSERT INTO `2008` (`enroll_no`, `branch`) VALUES
('0205CS081005', 'Computer Science and Engineering');

-- --------------------------------------------------------

--
-- Table structure for table `2009`
--

CREATE TABLE IF NOT EXISTS `2009` (
  `enroll_no` varchar(13) NOT NULL,
  `branch` varchar(45) NOT NULL,
  PRIMARY KEY (`enroll_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2009`
--

INSERT INTO `2009` (`enroll_no`, `branch`) VALUES
('0205CS091005', 'Information Technology'),
('0205CS091037', 'Electronics and Communication Engineering'),
('0205CS091047', 'Mechanical Engineering'),
('0205CS091055', 'Electrical and Electronics Engineering');

-- --------------------------------------------------------

--
-- Table structure for table `2010`
--

CREATE TABLE IF NOT EXISTS `2010` (
  `enroll_no` varchar(13) NOT NULL,
  `branch` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`enroll_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2010`
--

INSERT INTO `2010` (`enroll_no`, `branch`) VALUES
('0205CS101001', 'Computer Science and Engineering'),
('0205CS101002', 'Computer Science and Engineering'),
('0205CS101003', 'Computer Science and Engineering'),
('0205CS101004', 'Computer Science and Engineering'),
('0205CS101005', 'Computer Science and Engineering'),
('0205CS101006', 'Computer Science and Engineering'),
('0205CS101007', 'Computer Science and Engineering'),
('0205CS101008', 'Computer Science and Engineering'),
('0205CS101009', 'Computer Science and Engineering'),
('0205CS101011', 'Computer Science and Engineering'),
('0205CS101012', 'Computer Science and Engineering'),
('0205CS101013', 'Computer Science and Engineering'),
('0205CS101014', 'Computer Science and Engineering'),
('0205CS101015', 'Computer Science and Engineering'),
('0205CS101016', 'Computer Science and Engineering'),
('0205CS101017', 'Computer Science and Engineering'),
('0205CS101018', 'Computer Science and Engineering'),
('0205CS101019', 'Computer Science and Engineering'),
('0205CS101020', 'Computer Science and Engineering'),
('0205CS101021', 'Computer Science and Engineering'),
('0205CS101022', 'Computer Science and Engineering'),
('0205CS101023', 'Computer Science and Engineering'),
('0205CS101024', 'Computer Science and Engineering'),
('0205CS101026', 'Computer Science and Engineering'),
('0205CS101027', 'Computer Science and Engineering'),
('0205CS101028', 'Computer Science and Engineering'),
('0205CS101029', 'Computer Science and Engineering'),
('0205CS101030', 'Computer Science and Engineering'),
('0205CS101031', 'Computer Science and Engineering'),
('0205CS101032', 'Computer Science and Engineering'),
('0205CS101033', 'Computer Science and Engineering'),
('0205CS101034', 'Computer Science and Engineering'),
('0205CS101035', 'Computer Science and Engineering'),
('0205CS101036', 'Computer Science and Engineering'),
('0205CS101037', 'Computer Science and Engineering'),
('0205CS101038', 'Computer Science and Engineering'),
('0205CS101039', 'Computer Science and Engineering'),
('0205CS101040', 'Computer Science and Engineering'),
('0205CS101041', 'Computer Science and Engineering'),
('0205CS101042', 'Computer Science and Engineering'),
('0205CS101043', 'Computer Science and Engineering'),
('0205CS101044', 'Computer Science and Engineering'),
('0205CS101045', 'Computer Science and Engineering'),
('0205CS101046', 'Computer Science and Engineering'),
('0205CS101047', 'Computer Science and Engineering'),
('0205CS101048', 'Computer Science and Engineering'),
('0205CS101049', 'Computer Science and Engineering'),
('0205CS101050', 'Computer Science and Engineering'),
('0205CS101051', 'Computer Science and Engineering'),
('0205CS101052', 'Computer Science and Engineering'),
('0205CS101053', 'Computer Science and Engineering'),
('0205CS101054', 'Computer Science and Engineering'),
('0205CS101055', 'Computer Science and Engineering'),
('0205CS101056', 'Computer Science and Engineering'),
('0205CS101057', 'Computer Science and Engineering'),
('0205CS101058', 'Computer Science and Engineering'),
('0205CS101059', 'Computer Science and Engineering'),
('0205CS101060', 'Computer Science and Engineering'),
('0205CS101061', 'Computer Science and Engineering'),
('0205CS101062', 'Computer Science and Engineering'),
('0205CS101063', 'Computer Science and Engineering'),
('0205CS101064', 'Computer Science and Engineering'),
('0205CS101065', 'Computer Science and Engineering'),
('0205CS101066', 'Computer Science and Engineering'),
('0205CS101067', 'Computer Science and Engineering'),
('0205CS101068', 'Computer Science and Engineering'),
('0205CS101069', 'Computer Science and Engineering'),
('0205CS101070', 'Computer Science and Engineering'),
('0205CS101071', 'Computer Science and Engineering'),
('0205CS101072', 'Computer Science and Engineering'),
('0205CS101074', 'Computer Science and Engineering'),
('0205CS101075', 'Computer Science and Engineering'),
('0205CS101076', 'Computer Science and Engineering'),
('0205CS101077', 'Computer Science and Engineering'),
('0205CS101078', 'Computer Science and Engineering'),
('0205CS101079', 'Computer Science and Engineering'),
('0205CS101080', 'Computer Science and Engineering'),
('0205CS101081', 'Computer Science and Engineering'),
('0205CS101082', 'Computer Science and Engineering'),
('0205CS101083', 'Computer Science and Engineering'),
('0205CS101084', 'Computer Science and Engineering'),
('0205CS101085', 'Computer Science and Engineering'),
('0205CS101086', 'Computer Science and Engineering'),
('0205CS101087', 'Computer Science and Engineering'),
('0205CS101088', 'Computer Science and Engineering'),
('0205CS101089', 'Computer Science and Engineering'),
('0205CS101090', 'Computer Science and Engineering'),
('0205CS101091', 'Computer Science and Engineering'),
('0205CS101092', 'Computer Science and Engineering'),
('0205CS101093', 'Computer Science and Engineering'),
('0205CS101094', 'Computer Science and Engineering'),
('0205CS101095', 'Computer Science and Engineering'),
('0205CS101096', 'Computer Science and Engineering'),
('0205CS101097', 'Computer Science and Engineering'),
('0205CS101098', 'Computer Science and Engineering'),
('0205CS101099', 'Computer Science and Engineering'),
('0205CS101100', 'Computer Science and Engineering'),
('0205CS101101', 'Computer Science and Engineering'),
('0205CS101102', 'Computer Science and Engineering'),
('0205CS101103', 'Computer Science and Engineering'),
('0205CS101104', 'Computer Science and Engineering'),
('0205CS101105', 'Computer Science and Engineering'),
('0205CS101106', 'Computer Science and Engineering'),
('0205CS101107', 'Computer Science and Engineering'),
('0205CS101108', 'Computer Science and Engineering'),
('0205CS101109', 'Computer Science and Engineering'),
('0205CS101111', 'Computer Science and Engineering'),
('0205CS101112', 'Computer Science and Engineering'),
('0205CS101113', 'Computer Science and Engineering'),
('0205CS101114', 'Computer Science and Engineering'),
('0205CS101115', 'Computer Science and Engineering'),
('0205CS101116', 'Computer Science and Engineering'),
('0205CS101117', 'Computer Science and Engineering'),
('0205CS101118', 'Computer Science and Engineering'),
('0205CS101119', 'Computer Science and Engineering'),
('0205CS101120', 'Computer Science and Engineering'),
('0205CS101121', 'Computer Science and Engineering'),
('0205CS101122', 'Computer Science and Engineering'),
('0205CS101123', 'Computer Science and Engineering'),
('0205CS101124', 'Computer Science and Engineering'),
('0205CS101125', 'Computer Science and Engineering'),
('0205CS101126', 'Computer Science and Engineering'),
('0205CS101127', 'Computer Science and Engineering'),
('0205CS101128', 'Computer Science and Engineering'),
('0205CS101129', 'Computer Science and Engineering'),
('0205CS101130', 'Computer Science and Engineering'),
('0205CS101131', 'Computer Science and Engineering'),
('0205CS101132', 'Computer Science and Engineering'),
('0205IT101005', 'Information Technology'),
('0205ME101001', 'Mechanical Engineering'),
('0205ME101002', 'Mechanical Engineering'),
('0205ME101003', 'Mechanical Engineering'),
('0205ME101004', 'Mechanical Engineering'),
('0205ME101005', 'Mechanical Engineering'),
('0205ME101006', 'Mechanical Engineering'),
('0205ME101007', 'Mechanical Engineering'),
('0205ME101008', 'Mechanical Engineering'),
('0205ME101010', 'Mechanical Engineering'),
('0205ME101011', 'Mechanical Engineering'),
('0205ME101012', 'Mechanical Engineering'),
('0205ME101013', 'Mechanical Engineering'),
('0205ME101014', 'Mechanical Engineering'),
('0205ME101015', 'Mechanical Engineering'),
('0205ME101017', 'Mechanical Engineering'),
('0205ME101018', 'Mechanical Engineering'),
('0205ME101019', 'Mechanical Engineering'),
('0205ME101020', 'Mechanical Engineering'),
('0205ME101021', 'Mechanical Engineering'),
('0205ME101022', 'Mechanical Engineering'),
('0205ME101023', 'Mechanical Engineering'),
('0205ME101024', 'Mechanical Engineering'),
('0205ME101026', 'Mechanical Engineering'),
('0205ME101027', 'Mechanical Engineering'),
('0205ME101028', 'Mechanical Engineering'),
('0205ME101029', 'Mechanical Engineering'),
('0205ME101030', 'Mechanical Engineering'),
('0205ME101031', 'Mechanical Engineering'),
('0205ME101032', 'Mechanical Engineering'),
('0205ME101033', 'Mechanical Engineering'),
('0205ME101034', 'Mechanical Engineering'),
('0205ME101035', 'Mechanical Engineering'),
('0205ME101036', 'Mechanical Engineering'),
('0205ME101037', 'Mechanical Engineering'),
('0205ME101038', 'Mechanical Engineering'),
('0205ME101039', 'Mechanical Engineering'),
('0205ME101040', 'Mechanical Engineering'),
('0205ME101041', 'Mechanical Engineering'),
('0205ME101042', 'Mechanical Engineering'),
('0205ME101043', 'Mechanical Engineering'),
('0205ME101044', 'Mechanical Engineering'),
('0205ME101045', 'Mechanical Engineering'),
('0205ME101046', 'Mechanical Engineering'),
('0205ME101047', 'Mechanical Engineering'),
('0205ME101048', 'Mechanical Engineering'),
('0205ME101049', 'Mechanical Engineering'),
('0205ME101050', 'Mechanical Engineering'),
('0205ME101051', 'Mechanical Engineering'),
('0205ME101052', 'Mechanical Engineering'),
('0205ME101053', 'Mechanical Engineering'),
('0205ME101054', 'Mechanical Engineering'),
('0205ME101055', 'Mechanical Engineering'),
('0205ME101056', 'Mechanical Engineering'),
('0205ME101057', 'Mechanical Engineering'),
('0205ME101058', 'Mechanical Engineering'),
('0205ME101059', 'Mechanical Engineering'),
('0205ME101060', 'Mechanical Engineering'),
('0205ME101061', 'Mechanical Engineering'),
('0205ME101062', 'Mechanical Engineering'),
('0205ME101063', 'Mechanical Engineering'),
('0205ME101064', 'Mechanical Engineering'),
('0205ME101065', 'Mechanical Engineering'),
('0205ME101066', 'Mechanical Engineering');

-- --------------------------------------------------------

--
-- Table structure for table `2010_1_december_setb`
--

CREATE TABLE IF NOT EXISTS `2010_1_december_setb` (
  `enroll_no` varchar(13) NOT NULL,
  `branch` varchar(45) DEFAULT NULL,
  `marks` double DEFAULT NULL,
  `result` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`enroll_no`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2010_1_december_setb`
--

INSERT INTO `2010_1_december_setb` (`enroll_no`, `branch`, `marks`, `result`) VALUES
('0205CS101001', 'Computer Science and Engineering', 6, 'PASS'),
('0205CS101002', 'Computer Science and Engineering', 5, 'FAIL'),
('0205CS101003', 'Computer Science and Engineering', 5.27, 'FAIL'),
('0205CS101004', 'Computer Science and Engineering', 3.8, 'FAIL'),
('0205CS101005', 'Computer Science and Engineering', 6.87, 'PASS'),
('0205CS101006', 'Computer Science and Engineering', 4.53, 'FAIL'),
('0205CS101007', 'Computer Science and Engineering', 5.87, 'PASS'),
('0205CS101008', 'Computer Science and Engineering', 4.87, 'FAIL'),
('0205CS101009', 'Computer Science and Engineering', 3, 'FAIL'),
('0205CS101011', 'Computer Science and Engineering', 4.27, 'FAIL'),
('0205CS101012', 'Computer Science and Engineering', 3.67, 'FAIL'),
('0205CS101013', 'Computer Science and Engineering', 6.2, 'PASS'),
('0205CS101014', 'Computer Science and Engineering', 6, 'PASS'),
('0205CS101015', 'Computer Science and Engineering', 3.73, 'FAIL'),
('0205CS101016', 'Computer Science and Engineering', 6.13, 'PASS'),
('0205CS101017', 'Computer Science and Engineering', 6.53, 'PASS'),
('0205CS101018', 'Computer Science and Engineering', 7.93, 'PASS'),
('0205CS101019', 'Computer Science and Engineering', 6.93, 'PASS'),
('0205CS101020', 'Computer Science and Engineering', 3.8, 'FAIL'),
('0205CS101021', 'Computer Science and Engineering', 5.93, 'PASS'),
('0205CS101022', 'Computer Science and Engineering', 6.27, 'PASS'),
('0205CS101023', 'Computer Science and Engineering', 3.13, 'FAIL'),
('0205CS101024', 'Computer Science and Engineering', 4.8, 'FAIL'),
('0205CS101026', 'Computer Science and Engineering', 2.2, 'FAIL'),
('0205CS101027', 'Computer Science and Engineering', 3.2, 'FAIL'),
('0205CS101028', 'Computer Science and Engineering', 2.2, 'FAIL'),
('0205CS101029', 'Computer Science and Engineering', 5.93, 'PASS'),
('0205CS101030', 'Computer Science and Engineering', 5.8, 'FAIL'),
('0205CS101031', 'Computer Science and Engineering', 7, 'PASS'),
('0205CS101032', 'Computer Science and Engineering', 5.4, 'FAIL'),
('0205CS101033', 'Computer Science and Engineering', 7.13, 'PASS'),
('0205CS101034', 'Computer Science and Engineering', 4.87, 'FAIL'),
('0205CS101035', 'Computer Science and Engineering', 5.47, 'FAIL'),
('0205CS101036', 'Computer Science and Engineering', 6.93, 'PASS'),
('0205CS101037', 'Computer Science and Engineering', 5.87, 'PASS'),
('0205CS101038', 'Computer Science and Engineering', 4, 'FAIL'),
('0205CS101039', 'Computer Science and Engineering', 8.13, 'PASS'),
('0205CS101040', 'Computer Science and Engineering', 6.07, 'PASS'),
('0205CS101041', 'Computer Science and Engineering', 3.53, 'FAIL'),
('0205CS101042', 'Computer Science and Engineering', 7.47, 'PASS'),
('0205CS101043', 'Computer Science and Engineering', 6.53, 'PASS'),
('0205CS101044', 'Computer Science and Engineering', 6.73, 'PASS'),
('0205CS101045', 'Computer Science and Engineering', 6.53, 'PASS'),
('0205CS101046', 'Computer Science and Engineering', 6.87, 'PASS'),
('0205CS101047', 'Computer Science and Engineering', 3.73, 'FAIL'),
('0205CS101048', 'Computer Science and Engineering', 5.53, 'PASS'),
('0205CS101049', 'Computer Science and Engineering', 6.2, 'PASS'),
('0205CS101050', 'Computer Science and Engineering', 5.67, 'PASS'),
('0205CS101051', 'Computer Science and Engineering', 3.73, 'FAIL'),
('0205CS101052', 'Computer Science and Engineering', 6.4, 'PASS'),
('0205CS101053', 'Computer Science and Engineering', 4.13, 'FAIL'),
('0205CS101054', 'Computer Science and Engineering', 4.87, 'FAIL'),
('0205CS101055', 'Computer Science and Engineering', 6, 'PASS'),
('0205CS101056', 'Computer Science and Engineering', 6.2, 'PASS'),
('0205CS101057', 'Computer Science and Engineering', 5.47, 'FAIL'),
('0205CS101058', 'Computer Science and Engineering', 5.6, 'PASS'),
('0205CS101059', 'Computer Science and Engineering', 5.93, 'PASS'),
('0205CS101060', 'Computer Science and Engineering', 7.87, 'PASS'),
('0205CS101061', 'Computer Science and Engineering', 6.47, 'PASS'),
('0205CS101062', 'Computer Science and Engineering', 6.07, 'PASS'),
('0205CS101063', 'Computer Science and Engineering', 2.67, 'FAIL'),
('0205CS101064', 'Computer Science and Engineering', 5.93, 'PASS'),
('0205CS101065', 'Computer Science and Engineering', 4.07, 'FAIL'),
('0205CS101066', 'Computer Science and Engineering', 7.2, 'PASS'),
('0205CS101067', 'Computer Science and Engineering', 5.67, 'PASS'),
('0205CS101068', 'Computer Science and Engineering', 8.53, 'PASS'),
('0205CS101069', 'Computer Science and Engineering', 6.67, 'PASS'),
('0205CS101070', 'Computer Science and Engineering', 7.07, 'PASS'),
('0205CS101071', 'Computer Science and Engineering', 3.47, 'FAIL'),
('0205CS101072', 'Computer Science and Engineering', 1.47, 'FAIL'),
('0205CS101074', 'Computer Science and Engineering', 6.07, 'PASS'),
('0205CS101075', 'Computer Science and Engineering', 2.67, 'FAIL'),
('0205CS101076', 'Computer Science and Engineering', 5.6, 'PASS'),
('0205CS101077', 'Computer Science and Engineering', 5.67, 'PASS'),
('0205CS101078', 'Computer Science and Engineering', 7.33, 'PASS'),
('0205CS101079', 'Computer Science and Engineering', 6.8, 'PASS'),
('0205CS101080', 'Computer Science and Engineering', 7.4, 'PASS'),
('0205CS101081', 'Computer Science and Engineering', 6.73, 'PASS'),
('0205CS101082', 'Computer Science and Engineering', 2.53, 'FAIL'),
('0205CS101083', 'Computer Science and Engineering', 6.93, 'PASS'),
('0205CS101084', 'Computer Science and Engineering', 7.13, 'PASS'),
('0205CS101085', 'Computer Science and Engineering', 5.8, 'PASS'),
('0205CS101086', 'Computer Science and Engineering', 5.8, 'FAIL'),
('0205CS101087', 'Computer Science and Engineering', 6.13, 'PASS'),
('0205CS101088', 'Computer Science and Engineering', 0, 'FAIL'),
('0205CS101089', 'Computer Science and Engineering', 5.07, 'FAIL'),
('0205CS101090', 'Computer Science and Engineering', 4.33, 'FAIL'),
('0205CS101091', 'Computer Science and Engineering', 2.8, 'FAIL'),
('0205CS101092', 'Computer Science and Engineering', 6.53, 'PASS'),
('0205CS101093', 'Computer Science and Engineering', 3.07, 'FAIL'),
('0205CS101094', 'Computer Science and Engineering', 3.87, 'FAIL'),
('0205CS101095', 'Computer Science and Engineering', 6.13, 'PASS'),
('0205CS101096', 'Computer Science and Engineering', 5.73, 'PASS'),
('0205CS101097', 'Computer Science and Engineering', 3.6, 'FAIL'),
('0205CS101098', 'Computer Science and Engineering', 2.93, 'FAIL'),
('0205CS101099', 'Computer Science and Engineering', 4.73, 'FAIL'),
('0205CS101100', 'Computer Science and Engineering', 3.73, 'FAIL'),
('0205CS101101', 'Computer Science and Engineering', 7.13, 'PASS'),
('0205CS101102', 'Computer Science and Engineering', 6, 'PASS'),
('0205CS101103', 'Computer Science and Engineering', 6.67, 'PASS'),
('0205CS101104', 'Computer Science and Engineering', 5.73, 'PASS'),
('0205CS101105', 'Computer Science and Engineering', 4.07, 'FAIL'),
('0205CS101106', 'Computer Science and Engineering', 5.8, 'PASS'),
('0205CS101107', 'Computer Science and Engineering', 6.73, 'PASS'),
('0205CS101108', 'Computer Science and Engineering', 5.87, 'PASS'),
('0205CS101109', 'Computer Science and Engineering', 4, 'FAIL'),
('0205CS101111', 'Computer Science and Engineering', 2.93, 'FAIL'),
('0205CS101112', 'Computer Science and Engineering', 5.73, 'PASS'),
('0205CS101113', 'Computer Science and Engineering', 4.6, 'FAIL'),
('0205CS101114', 'Computer Science and Engineering', 3.73, 'FAIL'),
('0205CS101115', 'Computer Science and Engineering', 4.6, 'FAIL'),
('0205CS101116', 'Computer Science and Engineering', 4.13, 'FAIL'),
('0205CS101117', 'Computer Science and Engineering', 4.07, 'FAIL'),
('0205CS101118', 'Computer Science and Engineering', 5.93, 'PASS'),
('0205CS101119', 'Computer Science and Engineering', 3.87, 'FAIL'),
('0205CS101120', 'Computer Science and Engineering', 1.27, 'FAIL'),
('0205CS101121', 'Computer Science and Engineering', 5.6, 'PASS'),
('0205CS101122', 'Computer Science and Engineering', 6.73, 'PASS'),
('0205CS101123', 'Computer Science and Engineering', 6.13, 'PASS'),
('0205CS101124', 'Computer Science and Engineering', 4.93, 'FAIL'),
('0205CS101125', 'Computer Science and Engineering', 5.93, 'PASS'),
('0205CS101126', 'Computer Science and Engineering', 7.13, 'PASS'),
('0205CS101127', 'Computer Science and Engineering', 7.07, 'PASS'),
('0205CS101128', 'Computer Science and Engineering', 5.8, 'PASS'),
('0205CS101129', 'Computer Science and Engineering', 5.33, 'FAIL'),
('0205CS101130', 'Computer Science and Engineering', 5.53, 'FAIL'),
('0205CS101131', 'Computer Science and Engineering', 5.47, 'PASS'),
('0205CS101132', 'Computer Science and Engineering', 4.67, 'FAIL'),
('0205IT101005', 'Information Technology', 0.87, 'FAIL'),
('0205ME101001', 'Mechanical Engineering', 6.8, 'PASS'),
('0205ME101002', 'Mechanical Engineering', 6.47, 'PASS'),
('0205ME101003', 'Mechanical Engineering', 6, 'PASS'),
('0205ME101004', 'Mechanical Engineering', 6.6, 'PASS'),
('0205ME101005', 'Mechanical Engineering', 6.13, 'PASS'),
('0205ME101006', 'Mechanical Engineering', 5.67, 'PASS'),
('0205ME101007', 'Mechanical Engineering', 7.53, 'PASS'),
('0205ME101008', 'Mechanical Engineering', 4.6, 'FAIL'),
('0205ME101010', 'Mechanical Engineering', 5.33, 'PASS'),
('0205ME101011', 'Mechanical Engineering', 5, 'PASS'),
('0205ME101012', 'Mechanical Engineering', 6.2, 'PASS'),
('0205ME101013', 'Mechanical Engineering', 7.2, 'PASS'),
('0205ME101014', 'Mechanical Engineering', 3.67, 'FAIL'),
('0205ME101015', 'Mechanical Engineering', 7.13, 'PASS'),
('0205ME101017', 'Mechanical Engineering', 6.93, 'PASS'),
('0205ME101018', 'Mechanical Engineering', 6.13, 'PASS'),
('0205ME101019', 'Mechanical Engineering', 6.4, 'PASS'),
('0205ME101020', 'Mechanical Engineering', 4.07, 'FAIL'),
('0205ME101021', 'Mechanical Engineering', 6.2, 'PASS'),
('0205ME101022', 'Mechanical Engineering', 7.27, 'PASS'),
('0205ME101023', 'Mechanical Engineering', 6.6, 'PASS'),
('0205ME101024', 'Mechanical Engineering', 7, 'PASS'),
('0205ME101026', 'Mechanical Engineering', 5.8, 'PASS'),
('0205ME101027', 'Mechanical Engineering', 5.67, 'PASS'),
('0205ME101028', 'Mechanical Engineering', 7.6, 'PASS'),
('0205ME101029', 'Mechanical Engineering', 6.53, 'PASS'),
('0205ME101030', 'Mechanical Engineering', 5.13, 'FAIL'),
('0205ME101031', 'Mechanical Engineering', 4.13, 'FAIL'),
('0205ME101032', 'Mechanical Engineering', 5.8, 'PASS'),
('0205ME101033', 'Mechanical Engineering', 3.6, 'FAIL'),
('0205ME101034', 'Mechanical Engineering', 6.53, 'PASS'),
('0205ME101035', 'Mechanical Engineering', 5.73, 'PASS'),
('0205ME101036', 'Mechanical Engineering', 6.27, 'PASS'),
('0205ME101037', 'Mechanical Engineering', 5.4, 'PASS'),
('0205ME101038', 'Mechanical Engineering', 2.6, 'FAIL'),
('0205ME101039', 'Mechanical Engineering', 6.53, 'PASS'),
('0205ME101040', 'Mechanical Engineering', 5.73, 'PASS'),
('0205ME101041', 'Mechanical Engineering', 5.47, 'PASS'),
('0205ME101042', 'Mechanical Engineering', 6.53, 'PASS'),
('0205ME101043', 'Mechanical Engineering', 2.2, 'FAIL'),
('0205ME101044', 'Mechanical Engineering', 6.47, 'PASS'),
('0205ME101045', 'Mechanical Engineering', 3.33, 'FAIL'),
('0205ME101046', 'Mechanical Engineering', 5.53, 'PASS'),
('0205ME101047', 'Mechanical Engineering', 5, 'FAIL'),
('0205ME101048', 'Mechanical Engineering', 4.8, 'FAIL'),
('0205ME101049', 'Mechanical Engineering', 4.67, 'FAIL'),
('0205ME101050', 'Mechanical Engineering', 5.6, 'PASS'),
('0205ME101051', 'Mechanical Engineering', 7.2, 'PASS'),
('0205ME101052', 'Mechanical Engineering', 4.8, 'FAIL'),
('0205ME101053', 'Mechanical Engineering', 4.6, 'FAIL'),
('0205ME101054', 'Mechanical Engineering', 7.4, 'PASS'),
('0205ME101055', 'Mechanical Engineering', 7.4, 'PASS'),
('0205ME101056', 'Mechanical Engineering', 6.6, 'PASS'),
('0205ME101057', 'Mechanical Engineering', 6.4, 'PASS'),
('0205ME101058', 'Mechanical Engineering', 5.4, 'FAIL'),
('0205ME101059', 'Mechanical Engineering', 7.2, 'PASS'),
('0205ME101060', 'Mechanical Engineering', 6, 'PASS'),
('0205ME101061', 'Mechanical Engineering', 6.13, 'PASS'),
('0205ME101062', 'Mechanical Engineering', 7.2, 'PASS'),
('0205ME101063', 'Mechanical Engineering', 8, 'PASS'),
('0205ME101064', 'Mechanical Engineering', 5.93, 'PASS'),
('0205ME101065', 'Mechanical Engineering', 3, 'FAIL'),
('0205ME101066', 'Mechanical Engineering', 6.6, 'PASS');

-- --------------------------------------------------------

--
-- Table structure for table `idcard`
--

CREATE TABLE IF NOT EXISTS `idcard` (
  `id` varchar(15) NOT NULL,
  `name` varchar(25) NOT NULL,
  `fname` varchar(25) NOT NULL,
  `work` varchar(20) NOT NULL,
  `dept` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `add1` varchar(25) NOT NULL,
  `add2` varchar(25) DEFAULT NULL,
  `phone` bigint(20) unsigned NOT NULL,
  `vfselect` int(10) unsigned DEFAULT NULL,
  `vtselect` int(10) unsigned DEFAULT NULL,
  `photo` varchar(45) NOT NULL,
  `barcode` varchar(45) NOT NULL,
  `cardno` varchar(15) NOT NULL,
  `who` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `idcard`
--

INSERT INTO `idcard` (`id`, `name`, `fname`, `work`, `dept`, `dob`, `add1`, `add2`, `phone`, `vfselect`, `vtselect`, `photo`, `barcode`, `cardno`, `who`) VALUES
('0205CS081058', 'Nitish sinha', 'Mr. Nawal Prasad', 'B.E.', 'Computer Science', '1991-03-28', 'Vijaynagar, Jabalpur', 'pin 482002', 9907529269, 2012, 2016, 'idphoto/0205CS081058.jpg', 'barcodes/0205CS081058.gif', '13032012135643', 'student'),
('0205CS081060', 'Dheeraj Singh', 'Mr. Virendra Singh', 'B.E.', 'Computer Science', '1993-03-03', 'Ranital, Jabalpur', 'pin 482002', 9879873452, 2012, 2016, 'idphoto/0205CS081060.jpg', 'barcodes/0205CS081060.gif', '25032012153155', 'student'),
('0205CS081071', 'Dheeraj Singh', 'Mr. Virendra Singh', 'BE', 'Computer Science', '1991-03-20', 'main road', 'pin 482002', 9630659917, 2012, 2016, 'idphoto/0205CS081071.jpg', 'barcodes/0205CS081071.gif', '26032012015845', 'student');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `username` varchar(20) NOT NULL,
  `password` varchar(15) NOT NULL,
  `failed_logins` int(11) NOT NULL,
  `recordtime` bigint(20) NOT NULL DEFAULT '0',
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`, `failed_logins`, `recordtime`) VALUES
('admin', 'admin', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE IF NOT EXISTS `profile` (
  `username` varchar(20) NOT NULL,
  `name` varchar(25) NOT NULL,
  `designation` varchar(25) NOT NULL,
  `dob` date NOT NULL,
  `address` varchar(45) NOT NULL,
  `mobile` bigint(20) unsigned DEFAULT NULL,
  `email` varchar(45) NOT NULL,
  `photo` longblob,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`username`, `name`, `designation`, `dob`, `address`, `mobile`, `email`, `photo`) VALUES
('admin', 'admin01', 'Head, Exam cell', '1975-01-01', 'SRIT, Jabalpur', 9988998799, 'xyz@gmail.com', 0x2f396a2f34414151536b5a4a5267414241514541534142494141442f3277424441414d434167494341674d434167494441774d44424159454241514542416747426755474351674b43676b4943516b4b4441384d4367734f43776b4a4452454e44673851454245514367775345784951457738514542442f3277424441514d4441775144424167454241675143776b4c454241514542415145424151454241514542415145424151454241514542415145424151454241514542415145424151454241514542415145424151454241514542442f7741415243414335414959444153494141684542417845422f38514148774141415155424151454241514541414141414141414141414543417751464267634943516f4c2f3851417452414141674544417749454177554642415141414146394151494441415152425249684d5545474531466842794a7846444b426b61454949304b78775256533066416b4d324a7967676b4b4668635947526f6c4a69636f4b536f304e5459334f446b3651305246526b644953557054564656575631685a576d4e6b5a575a6e61476c7163335231646e643465587144684957476834694a69704b546c4a57576c35695a6d714b6a704b576d7036697071724b7a744c57327437693575734c44784d584778386a4a79744c54314e585731396a5a32754869342b546c3575666f3665727838765030396662332b506e362f38514148774541417745424151454241514542415141414141414141414543417751464267634943516f4c2f385141745245414167454342415144424163464241514141514a3341414543417845454253457842684a425551646863524d694d6f454946454b526f62484243534d7a55764156596e4c524368596b4e4f456c3852635947526f6d4a7967704b6a55324e7a67354f6b4e4552555a4853456c4b55315256566c64595756706a5a47566d5a326870616e4e3064585a3365486c36676f4f456859614869496d4b6b704f556c5a61586d4a6d616f714f6b7061616e714b6d7173724f3074626133754c6d367773504578636248794d6e4b3074505531646258324e6e613475506b3565626e364f6e7138765030396662332b506e362f396f4144414d424141495241784541507744394c614b4b4b414369696a6a756344336f414b44307a6d71577336317066682f545a6457316d2f6973374f33556d536154706e4851447131664d5878442f614c38542b4c4c6d585166414564787074697832724b672f77424d75467a676e634f496c2f58337a7858626773425778722f64725475396a6e72346d464265397632506f6a7850385176425867334238532b4972537a6b497949433236556a3145613561764f64542f61722b4831712f6c3666702b7233334f504d534a4930502f66626276307277665450687a716d70536d383165366379796e66496f4a65526965374d652f7658535166444c5434492b62534d4e2f656c6b4c5a2f41563774504b6346522f6979636e397950506e6a61382f67535236436e3758486873766962776e715349546e636b73624838696136545266326d66686a716272486533476f61573759482b6c32784b5a2f336f7977412b75425869743334457334464c4a706b4439323268682b4e6335652b45394d504d5374415477634850503431713871774e5257696d766d5a724759694772732f6b6661326a36356f32763261332b68366e6258397578346b743551362f6f632f6e563676677579667852344c314536743463314b34745a564f377a4c5a7947492f75754f6a44324f52583044384b50326b4c5078424e44346538644a485a616777435258305978424f2f5142682f7741733250547570503841647279385a6b6c576848326c46383066782f344a32554d66476f2b57656a5063364b61446b353363487067357950512f7a42703165496567464646464142525252514155555555414651586433613246704c6658643148426132794e4a4c4e4963424648556d7038343572774839716278374a702b6d326e6748545a747332704c396f7673486e795277735a2f774239756f376747756e435961574c72526f7836372b686c5771716a427a5a3570385476694c726e786a385572704f6c46303057336476736b4849566c482f4143326b3953656f423663563150684877485936506249565137794d797973506d6476623046555068723453537773524c6349667446786961636e734479712f583172307947456251714443675946665656716b614556516f713055654e424f6f2f615431624b435755635565794a4142315048576f704c63357a5779317563443656566d68776331797152746178697a78484f613476573756593779594c6a61656364733133743173525449357746484e634e715465666353793969654b36615078584d7037484f584d5a336364756c637a71326c4b354d317569686c354b67635631743076424f4f39593930764a4a3478587055354e484e4a487366374f33786d754e5165443466654c4c6f744f4543615a6453743837416449584a366e48494a3743766f4d4534415944634f506676323973562b6646344a374339693143786e6147614a2f4e535254676f344f633866515639752f44507870483439384636643469796f754a453871385148376c7767772f774241635a482f414e65766d73377745614d6c694b537370622b542f7743436570674d527a78396e4c6462485655554470525867487042525252514155555555414b427549484850484e66466e6a4c554434382b4d75715855726237654f394d4b716564734d41326a38506c622f76723372374e76483875306e63444a53475276795531384e2f4432623756346776622b526a756141792f4e314a64786e2f414e4372364849594a65317164556b7676504d7a475877512f725139753850625073323444686d796655656c644641464947546d754c30665566737a454d547449354664484272466f55424532505869756d7242337559516173624c6c4e7651566e584c4b4d3559415642507263414837737331596c2f7163747753724f45583048656f6854624c6c4a49723633666d64544445514548552b74637864645437567033546a4a42724a75704f545866536a5a6148504979727237702b745939304d377131626c75337657526474393675756d5979526a3379423063593536697661763253664544523365752b465a5847795a49372b466339585835487750546273727861374a35414f4f7749727576326162673276785a746c6a4846785a334d4241374b51682f396c72504d5965307764525074663769734e4a787278612f7135396844705251427852587752394746464646414252525251424863782b62627a52486e7a4933543831497234583847522f3254346b76744e62686f316b6778377876676a2f7832767530456768674d6b484e664676785630535477503858395149545a61334e77627946694f476a6c3562483437712b6779436135716c4a395666376a7a63786937526e324f7274376e6748503631646a7568574244644977444b6544794f6661724d6433783172313551313152784a36473231333876336a2b645670726b594f4469732f3758376e3836696c756836306c5443354c63546e424f6179377162337030397a373151754a78573049753544647943366b3936794c71546e725675356e47547a2b745a647a4d4f613649726f5a4d7058556e4a72304c396d537a4e3338564972684649533073726d5a6a322f6855442f414d654e6561585570424a362b3166516e374a506870343750572f474536635446645074695231322f5049522f7742394b503841674e595a70555648425462367133336d7545687a313472747166512b633055446f4b4b2b43506f676f6f6f6f414b4b4b4b4144386356347a2b307638504a66465068614c7854706c72763144516c506d6f6f79306c722f45767153704f34653261396d70724b7047307170556a61516568474d595074676d74384e694a5957724772486f5a3161537251634a64543461384d36324c6933466e4f354d735741725a2b2b754f7634563043335a2f766974623434664271383844616e4a3474384a774f2b697a755a5a455263745975783645663841504e753370304e6348707576513361694f56696b716a6b456a446534492f6c5832394b6450465156616b37702f677a774a4b5647584a50633667335a783934666e5554336676575a3972423542706a3366586d7255426378646c75687a7a564b347565534d31576b7568564f613647547a56526a324a7553334d343578575a63546e4e4678636a445a7169544e637a7042626f30736b726255526553784a3641446b385630516a7936737962766f574e4b307a5566456d72326d6936544138393365534c444648747a7978786b2b77484e66646e676a77706165437643756e6547624d6831736f674a4a4d66666c504c762f77496b31357838425067312f7768466b50452f695342663764755939736354664e396a6850515a366559516565344846657839414d6653766b63367a425971616f3033377366785a376542777a6f726e6c7578614b4b4b384939414b4b4b4b414470534850515570783347616776372b7a307579754e553147366974726130517954537677714c6a39616154627367627475535379777778744e4c497355614b537a755141414f704a364b506331347a34372f6165384b2b48354a6450384a3233397533555a4b4e63466a48616f773762687953506272586d6e78412b4a76697a3430613666433368474f61333052584a43416c576d584f504e6e627376634c33466454344e2b4666683377736b647a637852366a7151584c54547835566655497034775055313739444c4b574869716d4c3166534b2f5538797069353158616a6f753579743538522f6a3738516f6e6a3079336e74624364536a5232316d734d4f772f776c6e795742396542584d44344b2f4557514c6343777379354a595a766c336b395478362b67723649383463443047414f77464b5a7339546d752b474d644663744743696a6e6c52353365704a746e797066782b492f44553573645a302b356764546a453646643330626f522b4e527272614d755a465a6670794b2b714c714b30764954426557304e78462f636c6a446a38416135692f7744686634427653586c385051524d35795868646f79542f4b75714759776678782b347965476b76685a38397471734c6447596e307856576655443254415071635639426a344f2f4434482f6b4658422b74307846612b6b2b426642656a455336663463736b6b427875654d75667238784972523568535339314e6b72445466552b6674423844654c2f46625a3076535a5446336c6d506b786639394e31726f374434592f466a77726652617a6f6b45567665516a4d5574706378794f4d396342686a50594556372b4a4647416f55426567417742394b504f4854614b355a356c556c705a574e4934614b336275655661662b304c385766426b36322f6a6a525531434654676936747a424c376b53726b452f55597232337742385a2f426678424332746a636d78314c414a736278676a734d645932364f5070574664523231394362573967696e69626a79354533722b5665542b4e76673346466e577641753631755976336e324d4f5151657869627170396a58485577324578617334386b7536322b34336a57723058652f4d764d2b735370475152686765515151654b4d397138482b422f7831754e6176492f41766a795970715962797253376c486c2b63773652532b6b673748754f746537344763595959786e5058504949503469764278574671594f6f3664582f687a30714e574e6548504557696969755931416a4978587a582b307238514c76574e58672b47486838733649386233336c386d535667436b5848594135503441313945617a716c766f6d6b583273335462596243336b7548506f71416d766b4834575133486958786671586a505644356b30544e4b53332f5065566d4f5239426d766179616a486d6c695a72534733717a67783152704b6c48642f6b656b2b4366436c6e344e30644c4b4542377155683779342f696b6b78302b672f6e58516d585058636672565154444178326f38373372766d334f546b39326330625253534c666d2f7743395235762b3956547a76656a7a7665703552334c596c783033436a7a6639376d716e6e6539486e6539484b46793335762b39532b622f7656543837336f38346574484b46793335762b395235762b3956547a76656a7a76656977584c666d2f3731426b2b556b3536484e56504f39782b64486e5a35394b4f554c6e6d2f786538462b64462f776d476b52474b3667326d36534d344c4c326b474f344f41667a72323734486645592f454c77636b392f4b726174707857327665336d4544354a5150526c782b4f3730726c5a764b6e686543614d50484b7056312f76416a424834676d76506667687155766762347a5365474a70534c54553265785935344a414c78502b68482f417856346d6c3962776b6f76346f4b36394f763442536e37477372625333507245476968534f4750703078332f794b4b2b553150584f412b504e38396a384a764545694f466157424c5a76645a48436b6672586866776769574877753032506d6d75354d6e32554b422f4d2f6e58733337522f2f4a48395a486237565a662b6c4d64654c2f4375514c345469482f54784b503146665435576c3951623779583549386e462f783166736439356e7561504d397a564c7a50623961504d39763172577a4d6937356e7561504d397a564c7a50623961504d39763170325946337a506330655a376d71586d65333630655966377636305759463079594855306a544b6f4c456759376e69736139316947304f78635353482b48734b78703953754c6c795a5a447450384851442f41427134306e4c63584d6a704a7462746f324b786b79734f6f485156526c3179376b4a433759783277656178667441394b44506e6b676d74565369684f624e52722b35663739784a2b427042714536644a33724e2b3065786f2b30657871755643356a6467313256634c63446375667644743731775869713554542f414972614a724e75344450633255784936595756415166775531766d3547447858452b4a32332b4d394c47654138482f414b4e72536a434b6b2f526d63354f7950754e32626c6c4f53534d4831474b4b45356a58505a526a38714b2b4754736653783152356e2b30682f79523757762b76717a2f4150536d4f764150683171677364475747567378475a7a6e734f6c665148375276507766316e2f723673762f4145706a72356d384b5342644956542f414d39472f6b4b2b707957504e67576e2f4e2b6b547863633756302f4a48716b647a484c4748527371335130766d2f586975497439546e744344444b7739513349725268385334474a7259482f61567356324f693173594b666336627a52373047586a7152396135372f684a62634449676c50315956586c38537a4e6b5252716d653535497156536c31487a6f36615336696951797a5368492f6573612b313970574d566f4e696a2b49395457464a66537973576b6c5a733975314d2b304374593062626b4f64793939704a4a4a624a50576c2b3059364e5648375239615437523747744f526b61462f37516637314832672f33716f66615059306661505930636a41762f61442f4148715074422f7656512b3065786f2b3066576a6b5961462f77433064666d726b74646666347630732f38415453442f414e47697434334178584e366f322f785870687a2f7741745966384130614b30707874642b52457a37766a2f414e57762b367638714b492f3957762b367638414b69767a342b706a73655a2f74472f386b66316e2f723673762f536d4f766c3377354b453078526e2b4e76365639526674483866422f57762b76717a2f7744536d4f766c50524a64746967782f473166585a4572344a2f3476306965466d447457586f6a65383166552f6e52357166336a56487a782f6b306563505376577363567939357166336a52357166336a56487a6836556563505369776378653878505530656176393431523834656c486e44306f73467939356965706f3878505531523834656c486e44306f73467939356965706f3878505531523834656c486e44306f73467939356965706f3878505531523834656c486e44306f734679364a5642483172477648332b4b4e4d502f5461442f30594b75476363636672575957332b4a4e4e4f6638416c34672f3947437169742f51545a3939782f367466393166355555522f774372582f64582b5646666e4a39584859387a2f6151782f77414b66316b352f774358717a2f394b557235493032586262592f327a6a6d7673583437614c652b4966686271656c3665735a754a7037563138773448797a7178352b677235615834542b4d30345837494f656e6e6e2f414172366e4a4d56516f595a77715353642f305234754f70564b6c56536a4736735a586e6539486e6539612f2f437166476e39327a2f372f41422f776f2f34565434302f7532662f41482b502b4665743965776638364f503246622b566d523533765235337657762f77414b703861663362502f414c2f482f436a2f4149565434302f7532663841332b502b46483137422f7a6f5059567635575a486e6539486e6539612f774477716e78702f64732f2b2f782f776f2f34565434302f7532662f66342f3455665873482f4f673968572f6c5a6b6564373065643731722f3841437166476e39327a2f77432f782f776f2f774346552b4e5037746e2f414e2f6a2f6852396577663836443246622b566d523533765235337657763841384b703861663362502f763866384b502b46552b4e5037746e2f332b502b46483137422f7a6f5059567635575a486e6539486e6539612f2f4141716e78702f64732f3841763866384b5038416856506a542b375a2f774466342f3455665873482f4f673968572f6c5a6b436365745157373776454f6d6e482f4c78442f7743686974372f4149565434312f7532663841332b502b46543658384b7646305771325538763251724863784d333738394177507053654f7769547455516656367a6139316e32306e434b50396c66355555715a5251565657783876493344384b4b2f50334a4a32507055374c5179664646754c72524a6f2f563050354d4b34663841736463343269752f3166384135427a2f4146582f414e43466334657455535966396a722f414852522f59362f33525735525142682f77426a722f644648396a722f6446626c464147482f59362f7742305566324f76393056755555415966384159362f3352522f59362f33525735525142682f324f763841644648396a722f6446626c464147482f41474f7639305566324f76393056755555415966396a722f414852556c767041573469594c3064542b74624136314c462f72552f33685142317138676e307750306f6f586f33314838714b4c41662f5a);

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE IF NOT EXISTS `teachers` (
  `name` varchar(35) NOT NULL,
  `dept` varchar(50) NOT NULL,
  `design` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`name`, `dept`, `design`, `email`) VALUES
('Dheeraj Singh', 'Computer Science', 'Lecturer', 'nitishsinha23@gmail.com'),
('Khushi verma', 'Electronics and Telecommunication', 'Professor', 'soni.akanksha08@gmail.com'),
('Avinash Sharma', 'Electrical and Electronics', 'Lecturer', 'xyz123@yahoo.in'),
('Nitish Sinha', 'Computer Science', 'Professor', '54nitish@gmail.com'),
('Manjari Nema', 'Information Technology', 'Professor', 'maninema18@gmail.com'),
('Dilip Garg', 'Information Technology', 'Lecturer', 'abc123@gmail.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
