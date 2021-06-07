-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 24, 2021 at 11:32 AM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `questionablers`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

DROP TABLE IF EXISTS `answers`;
CREATE TABLE IF NOT EXISTS `answers` (
  `aId` int(11) NOT NULL AUTO_INCREMENT,
  `body` text NOT NULL,
  `avotes` int(11) NOT NULL,
  `aaccept` tinyint(1) NOT NULL,
  `atime` datetime NOT NULL,
  `userId` int(11) NOT NULL,
  `questionId` int(11) NOT NULL,
  PRIMARY KEY (`aId`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`aId`, `body`, `avotes`, `aaccept`, `atime`, `userId`, `questionId`) VALUES
(1, 'Trying using latest version of Phpmyadmin ', 0, 0, '2021-05-24 13:14:14', 1, 3),
(2, 'Best websites to earn money online:\r\nfiverr, freelancer,upwork', 0, 0, '2021-05-24 13:23:36', 1, 4);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
CREATE TABLE IF NOT EXISTS `posts` (
  `pId` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(60) NOT NULL,
  `body` text NOT NULL,
  `userId` int(11) NOT NULL,
  PRIMARY KEY (`pId`),
  KEY `fk_userId` (`userId`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`pId`, `title`, `body`, `userId`) VALUES
(3, 'How to add data in database?', 'I am trying to add data to my database using phpmyadmin but I get error. Please help me.\r\nTHANKS in advance', 1),
(4, 'How to earn money online?', 'I want to make online money tell me website names please.\r\nThanks in advance', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `uId` int(11) NOT NULL AUTO_INCREMENT,
  `displayName` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `fullName` varchar(40) NOT NULL,
  `pPicture` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `universityName` varchar(10) NOT NULL,
  `departmentName` varchar(10) NOT NULL,
  `uBio` text NOT NULL,
  PRIMARY KEY (`uId`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uId`, `displayName`, `email`, `password`, `fullName`, `pPicture`, `gender`, `address`, `contact`, `universityName`, `departmentName`, `uBio`) VALUES
(1, 'zeeshan080', 'zeeshan@gmail.com', 'zee12345', '', '', '', '', '', '', '', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
