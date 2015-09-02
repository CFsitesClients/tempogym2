<?php
include_once 'inc/head.php';
?>
<section id="main">		
    <h1>Tempogym Jette</h1>
    <section id="contact">
        <article>
            <h2>Contact</h2>
            <p>
                Les premiers cours reprendront le mercredi 02 septembre 2015 au Sacré-Cœur de Jette
            </p>
        </article>
		<article>
            <h2>Localisation des salles</h2>
			<?php
			/*
			if(google.maps.DirectionsStatus.OK){
				*/
				?>
				<div id="carte">
				</div>
		<?php
		/*
			}
			else{*/
			?>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2517.1960734972054!2d4.333365400000001!3d50.8830813!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c3c3cedeb09d89%3A0x70469259b3d1f887!2sAvenue+du+Comt%C3%A9+de+Jette+3%2C+1090+Jette!5e0!3m2!1sfr!2sbe!4v1435672326933" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
			}
        </article>
        <article>
            <h2>Adresses des salles</h2>
            <h3>BASIC-FIT</h3>
            <p>Avenue du Laerbeek 125 à 1090 Bruxelles (accès par l’UZ)<br />02/477.40.99</p>

            <h3>SACRE-CŒUR DE JETTE</h3>
            <p>Avenue du Sacré-Cœur 8 1090 Bruxelles<br />Entrée via la rue Bonaventure, en face du numéro 262<br />02/478.71.90</p>

            <h3>C<span class="none">ENTRE</span> S<span class="none">PORTIF DE LA</span> FORET DE SOIGNES</h3>
            <p>Salle G1<br />Chaussée de Wavre, 2057<br />1160 Bruxelles<br />02/672.22.60</p>
			
        </article>
        
        <?php
        include_once 'inc/footer.php';
        ?>
    </section> 
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
        <script>
            window.onload = function () {

                var basicFit = new google.maps.LatLng(50.8848420, 4.3058680);
                var sacreCoeurJette = new google.maps.LatLng(50.8850472, 4.3292679);
                var csForetSoignes = new google.maps.LatLng(50.8093405, 4.4437919);
                var tgjJette = new google.maps.LatLng(50.8830813, 4.3333654);
				var centreCinquantenaire = new google.maps.LatLng(50.8413930,4.3904833);

                // geolocalisation
                navigator.geolocation.getCurrentPosition(positionTrouvee, erreurPosition);


                function positionTrouvee(position) {
                    var maCarte = new google.maps.Map(document.getElementById('carte'), mesOptions);

                    afficheMarqueur(maCarte, "BASIC-FIT | 125 Avenue du Laerbeek 1090 Bruxelles (accès par l’UZ) | 02/477.40.99", basicFit);
                    afficheMarqueur(maCarte, "SACRE-CŒUR DE JETTE | 8 Avenue du Sacré-Cœur 1090 Bruxelles (Entrée via la rue Bonaventure, en face du numéro 262) | 02/478.71.90 ", sacreCoeurJette);
                    afficheMarqueur(maCarte, "CENTRE SPORTIF DE LA FORET DE SOIGNES (Salle G1) | 2057 Chaussée de Wavre 1160 Bruxelles | 02/672.22.60", csForetSoignes);
                    afficheMarqueur(maCarte, "Salle Tempogym Jette (En construction) | 3 Avenue du Comté de Jette 1090 Jette | ", tgjJette);

                }

                function erreurPosition(erreur) {
                    switch (erreur.code) {
                        case erreur.PERMISSION_DENIED:
                            alert("PERMISSION_DENIED : l'utilisateur n'a pas autorisé l'accès à sa position.");
                            break;
                        case erreur.POSITION_UNAVAILABLE:
                            alert("POSITION_UNAVAILABLE : la position n'a pas pu être déterminée.");
                            break;
                        case erreur.TIMEOUT:
                            alert("TIMEOUT : le service n'a pas répondu à temps.");
                            break;
                        case erreur.UNKNOWN_ERROR:
                            alert("UNKNOWN_ERROR : une erreur inconnue s'est produite");
                    }
                }


                var mesOptions = {
                    zoom: 12,
                    center: centreCinquantenaire,
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                    ,
                    mapTypeControlOptions: {
                        mapTypeIds: [google.maps.MapTypeId.HYBRID, google.maps.MapTypeId.SATELLITE,
                            google.maps.MapTypeId.TERRAIN],
                        style: google.maps.MapTypeControlStyle.HORIZONTAL_BAR
                    }
                };

                function afficheMarqueur(objetCarte, texteCarte, position) {
                    var monMarqueur = new google.maps.Marker({
                        position: position,
                        map: objetCarte,
                        title: texteCarte
                    });
                }

            }
        </script>
</body>
</html>