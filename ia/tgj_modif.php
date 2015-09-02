<?php
require_once '../connect.php';
/* Modifier l'article sélectionné */
if($lid_to_modif<5){
$sql3 = "SELECT * FROM `tgj_articles` WHERE id=$lid_to_modif";
}else{
    /* Si l'admin veux modifier un article d'id > 5 on fait cet artifice de requête qui ne donne aucun résultat, mais qui est une reqête valide */
  $sql3 = "SELECT * FROM `tgj_articles` WHERE 1=2";  
}
$req3 = mysqli_query($connect, $sql3);