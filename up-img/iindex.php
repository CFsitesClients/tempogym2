<?php
session_start();

require_once 'fonctions.php';
require_once 'fct_pagination.php';
include_once 'inc/nav_db.php';

/* Affiche all img */
// récupérations des images de l'utilisateur connecté dans la table photo avec leurs sections même si il n'y a pas de sections sélectionnées (jointure externe avec LEFT)
$sqlall = "SELECT p.* FROM tgj_photos p GROUP BY p.id ORDER BY p.id DESC LIMIT 10;";

$recup_sql = mysqli_query($connect, $sqlall) or die(mysqli_error($connect));

/*require_once '../ia/tgj_edit.php';
include_once '../inc/head.php';*/
?>       


<div id="lesphotos">
    <?php
    while ($ligne = mysqli_fetch_assoc($recup_sql)) {
        echo "<div class='miniatures'>";
        echo "<h3>" . $ligne['letitre'] . "</h3>";
        echo "<a href='" . CHEMIN_RACINE . $dossier_gd . $ligne['lenom'] . ".jpg' target='_blank'><img src='" . CHEMIN_RACINE . $dossier_mini . $ligne['lenom'] . ".jpg' alt='' /></a>";
        echo "<p>" . $ligne['ladedsc'] . "<br /><br />";
        echo "</p>";
        echo "</div>";
    }
    ?>
</div>
