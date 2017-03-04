-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 03, 2017 at 09:13 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `studentinfo`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
`AdminID` bigint(20) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `DoB` date NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Pic` varchar(50) NOT NULL,
  `Contact` varchar(20) NOT NULL,
  `LastUpdated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Status` int(11) NOT NULL DEFAULT '1',
  `FatherName` varchar(50) NOT NULL,
  `CNIC` varchar(20) NOT NULL,
  `LastLogin` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`AdminID`, `Name`, `DoB`, `Email`, `Password`, `Pic`, `Contact`, `LastUpdated`, `Created`, `Status`, `FatherName`, `CNIC`, `LastLogin`) VALUES
(1, 'Faysal Ahmed', '1991-10-24', 'itsfaysy@gmail.com', '123', '', '03471195501', '2016-12-25 15:22:30', '2016-12-25 15:22:30', 1, 'Fayaz Ahmed', '13101-5586624-3', '2016-12-25 15:22:30');

-- --------------------------------------------------------

--
-- Table structure for table `bus`
--

CREATE TABLE IF NOT EXISTS `bus` (
`BusID` bigint(20) NOT NULL,
  `BusNo` varchar(10) NOT NULL,
  `Des` text NOT NULL,
  `Created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `LastUpdated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Status` int(10) NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bus`
--

INSERT INTO `bus` (`BusID`, `BusNo`, `Des`, `Created`, `LastUpdated`, `Status`) VALUES
(1, 'LXL3597', 'ZC SOHC\r\n', '2017-01-28 19:10:55', '2017-01-28 19:10:55', 1);

-- --------------------------------------------------------

--
-- Table structure for table `busroute`
--

CREATE TABLE IF NOT EXISTS `busroute` (
`BusRouteID` bigint(20) NOT NULL,
  `BusID` bigint(20) NOT NULL,
  `Route` varchar(100) NOT NULL,
  `Des` text NOT NULL,
  `LastUpdated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `busroute`
--

