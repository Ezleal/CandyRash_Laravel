-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-12-2019 a las 16:05:46
-- Versión del servidor: 10.4.6-MariaDB
-- Versión de PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `candy`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `candys`
--

CREATE TABLE `candys` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `title` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `price` float UNSIGNED NOT NULL,
  `stock` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `release_date` datetime DEFAULT NULL,
  `size` int(100) UNSIGNED DEFAULT NULL,
  `categorie_id` int(100) UNSIGNED DEFAULT NULL,
  `proavatar` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `candys`
--

INSERT INTO `candys` (`id`, `created_at`, `updated_at`, `title`, `price`, `stock`, `release_date`, `size`, `categorie_id`, `proavatar`) VALUES
(1, NULL, '2019-12-20 17:57:59', 'PSYCHEDELIC CANDY RASH X 200', 198.9, 23, '2010-10-04 00:00:00', 1000, 9, NULL),
(2, NULL, NULL, 'Chococ Rash', 20, 11, '1997-09-04 00:00:00', 200, 3, NULL),
(3, NULL, NULL, 'Pepas Rash', 9.1, 30, '2004-07-04 00:00:00', 15, 4, NULL),
(4, NULL, '2019-12-20 07:21:40', 'Lolly Candy Flash', 9, 60, '2003-11-04 00:00:00', 180, 5, '1'),
(5, NULL, NULL, 'Dulce Rashy', 8.3, 50, '1999-01-04 00:00:00', 270, 5, NULL),
(6, NULL, NULL, 'Oreo Rash', 49.99, 20, '2008-07-04 00:00:00', 190, 6, NULL),
(7, NULL, NULL, 'Panasea dulce smile', 95.99, 15, '2005-07-04 00:00:00', NULL, 5, NULL),
(8, NULL, NULL, 'Trotsky Rash', 10, 11, '2008-04-04 00:00:00', 917, 8, NULL),
(9, NULL, NULL, 'Zaras Rash bañados', 35, 24, '2009-08-04 00:00:00', 200, 8, NULL),
(10, NULL, NULL, 'Frutos del bosque', 9.1, 39, '2000-02-04 00:00:00', NULL, 12, NULL),
(11, NULL, NULL, 'Ciruela Special Rash', 5.7, 20, '2008-07-04 00:00:00', 120, 11, NULL),
(12, NULL, NULL, 'Torta Rash by Nico Dev', 199.99, 22, '2000-07-04 00:00:00', 2500, 5, NULL),
(13, NULL, NULL, 'Torta Rash by Eze Dev', 299, 0, '2008-03-04 00:00:00', 3400, 5, NULL),
(14, NULL, NULL, 'Torta Rash by Nacho Dev', 320, 2, '2003-04-04 00:00:00', 5000, 5, NULL),
(15, NULL, NULL, 'Ositos Carñoshos', 9.99, 500, '1994-10-04 00:00:00', 250, 3, NULL),
(16, NULL, NULL, 'Basic Candy Rash', 3200, 115, '1989-01-04 00:00:00', 120, 1, NULL),
(17, NULL, NULL, 'Full Candy Rash', 6000, 20, '2008-07-04 00:00:00', 120, 7, NULL),
(18, NULL, NULL, 'Standard Candy Rash', 49.99, 778, '1980-07-04 00:00:00', 180, 6, NULL),
(19, NULL, NULL, 'Verduras Candys', 30, 298, '1988-02-04 00:00:00', 130, 8, NULL),
(20, NULL, NULL, 'Frutas Candys', 9.99, 4789, '1999-03-04 00:00:00', 130, 4, NULL),
(21, NULL, NULL, 'Carnes Candys', 19.99, 12, '2012-05-04 00:00:00', 90, 10, NULL),
(22, '2019-12-19 18:53:09', '2019-12-19 18:53:09', 'Chup.mister pop', 59, 100, NULL, NULL, NULL, NULL),
(24, '2019-12-20 05:41:24', '2019-12-20 05:41:24', 'Chup.mister pop', 45, 100, NULL, NULL, NULL, NULL),
(25, '2019-12-20 08:22:27', '2019-12-20 08:22:27', 'Chup.mister pop', 40, 100, NULL, NULL, NULL, NULL),
(26, '2019-12-20 08:23:28', '2019-12-20 08:23:28', 'Chup.mister pop', 198.9, 100, NULL, NULL, NULL, NULL),
(28, '2019-12-20 08:36:15', '2019-12-20 08:36:15', 'Car.misky', 50, 200, NULL, NULL, NULL, 'kW5SjVbIQNPVZTcqdgB6cjiTMfMRwnE4DdcZzvZJ.jpeg'),
(29, '2019-12-20 17:46:23', '2019-12-20 17:46:23', 'Chocolate', 70, 5, NULL, NULL, NULL, 'solkgjvKCBemS8LdPM7uFi9Qc0sdUfNGzZNBM6KU.jpeg'),
(30, '2019-12-20 18:00:31', '2019-12-20 18:00:31', 'Chup.mister pop', 59, 200, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ranking` int(10) UNSIGNED NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `categories`
--

INSERT INTO `categories` (`id`, `created_at`, `updated_at`, `name`, `ranking`, `active`) VALUES
(1, '2016-07-04 03:00:00', NULL, 'Dulces', 1, 1),
(2, '2014-07-04 03:00:00', NULL, 'Tortas', 2, 1),
(3, '2013-07-04 03:00:00', NULL, 'Caramelos', 3, 1),
(4, '2011-07-04 03:00:00', NULL, 'Candys Rush Specials', 4, 1),
(5, '2010-07-04 03:00:00', NULL, 'Tortas Rash Developer', 5, 1),
(6, '2013-07-04 03:00:00', NULL, 'Pack Candys Basic', 6, 1),
(7, '2005-07-04 03:00:00', NULL, 'Pack Candys Premium', 7, 1),
(8, '2003-07-04 03:00:00', NULL, 'Chocolates', 8, 1),
(9, '2008-07-04 03:00:00', NULL, 'Color Rash', 9, 1),
(10, '2013-07-04 03:00:00', NULL, 'Candy Gourmet', 10, 1),
(11, '2011-07-04 03:00:00', NULL, 'Rash Fruit Candy', 11, 1),
(12, '2013-07-04 03:00:00', NULL, 'Frutos Rojos', 12, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(3, '2016_10_17_130820_create_categories_table', 1),
(4, '2016_10_17_130829_create_candys_table', 1),
(8, '2016_10_17_130913_create_sabors_table', 1),
(9, '2016_10_17_130925_create_sabor_candy_table', 1),
(11, '2014_10_12_000000_create_users_table', 2),
(12, '2014_10_12_100000_create_password_resets_table', 2),
(13, '2019_12_10_042930_create_mi_carrito', 2),
(14, '2019_12_10_044513_add_admin_to_users', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mi_carrito`
--

CREATE TABLE `mi_carrito` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `candy_id` bigint(20) NOT NULL,
  `producto` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `cantidad` int(10) UNSIGNED DEFAULT NULL,
  `subtotal` int(10) UNSIGNED DEFAULT NULL,
  `eliminado` tinyint(4) DEFAULT NULL,
  `comprado` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `mi_carrito`
--

INSERT INTO `mi_carrito` (`id`, `user_id`, `candy_id`, `producto`, `created_at`, `updated_at`, `cantidad`, `subtotal`, `eliminado`, `comprado`) VALUES
(1, 8, 23, '', '2019-12-19 19:22:27', '2019-12-20 15:47:43', NULL, 40, 1, 1),
(2, 8, 5, '', '2019-12-19 19:23:44', '2019-12-20 15:47:43', NULL, 8, 1, 1),
(3, 8, 1, '', '2019-12-19 19:23:47', '2019-12-20 15:47:43', NULL, 200, 1, 1),
(4, 7, 1, '', '2019-12-19 19:24:50', '2019-12-20 08:11:23', 12, 200, 1, 1),
(5, 8, 2, '', '2019-12-19 22:24:42', '2019-12-20 15:47:43', 1, 20, NULL, 1),
(6, 8, 1, '', '2019-12-19 22:24:45', '2019-12-20 15:47:43', 1, 200, NULL, 1),
(7, 7, 1, '', '2019-12-20 02:50:57', '2019-12-20 08:11:23', 1, 200, 1, 1),
(8, 7, 1, '', NULL, '2019-12-20 08:11:23', 15, 50, 1, 1),
(9, 7, 1, '', '2019-12-20 07:28:05', '2019-12-20 08:11:23', 1, 198, 1, 1),
(10, 7, 1, '', '2019-12-20 07:28:10', '2019-12-20 08:11:23', 15, 198, NULL, 1),
(11, 7, 1, '', '2019-12-20 08:12:36', '2019-12-20 08:13:09', 12, 198, 1, 1),
(12, 7, 2, '', '2019-12-20 08:12:39', '2019-12-20 08:13:09', 1, 20, NULL, 1),
(13, 7, 3, '', '2019-12-20 08:12:43', '2019-12-20 08:13:09', 1, 9, NULL, 1),
(14, 7, 4, '', '2019-12-20 08:12:47', '2019-12-20 08:13:09', 1, 9, NULL, 1),
(15, 8, 1, 'PSYCHEDELIC CANDY RASH X 200', '2019-12-20 16:38:26', '2019-12-20 16:38:26', 1, 198, NULL, NULL),
(16, 8, 2, 'Chococ Rash', '2019-12-20 16:38:35', '2019-12-20 16:38:35', 1, 20, NULL, NULL),
(17, 9, 1, 'PSYCHEDELIC CANDY RASH X 200', '2019-12-20 17:55:45', '2019-12-20 17:56:04', 1, 198, 1, 1),
(18, 9, 2, 'Chococ Rash', '2019-12-20 17:55:49', '2019-12-20 17:56:04', 1, 20, NULL, 1),
(19, 9, 4, 'Lolly Candy Flash', '2019-12-20 17:55:52', '2019-12-20 17:56:04', 1, 9, NULL, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(400) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sabors`
--

CREATE TABLE `sabors` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `favorite_candy_id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sabor_candy`
--

CREATE TABLE `sabor_candy` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `sabor_id` int(10) UNSIGNED NOT NULL,
  `candy_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `sabor_candy`
--

INSERT INTO `sabor_candy` (`id`, `created_at`, `updated_at`, `sabor_id`, `candy_id`) VALUES
(1, NULL, NULL, 1, 1),
(2, NULL, NULL, 2, 1),
(3, NULL, NULL, 3, 1),
(4, NULL, NULL, 4, 2),
(5, NULL, NULL, 5, 2),
(6, NULL, NULL, 6, 2),
(7, NULL, NULL, 7, 3),
(8, NULL, NULL, 7, 4),
(9, NULL, NULL, 8, 3),
(10, NULL, NULL, 8, 4),
(11, NULL, NULL, 9, 3),
(12, NULL, NULL, 9, 4),
(13, NULL, NULL, 10, 5),
(14, NULL, NULL, 11, 5),
(15, NULL, NULL, 12, 5),
(16, NULL, NULL, 13, 6),
(17, NULL, NULL, 13, 8),
(18, NULL, NULL, 13, 9),
(19, NULL, NULL, 14, 6),
(20, NULL, NULL, 14, 8),
(21, NULL, NULL, 14, 9),
(22, NULL, NULL, 15, 6),
(23, NULL, NULL, 15, 8),
(24, NULL, NULL, 15, 9),
(25, NULL, NULL, 16, 7),
(26, NULL, NULL, 17, 7),
(27, NULL, NULL, 18, 7),
(28, NULL, NULL, 19, 10),
(29, NULL, NULL, 20, 10),
(30, NULL, NULL, 21, 11),
(31, NULL, NULL, 22, 11),
(32, NULL, NULL, 22, 9),
(33, NULL, NULL, 23, 11),
(34, NULL, NULL, 24, 12),
(35, NULL, NULL, 25, 12),
(36, NULL, NULL, 26, 12),
(37, NULL, NULL, 27, 13),
(38, NULL, NULL, 27, 14),
(39, NULL, NULL, 27, 19),
(40, NULL, NULL, 28, 13),
(41, NULL, NULL, 28, 14),
(42, NULL, NULL, 29, 20),
(43, NULL, NULL, 30, 21);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `avatar`, `remember_token`, `created_at`, `updated_at`, `admin`) VALUES
(1, 'Ezequiel', 'eze@eze.com', NULL, '$2y$10$KuwWf.HQjNrEezOawXTduejVNEIkUkmG9Bpx2dqfRc9jT9eekklli', 'default.png', NULL, '2019-12-17 20:28:25', '2019-12-17 20:28:25', 1),
(2, 'Ezequiel', 'uno@uno.com', NULL, '$2y$10$/gMLDLnC3nA3UTQnuWZO5ODD/4n4RBr9pHGADnokh.uqrxvOuNRqa', 'ZbZXCJqUPLH0LuhvPOKYazJW3BN5tMPwc0XMRciv.jpeg', NULL, '2019-12-17 21:22:05', '2019-12-17 21:22:05', 0),
(3, 'Leonardo', 'leo@leo.com', NULL, '$2y$10$NpcmF6/9h/XZ71G68zR0XO4u.QPv3NGzs9tZUiUIwVZU.uwf/6aJO', 'default.png', NULL, '2019-12-17 21:57:16', '2019-12-17 21:57:16', 0),
(4, 'administrador', 'admin@admin.com', NULL, '$2y$10$hdKop5bwYWr65bLEMaVZ/u37vvbrTff6AIHd7uLSwuJR1xx4RDczm', '7Bfji53zqQdY38Ks6BdJZNHNfqQVJfMfiBGFq8ig.jpeg', NULL, '2019-12-18 06:10:22', '2019-12-18 06:10:22', 1),
(5, 'Ezequiel', 'prueba@prueba.li', NULL, '$2y$10$XWChvlczTkfn7PfuZfLEUe2TqgBJgcoWg6D5n1bL5o9QJEL5sBlI.', 'uzCnVaKhF6oXeWVjrbGhKs9cmyaPad1M8uQNqllt.png', NULL, '2019-12-18 23:38:49', '2019-12-18 23:38:49', 0),
(6, 'Nico', 'nico@nico.com.ar', NULL, '$2y$10$o/WtKIoFGoYb1pVuOSf9fOefVZDnDSKp9/WNCOH6vPILcWgGYDLYC', '/default.png', NULL, '2019-12-18 23:45:59', '2019-12-18 23:45:59', 0),
(7, 'Nicolas Fernandez', 'nicolasemanuelfernandez@gmail.com', NULL, '$2y$10$9gNUaW55yXpps1AFlfHAhO4WbZ5xz4R8TVV6ntnRUn9vDJXHnVGVC', '/default.png', NULL, '2019-12-19 17:58:37', '2019-12-19 17:58:37', 0),
(8, 'lalal', 'lalala@gmail.com', NULL, '$2y$10$k4pIjVjlnuzAcvARChStg.Oaz90wdmqEk.6O1b7kpWNB6T9jB1m3q', 'ZYIq9Bdr54u6w3zp1did8sYXbPeJlFE5C1TrEUtY.jpeg', NULL, '2019-12-19 18:03:53', '2019-12-19 18:03:53', 1),
(9, 'Nicolas Fernandez', 'nicolasemanuelfernandez2@gmail.com', NULL, '$2y$10$/Rn3G13.rriW0a1jd11cFOFzu37F6HgZvBAGTU7t43FxS3JtlGzM6', 'ZbOof3OY9PMrDErZOOSm54qHcMoikxi3CXufKbni.jpeg', NULL, '2019-12-20 17:54:49', '2019-12-20 17:54:49', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `candys`
--
ALTER TABLE `candys`
  ADD PRIMARY KEY (`id`),
  ADD KEY `candys_categorie_id_foreign` (`categorie_id`);

--
-- Indices de la tabla `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_ranking_unique` (`ranking`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `mi_carrito`
--
ALTER TABLE `mi_carrito`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `sabors`
--
ALTER TABLE `sabors`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sabors_favorite_candy_id_foreign` (`favorite_candy_id`);

--
-- Indices de la tabla `sabor_candy`
--
ALTER TABLE `sabor_candy`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sabor_candy_sabor_id_foreign` (`sabor_id`),
  ADD KEY `sabor_candy_candy_id_foreign` (`candy_id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `candys`
--
ALTER TABLE `candys`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de la tabla `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `mi_carrito`
--
ALTER TABLE `mi_carrito`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `sabors`
--
ALTER TABLE `sabors`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT de la tabla `sabor_candy`
--
ALTER TABLE `sabor_candy`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `candys`
--
ALTER TABLE `candys`
  ADD CONSTRAINT `candys_categorie_id_foreign` FOREIGN KEY (`categorie_id`) REFERENCES `categories` (`id`);

--
-- Filtros para la tabla `sabors`
--
ALTER TABLE `sabors`
  ADD CONSTRAINT `sabors_favorite_candy_id_foreign` FOREIGN KEY (`favorite_candy_id`) REFERENCES `candys` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
