<?php
session_start();
/* Si la session n'existe pas (encore) ou ne correspond plus au cookie */
if (!isset($_SESSION['id_session_membre']) || $_SESSION['id_session_membre'] != session_id()) {
    header("Location: deconnect.php");
}
include_once 'inc/meta.php';
include_once 'inc/fotorama.php';
include_once 'inc/nav.php';
?>
<section id="main">		
    <h1>Tempogym Jette</h1>
    <section id="galery">
        <article>
            <h2>Galerie</h2>
            <p>
                Vous êtes connecté en tant que membre<span class="hidden">, bienvenue "<?= $_SESSION['lelogin_membre']; ?>"</span>
            </p>
            <p class="adminmedia">
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
                <div class="fotorama" data-autoplay="true">
                    <img src="img/slider1.jpg">
                    <img src="img/slider2.jpg">
                    <img src="img/slider3.jpg">
                    <img src="img/slider4.jpg">
                    <img src="img/slider5.jpg">
                </div>
            </center>
        </article>
        <?php
        include_once 'inc/footer.php';
        ?>
    </section> 
</body>
</html>