INSERT INTO `busroute` (`BusRouteID`, `BusID`, `Route`, `Des`, `LastUpdated`, `Created`, `Status`) VALUES
(1, 1, 'PMA Road', '', '2017-01-28 19:11:09', '2017-01-28 19:11:09', 1);

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE IF NOT EXISTS `class` (
`ClassID` bigint(20) NOT NULL,
  `Title` varchar(10) NOT NULL,
  `Des` tinytext NOT NULL,
  `LastUpdated` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `Created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `driver`
--

CREATE TABLE IF NOT EXISTS `driver` (
`DriverID` bigint(20) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `CNIC` varchar(20) NOT NULL,
  `ContactNo` varchar(20) NOT NULL,
  `Address` text NOT NULL,
  `Salary` bigint(20) NOT NULL,
  `Status` int(11) NOT NULL DEFAULT '0',
  `LastUpdated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `exam`
--

CREATE TABLE IF NOT EXISTS `exam` (
`ExamID` bigint(20) NOT NULL,
  `ExamTitle` varchar(50) NOT NULL,
  `Des` text NOT NULL,
  `LastUpdated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `examscore`
--

CREATE TABLE IF NOT EXISTS `examscore` (
`ExamScoreID` bigint(20) NOT NULL,
  `ExamID` bigint(20) NOT NULL,
  `SubejctID` bigint(20) NOT NULL,
  `StudentID` bigint(20) NOT NULL,
  `SectionID` bigint(20) NOT NULL,
  `MarksObt` float NOT NULL DEFAULT '0',
  `TotalMarks` int(11) NOT NULL,
  `Status` int(11) NOT NULL DEFAULT '1',
  `Created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `LastUpdated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `lowerstaff`
--

CREATE TABLE IF NOT EXISTS `lowerstaff` (
`StaffID` bigint(20) NOT NULL,
  `StaffNumber` varchar(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Contact` varchar(20) NOT NULL,
  `CNIC` varchar(20) NOT NULL,
  `Post` varchar(255) NOT NULL,
  `Salary` bigint(20) NOT NULL,
  `LastUpdated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `section`
--

CREATE TABLE IF NOT EXISTS `section` (
`SectionID` bigint(20) NOT NULL,
  `Title` varchar(50) NOT NULL,
  `Fee` bigint(20) NOT NULL DEFAULT '0',
  `Des` text NOT NULL,
  `ClassID` bigint(20) NOT NULL,
  `LastUpdated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `stdattendance`
--

CREATE TABLE IF NOT EXISTS `stdattendance` (
`StdAttendaceID` bigint(20) NOT NULL,
  `StudentID` bigint(20) NOT NULL,
  `Present` int(11) NOT NULL DEFAULT '1',
  `SectionID` bigint(20) NOT NULL,
  `Date` date NOT NULL,
  `Created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
`StudentID` bigint(20) NOT NULL,
  `StudentNumber` varchar(255) NOT NULL,
  `Name` varchar(40) NOT NULL,
  `FatherName` varchar(40) NOT NULL,
  `DoB` date NOT NULL,
  `Address` text NOT NULL,
  `FatherPhone` varchar(20) NOT NULL,
  `StudentContact` varchar(20) NOT NULL,
  `GuardianName` varchar(40) NOT NULL,
  `GuardianContact` varchar(20) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `TutionFeeConcession` int(11) NOT NULL,
  `HostelFeeConcession` int(11) NOT NULL,
  `IsHostel` tinyint(1) NOT NULL DEFAULT '0',
  `Picture` varchar(50) NOT NULL,
  `IsTransport` tinyint(1) NOT NULL DEFAULT '0',
  `BusRouteID` bigint(20) NOT NULL,
  `LastUpdated` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `Created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Status` int(11) NOT NULL DEFAULT '0',
  `LastLogin` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`StudentID`, `StudentNumber`, `Name`, `FatherName`, `DoB`, `Address`, `FatherPhone`, `StudentContact`, `GuardianName`, `GuardianContact`, `Email`, `Password`, `TutionFeeConcession`, `HostelFeeConcession`, `IsHostel`, `Picture`, `IsTransport`, `BusRouteID`, `LastUpdated`, `Created`, `Status`, `LastLogin`) VALUES
(12, '', 'Faysal Ahmed', 'Fayaz Ahmed', '1991-11-15', 'House no 58/37, Shah Zaman Colony PMA ROad, Abbottabd', '0334567855', '03471195501', 'Sajid Ahmed', '03471195501', 'itsfaysy@gmail.com', '123456', 50, 10, 1, '', 0, 1, '2017-01-28 19:35:06', '2017-01-28 19:35:06', 0, '2017-01-28 19:35:06');

-- --------------------------------------------------------

--
-- Table structure for table `studentfee`
--

CREATE TABLE IF NOT EXISTS `studentfee` (
`StudentFeeID` bigint(20) NOT NULL,
  `StudentID` bigint(20) NOT NULL,
  `SectionID` bigint(20) NOT NULL,
  `DueFee` bigint(20) NOT NULL,
  `Paid` bigint(20) NOT NULL,
  `Arrears` bigint(20) NOT NULL,
  `Status` int(11) NOT NULL DEFAULT '0',
  `Created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `PaidOn` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `studentsection`
--

CREATE TABLE IF NOT EXISTS `studentsection` (
`StudentSectionID` bigint(20) NOT NULL,
  `StudentID` bigint(20) NOT NULL,
  `SectionID` bigint(20) NOT NULL,
  `LastUpdated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE IF NOT EXISTS `subject` (
`SubjectID` bigint(20) NOT NULL,
  `Title` varchar(50) NOT NULL,
  `SectionID` bigint(20) NOT NULL,
  `Created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `LastUpdated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `subjectteacher`
--

CREATE TABLE IF NOT EXISTS `subjectteacher` (
`TeacherSubectID` bigint(20) NOT NULL,
  `TeacherID` bigint(20) NOT NULL,
  `SubjectID` bigint(20) NOT NULL,
  `Created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Status` int(11) NOT NULL DEFAULT '1',
  `LastUpdated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE IF NOT EXISTS `teacher` (
`TeacherID` bigint(20) NOT NULL,
  `CNIC` varchar(20) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `DoB` date NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Address` text NOT NULL,
  `contact` varchar(20) NOT NULL,
  `Salary` float NOT NULL DEFAULT '0',
  `Education` text NOT NULL,
  `Designation` varchar(50) NOT NULL,
  `Pic` varchar(50) DEFAULT 'TeacherPic',
  `Created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Status` int(11) NOT NULL DEFAULT '1',
  `LastLogin` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `LastUpdated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `teacherattendance`
--

CREATE TABLE IF NOT EXISTS `teacherattendance` (
`TeacherAttendanceID` bigint(20) NOT NULL,
  `TeacherID` bigint(20) NOT NULL,
  `Present` int(11) NOT NULL DEFAULT '1',
  `Date` date NOT NULL,
  `Created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Status` int(11) NOT NULL DEFAULT '1',
  `LastUpdated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE IF NOT EXISTS `test` (
`TestID` bigint(20) NOT NULL,
  `Title` varchar(50) NOT NULL,
  `SubjectID` bigint(20) NOT NULL,
  `TotalMarks` int(11) NOT NULL,
  `LastUpdated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Status` int(11) NOT NULL DEFAULT '0',
  `TestDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `testscore`
--

CREATE TABLE IF NOT EXISTS `testscore` (
`TestScoreID` bigint(20) NOT NULL,
  `TestID` bigint(20) NOT NULL,
  `StudentID` bigint(20) NOT NULL,
  `Score` float NOT NULL DEFAULT '0',
  `LastUpdated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`AdminID`);

--
-- Indexes for table `bus`
--
ALTER TABLE `bus`
 ADD PRIMARY KEY (`BusID`);

--
-- Indexes for table `busroute`
--
ALTER TABLE `busroute`
 ADD PRIMARY KEY (`BusRouteID`), ADD KEY `BusID` (`BusID`);

--
-- Indexes for table `class`
--
ALTER TABLE `class`
 ADD PRIMARY KEY (`ClassID`);

--
-- Indexes for table `driver`
--
ALTER TABLE `driver`
 ADD PRIMARY KEY (`DriverID`);

--
-- Indexes for table `exam`
--
ALTER TABLE `exam`
 ADD PRIMARY KEY (`ExamID`);

--
-- Indexes for table `examscore`
--
ALTER TABLE `examscore`
 ADD PRIMARY KEY (`ExamScoreID`), ADD KEY `ExamID` (`ExamID`,`SubejctID`,`StudentID`,`SectionID`), ADD KEY `SubejctID` (`SubejctID`), ADD KEY `StudentID` (`StudentID`), ADD KEY `SectionID` (`SectionID`);

--
-- Indexes for table `lowerstaff`
--
ALTER TABLE `lowerstaff`
 ADD PRIMARY KEY (`StaffID`), ADD UNIQUE KEY `StaffNumber` (`StaffNumber`);

--
-- Indexes for table `section`
--
ALTER TABLE `section`
 ADD PRIMARY KEY (`SectionID`), ADD KEY `ClassID` (`ClassID`);

--
-- Indexes for table `stdattendance`
--
ALTER TABLE `stdattendance`
 ADD PRIMARY KEY (`StdAttendaceID`), ADD KEY `StudentID` (`StudentID`,`Present`,`SectionID`), ADD KEY `SectionID` (`SectionID`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
 ADD PRIMARY KEY (`StudentID`), ADD UNIQUE KEY `StudentNumber` (`StudentNumber`), ADD KEY `BusRouteID` (`BusRouteID`);

--
-- Indexes for table `studentfee`
--
ALTER TABLE `studentfee`
 ADD PRIMARY KEY (`StudentFeeID`), ADD KEY `StudentID` (`StudentID`,`SectionID`), ADD KEY `SectionID` (`SectionID`);

--
-- Indexes for table `studentsection`
--
ALTER TABLE `studentsection`
 ADD PRIMARY KEY (`StudentSectionID`), ADD KEY `StudentID` (`StudentID`,`SectionID`), ADD KEY `SectionID` (`SectionID`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
 ADD PRIMARY KEY (`SubjectID`), ADD KEY `SectionID` (`SectionID`);

--
-- Indexes for table `subjectteacher`
--
ALTER TABLE `subjectteacher`
 ADD PRIMARY KEY (`TeacherSubectID`), ADD KEY `TeacherID` (`TeacherID`,`SubjectID`), ADD KEY `SubjectID` (`SubjectID`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
 ADD PRIMARY KEY (`TeacherID`);

--
-- Indexes for table `teacherattendance`
--
ALTER TABLE `teacherattendance`
 ADD PRIMARY KEY (`TeacherAttendanceID`), ADD KEY `TeacherID` (`TeacherID`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
 ADD PRIMARY KEY (`TestID`), ADD KEY `SubjectID` (`SubjectID`);

--
-- Indexes for table `testscore`
--
ALTER TABLE `testscore`
 ADD PRIMARY KEY (`TestScoreID`), ADD KEY `TestID` (`TestID`,`StudentID`), ADD KEY `StudentID` (`StudentID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
MODIFY `AdminID` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `bus`
--
ALTER TABLE `bus`
MODIFY `BusID` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `busroute`
--
ALTER TABLE `busroute`
MODIFY `BusRouteID` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
MODIFY `ClassID` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `driver`
--
ALTER TABLE `driver`
MODIFY `DriverID` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `exam`
--
ALTER TABLE `exam`
MODIFY `ExamID` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `examscore`
--
ALTER TABLE `examscore`
MODIFY `ExamScoreID` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `lowerstaff`
--
ALTER TABLE `lowerstaff`
MODIFY `StaffID` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `section`
--
ALTER TABLE `section`
MODIFY `SectionID` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `stdattendance`
--
ALTER TABLE `stdattendance`
MODIFY `StdAttendaceID` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
MODIFY `StudentID` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `studentfee`
--
ALTER TABLE `studentfee`
MODIFY `StudentFeeID` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `studentsection`
--
ALTER TABLE `studentsection`
MODIFY `StudentSectionID` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
MODIFY `SubjectID` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `subjectteacher`
--
ALTER TABLE `subjectteacher`
MODIFY `TeacherSubectID` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
MODIFY `TeacherID` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `teacherattendance`
--
ALTER TABLE `teacherattendance`
MODIFY `TeacherAttendanceID` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
MODIFY `TestID` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `testscore`
--
ALTER TABLE `testscore`
MODIFY `TestScoreID` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `busroute`
--
ALTER TABLE `busroute`
ADD CONSTRAINT `busroute_ibfk_1` FOREIGN KEY (`BusID`) REFERENCES `bus` (`BusID`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `examscore`
--
ALTER TABLE `examscore`
ADD CONSTRAINT `examscore_ibfk_1` FOREIGN KEY (`ExamID`) REFERENCES `exam` (`ExamID`) ON UPDATE CASCADE,
ADD CONSTRAINT `examscore_ibfk_2` FOREIGN KEY (`SubejctID`) REFERENCES `subject` (`SubjectID`) ON UPDATE CASCADE,
ADD CONSTRAINT `examscore_ibfk_3` FOREIGN KEY (`StudentID`) REFERENCES `student` (`StudentID`) ON UPDATE CASCADE,
ADD CONSTRAINT `examscore_ibfk_4` FOREIGN KEY (`SectionID`) REFERENCES `section` (`SectionID`) ON UPDATE CASCADE;

--
-- Constraints for table `section`
--
ALTER TABLE `section`
ADD CONSTRAINT `section_ibfk_1` FOREIGN KEY (`ClassID`) REFERENCES `class` (`ClassID`) ON UPDATE CASCADE;

--
-- Constraints for table `stdattendance`
--
ALTER TABLE `stdattendance`
ADD CONSTRAINT `stdattendance_ibfk_1` FOREIGN KEY (`StudentID`) REFERENCES `student` (`StudentID`) ON UPDATE CASCADE,
ADD CONSTRAINT `stdattendance_ibfk_2` FOREIGN KEY (`SectionID`) REFERENCES `section` (`SectionID`) ON UPDATE CASCADE;

--
-- Constraints for table `student`
--
ALTER TABLE `student`
ADD CONSTRAINT `student_ibfk_1` FOREIGN KEY (`BusRouteID`) REFERENCES `busroute` (`BusRouteID`) ON UPDATE CASCADE;

--
-- Constraints for table `studentfee`
--
ALTER TABLE `studentfee`
ADD CONSTRAINT `studentfee_ibfk_1` FOREIGN KEY (`StudentID`) REFERENCES `student` (`StudentID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `studentfee_ibfk_2` FOREIGN KEY (`SectionID`) REFERENCES `section` (`SectionID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `studentsection`
--
ALTER TABLE `studentsection`
ADD CONSTRAINT `studentsection_ibfk_1` FOREIGN KEY (`StudentID`) REFERENCES `student` (`StudentID`) ON UPDATE CASCADE,
ADD CONSTRAINT `studentsection_ibfk_2` FOREIGN KEY (`SectionID`) REFERENCES `section` (`SectionID`) ON UPDATE CASCADE;

--
-- Constraints for table `subject`
--
ALTER TABLE `subject`
ADD CONSTRAINT `subject_ibfk_1` FOREIGN KEY (`SectionID`) REFERENCES `section` (`SectionID`) ON UPDATE CASCADE;

--
-- Constraints for table `subjectteacher`
--
ALTER TABLE `subjectteacher`
ADD CONSTRAINT `subjectteacher_ibfk_1` FOREIGN KEY (`SubjectID`) REFERENCES `subject` (`SubjectID`) ON UPDATE CASCADE,
ADD CONSTRAINT `subjectteacher_ibfk_2` FOREIGN KEY (`TeacherID`) REFERENCES `teacher` (`TeacherID`) ON UPDATE CASCADE;

--
-- Constraints for table `teacherattendance`
--
ALTER TABLE `teacherattendance`
ADD CONSTRAINT `teacherattendance_ibfk_1` FOREIGN KEY (`TeacherID`) REFERENCES `teacher` (`TeacherID`) ON UPDATE CASCADE;

--
-- Constraints for table `test`
--
ALTER TABLE `test`
ADD CONSTRAINT `test_ibfk_1` FOREIGN KEY (`SubjectID`) REFERENCES `subject` (`SubjectID`) ON UPDATE CASCADE;

--
-- Constraints for table `testscore`
--
ALTER TABLE `testscore`
ADD CONSTRAINT `testscore_ibfk_1` FOREIGN KEY (`TestID`) REFERENCES `test` (`TestID`) ON UPDATE CASCADE,
ADD CONSTRAINT `testscore_ibfk_2` FOREIGN KEY (`StudentID`) REFERENCES `student` (`StudentID`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
