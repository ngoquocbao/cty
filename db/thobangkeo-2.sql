-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 01, 2014 at 10:55 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `thobangkeo`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbk_category`
--

CREATE TABLE IF NOT EXISTS `tbk_category` (
  `CategoryID` int(11) unsigned NOT NULL,
  `CategoryName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `CategoryTag` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `CategoryInfo` text COLLATE utf8_unicode_ci NOT NULL,
  `CategoryImage` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `CreatedDate` double NOT NULL,
  `ModifiedDate` double NOT NULL,
  `CreatedBy` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ModifiedBy` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbk_category`
--

INSERT INTO `tbk_category` (`CategoryID`, `CategoryName`, `CategoryTag`, `CategoryInfo`, `CategoryImage`, `CreatedDate`, `ModifiedDate`, `CreatedBy`, `ModifiedBy`) VALUES
(2087809054, 'asdfas', 'tag', 'dfasdfasdf', 'Avatar.jpg', 1412152927, 1412152927, 'Admin', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `tbk_product`
--

CREATE TABLE IF NOT EXISTS `tbk_product` (
  `ProductID` int(11) unsigned NOT NULL,
  `CategoryID` int(11) NOT NULL,
  `ProductName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ProductInfo` text COLLATE utf8_unicode_ci NOT NULL,
  `ProductImage` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `CreatedDate` double NOT NULL,
  `ModifiedDate` double NOT NULL,
  `CreatedBy` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ModifiedBy` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbk_role`
--

CREATE TABLE IF NOT EXISTS `tbk_role` (
  `RoleID` int(11) unsigned NOT NULL,
  `RoleName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `CreatedDate` double NOT NULL,
  `ModifiedDate` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbk_user`
--

CREATE TABLE IF NOT EXISTS `tbk_user` (
  `UserID` int(11) unsigned NOT NULL,
  `UserName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `RecentPassword` text COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `AvatarImage` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Status` int(2) NOT NULL,
  `RoleID` int(11) NOT NULL,
  `CreatedDate` double NOT NULL,
  `ModifiedDate` double NOT NULL,
  `CreatedBy` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ModifiedBy` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbk_user`
--

INSERT INTO `tbk_user` (`UserID`, `UserName`, `Password`, `RecentPassword`, `Email`, `AvatarImage`, `Status`, `RoleID`, `CreatedDate`, `ModifiedDate`, `CreatedBy`, `ModifiedBy`) VALUES
(1758583122, 'asdfasdf', '670b14728ad9902aecba32e22fa4f6bd', '670b14728ad9902aecba32e22fa4f6bd', 'asdfasdfs@sdfsafs.com', 'Avatar.jpg', 2, 2, 1411720330, 1411720330, 'System', 'System'),
(1790855400, 'asdfsadf', '670b14728ad9902aecba32e22fa4f6bd', '670b14728ad9902aecba32e22fa4f6bd', 'asdfsad@sadfsadfs.com', 'Avatar.jpg', 2, 2, 1411720320, 1411720320, 'System', 'System'),
(1815080352, 'sdfasdfasdf', '670b14728ad9902aecba32e22fa4f6bd', '670b14728ad9902aecba32e22fa4f6bd', 'asdfsadfsdaf@asdfsadfs.com', 'Avatar.jpg', 2, 2, 1411720367, 1411720367, 'System', 'System'),
(2110200623, 'wetrywertwer', '670b14728ad9902aecba32e22fa4f6bd', '670b14728ad9902aecba32e22fa4f6bd', 'rwtyrtyret@asdggds.com', 'Avatar.jpg', 2, 2, 1411720399, 1411720399, 'System', 'System');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbk_category`
--
ALTER TABLE `tbk_category`
 ADD PRIMARY KEY (`CategoryID`);

--
-- Indexes for table `tbk_product`
--
ALTER TABLE `tbk_product`
 ADD PRIMARY KEY (`ProductID`);

--
-- Indexes for table `tbk_role`
--
ALTER TABLE `tbk_role`
 ADD PRIMARY KEY (`RoleID`);

--
-- Indexes for table `tbk_user`
--
ALTER TABLE `tbk_user`
 ADD PRIMARY KEY (`UserID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
