-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 06, 2020 at 03:16 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.3.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `categorys`
--

CREATE TABLE `categorys` (
  `id` int(11) NOT NULL,
  `title` varchar(225) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categorys`
--

INSERT INTO `categorys` (`id`, `title`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'php', '2020-03-31 18:16:06', NULL, NULL),
(3, 'css', '2020-03-31 18:16:41', '2020-04-01 01:36:58', NULL),
(4, 'mysql', '2020-03-31 18:16:41', NULL, NULL),
(5, 'javascript', '2020-03-31 18:17:39', NULL, NULL),
(6, 'python', '2020-03-31 18:17:39', NULL, NULL),
(7, 'oop', '2020-03-31 18:18:16', NULL, NULL),
(13, 'java', '2020-04-03 18:22:29', '2020-04-03 18:56:20', NULL),
(14, 'hamda', '2020-04-03 18:22:38', '2020-04-03 18:54:49', '2020-04-03 18:54:49');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `content` varchar(300) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'Draft',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `post_id`, `user_id`, `content`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(3, 4, 3, 'niceeeeeeeeeeeeee', 'Draft', '2020-04-03 22:58:01', NULL, NULL),
(4, 4, 4, 'cooooooooooooooooool', 'Draft', '2020-04-03 22:58:01', NULL, NULL),
(5, 26, 2, 'very niceeeeeeeeeeee', 'Draft', '2020-04-03 22:59:02', NULL, NULL),
(6, 27, 2, 'very cooooooooooooooool', 'Draft', '2020-04-03 22:59:02', NULL, NULL),
(8, 4, 2, 'halllllpo ahmed\r\n', 'Draft', '2020-04-03 23:51:19', '2020-04-03 23:51:19', NULL),
(9, 4, 2, '7abibinoooooooooooooooooooooooooo', 'Draft', '2020-04-03 23:51:46', '2020-04-03 23:51:46', NULL),
(10, 29, 3, 'very nice course\r\n', 'Draft', '2020-04-04 00:49:00', '2020-04-04 00:49:00', NULL),
(20, 4, 2, 'hallllo', 'Draft', '2020-04-05 23:37:03', '2020-04-05 23:37:03', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(225) NOT NULL,
  `image` text NOT NULL,
  `content` varchar(500) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'Draft',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `category_id`, `user_id`, `title`, `image`, `content`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(4, 1, 2, 'php course', 'boat.jpg', 'php course php course php course php course php course', 'Approved', '2020-03-31 20:07:33', '2020-04-03 04:17:41', NULL),
(26, 3, 3, 'css course', 'download.jpg', 'css course css coursecss course css course css course css course css course', 'Approved', '2020-04-03 17:06:09', '2020-04-03 17:07:03', NULL),
(27, 4, 2, 'mysql coures', 'box.jpg', 'mysql coures mysql coures mysql coures mysql coures ', 'Approved', '2020-04-03 17:06:49', '2020-04-03 17:10:08', NULL),
(28, 7, 4, 'oop course', 'pic04.jpg', 'oop course oop course oop courseoop course  v', 'Approved', '2020-04-04 00:47:36', '2020-04-04 00:48:31', NULL),
(29, 1, 3, 'javascript course', 'birds.jpg', 'javascript course javascript course javascript course javascript course javascript course javascript course javascript course v', 'Approved', '2020-04-04 00:48:22', '2020-04-04 00:48:33', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `post_tag`
--

CREATE TABLE `post_tag` (
  `tag_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post_tag`
--

INSERT INTO `post_tag` (`tag_id`, `post_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 4, '2020-04-04 23:13:39', NULL, NULL),
(3, 4, '2020-04-04 23:14:31', NULL, NULL),
(3, 28, '2020-04-04 23:14:31', NULL, NULL),
(6, 4, '2020-04-04 23:13:39', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` int(11) NOT NULL,
  `name` varchar(225) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'php', '2020-04-04 22:59:45', NULL, NULL),
(2, 'css\r\n', '2020-04-04 22:59:45', NULL, NULL),
(3, 'oop', '2020-04-04 23:01:06', NULL, NULL),
(4, 'javascript', '2020-04-04 23:02:17', NULL, NULL),
(5, 'course', '2020-04-04 23:02:03', NULL, NULL),
(6, 'programing', '2020-04-04 23:02:03', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` text NOT NULL,
  `image` text NOT NULL,
  `role` varchar(50) NOT NULL DEFAULT 'subscriber',
  `randsalt` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `firstname`, `lastname`, `email`, `image`, `role`, `randsalt`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, 'ahmed samy', '2808', 'ahmed', 'samy', 'samy@gmail', '', 'subscriber', '', '2020-03-31 18:48:04', NULL, NULL),
(3, 'mahmoud mostafa', '2707', 'mahmoud', 'mostafa', 'mostafa@gmail', '', 'subscriber', '', '2020-03-31 18:49:15', NULL, NULL),
(4, 'hamda khatab', '2909', 'hamda', 'khatab', 'khatab@gmail', '', 'subscriber', '', '2020-03-31 20:08:44', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categorys`
--
ALTER TABLE `categorys`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `title` (`title`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comment_post` (`post_id`),
  ADD KEY `comment_user` (`user_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `poscategroy` (`category_id`),
  ADD KEY `post_user` (`user_id`);

--
-- Indexes for table `post_tag`
--
ALTER TABLE `post_tag`
  ADD PRIMARY KEY (`tag_id`,`post_id`),
  ADD KEY `post_id` (`post_id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
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
-- AUTO_INCREMENT for table `categorys`
--
ALTER TABLE `categorys`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `posts_ibfk_2` FOREIGN KEY (`category_id`) REFERENCES `categorys` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `post_tag`
--
ALTER TABLE `post_tag`
  ADD CONSTRAINT `post_tag_ibfk_1` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `post_tag_ibfk_2` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
