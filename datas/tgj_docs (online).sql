-- phpMyAdmin SQL Dump
-- version 4.0.10
-- http://www.phpmyadmin.net
--
-- Client: cl1-sql13
-- Généré le: Mer 01 Juillet 2015 à 14:20
-- Version du serveur: 5.5.44-MariaDB-1~squeeze-log
-- Version de PHP: 5.3.15

SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `dessycf2m7`
--

-- --------------------------------------------------------

--
-- Structure de la table `tgj_docs`
--

CREATE TABLE IF NOT EXISTS "tgj_docs" (
  "id" int(10) unsigned NOT NULL AUTO_INCREMENT,
  "lurl" varchar(45) NOT NULL,
  "letitre" varchar(45) NOT NULL,
  "lepoids" int(10) unsigned NOT NULL,
  "tgi_pages_id" int(10) unsigned NOT NULL,
  PRIMARY KEY ("id")
) AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
