-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 07 déc. 2018 à 02:48
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
-- Base de données :  `explorerboard`
--

-- --------------------------------------------------------

--
-- Structure de la table `causeeffet`
--

DROP TABLE IF EXISTS `causeeffet`;
CREATE TABLE IF NOT EXISTS `causeeffet` (
  `idSante` int(11) NOT NULL,
  `idSymptome` int(11) NOT NULL,
  PRIMARY KEY (`idSante`,`idSymptome`),
  KEY `idSymptome` (`idSymptome`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `etat`
--

DROP TABLE IF EXISTS `etat`;
CREATE TABLE IF NOT EXISTS `etat` (
  `idEtat` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(50) NOT NULL,
  PRIMARY KEY (`idEtat`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `etat`
--

INSERT INTO `etat` (`idEtat`, `libelle`) VALUES
(1, 'neuf'),
(2, 'bon etat'),
(3, 'correct'),
(4, 'moyen'),
(5, 'degradé'),
(6, 'mauvaise etat'),
(7, 'tres mauvaise etat');

-- --------------------------------------------------------

--
-- Structure de la table `etatscientifique`
--

DROP TABLE IF EXISTS `etatscientifique`;
CREATE TABLE IF NOT EXISTS `etatscientifique` (
  `idEtatScientifique` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`idEtatScientifique`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `etatscientifique`
--

INSERT INTO `etatscientifique` (`idEtatScientifique`, `libelle`) VALUES
(1, 'Bon'),
(2, 'Moyen'),
(3, 'Mauvais');

-- --------------------------------------------------------

--
-- Structure de la table `journal`
--

DROP TABLE IF EXISTS `journal`;
CREATE TABLE IF NOT EXISTS `journal` (
  `idScientifique` int(11) NOT NULL,
  `idJournal` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `titre` varchar(50) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`idScientifique`,`idJournal`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `map`
--

DROP TABLE IF EXISTS `map`;
CREATE TABLE IF NOT EXISTS `map` (
  `idScientifique` int(11) NOT NULL,
  `idMap` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(50) NOT NULL,
  `latitude` double NOT NULL,
  `longitude` double NOT NULL,
  PRIMARY KEY (`idScientifique`,`idMap`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `materiel`
--

DROP TABLE IF EXISTS `materiel`;
CREATE TABLE IF NOT EXISTS `materiel` (
  `idScientifique` int(11) NOT NULL,
  `idMateriel` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(50) NOT NULL,
  `idEtat` int(11) NOT NULL,
  PRIMARY KEY (`idScientifique`,`idMateriel`),
  KEY `idEtat` (`idEtat`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `mission`
--

DROP TABLE IF EXISTS `mission`;
CREATE TABLE IF NOT EXISTS `mission` (
  `idScientifique` int(11) NOT NULL,
  `idMission` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(50) DEFAULT NULL,
  `descripif` text,
  `date` date DEFAULT NULL,
  `nbrJour` int(11) DEFAULT NULL,
  `effectue` tinyint(1) NOT NULL,
  PRIMARY KEY (`idScientifique`,`idMission`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `ressource`
--

DROP TABLE IF EXISTS `ressource`;
CREATE TABLE IF NOT EXISTS `ressource` (
  `idScientifique` int(11) NOT NULL,
  `idRessource` int(11) NOT NULL AUTO_INCREMENT,
  `date` date DEFAULT NULL,
  `libelle` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idScientifique`,`idRessource`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `sante`
--

DROP TABLE IF EXISTS `sante`;
CREATE TABLE IF NOT EXISTS `sante` (
  `idScientifique` int(11) NOT NULL,
  `idSante` int(11) NOT NULL AUTO_INCREMENT,
  `idEtatScientifique` int(11) NOT NULL,
  `temperature` double DEFAULT NULL,
  `date` date DEFAULT NULL,
  `taille` double DEFAULT NULL,
  `poid` double NOT NULL,
  `rythmeCardique` int(11) NOT NULL,
  `DESCRIPTION` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`idScientifique`,`idSante`),
  KEY `idEtatScientifique` (`idEtatScientifique`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `scientifique`
--

DROP TABLE IF EXISTS `scientifique`;
CREATE TABLE IF NOT EXISTS `scientifique` (
  `idScientifique` int(5) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `prenom` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `groupeSanguin` varchar(3) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `login` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`idScientifique`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `scientifique`
--

INSERT INTO `scientifique` (`idScientifique`, `nom`, `prenom`, `groupeSanguin`, `login`, `password`) VALUES
(1, 'LEVIN', 'Stephane', 'b-', 'slevin', 'slevin');

-- --------------------------------------------------------

--
-- Structure de la table `symptome`
--

DROP TABLE IF EXISTS `symptome`;
CREATE TABLE IF NOT EXISTS `symptome` (
  `idSymptome` int(11) NOT NULL AUTO_INCREMENT,
  `def_symptomen` text,
  PRIMARY KEY (`idSymptome`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `symptome`
--

INSERT INTO `symptome` (`idSymptome`, `def_symptomen`) VALUES
(1, 'peu durine et concentré'),
(2, 'peu de sueurs'),
(3, 'pouls rapide'),
(4, 'maux de tete'),
(5, 'fievre'),
(6, 'vomissement'),
(7, 'vertiges'),
(8, 'nausé'),
(9, 'confusion'),
(10, 'convultions'),
(11, 'trouble de la conscience'),
(12, 'impression de chaleur sur le visage'),
(13, 'impression de malaise'),
(14, 'opression thoracique'),
(15, 'tachycardie'),
(16, 'nausées'),
(17, 'somnolence'),
(18, 'bourdonnements doreille'),
(19, 'essouflement'),
(20, 'etourdissement'),
(21, 'palpitation cardiaque'),
(22, 'douleur a la poitrine'),
(23, 'evanouissements');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
