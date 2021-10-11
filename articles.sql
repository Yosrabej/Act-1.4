-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Lun 11 Octobre 2021 à 12:29
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `articles`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) NOT NULL,
  `texte` text NOT NULL,
  `auteur` varchar(255) NOT NULL,
  `date_pub` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=449 ;

--
-- Contenu de la table `articles`
--

INSERT INTO `articles` (`id`, `titre`, `texte`, `auteur`, `date_pub`) VALUES
(358, 'article1', 'textetextetexte', 'yosra', '2021-10-08'),
(430, '', '', '', '0000-00-00'),
(431, '', '', '', '0000-00-00'),
(432, '', '', '', '0000-00-00'),
(433, '', '', '', '0000-00-00'),
(434, '', '', '', '0000-00-00'),
(435, '', '', '', '0000-00-00'),
(436, '', '', '', '0000-00-00'),
(437, '', '', '', '0000-00-00'),
(438, '', '', '', '0000-00-00'),
(439, '', '', '', '0000-00-00'),
(440, '', '', '', '0000-00-00'),
(441, '', '', '', '0000-00-00'),
(442, 'y', '', '', '2021-10-11'),
(443, '', '', '', '0000-00-00'),
(445, '', '', '', '0000-00-00'),
(446, '', '', '', '0000-00-00'),
(447, '', '', '', '0000-00-00'),
(448, '', '', '', '0000-00-00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
