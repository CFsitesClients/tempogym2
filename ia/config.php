<?php
/* local*/
  $serveur = "localhost";
  $login = "root";
  $password = ""; 
  $db = "tempogym";
  
$path_docs="http://localhost/tempogym/no/";
// constant contenant la racine du site
define("CHEMIN_RACINE", "http://localhost/tempogym/ia/");

// nom des dossiers de destination des images (chemin relatif)
$dossier_ori = "images/originales/"; // dossier de l'image originale
$dossier_gd = "images/affichees/"; // dossier de l'image pour affichage
$dossier_mini = "images/miniatures/"; // dossier des miniatures

// taille des images d'affichage proportionnelle en pixels
$grande_large = 900; // taille maximale en largeur
$grande_haute = 720; // taille maximale en hauteur

// taille des miniatures coupées et centrées en pixels
$mini_large = 135; // taille maximale en largeur
$mini_haute = 135; // taille maximale en hauteur

// qualité de l'image d'affichage (jpg de 0 à 100)
$grande_qualite = 85;

// qualité de l'image de la miniature (jpg de 0 à 100)
$mini_qualite = 70;

// formats acceptés en minuscule dans un tableau, séparé par des ','
$formats_acceptes = array('jpg','jpeg','png');

// Variable affichage par page
$elements_par_page = 3;
// nom de la var GET de pagination
$get_pagination = "pg";
// pagination dans l'admin
$elements_par_page_admin = 6;

/* online */
/*  $serveur = "195.144.11.155";
  $login = "dessycf2m7";
  $password = "qqRGpd410XPj"; 
  $db = "dessycf2m7";
*/