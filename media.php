<?php
session_start();
/* Si la session n'existe pas (encore) ou ne correspond plus au cookie */
if (!isset($_SESSION['id_session_membre']) || $_SESSION['id_session_membre'] != session_id()) {
    header("Location: deconnect.php");
}
include_once 'inc/meta.php';
/* include_once 'inc/fotorama.php'; */
include_once 'inc/nav.php';
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
                    <audio controls="controls" preload="none">
                        <source src="audio/Candy.mp3" type="audio/mp3" /> 
                        Votre navigateur n'est pas compatible
                    </audio>
                </div>
            </center>
        </article>
        <?php
        include_once 'inc/footer.php';
        ?>
    </section> 
</section>
</body>
</html>
