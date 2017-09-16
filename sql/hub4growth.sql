-- phpMyAdmin SQL Dump
-- version 4.7.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 16, 2017 at 04:44 AM
-- Server version: 5.7.18
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hub4growth`
--

-- --------------------------------------------------------

--
-- Table structure for table `banner_image`
--

CREATE TABLE `banner_image` (
  `id` int(11) NOT NULL,
  `banner_title` text COLLATE utf8_unicode_ci,
  `banner_id` int(11) DEFAULT NULL,
  `added_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_date` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `banner_info`
--

CREATE TABLE `banner_info` (
  `id` int(11) NOT NULL,
  `caption` text COLLATE utf8_unicode_ci,
  `description` text COLLATE utf8_unicode_ci,
  `added_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_date` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `banner_info`
--

INSERT INTO `banner_info` (`id`, `caption`, `description`, `added_date`, `updated_date`) VALUES
(1, 'London Bridge', 'London ma bhayeko bridge', '2017-09-16 16:19:01', NULL),
(2, 'London Bridge', 'London ma bhayeko bridge', '2017-09-16 16:33:55', NULL),
(3, 'London Bridge', 'London ma bhayeko bridge', '2017-09-16 16:36:11', NULL),
(4, 'hello', 'hello', '2017-09-16 16:38:25', NULL),
(5, 'London Bridge', 'London ma bhayeko bridge', '2017-09-16 16:45:01', NULL),
(6, 'London Bridge', 'London ma bhayeko bridge', '2017-09-16 16:52:32', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `description` text,
  `email` varchar(150) DEFAULT NULL,
  `phone` text,
  `fax` varchar(150) DEFAULT NULL,
  `address` text,
  `pobox` varchar(150) DEFAULT NULL,
  `link` text,
  `added_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_date` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `description`, `email`, `phone`, `fax`, `address`, `pobox`, `link`, `added_date`, `updated_date`) VALUES
(1, 'This is Our New Contact Info.', '', '9876543210', '', '', '7765', 'fb.com/cids', '2017-09-12 15:54:55', NULL),
(2, 'segs', '', 'sgsfd', '', '', 'gsfgs', '', '2017-09-12 15:58:45', NULL),
(3, '', 'fafadf', 'fadf', 'fadsfad', 'fad', 'afadf', '', '2017-09-12 16:02:17', NULL),
(4, '', 'info@cids.com', '0987654321', '014478332', 'Pulchowk,Lalitpur', '6532', 'fb.com/cidsnepal', '2017-09-12 16:03:50', NULL),
(5, '', 'info@cids.com', '0987654321', '014478332', 'Pulchowk,Lalitpur', '6532', 'fb.com/cidsnepal', '2017-09-12 16:04:29', NULL),
(6, 'dsaf', 'new@cids.com', '9801234567', '5357463', 'ktm', '1242', 'fb.com/cids', '2017-09-12 16:08:01', NULL),
(7, 'efa', 'fjiab@jhsaobvo', 'ue387238', '878987987', 'shfi', '7878', 'ahdfoua/afca', '2017-09-12 16:32:59', NULL),
(8, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur nec arcu vestibulum, elementum ligula a, finibus augue. Donec euismod, velit et rutrum pulvinar, turpis diam luctus enim, quis egestas neque ex sit amet ipsum. Nunc sit amet interdum massa. Ut tincidunt est eros, sed scelerisque lacus pellentesque ut. Sed augue arcu, auctor non aliquet quis, ultrices quis ante. Donec imperdiet metus ac magna finibus sodales. Donec iaculis urna sollicitudin auctor rhoncus.', 'info@cids.com', '+977-9841806109, +977-9851215787', '+977-1-5525830', 'Pulchowk, Lalitpur, Nepal', '1157', 'https://www.facebook.com/nepal', '2017-09-12 16:53:43', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

CREATE TABLE `enquiry` (
  `id` int(11) NOT NULL,
  `fullname` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `subject` text COLLATE utf8_unicode_ci,
  `message` text COLLATE utf8_unicode_ci,
  `added_date` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `enquiry`
--

INSERT INTO `enquiry` (`id`, `fullname`, `email`, `subject`, `message`, `added_date`) VALUES
(1, 'Ansuman', 'smechailes@gmail.com', 'What is your goal?', 'I would like to know what is your goal.', '2017-08-26 10:47:11'),
(2, 'Binod', 'binod@gmail.com', 'hello', 'hello', '2017-08-26 14:24:22');

-- --------------------------------------------------------

--
-- Table structure for table `member_image`
--

CREATE TABLE `member_image` (
  `id` int(11) NOT NULL,
  `image_title` text COLLATE utf8_unicode_ci,
  `member_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `member_image`
