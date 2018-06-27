-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 16 mai 2018 à 08:43
-- Version du serveur :  5.7.19
-- Version de PHP :  7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `basedonnee`
--

-- --------------------------------------------------------

--
-- Structure de la table `building`
--

DROP TABLE IF EXISTS `building`;
CREATE TABLE IF NOT EXISTS `building` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `adress` varchar(255) NOT NULL,
  `consomax` int(11) NOT NULL,
  `gestionnaire_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `building_ibfk_1` (`gestionnaire_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `building`
--

INSERT INTO `building` (`id`, `name`, `adress`, `consomax`, `gestionnaire_id`) VALUES
(1, 'Résidence Les Oiseaux du paradis', '16 rue ....', 500, 3);

-- --------------------------------------------------------

--
-- Structure de la table `catalog`
--

DROP TABLE IF EXISTS `catalog`;
CREATE TABLE IF NOT EXISTS `catalog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `cgu`
--

DROP TABLE IF EXISTS `cgu`;
CREATE TABLE IF NOT EXISTS `cgu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `text` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
-- --------------------------------------------------------

--
-- Structure de la table `chat`
--
DROP TABLE IF EXISTS `chat`;
CREATE TABLE `chat` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `date_message` datetime NOT NULL,
  `id_destinataire`int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `chat`
--

INSERT INTO `chat` (`id`, `pseudo`, `message`, `date_message`) VALUES
(13, 'aurelien', 'bkj klnm,', '0000-00-00 00:00:00'),
(14, 'aurelien', 'non', '0000-00-00 00:00:00'),
(15, 'aurelien', 'jnkjf', '0000-00-00 00:00:00'),
(16, 'aurelien', 'adieu', '0000-00-00 00:00:00'),
(17, 'aurelien', 'adieu', '0000-00-00 00:00:00'),
(18, 'aurelien', 'adddddieu', '0000-00-00 00:00:00'),
(19, 'aurelien', 'adddddieu', '0000-00-00 00:00:00'),
(20, 'aurelien', ';kllk', '0000-00-00 00:00:00'),
(21, 'aurelien', ';kllk', '0000-00-00 00:00:00'),
(22, 'aurelien', ';kllk', '0000-00-00 00:00:00'),
(23, 'aurelien', 'l,,kjnlk', '0000-00-00 00:00:00'),
(24, 'aurelien', 'l,,kjnlk', '0000-00-00 00:00:00'),
(25, 'aurelien', 'kjvbkjbk', '0000-00-00 00:00:00'),
(26, 'aurelien', 'kjvbkjbk', '0000-00-00 00:00:00'),
(27, 'aurelien', 'kjvbkjbk', '2018-05-21 16:55:26'),
(28, 'aurelien', 'salut', '2018-05-21 16:55:29'),
(29, 'aurelien', 'salut', '2018-05-21 17:01:12'),
(30, 'aurelien', 'salut', '2018-05-21 17:02:21'),
(31, 'aurelien', 'coucou', '2018-05-21 17:02:34'),
(32, 'aurelien', 'coucou', '2018-05-21 17:02:41'),
(33, 'aurelien', 'coucou', '2018-05-21 17:03:23'),
(34, 'aurelien', 'jknkj', '2018-05-21 17:03:27'),
(35, 'aurelien', 'coucou', '2018-05-21 17:03:35'),
(36, 'aurelien', 'coucou', '2018-05-21 17:04:14'),
(37, 'aurelien', 'coucou', '2018-05-21 17:10:36'),
(38, 'aurelien', 'coucou', '2018-05-21 17:11:44'),
(39, 'aurelien', 'coucou', '2018-05-21 17:13:19'),
(40, 'aurelien', 'coucou', '2018-05-21 17:17:23'),
(41, 'aurelien', 'coucou', '2018-05-21 17:18:24'),
(42, 'aurelien', 'coucou', '2018-05-21 17:20:14');

-- --------------------------------------------------------

--
-- Structure de la table `function`
--

DROP TABLE IF EXISTS `function`;
CREATE TABLE IF NOT EXISTS `function` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `state` tinyint(1) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `home`
--

DROP TABLE IF EXISTS `home`;
CREATE TABLE IF NOT EXISTS `home` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `adress` varchar(255) NOT NULL,
  `building_id` int(11) DEFAULT NULL,
  `owner_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `building_id` (`building_id`),
  KEY `home_ibfk_2` (`owner_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `home`
--

