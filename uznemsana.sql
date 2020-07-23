-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Jul 17, 2020 at 06:23 AM
-- Server version: 8.0.18
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
-- Database: `uznemsana`
--

-- --------------------------------------------------------

--
-- Table structure for table `part`
--

DROP TABLE IF EXISTS `part`;
CREATE TABLE IF NOT EXISTS `part` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `classification` varchar(255) DEFAULT NULL,
  `part_title` varchar(255) DEFAULT NULL,
  `part_code` varchar(45) DEFAULT NULL,
  `note` text NOT NULL,
  `created_at` timestamp(6) NOT NULL,
  `updated_at` timestamp(6) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=48 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `part`
--

INSERT INTO `part` (`id`, `classification`, `part_title`, `part_code`, `note`, `created_at`, `updated_at`) VALUES
(1, 'Materiālu ķīmijas tehniķis', 'Ķīmijas tehnoloģijas                   ', 'S-', '[pēc 9. klases]', '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000'),
(2, 'Koka izstrādājumu ražošanas tehniķis', 'Kokizstrādājumu izgatavošana  ', 'KT-', '[pēc 9. klases]', '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000'),
(3, 'Datorizētu kokapstrādes iekārtu operators', 'Kokizstrādājumu izgatavošana', 'KD-', '[pēc 9. klases]', '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000'),
(4, 'Poligrāfijas ražošanas tehniķis', 'Poligrāfijas ražošanas tehnoloģijas un izstrādājumu izgatavošana', 'PRT-', '[pēc 9. klases]', '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000'),
(5, 'Poligrāfijas\niekārtu tehniķis', 'Poligrāfija un izdevējdarbība', 'PIT-', '[pēc 9. klases]', '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000'),
(6, 'Poligrāfijas ražošanas tehniķis', 'Poligrāfijas ražošanas tehnoloģijas un izstrādājumu izgatavošana', 'VPRT-', '[pēc 12. klases]', '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000'),
(7, 'Poligrāfijas\niekārtu tehniķis', 'Poligrāfija un izdevējdarbība', 'VPIT-', '[pēc 12. klases]', '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000'),
(8, 'Digitālās drukas operators', 'Poligrāfija un izdevējdarbība', 'VDD-', '[pēc 12. klases]', '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000'),
(9, 'Iespieddarbu noformējuma tehniķis', 'Poligrāfija un izdevējdarbība', 'N-', '[pēc 9. klases]', '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000'),
(10, 'Digitālās drukas operators', 'Poligrāfija un izdevējdarbība', 'DD-', '[pēc 9. klases]', '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000'),
(11, 'Klientu apkalpošanas speciālists', 'Administratīvie un sekretāra pakalpojumi', 'B-', '[pēc 9. klases]', '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000'),
(12, 'Klientu apkalpošanas speciālists', 'Administratīvie un sekretāra pakalpojumi', 'VB-', '[pēc 12. klases]', '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000'),
(13, 'Lietvedis', 'Administratīvie un sekretāra pakalpojumi', 'VL-', '[pēc 12. klases]', '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000'),
(14, 'Būvizstrādājumu galdnieks', 'Kokizstrādājumu izgatavošana ', 'BG-', '[pēc 9. klases]', '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000'),
(15, 'Mēbeļu galdnieks ', 'Kokizstrādājumu izgatavošana  ', 'MG-', '[pēc 9. klases]', '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000'),
(16, 'Datorsistēmu tehniķis', 'Datorsistēmas, datu bāzes un datortīkli ', 'DT-', '[pēc 9. klases]', '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000'),
(17, 'Programmēšanas tehniķis', 'Programmēšana', 'DP-', '[pēc 9. klases]', '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000'),
(18, 'Mašīnbūves tehniķis', 'Inženiermehānika, mehānika un mašīnbūves tehnoloģija', 'M-', '[pēc 9. klases]', '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000'),
(19, 'Automehāniķis', 'Autotransports', 'A-', '[pēc 9. klases]', '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000'),
(20, 'Automehāniķis', 'Autotransports ', 'VA-', '[pēc 12. klases]', '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000'),
(21, 'Autovirsbūvju remontatslēdznieks', 'Autotransports', 'VAV-', '[pēc 12. klases]', '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000'),
(22, 'Transportlīdzekļu krāsotājs', 'Autotransports ', 'ATK-', '[pēc 9. klases]', '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000'),
(23, 'Autovirsbūvju remontatslēdznieks', 'Autotransports', 'AV-', '[pēc 9. klases]', '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000'),
(24, 'Loģistikas darbinieks', 'Telemehānika un loģistika', 'GL-', '[pēc 9. klases]', '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000'),
(25, 'Grāmatvedis', 'Grāmatvedība', 'G-', '[pēc 9. klases]', '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000'),
(26, 'Elektrotehniķis', 'Enerģētika un elektrotehnika', 'ET-', '[pēc 9. klases]', '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000'),
(27, 'Elektrotehniķis', 'Enerģētika un elektrotehnika', 'VET-', '[pēc 12. klases]', '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000'),
(28, 'Dzelzceļa transporta automātikas, telemehānikas un sakaru tehniķis', 'Dzelzceļa pakalpojumi  ', 'TA-', '[pēc 9. klases]', '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000'),
(29, 'Dzelzceļa transporta pārvadājumu organizācijas un kustības drošības tehniķis', 'Dzelzceļa pakalpojumi  ', 'TP-', '[pēc 9. klases]', '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000'),
(30, 'Lokomotīvju saimniecības tehniķis', 'Dzelzceļa transports ', 'L-', '[pēc 9. klases]', '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000'),
(31, 'Reklāmas pakalpojumu komercdarbinikes ', 'Komerczinības', 'GK-', '[pēc 9. klases]', '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000'),
(32, 'Atjaunojamās enerģētikas tehniķis', 'Enerģētika un elektrotehnika', 'EA-', '[pēc 9. klases]', '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000'),
(46, 'Transformers', 'Autobots', 'TA-', 'roboti', '2020-06-29 08:22:40.000000', '2020-06-29 08:22:40.000000');

