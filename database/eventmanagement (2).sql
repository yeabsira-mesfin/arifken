-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 02, 2022 at 04:54 PM
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
  `Description` text NOT NULL,
  `StartDate` varchar(255) NOT NULL,
  `EndDate` varchar(255) NOT NULL,
  `Cost` int(11) NOT NULL,
  `Image` varchar(255) NOT NULL,
  `LocationID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`EventID`, `user`, `Title`, `Description`, `StartDate`, `EndDate`, `Cost`, `Image`, `LocationID`) VALUES
(35, 'nijiq', 'Titan of the Giant', '                            A wedding is a ceremony where two people are united in marriage. Wedding traditions and customs vary greatly between cultures, ethnic groups, religions, countries, and social classes. Most wedding ceremonies involve an exchange', '11-Sep-2014 ', 'may 22 2022', 2000, 'SundayJune2022120113.png', 23),
(37, 'Emebet', 'Emebets Muhaha party', 'Controlling chaos is what event management is all about. There’s a lot to manage with conferences, marketing events, and similar productions. Fortunately, today’s best event management processes help you with every aspect of your event journey.', '28-Dec-2002 ', 'may-26-2022', 0, 'MondayJune2022065942.png', 25),
(38, 'Emebet', 'Bethels Birthday', 'Controlling chaos is what event management is all about. There’s a lot to manage with conferences, marketing events, and similar productions. Fortunately, today’s best event management processes help you with every aspect of your event journey.', '28-Dec-2002 ', 'May-22-2022', 4444, 'MondayJune2022071248.png', 26),
(39, 'aaabb', 'asldfk', 'alksdjflads', '28-Dec-2002 ', 'may-22-2022', 99999, 'SaturdayJuly2022095254.png', 28);

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
(2, 'Yeabsira Mesfin Abera', 'opop', 'Ethiopia', 'Yeabsira', 'Abera', 'yabidesta@gmail.com', 3453, 3),
(5, 'Teosbista&#39;s spot ', ' cvcv', 'Mmcy', 'Teobista', 'Debebe', 'teo@mmcy.com', 910111213, 1345),
(6, 'Gary Huffman', 'yab', 'Debitis qui expedita', 'Cameron', 'Melyssa Cleveland', 'qosi@mailinator.com', 794, 1),
(7, 'Gage Collins', ' ', 'Voluptatem esse mol', 'Cynthia ', ' Jorden Flynn', ' ludemycy@mailinator.com', 682, 0),
(8, 'Anika Glenn', ' ', 'Aliqua In cum vitae', 'Channing ', ' Knox Suarez', ' gazisapiq@mailinator.com', 564, 0),
(9, 'Charles Romero', ' cvcv', 'Omnis voluptas qui c', 'Grady ', ' Lucy Craft', ' segaquvo@mailinator.com', 312, 0),
(11, 'Baxter Madden', 'cvcv', 'Dolor eveniet magni', 'Aubrey ', ' Teegan Bean', ' lowov@mailinator.com', 752, 0),
(12, 'Brenna Dillon', 'cvcv', 'Aut sit Nam sint eli', 'Honorato ', ' Hamilton Flynn', ' zujuco@mailinator.com', 268, 0),
(13, 'Cameron Mathews', 'cvcv', 'Sit vitae quod obcae', 'Bianca ', ' Abel Shannon', ' vyxorejad@mailinator.com', 983, 0),
(14, 'Byron Boone', 'selam', 'Harum non tempore f', 'Venus ', ' Avye Tyson', ' xyloxybilu@mailinator.com', 747, 0),
(15, 'Connor Glass', 'miaw', 'Et hic quis dicta so', 'Evangeline ', ' Britanni Strong', ' vado@mailinator.com', 175, 0),
(16, 'Dalton Mcfarland', 'miaw', 'Id minus rerum nisi ', 'Amela ', ' Brittany Richards', ' nuqeda@mailinator.com', 459, 0),
(17, 'Grady Ross', 'Yeabuu', 'Ea eos illo est aliq', 'Lysandra ', ' Tana Griffith', ' pyviqekizy@mailinator.com', 698, 0),
(18, 'Beck Wright', 'samii', 'Ut consequatur labor', 'Isaac ', ' Ian Herrera', ' jizoculox@mailinator.com', 840, 0),
(19, 'Tana Atkins', 'fahoby', 'Dolores sit fuga D', 'Rahim ', ' Kylan Camacho', ' mowyqug@mailinator.com', 229, 0),
(20, 'Hyacinth Love', 'fahoby', 'Dignissimos est cum', 'Baker ', ' Serina Andrews', ' gekutoquc@mailinator.com', 607, 0),
(21, 'Kareem Fox', 'volagic', 'Voluptatem Quo ut l', 'Orla ', ' Jordan Hunt', ' bugab@mailinator.com', 113, 0),
(22, 'Stella Mendez', 'volagic', 'Tempor sint qui reic', 'Leila ', ' Ray Bennett', ' kusovy@mailinator.com', 289, 0),
(23, 'Fleur Hailu', 'nijiq', 'Fleur Addis', 'Darryl ', ' Cooper Hughes', ' cafupamifu@mailinator.com', 9000, 7),
(24, 'Cadman Chavez', 'senaje', 'Cadman Chavez', 'Elaineasdf', ' Ifeoma Barber', ' xubez@mailinator.com', 213, 0),
(25, 'Logan Hardin', 'Emebet', 'Molestias aliqua Of', 'Yoshi ', ' Rhiannon Sheppard', ' puqomipese@mailinator.com', 582, 0),
(26, 'Seth Boyle', 'Emebet', 'Sunt vel aspernatur ', 'Nichole ', ' Kiara Mcpherson', ' huco@mailinator.com', 132, 0),
(27, 'Paki Cherry', 'Emebet', 'Suscipit eius enim v', 'Norman ', ' Tallulah Collier', ' seked@mailinator.com', 175, 0),
(28, 'ss', 'aaabb', 'sss', 'asdf ', ' aaaa', ' aaaaaaaaaaaaaaa@gmail.com', 6666, 0);

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE `setting` (
  `ID` int(11) NOT NULL,
  `Website_name` varchar(255) DEFAULT NULL,
  `Logo` varchar(255) DEFAULT NULL,
  `Header` varchar(255) DEFAULT NULL,
  `Footer` varchar(255) DEFAULT NULL,
  `Mail_from` varchar(255) DEFAULT NULL,
  `Mail_protocol` varchar(255) DEFAULT NULL,
  `Mail_encryption` varchar(255) DEFAULT NULL,
  `Mail_host` varchar(255) DEFAULT NULL,
  `Mail_port` varchar(255) DEFAULT NULL,
  `Mail_username` varchar(255) DEFAULT NULL,
  `Mail_password` varchar(255) DEFAULT NULL,
  `Mail_title` varchar(255) DEFAULT NULL,
  `Mail_replyto` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`ID`, `Website_name`, `Logo`, `Header`, `Footer`, `Mail_from`, `Mail_protocol`, `Mail_encryption`, `Mail_host`, `Mail_port`, `Mail_username`, `Mail_password`, `Mail_title`, `Mail_replyto`) VALUES
(1, 'ArifKen', NULL, NULL, NULL, 'info@diakonyitbarek.com', 'SMTP', 'TLS', 'mail.diakonyitbarek.com', '587', 'info@diakonyitbarek.com', 'Yit@5401', 'ArifKen', 'titushailu125@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `is_confirmed` varchar(255) NOT NULL DEFAULT '0',
  `forget` varchar(255) NOT NULL DEFAULT '0',
  `token` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `lastname`, `email`, `password`, `role`, `is_confirmed`, `forget`, `token`) VALUES
('admin', 'admin', 'admin@g.com', 'admin', 'admin', '0', '0', NULL),
('asdf', 'asdasd', 'titushailu125@gmail.com', 'dani', 'vendor', '1', '0', '653355'),
('jibowyc', 'Harmon', 'yabidesta@gmail.com', '', 'vendor', '0', '0', '284411'),
('qadovuf', 'Wilcox', 'yabidesta@gmail.com', '', 'vendor', '0', '0', '035937'),
('qwert', 'ertyu', 'ertyu', 'tito', 'vendor', '0', '0', '618936');

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
  ADD PRIMARY KEY (`EventID`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`LocationID`);

--
-- Indexes for table `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD UNIQUE KEY `username` (`username`);

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
  MODIFY `EventID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `LocationID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `setting`
--
ALTER TABLE `setting`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
