-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2018 at 05:55 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alijisclassrecord`
--

-- --------------------------------------------------------

--
-- Table structure for table `classrecord`
--

CREATE TABLE `classrecord` (
  `id_entry` int(255) NOT NULL,
  `lrn` varchar(255) NOT NULL,
  `student_name` varchar(255) NOT NULL,
  `student_mid` varchar(255) NOT NULL,
  `student_last` varchar(255) NOT NULL,
  `teacher_id` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `sub` varchar(255) NOT NULL,
  `sy` varchar(255) NOT NULL,
  `grade` varchar(255) NOT NULL,
  `sec` varchar(255) NOT NULL,
  `w1` int(255) NOT NULL,
  `w2` int(255) NOT NULL,
  `w3` int(255) NOT NULL,
  `w4` int(255) NOT NULL,
  `w5` int(255) NOT NULL,
  `w6` int(255) NOT NULL,
  `w7` int(255) NOT NULL,
  `w8` int(255) NOT NULL,
  `w9` int(255) NOT NULL,
  `w10` int(255) NOT NULL,
  `wPS` varchar(255) NOT NULL,
  `wWS` varchar(255) NOT NULL,
  `p1` int(255) NOT NULL,
  `p2` int(255) NOT NULL,
  `p3` int(255) NOT NULL,
  `p4` int(255) NOT NULL,
  `p5` int(255) NOT NULL,
  `p6` int(255) NOT NULL,
  `p7` int(255) NOT NULL,
  `p8` int(255) NOT NULL,
  `p9` int(255) NOT NULL,
  `p10` int(255) NOT NULL,
  `pPS` varchar(255) NOT NULL,
  `pWS` int(255) NOT NULL,
  `qa` int(255) NOT NULL,
  `qPS` varchar(255) NOT NULL,
  `qWS` varchar(255) NOT NULL,
  `IG` varchar(255) NOT NULL,
  `QG` varchar(255) NOT NULL,
  `quarter` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `classrecord`
--

INSERT INTO `classrecord` (`id_entry`, `lrn`, `student_name`, `student_mid`, `student_last`, `teacher_id`, `gender`, `sub`, `sy`, `grade`, `sec`, `w1`, `w2`, `w3`, `w4`, `w5`, `w6`, `w7`, `w8`, `w9`, `w10`, `wPS`, `wWS`, `p1`, `p2`, `p3`, `p4`, `p5`, `p6`, `p7`, `p8`, `p9`, `p10`, `pPS`, `pWS`, `qa`, `qPS`, `qWS`, `IG`, `QG`, `quarter`) VALUES
(3, '1', 'Earl', 'a', 'Earl', '1', 'Male', 'Aral Pan', '2017-2018', 'I', '1', 1, 5, 0, 0, 0, 0, 0, 0, 0, 0, '20.00', '6.00', 5, 8, 0, 0, 0, 0, 0, 0, 0, 0, '65.00', 33, 7, '70.00', '14.00', '53.00', '73', ''),
(4, '2', 'Thalia', 'b', 'Thalia', '1', 'Female', 'Aral Pan', '2017-2018', 'I', '1', 4, 8, 0, 0, 0, 0, 0, 0, 0, 0, '40.00', '12.00', 7, 7, 0, 0, 0, 0, 0, 0, 0, 0, '70.00', 35, 8, '80.00', '16.00', '63.00', '80', ''),
(5, '123', 'mae', 'a', 'mae', '2', 'Female', 'Math', '2017-2018', 'I', '1', 6, 0, 0, 0, 0, 0, 0, 0, 0, 0, '60.00', '18.00', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, 0, '', '', '', '', ''),
(6, '1234', 'john', 'a', 'mae', '2', 'Male', 'Math', '2017-2018', 'I', '1', 8, 0, 0, 0, 0, 0, 0, 0, 0, 0, '80.00', '24.00', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, 0, '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `enrollstudent`
--

CREATE TABLE `enrollstudent` (
  `enroll_id` int(10) NOT NULL,
  `lrn` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `subject_name` varchar(50) NOT NULL,
  `grade` varchar(10) NOT NULL,
  `section` int(10) NOT NULL,
  `sy` varchar(20) NOT NULL,
  `teacher_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enrollstudent`
--

INSERT INTO `enrollstudent` (`enroll_id`, `lrn`, `name`, `gender`, `subject_name`, `grade`, `section`, `sy`, `teacher_id`) VALUES
(50, 1000, 'Bethanie Cox', 'Female', 'Aral Pan', '1', 1, '2016-2017', 1),
(51, 1001, 'Jacque Cooley', 'Male', 'Aral Pan', '1', 1, '2016-2017', 1),
(52, 1002, 'Elwood Samuels', 'Female', 'Aral Pan', '1', 1, '2016-2017', 1),
(53, 1003, 'Marina Collier', 'Male', 'Aral Pan', '1', 1, '2016-2017', 1),
(54, 1004, 'Damian Conrad', 'Female', 'Aral Pan', '1', 1, '2016-2017', 1),
(55, 1005, 'Isaac Mckinney', 'Male', 'Aral Pan', '1', 1, '2016-2017', 1),
(56, 1006, 'Eshaan Hines', 'Female', 'Aral Pan', '1', 1, '2016-2017', 1),
(57, 1007, 'Haroon Leon', 'Male', 'Aral Pan', '1', 1, '2016-2017', 1),
(58, 1008, 'Monica Flower', 'Female', 'Math', '2', 1, '2016-2017', 1),
(59, 1009, 'Kerry Petersen', 'Male', 'Math', '2', 1, '2016-2017', 1),
(60, 1010, 'Wallace Rawlings', 'Female', 'Math', '2', 1, '2016-2017', 1),
(61, 1011, 'Mark Bowes', 'Male', 'Math', '2', 1, '2016-2017', 1),
(62, 1012, 'Ethan Lott', 'Female', 'Math', '2', 1, '2016-2017', 1),
(63, 1013, 'Beulah Bate', 'Male', 'Math', '2', 1, '2016-2017', 1),
(64, 1014, 'Taylan Medina', 'Female', 'Math', '2', 1, '2016-2017', 1),
(65, 1015, 'Hina Mcconnell', 'Male', 'Math', '2', 1, '2016-2017', 1),
(66, 1016, 'Zaina Donald', 'Female', 'English 101', '3', 1, '2016-2017', 1),
(67, 1017, 'Lena Derrick', 'Male', 'English 101', '3', 1, '2016-2017', 1),
(68, 1018, 'Jayden-Lee Riddle', 'Female', 'English 101', '3', 1, '2016-2017', 1),
(69, 1019, 'Damon Short', 'Male', 'English 101', '3', 1, '2016-2017', 1),
(70, 1020, 'Samira Zimmerman', 'Female', 'English 101', '3', 1, '2016-2017', 1),
(71, 1021, 'Bruno Hawes', 'Male', 'Science1001', '4', 1, '2016-2017', 1),
(72, 1022, 'Paloma Wu', 'Female', 'Science1001', '4', 1, '2016-2017', 1),
(73, 1023, 'Ava-Mai Santana', 'Male', 'Science1001', '4', 1, '2016-2017', 1),
(74, 1024, 'Bobbie Potts', 'Female', 'Science1001', '4', 1, '2016-2017', 1),
(75, 1025, 'Jac Mac', 'Male', 'Science1001', '4', 1, '2016-2017', 1),
(76, 1026, 'Heath Gutierrez', 'Female', 'Science1001', '4', 1, '2016-2017', 1),
(77, 1027, 'Tala Phelps', 'Male', 'Science1001', '4', 1, '2016-2017', 1),
(78, 1028, 'Donnell Goodman', 'Female', 'Science1001', '4', 1, '2016-2017', 1),
(79, 1029, 'Zion Mckenna', 'Male', 'Science1001', '4', 1, '2016-2017', 1),
(80, 1030, 'Krista Halliday', 'Female', 'Science1001', '4', 1, '2016-2017', 1),
(81, 1031, 'Eloisa Griffith', 'Male', 'REED4', '5', 1, '2016-2017', 1),
(82, 1032, 'Ashwin Roach', 'Female', 'REED4', '5', 1, '2016-2017', 1),
(83, 1033, 'Ariella Mahoney', 'Male', 'REED4', '5', 1, '2016-2017', 1),
(84, 1034, 'Asa Berry', 'Female', 'REED4', '5', 1, '2016-2017', 1),
(85, 1035, 'Meadow Lee', 'Male', 'REED4', '5', 1, '2016-2017', 1),
(86, 1036, 'Frankie Hutton', 'Female', 'REED4', '5', 1, '2016-2017', 1),
(87, 1037, 'Haroon Villegas', 'Male', 'SPECOM', '6', 1, '2016-2017', 1),
(88, 1038, 'Humairaa Hart', 'Female', 'SPECOM', '6', 1, '2016-2017', 1),
(89, 1039, 'Ricardo Berger', 'Male', 'SPECOM', '6', 1, '2016-2017', 1),
(90, 1040, 'Krystal Merritt', 'Female', 'SPECOM', '6', 1, '2016-2017', 1),
(91, 1041, 'Ivor Erickson', 'Male', 'SPECOM', '6', 1, '2016-2017', 1),
(92, 1042, 'Stanley Dyer', 'Female', 'SPECOM', '6', 1, '2016-2017', 1),
(93, 1043, 'Breanna Lozano', 'Male', 'SPECOM', '6', 1, '2016-2017', 1),
(94, 1044, 'Jana Rennie', 'Female', 'SPECOM', '6', 1, '2016-2017', 1),
(95, 1045, 'Mai Schultz', 'Male', 'SPECOM', '6', 1, '2016-2017', 1),
(96, 1046, 'Yaqub Whitehouse', 'Female', 'SPECOM', '6', 1, '2016-2017', 1),
(97, 1047, 'Eileen Pate', 'Female', 'Aral Pan', '1', 1, '2017-2018', 1),
(99, 1049, 'Anisha Sanders', 'Female', 'Aral Pan', '1', 1, '2017-2018', 1),
(100, 1050, 'Beatrice Beltran', 'Male', 'Aral Pan', '1', 1, '2017-2018', 1),
(101, 1051, 'Naomi Alfaro', 'Female', 'Math', '2', 1, '2017-2018', 1),
(102, 1052, 'Shyla Hughes', 'Male', 'Math', '2', 1, '2017-2018', 1),
(103, 1053, 'Kiefer Mendoza', 'Female', 'Math', '2', 1, '2017-2018', 1),
(104, 1054, 'Sarah-Jayne Thomas', 'Male', 'Math', '2', 1, '2017-2018', 1),
(105, 1055, 'Kaden Gordon', 'Female', 'Math', '2', 1, '2017-2018', 1),
(106, 1056, 'Ace Ward', 'Male', 'Math', '2', 1, '2017-2018', 1),
(107, 1057, 'Teegan Moss', 'Female', 'Math', '2', 1, '2017-2018', 1),
(108, 1058, 'Jedd Greer', 'Male', 'Math', '2', 1, '2017-2018', 1),
(109, 1059, 'Lucien Robin', 'Female', 'Math', '2', 1, '2017-2018', 1),
(110, 1060, 'Mercedes Bob', 'Male', 'Math', '2', 1, '2017-2018', 1),
(111, 1061, 'Jemma Riggs', 'Female', 'Math', '2', 1, '2017-2018', 1),
(112, 1062, 'Sebastien Holding', 'Male', 'Math', '2', 1, '2017-2018', 1),
(113, 1063, 'Kristie Mohamed', 'Female', 'English 101', '3', 1, '2017-2018', 1),
(114, 1064, 'Madelyn Wainwright', 'Male', 'English 101', '3', 1, '2017-2018', 1),
(115, 1065, 'Kelly Mcgregor', 'Female', 'English 101', '3', 1, '2017-2018', 1),
(116, 1066, 'Gerrard Connolly', 'Male', 'English 101', '3', 1, '2017-2018', 1),
(117, 1067, 'Stefan Davies', 'Female', 'English 101', '3', 1, '2017-2018', 1),
(118, 1068, 'Muhammed Witt', 'Male', 'English 101', '3', 1, '2017-2018', 1),
(119, 1069, 'Jim Neal', 'Female', 'English 101', '3', 1, '2017-2018', 1),
(120, 1070, 'Aras Haworth', 'Male', 'English 101', '3', 1, '2017-2018', 1),
(121, 1071, 'Amira Payne', 'Female', 'English 101', '3', 1, '2017-2018', 1),
(122, 1072, 'Esmee Cartwright', 'Male', 'Science1001', '4', 1, '2017-2018', 1),
(123, 1073, 'Lucy Conway', 'Female', 'Science1001', '4', 1, '2017-2018', 1),
(124, 1074, 'Erik Sexton', 'Male', 'Science1001', '4', 1, '2017-2018', 1),
(125, 1075, 'Moesha Schmitt', 'Female', 'Science1001', '4', 1, '2017-2018', 1),
(126, 1076, 'Anees Grant', 'Male', 'Science1001', '4', 1, '2017-2018', 1),
(127, 1077, 'Kendal Boyle', 'Female', 'Science1001', '4', 1, '2017-2018', 1),
(128, 1078, 'Dillan Mcdaniel', 'Male', 'REED4', '5', 1, '2017-2018', 1),
(129, 1079, 'Anas Ahmad', 'Female', 'REED4', '5', 1, '2017-2018', 1),
(130, 1080, 'Alan Crowther', 'Male', 'REED4', '5', 1, '2017-2018', 1),
(131, 1081, 'Layla-Mae Correa', 'Female', 'REED4', '5', 1, '2017-2018', 1),
(132, 1082, 'Lilian Li', 'Male', 'REED4', '5', 1, '2017-2018', 1),
(133, 1083, 'Hope Villalobos', 'Female', 'REED4', '5', 1, '2017-2018', 1),
(134, 1084, 'Malaikah Mackay', 'Male', 'REED4', '5', 1, '2017-2018', 1),
(135, 1085, 'Kalvin Rhodes', 'Female', 'REED4', '5', 1, '2017-2018', 1),
(136, 1086, 'Tea Byers', 'Male', 'REED4', '5', 1, '2017-2018', 1),
(137, 1087, 'Charlotte Burn', 'Female', 'REED4', '5', 1, '2017-2018', 1),
(138, 1088, 'Ellie-Louise Underwood', 'Male', 'REED4', '5', 1, '2017-2018', 1),
(139, 1089, 'Amara Hicks', 'Female', 'REED4', '5', 1, '2017-2018', 1),
(140, 1090, 'Betty Costa', 'Male', 'SPECOM', '6', 1, '2017-2018', 1),
(141, 1091, 'Madison Woods', 'Female', 'SPECOM', '6', 1, '2017-2018', 1),
(142, 1092, 'Gianluca Gilmour', 'Male', 'SPECOM', '6', 1, '2017-2018', 1),
(143, 1093, 'Pearl Church', 'Female', 'SPECOM', '6', 1, '2017-2018', 1),
(144, 1094, 'Ronny Whitaker', 'Female', 'Aral Pan', '1', 1, '2018-2019', 1),
(145, 1095, 'Riccardo Malone', 'Male', 'Aral Pan', '1', 1, '2018-2019', 1),
(146, 1096, 'Tayla Plummer', 'Female', 'Aral Pan', '1', 1, '2018-2019', 1),
(147, 1097, 'Nikolas Plant', 'Male', 'Aral Pan', '1', 1, '2018-2019', 1),
(148, 1098, 'Sufyan Pierce', 'Female', 'Aral Pan', '1', 1, '2018-2019', 1),
(149, 1099, 'Dilan Larson', 'Male', 'Aral Pan', '1', 1, '2018-2019', 1),
(151, 1101, 'Stacie Ventura', 'Male', 'Aral Pan', '1', 1, '2018-2019', 1),
(152, 1102, 'Emmanuel Dougherty', 'Female', 'Math', '2', 1, '2018-2019', 1),
(153, 1103, 'Lowri Dunn', 'Male', 'Math', '2', 1, '2018-2019', 1),
(154, 1104, 'Conall Bostock', 'Female', 'Math', '2', 1, '2018-2019', 1),
(155, 1105, 'Lorelai Carroll', 'Male', 'Math', '2', 1, '2018-2019', 1),
(156, 1106, 'Wesley Cooper', 'Female', 'Math', '2', 1, '2018-2019', 1),
(157, 1107, 'Harvey-Lee Hurst', 'Male', 'Math', '2', 1, '2018-2019', 1),
(158, 1108, 'Rachelle Richardson', 'Female', 'English 101', '3', 1, '2018-2019', 1),
(159, 1109, 'Afsana Singleton', 'Male', 'English 101', '3', 1, '2018-2019', 1),
(160, 1110, 'Mary Stubbs', 'Female', 'English 101', '3', 1, '2018-2019', 1),
(161, 1111, 'Maleeha Paul', 'Male', 'English 101', '3', 1, '2018-2019', 1),
(162, 1112, 'Leona Lennon', 'Female', 'English 101', '3', 1, '2018-2019', 1),
(163, 1113, 'Amman Baxter', 'Male', 'English 101', '3', 1, '2018-2019', 1),
(164, 1114, 'Ciaron Nolan', 'Female', 'English 101', '3', 1, '2018-2019', 1),
(165, 1115, 'Kelan Phillips', 'Male', 'English 101', '3', 1, '2018-2019', 1),
(166, 1116, 'May Buck', 'Female', 'Science1001', '4', 1, '2018-2019', 1),
(167, 1117, 'Keeva Kennedy', 'Male', 'Science1001', '4', 1, '2018-2019', 1),
(168, 1118, 'Suzanne Ochoa', 'Female', 'Science1001', '4', 1, '2018-2019', 1),
(169, 1119, 'Tasneem Sullivan', 'Male', 'Science1001', '4', 1, '2018-2019', 1),
(170, 1120, 'Brett Page', 'Female', 'Science1001', '4', 1, '2018-2019', 1),
(171, 1121, 'Hamzah Greene', 'Male', 'Science1001', '4', 1, '2018-2019', 1),
(172, 1122, 'Zackary Leech', 'Female', 'Science1001', '4', 1, '2018-2019', 1),
(173, 1123, 'Josephine Cullen', 'Male', 'Science1001', '4', 1, '2018-2019', 1),
(174, 1124, 'Hailie Person', 'Female', 'Science1001', '4', 1, '2018-2019', 1),
(175, 1125, 'Mitchel Thornton', 'Male', 'REED4', '5', 1, '2018-2019', 1),
(176, 1126, 'Athena Richmond', 'Female', 'REED4', '5', 1, '2018-2019', 1),
(177, 1127, 'Stan Nicholson', 'Male', 'REED4', '5', 1, '2018-2019', 1),
(178, 1128, 'Aleksandra Jenkins', 'Female', 'REED4', '5', 1, '2018-2019', 1),
(179, 1129, 'Charles Lawrence', 'Male', 'REED4', '5', 1, '2018-2019', 1),
(180, 1130, 'Sumayya O''Quinn', 'Female', 'REED4', '5', 1, '2018-2019', 1),
(181, 1131, 'Braden Bray', 'Male', 'REED4', '5', 1, '2018-2019', 1),
(182, 1132, 'Katelyn Bernal', 'Female', 'REED4', '5', 1, '2018-2019', 1),
(183, 1133, 'Kabir Mahoney', 'Male', 'SPECOM', '6', 1, '2018-2019', 1),
(184, 1134, 'Miriam Mccormack', 'Female', 'SPECOM', '6', 1, '2018-2019', 1),
(185, 1135, 'Rimsha Powell', 'Male', 'SPECOM', '6', 1, '2018-2019', 1),
(186, 1136, 'Arabella Booth', 'Female', 'SPECOM', '6', 1, '2018-2019', 1),
(187, 1137, 'Matylda Dowling', 'Male', 'SPECOM', '6', 1, '2018-2019', 1),
(188, 1138, 'Vincenzo Glover', 'Female', 'SPECOM', '6', 1, '2018-2019', 1),
(189, 1139, 'Rubie Winter', 'Male', 'SPECOM', '6', 1, '2018-2019', 1),
(190, 1140, 'Ravi Serrano', 'Female', 'SPECOM', '6', 1, '2018-2019', 1),
(234, 123123, 'Student ABC', 'Male', 'SPECOM', '4', 1, '2018-2019', 6),
(235, 42131231, 'Student BCA', 'Female', 'SPECOM', '4', 1, '2018-2019', 6),
(236, 1231321, 'Student CBA', 'Male', 'SPECOM', '4', 1, '2018-2019', 6),
(237, 12312312, 'StudentACB', 'Female', 'SPECOM', '4', 1, '2018-2019', 6),
(238, 231312, 'Student DCE', 'Male', 'REED4', '6', 2, '2018-2019', 4),
(239, 3131231, 'Student CDE', 'Female', 'REED4', '6', 2, '2018-2019', 4),
(240, 123131231, 'Student EDC', 'Male', 'REED4', '6', 2, '2018-2019', 4),
(241, 1231231, 'Student', 'Female', 'REED4', '6', 2, '2018-2019', 4),
(244, 321321, 'Sample', 'Male', 'English101', '5', 1, '2018-2019', 1),
(245, 313131, 'Sample Student', 'Female', 'English101', '5', 1, '2018-2019', 1);

-- --------------------------------------------------------

--
-- Table structure for table `highestpossiblescores`
--

CREATE TABLE `highestpossiblescores` (
  `id` int(10) NOT NULL,
  `teacher_id` int(10) NOT NULL,
  `subject_name` varchar(100) NOT NULL,
  `school_year` int(15) NOT NULL,
  `hpsw1` int(5) NOT NULL,
  `hpsw2` int(5) NOT NULL,
  `hpsw3` int(5) NOT NULL,
  `hpsw4` int(5) NOT NULL,
  `hpsw5` int(5) NOT NULL,
  `hpsw6` int(5) NOT NULL,
  `hpsw7` int(5) NOT NULL,
  `hpsw8` int(5) NOT NULL,
  `hpsw9` int(5) NOT NULL,
  `hpsw10` int(5) NOT NULL,
  `hpsp1` int(5) NOT NULL,
  `hpsp2` int(5) NOT NULL,
  `hpsp3` int(5) NOT NULL,
  `hpsp4` int(5) NOT NULL,
  `hpsp5` int(5) NOT NULL,
  `hpsp6` int(5) NOT NULL,
  `hpsp7` int(5) NOT NULL,
  `hpsp8` int(5) NOT NULL,
  `hpsp9` int(5) NOT NULL,
  `hpsp10` int(5) NOT NULL,
  `psqa` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `highestpossiblescores`
--

INSERT INTO `highestpossiblescores` (`id`, `teacher_id`, `subject_name`, `school_year`, `hpsw1`, `hpsw2`, `hpsw3`, `hpsw4`, `hpsw5`, `hpsw6`, `hpsw7`, `hpsw8`, `hpsw9`, `hpsw10`, `hpsp1`, `hpsp2`, `hpsp3`, `hpsp4`, `hpsp5`, `hpsp6`, `hpsp7`, `hpsp8`, `hpsp9`, `hpsp10`, `psqa`) VALUES
(2, 1, 'English101', 2018, 20, 10, 10, 10, 10, 10, 10, 2, 1, 0, 20, 5, 10, 0, 0, 0, 0, 0, 0, 0, '10');

-- --------------------------------------------------------

--
-- Table structure for table `schoolyear`
--

CREATE TABLE `schoolyear` (
  `entry_id` int(10) NOT NULL,
  `school_year` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schoolyear`
