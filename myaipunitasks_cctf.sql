-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 05, 2020 at 02:00 PM
-- Server version: 10.1.45-MariaDB
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
-- Database: `myaipunitasks_cctf`
--

-- --------------------------------------------------------

--
-- Table structure for table `complaints`
--
CREATE DATABASE myaipunittasks_cctf;

CREATE TABLE `complaints` (
  `complaint_id` int(10) NOT NULL,
  `cust_name` varchar(25) NOT NULL,
  `cust_email` varchar(25) NOT NULL,
  `complaint_title` varchar(200) NOT NULL,
  `cust_complaint` varchar(500) NOT NULL,
  `complaint_status` int(1) NOT NULL,
  `response` varchar(500) NOT NULL,
  `responder` varchar(30) NOT NULL,
  `date_received` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_acknowledged` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `date_forwaded` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `date_responded` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complaints`
--

INSERT INTO `complaints` (`complaint_id`, `cust_name`, `cust_email`, `complaint_title`, `cust_complaint`, `complaint_status`, `response`, `responder`, `date_received`, `date_acknowledged`, `date_forwaded`, `date_responded`) VALUES
(1, 'navblue', 'navblue@gmail.com', 'ARP coordinates', 'varying soroti ARP coordinates', 3, 'the coordinates are survey verified', '', '2020-05-29 23:19:15', '2020-06-04 13:06:04', '0000-00-00 00:00:00', '2020-05-30 06:15:15'),
(2, 'tssaviation', 'Tss aviation@gmail.com', 'CD Copies', 'missing CD copies', 4, 'delay due covid', 'AIS Uganda', '2020-05-29 23:19:15', '2020-05-30 06:15:15', '0000-00-00 00:00:00', '2020-05-30 06:15:15'),
(3, 'Asante Aviation', 'asanteaviation@asante.com', 'Variation of published data', 'There is a difference with the elevation of HUEN as published in the AIP and the elevation indicated on the IAP charts. kinldy verify which one is correct', 2, 'Corrections are going to picked from the data originator and published in AIRAC AMDT 07/20', 'AIS Uganda', '2020-05-30 00:40:36', '2020-05-30 03:40:36', '0000-00-00 00:00:00', '2020-06-04 12:06:46'),
(4, 'DSN', 'dsn@gmail', 'TWY signage', 'TWY signage is wrong. For example TWY A has been marked as A2. Please explain if there have been any changes', 3, '', '', '2020-05-30 00:41:29', '2020-05-30 00:50:29', '2020-05-30 03:41:29', '0000-00-00 00:00:00'),
(5, 'Soroti briefing', 'soroti@caa.co.ug', 'Not received amendment ', 'We didnt receive AIRAC AIP AMDT 07/20', 2, 'AIRAC AIP AMDT 07/20 was a NIL publication', 'AIS Uganda', '2020-05-31 01:23:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2020-06-01 05:06:10'),
(6, 'Lufthansa', 'lufthansa@aim.com', 'Direct Routing', 'When will the direct routing supplement be published.', 0, '', '', '2020-05-31 02:11:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 'navblue', 'navblue@gmail.com', 'Magnetic variation', 'The magnetic variation published varies from our results obtained from google earth. Kindly clarify this', 1, '', '', '2020-05-31 14:00:06', '2020-05-30 20:53:57', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 'Sitaonair', 'sita@gmail.com', 'AIP subscription', 'We paid for an online AIP on 3rd April but have since not got our login credentials.', 4, 'Login credentials have been submitted as follows\r\nUsername: SITAONAIR\r\nPassword: sita\r\n\r\nApologies for the delay', 'AIS Uganda', '2020-05-31 14:00:06', '2020-05-31 20:53:57', '2020-05-31 20:53:57', '2020-06-04 12:06:47'),
(11, 'Arua Briefing', 'aruabriefing@caa.co,ug', 'Broken CD', 'Our CD copy of the AIP for amdt 05/20 was received broken', 4, 'another CD copy has been posted', '', '2020-05-31 17:03:35', '2020-05-31 21:03:35', '0000-00-00 00:00:00', '2020-05-31 21:03:35'),
(12, 'Kajjansi airfield', 'kajjansi@gmail.com', 'Missing AIC', 'We didnt receive AICs ranging from AIC A17/20- A29/20. Please share them so we can update our AIP', 4, 'Apologies for this. Copies of the above mentioned AICs have been sent to you via email. The paper copies follow', 'AIS operator', '2020-05-31 12:03:35', '2020-05-31 13:03:35', '0000-00-00 00:00:00', '2020-05-31 17:03:35'),
(14, 'Aerolink', 'aerolink@gmail.com', 'Enroute chart', 'Need to purchase enroute chart for HUEC', 0, '', '', '2020-06-04 21:09:53', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, 'East AFrican School of Av', 'easa@aero.com', 'Training', 'Need for information on training flights', 1, '', '', '2020-06-04 21:09:53', '2020-06-04 13:06:05', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `operator`
--

CREATE TABLE `operator` (
  `op_id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `salt` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `operator`
--

INSERT INTO `operator` (`op_id`, `firstname`, `lastname`, `username`, `password`, `salt`) VALUES
(1, '', '', 'louise', 'd1536ed67dd799df0981df7eb31bb42e', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `complaints`
--
ALTER TABLE `complaints`
  ADD PRIMARY KEY (`complaint_id`);

--
-- Indexes for table `operator`
--
ALTER TABLE `operator`
  ADD PRIMARY KEY (`op_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `complaints`
--
ALTER TABLE `complaints`
  MODIFY `complaint_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `operator`
--
ALTER TABLE `operator`
  MODIFY `op_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
