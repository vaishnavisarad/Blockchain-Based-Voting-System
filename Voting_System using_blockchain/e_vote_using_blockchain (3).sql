-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 13, 2023 at 07:31 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `e_vote_using_blockchain`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_acc`
--

CREATE TABLE IF NOT EXISTS `admin_acc` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `admin_user` varchar(1000) NOT NULL,
  `admin_pass` varchar(1000) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin_acc`
--

INSERT INTO `admin_acc` (`admin_id`, `admin_user`, `admin_pass`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `course_tbl`
--

CREATE TABLE IF NOT EXISTS `course_tbl` (
  `cou_id` int(11) NOT NULL AUTO_INCREMENT,
  `cou_name` varchar(1000) NOT NULL,
  `cou_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`cou_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=78 ;

--
-- Dumping data for table `course_tbl`
--

INSERT INTO `course_tbl` (`cou_id`, `cou_name`, `cou_created`) VALUES
(69, 'UNIFORM', '2023-03-06 22:58:28'),
(70, 'VOTING AGE', '2023-03-08 00:15:22'),
(71, 'DRIVING LICENCE AGE', '2023-03-11 10:28:56'),
(72, 'RATIO OF GENDER', '2023-03-11 13:13:55'),
(73, 'FAMILY', '2023-03-25 11:14:28'),
(74, 'JOINT FAMILY OR SMALL FAMILY', '2023-03-25 11:14:59'),
(75, 'LOVE MARRIAGE OR ARRANGE MARRIAGE', '2023-03-25 11:16:02'),
(76, 'VIDYABHARTI GR VOTE', '2023-03-25 13:47:02');

-- --------------------------------------------------------

--
-- Table structure for table `feedbacks_tbl`
--

CREATE TABLE IF NOT EXISTS `feedbacks_tbl` (
  `fb_id` int(11) NOT NULL AUTO_INCREMENT,
  `exmne_id` int(11) NOT NULL,
  `fb_exmne_as` varchar(1000) NOT NULL,
  `fb_feedbacks` varchar(1000) NOT NULL,
  `fb_date` varchar(1000) NOT NULL,
  PRIMARY KEY (`fb_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `feedbacks_tbl`
--

INSERT INTO `feedbacks_tbl` (`fb_id`, `exmne_id`, `fb_exmne_as`, `fb_feedbacks`, `fb_date`) VALUES
(4, 6, 'Glenn Duerme', 'Gwapa kay Miss Pam', 'December 05, 2019'),
(5, 6, 'Anonymous', 'Lageh, idol na nako!', 'December 05, 2019'),
(6, 4, 'Rogz Nunezsss', 'Yes', 'December 08, 2019'),
(7, 4, '', '', 'December 08, 2019'),
(8, 4, '', '', 'December 08, 2019'),
(9, 8, 'Anonymous', 'dfsdf', 'January 05, 2020');

-- --------------------------------------------------------

--
-- Table structure for table `miners`
--

CREATE TABLE IF NOT EXISTS `miners` (
  `ID` int(111) NOT NULL AUTO_INCREMENT,
  `name` varchar(999) NOT NULL,
  `email` varchar(999) NOT NULL,
  `psw` varchar(999) NOT NULL,
  `contact` varchar(999) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `miners`
--

INSERT INTO `miners` (`ID`, `name`, `email`, `psw`, `contact`) VALUES
(2, 'Miners', 'kushaldhole@hotmail.com', 'kushaldhole', '5412435465');

-- --------------------------------------------------------

--
-- Table structure for table `proof_of_work`
--

CREATE TABLE IF NOT EXISTS `proof_of_work` (
  `ID` int(111) NOT NULL AUTO_INCREMENT,
  `blockchain_id` int(111) NOT NULL,
  `miners_id` int(111) NOT NULL,
  `stud_id` int(111) NOT NULL,
  `status` int(111) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=38 ;

--
-- Dumping data for table `proof_of_work`
--

INSERT INTO `proof_of_work` (`ID`, `blockchain_id`, `miners_id`, `stud_id`, `status`) VALUES
(28, 383, 2, 21, 1),
(29, 381, 2, 20, 1),
(30, 382, 2, 18, 1),
(31, 383, 2, 21, 1),
(32, 384, 2, 21, 1),
(33, 381, 2, 20, 1),
(34, 385, 2, 16, 0),
(35, 384, 2, 21, 1),
(36, 389, 2, 40, 1),
(37, 391, 2, 40, 0);

-- --------------------------------------------------------

--
-- Table structure for table `voteinee_tbl`
--

CREATE TABLE IF NOT EXISTS `voteinee_tbl` (
  `exmne_id` int(11) NOT NULL AUTO_INCREMENT,
  `exmne_fullname` varchar(1000) NOT NULL,
  `exmne_course` varchar(1000) NOT NULL,
  `exmne_gender` varchar(1000) NOT NULL,
  `exmne_birthdate` varchar(1000) NOT NULL,
  `exmne_year_level` varchar(1000) NOT NULL,
  `exmne_email` varchar(1000) NOT NULL,
  `exmne_password` varchar(1000) NOT NULL,
  `exmne_status` varchar(1000) NOT NULL DEFAULT 'active',
  PRIMARY KEY (`exmne_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `voteinee_tbl`
--

INSERT INTO `voteinee_tbl` (`exmne_id`, `exmne_fullname`, `exmne_course`, `exmne_gender`, `exmne_birthdate`, `exmne_year_level`, `exmne_email`, `exmne_password`, `exmne_status`) VALUES
(4, 'Rogz Nunezsss', '26', 'male', '2019-11-15', 'third year', 'rogz.nunez2013@gmail.com', 'rogz', 'active'),
(5, 'Jane Rivera', '25', 'female', '2019-11-14', 'second year', 'jane@gmail.com', 'jane', 'active'),
(6, 'Glenn Duerme', '26', 'female', '2019-12-24', 'third year', 'glenn@gmail.com', 'glenn', 'active'),
(7, 'Maria Duerme', '26', 'female', '2018-11-25', 'second year', 'maria@gmail.com', 'maria', 'active'),
(8, 'Dave Limasac', '68', 'female', '2019-12-21', 'second year', 'dave@gmail.com', 'dave', 'active'),
(9, 'Kushal', '72', 'male', '2012-06-08', 'first year', 'kushal@gmail.com', 'kushal123', 'active'),
(10, 'Ashwin', '70', 'male', '2009-10-16', 'fourth year', 'ashwin@gmail.com', 'ashwin123', 'active'),
(11, 'Sagar Shirbhate', '70', 'male', '2022-12-31', 'first year', 'sagarshirbhate@gmail.com', 'sagar123', 'active'),
(12, 'Kaustubh Rote', '70', 'male', '2003-03-05', 'first year', 'kaustubh@gmail.com', 'kaustubh123', 'active'),
(13, 'Suresh', '72', 'male', '1991-12-31', 'first year', 'suresh@gmail.com', 'suresh123', 'active'),
(14, 'Jignesh', '72', 'male', '2005-12-31', 'first year', 'jignesh@gmail.com', 'jignesh123', 'active'),
(15, 'Yadhnesh', '71', 'male', '2005-12-31', 'first year', 'yadhnesh@gmai.com', 'yadhnesh123', 'active'),
(16, 'Apurva', '72', 'female', '1999-01-01', 'first year', 'apurva@gmail.com', 'apurva123', 'active'),
(17, 'Ghanshaam', '75', 'male', '2004-12-01', 'first year', 'ghansham@gmail.com', 'ghansham123', 'active'),
(18, 'Viashnavi', '75', 'female', '1995-01-01', 'first year', 'vaishnavi@gmail.com', 'vaishnavi123', 'active'),
(19, 'asdasd', '70', 'male', '2023-04-03', 'first year', 'asdasd@gmail.com', 'asdasd', 'active'),
(20, 'sam', '71', 'male', '2023-12-31', 'first year', 'sam@gmail.com', 'sam123', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `vote_answers`
--

CREATE TABLE IF NOT EXISTS `vote_answers` (
  `exans_id` int(11) NOT NULL AUTO_INCREMENT,
  `axmne_id` int(11) NOT NULL,
  `Vote_id` int(11) NOT NULL,
  `quest_id` int(11) NOT NULL,
  `exans_answer` varchar(1000) NOT NULL,
  `exans_status` varchar(1000) NOT NULL DEFAULT 'new',
  `exans_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `current_hash` varchar(999) NOT NULL,
  `previous_hash` varchar(999) NOT NULL,
  PRIMARY KEY (`exans_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=400 ;

--
-- Dumping data for table `vote_answers`
--

INSERT INTO `vote_answers` (`exans_id`, `axmne_id`, `Vote_id`, `quest_id`, `exans_answer`, `exans_status`, `exans_created`, `current_hash`, `previous_hash`) VALUES
(381, 14, 29, 42, '20', 'new', '2023-03-08 19:38:41', '82080044b1944e0a5dff45f70952f33903cde8c3', '5df82c769bcaed7101c59838a53e9d959b459dd5'),
(382, 15, 30, 43, '18', 'new', '2023-03-11 10:32:32', '169dd3e6705f0c78ca17007ceaa12049f4b3f6bd', '82080044b1944e0a5dff45f70952f33903cde8c3'),
(383, 15, 30, 44, '21', 'new', '2023-03-11 10:32:32', 'b2c2bed05dbd8324da5dc8a62e83e338e2320d74', '169dd3e6705f0c78ca17007ceaa12049f4b3f6bd'),
(384, 14, 30, 44, '21', 'new', '2023-03-11 10:47:29', '37296c45d2ca67ca7b8215bb833a46f176967b0a', 'b2c2bed05dbd8324da5dc8a62e83e338e2320d74'),
(385, 14, 30, 43, '16', 'new', '2023-03-11 11:54:50', 'f29cb7b32fd01eed0269a1772ef0218b0bf7ba14', '37296c45d2ca67ca7b8215bb833a46f176967b0a'),
(386, 16, 32, 45, '50%(Male)-50%(Female)', 'new', '2023-03-11 13:19:10', 'd66724ee7d3faa1a43cefc2fc6421f38d7d158c4', 'f29cb7b32fd01eed0269a1772ef0218b0bf7ba14'),
(387, 16, 32, 46, '40% (Male) - 60% (Female)', 'new', '2023-03-11 13:19:10', '8eed81aa18cb7c5e5b278ea0217aabb3dd5d8298', 'd66724ee7d3faa1a43cefc2fc6421f38d7d158c4'),
(388, 13, 32, 46, '50% (Male) - 50% (Female)', 'new', '2023-03-11 13:20:47', '49d3c899a1804b1ac5f563bffc06d3a34a8fa039', '8eed81aa18cb7c5e5b278ea0217aabb3dd5d8298'),
(389, 13, 32, 45, '40%(Male)-60%(Female)', 'new', '2023-03-11 13:20:47', 'e5928abcb22c00b2702f4dbf2a32a74efd5d2967', '49d3c899a1804b1ac5f563bffc06d3a34a8fa039'),
(390, 9, 32, 45, '50%(Male)-50%(Female)', 'new', '2023-03-11 13:22:28', 'ba702b3c76c32d215b0074bd896445b3018ca400', 'e5928abcb22c00b2702f4dbf2a32a74efd5d2967'),
(391, 9, 32, 46, '40% (Male) - 60% (Female)sdf', 'new', '2023-03-11 13:24:28', '74c4029fb49d11016a160dc21bf5cbe5f7e491ef', 'ba702b3c76c32d215b0074bd896445b3018ca400'),
(392, 14, 32, 45, '50%(Male)-50%(Female)', 'new', '2023-03-17 16:01:57', 'de9a11abe576275125967a69681d2d6fbe09e0aa', '74c4029fb49d11016a160dc21bf5cbe5f7e491ef'),
(393, 14, 32, 46, '50% (Male) - 50% (Female)', 'new', '2023-03-17 16:01:57', 'f66b6a95a46282dc2dd7ebc91c3891cd82b1c81a', 'de9a11abe576275125967a69681d2d6fbe09e0aa'),
(394, 17, 34, 47, 'Love Marriage', 'new', '2023-03-25 11:31:14', '40d9e4bc8d6f6da833f75182a83f871c4421e681', 'f66b6a95a46282dc2dd7ebc91c3891cd82b1c81a'),
(395, 18, 35, 48, 'Vishnavi', 'new', '2023-03-25 13:50:55', '694288e1fe31e05aede2319df73317d3826e4971', '40d9e4bc8d6f6da833f75182a83f871c4421e681'),
(396, 18, 34, 47, 'Love Marriage', 'new', '2023-04-03 10:41:33', 'db5dbcdaa6ee0c14a3156a359f5ca203b909c223', '694288e1fe31e05aede2319df73317d3826e4971'),
(397, 19, 28, 40, 'Yes', 'new', '2023-04-13 10:36:35', '17ad3ac844975f76a824ee377e1c641a6da1f070', 'db5dbcdaa6ee0c14a3156a359f5ca203b909c223'),
(398, 20, 30, 44, '21', 'new', '2023-04-13 11:01:04', '96332557b9c0e3dae371b79eb773387f3f648d79', '17ad3ac844975f76a824ee377e1c641a6da1f070'),
(399, 20, 30, 43, '18', 'new', '2023-04-13 11:01:04', '484d2e6509b9564f0c4eeb7ac10eb51bf06bfabd', '96332557b9c0e3dae371b79eb773387f3f648d79');

-- --------------------------------------------------------

--
-- Table structure for table `vote_attempt`
--

CREATE TABLE IF NOT EXISTS `vote_attempt` (
  `Voteat_id` int(11) NOT NULL AUTO_INCREMENT,
  `exmne_id` int(11) NOT NULL,
  `Vote_id` int(11) NOT NULL,
  `Voteat_status` varchar(1000) NOT NULL DEFAULT 'used',
  PRIMARY KEY (`Voteat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=87 ;

--
-- Dumping data for table `vote_attempt`
--

INSERT INTO `vote_attempt` (`Voteat_id`, `exmne_id`, `Vote_id`, `Voteat_status`) VALUES
(76, 15, 30, 'used'),
(77, 14, 30, 'used'),
(78, 16, 32, 'used'),
(79, 13, 32, 'used'),
(80, 9, 32, 'used'),
(81, 14, 32, 'used'),
(82, 17, 34, 'used'),
(83, 18, 35, 'used'),
(84, 18, 34, 'used'),
(85, 19, 28, 'used'),
(86, 20, 30, 'used');

-- --------------------------------------------------------

--
-- Table structure for table `vote_question_tbl`
--

CREATE TABLE IF NOT EXISTS `vote_question_tbl` (
  `eqt_id` int(11) NOT NULL AUTO_INCREMENT,
  `Vote_id` int(11) NOT NULL,
  `Vote_question` varchar(1000) NOT NULL,
  `Vote_ch1` varchar(1000) NOT NULL,
  `Vote_ch2` varchar(1000) NOT NULL,
  `Vote_ch3` varchar(1000) NOT NULL,
  `Vote_ch4` varchar(1000) NOT NULL,
  `Vote_answer` varchar(1000) NOT NULL,
  `Vote_status` varchar(1000) NOT NULL DEFAULT 'active',
  PRIMARY KEY (`eqt_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=50 ;

--
-- Dumping data for table `vote_question_tbl`
--

INSERT INTO `vote_question_tbl` (`eqt_id`, `Vote_id`, `Vote_question`, `Vote_ch1`, `Vote_ch2`, `Vote_ch3`, `Vote_ch4`, `Vote_answer`, `Vote_status`) VALUES
(9, 12, 'In which decade was the American Institute of Electrical Engineers (AIEE) founded?', '1850s', '1880s', '1930s', '1950s', '1880s', 'active'),
(10, 12, 'What is part of a database that holds only one type of information?', 'Report', 'Field', 'Record', 'File', 'Field', 'active'),
(14, 12, 'OS computer abbreviation usually means ?', 'Order of Significance', 'Open Software', 'Operating System', 'Optical Sensor', 'Operating System', 'active'),
(15, 12, 'Who developed Yahoo?', 'Dennis Ritchie & Ken Thompson', 'David Filo & Jerry Yang', 'Vint Cerf & Robert Kahn', 'Steve Case & Jeff Bezos', 'David Filo & Jerry Yang', 'active'),
(16, 12, 'DB computer abbreviation usually means ?', 'Database', 'Double Byte', 'Data Block', 'Driver Boot', 'Database', 'active'),
(17, 12, '.INI extension refers usually to what kind of file?', 'Image file', 'System file', 'Hypertext related file', 'Image Color Matching Profile file', 'System file', 'active'),
(18, 12, 'What does the term PLC stand for?', 'Programmable Lift Computer', 'Program List Control', 'Programmable Logic Controller', 'Piezo Lamp Connector', 'Programmable Logic Controller', 'active'),
(19, 12, 'What do we call a network whose elements may be separated by some distance? It usually involves two or more small networks and dedicated high-speed telephone lines.', 'URL (Universal Resource Locator)', 'LAN (Local Area Network)', 'WAN (Wide Area Network)', 'World Wide Web', 'WAN (Wide Area Network)', 'active'),
(20, 12, 'After the first photons of light are produced, which process is responsible for amplification of the light?', 'Blackbody radiation', 'Stimulated emission', 'Plancks radiation', 'Einstein oscillation', 'Stimulated emission', 'active'),
(21, 12, '.TMP extension refers usually to what kind of file?', 'Compressed Archive file', 'Image file', 'Temporary file', 'Audio file', 'Temporary file', 'active'),
(22, 12, 'What do we call a collection of two or more computers that are located within a limited distance of each other and that are connected to each other directly or indirectly?', 'Inernet', 'Interanet', 'Local Area Network', 'Wide Area Network', 'Local Area Network', 'active'),
(24, 12, '	 In what year was the "@" chosen for its use in e-mail addresses?', '1976', '1972', '1980', '1984', '1972', 'active'),
(25, 12, 'What are three types of lasers?', 'Gas, metal vapor, rock', 'Pointer, diode, CD', 'Diode, inverted, pointer', 'Gas, solid state, diode', 'Gas, solid state, diode', 'active'),
(27, 15, 'asdasd', 'dsf', 'sd', 'yui', 'sdf', 'yui', 'active'),
(28, 11, 'Question 1', 'q1', 'asd', 'fds', 'ytu', 'q1', 'active'),
(29, 11, 'Question 2', 'asd', 'sd', 'q2', 'dfg', 'q2', 'active'),
(30, 11, 'Question 3', 'sd', 'q3', 'asd', 'fgh', 'q3', 'active'),
(31, 24, 'Identify the correct extension of the user-defined header file in C++.', '.cpp', '.hg', '.h', '.hf', '.h', 'active'),
(32, 24, 'Identify the incorrect constructor type.', 'Friend constructor', 'Default constructor', 'Parameterized constructor', 'Copy constructor', 'Friend constructor', 'active'),
(33, 24, 'C++ uses which approach?', 'right -left', 'Top-down', 'left-right', 'bottom -up', 'bottom -up', 'active'),
(34, 24, 'Which of the following data type is supported in C++ but not in C?', 'int', 'bool', 'double', 'float', 'bool', 'active'),
(35, 24, 'Identify the correct syntax for declaring arrays in C++.', 'array arr[10]', 'array{10}', 'int arr[10]', 'int arr', 'int arr[10]', 'active'),
(36, 25, 'What is the use of jaavc command?', 'Execute a java program', 'Debug a java program', 'Interpret a java program', 'Compile a java program', 'Compile a java program', 'active'),
(37, 27, 'ASs', 'ASD', 'ASD', 'AD', 'ASD', 'A', 'active'),
(38, 27, 'QEWE', 'WEa', 'WERs', 'WER', 'WERzx', 'D', 'active'),
(39, 27, 'qeweDDDSCSD  SDCSDC', '2ww', 'asa', 'SDF', 'AAS', '2ww', 'active'),
(40, 28, 'Does College Need Uniform', 'Yes', 'No', 'May be yes', 'may be no', 'No', 'active'),
(41, 29, 'Is voting age for Male Gender should be 21', 'Yes', 'No', 'Might be', 'Not in option', '', 'active'),
(42, 29, 'What should be female voting Age', '21', '18', '20', '17', '', 'active'),
(43, 30, 'What should be driving vehicle age of male ', '18', '16', '20', '15', '', 'active'),
(44, 30, 'What should be driving vehicle age of female', '21', '20', '19', '18', '', 'active'),
(45, 32, 'What should be the Ratio of gender in a class?', '50%(Male)-50%(Female)', '40%(Male)-60%(Female)', '70%(Male)-30%(Female)', 'None of Above', '', 'active'),
(46, 32, 'What should be the Ratio of gender in Medical Science College', '50% (Male) - 50% (Female)', '40% (Male) - 60% (Female)', '60% (Male) - 40% (Female)', 'None of Above', '', 'active'),
(47, 34, 'Love Marriage or Arrange Marriage', 'Love Marriage', 'Arrange Marriage', 'Both Not', 'Both Yes', '', 'active'),
(48, 35, 'Vidyabharti GR Vote', 'Vishnavi', 'Akansha', 'Roshni', 'None of Above', '', 'active'),
(49, 36, 'qweqw e', 'qwe qwe', 'q weqw ', 'q weqweqqq', 'q weqwe', '', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `vote_tbl`
--

CREATE TABLE IF NOT EXISTS `vote_tbl` (
  `ex_id` int(11) NOT NULL AUTO_INCREMENT,
  `cou_id` int(11) NOT NULL,
  `ex_title` varchar(1000) NOT NULL,
  `ex_time_limit` varchar(1000) NOT NULL,
  `ex_questlimit_display` int(11) NOT NULL,
  `ex_description` varchar(1000) NOT NULL,
  `ex_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`ex_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=37 ;

--
-- Dumping data for table `vote_tbl`
--

INSERT INTO `vote_tbl` (`ex_id`, `cou_id`, `ex_title`, `ex_time_limit`, `ex_questlimit_display`, `ex_description`, `ex_created`) VALUES
(28, 69, 'Does College needs uniform', '10', 1, 'Does College needs uniform or not', '2023-03-06 22:59:23'),
(29, 70, 'Voting Age', '10', 2, 'What should be the Voting Age?', '2023-03-08 00:16:24'),
(30, 71, 'Driving Licence Age', '10', 2, 'What Driving Licence Age Should be', '2023-03-11 10:29:39'),
(31, 72, 'Ratio of gender in a class', '10', 2, 'The ratio of gender in a class of engineering', '2023-03-11 13:14:47'),
(32, 72, 'Ratio of gender in a class', '10', 2, 'The ratio of gender in a class of engineering', '2023-03-11 13:14:47'),
(33, 75, 'Love Marriage or Arrange Marriage', '10', 1, 'Love Marriage or Arrange Marriage', '2023-03-25 11:28:53'),
(34, 75, 'Love Marriage or Arrange Marriage', '10', 1, 'Love Marriage or Arrange Marriage', '2023-03-25 11:28:53'),
(35, 76, 'Vidyabharti GR Vote', '10', 1, 'Vidyabharti GR Vote hosted by Vidyabharti Mahavidyalaya', '2023-03-25 13:47:59'),
(36, 76, 'asd dasasdasd dasd asd', '40', 1, 'asdasd sdas asd asd', '2023-04-13 10:31:40');
