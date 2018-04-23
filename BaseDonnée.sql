SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+01:00";


--Structure de la table `users`
--

CREATE TABLE Users (
-- Index pour la table `Users`
  id int(11) PRIMARY KEY AUTO_INCREMENT,
-----  
  email varchar(255) NOT NULL,
  password varchar(255) CHARACTER SET latin1 NOT NULL,
  lastname varchar(255) CHARACTER SET latin1 NOT NULL,
  name varchar(255) CHARACTER SET latin1 NOT NULL,
  birthdate DATE NOT NULL,
  phonenumber INTEGER NOT NULL,
  adress varchar(255) NOT NULL,
  postalcode INTEGER NOT NULL,
  admin BOOLEAN DEFAULT FALSE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-----------------

-- Structure de la table 'sensors'
--

CREATE TABLE Sensors (
-- Index pour la table `Sensors`
	id int(11) PRIMARY KEY AUTO_INCREMENT,
-----  
	name	varchar(255) CHARACTER SET latin1 NOT NULL,
	valeur INTEGER
	state BOOLEAN DEFAULT TRUE,
	sensorType REFERENCES  SensorsType(id, name),
	pièce REFERENCES Pièce(id, name),
	function REFERENCES Function(id, name),
	users REFERENCES Users(id,name),
	catalog REFERENCES Catalog(id,name)
	)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
	
------------------

-- Structure de la table 'sensors'
--

CREATE TABLE SensorsType ( 
-- Index pour la table `SensorsType`
	id int(11) PRIMARY KEY AUTO_INCREMENT,
----- 
	name varchar(255) NOT NULL,	
	)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

------------------

-- Structure de la table 'Catalog'
--
CREATE TABLE Catalog ( 
-- Index pour la table `Catalog`
	id int(11) PRIMARY KEY AUTO_INCREMENT,
----- 	
	name varchar(255) NOT NULL
	)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
	
---------------

-- Structure de la table 'Function'
--

CREATE TABLE Function (
-- Index pour la table `Function`
	id int(11) PRIMARY KEY AUTO_INCREMENT,
----- 
	name varchar(255) NOT NULL,
	state BOOLEAN DEFAULT TRUE
	)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
	
--------------

-- Structure de la table 'Building'
--

CREATE TABLE Building (
-- Index pour la table `Building`
	id int(11) PRIMARY KEY AUTO_INCREMENT,
-----
	name varchar(255) NOT NULL,
	consomax INTEGER NOT NULL
	)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
	
-------------

-- Structure de la table 'Home'
--

CREATE TABLE Home(
-- Index pour la table `Building`
	id int(11) PRIMARY KEY AUTO_INCREMENT,
-----
	adress varchar(255) NOT NULL,
	building REFERENCES Building(id,name)
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-----------------

--Structure de la table Pièce
--

CREATE TABLE Pièce( 
-- Index pour la table `Pièce`
	id int(11) PRIMARY KEY AUTO_INCREMENT,
-----
	name varchar(255) NOT NULL,
	home REFERENCES Home(id,address)
	)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-------------

--Structure de la table Panne
--

CREATE TABLE Panne (
-- Index pour la table `Panne`
	id int(11) PRIMARY KEY AUTO_INCREMENT,
-----
	name varchar(255) NOT NULL,
	Date DATE,
	state BOOLEAN DEFAULT FALSE
	users REFERENCES Users(id,name),
	pannetype REFERENCES PanneType(id,name),
	sensor REFERENCES Sensors(id,name)
	)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
	
---------------

-- Structure de la table PanneType
--

CREATE TABLE PanneType(
-- Index pour la table `PanneType`
	id int(11) PRIMARY KEY AUTO_INCREMENT,
-----
	name varchar(255) NOT NULL
	)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
	
------------

-- Structure de la table Technician
--

CREATE TABLE Technician(
-- Index pour la table `Technician`
	id int(11) PRIMARY KEY AUTO_INCREMENT,
-----
	email varchar(255) NOT NULL,
	lastname varchar(255) NOT NULL,
	name varchar(255) NOT NULL,
	phonenumber INTEGER,
	society varchar(255) NOT NULL
	)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
	
-------------

-- Structure de la table Repair
--

CREATE TABLE Repair (
-- Index pour la table `Repair`
	id int(11) PRIMARY KEY AUTO_INCREMENT,
-----
	Date DATE,
	Cost INTEGER,
	panne REFERENCES Panne(id,name)
	technician REFERENCES Technician(id, name)
	)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
	
----------------

-- Structure de la table CGU
--

CREATE TABLE CGU (
-- Index pour la table `CGU`
	id int(11) PRIMARY KEY AUTO_INCREMENT,
-----
	text varchar(60000)
	)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

----------------

-- Structure de la table MentionLégale
--

CREATE TABLE MentionLégale (
-- Index pour la table `MentionLégale`
	id int(11) PRIMARY KEY AUTO_INCREMENT,
-----
	text varchar(60000)
	)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
	
	
	
	
	