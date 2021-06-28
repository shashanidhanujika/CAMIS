-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 10, 2020 at 06:42 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `charted_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `2019_bus`
--

DROP TABLE IF EXISTS `2019_bus`;
CREATE TABLE IF NOT EXISTS `2019_bus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cid` varchar(3) NOT NULL,
  `cName` varchar(90) NOT NULL,
  `file` blob NOT NULL,
  `filename` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2019_bus`
--

INSERT INTO `2019_bus` (`id`, `cid`, `cName`, `file`, `filename`) VALUES
(2, 'KB2', 'Business Management Accounting', '', 'KB2.pdf'),
(1, 'KB1', 'Business Financial Reporting ', '', 'KB1.pdf'),
(4, 'KB4', 'Business Assurance, Ethics & Audit ', '', 'KB4.pdf'),
(3, 'KB3', 'Business Taxation & Law ', '', 'KB3.pdf'),
(5, '001', 'tttttttt', 0x517a706358486468625841324e46786364473177584678776148417a515464464c6e527463413d3d, 'Amazon.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `2019_cor`
--

DROP TABLE IF EXISTS `2019_cor`;
CREATE TABLE IF NOT EXISTS `2019_cor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cid` varchar(3) NOT NULL,
  `cName` varchar(90) NOT NULL,
  `file` blob NOT NULL,
  `filename` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2019_cor`
--

INSERT INTO `2019_cor` (`id`, `cid`, `cName`, `file`, `filename`) VALUES
(3, 'SL2', 'Advanced Bussiness Reporting ***', '', 'KE1.pdf'),
(7, '001', 'eeeeeee', '', 'Amazon.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `2019_exe`
--

DROP TABLE IF EXISTS `2019_exe`;
CREATE TABLE IF NOT EXISTS `2019_exe` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `cid` varchar(3) NOT NULL,
  `cName` varchar(100) NOT NULL,
  `file` blob NOT NULL,
  `filename` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2019_exe`
--

INSERT INTO `2019_exe` (`id`, `cid`, `cName`, `file`, `filename`) VALUES
(2, 'KE2', 'Management Accounting Information', '', 'KE2.pdf'),
(1, 'KE1', 'Financial Accounting & Reporting Fundamentals', '', 'KE1.pdf'),
(3, 'KE3', 'Fundamentals of Law', '', 'KE3.pdf'),
(6, '002', 'rrrrrrrrr', 0x517a706358486468625841324e467863644731775846787761484178526a46434c6e527463413d3d, 'Amazon.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `2020_bus`
--

DROP TABLE IF EXISTS `2020_bus`;
CREATE TABLE IF NOT EXISTS `2020_bus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cid` char(5) NOT NULL,
  `cName` varchar(80) NOT NULL,
  `file` blob NOT NULL,
  `filename` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2020_bus`
--

INSERT INTO `2020_bus` (`id`, `cid`, `cName`, `file`, `filename`) VALUES
(3, 'BL3', 'Management Accounting', '', 'BL3.pdf'),
(2, 'BL2', 'Business Mathematics & Statistics', '', 'BL2.pdf'),
(1, 'BL1', 'Financial Accounting', '', 'BL1.pdf'),
(9, '001', 'yyyyyyyyy', 0x517a706358486468625841324e467863644731775846787761484245526a56444c6e527463413d3d, 'Amazon.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `2020_cor`
--

DROP TABLE IF EXISTS `2020_cor`;
CREATE TABLE IF NOT EXISTS `2020_cor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cid` char(3) NOT NULL,
  `cName` varchar(90) NOT NULL,
  `file` blob NOT NULL,
  `filename` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2020_cor`
--

INSERT INTO `2020_cor` (`id`, `cid`, `cName`, `file`, `filename`) VALUES
(1, 'BL1', 'Financial Accounting', '', 'BL1.pdf'),
(2, 'BL2', 'Business Mathematics and Statistics', '', 'BL2.pdf'),
(9, '002', 'yyyyyyy', 0x517a706358486468625841324e467863644731775846787761484134515441334c6e527463413d3d, 'Amazon.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `2020_stra`
--

DROP TABLE IF EXISTS `2020_stra`;
CREATE TABLE IF NOT EXISTS `2020_stra` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cid` char(3) NOT NULL,
  `cName` varchar(70) NOT NULL,
  `file` blob NOT NULL,
  `filename` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2020_stra`
--

INSERT INTO `2020_stra` (`id`, `cid`, `cName`, `file`, `filename`) VALUES
(2, 'SL2', 'Corporate Finance & Risk Management', '', 'SL2.pdf'),
(12, 'L02', 'zzzzzzzzzz', 0x517a706358486468625841324e4678636447317758467877614841794f4559314c6e527463413d3d, 'Fundamentals of Mathematics Lecture 2 _ Student Version.pdf'),
(15, '001', 'tttttt', 0x517a706358486468625841324e46786364473177584678776148417a4e4551794c6e527463413d3d, 'Amazon.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `admin_info`
--

DROP TABLE IF EXISTS `admin_info`;
CREATE TABLE IF NOT EXISTS `admin_info` (
  `ad_id` varchar(10) NOT NULL,
  `ad_fullname` varchar(255) NOT NULL,
  `ad_username` varchar(255) NOT NULL,
  `ad_email` varchar(255) NOT NULL,
  `ad_gender` varchar(20) NOT NULL,
  `ad_tel` int(20) NOT NULL,
  `ad_password` varchar(25) NOT NULL,
  `ad_staff_type` varchar(50) NOT NULL,
  `ad_avatar` varchar(255) NOT NULL,
  PRIMARY KEY (`ad_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_info`
--

INSERT INTO `admin_info` (`ad_id`, `ad_fullname`, `ad_username`, `ad_email`, `ad_gender`, `ad_tel`, `ad_password`, `ad_staff_type`, `ad_avatar`) VALUES
('ad001', 's.e.kasun', 'admin1', 'ad1@gmail.com', 'Male', 758965892, 'ad1', 'admin', 'images\\admin\\1.jpg'),
('ad002', 'g.a.lakmal', 'admin2', 'admin2@gmail.com', 'male', 787956987, 'ad2', 'admin', 'images\\admin\\2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `assignment`
--

DROP TABLE IF EXISTS `assignment`;
CREATE TABLE IF NOT EXISTS `assignment` (
  `crs_id` char(5) NOT NULL,
  `ass_id` char(5) NOT NULL,
  `ass_date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `userName` varchar(50) NOT NULL,
  `email` varchar(90) NOT NULL,
  `message` varchar(600) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`userName`, `email`, `message`) VALUES
('ruwan chamikara', 'rawan@gmail.com', 'dghjksh fhdnks dgdks '),
('shashani dhanujika', 'shashanidhnujika@gmail.com', 'test mesage fhjsghjf dhsfsjs fhfgd'),
('waidyarathna', 'heshan@gmail.com', 'This is for every student.The faculty of technology has closed. hahhaa April fools message from dean..');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

DROP TABLE IF EXISTS `course`;
CREATE TABLE IF NOT EXISTS `course` (
  `course_id` varchar(20) NOT NULL,
  `course_name` varchar(255) NOT NULL,
  `lecturer` varchar(255) NOT NULL,
  `course_details` varchar(255) NOT NULL,
  `course_image` varchar(255) NOT NULL,
  `duration` varchar(50) NOT NULL,
  `no_of_seats_available` varchar(100) NOT NULL,
  PRIMARY KEY (`course_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `course_name`, `lecturer`, `course_details`, `course_image`, `duration`, `no_of_seats_available`) VALUES
('ict001', 'network', 'Dr.prbhath', 'ghdguy', 'images\\course-1.jpg', '3 years', '10 seats'),
('bst002', 'eeeeee', 'fddfff', 'assdsadsdqd', 'images\\course-4.jpg', '3', '30'),
('et001', 'ttyhyjn', 'nhthfhfhg', 'hfghhgfhg', 'images\\course-5.jpg', '2', '5'),
('bst008', 'sssq', 'wswqsqs', 's1wss', 'images\\course-6.jpg', '4', '6'),
('ict002', 'kkjcfhdfh', 'ddwe', 'ddddw', 'images\\course-2.jpg', '4 years', '25'),
('et002', 'jjjutuu', 'fvffff', 'gggggg', 'images\\course-3.jpg', '5', '2'),
('ict006', 'wswsw1ws', 'wswsw1`s`w', 'sss`ws', 'images\\course-7.jpg', '3', '10'),
('et005', 'vfg3t', 'vrvgrvgr', 'cdecdec', 'images\\course-8.jpg', '2', '8'),
('ict004', 'qwsdswds', 'ssss', 'ddededdx', 'images\\course-3.jpg', '4', '25'),
('ict008', 'qwsdswds', 'ssss', 'ddededdx', 'images\\course-3.jpg', '4', '25');

-- --------------------------------------------------------

--
-- Table structure for table `lecturer_info`
--

DROP TABLE IF EXISTS `lecturer_info`;
CREATE TABLE IF NOT EXISTS `lecturer_info` (
  `lec_id` varchar(10) NOT NULL,
  `lec_fullname` varchar(255) NOT NULL,
  `lec_username` varchar(255) NOT NULL,
  `lec_password` varchar(50) NOT NULL,
  `lec_email` varchar(100) NOT NULL,
  `lec_qualification` varchar(255) NOT NULL,
  `lec_study` varchar(255) NOT NULL,
  `lec_address` varchar(255) NOT NULL,
  `lec_staff_type` varchar(50) NOT NULL,
  `course_id_&_name` varchar(255) NOT NULL,
  `lec_gender` varchar(10) NOT NULL,
  `lec_status` varchar(50) NOT NULL,
  `lec_tel` int(20) NOT NULL,
  `lec_avatar` varchar(255) NOT NULL,
  PRIMARY KEY (`lec_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lecturer_info`
--

INSERT INTO `lecturer_info` (`lec_id`, `lec_fullname`, `lec_username`, `lec_password`, `lec_email`, `lec_qualification`, `lec_study`, `lec_address`, `lec_staff_type`, `course_id_&_name`, `lec_gender`, `lec_status`, `lec_tel`, `lec_avatar`) VALUES
('lec001', 'k.d.athukorala', 'damith', 'damith123', 'damith@gmail.com', 'master', 'university of ruhuna ', 'galle', 'lectere', 'cm002 - accounting ', 'female', 'married', 712588844, '	\r\nimages\\lecturer\\1.jpg'),
('lec008', 'p.n.s.sewwandi', 'sewwandi', 'sewwandi123', 'sewwandi@gmail.com', 'master', 'slit', 'Colombo ', 'lecturer', 'tcs123 - accounting ', 'female ', 'unmarried', 758965896, '	\r\nimages\\lecturer\\3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `lecture_note`
--

DROP TABLE IF EXISTS `lecture_note`;
CREATE TABLE IF NOT EXISTS `lecture_note` (
  `lecnote_id` int(11) NOT NULL AUTO_INCREMENT,
  `lec_id` varchar(10) NOT NULL,
  `crs_id` varchar(20) NOT NULL,
  `lec_email` varchar(255) NOT NULL,
  `topic` varchar(255) NOT NULL,
  `file` blob NOT NULL,
  `file_name` varchar(255) NOT NULL,
  PRIMARY KEY (`lecnote_id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lecture_note`
--

INSERT INTO `lecture_note` (`lecnote_id`, `lec_id`, `crs_id`, `lec_email`, `topic`, `file`, `file_name`) VALUES
(5, 'lec1', 'c011', 'kasun@gmail.com', 'ip address', 0x517a706358486468625841324e4678636447317758467877614842474e6a67774c6e527463413d3d, '03-IP Address (Part A).pdf'),
(6, 'lec11', 'c002', 'gh@gmail.com', 'network', 0x517a706358486468625841324e4678636447317758467877614841304d4445334c6e527463413d3d, '01- Introduction to Computer Networks.pdf'),
(7, 'lec1', 'c003', 'kasun@gmail.com', 'ip address', 0x517a706358486468625841324e467863644731775846787761484130524441774c6e527463413d3d, '03-IP Address(Part B).pdf'),
(4, 'lec10', 'c003', 'd@gmail.com', 'account ', 0x517a706358486468625841324e46786364473177584678776148417a4f5463344c6e527463413d3d, 'Introduction.pdf'),
(10, 'lec1', 'c002', 'kasun@gmail.com', 'gfgfhfh', 0x517a706358486468625841324e4678636447317758467877614841345155457a4c6e527463413d3d, 'AL _ENGLISH_Application_notice_2020.pdf'),
(9, 'lec2', 'coo5', 'kasun@gmail.com', 'tttttttt', 0x517a706358486468625841324e467863644731775846787761484135515452464c6e527463413d3d, 'AL _ENGLISH_Application_notice_2020.pdf'),
(11, 'lec1', 'coo5', 'kasun@gmail.com', 'network', 0x517a706358486468625841324e467863644731775846787761484178526a52434c6e527463413d3d, '01(Part A)- Introduction to Computer Networks-converted.pdf'),
(14, 'lec004', 'coo5', 't@gmail.com', 'English ', 0x517a706358486468625841324e4678636447317758467877614841344f5449794c6e527463413d3d, 'ICT L2- summary (1).docx'),
(13, 'lec2', 'c008', 'kumara@gmail.com', 'account ', 0x517a706358486468625841324e467863644731775846787761484244525455354c6e527463413d3d, 'Busienss Plan.pdf'),
(15, 'lec2', 'c008', 'd@gmail.com', 'account ', 0x517a706358486468625841324e4678636447317758467877614841304d5442464c6e527463413d3d, 'Busienss Plan.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

DROP TABLE IF EXISTS `notice`;
CREATE TABLE IF NOT EXISTS `notice` (
  `notice_id` int(11) NOT NULL AUTO_INCREMENT,
  `topic` varchar(255) NOT NULL,
  `file` blob NOT NULL,
  `file_name` varchar(255) NOT NULL,
  PRIMARY KEY (`notice_id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`notice_id`, `topic`, `file`, `file_name`) VALUES
(1, 'tttttttt', 0x517a706358486468625841324e467863644731775846787761484132517a59354c6e527463413d3d, 'Introduction.pdf'),
(3, 'vacation', 0x517a706358486468625841324e467863644731775846787761484242516a59334c6e527463413d3d, 'vacation.pdf'),
(6, 'english', 0x517a706358486468625841324e467863644731775846787761484242516b59334c6e527463413d3d, 'AL _ENGLISH_Application_notice_2020.pdf'),
(7, 'yyyyyy', 0x517a706358486468625841324e4678636447317758467877614841304d555a464c6e527463413d3d, 'AL_Paper_ad_2020_Sinhala.pdf'),
(8, 'tttt', 0x517a706358486468625841324e46786364473177584678776148417a4e4556424c6e527463413d3d, 'TEC FAC NOTICE FOR STUDENTS.pdf'),
(9, 'english', 0x517a706358486468625841324e4678636447317758467877614841304d4545334c6e527463413d3d, 'AL _ENGLISH_Application_notice_2020.pdf'),
(10, 'english', 0x517a706358486468625841324e4678636447317758467877614841314e3045324c6e527463413d3d, 'ICT L2- summary (1).docx'),
(11, 'english', 0x517a706358486468625841324e4678636447317758467877614841784d5446444c6e527463413d3d, 'AL _ENGLISH_Application_notice_2020.pdf'),
(12, 'english', 0x517a706358486468625841324e46786364473177584678776148417a524467304c6e527463413d3d, 'Amazon.pdf'),
(13, 'english', 0x517a706358486468625841324e4678636447317758467877614842474d5555334c6e527463413d3d, 'Amazon.pdf'),
(14, 'yyyyyy', 0x517a706358486468625841324e4678636447317758467877614842434d3045334c6e527463413d3d, 'Amazon.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

DROP TABLE IF EXISTS `payment`;
CREATE TABLE IF NOT EXISTS `payment` (
  `pay_id` char(5) NOT NULL,
  `crs_id` char(5) NOT NULL,
  `pay_desc` varchar(60) NOT NULL,
  `pay_type` char(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

DROP TABLE IF EXISTS `role`;
CREATE TABLE IF NOT EXISTS `role` (
  `role_id` char(5) NOT NULL,
  `role_name` varchar(60) NOT NULL,
  `role_desc` varchar(60) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `stu_result`
--

DROP TABLE IF EXISTS `stu_result`;
CREATE TABLE IF NOT EXISTS `stu_result` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `stu_id` int(10) NOT NULL,
  `stu_name` varchar(255) NOT NULL,
  `crs_id` char(5) NOT NULL,
  `crs_name` varchar(255) NOT NULL,
  `marks` int(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stu_result`
--

INSERT INTO `stu_result` (`id`, `stu_id`, `stu_name`, `crs_id`, `crs_name`, `marks`) VALUES
(13, 58, 'sashani', 'coo5', 'econ', 78),
(12, 58, 'sashani', 'c001', 'accounting ', 56),
(8, 60, 'ruwan', 'coo5', 'accounting ', 57),
(6, 60, 'ruwan', 'c008', 'econ', 48),
(10, 60, 'ruwan', 'c002', 'ddd', 86),
(11, 60, 'ruwan', 'c007', 'kkkk', 48),
(14, 58, 'sashani', 'c008', 'ddd', 25),
(15, 58, 'sashani', '003', 'kkkk', 90),
(16, 61, 'dhanu', 'coo5', 'accounting ', 90),
(17, 58, 's.dhanujika', 'coo5', 'accounting ', 85),
(18, 63, 'heshan', 'c001', 'accounting ', 98);

-- --------------------------------------------------------

--
-- Table structure for table `st_info`
--

DROP TABLE IF EXISTS `st_info`;
CREATE TABLE IF NOT EXISTS `st_info` (
  `st_id` int(11) NOT NULL AUTO_INCREMENT,
  `st_fullname` varchar(255) NOT NULL,
  `st_username` varchar(60) NOT NULL,
  `st_tel` char(10) NOT NULL,
  `st_email` char(30) NOT NULL,
  `st_address` varchar(60) NOT NULL,
  `st_gender` varchar(10) NOT NULL,
  `st_staff_type` varchar(255) NOT NULL,
  `st_password` varchar(50) NOT NULL,
  `st_avatar_path` varchar(255) NOT NULL,
  PRIMARY KEY (`st_id`)
) ENGINE=MyISAM AUTO_INCREMENT=64 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `st_info`
--

INSERT INTO `st_info` (`st_id`, `st_fullname`, `st_username`, `st_tel`, `st_email`, `st_address`, `st_gender`, `st_staff_type`, `st_password`, `st_avatar_path`) VALUES
(63, 'h.hansajith', 'heshan', '0758969874', 'heshan@gamil.com', 'weligama', 'Male', 'student', 'heshan123', 'images/80502047_3631445806880656_2317591845007261696_n.jpg'),
(60, 'Ruwan Chamikara', 'ruwan', '0767507044', 'ruwan@gmail.com', 'agalawatta', 'Male', 'student', 'ruwan123', 'images/IMG_20180928_184315_639.jpg'),
(58, 's.dhanujika', 'sashani', '0758963652', 'sashani@gmail.com', 'Colombo ', 'Female', 'student', 'sashani123', 'images/admin.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
