<?php
session_start();
require_once 'connect.php';
/* afficher les contenus de la DB page asbl: x articles */
$sql_p4_all="SELECT * FROM `tgj_articles` WHERE `tgi_pages_id`=4";
$req_p4_all=mysqli_query($connect, $sql_p4_all) or die(mysqli_error($connect));

include_once 'inc/head.php';
?>
<section id="main">		
    <h1>Tempogym Jette</h1>
    <section id="about">
        <article>
            <h2>Le comité administratif</h2>
            <?php 
            /*while($recup_p4_all=mysqli_fetch_assoc($req_p4_all)){
                echo "<h3>".$recup_p4_all['letitre']."</h3>";
                echo "<p>".$recup_p4_all['letexte']."</p>";
                
            }*/
            ?>
            <h3>Président</h3>
            <p>Stéphane Etienne</p>
      

            <h3><a id="tenue"></a>Vice-Président</h3>
            <p>Patrice Van Den bossche
    

            <h3>Trésorier</h3>
            <p>Didier Dokens</p>
   

            <h3>Secrétaire</h3>
            <p>Catherine Massart</p>
     

            <h3>Coordinateur</h3>
            <p>Jonathan Nani</p>
         

            <h3>Le club Tempogym Jette</h3>
            <p>e-mail : tempogymjette@hotmail.com</p>
            <p>Gsm club : 0473/17.34.14</p>
        </article>
    </section>
    <?php
    include_once 'inc/footer.php';
    ?>
</section>
</body>
</html>
