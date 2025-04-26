-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2025 at 05:12 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travel_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `submitted_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `message`, `submitted_at`) VALUES
(11, '', '', '', '2025-04-21 14:58:37'),
(12, '', '', '', '2025-04-21 14:58:37'),
(13, '', '', '', '2025-04-21 14:58:37'),
(14, '', '', '', '2025-04-21 15:00:00'),
(17, '', '', '', '2025-04-22 00:40:41'),
(18, '', '', '', '2025-04-22 00:41:29'),
(19, '', '', '', '2025-04-22 00:43:01'),
(20, '', '', '', '2025-04-22 00:47:17'),
(21, 'saman', 'abc@gamial', 'test now', '2025-04-22 00:49:02'),
(22, 'saman', 'abc@gamial', 'test now', '2025-04-22 00:52:45'),
(23, '', '', '', '2025-04-22 00:53:42'),
(32, '', '', '', '2025-04-22 01:14:08'),
(39, 'kalpani', 'yasho@gmail.com', 'hyuii', '2025-04-22 04:27:55'),
(40, 'kalpani', 'yasho@gmail.com', 'hyuii', '2025-04-22 04:29:54'),
(41, 'hgty', 'kalpi@gmail.com', 'gtyu', '2025-04-22 04:30:09'),
(42, 'hgty', 'kalpi@gmail.com', 'gtyu', '2025-04-22 04:36:38'),
(43, 'hgty', 'kalpi@gmail.com', 'gtyu', '2025-04-22 04:37:04'),
(44, 'hgty', 'kalpi@gmail.com', 'gtyu', '2025-04-22 04:37:56'),
(45, 'kk', 'kk@gmail.com', 'kk', '2025-04-22 04:39:01'),
(46, 'td', 'kk@gmail.com', 'kk', '2025-04-22 04:39:38'),
(47, 'df', 'df@gmail.com', 'df', '2025-04-22 04:42:49'),
(48, 'df', 'df@gmail.com', 'df', '2025-04-22 04:43:15'),
(49, 'fg', 'df@gmail.com', 'df', '2025-04-22 04:43:21'),
(50, 'fg', 'df@gmail.com', 'df', '2025-04-22 04:46:36'),
(51, 'fg', 'df@gmail.com', 'df', '2025-04-22 04:48:09'),
(52, 'fg', 'df@gmail.com', 'df', '2025-04-22 04:48:13'),
(53, 'fg', 'df@gmail.com', 'df', '2025-04-22 04:52:45'),
(54, 'kk', 'lk@gmail.com', 'll', '2025-04-22 04:54:18'),
(55, 'kk', 'lk@gmail.com', 'll', '2025-04-22 04:55:38'),
(56, 'kk', 'lk@gmail.com', 'll', '2025-04-22 04:56:48'),
(57, 'kalpani', 'kalpi@gmail.com', 'hi dear', '2025-04-22 04:57:45'),
(58, 'yashoda', 'yasho@gmail.com', 'hi yasho', '2025-04-22 05:22:22'),
(59, 'yashoda', 'yasho@gmail.com', 'hi yasho', '2025-04-22 08:05:28'),
(60, '', '', '', '2025-04-24 00:21:48'),
(61, '', '', '', '2025-04-24 00:22:14'),
(62, 'kk', 'kk@gmail.com', 'jhg', '2025-04-24 00:24:41'),
(63, 'kk', 'kk@gmail.com', 'jhg', '2025-04-24 00:25:16'),
(64, 'hj', 'hj@gmail.com', 'hi', '2025-04-24 00:56:33'),
(65, 'kalpani', 'kh@gmail.com', 'hi', '2025-04-25 01:58:46'),
(66, 'yashoda', 'hy@gmail.com', 'hi yasho', '2025-04-25 04:37:01'),
(67, 'yashoda', 'hy@gmail.com', 'hi yasho', '2025-04-25 04:37:01'),
(68, 'ku', 'ku@gmail.com', 'kerr', '2025-04-25 09:32:55'),
(69, 'ku', 'ku@gmail.com', 'kerr', '2025-04-25 09:32:55'),
(70, 'kll', 'kl@gmail.com', 'hjk', '2025-04-25 09:46:00'),
(71, 'kll', 'kl@gmail.com', 'hjk', '2025-04-25 09:46:00'),
(72, 'uh', 'jkl@gmail.com', 'ddd', '2025-04-25 08:18:09'),
(73, 'uh', 'jkl@gmail.com', 'ddd', '2025-04-25 08:18:09'),
(74, 'klll', 'dff@gmail.com', 'df', '2025-04-25 08:19:44'),
(75, 'klll', 'dff@gmail.com', 'df', '2025-04-25 08:19:44'),
(76, 'ma', 'ma@gmail.com', 'maa', '2025-04-25 08:20:43'),
(77, 'ma', 'ma@gmail.com', 'maa', '2025-04-25 08:20:43'),
(78, 'kee', 'kee@gmail.com', 'hi', '2025-04-25 08:30:24'),
(0, 'kalpa', '', '', '2025-04-25 23:35:39'),
(0, 'kalpi', 'kalpi@gmail.com', 'kk', '2025-04-25 23:35:58');

-- --------------------------------------------------------

--
-- Table structure for table `trip_plans`
--

CREATE TABLE `trip_plans` (
  `id` int(11) NOT NULL,
  `duration` int(11) DEFAULT NULL,
  `trip_type` varchar(50) DEFAULT NULL,
  `interests` text DEFAULT NULL,
  `transport` varchar(50) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `submitted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `trip_plans`