-- --------------------------------------------------------

--
-- Table structure for table `rvtgroup`
--

DROP TABLE IF EXISTS `rvtgroup`;
CREATE TABLE IF NOT EXISTS `rvtgroup` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `groupName` varchar(100) NOT NULL,
  `partID` int(11) NOT NULL,
  `created_at` timestamp(6) NOT NULL,
  `updated_at` timestamp(6) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=46 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rvtgroup`
--

INSERT INTO `rvtgroup` (`id`, `groupName`, `partID`, `created_at`, `updated_at`) VALUES
(16, 'S1', 1, '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000'),
(17, 'K1-1', 2, '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000'),
(18, 'O1', 3, '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000'),
(19, 'PT1', 4, '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000'),
(20, 'B1', 5, '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000'),
(21, 'D1-4', 6, '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000'),
(22, 'D1-5', 6, '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000'),
(23, 'D1-3', 7, '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000'),
(24, 'D1-2', 7, '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000'),
(25, 'D1-1', 7, '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000'),
(26, 'M1', 8, '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000'),
(27, 'A1-1', 9, '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000'),
(28, 'A1-2', 9, '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000'),
(29, 'A1-3', 9, '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000'),
(30, 'GL1-1', 10, '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000'),
(31, 'GL1-2', 10, '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000'),
(32, 'G1', 11, '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000'),
(33, 'E1-1', 12, '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000'),
(34, 'E1-2', 12, '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000'),
(35, 'TA1', 13, '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000'),
(36, 'TP1', 14, '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000'),
(37, 'L1', 15, '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000'),
(38, 'GK1-1', 16, '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000'),
(39, 'N1', 18, '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
CREATE TABLE IF NOT EXISTS `student` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `s_name` varchar(255) DEFAULT NULL,
  `s_surname` varchar(255) DEFAULT NULL,
  `s_personalcode` varchar(255) DEFAULT NULL,
  `s_address` varchar(255) DEFAULT NULL,
  `s_mobile` varchar(255) DEFAULT NULL,
  `s_email` varchar(255) DEFAULT NULL,
  `s_education` varchar(255) DEFAULT NULL,
  `s_school` varchar(255) DEFAULT NULL,
  `s_year` varchar(11) DEFAULT NULL,
  `slang` varchar(255) DEFAULT NULL,
  `s_endmarks4` int(11) DEFAULT NULL,
  `s_endmarks1` int(11) DEFAULT NULL,
  `s_endmarks2` int(11) DEFAULT NULL,
  `s_endmarks6` int(11) DEFAULT NULL,
  `s_endmarks7` int(11) DEFAULT NULL,
  `s_endmarks3` int(255) DEFAULT NULL,
  `avgMark` decimal(11,2) NOT NULL,
  `s_mother1` varchar(255) DEFAULT NULL,
  `s_mother2` varchar(255) DEFAULT NULL,
  `s_mother3` varchar(255) DEFAULT NULL,
  `s_mother4` varchar(255) DEFAULT NULL,
  `s_father1` varchar(255) DEFAULT NULL,
  `s_father2` varchar(255) DEFAULT NULL,
  `s_father3` varchar(255) DEFAULT NULL,
  `s_father4` varchar(255) NOT NULL,
  `g1` varchar(255) DEFAULT NULL,
  `g2` varchar(255) DEFAULT NULL,
  `g3` varchar(255) DEFAULT NULL,
  `g4` varchar(255) DEFAULT NULL,
  `s_speciality` int(11) DEFAULT NULL,
  `e_code` varchar(10) NOT NULL,
  `s_hotel` varchar(255) DEFAULT NULL,
  `p1` varchar(255) DEFAULT NULL,
  `p2` varchar(255) DEFAULT NULL,
  `p3` varchar(255) DEFAULT NULL,
  `file_name1` varchar(255) DEFAULT NULL,
  `file_name2` varchar(255) DEFAULT NULL,
  `s_date` varchar(20) NOT NULL,
  `rvtgroupID` int(11) DEFAULT NULL,
  `s_code` varchar(255) DEFAULT NULL,
  `created_at` timestamp(6) NOT NULL,
  `updated_at` timestamp(6) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=44 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `s_name`, `s_surname`, `s_personalcode`, `s_address`, `s_mobile`, `s_email`, `s_education`, `s_school`, `s_year`, `slang`, `s_endmarks4`, `s_endmarks1`, `s_endmarks2`, `s_endmarks6`, `s_endmarks7`, `s_endmarks3`, `avgMark`, `s_mother1`, `s_mother2`, `s_mother3`, `s_mother4`, `s_father1`, `s_father2`, `s_father3`, `s_father4`, `g1`, `g2`, `g3`, `g4`, `s_speciality`, `e_code`, `s_hotel`, `p1`, `p2`, `p3`, `file_name1`, `file_name2`, `s_date`, `rvtgroupID`, `s_code`, `created_at`, `updated_at`) VALUES
(39, '11', '11', '8', '8', '8', '8', '8', '8', '8', NULL, 8, 8, 8, 8, 8, 8, '8.00', '8', '8', '8', '8', '8', '8', '8', '8', '8', '8', '8', '8', 11, '8', 'Jā', 'Jā', 'Jā', 'Jā', '11_11_8_atestats_aplieciba.jpg', '11_11_8_sekmju_izraksts.jpg', '10-06-20', NULL, 'B-1', '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000'),
(40, '8', '8', '8', '8', '8', '8', '8', '88', '8', NULL, 8, 8, 8, 8, 8, 88, '21.33', '8', '8', '8', '88', '8', '', '88', '8', '8', '8', '8', '8', 13, '8', NULL, NULL, NULL, NULL, '8_8_8_atestats_aplieciba.jpg', '8_8_8_sekmju_izraksts.jpg', '10-06-20', NULL, 'VL-1', '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000'),
(41, '66', '6', '6', '6', '6', '6', '6', '6', '6', NULL, 6, 6, 6, 6, 6, 6, '6.00', '6', '6', '6', '6', '6', '6', '6', '66', '6', '6', '6', '6', 12, '6', NULL, NULL, NULL, NULL, '6_66_6_atestats_aplieciba.jpg', '', '10-06-20', NULL, 'VB-1', '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000'),
(42, '9', '99', '9', '9', '99', '9', '9', '9', '9', NULL, 99, 9, 9, 9, 9, 9, '24.00', '9', '99', '9', '9', '9', '9', '9', '99', '9', '9', '9', '9', 33, '9', NULL, NULL, NULL, NULL, '', '99_9_9_sekmju_izraksts.jpg', '10-06-20', NULL, '', '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000'),
(43, '989889', '9', '9', '9', '9', '9', '9', '9', '9', NULL, 9, 9, 9, 9, 9, 9, '9.00', '9', '9', '9', '', '9', '9', '9', '9', '99', '9', '9', '9', 13, '9', NULL, NULL, NULL, NULL, '9_989889_9_atestats_aplieciba.jpg', '9_989889_9_sekmju_izraksts.jpg', '10-06-20', NULL, 'VL-2', '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