--

INSERT INTO `schoolyear` (`entry_id`, `school_year`) VALUES
(4, '2018-2019'),
(5, '2017-2018'),
(6, '2016-2017'),
(7, '2015-2016'),
(14, '2019-2020');

-- --------------------------------------------------------

--
-- Table structure for table `sub_assign`
--

CREATE TABLE `sub_assign` (
  `assign_id` int(100) NOT NULL,
  `teacher_id` int(10) NOT NULL,
  `teacher_name` varchar(100) NOT NULL,
  `subject_name` varchar(255) NOT NULL,
  `grade` varchar(10) NOT NULL,
  `section` varchar(10) NOT NULL,
  `sy` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_assign`
--

INSERT INTO `sub_assign` (`assign_id`, `teacher_id`, `teacher_name`, `subject_name`, `grade`, `section`, `sy`) VALUES
(62, 1, 'Alvins', 'English101', '5', '1', '2018-2019'),
(63, 6, 'Leonel', 'SPECOM', '4', '1', '2018-2019'),
(64, 4, 'Steven', 'REED4', '6', '2', '2018-2019');

-- --------------------------------------------------------

--
-- Table structure for table `tblprincipal`
--

CREATE TABLE `tblprincipal` (
  `principal_id` int(100) NOT NULL,
  `principal_name` varchar(100) NOT NULL,
  `principal_designation` varchar(100) NOT NULL,
  `principal_years` varchar(100) NOT NULL,
  `principal_teacher` int(100) NOT NULL,
  `registration_status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblprincipal`
--

INSERT INTO `tblprincipal` (`principal_id`, `principal_name`, `principal_designation`, `principal_years`, `principal_teacher`, `registration_status`) VALUES
(36, 'Test Principal', 'Principal 3', '2015-2016', 400, 'Registered'),
(39, 'Alson John Bayon-on', 'Principal2', '2010-2011,2011-2012,', 20, 'Unregister');

-- --------------------------------------------------------

--
-- Table structure for table `tblsubjects`
--

CREATE TABLE `tblsubjects` (
  `subject_id` int(10) NOT NULL,
  `subject_name` varchar(100) NOT NULL,
  `subject_room` varchar(50) NOT NULL,
  `subject_schedule` varchar(50) NOT NULL,
  `subject_grade` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblsubjects`
--

INSERT INTO `tblsubjects` (`subject_id`, `subject_name`, `subject_room`, `subject_schedule`, `subject_grade`) VALUES
(2, 'Aral Pan', 'LC201', '8:30=9:30', 'Grade 1'),
(3, 'Math', 'SEL02', '8:30=9:30', 'Grade 2'),
(4, 'English101', 'SEL03', '10:00-11:00', 'Grade 3'),
(5, 'Science1001', 'SEL04', '11:00-12:00', 'Grade 4'),
(6, 'REED4', 'SEL05', '1:00-2:00', 'Grade 5'),
(7, 'SPECOM', 'SEL06', '2:00-3:00', 'Grade 6'),
(8, 'PARCORS', 'LC211', '7:30-8:30', 'Grade 1');

-- --------------------------------------------------------

--
-- Table structure for table `tblteacher`
--

CREATE TABLE `tblteacher` (
  `teacher_id` int(100) NOT NULL,
  `teacher_name` varchar(100) NOT NULL,
  `teacher_mid` varchar(100) NOT NULL,
  `teacher_last` varchar(100) NOT NULL,
  `teacher_bday` varchar(100) NOT NULL,
  `teacher_tin` varchar(100) NOT NULL,
  `teacher_position` varchar(100) NOT NULL,
  `teacher_plantilla` int(100) NOT NULL,
  `teacher_bp` int(100) NOT NULL,
  `teacher_attainment` varchar(100) NOT NULL,
  `registration_status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblteacher`
--

INSERT INTO `tblteacher` (`teacher_id`, `teacher_name`, `teacher_mid`, `teacher_last`, `teacher_bday`, `teacher_tin`, `teacher_position`, `teacher_plantilla`, `teacher_bp`, `teacher_attainment`, `registration_status`) VALUES
(1, 'Alvins', 'L', 'Yanson', 'July 30, 1996', '1009169696', 'Guidance', 10010, 69696969, 'MAED', 'Registered'),
(3, 'Alson John R. Bayon-on', '', '', '2018-06-06', '10012', 'Guidance Counselor', 10021, 1010121, 'MAED', 'Registered'),
(4, 'Steven', 'S', 'Saludares', 'May 28, 2018', '31-2312321', 'Adviser', 231231, 1231231, 'MAED', 'Registered'),
(5, 'Keir', 'S', 'Velez', 'June 03, 2018', '12-3124234', 'Adviser', 231231, 3213, 'MAED', 'Registered'),
(6, 'Leonel', 'C', 'Entes', 'June 03, 2018', '31-2321312', 'Adviser', 1232131, 131231, 'PhD', 'Registered'),
(7, 'Mark', 'S', 'Sombilla', 'June 03, 2018', '12-3123131', 'Adviser', 31231, 31231231, 'PhD', 'Registered');

-- --------------------------------------------------------

--
-- Table structure for table `tbluser`
--

CREATE TABLE `tbluser` (
  `register_id` int(50) NOT NULL,
  `user_id` int(10) NOT NULL,
  `user_username` varchar(100) NOT NULL,
  `user_password` varchar(100) NOT NULL,
  `user_role` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbluser`
--

INSERT INTO `tbluser` (`register_id`, `user_id`, `user_username`, `user_password`, `user_role`) VALUES
(8, 3, 'alsons', 'password123', 'Teacher'),
(14, 1, 'alvinr', 'password789', 'Teacher'),
(18, 35, 'iamprincipal', 'iamprincipal', 'Principal'),
(19, 36, 'sample', 'sample', 'Principal'),
(20, 4, 'steven', 'steven', 'Teacher'),
(21, 5, 'keirve', 'keirve', 'Teacher'),
(22, 6, 'leonel', 'leonel', 'Teacher'),
(23, 7, 'markso', 'markso', 'Teacher');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `score` varchar(100) NOT NULL,
  `teacher_id` int(10) NOT NULL,
  `subject_name` varchar(100) NOT NULL,
  `school_year` varchar(20) NOT NULL,
  `written_num` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`id`, `name`, `score`, `teacher_id`, `subject_name`, `school_year`, `written_num`) VALUES
(1511, 'Student ABC', '15', 6, 'SPECOM', '2018-2019', 'w1'),
(1512, 'Student CBA', '15', 6, 'SPECOM', '2018-2019', 'w1'),
(1513, 'Student ABC', '', 6, 'SPECOM', '2018-2019', 'w2'),
(1514, 'Student CBA', '', 6, 'SPECOM', '2018-2019', 'w2'),
(1515, 'Student ABC', '', 6, 'SPECOM', '2018-2019', 'w3'),
(1516, 'Student CBA', '', 6, 'SPECOM', '2018-2019', 'w3'),
(1517, 'Student ABC', '', 6, 'SPECOM', '2018-2019', 'w4'),
(1518, 'Student CBA', '', 6, 'SPECOM', '2018-2019', 'w4'),
(1519, 'Student ABC', '', 6, 'SPECOM', '2018-2019', 'w5'),
(1520, 'Student CBA', '', 6, 'SPECOM', '2018-2019', 'w5'),
(1521, 'Student ABC', '', 6, 'SPECOM', '2018-2019', 'w6'),
(1522, 'Student CBA', '', 6, 'SPECOM', '2018-2019', 'w6'),
(1523, 'Student ABC', '', 6, 'SPECOM', '2018-2019', 'w7'),
(1524, 'Student CBA', '', 6, 'SPECOM', '2018-2019', 'w7'),
(1525, 'Student ABC', '', 6, 'SPECOM', '2018-2019', 'w8'),
(1526, 'Student CBA', '', 6, 'SPECOM', '2018-2019', 'w8'),
(1527, 'Student ABC', '', 6, 'SPECOM', '2018-2019', 'w9'),
(1528, 'Student CBA', '', 6, 'SPECOM', '2018-2019', 'w9'),
(1529, 'Student ABC', '', 6, 'SPECOM', '2018-2019', 'w10'),
(1530, 'Student CBA', '', 6, 'SPECOM', '2018-2019', 'w10'),
(1531, 'Student BCA', '15', 6, 'SPECOM', '2018-2019', 'gw1'),
(1532, 'StudentACB', '15', 6, 'SPECOM', '2018-2019', 'gw1'),
(1533, 'Student BCA', '', 6, 'SPECOM', '2018-2019', 'gw2'),
(1534, 'StudentACB', '', 6, 'SPECOM', '2018-2019', 'gw2'),
(1535, 'Student BCA', '', 6, 'SPECOM', '2018-2019', 'gw3'),
(1536, 'StudentACB', '', 6, 'SPECOM', '2018-2019', 'gw3'),
(1537, 'Student BCA', '', 6, 'SPECOM', '2018-2019', 'gw4'),
(1538, 'StudentACB', '', 6, 'SPECOM', '2018-2019', 'gw4'),
(1539, 'Student BCA', '', 6, 'SPECOM', '2018-2019', 'gw5'),
(1540, 'StudentACB', '', 6, 'SPECOM', '2018-2019', 'gw5'),
(1541, 'Student BCA', '', 6, 'SPECOM', '2018-2019', 'gw6'),
(1542, 'StudentACB', '', 6, 'SPECOM', '2018-2019', 'gw6'),
(1543, 'Student BCA', '', 6, 'SPECOM', '2018-2019', 'gw7'),
(1544, 'StudentACB', '', 6, 'SPECOM', '2018-2019', 'gw7'),
(1545, 'Student BCA', '', 6, 'SPECOM', '2018-2019', 'gw8'),
(1546, 'StudentACB', '', 6, 'SPECOM', '2018-2019', 'gw8'),
(1547, 'Student BCA', '', 6, 'SPECOM', '2018-2019', 'gw9'),
(1548, 'StudentACB', '', 6, 'SPECOM', '2018-2019', 'gw9'),
(1549, 'Student BCA', '', 6, 'SPECOM', '2018-2019', 'gw10'),
(1550, 'StudentACB', '', 6, 'SPECOM', '2018-2019', 'gw10'),
(1551, 'Student ABC', '', 6, 'SPECOM', '2018-2019', 'pt1'),
(1552, 'Student CBA', '', 6, 'SPECOM', '2018-2019', 'pt1'),
(1553, 'Student ABC', '', 6, 'SPECOM', '2018-2019', 'pt2'),
(1554, 'Student CBA', '', 6, 'SPECOM', '2018-2019', 'pt2'),
(1555, 'Student ABC', '', 6, 'SPECOM', '2018-2019', 'pt3'),
(1556, 'Student CBA', '', 6, 'SPECOM', '2018-2019', 'pt3'),
(1557, 'Student ABC', '', 6, 'SPECOM', '2018-2019', 'pt4'),
(1558, 'Student CBA', '', 6, 'SPECOM', '2018-2019', 'pt4'),
(1559, 'Student ABC', '', 6, 'SPECOM', '2018-2019', 'pt5'),
(1560, 'Student CBA', '', 6, 'SPECOM', '2018-2019', 'pt5'),
(1561, 'Student ABC', '', 6, 'SPECOM', '2018-2019', 'pt6'),
(1562, 'Student CBA', '', 6, 'SPECOM', '2018-2019', 'pt6'),
(1563, 'Student ABC', '', 6, 'SPECOM', '2018-2019', 'pt7'),
(1564, 'Student CBA', '', 6, 'SPECOM', '2018-2019', 'pt7'),
(1565, 'Student ABC', '', 6, 'SPECOM', '2018-2019', 'pt8'),
(1566, 'Student CBA', '', 6, 'SPECOM', '2018-2019', 'pt8'),
(1567, 'Student ABC', '', 6, 'SPECOM', '2018-2019', 'pt9'),
(1568, 'Student CBA', '', 6, 'SPECOM', '2018-2019', 'pt9'),
(1569, 'Student ABC', '', 6, 'SPECOM', '2018-2019', 'pt10'),
(1570, 'Student CBA', '', 6, 'SPECOM', '2018-2019', 'pt10'),
(1571, 'Student BCA', '', 6, 'SPECOM', '2018-2019', 'gpt1'),
(1572, 'StudentACB', '', 6, 'SPECOM', '2018-2019', 'gpt1'),
(1573, 'Student BCA', '', 6, 'SPECOM', '2018-2019', 'gpt2'),
(1574, 'StudentACB', '', 6, 'SPECOM', '2018-2019', 'gpt2'),
(1575, 'Student BCA', '', 6, 'SPECOM', '2018-2019', 'gpt3'),
(1576, 'StudentACB', '', 6, 'SPECOM', '2018-2019', 'gpt3'),
(1577, 'Student BCA', '', 6, 'SPECOM', '2018-2019', 'gpt4'),
(1578, 'StudentACB', '', 6, 'SPECOM', '2018-2019', 'gpt4'),
(1579, 'Student BCA', '', 6, 'SPECOM', '2018-2019', 'gpt5'),
(1580, 'StudentACB', '', 6, 'SPECOM', '2018-2019', 'gpt5'),
(1581, 'Student BCA', '', 6, 'SPECOM', '2018-2019', 'gpt6'),
(1582, 'StudentACB', '', 6, 'SPECOM', '2018-2019', 'gpt6'),
(1583, 'Student BCA', '', 6, 'SPECOM', '2018-2019', 'gpt7'),
(1584, 'StudentACB', '', 6, 'SPECOM', '2018-2019', 'gpt7'),
(1585, 'Student BCA', '', 6, 'SPECOM', '2018-2019', 'gpt8'),
(1586, 'StudentACB', '', 6, 'SPECOM', '2018-2019', 'gpt8'),
(1587, 'Student BCA', '', 6, 'SPECOM', '2018-2019', 'gpt9'),
(1588, 'StudentACB', '', 6, 'SPECOM', '2018-2019', 'gpt9'),
(1589, 'Student BCA', '', 6, 'SPECOM', '2018-2019', 'gpt10'),
(1590, 'StudentACB', '', 6, 'SPECOM', '2018-2019', 'gpt10'),
(1591, 'Student BCE', '10', 1, 'English101', '2018-2019', 'w1'),
(1592, 'Student BCE', '', 1, 'English101', '2018-2019', 'w2'),
(1593, 'Student BCE', '', 1, 'English101', '2018-2019', 'w3'),
(1594, 'Student BCE', '', 1, 'English101', '2018-2019', 'w4'),
(1595, 'Student BCE', '', 1, 'English101', '2018-2019', 'w5'),
(1596, 'Student BCE', '', 1, 'English101', '2018-2019', 'w6'),
(1597, 'Student BCE', '', 1, 'English101', '2018-2019', 'w7'),
(1598, 'Student BCE', '', 1, 'English101', '2018-2019', 'w8'),
(1599, 'Student BCE', '', 1, 'English101', '2018-2019', 'w9'),
(1600, 'Student BCE', '', 1, 'English101', '2018-2019', 'w10'),
(1601, 'Student BCE', '10', 1, 'English101', '2018-2019', 'qa1'),
(1602, 'Student BCE', '10', 1, 'English101', '2018-2019', 'pt1'),
(1603, 'Student BCE', '5', 1, 'English101', '2018-2019', 'pt2'),
(1604, 'Student BCE', '10', 1, 'English101', '2018-2019', 'pt3'),
(1605, 'Student BCE', '', 1, 'English101', '2018-2019', 'pt4'),
(1606, 'Student BCE', '', 1, 'English101', '2018-2019', 'pt5'),
(1607, 'Student BCE', '', 1, 'English101', '2018-2019', 'pt6'),
(1608, 'Student BCE', '', 1, 'English101', '2018-2019', 'pt7'),
(1609, 'Student BCE', '', 1, 'English101', '2018-2019', 'pt8'),
(1610, 'Student BCE', '', 1, 'English101', '2018-2019', 'pt9'),
(1611, 'Student BCE', '', 1, 'English101', '2018-2019', 'pt10'),
(1612, 'Student ECB', '10', 1, 'English101', '2018-2019', 'gw1'),
(1613, 'Student ECB', '', 1, 'English101', '2018-2019', 'gw2'),
(1614, 'Student ECB', '', 1, 'English101', '2018-2019', 'gw3'),
(1615, 'Student ECB', '', 1, 'English101', '2018-2019', 'gw4'),
(1616, 'Student ECB', '', 1, 'English101', '2018-2019', 'gw5'),
(1617, 'Student ECB', '', 1, 'English101', '2018-2019', 'gw6'),
(1618, 'Student ECB', '', 1, 'English101', '2018-2019', 'gw7'),
(1619, 'Student ECB', '', 1, 'English101', '2018-2019', 'gw8'),
(1620, 'Student ECB', '', 1, 'English101', '2018-2019', 'gw9'),
(1621, 'Student ECB', '', 1, 'English101', '2018-2019', 'gw10'),
(1622, 'Student ECB', '10', 1, 'English101', '2018-2019', 'gqa1'),
(1623, 'Student ECB', '10', 1, 'English101', '2018-2019', 'gpt1'),
(1624, 'Student ECB', '5', 1, 'English101', '2018-2019', 'gpt2'),
(1625, 'Student ECB', '10', 1, 'English101', '2018-2019', 'gpt3'),
(1626, 'Student ECB', '', 1, 'English101', '2018-2019', 'gpt4'),
(1627, 'Student ECB', '', 1, 'English101', '2018-2019', 'gpt5'),
(1628, 'Student ECB', '', 1, 'English101', '2018-2019', 'gpt6'),
(1629, 'Student ECB', '', 1, 'English101', '2018-2019', 'gpt7'),
(1630, 'Student ECB', '', 1, 'English101', '2018-2019', 'gpt8'),
(1631, 'Student ECB', '', 1, 'English101', '2018-2019', 'gpt9'),
(1632, 'Student ECB', '', 1, 'English101', '2018-2019', 'gpt10'),
(1633, 'Sample', '7', 1, 'English101', '2018-2019', 'w1'),
(1634, 'Sample', '5', 1, 'English101', '2018-2019', 'w2'),
(1635, 'Sample', '10', 1, 'English101', '2018-2019', 'w3'),
(1636, 'Sample', '10', 1, 'English101', '2018-2019', 'w4'),
(1637, 'Sample', '10', 1, 'English101', '2018-2019', 'w5'),
(1638, 'Sample', '10', 1, 'English101', '2018-2019', 'w6'),
(1639, 'Sample', '5', 1, 'English101', '2018-2019', 'w7'),
(1640, 'Sample', '1', 1, 'English101', '2018-2019', 'w8'),
(1641, 'Sample', '1', 1, 'English101', '2018-2019', 'w9'),
(1642, 'Sample', '', 1, 'English101', '2018-2019', 'w10'),
(1643, 'Sample', '10', 1, 'English101', '2018-2019', 'qa1'),
(1644, 'Sample Student', '10', 1, 'English101', '2018-2019', 'gw1'),
(1645, 'Sample Student', '10', 1, 'English101', '2018-2019', 'gw2'),
(1646, 'Sample Student', '10', 1, 'English101', '2018-2019', 'gw3'),
(1647, 'Sample Student', '10', 1, 'English101', '2018-2019', 'gw4'),
(1648, 'Sample Student', '10', 1, 'English101', '2018-2019', 'gw5'),
(1649, 'Sample Student', '10', 1, 'English101', '2018-2019', 'gw6'),
(1650, 'Sample Student', '5', 1, 'English101', '2018-2019', 'gw7'),
(1651, 'Sample Student', '1', 1, 'English101', '2018-2019', 'gw8'),
(1652, 'Sample Student', '1', 1, 'English101', '2018-2019', 'gw9'),
(1653, 'Sample Student', '', 1, 'English101', '2018-2019', 'gw10'),
(1654, 'Sample Student', '10', 1, 'English101', '2018-2019', 'gqa1'),
(1655, 'Sample', '10', 1, 'English101', '2018-2019', 'pt1'),
(1656, 'Sample', '5', 1, 'English101', '2018-2019', 'pt2'),
(1657, 'Sample', '', 1, 'English101', '2018-2019', 'pt3'),
(1658, 'Sample', '', 1, 'English101', '2018-2019', 'pt4'),
(1659, 'Sample', '', 1, 'English101', '2018-2019', 'pt5'),
(1660, 'Sample', '', 1, 'English101', '2018-2019', 'pt6'),
(1661, 'Sample', '', 1, 'English101', '2018-2019', 'pt7'),
(1662, 'Sample', '', 1, 'English101', '2018-2019', 'pt8'),
(1663, 'Sample', '', 1, 'English101', '2018-2019', 'pt9'),
(1664, 'Sample', '', 1, 'English101', '2018-2019', 'pt10'),
(1665, 'Sample Student', '10', 1, 'English101', '2018-2019', 'gpt1'),
(1666, 'Sample Student', '5', 1, 'English101', '2018-2019', 'gpt2'),
(1667, 'Sample Student', '', 1, 'English101', '2018-2019', 'gpt3'),
(1668, 'Sample Student', '', 1, 'English101', '2018-2019', 'gpt4'),
(1669, 'Sample Student', '', 1, 'English101', '2018-2019', 'gpt5'),
(1670, 'Sample Student', '', 1, 'English101', '2018-2019', 'gpt6'),
(1671, 'Sample Student', '', 1, 'English101', '2018-2019', 'gpt7'),
(1672, 'Sample Student', '', 1, 'English101', '2018-2019', 'gpt8'),
(1673, 'Sample Student', '', 1, 'English101', '2018-2019', 'gpt9'),
(1674, 'Sample Student', '', 1, 'English101', '2018-2019', 'gpt10');

-- --------------------------------------------------------

--
-- Table structure for table `writtenworks`
--

CREATE TABLE `writtenworks` (
  `entry_id` int(10) NOT NULL,
  `highest_score` varchar(10) NOT NULL,
  `number` varchar(10) NOT NULL,
  `teacher_id` varchar(10) NOT NULL,
  `subject_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `writtenworks`
--

INSERT INTO `writtenworks` (`entry_id`, `highest_score`, `number`, `teacher_id`, `subject_name`) VALUES
(11, '10', '1', '1', 'Math');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `classrecord`
--
ALTER TABLE `classrecord`
  ADD PRIMARY KEY (`id_entry`);

--
-- Indexes for table `enrollstudent`
--
ALTER TABLE `enrollstudent`
  ADD PRIMARY KEY (`enroll_id`);

--
-- Indexes for table `highestpossiblescores`
--
ALTER TABLE `highestpossiblescores`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schoolyear`
--
ALTER TABLE `schoolyear`
  ADD PRIMARY KEY (`entry_id`);

--
-- Indexes for table `sub_assign`
--
ALTER TABLE `sub_assign`
  ADD PRIMARY KEY (`assign_id`);

--
-- Indexes for table `tblprincipal`
--
ALTER TABLE `tblprincipal`
  ADD PRIMARY KEY (`principal_id`);

--
-- Indexes for table `tblsubjects`
--
ALTER TABLE `tblsubjects`
  ADD PRIMARY KEY (`subject_id`);

--
-- Indexes for table `tblteacher`
--
ALTER TABLE `tblteacher`
  ADD PRIMARY KEY (`teacher_id`);

--
-- Indexes for table `tbluser`
--
ALTER TABLE `tbluser`
  ADD PRIMARY KEY (`register_id`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `writtenworks`
--
ALTER TABLE `writtenworks`
  ADD PRIMARY KEY (`entry_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `classrecord`
--
ALTER TABLE `classrecord`
  MODIFY `id_entry` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `enrollstudent`
--
ALTER TABLE `enrollstudent`
  MODIFY `enroll_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=246;
--
-- AUTO_INCREMENT for table `highestpossiblescores`
--
ALTER TABLE `highestpossiblescores`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `schoolyear`
--
ALTER TABLE `schoolyear`
  MODIFY `entry_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `sub_assign`
--
ALTER TABLE `sub_assign`
  MODIFY `assign_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;
--
-- AUTO_INCREMENT for table `tblprincipal`
--
ALTER TABLE `tblprincipal`
  MODIFY `principal_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT for table `tblsubjects`
--
ALTER TABLE `tblsubjects`
  MODIFY `subject_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tblteacher`
--
ALTER TABLE `tblteacher`
  MODIFY `teacher_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tbluser`
--
ALTER TABLE `tbluser`
  MODIFY `register_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1675;
--
-- AUTO_INCREMENT for table `writtenworks`
--
ALTER TABLE `writtenworks`
  MODIFY `entry_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
