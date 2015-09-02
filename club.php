<?php
require_once 'connect.php';
/* afficher le contenu de la DB page club: 2 articles (intro) */
$sql_p2_i1 = "SELECT * FROM `tgj_articles` WHERE `tgi_pages_id`=2 AND `id`=3";
$req_p2_i1 = mysqli_query($connect, $sql_p2_i1) or die(mysqli_error($connect));
$recup_p2_i1 = mysqli_fetch_assoc($req_p2_i1);

$sql_p2_i2 = "SELECT * FROM `tgj_articles` WHERE `tgi_pages_id`=2 AND `id`=4";
$req_p2_i2 = mysqli_query($connect, $sql_p2_i2) or die(mysqli_error($connect));
$recup_p2_i2 = mysqli_fetch_assoc($req_p2_i2);

include_once 'inc/head.php';
?>
<section id="main">		
    <h1>Tempogym Jette</h1>
    <section id="about">
        <article>
            <h2><?= $recup_p2_i1['letitre'] ?></h2>
            <p>
                <?= $recup_p2_i1['letexte'] ?>
            </p>
            <p class="more"><a href="hist.php">Lire plus ...</a></p>
        </article>
        <article>
            <h2><?= $recup_p2_i2['letitre'] ?></h2>
            <p>
                <?= $recup_p2_i2['letexte'] ?>
            </p>
            <p class="more"><a href="asbl.php">Lire plus ...</a></p>
        </article>
    </section>
    <?php
    include_once 'inc/footer.php';
    ?>
</section>
</body>
</html>
