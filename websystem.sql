-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 10, 2014 at 10:42 AM
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
  `Submit_date` varchar(50) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Status` varchar(200) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `Coursename` (`Coursename`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`Coursename`, `Cert_file`, `Course_Date`, `UID`, `Place_type`, `Satisfaction`, `Knowledge`, `Comments`, `Supervisor_Grade`, `Submit_date`, `id`, `Status`) VALUES
('Cissp', 'TR-03124-1.pdf', '10/10/2010', 'sazzad11', 'External', '4', '4', 'good!!', 'asda', '1415074542', 1, 'In Progress'),
('ciso', '', '10/10/2010', 'zad12', 'Internal', '3', '5', 'ok', '', '1415248883', 2, 'Pending'),
('sap', '', '10/10/2010', 'azda12', 'Internal', '1', '2', 'not good', 'pap12', '1415248925', 3, 'In Progress');

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
('sdfdsfgdsfs', '56456546546546', '45654654', '45645', 'dfe45', 'asdfsf', 'c177e077a9d7e681e95e419a33186a8f1ca3678e', 'sdsaj@jsjs.com', 'jf9tofR5LS8OBqqFJWtv', 'F'),
('azda', '211kasa', 'pap12', '12/18/2001', 'security', 'azda12', '7d5b188a8885fd49d97691480653405be9d31bb4', 'azda@gmail.com', '', ''),
('dsfdsfsdfsd', '453534534534534', 'drf34f45', '12/10/2014', 'sdgfsdgdg', 'dsgfdgtdg', '94a1029caedc19140ca8115ccf386c288b7ba377', 'estalokaz@gmail.com', 'GxWFopTUoCgkSRfOEEHC', 'F'),
('sdfgvdgergeg', 'fegv4r5gf54f4f445gv', 'gvertgvtrg', 'dgergrtgtrgrtg', 'grtgrtgrtgrtg', 'gvrtgtrgrt', 'c3da422f6c0235f9edb6c3be1a5c549750c2e113', 'sdsaj@jsjs.com', 'qZ0sffPIo03aFD7TGrYt', 'F'),
('sdfgvdgergeg', 'fegv4r5gf54f4f445gv', 'gvertgvtrg', 'dgergrtgtrgrtg', 'grtgrtgrtgrtg', 'gvrtgtrgrt6767', '70d290a147d41465dc1fe1fb9604e980991aef24', 'sdsaj@jsjs.com', 'kF4MykiiOOe6cKsdS7YC', 'F'),
('sdfgvdgergeg', 'fegv4r5gf54f4f445gv', 'gvertgvtrg', 'dgergrtgtrgrtg', 'grtgrtgrtgrtg', 'hehehe', 'd0ab5e5b62db092043f6996a17d44fa8ff447f9e', 'sdsaj@jsjs.com', 'IelM53ju7dFP5QwWbT5f', 'F'),
('sazzad', '12312asd', 'asda', '12/18/2001', 'sadasd', 'sazzad11', 'c1dd73cfe42e27cf8914373a2c01aad5e065ac7f', 'sazzadknife@gmail.com', '', ''),
('test', '546456546456', 'dsfdfe4f3', '13/10/2014', 'safdsfs', 'shark', 'b7c40b9c66bc88d38a59e554c639d743e77f1b65', 'nizam.eija@gmail.com', 'CU5NTLrVKsZ17MLDrgYd', 'F'),
('MOHD SHAFEQ BIN MD HASAN', '871015568494', '3deff', '12/10/2014', 'sadasd', 'shark77', '3d4f2bf07dc1be38b20cd6e46949a1071f9d0e3d', 'shafeq.hasan@gmail.com', 'TvkxzMzK02gmcfVIvvE5', ''),
('zad', '123aqwe', 'pap5', '12/18/2001', 'IT', 'zad12', 'c62c6a4f802d94b4d9d0a678505929d957c2d186', 'zad@gmail.com', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
