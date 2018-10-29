-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 29 oct. 2018 à 13:56
-- Version du serveur :  5.7.21
-- Version de PHP :  7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `lesamazones`
--

-- --------------------------------------------------------

--
-- Structure de la table `prelude_episode`
--

DROP TABLE IF EXISTS `prelude_episode`;
CREATE TABLE IF NOT EXISTS `prelude_episode` (
  `chapitre` int(11) NOT NULL,
  `episode` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `auteur` varchar(255) NOT NULL,
  `vote` int(11) NOT NULL,
  `resume` varchar(255) NOT NULL,
  `texte` longtext NOT NULL,
  PRIMARY KEY (`chapitre`,`episode`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `prelude_episode`
--

INSERT INTO `prelude_episode` (`chapitre`, `episode`, `titre`, `auteur`, `vote`, `resume`, `texte`) VALUES
(1, 1, 'Les Amazones : Prélude de l\'Aube - Chapitre 1 Épisode 1', 'Thomas MADER - Asthom', 5, 'Résumé de l\'épisode', 'Écrits de l\'épisode'),
(2, 1, 'Les Amazones : Prélude de l\'Aube - Chapitre 2 Épisode 1', 'Thomas MADER - Asthom', 5, 'Résumé de l\'épisode', 'Écrits de l\'épisode');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
