-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2014 at 03:00 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `websystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `UID` varchar(100) NOT NULL,
  `Password` varchar(200) NOT NULL,
  `Name` varchar(100) NOT NULL,
  PRIMARY KEY (`UID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`UID`, `Password`, `Name`) VALUES
('admin14', '3893c8dea615370ce87d040b95f62f4368c1ff18', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE IF NOT EXISTS `course` (
  `Coursename` varchar(50) NOT NULL,
  `Cert_file` varchar(50) NOT NULL,
  `Course_Date` varchar(50) NOT NULL,
  `UID` varchar(30) NOT NULL,
  `Place_type` varchar(100) NOT NULL,
  `Satisfaction` varchar(10) NOT NULL,
  `Knowledge` varchar(10) NOT NULL,
  `Comments` varchar(150) NOT NULL,
  `Supervisor_Grade` varchar(200) NOT NULL,
  `Supervisor_comment` varchar(500) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Submit_date` varchar(50) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Status` varchar(200) NOT NULL,
  `Mail_status` varchar(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `Coursename` (`Coursename`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`Coursename`, `Cert_file`, `Course_Date`, `UID`, `Place_type`, `Satisfaction`, `Knowledge`, `Comments`, `Supervisor_Grade`, `Supervisor_comment`, `Submit_date`, `id`, `Status`, `Mail_status`) VALUES
('Cissp', 'TR-03124-1.pdf', '10/10/2010', 'sazzad11', 'External', '4', '4', 'good!!', 'pap12', 'valoi', '1415074542', 1, 'Completed', ''),
('ciso', '', '10/10/2010', 'zad12', 'Internal', '3', '5', 'ok', 'pap12', 'motamuti', '1415248883', 2, 'Pending', ''),
('sap', '', '10/10/2010', 'azda12', 'Internal', '1', '2', 'not good', 'pap5', 'ewqqwewq', '1415248925', 3, '', ''),
('sads', 'TR-03124-11.pdf', '10/10/2010', 'alice12', 'Internal', '4', '5', 'ok', 'pap5', 'kharap na', '1415597363', 4, 'Pending', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `Name` varchar(50) NOT NULL,
  `ID` varchar(30) DEFAULT NULL,
  `Grade` varchar(30) DEFAULT NULL,
  `Date` varchar(30) DEFAULT NULL,
  `Unit` varchar(30) DEFAULT NULL,
  `UID` varchar(30) NOT NULL DEFAULT '',
  `Password` varchar(200) DEFAULT NULL,
  `Email` varchar(30) DEFAULT NULL,
  `email_verification_code` varchar(100) NOT NULL,
  `active_status` varchar(1) NOT NULL,
  PRIMARY KEY (`UID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Name`, `ID`, `Grade`, `Date`, `Unit`, `UID`, `Password`, `Email`, `email_verification_code`, `active_status`) VALUES
('saiful', '12341', 'pap12', '10/10/1010', 'security', 'aaazada12', '7e13df6e4fe5dc6fc0bbe2fb9eb9e71b3d30f833', 'saiful@g.com', '', ''),
('saiful', '123412312312312312321321321', 'pap12', '10/10/1010', 'security', 'aaazda12', '7e13df6e4fe5dc6fc0bbe2fb9eb9e71b3d30f833', 'saiful@g.com', '', ''),
('alice', 'ewq1211212', 'permai11', '12/18/2001', 'security', 'alice12', '51efc99c659b5f840f6266654af7707bb888dafe', 'alice@gmail.com', '', ''),
('azda', '211kasa', 'pap12', '12/18/2001', 'security', 'azda12', '7d5b188a8885fd49d97691480653405be9d31bb4', 'azda@gmail.com', '', ''),
('fairuz', '123131231231', 'pap007', '10/10/1010', 'security', 'fai12', 'fdf62591e5d6e577b84d42e811d640e78dc09425', 'asdasd@sadas.sdas', '', ''),
('fairuz', '123131231231', 'pap008', '10/10/1010', 'security', 'fai13', '55f7504162a7ae380cb9b7c70da635bbe42a1455', 'asdasd@sadas.sdas', '', ''),
('fairuz', '123131231231', 'pap009', '10/10/1010', 'security', 'fai14', 'feb00d5e00c02adee706b8174fe7dad918f76477', 'asdasd@sadas.sdas', '', ''),
('fairuz', '123131231231', 'pap010', '10/10/1010', 'security', 'fai15', 'f3594fc7f8118ab58b5159ee21787170a2167fe8', 'asdasd@sadas.sdas', '', ''),
('fairuz', '123131231231', 'pap011', '10/10/1010', 'security', 'fai16', 'b0e18a8e5dbfba759d10afdd3322947275d110e7', 'asdasd@sadas.sdas', '', ''),
('fairuz', '123131231231', 'pap012', '10/10/1010', 'security', 'fai17', '2da57cfdf88a2da86c3c0bc248b27d3f83509cd6', 'asdasd@sadas.sdas', '', ''),
('sazzad', '12312asd', 'asda', '12/18/2001', 'sadasd', 'sazzad11', 'c1dd73cfe42e27cf8914373a2c01aad5e065ac7f', 'sazzadknife@gmail.com', '', ''),
('zad', '123aqwe', 'pap5', '12/18/2001', 'IT', 'zad12', 'c62c6a4f802d94b4d9d0a678505929d957c2d186', 'zad@gmail.com', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
