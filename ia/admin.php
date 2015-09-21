<?php
session_start();
/* Si la session n'existe pas (encore) ou ne correspond plus au cookie */
if (!isset($_SESSION['id_session_admin']) || $_SESSION['id_session_admin'] != session_id()) {
    header("Location: deconnect.php");
}
require_once 'tgj_edit.php';
include_once 'inc/head.php';
?>

<section id="main">

    <h1><a id="top"></a>Bienvenue "<?= $_SESSION['lelogin_admin']; ?>" vous êtes connecté en tant qu'administratrice/teur </h1>

    <section id="news">
        <article id='adcueil'>
            <?php
            while ($ligne = mysqli_fetch_assoc($reqarticles)) {
                echo "<h2>" . $ligne['letitre'] . "</h2>";
                echo "<p>" . $ligne['letexte'] . "</p>";
                echo "<a href='modif.php?id=" . $ligne['id'] . "'><input type='button' value='Modifier' /></a>";
            }
            ?>
            <p class="right"><a href="#top">Aller en haut</a></p>
        </article>
        <article id='adsbl'>
            <h2>Modifier le document pdf : Organigramme</h2>

            <p>Fichier de maximum 5 MO au format: .pdf </p>
            <form name="form_organi" action="admin.php" method="POST" enctype='multipart/form-data'>
                <input type="hidden" name='lid' value="3" />
                <input type="text" name="letitre" placeholder="Titre" required /><br/>
                <!-- A mettre avant le file ! = 5 mio -->
                <input type="hidden" name="MAX_FILE_SIZE" value="5000000" />
                <input type="file" name="lefichier" required /><br/>
                <input type="submit" value="Envoyer le fichier"/>
            </form>
            <?php
            require_once 'tgj_upload.php';
            while ($leorgani = mysqli_fetch_assoc($recup_organi)) {
                echo "<p><a href='" . $leorgani['lurl'] . "' target='_blank'>" . $leorgani['letitre'] . "</a> (";
                // BONUS affichage de l'extension récupérée de l'url
                echo strrchr($leorgani['lurl'], '.');
                echo ")</p>";
                echo "<p><iframe  width='50%' height='200px' src='" . $leorgani['lurl'] . "'><a href='" . $leorgani['lurl'] . "' title='" . $leorgani['letitre'] . "'><img class='dim' src='" . $leorgani['lurl'] . "' alt='" . $leorgani['letitre'] . "'/></a></iframe></p><br />";
            }
            ?>
            <p class="right"><a href="#top">Aller en haut</a></p>
        </article>   
        <article id='addrier'>
            <h2>Modifier le document pdf : Calendrier</h2>

            <p>Fichier de maximum 5 MO au format: .pdf </p>
            <form name="form_dates" action="admin.php" method="POST" enctype='multipart/form-data'>
                <input type="hidden" name='lid' value="5" />
                <input type="text" name="letitre" placeholder="Titre" required /><br/>
                <!-- A mettre avent le file ! = 5 mio -->
                <input type="hidden" name="MAX_FILE_SIZE" value="5000000" />
                <input type="file" name="lefichier" required /><br/>
                <input type="submit" value="Envoyer le fichier"/>
            </form>
            <?php
            require_once 'tgj_upload.php';
            while ($lecalendar = mysqli_fetch_assoc($recup_dates)) {
                echo "<p><a href='" . $lecalendar['lurl'] . "' target='_blank'>" . $lecalendar['letitre'] . "</a> (";
                // BONUS affichage de l'extension récupérée de l'url
                echo strrchr($lecalendar['lurl'], '.');
                echo ")</p>";
                echo "<p><iframe  width='50%' height='200px' src='" . $lecalendar['lurl'] . "'><a href='" . $lecalendar['lurl'] . "' title='" . $lecalendar['letitre'] . "'><img class='dim' src='" . $lecalendar['lurl'] . "' alt='" . $lecalendar['letitre'] . "'/></a></iframe></p>";
            }
            ?>
            <p class="right"><a href="#top">Aller en haut</a></p>
        </article> 
        <article id='addocs'>
            <h2>Modifier la liste des documents pdf téléchargeables : </h2>

            <p>Fichier de maximum 5 MO au format: .pdf </p>
            <form name="form_docs" action="admin.php" method="POST" enctype='multipart/form-data'>
                <input type="hidden" name='lid' value="7" />
                <input type="text" name="letitre" placeholder="Titre" required /><br/>
                <!-- A mettre avent le file ! = 5 mio -->
                <input type="hidden" name="MAX_FILE_SIZE" value="5000000" />
                <input type="file" name="lefichier" required /><br/>
                <input type="submit" value="Envoyer le fichier"/>
            </form>
            <?php
            require_once 'tgj_upload.php';

            while ($lesdocs = mysqli_fetch_assoc($recup_docs)) {
                echo "<p><a href='" . $lesdocs['lurl'] . "' target='_blank'>" . $lesdocs['letitre'] . "</a> (";
                // BONUS affichage de l'extension récupérée de l'url
                echo strrchr($lesdocs['lurl'], '.');
                echo ") | <img src='img/supprimer.png' 
                      onclick='supprime(\""
                . substr(strrchr($lesdocs['lurl'], '/'), 1) . "\""
                . ", "
                . $lesdocs['id'] . ");' alt='Supprimer' /></p>";
                echo "<p><iframe  width='50%' height='200px' src='" . $lesdocs['lurl'] . "'><a href='" . $lesdocs['lurl'] . "' title='" . $lesdocs['letitre'] . "'><img src='" . $lesdocs['lurl'] . "' alt='" . $lesdocs['letitre'] . "'/></a></iframe></p>";
            }
            ?>
            <p class="right"><a href="#top">Aller en haut</a></p>
        </article>   
        <article id='adsais'>
            <h2>Modifier le document pdf : Infos saison</h2>

            <p>Fichier de maximum 5 MO au format: .pdf </p>
            <form name="form_docs" action="admin.php" method="POST" enctype='multipart/form-data'>
                <input type="hidden" name='lid' value="10" />
                <input type="text" name="letitre" placeholder="Titre" required /><br/>
                <!-- A mettre avent le file ! = 5 mio -->
                <input type="hidden" name="MAX_FILE_SIZE" value="5000000" />
                <input type="file" name="lefichier" required /><br/>
                <input type="submit" value="Envoyer le fichier"/>
            </form>
            <?php
            require_once 'tgj_upload.php';
            while ($lasaison = mysqli_fetch_assoc($recup_saison)) {
                echo "<p><a href='" . $lasaison['lurl'] . "' target='_blank'>" . $lasaison['letitre'] . "</a> (";
                // BONUS affichage de l'extension récupérée de l'url
                echo strrchr($lasaison['lurl'], '.');
                echo ")</p>";
                echo "<p><iframe  width='50%' height='200px' src='" . $lasaison['lurl'] . "'><a href='" . $lasaison['lurl'] . "' title='" . $lasaison['letitre'] . "'><img src='" . $lasaison['lurl'] . "' alt='" . $lasaison['letitre'] . "'/></a></p></iframe></p>";
            }
            ?>
            <p class="right"><a href="#top">Aller en haut</a></p>
        </article>
        <article id='adimg'>
            <h2>Uploader les images, et cocher une catégorie</h2>
            <p>Fichier de maximum 5 MO au format: .jpg, .jpeg, .png </p>
            <form action="admin.php?img=true" enctype="multipart/form-data" method="POST" name="onposte">
                <input type="text" name="letitre" /><br/>
               <!-- <input type="hidden" name="MAX_FILE_SIZE" value="50000000" /> -->
                <input type="file" name="lefichier" /><br/>
                <textarea name="ladesc"></textarea><br/>

                <input type="submit" value="Envoyer le fichier" /><br/>
                <p>Catégories : <?php
