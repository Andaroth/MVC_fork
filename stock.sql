-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 16 Novembre 2017 à 14:31
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `dmotte`
--

-- --------------------------------------------------------

--
-- Structure de la table `stock`
--

CREATE TABLE `stock` (
  `id` int(11) NOT NULL,
  `title` varchar(256) NOT NULL,
  `descr` text NOT NULL,
  `categ` varchar(256) NOT NULL DEFAULT 'boiserie'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `stock`
--

INSERT INTO `stock` (`id`, `title`, `descr`, `categ`) VALUES
(1, 'Zechai', 'Une chaise en bois', 'boiserie'),
(2, 'Til', 'Un lit en métal', 'métallurgie'),
(3, 'Reaubu', 'Un bureau en bois', 'boiserie'),
(4, 'Felta', 'Une table, mais en Néerlandais', 'divers'),
(5, 'Sicha', 'Un chassis', 'boiserie'),
(6, 'Blota', 'Un tableau noir', 'divers'),
(7, 'Zechai dorée', 'Une chaise en or', 'métallurgie');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `stock`
--
ALTER TABLE `stock`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
