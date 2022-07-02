-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2022 at 08:42 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eventmanagement`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `title` varchar(1000) NOT NULL,
  `message` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `title`, `message`) VALUES
(1, 'sup', 'endet new '),
(2, 'I am having troubles dick head', 'heyyyyyyyyyyyyyyyyyyyyyyy sleam sleamlasdf '),
(3, 'aksjdfhajsd', 'asdhaisdjf'),
(4, '77777', 'nbvnbvnbv'),
(5, '67', 'dfn');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `EventID` int(11) NOT NULL,
  `user` varchar(33) NOT NULL,
  `Title` varchar(255) NOT NULL,
  `Description` varchar(255) NOT NULL,
  `StartDate` varchar(255) NOT NULL,
  `EndDate` varchar(255) NOT NULL,
  `Cost` int(11) NOT NULL,
  `LocationID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`EventID`, `user`, `Title`, `Description`, `StartDate`, `EndDate`, `Cost`, `LocationID`) VALUES
(2, 'opop', 'Ut beatae non qui pl', 'Delectus aliqua Po', '28-Dec-2002', '02-Aug-1977', 68, 2),
(7, 'cvcv', 'Deleniti nisi repreh', 'Do laboriosam aut e', '12-Nov-2018', '30-Apr-1992', 21, 4),
(8, 'opop', 'Teos bithtday', 'she is turning 24', '28-Dec-2002', 'may 22 2022', 123, 5),
(10, '', 'Voluptate ea ipsam v', 'Magna aut ipsum offi', '19-Oct-2017', '08-Jun-2004', 38, 6),
(11, 'cvcv', 'Accusantium est ad ', 'Corrupti consequunt', '02-Mar-2022 ', '18-Aug-2013', 37, 13),
(12, 'cvcv', 'Id quaerat occaecat ', 'Autem qui inventore ', '24-Feb-1995 ', '04-Jul-2008', 30, 1),
(13, 'selam', 'Dolorem dolores est ', 'Laborum Voluptatem ', '14-Nov-1970 ', '29-Jan-1979', 85, 14);

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `LocationID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `vendor` varchar(33) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `ManagerFName` varchar(255) NOT NULL,
  `ManagerLName` varchar(255) NOT NULL,
  `ManagerEmail` varchar(255) NOT NULL,
  `ManagerNumber` int(11) NOT NULL,
  `MaxCapacity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`LocationID`, `Name`, `vendor`, `Address`, `ManagerFName`, `ManagerLName`, `ManagerEmail`, `ManagerNumber`, `MaxCapacity`) VALUES
(1, 'Addis', 'cvcv', 'addis@gmail.com', 'Yabu', 'Lala', 'yabidesta@gmail.com', 1234545, 100),
(2, 'Yeabsira Mesfin Abera', 'opop', 'Ethiopia', 'Yeabsira', 'Abera', 'yabidesta@gmail.com', 3453, 3),
(4, 'Jennifer Gomez', 'cvcv', 'Et deleniti facere p', 'Macon', 'Isaac Mckee', 'zikoxor@mailinator.com', 680, 56),
(5, 'Teosbista&#39;s spot ', ' cvcv', 'Mmcy', 'Teobista', 'Debebe', 'teo@mmcy.com', 910111213, 1345),
(6, 'Gary Huffman', 'yab', 'Debitis qui expedita', 'Cameron', 'Melyssa Cleveland', 'qosi@mailinator.com', 794, 1),
(7, 'Gage Collins', ' ', 'Voluptatem esse mol', 'Cynthia ', ' Jorden Flynn', ' ludemycy@mailinator.com', 682, 0),
(8, 'Anika Glenn', ' ', 'Aliqua In cum vitae', 'Channing ', ' Knox Suarez', ' gazisapiq@mailinator.com', 564, 0),
(9, 'Charles Romero', ' cvcv', 'Omnis voluptas qui c', 'Grady ', ' Lucy Craft', ' segaquvo@mailinator.com', 312, 0),
(10, 'Chadwick Wade', 'cvcv', 'Eiusmod nisi aut ali', 'Maite ', ' Julie Gilbert', ' kohob@mailinator.com', 747, 0),
(11, 'Baxter Madden', 'cvcv', 'Dolor eveniet magni', 'Aubrey ', ' Teegan Bean', ' lowov@mailinator.com', 752, 0),
(12, 'Brenna Dillon', 'cvcv', 'Aut sit Nam sint eli', 'Honorato ', ' Hamilton Flynn', ' zujuco@mailinator.com', 268, 0),
(13, 'Cameron Mathews', 'cvcv', 'Sit vitae quod obcae', 'Bianca ', ' Abel Shannon', ' vyxorejad@mailinator.com', 983, 0),
(14, 'Byron Boone', 'selam', 'Harum non tempore f', 'Venus ', ' Avye Tyson', ' xyloxybilu@mailinator.com', 747, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `role`) VALUES
('cvcv', 'cvcv', 'vendor'),
('cvcv1', 'cvcv1', 'user'),
('daa', 'ti', 'admin'),
('dada', '21cb4e4be93c09542ffa73b2b5cb95ea', 'user'),
('klkl', 'klkl', 'user'),
('ooo', '7f94dd413148ff9ac9e9e4b6ff2b6ca9', 'vendor'),
('opop', '99a30df0f2488360cdd46b4b88e5f5f0', 'vendor'),
('qwerty', 'c4efd5020cb49b9d3257ffa0fbccc0ae', 'vendor'),
('selam', 'hh', 'vendor'),
('supp', 'ppp', 'vendor'),
('ti', 'dada', '1'),
('youu', 'me', 'vendor');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `title` (`title`) USING HASH;

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`EventID`),
  ADD UNIQUE KEY `LocationID` (`LocationID`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`LocationID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `password` (`password`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `EventID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `LocationID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
