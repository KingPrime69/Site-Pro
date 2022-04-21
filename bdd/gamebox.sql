-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 21 avr. 2022 à 19:27
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `gamebox`
--

-- --------------------------------------------------------

--
-- Structure de la table `css`
--

DROP TABLE IF EXISTS `css`;
CREATE TABLE IF NOT EXISTS `css` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `activated` tinyint(1) NOT NULL DEFAULT '0',
  `theme` varchar(30) NOT NULL,
  `background-image` varchar(255) NOT NULL,
  `below-image` varchar(255) NOT NULL,
  `Article-1` varchar(255) NOT NULL,
  `Article-2` varchar(255) NOT NULL,
  `Article-3` varchar(255) NOT NULL,
  `Article-4` varchar(255) NOT NULL,
  `Article-5` varchar(255) NOT NULL,
  `Article-6` varchar(255) NOT NULL,
  `color-font` varchar(20) NOT NULL,
  `style-font` varchar(50) NOT NULL,
  `link-font` text NOT NULL,
  `title` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `css`
--

INSERT INTO `css` (`id`, `activated`, `theme`, `background-image`, `below-image`, `Article-1`, `Article-2`, `Article-3`, `Article-4`, `Article-5`, `Article-6`, `color-font`, `style-font`, `link-font`, `title`) VALUES
(1, 1, 'HALLOWEEN', 'img/fond.jpg', 'img/blood.png', 'img/lof.jpg', 'img/pkj.jpg', 'img/dbd.jpg', 'img/mystery.PNG', 'img/dbdfig.jpg', 'img/mystery.PNG', '#fff', 'Rubik Wet Paint, cursive', '<link href=\"https://fonts.googleapis.com/css2?family=Rubik+Wet+Paint&display=swap\" rel=\"stylesheet\">', 'LA GAMEBOX D\'OCTOBRE SUR LE THEME HALLOWEEN'),
(2, 0, 'HIVER', '', '', '', '', '', '', '', '', 'white', 'Josefin Sans, sans-serif', '<link href=\"https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300&display=swap\" rel=\"stylesheet\">', 'test'),
(3, 0, 'test', '', '', '', '', '', '', '', '', '#ecbb6e', 'My Soul, cursive', '<link href=\"https://fonts.googleapis.com/css2?family=My+Soul&display=swap\" rel=\"stylesheet\">', ''),
(13, 0, 'qsdf', '', '', '', '', '', '', '', '', 'qsdf', '', 'test', ''),
(12, 0, '', '', '', 'img/fond.jpg', 'img/fond.jpg', 'img/fond.jpg', 'img/fond.jpg', 'img/fond.jpg', '', '#069b34', '', '', ''),
(9, 0, 'NOEL', '', '', '', '', '', '', '', '', '#00b8ff', 'Dancing Script, cursive', '<link href=\"https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600&display=swap\" rel=\"stylesheet\">', '');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `activated` tinyint(1) NOT NULL DEFAULT '1',
  `email` varchar(40) NOT NULL,
  `password` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `activated`, `email`, `password`) VALUES
(1, 1, 'test@test', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3'),
(2, 1, 'qsdf@couille.com', '782dd27ea8e3b4f4095ffa38eeb4d20b59069077'),
(3, 1, 'qsdfff@a', '10d58bd87102f18f6f8d2e7fc4600aab5ef5549c'),
(4, 1, 'test@test.fr', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
