-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 10.12.3.143
-- Generation Time: Jan 24, 2023 at 06:04 PM
-- Server version: 5.1.73-cll-lve
-- PHP Version: 5.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `database`
--

-- --------------------------------------------------------

--
-- Table structure for table `housing`
--

CREATE TABLE IF NOT EXISTS `housing` (
  `room_id` int(11) NOT NULL AUTO_INCREMENT,
  `school_number` varchar(10) NOT NULL,
  `a_s` varchar(2) NOT NULL,
  `gender` varchar(5) NOT NULL,
  `type` varchar(2) NOT NULL,
  `occ_id1` varchar(10) NOT NULL,
  `occ_id2` varchar(10) NOT NULL,
  `occ_id3` varchar(10) NOT NULL,
  `occ_id4` varchar(10) NOT NULL,
  PRIMARY KEY (`room_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `password` varchar(15) NOT NULL,
  `password2` varchar(15) NOT NULL,
  `password3` varchar(15) NOT NULL,
  `username` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`password`, `password2`, `password3`, `username`) VALUES
('mcak44', 'mcak44', 'mcak44', '24-0024');

-- --------------------------------------------------------

--
-- Table structure for table `schools`
--

CREATE TABLE IF NOT EXISTS `schools` (
  `school_number` varchar(12) NOT NULL,
  `school_name` varchar(75) NOT NULL,
  `region` varchar(2) NOT NULL,
  PRIMARY KEY (`school_number`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schools`
--

INSERT INTO `schools` (`school_number`, `school_name`, `region`) VALUES
('24-0024', 'Adams Central High School', '03'),
('24-0183', 'Argos High School', '02'),
('24-0027', 'Avon High School Chapter 3', '08'),
('24-0029', 'Ben Davis High School Chapter 1', '08'),
('24-0276', 'Benton Central', '04'),
('24-0258', 'Bloomington High School North', '11'),
('24-0034', 'Blue River Career Center', '09'),
('24-0035', 'Blue River Valley', '09'),
('24-0001', 'Blue River Valley: Middle Level', '09'),
('24-0036', 'Bluffton High School', '03'),
('24-0040', 'Castle High School', '10'),
('24-0041', 'Center Grove High School', '11'),
('24-0265', 'Centerville Sr. High School', '09'),
('24-0043', 'Central High School', '10'),
('24-0045', 'Chesterton High School', '01'),
('24-0212', 'Churubusco Jr/Sr High School', '03'),
('24-0046', 'Clay City High School', '07'),
('24-0047', 'Columbia City High School', '03'),
('24-0039', 'Columbus North High School', '11'),
('24-0048', 'Crawford County High School Chapter 1', '12'),
('24-0180', 'Crown Point High School', '01'),
('24-0049', 'Culver Community High School', '02'),
('24-0051', 'Danville Community High School', '08'),
('24-0260', 'East Central High School', '12'),
('24-0086', 'Evansville North High School', '10'),
('24-0222', 'Forest Park High School', '10'),
('24-0156', 'Franklin Central High School', '08'),
('24-0015', 'Franklin Central Junior High School', '08'),
('24-0163', 'Franklin Community High School', '11'),
('24-0199', 'Frontier High School', '04'),
('24-0057', 'Greensburg Community High School', '09'),
('24-0058', 'Hagarstown Jr/Sr High School Chapter', '09'),
('24-0059', 'Hamilton Heights High School', '04'),
('24-0016', 'Hamilton Heights Middle School', '04'),
('24-0063', 'Heartland Career Center Chapter 1', '03'),
('24-0184', 'Hebron High School', '01'),
('24-0064', 'Heritage Hills High School', '10'),
('24-0182', 'Hobart High School', '01'),
('24-0142', 'Indiana BPA Administrative Chapter', '08'),
('24-0264', 'INDLS Rockets', '09'),
('24-0261', 'IPS George Washington', '08'),
('24-0066', 'J. Everett Light Career Center', '08'),
('24-0158', 'Jasper High School', '10'),
('24-0018', 'Jasper Middle School', '10'),
('24-0257', 'Jay County Jr/Sr. High School Business Professionals of America', '03'),
('24-0216', 'John Adams High School', '02'),
('24-0068', 'Kankakee Valley High School', '01'),
('24-0070', 'Lake Central High School', '01'),
('24-0207', 'LaPorte High School', '01'),
('24-0072', 'Lincoln High School', '09'),
('24-0270', 'Linton Stockton H.S.', '07'),
('24-0074', 'Marion High School', ''),
('24-0118', 'Marion Regional Career Center', '03'),
('24-0075', 'Martinsville High School', '11'),
('24-0269', 'McKenzie Center for Innovation & Technology', '08'),
('24-0278', 'Merrillville High School', ''),
('24-0159', 'Mooresville High School', '11'),
('24-0200', 'Morristown High School', '09'),
('24-0081', 'Mt. Vernon High School', '10'),
('24-0204', 'New Tech Institute', '10'),
('24-0170', 'North Harrison High School', '12'),
('24-0087', 'North Knox High School', '10'),
('24-0189', 'North Knox Junior Senior High School', ''),
('24-0090', 'North Posey High School', '10'),
('24-0092', 'North Vermillion High School', '07'),
('24-0093', 'Northeast Dubois High School', '10'),
('24-0149', 'NorthWood High School', '02'),
('24-0224', 'Orleans Jr/Sr High School', '12'),
('24-0201', 'Perry Central School Corporation', '10'),
('24-0266', 'Perry Meridian High School', '08'),
('24-0098', 'Pike Central High School', '10'),
('24-0099', 'Pike High School', '08'),
('24-0100', 'Plymouth High School', '02'),
('24-0101', 'Portage High School', '01'),
('24-0268', 'Rensselaer Central High School', '01'),
('24-0104', 'Richmond High School', '09'),
('24-0220', 'Riley High School', '02'),
('24-0274', 'River Forest High School', '01'),
('24-0267', 'Salem High School BPA', '12'),
('24-0167', 'Shakamak High School', '07'),
('24-0139', 'Shelbyville High School', '09'),
('24-0209', 'Shenandoah High School', '09'),
('24-0215', 'South Adams High School', '03'),
('24-0226', 'South Dearborn High School', '12'),
('24-0108', 'South Knox High School', '10'),
('24-0205', 'Southern Indiana Career & Technical Center', '10'),
('24-0275', 'Southern Wells BPA (ML)', '03'),
('24-0218', 'Southern Wells Jr. Sr. High School', '03'),
('24-0111', 'Southmont High School', '04'),
('24-0112', 'Southridge High School', '10'),
('24-0259', 'Springs Valley High School', '12'),
('24-0155', 'Switzerland County High School', '12'),
('24-0009', 'Switzerland County Middle School', '12'),
('24-0114', 'Terre Haute North Vigo', '07'),
('24-0174', 'The Academy of Science and Entrepreneurship', '11'),
('24-0273', 'Tipton High School BPA', ''),
('24-0277', 'Traders Point Upper School', '08'),
('24-0116', 'Tri Junior-Senior High School', '09'),
('24-0117', 'Tri-County', '04'),
('24-0211', 'Twin Lakes High School', '04'),
('24-0120', 'Warsaw Area Career Center', '02'),
('24-0122', 'Washington High School', '10'),
('24-0168', 'West Noble High School', '02'),
('24-0003', 'West Washington High School ', '12'),
('24-0107', 'West Washington High School', '12'),
('24-0124', 'White River Valley HS', '07'),
('24-0272', 'White River Valley Middle School', '07'),
('24-0256', 'Whitko Career Academy', '03'),
('24-0202', 'Zionsville Community High School', '08');

-- --------------------------------------------------------

--
-- Table structure for table `SLCadv`
--

CREATE TABLE IF NOT EXISTS `SLCadv` (
  `adv_id` int(11) NOT NULL AUTO_INCREMENT,
  `school_number` varchar(10) NOT NULL,
  `fname` varchar(25) NOT NULL,
  `lname` varchar(25) NOT NULL,
  `sphone` varchar(15) NOT NULL,
  `cell` varchar(12) NOT NULL,
  `email` varchar(75) NOT NULL,
  `size` varchar(5) NOT NULL,
  `a_c` varchar(2) NOT NULL,
  `ChapAssign` varchar(2) NOT NULL,
  `SameAssignment` varchar(2) NOT NULL,
  `AssignmentComment` varchar(200) NOT NULL,
  `RegDate` datetime NOT NULL,
  `UpdateDate` datetime NOT NULL,
  PRIMARY KEY (`adv_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `SLCschl`
--

CREATE TABLE IF NOT EXISTS `SLCschl` (
  `school_number` varchar(10) NOT NULL,
  `address` varchar(30) NOT NULL,
  `city` varchar(20) NOT NULL,
  `zip` varchar(8) NOT NULL,
  `arrive` varchar(25) NOT NULL,
  `depart` varchar(25) NOT NULL,
  `overflowSH` varchar(5) NOT NULL,
  `envact` varchar(3) NOT NULL,
  `community` varchar(3) NOT NULL,
  `olympics` varchar(3) NOT NULL,
  `social` varchar(3) NOT NULL,
  `member` varchar(3) NOT NULL,
  `safety` varchar(3) NOT NULL,
  `chact` varchar(3) NOT NULL,
  `service` varchar(3) NOT NULL,
  `marketing` varchar(3) NOT NULL,
  `quality` varchar(3) NOT NULL,
  `other_recog` varchar(50) NOT NULL,
  `accommodations` varchar(200) NOT NULL,
  `RegDate` datetime NOT NULL,
  `UpdateDate` datetime NOT NULL,
  PRIMARY KEY (`school_number`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE IF NOT EXISTS `students` (
  `school_number` varchar(12) NOT NULL,
  `id_num` varchar(15) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `cont1` varchar(5) NOT NULL,
  `cont2` varchar(5) NOT NULL,
  `size` varchar(5) NOT NULL,
  `officer` varchar(3) NOT NULL,
  `officer_candidate` varchar(3) NOT NULL,
  `vdelegate` varchar(3) NOT NULL,
  `torch` varchar(3) NOT NULL,
  `opens` varchar(3) NOT NULL,
  `merit` varchar(3) NOT NULL,
  `RegDate` datetime NOT NULL,
  `UpdateDate` datetime NOT NULL,
  `gender` varchar(12) NOT NULL,
  `region` varchar(3) NOT NULL,
  PRIMARY KEY (`id_num`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`school_number`, `id_num`, `fname`, `lname`, `cont1`, `cont2`, `size`, `officer`, `officer_candidate`, `vdelegate`, `torch`, `opens`, `merit`, `RegDate`, `UpdateDate`, `gender`, `region`) VALUES
('', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', ''),
('24-0276', '73421', 'Colten', 'Adams', '265', '220', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Male', '04/'),

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