// affichage des catégories
                    while ($ligne = mysqli_fetch_assoc($recup_section)) {

                        echo $ligne['lintitule'] . "  <input type='checkbox' name='lidcat' value='" . $ligne['id'] . "' > | ";
                    }
                    ?></p>
            </form>


            <nav>
                <p>
                    <?php
                    echo pagination($nb_total, $pg_actu, $elements_par_page, $get_pagination)
                    ?>
                </p>
            </nav>


            <?php
            while ($ligne = mysqli_fetch_assoc($recup_sql)) {
                echo "<div class='miniatures'>";
                /* echo "<h3 class='hidden'>" . $ligne['letitre'] . "</h3>"; */

                echo "<a href='" . CHEMIN_RACINE . $dossier_gd . $ligne['lenom'] . ".jpg' target='_blank'><img src='" . CHEMIN_RACINE . $dossier_mini . $ligne['lenom'] . ".jpg' alt='' /></a>";
                /* echo  $ligne['ladedsc'] . ; */
                // affichage des sections
                echo $ligne['lintitule'];
                echo "<img onclick='supprime(" . $ligne['id'] . ");' src='../img/supprimer.png' alt='supprimer' />";
                echo "</div>";
            }
            ?>

            <p class="right"><a href="#top">Aller en haut</a></p>
        </article>
    </section>
    <?php
    include_once '../inc/footer.php';
    ?>
</section> 
</body>
</html>