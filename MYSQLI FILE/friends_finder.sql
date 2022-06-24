-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2022 at 08:52 AM
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
-- Database: `friends_finder`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_subscribers`
--

CREATE TABLE `about_subscribers` (
  `id` bigint(20) NOT NULL,
  `subscriber_id` bigint(20) NOT NULL,
  `profile_pic` varchar(100) DEFAULT 'profile.jpg',
  `cover_pic` varchar(100) DEFAULT 'covor_pic.jpg',
  `school` varchar(100) DEFAULT NULL,
  `school_start` date DEFAULT NULL,
  `school_end` date DEFAULT NULL,
  `college` varchar(100) DEFAULT NULL,
  `college_starts` date DEFAULT NULL,
  `college_end` date DEFAULT NULL,
  `university` varchar(100) DEFAULT NULL,
  `university_starts` date DEFAULT NULL,
  `university_end` date DEFAULT NULL,
  `work` varchar(150) DEFAULT NULL,
  `about_details` text DEFAULT NULL,
  `nike_name` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about_subscribers`
--

INSERT INTO `about_subscribers` (`id`, `subscriber_id`, `profile_pic`, `cover_pic`, `school`, `school_start`, `school_end`, `college`, `college_starts`, `college_end`, `university`, `university_starts`, `university_end`, `work`, `about_details`, `nike_name`, `created_at`, `updated_at`) VALUES
(8, 1, '20220604113904profile.jpg', '20220605171235cover.jpg', 'Nabinagar Pilot High School', '2010-09-01', '2013-12-19', 'Nabinagar Govt. College', '2014-01-15', '2015-07-16', 'University of South Asia', '2016-04-01', '2020-04-30', 'Jobless', 'Nothing', 'JD', '2022-06-04 05:39:04', '2022-06-05 11:12:35'),
(9, 3, '20220604165027profile.jpg', '20220604164817cover.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Student', NULL, 'Jaan', '2022-06-04 10:47:03', '2022-06-04 10:54:04'),
(14, 4, 'profile.jpg', 'covor_pic.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-07 00:33:34', '2022-06-07 00:33:34');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) NOT NULL,
  `subscriber_id` bigint(20) NOT NULL,
  `post_id` bigint(20) NOT NULL,
  `about_subscriber_id` bigint(20) NOT NULL,
  `comment` varchar(255) DEFAULT NULL,
  `created_at` time DEFAULT NULL,
  `updated_at` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `subscriber_id`, `post_id`, `about_subscriber_id`, `comment`, `created_at`, `updated_at`) VALUES
(1, 3, 25, 9, 'nice pic', '15:51:12', '15:51:12'),
(2, 3, 26, 9, 'wow', '16:04:46', '16:04:46'),
(4, 3, 26, 9, 'nice pic', '18:03:56', '18:03:56'),
(5, 1, 26, 8, 'nice pic', '03:48:34', '03:48:34');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `friends`
--

CREATE TABLE `friends` (
  `id` bigint(20) NOT NULL,
  `subscriber_id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'request',
  `created_at` time DEFAULT NULL,
  `updated_at` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `friends`
--

INSERT INTO `friends` (`id`, `subscriber_id`, `user_id`, `status`, `created_at`, `updated_at`) VALUES
(3, 3, 1, 'request', '05:23:56', '05:23:56'),
(4, 1, 3, 'request', '06:24:37', '06:24:37'),
(5, 2, 4, 'request', '06:34:56', '06:34:56');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` bigint(20) NOT NULL,
  `subscriber_id` bigint(20) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `likes` bigint(20) DEFAULT NULL,
  `dislikes` bigint(20) DEFAULT NULL,
  `description` text NOT NULL,
  `status` enum('only_me','friends','public') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) NOT NULL,
  `subscriber_id` bigint(20) NOT NULL,
  `message` varchar(255) DEFAULT NULL,
  `created_at` time DEFAULT NULL,
  `updated_at` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `id` bigint(20) NOT NULL,
  `subscriber_id` bigint(20) NOT NULL,
  `post_id` bigint(20) NOT NULL,
  `photo` varchar(100) DEFAULT NULL,
  `created_at` time DEFAULT NULL,
  `updated_at` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) NOT NULL,
  `subscriber_id` bigint(20) NOT NULL,
  `about_subscriber_id` bigint(20) NOT NULL,
  `post_details` text DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `video` varchar(255) DEFAULT NULL,
  `likes` int(11) DEFAULT NULL,
  `dislikes` int(11) DEFAULT NULL,
  `status` varchar(50) DEFAULT 'public',
  `created_at` time DEFAULT NULL,
  `updated_at` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `subscriber_id`, `about_subscriber_id`, `post_details`, `photo`, `video`, `likes`, `dislikes`, `status`, `created_at`, `updated_at`) VALUES
