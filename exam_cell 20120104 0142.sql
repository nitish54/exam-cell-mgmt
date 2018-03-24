-- MySQL Administrator dump 1.4
--
-- ------------------------------------------------------
-- Server version	5.0.77-community-nt


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


--
-- Create schema exam_cell
--

CREATE DATABASE IF NOT EXISTS exam_cell;
USE exam_cell;

--
-- Definition of table `2008`
--

DROP TABLE IF EXISTS `2008`;
CREATE TABLE `2008` (
  `enroll_no` varchar(13) NOT NULL,
  `branch` varchar(45) NOT NULL,
  PRIMARY KEY  (`enroll_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2008`
--

/*!40000 ALTER TABLE `2008` DISABLE KEYS */;
INSERT INTO `2008` (`enroll_no`,`branch`) VALUES 
 ('0205CS081005','Computer Science & Engineering');
/*!40000 ALTER TABLE `2008` ENABLE KEYS */;


--
-- Definition of table `2009`
--

DROP TABLE IF EXISTS `2009`;
CREATE TABLE `2009` (
  `enroll_no` varchar(13) NOT NULL,
  `branch` varchar(45) NOT NULL,
  PRIMARY KEY  (`enroll_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2009`
--

/*!40000 ALTER TABLE `2009` DISABLE KEYS */;
INSERT INTO `2009` (`enroll_no`,`branch`) VALUES 
 ('0205CS091005','Information Technology'),
 ('0205CS091037','Electronics & Communication Engineering'),
 ('0205CS091047','Mechanical Engineering'),
 ('0205CS091055','Electrical & Electronics Engineering');
/*!40000 ALTER TABLE `2009` ENABLE KEYS */;




/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