--

INSERT INTO `trip_plans` (`id`, `duration`, `trip_type`, `interests`, `transport`, `username`, `submitted_at`) VALUES
(1, 0, '', '', '', NULL, NULL),
(2, 0, '', '', '', NULL, NULL),
(3, 0, '', '', '', NULL, NULL),
(4, 0, '', '', '', NULL, NULL),
(5, 0, '', '', '', NULL, NULL),
(6, 0, '', '', '', NULL, NULL),
(7, 0, '', '', '', NULL, NULL),
(8, 0, '', '', '', NULL, NULL),
(18, 0, '', '', '', NULL, NULL),
(19, 0, '', '', '', NULL, NULL),
(20, 0, '', '', '', NULL, NULL),
(21, 0, '', '', '', NULL, NULL),
(22, 0, '', '', '', NULL, NULL),
(23, 0, '', '', '', NULL, NULL),
(24, 5, '', 'historical', 'train', NULL, NULL),
(25, 5, '', 'historical', 'train', NULL, NULL),
(26, 6, '', 'food', 'car', NULL, NULL),
(27, 11, '', 'food', 'bike', NULL, NULL),
(28, 11, '', 'food', 'bike', NULL, NULL),
(29, 3, 'adventure', 'historical', 'train', NULL, NULL),
(30, 3, 'adventure', 'wildlife', 'bike', NULL, NULL),
(31, 3, 'cultural', 'historical', 'bike', NULL, NULL),
(32, 2, 'adventure', 'wildlife', 'bus', NULL, NULL),
(33, 0, 'Select type of trip', '', 'Select mode of transport', NULL, NULL),
(34, 4, 'business', 'historical', 'bike', NULL, NULL),
(35, 0, 'Select type of trip', '', 'train', NULL, NULL),
(36, 5, 'adventure', 'wildlife', 'bus', NULL, NULL),
(37, 0, 'Select type of trip', '', 'Select mode of transport', NULL, NULL),
(38, 0, 'cultural', 'wildlife', 'bus', NULL, NULL),
(39, 3, 'adventure', 'historical', 'bus', NULL, NULL),
(40, 1, 'leisure', 'beaches', 'bus', NULL, NULL),
(41, 0, 'adventure', 'wildlife', 'train', 'kalpani', NULL),
(42, 3, 'adventure', 'wildlife', 'train', 'kalpani', NULL),
(43, 5, 'adventure', 'beaches', 'train', 'kalpani', NULL),
(44, 4, 'adventure', 'historical', 'train', 'kalpani', NULL),
(45, 3, 'adventure', 'food', 'bus', 'kalpani', '2025-04-25 12:05:14');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `role` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `created_at`, `role`) VALUES
(1, 'yashoda', 'yasho@gmail.com', '$2y$10$4X2uTISd/5Wib.eHujSFTuDwaWfQsjaGX6PLVn7NgbB8ne9./BEMu', '2025-04-23 07:17:53', NULL),
(4, 'kalpani', 'kk@gmail.com', '$2y$10$AxdUYUcYeH2NWqQdr3ACnOjW5uzsu1VaouYsLGBM1sHSHJs8Teyuu', '2025-04-23 07:22:47', NULL),
(5, 'sapna', 'sapna@gmail.com', '$2y$10$slCUxOz/sfktYA63235Mi.wnVqMUPNf8x6.b2M6ZLprlsmnxnUMk.', '2025-04-24 06:06:44', NULL),
(6, 'malki', 'malki@gmail.com', '$2y$10$s7pMWQXXSklwNEQmmEFwt.F9f7IzoFSYCtTVrAzjPJ5Y6S9zEBpj.', '2025-04-24 06:15:54', NULL),
(7, 'malindu', 'malindu@gmail.com', '$2y$10$YDcVZorWO4uePvpqIJMf8uNsUmLQxkOFdh6MCb6fUcQCqWWE1sEzG', '2025-04-24 06:21:25', NULL),
(8, 'hi', 'hi@gmail.com', '$2y$10$U8FdekosF5vctlV7cYg6DuyaiHtY4Km3c7xVp4V3sx2Q7D1Z7Q2di', '2025-04-24 06:22:09', NULL),
(12, 'df', 'df@gmail.com', '$2y$10$QJ2rqZRmmt5kd8R9f9la4enfb.AGsGfm/ak.mB6EkamaLtN5i4l/2', '2025-04-24 06:23:47', NULL),
(13, 'lk', 'lk@gmail.com', '$2y$10$JJMveip7mdXWpOTfu4U8hu/WomLfWNSR3wwm1mZnWU7dCM7ZsvXY6', '2025-04-24 06:24:36', NULL),
(14, 'jn', 'jn@gmail.com', '$2y$10$PvJn84shEkGHjy8O63kK7OfCLCwaV48rjmHq.eCnJ25MDfs1CMO1K', '2025-04-25 03:01:40', NULL),
(15, 'vb', 'vb@gmail.com', '$2y$10$XfuScRKdrKFEdeSVjdMp0ObZdIefyvU8nU4gPXIG9xH4TK7N1YOf.', '2025-04-25 03:03:20', NULL),
(16, 'ju', 'ju@gmail.com', '$2y$10$lI.JnJnYiTH/KcTYjeFcheeyrZ3tai.zrH11Ejst20ROplAq9cr8.', '2025-04-25 13:39:56', NULL),
(18, 'heme', 'heme@gmail.com', '$2y$10$G62GVZgRoyM7FA91NWDiGueNNic98GaKbawcznlbnpeZg.zuBrtcm', '2025-04-25 16:12:14', 'user'),
(19, 'adminuser1', 'adminuser1@gmail.com', '$2y$10$UC4l.6GqGCbfPN70J5cznuQzZvuDpijQsPwRMNBqYeFD.xZT3FLYK', '2025-04-25 16:13:15', 'admin'),
(20, 'adminuser2', 'adminuser2@gmail.com', '$2y$10$.C3OlQrfelr79js385rgLOq7axRIlwo65GDHkzkkiSqMG6JjKiCN2', '2025-04-26 01:20:04', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `trip_plans`
--
ALTER TABLE `trip_plans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `trip_plans`
--
ALTER TABLE `trip_plans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