--

INSERT INTO `member_image` (`id`, `image_title`, `member_id`) VALUES
(3, 'Hub4Growth-164843201.jpg', NULL),
(4, 'Hub4Growth-228780728.jpg', NULL),
(5, 'Hub4Growth-436747300.jpg', 107),
(6, 'Hub4Growth-33083279.jpg', 110);

-- --------------------------------------------------------

--
-- Table structure for table `org_events`
--

CREATE TABLE `org_events` (
  `id` int(11) NOT NULL,
  `event_title` text COLLATE utf8_unicode_ci,
  `event_location` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `event_time` time DEFAULT NULL,
  `event_date` date DEFAULT NULL,
  `added_by` int(11) DEFAULT NULL,
  `event_summary` text COLLATE utf8_unicode_ci,
  `event_description` text COLLATE utf8_unicode_ci,
  `added_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_date` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `positions`
--

CREATE TABLE `positions` (
  `id` int(11) NOT NULL,
  `pos_title` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pos_description` text COLLATE utf8_unicode_ci,
  `message` text COLLATE utf8_unicode_ci,
  `name` text COLLATE utf8_unicode_ci,
  `type` int(11) DEFAULT NULL,
  `added_by` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `added_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_date` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `positions`
--

INSERT INTO `positions` (`id`, `pos_title`, `pos_description`, `message`, `name`, `type`, `added_by`, `status`, `added_date`, `updated_date`) VALUES
(107, 'Researcher', 'A TYPE OF RESSEARCHER', 'dummy text', 'Tej Binod Pandey', 1, NULL, 1, '2017-09-16 10:38:05', '2017-09-16 13:23:20'),
(110, 'Chairperson', 'Chair ma basne manche', 'Chair aaram dai hos', 'Samyam Bro', 0, NULL, 1, '2017-09-16 14:20:35', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fullname` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `username` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_password` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `role_id` tinyint(4) DEFAULT NULL,
  `added_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_date` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `username`, `user_password`, `status`, `role_id`, `added_date`, `updated_date`) VALUES
(1, 'Admin', 'admin', 'e62a3f6cb73ede63968f989b2c9584f32ec8c420', 1, 1, '2017-08-26 11:06:43', '2017-09-12 14:52:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banner_image`
--
ALTER TABLE `banner_image`
  ADD PRIMARY KEY (`id`),
  ADD KEY `banner_id` (`banner_id`);

--
-- Indexes for table `banner_info`
--
ALTER TABLE `banner_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enquiry`
--
ALTER TABLE `enquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `member_image`
--
ALTER TABLE `member_image`
  ADD PRIMARY KEY (`id`),
  ADD KEY `member_id` (`member_id`);

--
-- Indexes for table `org_events`
--
ALTER TABLE `org_events`
  ADD PRIMARY KEY (`id`),
  ADD KEY `added_by` (`added_by`);

--
-- Indexes for table `positions`
--
ALTER TABLE `positions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `added_by` (`added_by`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banner_image`
--
ALTER TABLE `banner_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `banner_info`
--
ALTER TABLE `banner_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `enquiry`
--
ALTER TABLE `enquiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `member_image`
--
ALTER TABLE `member_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `org_events`
--
ALTER TABLE `org_events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `positions`
--
ALTER TABLE `positions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `member_image`
--
ALTER TABLE `member_image`
  ADD CONSTRAINT `member_image_ibfk_1` FOREIGN KEY (`member_id`) REFERENCES `positions` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `org_events`
--
ALTER TABLE `org_events`
  ADD CONSTRAINT `org_events_ibfk_1` FOREIGN KEY (`added_by`) REFERENCES `users` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `positions`
--
ALTER TABLE `positions`
  ADD CONSTRAINT `positions_ibfk_1` FOREIGN KEY (`added_by`) REFERENCES `users` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
