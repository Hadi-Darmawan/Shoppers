-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Bulan Mei 2020 pada 03.14
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shoppers`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `admins`
--

INSERT INTO `admins` (`id`, `username`, `password`, `name`, `profile_image`, `phone`, `remember_token`, `created_at`, `updated_at`) VALUES
(17, 'ghadi_darmawan', '$2y$10$RX49vJPLp58aJ/HzRxnwk.cH8/SSRyznS2auLir4oFFg7lLK0v2yK', 'I Gede Hadi Darmawan', 'profile_image/jrh6hYFAXEcU8mKhkByEp3tDsUzNCAVkx6ic6DvY.jpeg', '0895382179880', NULL, '2020-04-21 03:39:03', '2020-04-21 03:39:03'),
(22, 'ngurah_dwiva', '$2y$10$z1aMhkYZPpQs3opanGRHaus6usFppIcLZB.o5pjuEfxS29wqDbXNa', 'Ngurah Dwiva', 'profile_image/O2eP2pEnZezlfLuDWiz9TVVAVLLwdgfdBeyReiMb.jpeg', '0895382179880', NULL, '2020-05-01 19:33:37', '2020-05-01 19:33:37');

-- --------------------------------------------------------

--
-- Struktur dari tabel `couriers`
--

CREATE TABLE `couriers` (
  `id` int(11) NOT NULL,
  `courier` varchar(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `couriers`
--

INSERT INTO `couriers` (`id`, `courier`, `created_at`, `updated_at`) VALUES
(1, 'JNE', '2020-05-01 20:12:33', '2020-05-01 20:12:33'),
(4, 'Ali Express', '2020-05-01 20:58:08', '2020-05-01 21:20:16'),
(5, 'JNT', '2020-05-01 20:58:31', '2020-05-01 21:07:47'),
(7, 'Pos Indonesia', '2020-05-07 04:15:38', '2020-05-07 04:15:38');

-- --------------------------------------------------------

--
-- Struktur dari tabel `discounts`
--

CREATE TABLE `discounts` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `percentage` double NOT NULL,
  `start` date NOT NULL,
  `end` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `discounts`
--

INSERT INTO `discounts` (`id`, `product_id`, `percentage`, `start`, `end`, `created_at`, `updated_at`) VALUES
(22, 33, 25, '2020-05-25', '2020-05-28', '2020-05-09 17:11:15', '2020-05-09 17:11:15'),
(23, 34, 15, '2020-05-24', '2020-05-26', '2020-05-09 17:12:11', '2020-05-09 17:12:11');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_03_12_003048_create_admins_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `price` int(8) NOT NULL,
  `description` text NOT NULL,
  `product_rate` int(5) DEFAULT NULL,
  `stock` int(5) NOT NULL,
  `weight` int(6) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `products`
--

INSERT INTO `products` (`id`, `product_name`, `price`, `description`, `product_rate`, `stock`, `weight`, `created_at`, `updated_at`) VALUES
(33, 'Product Testing Pertama', 25000, 'Product testing pertama untuk modul 2', NULL, 9, 5, '2020-05-09 17:11:15', '2020-05-09 17:11:15'),
(34, 'Product Testing Kedua', 27000, 'Product testing kedua untuk modul 2', NULL, 25, 9, '2020-05-09 17:12:11', '2020-05-09 17:12:11');

-- --------------------------------------------------------

--
-- Struktur dari tabel `product_categories`
--

CREATE TABLE `product_categories` (
  `id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `product_categories`
--

INSERT INTO `product_categories` (`id`, `category_name`, `created_at`, `updated_at`) VALUES
(1, 'Computer', '2020-04-17 01:58:16', NULL),
(3, 'Science', '2020-04-17 02:54:57', '2020-05-02 03:00:25'),
(4, 'Adult', '2020-04-16 19:24:40', '2020-05-09 05:00:08'),
(13, 'Fiction', '2020-05-02 03:00:46', '2020-05-02 03:00:46');

-- --------------------------------------------------------

--
-- Struktur dari tabel `product_category_details`
--

CREATE TABLE `product_category_details` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product__category_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `product_category_details`
--

