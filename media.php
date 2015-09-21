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
        <article>
            <div id="tabs">
                <ul>
                    <li><a href="#fragment-1"><span>Entraînements</span></a></li>
                    <li><a href="#fragment-2"><span>Évenements</span></a></li>
                </ul>
                <div id="fragment-1">
                    <ul id="lightGallery" class="gallery">
                        <li data-src="tgj_gallery/images/affichees/img1.jpg">
                            <img src="tgj_gallery/images/miniatures/tn_img1.jpg" />
                        </li>
                        <li data-src="tgj_gallery/images/affichees/img2.png">
                            <img src="tgj_gallery/images/miniatures/tn_img2.png" />
                        </li>
                    </ul>
                </div>
                <div id="fragment-2">
                    <ul id="lightGallery2" class="gallery">
                        </li>
                        <li data-src="tgj_gallery/images/affichees/img3.png">
                            <img src="tgj_gallery/images/miniatures/tn_img3.png" />
                        </li>
                        <li data-src="tgj_gallery/images/affichees/img4.jpg">
                            <img src="tgj_gallery/images/miniatures/tn_img4.jpg" />
                        </li>
                        <li data-src="tgj_gallery/images/affichees/img5.png">
                            <img src="tgj_gallery/images/miniatures/tn_img5.png" />
                        </li>
                    </ul>
                </div>
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
