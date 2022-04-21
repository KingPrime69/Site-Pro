-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
<<<<<<< HEAD
-- Généré le : jeu. 21 avr. 2022 à 18:39
=======
-- Généré le : jeu. 21 avr. 2022 à 23:02
>>>>>>> e0742cb4b1f6bfa83cc1515f7e0e5f3001b4a59e
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
-- Structure de la table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `object` varchar(50) NOT NULL,
  `text` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `object`, `text`) VALUES
(1, 'test', 'test@test.fr', 'test', 'test test test test test test test test test '),
(3, 'quentin', 'test@test.fr', 'Commande', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.');

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
(1, 1, 'HALLOWEEN', 'img/fond.jpg', 'img/blood.png', 'img/lof.jpg', 'img/pkj.jpg', 'img/dbd.jpg', 'img/mystery.PNG', 'img/dbdfig.jpg', 'img/mystery.PNG', '#780404', 'Rubik Wet Paint, cursive', '<link href=\"https://fonts.googleapis.com/css2?family=Rubik+Wet+Paint&display=swap\" rel=\"stylesheet\">', 'LA GAMEBOX D\'OCTOBRE SUR LE THEME HALLOWEEN'),
(2, 0, 'HIVER', 'img/fond.jpg', '', 'img\\mystery.PNG', 'img\\mystery.PNG', 'img\\mystery.PNG', 'img\\mystery.PNG', 'img\\mystery.PNG', 'img\\mystery.PNG', '#00b8ff', 'Josefin Sans, sans-serif', '<link href=\"https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300&display=swap\" rel=\"stylesheet\">', 'LA GAMEBOX DE DECEMBRE SUR LE THEME NOËL'),
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
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `activated`, `email`, `password`) VALUES
(1, 1, 'test@test', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3'),
(2, 1, 'qsdf@couille.com', '782dd27ea8e3b4f4095ffa38eeb4d20b59069077'),
(3, 1, 'qsdfff@a', '10d58bd87102f18f6f8d2e7fc4600aab5ef5549c'),
(4, 0, 'test@test.fr', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3'),
(5, 1, 'quentin.ripot@free.fr', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3'),
(6, 0, '121@007', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