(23, 1, 8, 'My mom always said life was like a box of chocolates. You never know what you\'re gonna get', '20220606101828.jpg', NULL, NULL, NULL, 'friends', '10:18:28', '10:18:28'),
(24, 1, 8, 'Nice', '20220606102233.jpg', NULL, NULL, NULL, NULL, '10:22:33', '10:22:33'),
(25, 3, 9, NULL, '20220606153324.jpg', NULL, NULL, NULL, 'friends', '15:33:24', '15:33:24'),
(26, 3, 9, NULL, '20220606160438.jpg', NULL, NULL, NULL, NULL, '16:04:38', '16:04:38'),
(28, 1, 8, 'good morning', '20220607040855.jpg', NULL, NULL, NULL, NULL, '04:08:55', '04:08:55');

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `id` bigint(20) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `date_of_birth` date NOT NULL,
  `sex` enum('male','female') NOT NULL,
  `city` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `ip_address` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`id`, `first_name`, `last_name`, `email`, `date_of_birth`, `sex`, `city`, `country`, `ip_address`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Jahid', 'Hasan', 'jahid@gmail.com', '1997-10-05', 'male', 'Dhaka', 'BD', '127.0.0.1', '123456789', '2022-06-02 04:45:43', '2022-06-02 04:45:43'),
(2, 'Sabiha', 'Hasan', 'sabiha@gmail.com', '1999-11-16', 'female', 'Dhaka', 'BD', '127.0.0.1', '12345', '2022-06-02 05:42:29', '2022-06-02 05:42:29');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_of_birth` date NOT NULL,
  `sex` enum('male','female') COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ip_address` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `date_of_birth`, `sex`, `city`, `country`, `ip_address`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Jahid', 'Hasan', 'jahid@gmail.com', '2022-05-30', 'male', 'Dhaka', 'BD', NULL, NULL, '$2y$10$MHBMqYWhffrFtmK8ztyaR.Wlv8yKIc8vsHoVNNyIFBzlcSPnyoIAe', NULL, '2022-06-02 06:58:01', '2022-06-02 06:58:01'),
(2, 'Sabiha', 'Hasan', 'sabiha@gmail.com', '1999-11-16', 'female', 'Dhaka', 'BD', '127.0.0.1', NULL, '$2y$10$maBiaVpbpVh/E.3MNs7xGu9eNNlodaYnRoJoUYd0baQPaAvIgvTAO', NULL, '2022-06-02 23:00:03', '2022-06-02 23:00:03'),
(3, 'Naim', 'Naim', 'naim@gmail.com', '2022-05-04', 'male', 'Mohammadpur', 'BD', '127.0.0.1', NULL, '$2y$10$gzZifAzRJ9bPkfkYk/EjbOUCYX7Uq/EckjTSKad3kSiT4D4EKeEgW', NULL, '2022-06-02 23:09:36', '2022-06-02 23:09:36'),
(4, 'test', 'test', 'test@gmail.com', '2022-06-01', 'male', 'Zigatola', 'BD', '127.0.0.1', NULL, '$2y$10$PGUfOMv7wVBVtOwmNiDzYuBb5otcLKqrM5G8Dt4s2k189A3Z/iiUC', NULL, '2022-06-07 00:26:08', '2022-06-07 00:26:08');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` bigint(20) NOT NULL,
  `subscriber_id` bigint(20) NOT NULL,
  `post_id` bigint(20) NOT NULL,
  `video` varchar(100) DEFAULT NULL,
  `created_at` time DEFAULT NULL,
  `updated_at` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_subscribers`
--
ALTER TABLE `about_subscribers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subscriber_id` (`subscriber_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post_id` (`post_id`),
  ADD KEY `subscriber_id` (`subscriber_id`),
  ADD KEY `about_subscriber_id` (`about_subscriber_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `friends`
--
ALTER TABLE `friends`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subscriber_id` (`subscriber_id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subscriber_id` (`subscriber_id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subscriber_id` (`subscriber_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subscriber_id` (`subscriber_id`),
  ADD KEY `post_id` (`post_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subscriber_id` (`subscriber_id`),
  ADD KEY `about_subscriber_id` (`about_subscriber_id`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subscriber_id` (`subscriber_id`),
  ADD KEY `post_id` (`post_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_subscribers`
--
ALTER TABLE `about_subscribers`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `friends`
--
ALTER TABLE `friends`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
