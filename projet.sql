-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 28 déc. 2018 à 23:35
-- Version du serveur :  5.7.23
-- Version de PHP :  7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `projet`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id_admin` int(100) NOT NULL,
  `login` varchar(20) NOT NULL,
  `password` varchar(150) NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `cv`
--

DROP TABLE IF EXISTS `cv`;
CREATE TABLE IF NOT EXISTS `cv` (
  `id_cv` int(100) NOT NULL AUTO_INCREMENT,
  `diplomes_obtenus` varchar(20) NOT NULL,
  `competences` varchar(150) NOT NULL,
  `niveau_competences` varchar(20) NOT NULL,
  `langues` varchar(30) NOT NULL,
  `niveau_langue` varchar(20) NOT NULL,
  `experience_pro` varchar(150) NOT NULL,
  `video` varchar(30) NOT NULL,
  `num_apogee` int(20) NOT NULL,
  PRIMARY KEY (`id_cv`),
  KEY `c_num_apogee` (`num_apogee`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `entreprise`
--

DROP TABLE IF EXISTS `entreprise`;
CREATE TABLE IF NOT EXISTS `entreprise` (
  `id_entreprise` int(100) NOT NULL,
  `nom_entreprise` varchar(100) NOT NULL,
  `adresse_entreprise` varchar(100) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `siege` varchar(100) NOT NULL,
  `tel_entreprise` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `id_admin` varchar(100) NOT NULL,
  PRIMARY KEY (`id_entreprise`),
  KEY `c_id_admin` (`id_admin`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `etudiant`
--

DROP TABLE IF EXISTS `etudiant`;
CREATE TABLE IF NOT EXISTS `etudiant` (
  `num_apogee` int(100) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `date_naissance` date NOT NULL,
  `mail` varchar(30) NOT NULL,
  `id_admin` int(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`num_apogee`),
  KEY `c_id_admin` (`id_admin`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `offre_stage`
--

DROP TABLE IF EXISTS `offre_stage`;
CREATE TABLE IF NOT EXISTS `offre_stage` (
  `id_offre` int(100) NOT NULL,
  `intitulé` varchar(100) NOT NULL,
  `debut_sate` varchar(100) NOT NULL,
  `fin_stage` varchar(100) NOT NULL,
  `competition` varchar(100) NOT NULL,
  `id_entreprise` int(100) NOT NULL,
  PRIMARY KEY (`id_offre`),
  KEY `c_id_entreprise` (`id_entreprise`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `postuler`
--

DROP TABLE IF EXISTS `postuler`;
CREATE TABLE IF NOT EXISTS `postuler` (
  `id_offre` int(20) NOT NULL,
  `num_apogee` int(20) NOT NULL,
  PRIMARY KEY (`id_offre`,`num_apogee`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
