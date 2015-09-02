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
-- Structure de la table `tgi_users`
--

CREATE TABLE IF NOT EXISTS "tgi_users" (
  "id" int(10) unsigned NOT NULL AUTO_INCREMENT,
  "lelogin" varchar(45) DEFAULT NULL,
  "lemdp" varchar(45) DEFAULT NULL,
  "tgi_pages_id" int(10) unsigned NOT NULL,
  PRIMARY KEY ("id"),
  UNIQUE KEY "lelogin_UNIQUE" ("lelogin"),
  UNIQUE KEY "lemdp_UNIQUE" ("lemdp"),
  KEY "fk_tgi_users_tgi_pages1_idx" ("tgi_pages_id")
) AUTO_INCREMENT=9 ;

--
-- Contenu de la table `tgi_users`
--

INSERT INTO `tgi_users` (`id`, `lelogin`, `lemdp`, `tgi_pages_id`) VALUES
(7, 'gym', 'ae3fb4ceac5c16585d42f2c115371e40', 9),
(8, 'cat', 'eb97fc02165389a7c360c7b30884f892', 8);

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `tgi_users`
--
ALTER TABLE `tgi_users`
  ADD CONSTRAINT "fk_tgi_users_tgi_pages1" FOREIGN KEY ("tgi_pages_id") REFERENCES "tgi_pages" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
