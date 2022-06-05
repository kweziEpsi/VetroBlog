-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2022 at 10:46 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vetro`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Laravel', 'laravel', '2022-06-03 13:25:17', '2022-06-03 13:25:17'),
(2, 'Code Igniter', 'code-igniter', '2022-06-03 13:25:48', '2022-06-03 13:25:48'),
(3, 'Faclon', 'faclon', '2022-06-03 13:27:05', '2022-06-03 13:27:05'),
(4, 'Symfony', 'symfony', '2022-06-05 15:15:50', '2022-06-05 15:15:50'),
(5, 'React', 'react', '2022-06-05 15:16:23', '2022-06-05 15:16:23');

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
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_06_03_125551_create_categories_table', 2),
(6, '2022_06_03_133846_create_posts_table', 3),
(7, '2022_06_03_185042_add_title_to_posts_table', 4),
(8, '2022_06_05_131803_add_foreign_key_to_posts_table', 5),
(9, '2022_06_05_153143_create_ratings_table', 6),
(10, '2022_06_05_171756_remove_drop_tating_from_ratings', 7),
(11, '2022_06_05_172234_remove_tating_from_ratings', 8);

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
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `category_id`, `name`, `title`, `slug`, `short`, `image`, `description`, `created_at`, `updated_at`) VALUES
(12, 1, 1, 'Laravel For Begginers', 'Laravel Helpers', 'laravel-for-begginers', 'Vitae suscipit tellus mauris a diam. Morbi enim nunc faucibus a pellentesque sit. Donec adipiscing tristique risus nec. Mauris nunc congue nisi vitae suscipit tellus. Libero enim sed faucibus turpis in eu mi', 'laravel.jpg', 'Vitae suscipit tellus mauris a diam. Morbi enim nunc faucibus a pellentesque sit. Donec adipiscing tristique risus nec. Mauris nunc congue nisi vitae suscipit tellus. Dolor sit amet consectetur adipiscing. Libero enim sed faucibus turpis in eu mi. Nulla facilisi morbi tempus iaculis urna id volutpat. Metus vulputate eu scelerisque felis imperdiet proin fermentum leo vel. Semper viverra nam libero justo laoreet sit amet cursus. Sapien eget mi proin sed libero enim sed faucibus turpis. Aliquam nulla facilisi cras fermentum. Sed lectus vestibulum mattis ullamcorper velit sed ullamcorper. Blandit cursus risus at ultrices. Bibendum est ultricies integer quis auctor elit sed.', '2022-06-05 12:47:35', '2022-06-05 13:29:52'),
(13, 2, 4, 'Symfony for begginers', 'Creating Routes', 'symfony-for-begginers', 'Odio euismod lacinia at quis risus. Tellus id interdum velit laoreet id donec ultrices tincidunt arcu. Nisi lacus sed viverra tellus in hac. Maecenas ultricies mi eget mauris pharetra et ultrices neque. Massa eget egestas purus viverra.', 'symf.png', 'Odio euismod lacinia at quis risus. Tellus id interdum velit laoreet id donec ultrices tincidunt arcu. Nisi lacus sed viverra tellus in hac. Maecenas ultricies mi eget mauris pharetra et ultrices neque. Massa eget egestas purus viverra. In eu mi bibendum neque egestas congue quisque. Enim ut sem viverra aliquet. Consectetur libero id faucibus nisl tincidunt eget nullam. Habitant morbi tristique senectus et netus et malesuada fames ac. Ac odio tempor orci dapibus. Amet porttitor eget dolor morbi non. Nec tincidunt praesent semper feugiat nibh sed pulvinar. Lectus quam id leo in vitae turpis massa sed elementum.', '2022-06-05 13:17:58', '2022-06-05 13:17:58'),
(14, 1, 5, 'React for begginers', 'Frontend Tutorials', 'react-for-begginers', 'Odio euismod lacinia at quis risus. Tellus id interdum velit laoreet id donec ultrices tincidunt arcu. Nisi lacus sed viverra tellus in hac. Maecenas ultricies mi eget mauris pharetra et ultrices neque.', 'img3.png', 'Odio euismod lacinia at quis risus. Tellus id interdum velit laoreet id donec ultrices tincidunt arcu. Nisi lacus sed viverra tellus in hac. Maecenas ultricies mi eget mauris pharetra et ultrices neque. Massa eget egestas purus viverra. In eu mi bibendum neque egestas congue quisque. Enim ut sem viverra aliquet. Consectetur libero id faucibus nisl tincidunt eget nullam. Habitant morbi tristique senectus et netus et malesuada fames ac. Ac odio tempor orci dapibus. Amet porttitor eget dolor morbi non. Nec tincidunt praesent semper feugiat nibh sed pulvinar. Lectus quam id leo in vitae turpis massa sed elementum.', '2022-06-05 13:19:21', '2022-06-05 13:19:21'),
(15, 2, 2, 'Code Iginiter For Begginers', 'Basic Routing', 'code-iginiter-for-begginers', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lectus sit amet est placerat in egestas erat imperdiet.', 'unnamed.png', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lectus sit amet est placerat in egestas erat imperdiet. Montes nascetur ridiculus mus mauris vitae ultricies. Ullamcorper a lacus vestibulum sed. Aliquam purus sit amet luctus venenatis lectus magna fringilla. Elementum integer enim neque volutpat ac tincidunt vitae semper. Facilisis magna etiam tempor orci. Imperdiet massa tincidunt nunc pulvinar sapien et ligula ullamcorper malesuada. Eros donec ac odio tempor orci. Scelerisque varius morbi enim nunc faucibus a pellentesque sit amet. Volutpat consequat mauris nunc congue nisi vitae suscipit tellus mauris. Pharetra et ultrices neque ornare aenean euismod elementum nisi quis. Arcu cursus euismod quis viverra nibh cras pulvinar. Diam ut venenatis tellus in metus vulputate eu scelerisque.', '2022-06-05 18:25:30', '2022-06-05 18:25:30');

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

CREATE TABLE `ratings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `post_id` bigint(20) UNSIGNED DEFAULT NULL,
  `rating` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ratings`
--

INSERT INTO `ratings` (`id`, `user_id`, `post_id`, `rating`, `created_at`, `updated_at`) VALUES
(1, 2, 12, 5, '2022-06-05 16:32:45', '2022-06-05 16:32:45'),
(2, 2, 12, 5, '2022-06-05 16:35:58', '2022-06-05 16:35:58'),
(3, 2, 12, 3, '2022-06-05 16:36:33', '2022-06-05 16:36:33'),
(4, 2, 14, 4, '2022-06-05 18:27:28', '2022-06-05 18:27:28'),
(5, 2, 14, 5, '2022-06-05 18:27:52', '2022-06-05 18:27:52'),
(6, 2, 14, 5, '2022-06-05 18:28:07', '2022-06-05 18:28:07'),
(7, 2, 14, 5, '2022-06-05 18:29:06', '2022-06-05 18:29:06'),
(8, 2, 14, 5, '2022-06-05 18:29:21', '2022-06-05 18:29:21'),
(9, 2, 12, 5, '2022-06-05 18:30:20', '2022-06-05 18:30:20'),
(10, 2, 12, 5, '2022-06-05 18:30:36', '2022-06-05 18:30:36'),
(11, 2, 12, 5, '2022-06-05 18:30:50', '2022-06-05 18:30:50'),
(12, 2, 12, 5, '2022-06-05 18:31:05', '2022-06-05 18:31:05'),
(13, 2, 12, 5, '2022-06-05 18:31:27', '2022-06-05 18:31:27'),
(14, 2, 12, 5, '2022-06-05 18:31:42', '2022-06-05 18:31:42'),
(15, 2, 12, 5, '2022-06-05 18:31:55', '2022-06-05 18:31:55'),
(16, 2, 12, 5, '2022-06-05 18:33:18', '2022-06-05 18:33:18');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Kwezi', 'kwezi@vetro.co.za', NULL, '$2y$10$Zl0wAAEq8DXuCyf7KFIZ..jDfIFDM79BL/7ZCwVBfN3JVhguSZ0l2', NULL, '2022-06-02 11:34:03', '2022-06-02 11:34:03'),
(2, 'Tuleey', 'tuleey@vetro.co.za', NULL, '$2y$10$/KhMHq0f2nLH8mKqkLYAKujke29BQcd6eH1E31CikJ2JlEflVSlrq', NULL, '2022-06-05 15:30:13', '2022-06-05 15:30:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_slug_unique` (`slug`),
  ADD KEY `posts_user_id_foreign` (`user_id`),
  ADD KEY `posts_category_id_foreign` (`category_id`);

--
-- Indexes for table `ratings`
--
ALTER TABLE `ratings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ratings_user_id_foreign` (`user_id`),
  ADD KEY `ratings_post_id_foreign` (`post_id`);

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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `ratings`
--
ALTER TABLE `ratings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `posts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `ratings`
--
ALTER TABLE `ratings`
  ADD CONSTRAINT `ratings_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `ratings_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
