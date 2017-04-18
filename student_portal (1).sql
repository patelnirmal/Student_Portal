-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2017 at 12:21 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student_portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_attendance`
--

CREATE TABLE `tbl_attendance` (
  `id` int(11) NOT NULL,
  `enrollment_no` bigint(15) NOT NULL,
  `studentname` varchar(80) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `department` varchar(50) NOT NULL,
  `semester` int(5) NOT NULL,
  `status` varchar(10) NOT NULL,
  `dateStatus` date NOT NULL,
  `startLecture` time NOT NULL,
  `endLecture` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_attendance`
--

INSERT INTO `tbl_attendance` (`id`, `enrollment_no`, `studentname`, `subject`, `department`, `semester`, `status`, `dateStatus`, `startLecture`, `endLecture`) VALUES
(1, 146400307017, 'Nirmal Patel', 'AJAVA', 'Computer Department', 6, 'Present', '2017-04-01', '08:30:00', '09:30:00'),
(2, 146400307038, 'Bhupinder Kaler', 'AJAVA', 'Computer Department', 6, 'Present', '2017-04-01', '08:30:00', '09:30:00'),
(3, 146400307076, 'Harsh Patel', 'AJAVA', 'Computer Department', 6, 'Present', '2017-04-01', '08:30:00', '09:30:00'),
(4, 146400307017, 'Nirmal Patel', 'MCAD', 'Computer Department', 6, 'Present', '2017-04-17', '08:30:00', '09:30:00'),
(5, 146400307038, 'Bhupinder Kaler', 'MCAD', 'Computer Department', 6, 'Present', '2017-04-17', '08:30:00', '09:30:00'),
(6, 146400307076, 'Harsh Patel', 'MCAD', 'Computer Department', 6, 'Present', '2017-04-17', '08:30:00', '09:30:00'),
(7, 146400307017, 'Nirmal Patel', 'AJAVA', 'Computer Department', 6, 'Present', '2017-04-17', '10:30:00', '09:30:00'),
(8, 146400307038, 'Bhupinder Kaler', 'AJAVA', 'Computer Department', 6, 'Present', '2017-04-17', '10:30:00', '09:30:00'),
(9, 146400307076, 'Harsh Patel', 'AJAVA', 'Computer Department', 6, 'Present', '2017-04-17', '10:30:00', '09:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_branchmaster`
--

CREATE TABLE `tbl_branchmaster` (
  `department_code` varchar(10) NOT NULL,
  `department_name` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_branchmaster`
--

INSERT INTO `tbl_branchmaster` (`department_code`, `department_name`) VALUES
('03', 'BioMedical Department'),
('06', 'Civil Department'),
('07', 'Computer Department'),
('08', 'admaklsda'),
('09', 'Electrical Department'),
('16', 'IT Department'),
('19', 'Mechanical Department');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_exammaster`
--

CREATE TABLE `tbl_exammaster` (
  `exam_id` int(11) NOT NULL,
  `exam_name` varchar(50) NOT NULL,
  `exam_type` varchar(50) NOT NULL,
  `exam_marks` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_exammaster`
--

INSERT INTO `tbl_exammaster` (`exam_id`, `exam_name`, `exam_type`, `exam_marks`) VALUES
(1, 'GTU', 'Select Exam', 70),
(2, 'Mid Sem', 'Theory Exam', 30);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_examresults`
--

CREATE TABLE `tbl_examresults` (
  `id` int(11) NOT NULL,
  `EnrollMentNumber` bigint(20) NOT NULL,
  `Student_Name` varchar(100) NOT NULL,
  `Department` varchar(100) NOT NULL,
  `Semester` bigint(20) NOT NULL,
  `AJAVA` bigint(20) NOT NULL,
  `NMA` bigint(20) NOT NULL,
  `MCAD` bigint(20) NOT NULL,
  `Total` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_examresults`
--

INSERT INTO `tbl_examresults` (`id`, `EnrollMentNumber`, `Student_Name`, `Department`, `Semester`, `AJAVA`, `NMA`, `MCAD`, `Total`) VALUES
(1, 7017, 'Nirmal Patel', 'Computer ', 6, 70, 70, 70, 210),
(2, 7038, 'Bhpinder Singh', 'Computer ', 6, 50, 50, 50, 150),
(3, 7076, 'Harsh Patel', 'Computer ', 6, 40, 40, 40, 120);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_examtimetable`
--

CREATE TABLE `tbl_examtimetable` (
  `exam_id` int(11) NOT NULL,
  `exam_name` varchar(50) NOT NULL,
  `exam_subject` varchar(50) NOT NULL,
  `exam_marks` bigint(20) NOT NULL,
  `exam_sem` varchar(10) NOT NULL,
  `exam_department` varchar(100) NOT NULL,
  `exam_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_examtimetable`
--

INSERT INTO `tbl_examtimetable` (`exam_id`, `exam_name`, `exam_subject`, `exam_marks`, `exam_sem`, `exam_department`, `exam_date`) VALUES
(1, 'GTU', 'Advance Java Programming', 70, '6', 'Computer Department', '2017-05-02'),
(2, 'GTU', 'Mobile Copmuting and Developement', 70, '6', 'Computer Department', '2017-05-04'),
(3, 'GTU', 'Network Management and Administation', 70, '6', 'Computer Department', '2017-05-06'),
(4, 'GTU', 'PROJECT-II', 70, '6', 'Computer Department', '2017-05-10');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_faculty_add`
--

CREATE TABLE `tbl_faculty_add` (
  `facid` varchar(50) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `father_name` varchar(100) NOT NULL,
  `mother_name` varchar(100) NOT NULL,
  `faculty_address` varchar(200) NOT NULL,
  `area` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `pincode` int(50) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(8) NOT NULL,
  `faculty_photo` varchar(100) NOT NULL,
  `email_id` varchar(100) NOT NULL,
  `faculty_contact` bigint(15) NOT NULL,
  `faculty_alternate_contact` bigint(15) NOT NULL,
  `department` varchar(50) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `examination_passed` varchar(100) NOT NULL,
  `university` varchar(50) NOT NULL,
  `year_of_passing` varchar(50) NOT NULL,
  `percentage` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_faculty_add`
--

INSERT INTO `tbl_faculty_add` (`facid`, `first_name`, `last_name`, `father_name`, `mother_name`, `faculty_address`, `area`, `city`, `pincode`, `dob`, `gender`, `faculty_photo`, `email_id`, `faculty_contact`, `faculty_alternate_contact`, `department`, `designation`, `examination_passed`, `university`, `year_of_passing`, `percentage`) VALUES
('awd', 'sdf', 'fd', 'as', 'as', '564asd`', 'Chandkheda', 'Ahmedabad', 31, '2017-04-21', 'Male', 'attachment_a8fec26504ad08885f067be5e579eafa.png', 'vhg@mail.com', 654, 666, 'BioMedical Department', 'PT Lecturer', '', '', '', 0),
('BAP', 'Bhupinder', 'Kaler', 'Bhai', 'Ben', '28 Krushnakunj Society', 'Chandkheda', 'Ahmedabad', 158960, '1985-09-02', 'Male', '1098015_527688433969300_1624873451_n.jpg', 'facbhupi@gmail.com', 1789546208, 4789652019, 'Computer Department', 'Assitant Professor', 'SSC', 'GSHEB', '2013', 60),
('HAS', 'Harsh', 'Patel', 'Bhai', 'Ben', '24/A New Nikita Park', 'SataDhar', 'Ahmedabad', 324589, '1990-08-05', 'Male', 'messi.jpg', 'facharsh@gmail.com', 1234567890, 9876543210, 'Computer Department', 'Head Of Department', 'SSC', 'GSHEB', '2013', 70),
('ISP', 'Ishan', 'Patel', 'Bhai', 'Ben', '89/C Shaktidhara society', 'Thaltej', 'Ahmedabad', 147965, '1975-07-05', 'Male', 'indeljbx.jpg', 'facishan@gmail.com', 1456897580, 1458967850, 'IT Department', 'PT Lecturer', 'SSC', 'GSHEB', '2013', 80),
('NAP', 'Nirmal', 'Patel', 'Bharatbhai', 'Naynaben', '17 sahajanand society', 'Bapunagar', 'Ahmedabad', 382345, '1998-12-17', 'Male', '0dpkPE40yEne1rrqWmmgxw.jpg', 'nimu664@gmail.com', 9879314308, 9998410670, 'Computer Department', 'PT Lecturer', 'SSC', 'GSHEB', '2013', 80),
('RAD', 'Ridham', 'Patel', 'Bhai', 'Ben', '17 sahajanand society\r\n', 'Bapunagar', 'Ahmedabad', 147598, '1986-08-02', 'Male', 'sgfdbf.jpg', 'facridham@gmail.com', 1458962570, 1458965240, 'IT Department', 'Assitant Professor', 'SSC', 'GSHEB', '2013', 70),
('UMD', 'Umang', 'Patel', 'Bhai', 'Ben', '5 Krushnanagar Society', 'Bapunagar', 'Ahmedabad', 382340, '1980-07-01', 'Male', 'image;kns.jpg', 'facumang@gmail.com', 1547896520, 4786595210, 'IT Department', 'Head Of Department', 'SSC', 'GSHEB', '2013', 70);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE `tbl_login` (
  `id` int(11) NOT NULL,
  `adm_username` varchar(50) NOT NULL,
  `adm_password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`id`, `adm_username`, `adm_password`) VALUES
(1, 'admin', 'pass');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_notice`
--

CREATE TABLE `tbl_notice` (
  `notice_id` int(11) NOT NULL,
  `notice_date` date NOT NULL,
  `notice_src` varchar(100) NOT NULL,
  `notice_title` varchar(100) NOT NULL,
  `notice_details` varchar(500) NOT NULL,
  `notice_department` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_notice`
--

INSERT INTO `tbl_notice` (`notice_id`, `notice_date`, `notice_src`, `notice_title`, `notice_details`, `notice_department`) VALUES
(1, '2017-04-13', 'Nirmal', 'Submissions', 'Complete Your <strong>Practicals</strong> and <strong>Assignments</strong> .\r\nThe details for Submissions will be <u>Uploaded </u>Shortly', 'Computer Department'),
(2, '2017-04-13', 'Nirmal', 'Exam Notice', 'The Time Table for your <strong>GTU EXAM </strong>has been uploaded.\r\n<u>Navigate </u>to <strong>Exam Time-Table</strong> page to see it.\r\n', 'Computer Department');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_registration`
--

CREATE TABLE `tbl_registration` (
  `reg_id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `confpassword` varchar(50) NOT NULL,
  `emailid` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `contactno` bigint(20) NOT NULL,
  `log_type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_registration`
--

INSERT INTO `tbl_registration` (`reg_id`, `firstname`, `lastname`, `username`, `password`, `confpassword`, `emailid`, `gender`, `contactno`, `log_type`) VALUES
(1, 'Nirmal', 'Patel', 'NAP', '123456', '123456', 'nimu664@gmail.com', 'Male', 9879314308, 'Faculty'),
(2, 'Bhupinder', 'Kaler', '146400307038', '123456', '123456', 'bhupi@gmail.com', 'Male', 5897420159, 'Student'),
(3, 'umang', 'Patel', 'UMD', '123', '123', 'umang121@gmail.com', 'Male', 7016469807, 'Faculty'),
(4, '', '', '', '', '', '', 'Male', 0, 'Faculty'),
(5, '', '', '', '', '', '', 'Male', 0, 'Faculty'),
(6, '', '', '', '', '', '', 'Male', 0, 'Faculty');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_semestermaster`
--

CREATE TABLE `tbl_semestermaster` (
  `sem_id` int(11) NOT NULL,
  `sem_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_semestermaster`
--

INSERT INTO `tbl_semestermaster` (`sem_id`, `sem_name`) VALUES
(1, '1'),
(2, '2'),
(3, '3'),
(4, '4'),
(5, '5'),
(6, '6');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_student_admission`
--

CREATE TABLE `tbl_student_admission` (
  `enrollment_number` bigint(15) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `father_name` varchar(50) NOT NULL,
  `mother_name` varchar(50) NOT NULL,
  `student_address` varchar(100) NOT NULL,
  `area` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `pincode` int(20) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `student_photo` varchar(100) NOT NULL,
  `email_id` varchar(100) NOT NULL,
  `student_contact` bigint(15) NOT NULL,
  `parents_contact` bigint(15) NOT NULL,
  `department` varchar(50) NOT NULL,
  `semester` varchar(10) NOT NULL,
  `examination_passed` varchar(200) NOT NULL,
  `university` varchar(100) NOT NULL,
  `year_of_passing` varchar(50) NOT NULL,
  `percentage` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_student_admission`
--

INSERT INTO `tbl_student_admission` (`enrollment_number`, `first_name`, `last_name`, `father_name`, `mother_name`, `student_address`, `area`, `city`, `pincode`, `dob`, `gender`, `student_photo`, `email_id`, `student_contact`, `parents_contact`, `department`, `semester`, `examination_passed`, `university`, `year_of_passing`, `percentage`) VALUES
(146400307017, 'Nirmal', 'Patel', 'Bharatbhai', 'Naynaben', '17 sahajanand society', 'Bapunagar', 'Ahmedabad', 382345, '1998-12-17', 'Male', 'IMG_20161031_084219.jpg', 'nimu664@gmail.com', 9879314308, 9998410670, 'Computer Department', '6', 'SSC', 'GSHEB', ' 2013', 80),
(146400307038, 'Bhupinder', 'Kaler', 'Rajsinh', 'Naynaben', '28 Krushnakunj Society', 'Chandkheda', 'Ahmedabad', 382450, '1998-01-01', 'Male', '91bde315941e18674af6ba75a6b34af7.jpg', 'bhupi@gmail.com', 1234567890, 9875461235, 'Computer Department', '6', 'SSC', 'GSHEB', ' 2013', 60),
(146400307054, 'Ishan', 'Patel', 'Bhai', 'Ben', '89/C Shaktidhara society', 'Thaltej', 'Ahmedabad', 174890, '1999-11-26', 'Male', '542371.jpg', 'ishan.patel@gmail.com', 8460705987, 1234567890, 'IT Department', '6', 'SSC', 'GSHEB', ' 2013', 80),
(146400307068, 'Umang', 'Patel', 'Dhirubhai', 'Ben', '5 Krushnanagar Society', 'Bapunagar', 'Ahmedabad', 123589, '1997-09-08', 'Male', '451329.jpg', 'umang121@gmail.com', 7016467807, 9879314308, 'IT Department', '6', 'SSC', 'GSHEB', ' 2013', 60),
(146400307076, 'Harsh', 'Patel', 'Sureshbhai', 'Ben', '24/A New Nikita Park', 'SataDhar', 'Ahmedabad', 458960, '1997-03-07', 'Male', '256664.jpg', 'hrx@gmail.com', 7600109126, 9998410670, 'Computer Department', '6', 'SSC', 'GSHEB', ' 2013', 70);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_student_submissions`
--

CREATE TABLE `tbl_student_submissions` (
  `submission_id` int(11) NOT NULL,
  `enrollment_no` bigint(15) NOT NULL,
  `subject_name` varchar(50) NOT NULL,
  `subject_department` varchar(100) NOT NULL,
  `subject_sem` varchar(10) NOT NULL,
  `submission_work` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_student_submissions`
--

INSERT INTO `tbl_student_submissions` (`submission_id`, `enrollment_no`, `subject_name`, `subject_department`, `subject_sem`, `submission_work`) VALUES
(1, 146400307038, 'Advance Java Programming', 'Computer Department', '6', 'AJAVA Pra4.docx'),
(2, 146400307017, 'Mobile Copmuting and Developement', 'Computer Department', '6', 'practical2mcad.docx'),
(3, 146400307076, 'Network Management and Administation', 'Computer Department', '6', 'nma 1.docx'),
(4, 146400307017, 'Advance Java Programming', 'Computer Department', '6', 'Ajava Pra10.docx'),
(5, 146400307017, 'Advance Java Programming', 'Computer Department', '6', 'AJAVA Pra12 Output.docx');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_subjectmaster`
--

CREATE TABLE `tbl_subjectmaster` (
  `id` int(11) NOT NULL,
  `department` varchar(100) NOT NULL,
  `sem_name` varchar(50) NOT NULL,
  `subject_name` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_subjectmaster`
--

INSERT INTO `tbl_subjectmaster` (`id`, `department`, `sem_name`, `subject_name`) VALUES
(1, 'Computer Department', '6', 'AJAVA'),
(2, 'Computer Department', '6', 'NMA'),
(3, 'Computer Department', '6', 'MCAD');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_attendance`
--
ALTER TABLE `tbl_attendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_branchmaster`
--
ALTER TABLE `tbl_branchmaster`
  ADD PRIMARY KEY (`department_code`);

--
-- Indexes for table `tbl_exammaster`
--
ALTER TABLE `tbl_exammaster`
  ADD PRIMARY KEY (`exam_id`);

--
-- Indexes for table `tbl_examresults`
--
ALTER TABLE `tbl_examresults`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_examtimetable`
--
ALTER TABLE `tbl_examtimetable`
  ADD PRIMARY KEY (`exam_id`);

--
-- Indexes for table `tbl_faculty_add`
--
ALTER TABLE `tbl_faculty_add`
  ADD PRIMARY KEY (`facid`);

--
-- Indexes for table `tbl_login`
--
ALTER TABLE `tbl_login`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `tbl_notice`
--
ALTER TABLE `tbl_notice`
  ADD PRIMARY KEY (`notice_id`);

--
-- Indexes for table `tbl_registration`
--
ALTER TABLE `tbl_registration`
  ADD PRIMARY KEY (`reg_id`);

--
-- Indexes for table `tbl_semestermaster`
--
ALTER TABLE `tbl_semestermaster`
  ADD PRIMARY KEY (`sem_name`),
  ADD UNIQUE KEY `sem_id` (`sem_id`);

--
-- Indexes for table `tbl_student_admission`
--
ALTER TABLE `tbl_student_admission`
  ADD PRIMARY KEY (`enrollment_number`);

--
-- Indexes for table `tbl_student_submissions`
--
ALTER TABLE `tbl_student_submissions`
  ADD PRIMARY KEY (`submission_id`,`enrollment_no`);

--
-- Indexes for table `tbl_subjectmaster`
--
ALTER TABLE `tbl_subjectmaster`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_attendance`
--
ALTER TABLE `tbl_attendance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tbl_exammaster`
--
ALTER TABLE `tbl_exammaster`
  MODIFY `exam_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_examresults`
--
ALTER TABLE `tbl_examresults`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_examtimetable`
--
ALTER TABLE `tbl_examtimetable`
  MODIFY `exam_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_login`
--
ALTER TABLE `tbl_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_notice`
--
ALTER TABLE `tbl_notice`
  MODIFY `notice_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_registration`
--
ALTER TABLE `tbl_registration`
  MODIFY `reg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_semestermaster`
--
ALTER TABLE `tbl_semestermaster`
  MODIFY `sem_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_student_admission`
--
ALTER TABLE `tbl_student_admission`
  MODIFY `enrollment_number` bigint(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2147483647;
--
-- AUTO_INCREMENT for table `tbl_student_submissions`
--
ALTER TABLE `tbl_student_submissions`
  MODIFY `submission_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_subjectmaster`
--
ALTER TABLE `tbl_subjectmaster`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_login`
--
ALTER TABLE `tbl_login`
  ADD CONSTRAINT `tbl_login_ibfk_1` FOREIGN KEY (`id`) REFERENCES `tbl_registration` (`reg_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
