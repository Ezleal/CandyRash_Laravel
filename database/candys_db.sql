-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-12-2019 a las 04:28:49
-- Versión del servidor: 10.4.8-MariaDB
-- Versión de PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `candys_db`
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
  `price` decimal(3,1) UNSIGNED NOT NULL,
  `stock` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `release_date` datetime NOT NULL,
  `size` int(10) UNSIGNED DEFAULT NULL,
  `categorie_id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `candys`
--

INSERT INTO `candys` (`id`, `created_at`, `updated_at`, `title`, `price`, `stock`, `release_date`, `size`, `categorie_id`) VALUES
(1, NULL, NULL, 'Avatar', '10.0', 3, '2010-10-04 00:00:00', 120, 5),
(2, NULL, NULL, 'Titanic', '7.7', 11, '1997-09-04 00:00:00', 320, 3),
(3, NULL, NULL, 'La Guerra de las galaxias: Episodio VI', '9.1', 7, '2004-07-04 00:00:00', NULL, 5),
(4, NULL, NULL, 'La Guerra de las galaxias: Episodio VII', '9.0', 6, '2003-11-04 00:00:00', 180, 5),
(5, NULL, NULL, 'Parque Jurasico', '8.3', 5, '1999-01-04 00:00:00', 270, 5),
(6, NULL, NULL, 'Harry Potter y las Reliquias de la Muerte - Parte 2', '9.0', 2, '2008-07-04 00:00:00', 190, 6),
(7, NULL, NULL, 'Transformers: el lado oscuro de la luna', '0.9', 1, '2005-07-04 00:00:00', NULL, 5),
(8, NULL, NULL, 'Harry Potter y la piedra filosofal', '10.0', 1, '2008-04-04 00:00:00', 120, 8),
(9, NULL, NULL, 'Harry Potter y la cámara de los secretos', '3.5', 2, '2009-08-04 00:00:00', 200, 8),
(10, NULL, NULL, 'El rey león', '9.1', 3, '2000-02-04 00:00:00', NULL, 10),
(11, NULL, NULL, 'Alicia en el país de las maravillas', '5.7', 2, '2008-07-04 00:00:00', 120, NULL),
(12, NULL, NULL, 'Buscando a Nemo', '8.3', 2, '2000-07-04 00:00:00', 110, 7),
(13, NULL, NULL, 'Toy Story', '6.1', 0, '2008-03-04 00:00:00', 150, 7),
(14, NULL, NULL, 'Toy Story 2', '3.2', 2, '2003-04-04 00:00:00', 120, 7),
(15, NULL, NULL, 'La vida es bella', '8.3', 5, '1994-10-04 00:00:00', NULL, 3),
(16, NULL, NULL, 'Mi pobre angelito', '3.2', 1, '1989-01-04 00:00:00', 120, 1),
(17, NULL, NULL, 'Intensamente', '9.0', 2, '2008-07-04 00:00:00', 120, 7),
(18, NULL, NULL, 'Carrozas de fuego', '9.9', 7, '1980-07-04 00:00:00', 180, NULL),
(19, NULL, NULL, 'Big', '7.3', 2, '1988-02-04 00:00:00', 130, 8),
(20, NULL, NULL, 'I am Sam', '9.0', 4, '1999-03-04 00:00:00', 130, 3),
(21, NULL, NULL, 'Hotel Transylvania', '7.1', 1, '2012-05-04 00:00:00', 90, 10);

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(4, 'administrador', 'admin@admin.com', NULL, '$2y$10$hdKop5bwYWr65bLEMaVZ/u37vvbrTff6AIHd7uLSwuJR1xx4RDczm', '7Bfji53zqQdY38Ks6BdJZNHNfqQVJfMfiBGFq8ig.jpeg', NULL, '2019-12-18 06:10:22', '2019-12-18 06:10:22', 1);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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

--
-- Filtros para la tabla `sabor_candy`
--
ALTER TABLE `sabor_candy`
  ADD CONSTRAINT `sabor_candy_candy_id_foreign` FOREIGN KEY (`candy_id`) REFERENCES `candys` (`id`),
  ADD CONSTRAINT `sabor_candy_sabor_id_foreign` FOREIGN KEY (`sabor_id`) REFERENCES `sabors` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
