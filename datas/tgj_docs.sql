-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mer 01 Juillet 2015 à 14:07
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
-- Structure de la table `tgj_docs`
--

CREATE TABLE IF NOT EXISTS "tgj_docs" (
  "id" int(10) unsigned NOT NULL AUTO_INCREMENT,
  "lurl" varchar(45) DEFAULT NULL,
  "letitre" varchar(45) DEFAULT NULL,
  "lepoids" int(10) unsigned DEFAULT NULL,
  "tgi_pages_id" int(10) unsigned NOT NULL,
  PRIMARY KEY ("id"),
  KEY "fk_docs_tgi_pages1_idx" ("tgi_pages_id")
) AUTO_INCREMENT=15 ;

--
-- Contenu de la table `tgj_docs`
--

INSERT INTO `tgj_docs` (`id`, `lurl`, `letitre`, `lepoids`, `tgi_pages_id`) VALUES
(9, '../docs/20150701135545686207.pdf', 'sdf', 110735, 8),
(10, '../docs/20150701135645614537.pdf', 'dtgf', 110735, 8),
(11, '../docs/20150701135913660258.pdf', 'sdf', 110735, 7),
(12, '../docs/20150701135924206968.pdf', 'dsfdesfsdf', 110735, 7),
(13, '../docs/20150701135940298342.pdf', 'dcfcdf', 71740, 5),
(14, '../docs/20150701140023944689.pdf', 'sdsd', 110735, 5);

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `tgj_docs`
--
ALTER TABLE `tgj_docs`
  ADD CONSTRAINT "fk_docs_tgi_pages1" FOREIGN KEY ("tgi_pages_id") REFERENCES "tgi_pages" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
