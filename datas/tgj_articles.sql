-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mar 30 Juin 2015 à 12:55
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
-- Structure de la table `tgj_articles`
--

CREATE TABLE IF NOT EXISTS "tgj_articles" (
  "id" int(11) NOT NULL AUTO_INCREMENT,
  "letitre" text NOT NULL,
  "letexte" text NOT NULL,
  "tgi_pages_id" int(10) unsigned NOT NULL,
  PRIMARY KEY ("id"),
  KEY "fk_tgj_article_tgi_pages_idx" ("tgi_pages_id")
) AUTO_INCREMENT=12 ;

--
-- Contenu de la table `tgj_articles`
--

INSERT INTO `tgj_articles` (`id`, `letitre`, `letexte`, `tgi_pages_id`) VALUES
(1, 'Informations importantes', 'Avis : La nouvelle salle est bientôt prête à vous accueillir ...', 1),
(2, 'Flash Info', 'Après les grandes vacances, reprises des entraînements ...', 1),
(3, 'Histoire et philosophie', 'La gymnastique, sport pour lequel nos prédécesseurs à la tête du club et nous-mêmes nous investissons depuis 1923, constitue une voie royale pour le développement psychomoteur.', 2),
(4, 'Le comité administratif de l&#039;ASBL', 'e-mail : tempogymjette@hotmail.com', 2),
(5, 'Histoire et philosophie', 'La gymnastique, sport pour lequel nos prédécesseurs à la tête du club et nous-mêmes nous investissons depuis 1923, constitue une voie royale pour le développement psychomoteur.\r\n\r\nCe sport complet sollicitant tous les muscles et articulations a pour vocation première d’agir avec un maximum d’adresse. En outre, il procure des sensations, c’est la raison pour laquelle les enfants l’apprécient tellement.\r\n\r\nTempogym Jette c’est l’école de la gymnastique vers l’école de la vie car bon nombre de situations vécues par nos gymnastes demandent une gestion mentale transposable en société.\r\n\r\nÀ la gym il faut être concentré et ne pas se laisser déstabiliser par l’échec dans l’exécution d’une agilité. Dans la vie on essaiera de surmonter ses soucis, de se maîtriser.\r\n\r\nA la gym il faut de la prestance, tenue correcte et port élégant. Dans la vie on saura se présenter aux autres. A la gym il faut parfois travailler dans des conditions difficiles, entraîneur absent, matériel souhaité indisponible ou chauffage en panne dans la salle. Dans la vie saura supporter des conditions inconfortables. A la gym on est parfois le conseiller d’un ami ou une amie. Dans la vie on saura aider et se rendre disponible. A la gym il faut participer au montage et rangement du matériel. Dans la vie on saura mettre la main à la pâte. Oui la gymnastique dispose d’une grande valeur éducationnelle.\r\n\r\nNotre club est ouvert à tous, bon ou moins bon gymnaste. L’important c’est le plaisir du jeune dans la pratique de son sport. Le personnel du club est là pour gérer, organiser, former, imaginer et dialoguer. C’est un travail agréable et intéressant mais parfois assez lourd en temps et investissement personnel. Lourdeur vite oubliée lorsque nous voyons le sourire s’afficher sur le visage d’un enfant qui vient de réussir un geste technique.', 3),
(6, 'Président', 'Stéphane Etienne\r\n\r\nTél. : 02/476.92.11\r\n\r\nGsm : 0477/38.77.56', 4),
(7, 'Vice-Président', 'Patrice Van Den bossche\r\n\r\nTél. : 02/216.51.78\r\n\r\nGsm : 0475/30.90.77', 4),
(8, 'Trésorier', 'Didier Dokens\r\n\r\nGsm : 0495/67.77.55', 4),
(9, 'Secrétaire', 'Catherine Massart\r\n\r\nGsm : 0477/25.60.37', 4),
(10, 'Coordinateur', 'Jonathan Nani\r\n\r\nGsm : 0496/70.66.64', 4),
(11, 'Le club Tempogym Jette', 'e-Mail : tempogymjette@hotmail.com\r\n\r\nGsm club : 0473/17.34.14', 4);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
