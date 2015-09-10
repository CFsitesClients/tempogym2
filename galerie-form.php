<?php
session_start();
require_once 'connect.php';
// Si on a envoyer le form
/*
  var_dump($_POST);
 */
if (isset($_POST['lelogin']) && isset($_POST['lemdp'])) {
    $lelogin = htmlspecialchars(strip_tags(trim($_POST['lelogin'])), ENT_QUOTES);
    $lemdp = md5(htmlspecialchars(strip_tags(trim($_POST['lemdp'])), ENT_QUOTES));

    // vérification dans la table utilisateurs si le login ET le mdp correspondent à un utilisateur
    $recup_util_membre = mysqli_query($connect, "SELECT * FROM `tgi_users` WHERE `tgi_pages_id`=9 AND lelogin='$lelogin' AND lemdp='$lemdp'; ") or die("Erreur: " . mysqli_error($connect));
    

    // si on a récupéré un utilisateur (donc connexion réussie) - mysqli_num_rows($req) envoie le nombre de lignes de résultats obtenu par la requête, si il n'a pas de résultat il envoie 0 (0==false), sinon un entier numérique (int == true). Ici, comme lelogin est unique, on ne peut avoir que 0 ou 1 comme résultat
    if (mysqli_num_rows($recup_util_membre)) {
        $recup_tab_membre = mysqli_fetch_assoc($recup_util_membre);

        // création des variables de sessions, on y stocke
        // 1- session_id du cookie local
        // 2- les résultats de notre req
        // variable de sécurité contenant le session_id
        /*  */
        $_SESSION['id_session_membre'] = session_id();
        // variables venant de la table utilisateurs
        $_SESSION['lid_membre'] = $recup_tab_membre['id'];
        $_SESSION['lelogin_membre'] = $recup_tab_membre['lelogin'];
        // redirection vers galerie ou admin
        header("Location: media.php");
    } else {
        $erreur_connect = "Login ou mot de passe incorrecte";
    }
}

include_once 'inc/head.php';
?>
<section id="main">		
    <h1>Tempogym Jette</h1>
    <section id="galery">
        <article>
            <h2>Galerie</h2>
            <p>
                Connectez-vous pour visualiser les photographies et les vidéos du club

            </p>
            <form action="" method="POST" id="connexion" name="connexion">
                <input type="text" name="lelogin" placeholder="Votre login" required />
                <input type="password" name="lemdp" placeholder="Votre mot de passe" required /> 
                <input type="submit" value="Connexion" />
                <?php
                // si erreur on l'affiche
                if (isset($erreur_connect))
                    echo $erreur_connect;
                ?>
            </form>
        </article>
        <?php
        include_once 'inc/footer.php';
        ?>
    </section> 
</body>
</html>
