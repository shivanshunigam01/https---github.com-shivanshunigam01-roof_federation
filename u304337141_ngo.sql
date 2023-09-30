-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 21, 2023 at 04:06 AM
-- Server version: 10.6.12-MariaDB-cll-lve
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u304337141_ngo`
--

-- --------------------------------------------------------

--
-- Table structure for table `donate`
--

CREATE TABLE `donate` (
  `id` int(11) NOT NULL,
  `phone` varchar(222) DEFAULT NULL,
  `amount` varchar(222) DEFAULT NULL,
  `txn_id` varchar(222) DEFAULT NULL,
  `status` varchar(222) DEFAULT NULL,
  `created` varchar(222) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `donate`
--

INSERT INTO `donate` (`id`, `phone`, `amount`, `txn_id`, `status`, `created`) VALUES
(2, '7683013448', '100', '23_18019995847182', 'PAYMENT_SUCCESS', 'August 24, 2023, 9:58 pm'),
(3, '8687158171', '100', '23_180199958471821', 'PAYMENT_SUCCESS', 'August 25, 2023, 9:58 pm'),
(4, '09773861927', '100', '23_75786875510649', 'PAYMENT_SUCCESS', 'August 25, 2023, 11:17 pm'),
(5, '09773861927', '100', '23_38659723634271', 'PAYMENT_SUCCESS', 'September 15, 2023, 11:52 am');

-- --------------------------------------------------------

--
-- Table structure for table `tips`
--

CREATE TABLE `tips` (
  `id` int(11) NOT NULL,
  `image` varchar(222) DEFAULT NULL,
  `alttag` varchar(222) DEFAULT NULL,
  `title` varchar(222) DEFAULT NULL,
  `cte` varchar(222) DEFAULT NULL,
  `author` varchar(222) DEFAULT NULL,
  `niche` varchar(222) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `mode` varchar(222) DEFAULT NULL,
  `m_title` varchar(555) DEFAULT NULL,
  `m_desc` varchar(600) DEFAULT NULL,
  `m_keywords` varchar(666) DEFAULT NULL,
  `slug` varchar(222) DEFAULT NULL,
  `status` varchar(222) DEFAULT NULL,
  `created` varchar(222) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tips`
--

INSERT INTO `tips` (`id`, `image`, `alttag`, `title`, `cte`, `author`, `niche`, `content`, `mode`, `m_title`, `m_desc`, `m_keywords`, `slug`, `status`, `created`) VALUES
(71, 'https://rooffederation.com/tips_images/WhatsApp Image 2023-05-15 at 7.05.27 PM.jpeg', 'Food Distribution on 19th may in Vasant Kunj Delhi', 'Food Distribution on 19th may in Vasant Kunj Delhi', NULL, 'Admin', NULL, '<p>On 19th May 2023, Roof Federation, a registered NGO based in Vasant Kunj, Delhi, India, is organizing an event for food distribution and mental health awareness. The event aims to provide food to the poor and needy people in the area and also to have a discussion about mental health and its problems and solutions.</p>\r\n\r\n<p>In addition to providing food, the event will also include conversations with locals about their daily problems and potential solutions. This is an opportunity for the community to come together and support each other in addressing common challenges.</p>\r\n\r\n<p>Roof Federation is committed to making a positive impact in the community and this event is just one example of their efforts. By providing food and raising awareness about mental health, they hope to improve the lives of those in need.</p>\r\n\r\n<p>Come join us on 19th May 2023 at Vasant Kunj, Delhi, India to support this worthy cause and make a difference in your community.</p>\r\n', NULL, 'Food Distribution on 19th may in Vasant Kunj Delhi', 'Food Distribution on 19th may in Vasant Kunj Delhi', NULL, 'fuga-corporis-et-sa', 'active', '19th May 2023 ');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `referby` varchar(222) DEFAULT NULL,
  `name` varchar(111) DEFAULT NULL,
  `email` varchar(222) DEFAULT NULL,
  `phone` varchar(222) DEFAULT NULL,
  `city` varchar(222) DEFAULT NULL,
  `password` varchar(222) DEFAULT NULL,
  `pan` varchar(222) DEFAULT NULL,
  `status` varchar(222) DEFAULT NULL,
  `created` varchar(222) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `referby`, `name`, `email`, `phone`, `city`, `password`, `pan`, `status`, `created`) VALUES
(41, NULL, 'nikhil tyagi', 'niks19588@gmail.com', '09773861927', 'vasant kunj New Delhi', NULL, NULL, NULL, 'August 23, 2023, 11:30 pm'),
(42, NULL, 'Abhishek Kuahwaha', 'abhishekkushwahaa6444@gmail.com', '+19685485535', 'Rewa', NULL, NULL, NULL, 'August 23, 2023, 11:33 pm'),
(43, NULL, 'Mohit', 'mohitku00079@gmail.com', '7683013448', 'Delhi', NULL, NULL, NULL, 'August 24, 2023, 9:57 pm'),
(45, NULL, 'Curevantis', 'nikhil.tradeconnect@gmail.com', '09773861927', 'vasant kunj New Delhi', NULL, NULL, NULL, 'August 24, 2023, 10:04 pm'),
(47, NULL, 'Kathleen Bean', 'teferukop@mailinator.com', '8687158171', 'Omnis cupidatat aut ', '17b3c7061788dbe82de5abe9f6fe22b3', NULL, NULL, 'August 25, 2023, 5:12 pm'),
(48, NULL, 'nikhil tyagi', 'nikhil.tradeconnect@gmail.com', '9773861927', 'Delhi', '7c8dcbf4f46f3be56e23dde900cef53b', NULL, NULL, 'August 25, 2023, 10:58 pm'),
(49, NULL, 'nikhil tyagi', 'nikhil.tradeconnect@gmail.com', '09773861927', 'vasant kunj New Delhi', '7c8dcbf4f46f3be56e23dde900cef53b', NULL, NULL, 'August 25, 2023, 11:04 pm'),
(50, NULL, 'nikhil tyagi', 'nikhil.tradeconnect@gmail.com', '09773861927', 'vasant kunj New Delhi', '7c8dcbf4f46f3be56e23dde900cef53b', NULL, NULL, 'August 25, 2023, 11:11 pm'),
(51, NULL, 'Shikha Sharma', 'shikhasharma229900@gmail.com', '1234567890', 'noida', 'e5ad7ae0fe48a230165d6b15f5be4e5f', NULL, NULL, 'August 26, 2023, 5:35 pm'),
(52, NULL, 'viraaj', 'viraajtyagi002@gmail.com', '7303035481', 'delhi ', '9a0fe6cf4652d6b4d758cf4976ec76ed', NULL, NULL, 'August 30, 2023, 9:14 pm'),
(55, NULL, 'nikhil tyagi', 'nikhil.tradeconnect@gmail.com', '09773861927', 'sector E1', '7c8dcbf4f46f3be56e23dde900cef53b', 'AINPT8965G', NULL, 'September 15, 2023, 11:40 am'),
(56, NULL, 'nikhil tyagi', 'nikhil.tradeconnect@gmail.com', '09773861927', 'sector E1', '69c48798216efe31df8ae4c00561be17', 'AINPT8965G', NULL, 'September 15, 2023, 11:50 am');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donate`
--
ALTER TABLE `donate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tips`
--
ALTER TABLE `tips`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donate`
--
ALTER TABLE `donate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tips`
--
ALTER TABLE `tips`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
