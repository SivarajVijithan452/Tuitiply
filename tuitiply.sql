-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 22, 2024 at 11:10 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tuitiply`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `instructors`
--

CREATE TABLE `instructors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `heading` varchar(255) NOT NULL,
  `cover_pic` varchar(255) NOT NULL,
  `profile_pic` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `curriculum` varchar(255) NOT NULL,
  `grade` int(11) NOT NULL,
  `class_type` varchar(255) NOT NULL,
  `hourly_rate` decimal(8,2) NOT NULL,
  `rating` decimal(3,2) NOT NULL,
  `location` varchar(255) NOT NULL,
  `region` varchar(255) NOT NULL,
  `classes_offered` varchar(255) NOT NULL,
  `class_duration` int(11) NOT NULL,
  `ages_teach` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `instructors`
--

INSERT INTO `instructors` (`id`, `name`, `description`, `heading`, `cover_pic`, `profile_pic`, `subject`, `curriculum`, `grade`, `class_type`, `hourly_rate`, `rating`, `location`, `region`, `classes_offered`, `class_duration`, `ages_teach`, `created_at`, `updated_at`) VALUES
(1, 'James Taylor', 'I\'m a maths teacher in Colombo', 'AL Maths Teacher', 'https://via.placeholder.com/150', 'https://via.placeholder.com/150', 'Maths', 'OL', 10, 'In Person', 10.00, 4.00, 'Colombo', 'Western', '1-1, group classes', 30, '1-5', NULL, NULL),
(2, 'Sarah Johnson', 'Specialized in teaching Science in Kandy', 'Science Teacher', 'https://via.placeholder.com/150', 'https://via.placeholder.com/150', 'Science', 'OL', 9, 'Online', 12.00, 5.00, 'Kandy', 'Central', '1-1', 60, '6-10', NULL, NULL),
(3, 'Amila Perera', 'Art teacher in Galle with 5 years of experience', 'Art for Beginners', 'https://via.placeholder.com/150', 'https://via.placeholder.com/150', 'Art', 'OL', 8, 'In Person', 8.00, 3.50, 'Galle', 'Southern', '1-1', 45, '6-10', NULL, NULL),
(4, 'Chandana Silva', 'Mathematics tutor for advanced students', 'Mathematics Advanced Level', 'https://via.placeholder.com/150', 'https://via.placeholder.com/150', 'Maths', 'AL', 12, 'In Person and Online', 15.00, 4.80, 'Negombo', 'Western', 'group classes', 90, '11-15', NULL, NULL),
(5, 'Deepika Wijesinghe', 'Science teacher passionate about experiments', 'OL Science Teacher', 'https://via.placeholder.com/150', 'https://via.placeholder.com/150', 'Science', 'OL', 9, 'Online', 13.00, 4.50, 'Kurunegala', 'North Western', '1-1, group classes', 60, '11-15', NULL, NULL),
(6, 'Samantha Gunawardena', 'I teach art classes with a creative approach', 'Creative Art Classes', 'https://via.placeholder.com/150', 'https://via.placeholder.com/150', 'Art', 'AL', 11, 'In Person', 9.00, 4.20, 'Colombo', 'Western', 'group classes', 45, '11-15', NULL, NULL),
(7, 'Tharanga Bandara', 'Teaching Maths to primary students in Batticaloa', 'Primary Maths Teacher', 'https://via.placeholder.com/150', 'https://via.placeholder.com/150', 'Maths', 'OL', 5, 'In Person', 7.00, 3.90, 'Batticaloa', 'Eastern', '1-1', 30, '1-5', NULL, NULL),
(8, 'Nihal Karunarathne', 'Specialist in teaching high school level science', 'Science Teacher', 'https://via.placeholder.com/150', 'https://via.placeholder.com/150', 'Science', 'OL', 10, 'Online', 11.00, 4.30, 'Gampaha', 'Western', '1-1', 60, '6-10', NULL, NULL),
(9, 'Ruwan Abeysinghe', 'Experienced art teacher for middle school students', 'Art Teacher', 'https://via.placeholder.com/150', 'https://via.placeholder.com/150', 'Art', 'OL', 7, 'In Person', 6.00, 4.10, 'Kalutara', 'Western', 'group classes', 40, '6-10', NULL, NULL),
(10, 'Priyanka Rathnayake', 'Teaching advanced mathematics', 'Advanced Mathematics', 'https://via.placeholder.com/150', 'https://via.placeholder.com/150', 'Maths', 'AL', 13, 'In Person', 20.00, 4.90, 'Matara', 'Southern', 'group classes', 90, '11-15', NULL, NULL),
(11, 'Dinesh Perera', 'Science teacher for beginners', 'Science for Beginners', 'https://via.placeholder.com/150', 'https://via.placeholder.com/150', 'Science', 'OL', 6, 'In Person and Online', 14.00, 4.60, 'Badulla', 'Uva', '1-1', 60, '6-10', NULL, NULL),
(12, 'Namal Ekanayake', 'Teaching art with a modern perspective', 'Modern Art Classes', 'https://via.placeholder.com/150', 'https://via.placeholder.com/150', 'Art', 'AL', 11, 'In Person', 10.00, 3.70, 'Ratnapura', 'Sabaragamuwa', 'group classes', 45, '11-15', NULL, NULL),
(13, 'Niluka Rajapakse', 'Helping students achieve excellence in maths', 'Mathematics Expert', 'https://via.placeholder.com/150', 'https://via.placeholder.com/150', 'Maths', 'OL', 9, 'Online', 10.00, 4.50, 'Nuwara Eliya', 'Central', '1-1', 60, '11-15', NULL, NULL),
(14, 'Lakshmi Fonseka', 'Innovative approaches to teaching science', 'Science Tutor', 'https://via.placeholder.com/150', 'https://via.placeholder.com/150', 'Science', 'AL', 12, 'In Person', 17.00, 4.70, 'Anuradhapura', 'North Central', 'group classes', 60, '11-15', NULL, NULL),
(15, 'Kavinda Senarath', 'Teaching mathematics with practical examples', 'Practical Maths Teacher', 'https://via.placeholder.com/150', 'https://via.placeholder.com/150', 'Maths', 'AL', 11, 'In Person and Online', 15.00, 4.40, 'Jaffna', 'Northern', '1-1', 75, '6-10', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_10_22_043627_create_instructors_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `instructors`
--
ALTER TABLE `instructors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `instructors`
--
ALTER TABLE `instructors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