INSERT INTO `home` (`id`, `adress`, `building_id`, `owner_id`) VALUES
(1, '16 rue --- appartement 35', 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `mentionlegale`
--

DROP TABLE IF EXISTS `mentionlegale`;
CREATE TABLE IF NOT EXISTS `mentionlegale` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `text` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `panne`
--

DROP TABLE IF EXISTS `panne`;
CREATE TABLE IF NOT EXISTS `panne` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `date` date DEFAULT NULL,
  `state` tinyint(1) DEFAULT '0',
  `users_id` int(11) NOT NULL,
  `pannetype_id` int(11) NOT NULL,
  `sensor_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `users_id` (`users_id`),
  KEY `pannetype_id` (`pannetype_id`),
  KEY `sensor_id` (`sensor_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `pannetype`
--

DROP TABLE IF EXISTS `pannetype`;
CREATE TABLE IF NOT EXISTS `pannetype` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `piece`
--

DROP TABLE IF EXISTS `piece`;
CREATE TABLE IF NOT EXISTS `piece` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `home_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `home_id` (`home_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `piece`
--

INSERT INTO `piece` (`id`, `name`, `home_id`) VALUES
(1, 'chambre 1', 1),
(2, 'salle de bain', 1),
(3, 'salon', 1),
(4, 'cuisine', 1),
(5, 'chambre 2', 1);

-- --------------------------------------------------------

--
-- Structure de la table `repair`
--

DROP TABLE IF EXISTS `repair`;
CREATE TABLE IF NOT EXISTS `repair` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `repairdate` date DEFAULT NULL,
  `cost` int(11) DEFAULT NULL,
  `panne_id` int(11) NOT NULL,
  `technician_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `panne_id` (`panne_id`),
  KEY `technician_id` (`technician_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `sensors`
--

DROP TABLE IF EXISTS `sensors`;
CREATE TABLE IF NOT EXISTS `sensors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `valeur` int(11) NOT NULL,
  `sensortype_id` int(11) NOT NULL,
  `piece_id` int(11) NOT NULL,
  `function_id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  `catalog_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sensors_ibfk_1` (`sensortype_id`),
  KEY `sensors_ibfk_2` (`piece_id`),
  KEY `sensors_ibfk_3` (`function_id`),
  KEY `sensors_ibfk_4` (`users_id`),
  KEY `sensors_ibfk_5` (`catalog_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `sensorstype`
--

DROP TABLE IF EXISTS `sensorstype`;
CREATE TABLE IF NOT EXISTS `sensorstype` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `technician`
--

DROP TABLE IF EXISTS `technician`;
CREATE TABLE IF NOT EXISTS `technician` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phonenumber` int(11) DEFAULT NULL,
  `society` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `birthdate` date NOT NULL,
  `phonenumber` int(10) NOT NULL,
  `adress` varchar(100) NOT NULL,
  `postalcode` int(5) NOT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT '0',
  `gestionnaire` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `lastname`, `name`, `birthdate`, `phonenumber`, `adress`, `postalcode`, `admin`, `gestionnaire`) VALUES
(1, 'aurelienmary.fr@gmail.com', 'lol41', 'mary', 'aurelien', '0000-00-00', 604676519, 'rue de la poste', 41260, 0, 0),
(2, 'lalal@gmail.com', '1234', 'jean', 'dupont', '0000-00-00', 604676519, '', 41000, 0, 0),
(3, 'jiji@gmail.com', '$2y$10$bbSZxCiX1F2wXkAzJ6MJwezFRpFnNwHjkf8BMnA.1V4pzO1ji8eOy', 'dfbvkn', 'dskjvbndkfjnv', '0000-00-00', 604676519, '', 0, 0, 0),
(4, 'boloss@gmail.com', '$2y$10$i7X7Q847PLazCWVj9LlwM.GuIF5I6gdQRs/FDYPMkiA58F3EqfqVK', 'dupont', 'thomas', '0000-00-00', 604676519, 'la poste', 75000, 0, 0),
(5, 'admin@gmail.com', '$2y$10$egM6yal0OxKfDLVJAZc4T.xoTIs2gPfXRmA2S9UZueqbSUA71B6SW', 'G9E', 'Admin', '0000-00-00', 606070609, '', 0, 1, 0),
(6, 'toto@gmail.com', '$2y$10$rrOjeToGPiWtHsrCGHSG2eJ.TZQilca2WCHigAYIGOiu6ahWh22tC', 'bibi', 'toto', '0000-00-00', 123456765, '', 0, 0, 0);

--
-- Index pour les tables déchargées
--

--
-- Contraintes pour la table `building`
--
ALTER TABLE `building`
  ADD CONSTRAINT `building_ibfk_1` FOREIGN KEY (`gestionnaire_id`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `chat`
--
ALTER TABLE `chat`
  ADD CONSTRAINT `chat_ibfk_1` FOREIGN KEY (`id_destinataire`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `home`
--
ALTER TABLE `home`
  ADD CONSTRAINT `home_ibfk_1` FOREIGN KEY (`building_id`) REFERENCES `building` (`id`),
  ADD CONSTRAINT `home_ibfk_2` FOREIGN KEY (`owner_id`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `panne`
--
ALTER TABLE `panne`
  ADD CONSTRAINT `panne_ibfk_1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `panne_ibfk_2` FOREIGN KEY (`pannetype_id`) REFERENCES `pannetype` (`id`),
  ADD CONSTRAINT `panne_ibfk_3` FOREIGN KEY (`sensor_id`) REFERENCES `sensors` (`id`);

--
-- Contraintes pour la table `piece`
--
ALTER TABLE `piece`
  ADD CONSTRAINT `piece_ibfk_1` FOREIGN KEY (`home_id`) REFERENCES `home` (`id`);

--
-- Contraintes pour la table `repair`
--
ALTER TABLE `repair`
  ADD CONSTRAINT `repair_ibfk_1` FOREIGN KEY (`panne_id`) REFERENCES `panne` (`id`),
  ADD CONSTRAINT `repair_ibfk_2` FOREIGN KEY (`technician_id`) REFERENCES `technician` (`id`);

--
-- Contraintes pour la table `sensors`
--
ALTER TABLE `sensors`
  ADD CONSTRAINT `sensors_ibfk_1` FOREIGN KEY (`sensortype_id`) REFERENCES `sensorstype` (`id`),
  ADD CONSTRAINT `sensors_ibfk_2` FOREIGN KEY (`piece_id`) REFERENCES `piece` (`id`),
  ADD CONSTRAINT `sensors_ibfk_3` FOREIGN KEY (`function_id`) REFERENCES `function` (`id`),
  ADD CONSTRAINT `sensors_ibfk_4` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `sensors_ibfk_5` FOREIGN KEY (`catalog_id`) REFERENCES `catalog` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
