-- phpMyAdmin SQL Dump
-- version 3.1.3
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2019 年 11 月 13 日 01:29
-- 服务器版本: 5.1.32
-- PHP 版本: 5.2.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `kxo302`
--

-- --------------------------------------------------------

--
-- 表的结构 `careers`
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
  `Link` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Career`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- 导出表中的数据 `careers`
--

INSERT INTO `careers` (`Career`, `Job1`, `Job2`, `Job3`, `Description1`, `Description2`, `Description3`, `Trend1`, `Trend2`, `Trend3`, `Trend4`, `Skill1`, `Skill2`, `Skill3`, `Skill4`, `Skill5`, `Skill6`, `Skill7`, `Skill8`, `Skill9`, `Link`) VALUES
('Network', 'Systems Administrator', 'Network Administrator', 'Information Technology Manager', 'Network and computer systems administrators are responsible for the day-to-day operation of these ne', 'They organize, install, and support an organizatio', 'They are primarily responsible for planning, coord', 'Network Security Engineer  (6 years)', 'Systems Consultant (7 years)', 'Information Technology Infrastructure Manager (11 years)', 'Information Technology Technical Services Manager  (9 years)', 'HTML (3 days)', 'CSS (6 days)', 'Java (5 months)', 'Java script (15 days)', 'ISS,Apache (understanding) (7days)', 'Unix, Linux (Master the basics) (5months)', 'PHP (5 days)', 'Oracle (2 months)', 'MySQL (20 days)', 'network.html'),
('Technical', 'Technical Support Technician', 'Field Service Technician', NULL, 'Computer support specialists provide help and advice to people and organizations using computer software or equipment.', 'Mainly responsible for the inspection, repair and maintenance of vehicles and machinery in the construction, agriculture, rail transit and other industries.', NULL, 'Technical Support Manager  (6 years)', 'Information Technology Systems Manager (8 years) ', 'Systems Integrator (6 years)', NULL, 'CNNA (2 months)', 'Windows (3 months)', 'Office (1.5 months) ', 'C++ (3 months) ', 'PHP (5 days)', '', '', '', '', 'technical.html'),
('Computer', 'Computer Technician', 'Programmer Analyst', NULL, 'Computer support specialists provide help and advice to people and organizations using computer software or equipment.', 'It focuses on an organization''s current computer systems and programs and designs information system solutions to help the organization operate more efficiently.', NULL, 'Help Desk Manager (5 years)', 'Technical System Engineer  (6 years)', 'Information Technology Auditor (5 years)', NULL, 'Check the network and view current computer information (CPU, hard disk, Network card RAM, Port number, IE install plugin) (2 months)', 'Permission (15 days)', 'Computer management (service, IIS ) (3 months)', 'TCP/IP protocol (15 days)', 'Oracle (2 months) ', 'MySQL (20 days)', 'Unix(4months)', 'Linux (5months)', 'DotNet Framework(2 months) ', 'computer.html'),
('Software', 'Software Engineer', NULL, NULL, 'Software developers develop creative utilities that allow people to perform specific tasks on a computer or other device.', NULL, NULL, 'Senior Developer Analyst  (6 years)', 'Systems Manager (6 years)', NULL, NULL, 'C (2 months)', 'Java (5 months)', 'PHP(5 days)', 'XCODE (1 year)', 'Eclipse(One month, based on Java)', 'Software Engineering(One month)', '', '', '', 'software.html'),
('Accountant', 'Finance Analyst', NULL, NULL, 'Financial analysts provide guidance to businesses and individuals making investment decisions. They assess the performance of stocks, bonds, and other types of investments.', NULL, NULL, 'Product Owner (9 years)', NULL, NULL, NULL, 'Accounting qualification examination (primary, intermediate) (2 months)', 'CPA (2.5 years)', 'ACCA (3 years)', '', '', '', '', '', '', 'accountant.html'),
('Help Desk', 'Technical Support Specialist', 'Network Administrator', 'System Analyst', 'Computer support specialists provide help and advice to people and organizations using computer software or equipment.', 'Network and computer systems administrators are responsible for the day-to-day operation of these networks.', 'Computer systems analysts study an organization’s current computer systems and procedures and design information systems solutions to help the organization operate more efficiently and effectively.	', 'Information Systems Manager  (6 years)', 'Information Systems Director  (8 years)', 'Senior Applications Analyst  (7 years)', 'SharePoint Administrator  (6 years)', 'CNNA (2 months)', 'Windows (3 months)', 'Office (1.5 months)', 'C++?Java (6 months)', 'PHP, Java script (20 days)', 'HTML,CSS (9 days )', 'Oracle, MySQL (3 months)', 'Unix, Linux (Master the basics) (5 months)', 'ISS, Apache (understanding) (7days)', 'help desk.html'),
('Information Technology', 'Information Technology Specialist', NULL, NULL, 'Computer support specialists provide help and advice to people and organizations using computer software or equipment.', NULL, NULL, 'Information Technology Technical Lead (7 years)', NULL, NULL, NULL, 'HTML (3 days)', 'CSS (6 days)', 'Java (5 months)', 'Java script (15 days)', 'ISS, Apache (understanding) (7 days)', 'Unix, Linux (Master the basics) (5 months)', 'PHP (5 days)', 'Oracle (2 months)', 'MySQL (20 days)', 'information technology.html'),
('Data', 'Senior Data Analyst', NULL, NULL, 'Specializes in industry data collection, collation, analysis, and industry research, evaluation and forecasting based on data', NULL, NULL, 'Database Engineer (6 years)', NULL, NULL, NULL, 'Excel (10 days)', 'MySQL (20 days)', 'Power Bi (7 days)', '', '', '', '', '', '', 'data.html');
