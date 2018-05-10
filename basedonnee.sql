-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 10 mai 2018 à 13:02
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


/*
 * Structure de la table `users`
*/

DROP TABLE IF EXISTS `sensors`;
CREATE TABLE IF NOT EXISTS `sensors` (
  `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1,
  `name` varchar(255) NOT NULL,
  `valeur` int(11) NOT NULL,
  FOREIGN KEY(`sensortype_id`) REFERENCES  `sensorstype`(`id`),
  FOREIGN KEY(`piece_id`) REFERENCES `piece`(`id`),
  FOREIGN KEY(`function_id`) REFERENCES `function`(`id`),
  FOREIGN KEY(`users_id`) REFERENCES `users`(`id`),
  FOREIGN KEY(`catalog_id`) REFERENCES `catalog`(`id`),
  PRIMARY KEY (`id`)

) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `birthdate` date NOT NULL,
  `phonenumber` int(10) NOT NULL,
  `adress` varchar(255) NOT NULL,
  `postalcode` int(5) NOT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`) 
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



-- Structure de la table 'sensors'
--
DROP TABLE IF EXISTS `sensorstype`;
CREATE TABLE `sensorstype` ( 
-- Index pour la table `SensorsType`
	`id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1,
----- 
	`name` varchar(255) NOT NULL,
	PRIMARY KEY (`id`)
	)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

------------------

-- Structure de la table 'Catalog'
--
DROP TABLE IF EXISTS `catalog`;
CREATE TABLE `catalog` ( 
-- Index pour la table `Catalog`
	`id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1,
----- 	
	`name` varchar(255) NOT NULL,
	PRIMARY KEY (`id`)
	)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
	
---------------

-- Structure de la table 'Function'
--
DROP TABLE IF EXISTS `function`;
CREATE TABLE `function` (
-- Index pour la table `Function`
	`id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1,
----- 
	`name` varchar(255) NOT NULL,
	vstate` BOOLEAN DEFAULT TRUE,
	PRIMARY KEY (`id`)
	)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
	
--------------

-- Structure de la table 'Building'
--
DROP TABLE IF EXISTS `building`;
CREATE TABLE `building` (
-- Index pour la table `Building`
	`id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1,
-----
	`name` varchar(255) NOT NULL,
	`consomax` INTEGER NOT NULL,
	PRIMARY KEY (`id`)
	)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
	
-------------

-- Structure de la table 'Home'
--
DROP TABLE IF EXISTS `home`;
CREATE TABLE `home`(
-- Index pour la table `Building`
	`id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1,
----
	`adress` varchar(255) NOT NULL,
	FOREIGN KEY(`building_id`) REFERENCES `building`(`id`),
	PRIMARY KEY (`id`)
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-----------------

--Structure de la table Pi�ce
--
DROP TABLE IF EXISTS `piece`;
CREATE TABLE `piece`( 
-- Index pour la table `Pi�ce`
	`id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1,
-----
	`name` varchar(255) NOT NULL,
	`home` REFERENCES home(id,address),
	PRIMARY KEY (`id`)
	)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-------------

--Structure de la table Panne
--
DROP TABLE IF EXISTS `panne`;
CREATE TABLE `panne` (
-- Index pour la table `Panne`
	`id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1,
-----
	`name` varchar(255) NOT NULL,
	`date` DATE,
	`state` BOOLEAN DEFAULT FALSE
	FOREIGN KEY(`users_id`) REFERENCES `users`(`id`),
	FOREIGN KEY(`pannetype_id`) REFERENCES `pannetype`(`id`),
	FOREIGN KEY(`sensor_id`) REFERENCES `sensors`(`id`),
	PRIMARY KEY (`id`)
	)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
	
---------------

-- Structure de la table PanneType
--
DROP TABLE IF EXISTS `pannetype`;
CREATE TABLE `pannetype` (
-- Index pour la table `PanneType`
	`id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1,
-----
	`name` varchar(255) NOT NULL,
	PRIMARY KEY (`id`)
	)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
	
------------

-- Structure de la table Technician
--
DROP TABLE IF EXISTS `technician`;
CREATE TABLE `technician` (
-- Index pour la table `Technician`
	`id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1,
-----
	`email` varchar(255) NOT NULL,
	`lastname` varchar(255) NOT NULL,
	`name` varchar(255) NOT NULL,
	`phonenumber` INTEGER,
	`society` varchar(255) NOT NULL,
	PRIMARY KEY (`id`)
	)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
	
-------------

-- Structure de la table Repair
--
DROP TABLE IF EXISTS `repair`;
CREATE TABLE `repair` (
-- Index pour la table `Repair`
	`id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1,
	PRIMARY KEY(`id`), 
-----
	`repairdate` DATE,
	`cost` INTEGER,
	FOREIGN KEY(`panne_id`) REFERENCES `panne`(`id`)
	FOREIGN KEY(`technician_id`) REFERENCES `technician`(`id`),
	PRIMARY KEY (`id`)
	)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
	
----------------

-- Structure de la table CGU
--
DROP TABLE IF EXISTS `CGU`;
CREATE TABLE `CGU` (
-- Index pour la table `CGU`
	`id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1,
-----
	`text` varchar(60000),
	PRIMARY KEY (`id`)
	)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

----------------

-- Structure de la table MentionLegale
--
DROP TABLE IF EXISTS `mentionlegale`;
CREATE TABLE `mentionlegale` (
-- Index pour la table `MentionLegale`
	`id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1,
-----
	`text` varchar(60000),
	PRIMARY KEY (`id`)
	)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

	
	--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `lastname`, `name`, `birthdate`, `phonenumber`, `adress`, `postalcode`, `admin`) VALUES
(1, 'john.smith@gmail.com', '1475369', 'SMITH', 'John', '1992-05-22', 645856951, '28 rue albert dupond', 75015, 0),
(2, 'pierre.numa@isep.fr', '1475369', 'NUMA', 'Pierre', '1997-03-22', 1025648595, '24 rue de la victoire', 75006, 1);

	
	
------------------
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
