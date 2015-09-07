<?php
include_once 'inc/head.php';
?>
<section id="main">		
    <h1>Tempogym Jette</h1>
    <section id="dates">

        <article> 
            <h2>Calendriers et horaires</h2>
            <?php
            require_once 'ia/tgj_upload.php';
            while ($ledoc = mysqli_fetch_assoc($recup_dates)) {

                echo "<iframe  width='100%' height='900px' 
				src='" . $path_docs . $ledoc['lurl'] . "'
				><p class='dim'><a 
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


        <span class="lien_interne"><a href="contact.php#adr">Adresses des salles</a></span>



    </section>


    <?php
    include_once 'inc/footer.php';
    ?>
</section>
</body>
</html>
