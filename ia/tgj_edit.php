<?php
require_once '../connect.php';

/* afficher tous les artciles de la db 

 * SANS ckEditor limiter les modif aux 4 premiers articles, les articles suivant contiennent de l'HTML!
 *  */
$sqlarticles= "SELECT * FROM `tgj_articles`LIMIT 4"; 
$reqarticles = mysqli_query($connect, $sqlarticles) or die(mysqli_error($connect));








