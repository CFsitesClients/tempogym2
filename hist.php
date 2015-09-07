<?php
require_once 'connect.php';


include_once 'inc/head.php';
?>
<section id="main">		
    <h1><a class="hp" href="index.php">Tempogym Jette</a></h1>
    <section id="about">
        <article>
            <h2>Histoire et philosophie</h2>

            <p>La gymnastique, sport pour lequel nos prédécesseurs à la tête du club et nous-mêmes nous investissons depuis 1923, constitue une voie royale pour le développement psychomoteur. <p> 
            <p> Ce sport complet sollicitant tous les muscles et articulations a pour vocation première d’agir avec un maximum d’adresse. En outre, il procure des sensations, c’est la raison pour laquelle les enfants l’apprécient tellement. </p> <p> Tempogym Jette c’est l’école de la gymnastique vers l’école de la vie car bon nombre de situations vécues par nos gymnastes demandent une gestion mentale transposable en société. </p> 
            <p> À la gym il faut être concentré et ne pas se laisser déstabiliser par l’échec dans l’exécution d’une agilité. Dans la vie on essaiera de surmonter ses soucis, de se maîtriser. </p> 
            <p> A la gym il faut de la prestance, tenue correcte et port élégant. Dans la vie on saura se présenter aux autres. A la gym il faut parfois travailler dans des conditions difficiles, entraîneur absent, matériel souhaité indisponible ou chauffage en panne dans la salle. Dans la vie saura supporter des conditions inconfortables. A la gym on est parfois le conseiller d’un ami ou une amie. Dans la vie on saura aider et se rendre disponible. A la gym il faut participer au montage et rangement du matériel. Dans la vie on saura mettre la main à la pâte. Oui la gymnastique dispose d’une grande valeur éducationnelle. </p> 
            <p> Notre club est ouvert à tous, bon ou moins bon gymnaste. L’important c’est le plaisir du jeune dans la pratique de son sport. Le personnel du club est là pour gérer, organiser, former, imaginer et dialoguer. C’est un travail agréable et intéressant mais parfois assez lourd en temps et investissement personnel. Lourdeur vite oubliée lorsque nous voyons le sourire s’afficher sur le visage d’un enfant qui vient de réussir un geste technique.</p>
        </article>
    </section>
    <section id="organi">
        <article>
            <h2><a name="organi"></a>Organigramme</h2>
            <?php
            require_once 'ia/tgj_upload.php';
            while ($ledoc = mysqli_fetch_assoc($recup_organi)) {

                echo "<iframe  width='100%' height='900px' 
				src='" . $path_docs . $ledoc['lurl'] . "'
				><p><a 
				href='" . $path_docs . $ledoc['lurl'] . "' title='" . $ledoc['letitre'] . "'
				><img class='dim' 
				src='" . $path_docs . $ledoc['lurl'] . "' alt='" . $ledoc['letitre'] . "'
				/></a></p></iframe><br />";
                echo "
	<p><a href='" . $path_docs . $ledoc['lurl'] . "' target='_blank'>" . $ledoc['letitre'] . "</a> (";
                // BONUS affichage de l'extension récupérée de l'url
                echo strrchr($ledoc['lurl'], '.');
                echo ")</p>
	";
            }
            ?> 
        </article>

        <span class="lien_interne"><a href="contact.php">Contacter le club</a></span>

    </section>

    <?php
    include_once 'inc/footer.php';
    ?>

</section>
</body>
</html>
