-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 24 jan. 2024 à 09:43
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `users_base1`
--

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nom` varchar(180) NOT NULL,
  `prenom` varchar(180) NOT NULL,
  `email` varchar(180) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `nom`, `prenom`, `email`, `password`) VALUES
(3, 'oblasse', 'Godwin', 'ogbg2023@gmail.com', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441'),
(4, 'yohore', 'Emmanuel', 'kdestnaze@gmail.com', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441'),
(5, 'meme', 'samuolo', 'samuolo@gmail.com', '7c222fb2927d828af22f592134e8932480637c0d'),
(7, 'Satoru', 'Gojo', 'jjk@gmail.com', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441'),
(8, 'Christian', 'Chris', 'chris@gmail.com', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441'),
(9, 'francois', 'edgard', 'far@gmail.com', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441'),
(10, 'lebron', 'james', 'thegoat@gmail.com', '25787b8efb817e8bd1ee9bee928d679e7d0ce2a0');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
