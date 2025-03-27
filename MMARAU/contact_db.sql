-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 07, 2025 at 09:23 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `contact_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `contact_details` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `submitted_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `contact_details`, `email`, `message`, `submitted_at`) VALUES
(1, 'vexy', '+284 3683492367', 'jerzanate@gmail.com', 'Hello are you guys open for intake?', '2025-02-28 02:55:25'),
(2, 'vexy', '+284 3683492367', 'neelhappy11@gmail.com', 'i have a complaint', '2025-02-28 04:50:55'),
(3, 'Christine Nguru', '+284 3450766243', 'neelhappy11@gmail.com', 'i wish to apply in the coming months', '2025-02-28 06:14:20'),
(4, 'cate', '+245 789465898', 'cate8346@gmail.com', 'i wish to defer from my course', '2025-02-28 06:39:34'),
(5, 'Christine Nguru', '+245 789465898', 'neelhappy11@gmail.com', 'i wish to return to continue with my masters ', '2025-02-28 07:51:46'),
(6, 'lumina', '+284 3473483947', 'minolumina@gmail.com', 'i have a problem sending over my details', '2025-03-06 18:41:59'),
(7, 'vexy', '+1 846 54857486', 'vewiwujsi@gmail.com', 'hello', '2025-03-06 18:59:37'),
(8, 'mary', '+544 893 468549', 'mira270jane@gmail.com', 'i wish to return my graduation gown', '2025-03-06 19:10:36'),
(9, 'sylus', '+284 3683492367', 'love$deepspace@gmail.com', 'hello?', '2025-03-06 19:54:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
