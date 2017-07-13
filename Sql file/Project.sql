-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 25, 2016 at 07:29 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Project`
--

-- --------------------------------------------------------

--
-- Table structure for table `applyfund`
--

CREATE TABLE `applyfund` (
  `InstiName` varchar(256) NOT NULL,
  `Purpose` varchar(256) NOT NULL,
  `Amount` int(11) NOT NULL,
  `ApplicationNumber` int(11) NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dean`
--

CREATE TABLE `dean` (
  `Name` varchar(50) NOT NULL,
  `Institute_Name` varchar(60) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `Research_Area` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dean`
--

INSERT INTO `dean` (`Name`, `Institute_Name`, `username`, `password`, `contact`, `Research_Area`) VALUES
('klzjnc', 'IIT INDORE', 'director@iiti.ac.in', '5f4dcc3b5aa765d61d8327deb882cf99', '1078124241', 'mnsadsdx'),
('laknxadkn', 'IIT INDORE', 'bjdcks@', '3014a553dba8ce4d2b5204a43d087c2b', '2173821332', 'knskaknkle'),
('kefxsa', 'IIT INDORE', 'nljxfxf@', '4687919fa9e663671ad18871e1e36518', '3807943234', 'kqnwdxjqdkxb'),
('axklxhdljdx', 'IIT INDORE', 'cse150001014@iiti.ac', '6b843babd1a541ea680dc09a6fc870e5', '8971212143', 'ljnwcj'),
('klaxnldkn', 'IIT INDORE', 'lclbcdjk@', '56dc9d33c70754754aa185c10a727b8a', '9092374902', 'klkakflah');

-- --------------------------------------------------------

--
-- Table structure for table `Funds`
--

CREATE TABLE `Funds` (
  `Transaction_Id` int(11) NOT NULL,
  `Amount` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Funds`
--

INSERT INTO `Funds` (`Transaction_Id`, `Amount`) VALUES
(1, '4.00'),
(3, '2131.00'),
(4, '234.00'),
(5, '2342.00'),
(6, '46456.00'),
(1000, '324.00'),
(1001, '324.00'),
(3234, '123.00'),
(3235, '123.00');

-- --------------------------------------------------------

--
-- Table structure for table `Grievances`
--

CREATE TABLE `Grievances` (
  `Id` int(11) NOT NULL,
  `Institution Name` varchar(50) NOT NULL,
  `Complaint Type` varchar(200) DEFAULT NULL,
  `complaint` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Grievances`
--

INSERT INTO `Grievances` (`Id`, `Institution Name`, `Complaint Type`, `complaint`) VALUES
(3, 'IIT INDORE', 'kmaslnkc', 'knlkdsns'),
(6, 'IIT INDORE', 'kmaslnkc', 'knlkdsns');

-- --------------------------------------------------------

--
-- Table structure for table `Institutions`
--

CREATE TABLE `Institutions` (
  `Name` varchar(40) NOT NULL,
  `Type` varchar(40) NOT NULL,
  `Ranking` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Institutions`
--

INSERT INTO `Institutions` (`Name`, `Type`, `Ranking`) VALUES
('IIT INDORE', 'engineering', 112),
('jsdkjn', 'lnkslvnlks', 12),
('kwclnw', ';kwxn', 1),
('xxferferfx', 'medical', 12);

--
-- Triggers `Institutions`
--
DELIMITER $$
CREATE TRIGGER `testref` BEFORE DELETE ON `Institutions` FOR EACH ROW BEGIN
    DELETE FROM Inst_fund WHERE Inst_fund.Name=old.Name;
  DELETE from `Land allocation` where `Land allocation`.Name=old.name;
  DELETE from Grievances where `Grievances`.`Institution Name`=old.name;
  DELETE from Inst_Sch where `Inst_Sch`.`Institute Name`=old.name;
    DELETE from Dean where dean.Institute_Name=old.name;


  END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `Inst_fund`
--

CREATE TABLE `Inst_fund` (
  `Name` varchar(60) NOT NULL,
  `Transaction_Id` int(11) NOT NULL,
  `Date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Inst_fund`
--

INSERT INTO `Inst_fund` (`Name`, `Transaction_Id`, `Date`) VALUES
('kwclnw', 5, '2016-11-16'),
('IIT Indore', 3234, '2016-11-03'),
('IIT INDORE', 3235, '2016-11-03');

-- --------------------------------------------------------

--
-- Table structure for table `Inst_Sch`
--

CREATE TABLE `Inst_Sch` (
  `Institute Name` varchar(60) NOT NULL,
  `Scholarship Name` varchar(60) NOT NULL,
  `Max. Applicants` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Inst_Sch`
--

INSERT INTO `Inst_Sch` (`Institute Name`, `Scholarship Name`, `Max. Applicants`) VALUES
('IIT INDORE', 'jkxksbhfs', 23),
('kwclnw', 'jkxksbhfs', 45),
('xxferferfx', 'jkxksbhfs', 78);

-- --------------------------------------------------------

--
-- Table structure for table `Land allocation`
--

CREATE TABLE `Land allocation` (
  `Name` varchar(50) NOT NULL,
  `Area in sq. yards` int(10) UNSIGNED NOT NULL,
  `state` varchar(60) NOT NULL,
  `pincode` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Land allocation`
--

INSERT INTO `Land allocation` (`Name`, `Area in sq. yards`, `state`, `pincode`) VALUES
('IIT INDORE', 123, 'punjab', 123213),
('jsdkjn', 232, 'nljsdjvnn', 213123),
('kwclnw', 545, 'vjhvvg', 24324),
('xxferferfx', 654, 'dhfdyd', 342243);

-- --------------------------------------------------------

--
-- Table structure for table `Land_alloc`
--

CREATE TABLE `Land_alloc` (
  `Id` int(11) NOT NULL,
  `Area` decimal(10,0) NOT NULL,
  `state` varchar(20) NOT NULL,
  `pincode` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Land_alloc`
--

INSERT INTO `Land_alloc` (`Id`, `Area`, `state`, `pincode`) VALUES
(10, '6764', 'vhjjhhjv', '455436');

-- --------------------------------------------------------

--
-- Table structure for table `Ministers`
--

CREATE TABLE `Ministers` (
  `Name` varchar(30) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(60) NOT NULL,
  `Working Period` int(11) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `Designation` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Ministers`
--

INSERT INTO `Ministers` (`Name`, `username`, `password`, `Working Period`, `contact`, `Designation`) VALUES
('prakash', 'cse150001014@iiti.ac.in', '5f4dcc3b5aa765d61d8327deb882cf99', 2, '27616356173', 'nzasdadxada'),
('kushwaha', 'jhcachqcvcv', '7c4cf5813c43f29d112d7644c064c07a', 2, '8917281728', 'hkkcch'),
('mahendra', 'mxklanscl', 'kszccslcn', 3, '233453234', 'dsckdsvsdsvsdv');

-- --------------------------------------------------------

--
-- Table structure for table `schemes`
--

CREATE TABLE `schemes` (
  `Name` varchar(100) NOT NULL,
  `Id` int(11) NOT NULL,
  `Type` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schemes`
--

INSERT INTO `schemes` (`Name`, `Id`, `Type`) VALUES
('anfqofbuqe', 10, 'efndlkns'),
('knalkn', 10, 'wqbfkawf');

-- --------------------------------------------------------

--
-- Table structure for table `Scholarships`
--

CREATE TABLE `Scholarships` (
  `Name` varchar(50) NOT NULL,
  `Starting date` date NOT NULL,
  `Last date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Scholarships`
--

INSERT INTO `Scholarships` (`Name`, `Starting date`, `Last date`) VALUES
('jkxksbhfs', '0000-00-00', '2016-11-16'),
('wfsdds', '2016-11-02', '2016-12-09');

-- --------------------------------------------------------

--
-- Table structure for table `schooldetails`
--

CREATE TABLE `schooldetails` (
  `schoolname` varchar(256) NOT NULL,
  `type` varchar(10) NOT NULL,
  `city` varchar(256) NOT NULL,
  `locality` varchar(256) NOT NULL,
  `pincode` int(11) NOT NULL,
  `state` varchar(256) NOT NULL,
  `area` int(11) NOT NULL,
  `board` varchar(10) NOT NULL,
  `strength` int(11) NOT NULL,
  `staff` int(11) NOT NULL,
  `comment` text NOT NULL,
  `r_id` int(11) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT '''pending'''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schooldetails`
--

INSERT INTO `schooldetails` (`schoolname`, `type`, `city`, `locality`, `pincode`, `state`, `area`, `board`, `strength`, `staff`, `comment`, `r_id`, `status`) VALUES
('jjjjj', 'boys', 'adadadad', 'ada33', 333, 'adad', 333, 'C.B.S.E', 333, 333, 'sdsdsdsds', 3, '''pending'''),
('', 'co-ed', '', '', 0, '', 0, 'I.C.S.E', 0, 0, '', 8, '''pending'''),
('', 'co-ed', '', '', 0, '', 0, 'I.C.S.E', 0, 0, '', 9, '''pending'''),
('hhh', 'boys', 'dddddd', 'ddd', 452020, 'dddd', 444, 'C.B.S.E', 444, 444, 'ddd', 10, '''pending''');

-- --------------------------------------------------------

--
-- Table structure for table `Schools`
--

CREATE TABLE `Schools` (
  `ID` int(11) NOT NULL,
  `Name` varchar(40) NOT NULL,
  `Educational Board` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Schools`
--

INSERT INTO `Schools` (`ID`, `Name`, `Educational Board`) VALUES
(10, 'jjkg', 'N.C.E.R.T');

--
-- Triggers `Schools`
--
DELIMITER $$
CREATE TRIGGER `testref1` BEFORE DELETE ON `Schools` FOR EACH ROW BEGIN
 DELETE from Sch_fund where Sch_fund.Id=old.ID;
 DELETE from Grievances where Grievances.`Institution Name`=old.Name;
 DELETE from schemes where schemes.Id=old.ID;
 DELETE from DEAN where dean.Institute_Name=old.name;
 DELETE from Land_alloc where Land_alloc.id=old.id;
 END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `Sch_fund`
--

CREATE TABLE `Sch_fund` (
  `Id` int(11) NOT NULL,
  `Transaction_Id` int(11) NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Sch_fund`
--

INSERT INTO `Sch_fund` (`Id`, `Transaction_Id`, `Date`) VALUES
(10, 5, '2016-11-24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applyfund`
--
ALTER TABLE `applyfund`
  ADD PRIMARY KEY (`ApplicationNumber`);

--
-- Indexes for table `dean`
--
ALTER TABLE `dean`
  ADD PRIMARY KEY (`Institute_Name`,`contact`),
  ADD UNIQUE KEY `Institute Name` (`Institute_Name`,`contact`);

--
-- Indexes for table `Funds`
--
ALTER TABLE `Funds`
  ADD PRIMARY KEY (`Transaction_Id`),
  ADD UNIQUE KEY `Transaction Id` (`Transaction_Id`);

--
-- Indexes for table `Grievances`
--
ALTER TABLE `Grievances`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `Id` (`Id`),
  ADD KEY `Institution Name` (`Institution Name`);

--
-- Indexes for table `Institutions`
--
ALTER TABLE `Institutions`
  ADD PRIMARY KEY (`Name`),
  ADD UNIQUE KEY `Name` (`Name`);

--
-- Indexes for table `Inst_fund`
--
ALTER TABLE `Inst_fund`
  ADD PRIMARY KEY (`Transaction_Id`),
  ADD UNIQUE KEY `Transaction_Id` (`Transaction_Id`),
  ADD KEY `Name` (`Name`);

--
-- Indexes for table `Inst_Sch`
--
ALTER TABLE `Inst_Sch`
  ADD PRIMARY KEY (`Institute Name`,`Scholarship Name`),
  ADD UNIQUE KEY `Institute Name` (`Institute Name`,`Scholarship Name`),
  ADD KEY `Scholarship Name` (`Scholarship Name`);

--
-- Indexes for table `Land allocation`
--
ALTER TABLE `Land allocation`
  ADD PRIMARY KEY (`Name`),
  ADD UNIQUE KEY `Name` (`Name`);

--
-- Indexes for table `Land_alloc`
--
ALTER TABLE `Land_alloc`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `Ministers`
--
ALTER TABLE `Ministers`
  ADD PRIMARY KEY (`username`,`contact`),
  ADD UNIQUE KEY `username` (`username`,`contact`);

--
-- Indexes for table `schemes`
--
ALTER TABLE `schemes`
  ADD PRIMARY KEY (`Name`,`Id`),
  ADD UNIQUE KEY `Name` (`Name`,`Id`),
  ADD KEY `Id` (`Id`);

--
-- Indexes for table `Scholarships`
--
ALTER TABLE `Scholarships`
  ADD PRIMARY KEY (`Name`),
  ADD UNIQUE KEY `Name` (`Name`);

--
-- Indexes for table `schooldetails`
--
ALTER TABLE `schooldetails`
  ADD PRIMARY KEY (`r_id`),
  ADD KEY `staff_2` (`staff`);

--
-- Indexes for table `Schools`
--
ALTER TABLE `Schools`
  ADD PRIMARY KEY (`ID`,`Name`),
  ADD UNIQUE KEY `ID` (`ID`),
  ADD UNIQUE KEY `Name` (`Name`);

--
-- Indexes for table `Sch_fund`
--
ALTER TABLE `Sch_fund`
  ADD PRIMARY KEY (`Transaction_Id`),
  ADD UNIQUE KEY `Transaction Id` (`Transaction_Id`),
  ADD KEY `Id` (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `applyfund`
--
ALTER TABLE `applyfund`
  MODIFY `ApplicationNumber` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `Funds`
--
ALTER TABLE `Funds`
  MODIFY `Transaction_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3236;
--
-- AUTO_INCREMENT for table `Grievances`
--
ALTER TABLE `Grievances`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `Inst_fund`
--
ALTER TABLE `Inst_fund`
  MODIFY `Transaction_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3236;
--
-- AUTO_INCREMENT for table `Land_alloc`
--
ALTER TABLE `Land_alloc`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `schooldetails`
--
ALTER TABLE `schooldetails`
  MODIFY `r_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `Schools`
--
ALTER TABLE `Schools`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `Sch_fund`
--
ALTER TABLE `Sch_fund`
  MODIFY `Transaction_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `Inst_fund`
--
ALTER TABLE `Inst_fund`
  ADD CONSTRAINT `inst_fund_ibfk_1` FOREIGN KEY (`Name`) REFERENCES `Institutions` (`Name`),
  ADD CONSTRAINT `inst_fund_ibfk_2` FOREIGN KEY (`Transaction_Id`) REFERENCES `Funds` (`Transaction_Id`);

--
-- Constraints for table `Inst_Sch`
--
ALTER TABLE `Inst_Sch`
  ADD CONSTRAINT `inst_sch_ibfk_1` FOREIGN KEY (`Institute Name`) REFERENCES `Institutions` (`Name`),
  ADD CONSTRAINT `inst_sch_ibfk_2` FOREIGN KEY (`Scholarship Name`) REFERENCES `Scholarships` (`Name`);

--
-- Constraints for table `Land allocation`
--
ALTER TABLE `Land allocation`
  ADD CONSTRAINT `land allocation_ibfk_2` FOREIGN KEY (`Name`) REFERENCES `Institutions` (`Name`);

--
-- Constraints for table `Land_alloc`
--
ALTER TABLE `Land_alloc`
  ADD CONSTRAINT `land_alloc_ibfk_1` FOREIGN KEY (`Id`) REFERENCES `Schools` (`ID`);

--
-- Constraints for table `schemes`
--
ALTER TABLE `schemes`
  ADD CONSTRAINT `schemes_ibfk_1` FOREIGN KEY (`Id`) REFERENCES `Schools` (`ID`);

--
-- Constraints for table `Sch_fund`
--
ALTER TABLE `Sch_fund`
  ADD CONSTRAINT `sch_fund_ibfk_1` FOREIGN KEY (`Id`) REFERENCES `schools` (`ID`),
  ADD CONSTRAINT `sch_fund_ibfk_2` FOREIGN KEY (`Transaction_Id`) REFERENCES `funds` (`Transaction_Id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
