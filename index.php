<?php
require_once 'connect.php';
/* afficher le contenu de la DB page accueil: 2 articles */
$sql_p1_a1 = "SELECT * FROM `tgj_articles` WHERE `tgi_pages_id`=1 AND `id`=1";
$req_p1_a1 = mysqli_query($connect, $sql_p1_a1) or die(mysqli_error($connect));
$recup_p1_a1 = mysqli_fetch_assoc($req_p1_a1);

$sql_p1_a2 = "SELECT * FROM `tgj_articles` WHERE `tgi_pages_id`=1 AND `id`=2";
$req_p1_a2 = mysqli_query($connect, $sql_p1_a2) or die(mysqli_error($connect));
$recup_p1_a2 = mysqli_fetch_assoc($req_p1_a2);

include_once 'inc/head.php';
?>
<section id="main">		
    <h1>Bienvenue sur le site de Tempogym Jette</h1>
    <section id="chapeau">
            <p class="intro">Dans un esprit familial, notre équipe de moniteurs accueille vos enfants, filles et garçons, dès l'âge de 3 ans et demi de l'initiation à la compétition.</p>        
    </section>
    <section id="news">
        <article>
            <h2><?= $recup_p1_a1['letitre'] ?></h2>
            <p>
                <?= $recup_p1_a1['letexte'] ?>
            </p>
        </article>
        <article class="right">
            <h2><?= $recup_p1_a2['letitre'] ?></h2>
            <p>
                <?= $recup_p1_a2['letexte'] ?>
            </p>
        </article>
    </section>
    <?php
    /* include_once 'inc/nav_qklk.php'; */
    include_once 'inc/footer.php';
    ?>
</section> 
</body>
</html>
