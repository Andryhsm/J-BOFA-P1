-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le :  lun. 05 août 2019 à 20:25
-- Version du serveur :  10.2.23-MariaDB-cll-lve
-- Version de PHP :  7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `c1144435c_ahsm`
--

-- --------------------------------------------------------

--
-- Structure de la table `category`
--

CREATE TABLE `category` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `category`
--

INSERT INTO `category` (`id`, `created_by`, `created_at`, `status`, `name`) VALUES
(5, 3, '2019-07-19 14:50:33', 1, 'Architecte-permis de construire'),
(6, 3, '2019-07-19 14:50:52', 1, 'Plomberie -sanitaires'),
(7, 3, '2019-07-19 14:51:12', 1, 'Plomberie -chauffage'),
(8, 3, '2019-07-19 14:51:26', 1, 'Panneaux solaires'),
(9, 3, '2019-07-19 14:51:44', 1, 'Piscine-abri de piscine'),
(10, 3, '2019-07-19 14:52:03', 1, 'Porte-fenêtre'),
(11, 3, '2019-07-19 14:52:19', 1, 'Électricité-alarme'),
(12, 3, '2019-07-19 14:52:33', 1, 'Rénovation Intérieure'),
(13, 3, '2019-07-19 14:52:51', 1, 'Chauffage -climatisation -ventilation'),
(14, 3, '2019-07-19 14:53:06', 1, 'Construction -grros œuvres'),
(15, 3, '2019-07-19 14:53:19', 1, 'Cuisine'),
(16, 3, '2019-07-19 14:53:35', 1, 'Menuiserie (pvc -Alu-bois)'),
(17, 3, '2019-07-19 14:53:51', 1, 'Maçonnerie -démolition'),
(18, 3, '2019-07-19 14:54:05', 1, 'Isolation intérieure /extérieure'),
(19, 3, '2019-07-19 14:54:17', 1, 'Couverture -toiture -charpente'),
(20, 3, '2019-07-19 14:54:29', 1, 'Salle de bain-spa'),
(21, 3, '2019-07-19 14:54:41', 1, 'Peinture -décoration'),
(22, 3, '2019-07-19 14:54:54', 1, 'Ramonage de cheminée'),
(23, 3, '2019-07-19 14:55:07', 1, 'Jardinage -clôture-portail'),
(24, 3, '2019-07-19 14:55:44', 1, 'Sol -carrelage -parquet'),
(25, 3, '2019-07-19 14:56:01', 1, 'Véranda'),
(26, 3, '2019-07-19 14:56:18', 1, 'Diagnostic immobilier'),
(27, 3, '2019-07-19 14:56:32', 1, 'Entretien et traitement'),
(28, 3, '2019-07-19 14:56:46', 1, 'Escalier'),
(29, 3, '2019-07-19 14:57:03', 1, 'Énergies renouvelables'),
(30, 2, '2019-07-21 11:44:39', 1, 'Électricité');

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_07_19_075319_create_categories_table', 2);

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` blob NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `phone`, `email`, `email_verified_at`, `password`, `photo`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Admin USER', '1010101010', 'admin@admin.com', NULL, '$2y$10$Sg1px8V7XDz.v.nootlH5.9lxmYXpKErN0pddl375LLhyRRQcnwV.', NULL, 0x31, NULL, '2019-07-19 11:37:12', '2019-07-19 13:17:40'),
(3, 'Andry HSM', '+261344630738', 'andryhsm@gmail.com', NULL, '$2y$10$Ew5g4qp4w9z3ESgLRl2DL.IWdP40CAIZ9JZnNsYaiRcU0nWCsbFRq', 'L4KFjq2o8MnahDU7i637ZDe3aS2yxDNytrc8D5YP.jpg', 0x31, NULL, '2019-07-19 11:41:16', '2019-07-21 09:46:49');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `category`
--
ALTER TABLE `category`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
