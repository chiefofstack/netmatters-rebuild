-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2023 at 02:35 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `netmatters`
--

-- --------------------------------------------------------

--
-- Table structure for table `editors`
--

CREATE TABLE `editors` (
  `id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile_picture` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `editors`
--

INSERT INTO `editors` (`id`, `first_name`, `last_name`, `profile_picture`) VALUES
(1, 'Netmatters', 'Inc', 'editor-1.webp'),
(2, 'Rob', 'George', 'editor-2.webp');

-- --------------------------------------------------------

--
-- Table structure for table `enquiries`
--

CREATE TABLE `enquiries` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `company` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `telephone` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text NOT NULL,
  `optin` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enquiries`
--

INSERT INTO `enquiries` (`id`, `name`, `company`, `email`, `telephone`, `subject`, `message`, `optin`) VALUES
(1, 'Test', 'rte', 'email@test.com', '123123123', 'subject', 'message', 'off'),
(2, 'name2', 'company', 'email2@test.com', '0000000000', 'subject', 'message', 'off'),
(3, 'name', 'company', 'email@address.com', '11111111111', 'subject', 'message', 'off'),
(4, 'Mark Jason Acab', 'test is a test', 'chiefofstack@gmail.com', '07779999607', 'awesome test', 'this test', 'off'),
(5, 'name name', 'company company', 'email@test.com', '123123123', 'subjecty subject', 'message message', 'on');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext CHARACTER SET utf8,
  `slug` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `featured_image` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_type` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `published_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `content`, `slug`, `featured_image`, `post_type`, `color`, `created_by`, `published_on`) VALUES
(1, 'January Notables 2023', 'Each month, various departments recognise those employees who have excelled in their work and helped Netmatters deliver excellent service to our clients. Our T.R.U.E values are how we started as a company, and we continue to strive to uphold these values as we grow. January was another busy month for Netmatters, with some great contributions from team members along the way.\r\n', '/news/january-notables-2023', 'news-06-02-2023.webp', 'News', 'design', 1, '2023-02-06 00:00:00'),
(2, 'Google Ads Charity Grant - What You Need to Know', 'If you are a charity/non-profit organisation looking to raise awareness and spread your message online, did you know that you could be eligible for up to £8,000 in free advertising with Google per month?', '/insights/google-ads-charity-grant', 'news-01-02-2023.png', 'Insights', 'marketing', 1, '2023-02-01 00:00:00'),
(3, '1st Line Support Technician', 'Salary Range £23k-£28k + Bonuses + Pension Hours 40 hours per week, Monday - Friday Location Wymondham, Great Yarmouth & Cambridge. What We Are Looking For We are looking for a passionate 1st Line Support Technician to join the team and grow alongside us as we embark on many new projects and challenges. ', '/our-careers/1st-line-support-technician', 'news-31-01-2023.webp', 'Careers', 'support', 2, '2023-01-31 00:00:00'),
(4, 'SCS Graduates- The Year of 2022', 'The Netmatters SCS trainee scheme is completely unique to Netmatters, it enables individuals of a variety of experiences to really develop their technical skills, preparing them for a future career within technology, coding, marketing, and developing. On average our training courses take 3 – 6 months to complete providing enough time for individuals to have real hands-on experience provided by industry experts.\r\n', '/news/scs-graduates-the-year-of-2022', 'news-30-01-2023.webp', 'News', 'security', 1, '2023-01-30 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `editors`
--
ALTER TABLE `editors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enquiries`
--
ALTER TABLE `enquiries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `editors`
--
ALTER TABLE `editors`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `enquiries`
--
ALTER TABLE `enquiries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
