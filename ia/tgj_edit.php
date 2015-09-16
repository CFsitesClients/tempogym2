<?php
require_once 'connect.php';

/* afficher les artciles de la page d'accueil */

$sqlarticles= "SELECT * FROM `tgj_articles`LIMIT 2"; 
$reqarticles = mysqli_query($connect, $sqlarticles) or die(mysqli_error($connect));








