-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2019 at 04:47 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `polltest`
--

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

CREATE TABLE `languages` (
  `lan_id` int(100) NOT NULL,
  `fullname` varchar(25) NOT NULL,
  `about` varchar(255) NOT NULL,
  `votecount` int(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`lan_id`, `fullname`, `about`, `votecount`) VALUES
(2, 'Emmerson Dambudzo', 'emmerson is', 7),
(3, 'Nkosana Moyo', 'nkosana is', 22),
(4, 'Nelson Chamisa', 'chamisa is', 17),
(5, 'Brian Mteki', 'dread is ', 5);

-- --------------------------------------------------------

--
-- Table structure for table `loginusers`
--

CREATE TABLE `loginusers` (
  `id` int(200) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `rank` varchar(80) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'ACTIVE'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `loginusers`
--

INSERT INTO `loginusers` (`id`, `username`, `password`, `rank`, `status`) VALUES
(47, 'helllo', 'b373c043b854b0ebb97afe9b0ba47059', 'voter', 'ACTIVE'),
(46, 'jaha', 'e3df9353ab12391b79865f25a0d7068e', 'voter', 'ACTIVE'),
(45, 'action', '1ace9555f0aafb4fe1e75309e8f79e4d', 'voter', 'ACTIVE'),
(44, 'arjun', '451d3eb1573c7ebb70c08dfee9766509', 'voter', 'ACTIVE'),
(43, 'niku19', 'ac61ebbe84c06debaa78c0a832330164', 'voter', 'ACTIVE'),
(42, 'ejjhed', 'b3f70c0d1b269668e937741a5d5797ab', 'voter', 'ACTIVE'),
(41, 'Anirban', '9a7108cfaa7f51efb5fcda9e9d4b7a90', 'voter', 'ACTIVE'),
(40, 'dnddd', 'b5d165334b465a7fc42310750430b3f9', 'voter', 'ACTIVE'),
(48, 'hmafigu@gmail.com', 'c93ccd78b2076528346216b3b2f701e6', 'voter', 'ACTIVE'),
(49, 'mafiguhuggins@gmail.com', '0782326160', 'voter', 'ACTIVE'),
(50, 'mafiguhuggins1@gmail.com', '9ab59deceaa671d4a9b42320967b067d', 'voter', 'ACTIVE'),
(51, 'mafiguhugg@gmail.com', '9ab59deceaa671d4a9b42320967b067d', 'voter', 'ACTIVE'),
(52, 'mafigins@gmail.com', '9ab59deceaa671d4a9b42320967b067d', 'voter', 'ACTIVE'),
(53, 'ghuggins@gmail.com', '9ab59deceaa671d4a9b42320967b067d', 'voter', 'ACTIVE'),
(54, 'mafigus@gmail.com', '209215a4319eafe62ac284c2b4b09bc0', 'voter', 'ACTIVE'),
(55, 'mk@gmail.com', '9ab59deceaa671d4a9b42320967b067d', '', 'ACTIVE'),
(56, 'mains@gmail.com', '9ab59deceaa671d4a9b42320967b067d', 'admin', 'ACTIVE'),
(57, 'magg@gmail.com', '9ab59deceaa671d4a9b42320967b067d', 'voter', 'ACTIVE'),
(58, 'ms@gmail.com', '7db7df642a54a41366f9b39bcd3bb32b', 'voter', 'ACTIVE');

-- --------------------------------------------------------

--
-- Table structure for table `voters`
--

CREATE TABLE `voters` (
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'NOTVOTED',
  `voted` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `voters`
--

INSERT INTO `voters` (`firstname`, `lastname`, `username`, `status`, `voted`) VALUES
('sdjdjdj', 'djdjddjj', 'helllo', 'VOTED', 'Emmerson Dambudzo'),
('Barnabas', 'Danhire', 'Barnabas', 'NOTVOTED', NULL),
('Barnabas', 'Danhire', 'action', 'VOTED', 'Nelson Chamisa'),
('Barnabas', 'Danhire', 'arjun', 'NOTVOTED', NULL),
('janemaan', 'lohiid', 'niku19', 'VOTED', 'Nkosana Moyo'),
('asdhk', 'ddddnd', 'ejjhed', 'NOTVOTED', NULL),
('Barnabas', 'Danhire', 'Anirban', 'VOTED', 'mai mujuru'),
('ndndnd', 'dhbhdd', 'dnddd', 'NOTVOTED', NULL),
('Huggins', 'Mafigu', 'hmafigu@gmail.com', 'VOTED', 'Brian Mteki'),
('Huggins ', 'Mafigu', 'mafiguhuggins@gmail.com', 'VOTED', 'Emmerson Dambudzo'),
('Huggins ', 'Mafigu', 'mafiguhuggins1@gmail.com', 'NOTVOTED', NULL),
('Huggins ', 'Mafigu', 'mafiguhugg@gmail.com', 'VOTED', 'Nkosana Moyo'),
('Huggins ', 'Mafigu', 'mafigins@gmail.com', 'VOTED', 'java'),
('Huggins ', 'Mafigu', 'ghuggins@gmail.com', 'VOTED', 'Emmerson Dambudzo'),
('Huggins ', 'Mafigu', 'mafigus@gmail.com', 'VOTED', 'Nkosana Moyo'),
('Huggins ', 'Mafigu', 'ma@gmail.com', 'NOTVOTED', NULL),
('Huggins ', 'Mafigu', 'mk@gmail.com', 'NOTVOTED', NULL),
('Huggins ', 'Mafigu', 'mains@gmail.com', 'NOTVOTED', NULL),
('Huggins ', 'Mafigu', 'magg@gmail.com', 'NOTVOTED', NULL),
('Huggins ', 'Mafigu', 'ms@gmail.com', 'NOTVOTED', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`lan_id`);

--
-- Indexes for table `loginusers`
--
ALTER TABLE `loginusers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `voters`
--
ALTER TABLE `voters`
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `languages`
--
ALTER TABLE `languages`
  MODIFY `lan_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `loginusers`
--
ALTER TABLE `loginusers`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