INSERT INTO `product_category_details` (`id`, `product_id`, `product__category_id`, `created_at`, `updated_at`) VALUES
(37, 33, 1, NULL, NULL),
(38, 33, 3, NULL, NULL),
(39, 34, 1, NULL, NULL),
(40, 34, 13, NULL, NULL),
(41, 34, 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `product_images`
--

CREATE TABLE `product_images` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `product_images`
--

INSERT INTO `product_images` (`id`, `product_id`, `image_name`, `created_at`, `updated_at`) VALUES
(46, 33, 'image_name/fHy0Kwj6Ofygp6mD7UNzgURZ2z5p6fowg6euGlGJ.png', '2020-05-09 17:11:15', '2020-05-09 17:11:15'),
(47, 33, 'image_name/E0H0siifDgxHYMBVhtU7wDI4Gw4vC2TKjpuw3vQE.png', '2020-05-09 17:11:15', '2020-05-09 17:11:15'),
(48, 33, 'image_name/xmzyn836e4UQu6BJikMGR5Ate0f3oszh0z8eQp1n.png', '2020-05-09 17:11:15', '2020-05-09 17:11:15'),
(49, 34, 'image_name/oQMEWIzl9ZaY6cGHE2HnLirxW7bLXIwIj330ztmo.png', '2020-05-09 17:12:11', '2020-05-09 17:12:11'),
(50, 34, 'image_name/ZVaxvDkMIoygns98myeFFsyNNYuMF58iYJA8oSPE.png', '2020-05-09 17:12:11', '2020-05-09 17:12:11'),
(51, 34, 'image_name/bkw6YrjVh1ImD0zK2h62sjlDA88gDWRks6io1pxl.png', '2020-05-09 17:12:11', '2020-05-09 17:12:11');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `profile_image`, `status`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(7, 'I Gede Hadi Darmawan', 'ghadi.darmawan@gmail.com', 'profile_image/YuJyIbEQ6vom7mBRh4RyJNXXSvdKRl8pFOFVcKUF.jpeg', 'Active', NULL, '$2y$10$1/AAl9vnqTuNdwjORZj7t.H8HowQXUZMqsp8D3e8MqG9sVHkz2bim', NULL, '2020-04-21 03:40:55', '2020-04-21 03:40:55'),
(8, 'Hadi Darmawan', 'dedy.dwiva@outlook.com', 'profile_image/K7iJdre1qMopIILwGrFb81cLOISdEKjb9Cj7ZC3Y.jpeg', 'Active', NULL, '$2y$10$/bPTVwnOe/PBbAug/I1i2uNOPUGsdUzrZUc08voMqJPBFSniP/0h6', NULL, '2020-04-30 05:43:51', '2020-04-30 05:43:51'),
(9, 'Hadi Darmawan', 'hadi@gmail.com', 'profile_image/cgYzicwDpHlqdjuqnamdmdRXM6rQLEzIKrwAxdne.jpeg', 'Active', NULL, '$2y$10$Xg49H0fcXW2GqLtF3e/KSOJyM.HbHhoB/E/4CJysBHjwqQ0DQ9twy', NULL, '2020-05-01 00:10:49', '2020-05-01 00:10:49');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_username_unique` (`username`);

--
-- Indeks untuk tabel `couriers`
--
ALTER TABLE `couriers`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `discounts`
--
ALTER TABLE `discounts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `discounts_ibfk_1` (`product_id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `product_category_details`
--
ALTER TABLE `product_category_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `category_id` (`product__category_id`);

--
-- Indeks untuk tabel `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `couriers`
--
ALTER TABLE `couriers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `discounts`
--
ALTER TABLE `discounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT untuk tabel `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `product_category_details`
--
ALTER TABLE `product_category_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT untuk tabel `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `discounts`
--
ALTER TABLE `discounts`
  ADD CONSTRAINT `discounts_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `product_category_details`
--
ALTER TABLE `product_category_details`
  ADD CONSTRAINT `product_category_details_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `product_category_details_ibfk_2` FOREIGN KEY (`product__category_id`) REFERENCES `product_categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `product_images`
--
ALTER TABLE `product_images`
  ADD CONSTRAINT `product_images_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
