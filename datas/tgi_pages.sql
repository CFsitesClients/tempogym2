-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mar 30 Juin 2015 à 12:54
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `tempogym`
--

-- --------------------------------------------------------

--
-- Structure de la table `tgi_pages`
--

CREATE TABLE IF NOT EXISTS "tgi_pages" (
  "id" int(10) unsigned NOT NULL AUTO_INCREMENT,
  "lintitule" varchar(45) DEFAULT NULL,
  PRIMARY KEY ("id"),
  UNIQUE KEY "lintitule_UNIQUE" ("lintitule")
) AUTO_INCREMENT=10 ;

--
-- Contenu de la table `tgi_pages`
--

INSERT INTO `tgi_pages` (`id`, `lintitule`) VALUES
(1, 'Accueil'),
(8, 'Administrer'),
(6, 'Contact'),
(5, 'Dates'),
(7, 'Documents'),
(9, 'Galerie'),
(3, 'Histoire et philosophie'),
(2, 'Le club'),
(4, 'Le comité administratif');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
