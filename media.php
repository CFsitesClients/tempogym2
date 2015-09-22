<?php
session_start();
/* Si la session n'existe pas (encore) ou ne correspond plus au cookie */
if (!isset($_SESSION['id_session_membre']) || $_SESSION['id_session_membre'] != session_id()) {
    header("Location: deconnect.php");
}

include_once 'inc/meta.php';
include_once 'inc/fotorama.php';
include_once 'inc/nav.php';


/* Afficher les images */
require_once 'ia/config.php';
require_once 'ia/connect.php';


$sqlaffichcat1 = "SELECT p.*,c.*
    FROM tgj_photos p
    INNER JOIN tgj_photos_cat c ON p.tgj_cat_id = 1
        GROUP BY p.id
        ORDER BY p.id DESC
        LIMIT 10";



$recup_sql = mysqli_query($connect, $sqlaffichcat1) or die(mysqli_error($connect));

$sqlaffichcat2 = "SELECT p.*,c.*
    FROM tgj_photos p
    INNER JOIN tgj_photos_cat c ON p.tgj_cat_id = 2
        GROUP BY p.id
        ORDER BY p.id DESC
        LIMIT 10";



$recup_sql2 = mysqli_query($connect, $sqlaffichcat2) or die(mysqli_error($connect));
?>
<section id="main">		
    <h1><a class="hp" href="index.php">Tempogym Jette</a></h1>
    <section id="galery">
        <article>
            <h2>Galerie</h2>
            <p>
                Vous êtes connecté en tant que membre &nbsp;
                <a href="deconnect.php">
                    <button class="adminmedia" type="button">Déconnexion</button>
                </a>
            </p>
            <center>
                <div id="audio">
                    <audio preload="auto" controls autoplay loop>
                        <source src="audio/Candy.mp3" type="audio/mp3" /> 
                        <source src="audio/RnB_Beat.mp3" type="audio/mp3" /> 
                        Votre navigateur n'est pas compatible.
                    </audio>
                </div>
            </center>
        </article>
        <article>
            <div id="tabs">
                <ul>
                    <li><a href="#fragment-1"><span>Photos des entraînements</span></a></li>
                    <li><a href="#fragment-2"><span>Photos des événements</span></a></li>
                    <li><a href="#fragment-3"><span>Vidéos</span></a></li> 
                </ul>
                <div id="fragment-1">
                    <ul id="lightGallery" class="gallery">
                        <?php
                        while ($ligne = mysqli_fetch_assoc($recup_sql)) {



                            echo "<li data-src='" . CHEMIN_RACINE . $dossier_gd . $ligne['lenom'] . ".jpg'><img src='" . CHEMIN_RACINE . $dossier_mini . $ligne['lenom'] . ".jpg' alt='" . CHEMIN_RACINE . $dossier_gd . $ligne['lenom'] . "' /></li>";
                        }
                        ?>
                    </ul>

                </div>
                <div id="fragment-2">
                    <ul id="lightGallery2" class="gallery">
                        <?php
                        while ($ligne2 = mysqli_fetch_assoc($recup_sql2)) {

                            echo "<li data-src='" . CHEMIN_RACINE . $dossier_gd . $ligne2['lenom'] . ".jpg'><img src='" . CHEMIN_RACINE . $dossier_mini . $ligne2['lenom'] . ".jpg' alt='" . CHEMIN_RACINE . $dossier_gd . $ligne2['lenom'] . "' /></li>";
                        }
                        ?>
                    </ul>
                </div>
                <div id="fragment-3">

                    <video id="lightGallery3" class="gallery" controls loop>

                        <source src="video/Gvirgi.mp4" type="video/mp4">


                        <source src="video/Gcaliopi2.mp4" type="video/mp4">
                        <source src="video/Gpat.mp4" type="video/mp4">
                        <source src="video/GAM.mp4" type="video/mp4">
                        <source src="video/baby.mp4" type="video/mp4">
                        Votre navigateur n'est pas compatible.
                    </video>
                </div>
                <span class="clear"></span>
            </div>
        </article>
        <?php
        include_once 'inc/footer.php';
        ?>
    </section> 
</section>
<script>
    $(document).ready(function () {
        $("#tabs").tabs();
        $("#lightGallery").lightGallery();
        $("#lightGallery2").lightGallery();
    });
</script>
</body>
</html>
