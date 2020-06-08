-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 08 juin 2020 à 15:28
-- Version du serveur :  5.7.21
-- Version de PHP :  5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `todo_list`
--

-- --------------------------------------------------------

--
-- Structure de la table `info`
--

DROP TABLE IF EXISTS `info`;
CREATE TABLE IF NOT EXISTS `info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(500) NOT NULL,
  `prenom` varchar(500) NOT NULL,
  `niveau` varchar(500) NOT NULL,
  `domaine` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `info`
--

INSERT INTO `info` (`id`, `nom`, `prenom`, `niveau`, `domaine`) VALUES
(15, 'Gueye', 'Yacine', 'master 1', 'Mathematique2'),
(13, 'Gueye', 'khalipha ababacar', 'master 1', 'informatique'),
(10, 'Gueye', 'Yacine', 'master 1', 'Mathematique'),
(18, 'fall', 'abdou', 'L 1', 'PC'),
(19, 'Gueye', 'abdou', 'L 1', 'informatique'),
(20, 'fall', 'khalipha ababacar', 'Licence 3', 'PC'),
(21, 'TourÃ©', 'khalipha', 'Licence 3', 'Mathematique'),
(22, 'TourÃ©', 'abdou', 'master 1', 'informatique'),
(23, 'fall', 'khalipha ababacar', 'L 1', 'PC'),
(24, 'Fallou', 'ndiaye', 'Master 1', 'PC'),
(25, 'gueye', 'Yacine', 'Master 1', 'Mathematique');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
