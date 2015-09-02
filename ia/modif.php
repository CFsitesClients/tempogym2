<?php
session_start();
/* Si la session n'existe pas (encore) ou ne correspond plus au cookie */
if (!isset($_SESSION['id_session_admin']) || $_SESSION['id_session_admin'] != session_id()) {
    header("Location: deconnect.php");
}

// Si POST, mise à jour de la DB
if (isset($_POST['lid']) && ctype_digit($_POST['lid'])) {
    require_once '../connect.php';
    // on va mettre les variables POST en variables locales et les traiter si nécessaire
    $lid = $_POST['lid'];
    $letitre = htmlspecialchars(trim($_POST['letitre']), ENT_QUOTES); // on retire les espaces devant et derrière la chaine (trim), on convertit les caractères spéciaux en entités html (htmlspecialchars) en convertissant les " et ' (,ENT_QUOTES)
    $letexte = htmlspecialchars(trim($_POST['letexte']), ENT_QUOTES);
    // préparation de la requête : met à jour la table auteurs en donnant des valeurs (SET) aux champs lenom et ladesc lorsque (WHERE) l'id équivaut à l'id de l'auteur à modifier
    $requete = "UPDATE tgj_articles SET letitre='$letitre', letexte='$letexte'  WHERE id=$lid;";
    // exécution de la requête, affichage de l'erreur si il y en a une
    mysqli_query($connect, $requete) or die("Erreur: " . mysqli_error($connect));
    header("Location: admin.php");
}


// Si id de l'article passé en GET, alors stoké l'id dans la var $lid_to_modif qui sert au sql de tgj_modif.php
if (isset($_GET['id']) && ctype_digit($_GET['id'])) {
    /* KEEP ! : on stock l'id récupérée en GET dasn une var local servant au SELECT de tgj_modif.php */
    $lid_to_modif = $_GET['id'];

    require_once 'tgj_modif.php';
} else {
    /* header("Location: ./"); */
    echo "Erreur lors de la selection de l'article";
}

include_once 'inc/head.php';
?>
<section id="main">
    <?php
    while ($ligne = mysqli_fetch_assoc($req3)) {
        echo "<h1>'" . $_SESSION['lelogin_admin'] . "' vous modifiez actuellement le contenu de  '" . $ligne['letitre'] . "' </h1>";
        ?>
        <section id="news">
            <article>
                <form style="padding:10px;" action="" name="modifarticle" method="POST">
                    <br/>
                    <label>Titre : </label><input type="text" name="letitre" value="<?php echo $ligne['letitre'] ?>" /><br/><br/>
                    <label>Texte : </label><textarea style="width:80%;" name="letexte"><?= $ligne['letexte'] ?></textarea><br/><br/>
                    <input type="hidden" name='lid' value='<?= $ligne['id'] ?>' />

                    <input type="submit" value="Enregistrer la modif" />
                </form> 

                <hr />
                <?php
                echo "<h2>" . $ligne['letitre'] . "</h2>";
                echo "<p>" . $ligne['letexte'] . "</p>";
            }
            ?>          
        </article>  
    </section>
            <?php
            /* include_once '../inc/agenda.php';
              include_once '../inc/nav_qklk.php'; */
            include_once '../inc/footer.php';
            ?>
</section> 
</body>
</html> 

