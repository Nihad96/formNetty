-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Hôte : nettyitsyydev.mysql.db
-- Généré le :  jeu. 10 jan. 2019 à 16:11
-- Version du serveur :  5.5.60-0+deb7u1-log
-- Version de PHP :  5.6.38-0+deb8u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `nettyitsyydev`
--

-- --------------------------------------------------------

--
-- Structure de la table `ca3`
--

CREATE TABLE `ca3` (
  `contact_id` int(10) UNSIGNED NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `tel` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `ville` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `ca3`
--

INSERT INTO `ca3` (`contact_id`, `nom`, `prenom`, `tel`, `email`, `ville`) VALUES
(2, 'Dupré', 'Jacques', '0607080905', 'jacques.dupré@gmail.com', 'Lyon'),
(3, 'Dupain', 'Gilles', '0605040506', 'gilles.dupain@gmail.com', 'Marseille'),
(4, 'Duport', 'François', '0708090807', 'francois.duport@gmail.com', 'Paris'),
(1, 'Dupont', 'Jean', '0605040302', 'jean.dupont@gmail.com', 'Paris');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `ca3`
--
ALTER TABLE `ca3`
  ADD PRIMARY KEY (`contact_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `ca3`
--
ALTER TABLE `ca3`
  MODIFY `contact_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
