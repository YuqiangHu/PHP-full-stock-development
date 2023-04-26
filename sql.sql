-- phpMyAdmin SQL Dump
-- version 3.1.3
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 31, 2019 at 04:46 PM
-- Server version: 5.1.32
-- PHP Version: 5.2.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `kxo302`
--

-- --------------------------------------------------------

--
-- Table structure for table `access`
--

CREATE TABLE IF NOT EXISTS `access` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `access_type` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `access`
--

INSERT INTO `access` (`ID`, `access_type`) VALUES
(1, 'Full_Access'),
(2, 'General_Access');

-- --------------------------------------------------------

--
-- Table structure for table `careers`
--

CREATE TABLE IF NOT EXISTS `careers` (
  `Career` varchar(50) NOT NULL,
  `Job1` varchar(50) NOT NULL,
  `Job2` varchar(50) DEFAULT NULL,
  `Job3` varchar(50) DEFAULT NULL,
  `Description1` varchar(500) NOT NULL,
  `Description2` varchar(500) DEFAULT NULL,
  `Description3` varchar(500) DEFAULT NULL,
  `Trend1` varchar(100) DEFAULT NULL,
  `Trend2` varchar(100) DEFAULT NULL,
  `Trend3` varchar(100) DEFAULT NULL,
  `Trend4` varchar(100) DEFAULT NULL,
  `Skill1` varchar(200) NOT NULL,
  `Skill2` varchar(100) NOT NULL,
  `Skill3` varchar(100) NOT NULL,
  `Skill4` varchar(100) NOT NULL,
  `Skill5` varchar(100) NOT NULL,
  `Skill6` varchar(100) NOT NULL,
  `Skill7` varchar(100) NOT NULL,
  `Skill8` varchar(100) NOT NULL,
  `Skill9` varchar(100) NOT NULL,
  PRIMARY KEY (`Career`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `careers`
--

INSERT INTO `careers` (`Career`, `Job1`, `Job2`, `Job3`, `Description1`, `Description2`, `Description3`, `Trend1`, `Trend2`, `Trend3`, `Trend4`, `Skill1`, `Skill2`, `Skill3`, `Skill4`, `Skill5`, `Skill6`, `Skill7`, `Skill8`, `Skill9`) VALUES
('Network', 'Systems Administrator', 'Network Administrator', 'Information Technology Manager', 'Network and computer systems administrators are responsible for the day-to-day operation of these ne', 'They organize, install, and support an organizatio', 'They are primarily responsible for planning, coord', 'Network Security Engineer  (6 years)', 'Systems Consultant (7 years)', 'Information Technology Infrastructure Manager (11 years)', 'Information Technology Technical Services Manager  (9 years)', 'HTML (3 days)', 'CSS (6 days)', 'Java (5 months)', 'Java script (15 days)', 'ISS,Apache (understanding) (7days)', 'Unix, Linux (Master the basics) (5months)', 'PHP (5 days)', 'Oracle (2 months)', 'MySQL (20 days)'),
('Technical', 'Technical Support Technician', 'Field Service Technician', NULL, 'Computer support specialists provide help and advice to people and organizations using computer software or equipment.', 'Mainly responsible for the inspection, repair and maintenance of vehicles and machinery in the construction, agriculture, rail transit and other industries.', NULL, 'Technical Support Manager  (6 years)', 'Information Technology Systems Manager (8 years) ', 'Systems Integrator (6 years)', NULL, 'CNNA (2 months)', 'Windows (3 months)', 'Office (1.5 months) ', 'C++ (3 months) ', 'PHP (5 days)', '', '', '', ''),
('Computer', 'Computer Technician', 'Programmer Analyst', NULL, 'Computer support specialists provide help and advice to people and organizations using computer software or equipment.', 'It focuses on an organization''s current computer systems and programs and designs information system solutions to help the organization operate more efficiently.', NULL, 'Help Desk Manager (5 years)', 'Technical System Engineer  (6 years)', 'Information Technology Auditor (5 years)', NULL, 'Check the network and view current computer information (CPU, hard disk, Network card RAM, Port number, IE install plugin) (2 months)', 'Permission (15 days)', 'Computer management (service, IIS ) (3 months)', 'TCP/IP protocol (15 days)', 'Oracle (2 months) ', 'MySQL (20 days)', 'Unix(4months)', 'Linux (5months)', 'DotNet Framework(2 months) '),
('Software', 'Software Engineer', NULL, NULL, 'Software developers develop creative utilities that allow people to perform specific tasks on a computer or other device.', NULL, NULL, 'Senior Developer Analyst  (6 years)', 'Systems Manager (6 years)', NULL, NULL, 'C (2 months)', 'Java (5 months)', 'PHP(5 days)', 'XCODE (1 year)', 'Eclipse(One month, based on Java)', 'Software Engineering(One month)', '', '', ''),
('Accountant', 'Finance Analyst', NULL, NULL, 'Financial analysts provide guidance to businesses and individuals making investment decisions. They assess the performance of stocks, bonds, and other types of investments.', NULL, NULL, 'Product Owner (9 years)', NULL, NULL, NULL, 'Accounting qualification examination (primary, intermediate) (2 months)', 'CPA (2.5 years)', 'ACCA (3 years)', '', '', '', '', '', ''),
('Help Desk', 'Technical Support Specialist', 'Network Administrator', 'System Analyst', 'Computer support specialists provide help and advice to people and organizations using computer software or equipment.', 'Network and computer systems administrators are responsible for the day-to-day operation of these networks.', 'Computer systems analysts study an organization’s current computer systems and procedures and design information systems solutions to help the organization operate more efficiently and effectively.	', 'Information Systems Manager  (6 years)', 'Information Systems Director  (8 years)', 'Senior Applications Analyst  (7 years)', 'SharePoint Administrator  (6 years)', 'CNNA (2 months)', 'Windows (3 months)', 'Office (1.5 months)', 'C++?Java (6 months)', 'PHP, Java script (20 days)', 'HTML,CSS (9 days )', 'Oracle, MySQL (3 months)', 'Unix, Linux (Master the basics) (5 months)', 'ISS, Apache (understanding) (7days)'),
('Information Technology', 'Information Technology Specialist', NULL, NULL, 'Computer support specialists provide help and advice to people and organizations using computer software or equipment.', NULL, NULL, 'Information Technology Technical Lead (7 years)', NULL, NULL, NULL, 'HTML (3 days)', 'CSS (6 days)', 'Java (5 months)', 'Java script (15 days)', 'ISS, Apache (understanding) (7 days)', 'Unix, Linux (Master the basics) (5 months)', 'PHP (5 days)', 'Oracle (2 months)', 'MySQL (20 days)'),
('Data', 'Senior Data Analyst', NULL, NULL, 'Specializes in industry data collection, collation, analysis, and industry research, evaluation and forecasting based on data', NULL, NULL, 'Database Engineer (6 years)', NULL, NULL, NULL, 'Excel (10 days)', 'MySQL (20 days)', 'Power Bi (7 days)', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Username` varchar(32) NOT NULL,
  `Password` varchar(32) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `DOB` date NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Access` int(11) NOT NULL,
  `Career` varchar(50) NOT NULL,
  `Created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`),
  KEY `FK_users_career` (`Career`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `Username`, `Password`, `Name`, `Gender`, `DOB`, `Email`, `Access`, `Career`, `Created`) VALUES
(1, 'Shirley', 'Shirley0818', 'Xie Liya', '', '1998-08-18', 'lxie@utas.edu.au', 1, '', '2019-10-21 14:00:29'),
(1, 'aqiang', '12345', 'yuqiang', '', '1998-08-13', 'lxie@utas.edu.au', 1, '', '2019-10-21 14:00:24'),
(2, 'Joe', '16147ee18c3dceb19544f24e09d9fabf', 'JOE', '', '1971-04-03', '1234@qq.com', 1, 'Technical', '2019-10-21 14:44:53');
