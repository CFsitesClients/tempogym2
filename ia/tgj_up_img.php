<?php

// si on a envoyé le formulaire et qu'un fichier est bien attaché
if (isset($_POST['letitre']) && isset($_FILES['lefichier']) && isset($_GET['img'])) {

// traitement des chaines de caractères
    $letitre = traite_chaine($_POST['letitre']);
    $ladesc = traite_chaine($_POST['ladesc']);
    $lidcat = (int) ($_POST['lidcat']);

// récupération des paramètres du fichier uploadé
    $limage = $_FILES['lefichier'];

// appel de la fonction d'envoi de l'image, le résultat de la fonction est mise dans la variable $upload
    $upload = upload_originales($limage, $dossier_ori, $formats_acceptes);

// si $upload n'est pas un tableau c'est qu'on a une erreur
    if (!is_array($upload)) {
// on affiche l'erreur
        echo $upload;

// si on a pas d'erreur, on va insérer dans la db et créer la miniature et grande image   
    } else {
// création de la grande image qui garde les proportions
        $gd_ok = creation_img($dossier_ori, $upload['nom'], $upload['extension'], $dossier_gd, $grande_large, $grande_haute, $grande_qualite);

// création de la miniature centrée et coupée
        $min_ok = creation_img($dossier_ori, $upload['nom'], $upload['extension'], $dossier_mini, $mini_large, $mini_haute, $mini_qualite, false);

// si la création des 2 images sont effectuées
        if ($gd_ok == true && $min_ok == true) {

// préparation de la requête (on utilise un tableau venant de la fonction upload_originales, de champs de formulaires POST traités et d'une variable de session comme valeurs d'entrée)
            $sql = "INSERT INTO tgj_photos (lenom,lextention,lepoids,lahauteur,lalargeur,letitre,ladedsc,tgj_cat_id) 
	VALUES ('" . $upload['nom'] . "','" . $upload['extension'] . "'," . $upload['poids'] . "," . $upload['hauteur'] . "," . $upload['largeur'] . ",'$letitre','$ladesc',$lidcat);";

            mysqli_query($connect, $sql) or die(mysqli_error($connect));

// récupération de la dernière id insérée par la requête qui précède (dans photo par l'utilisateur actuel)
            $id_photo = mysqli_insert_id($connect);
        } else {
            echo 'Erreur lors de la création des images redimenssionnées';
        }
    }
}



// si on confirme la suppression
if (isset($_GET['lide']) && ctype_digit($_GET['lide'])) {
    $idphoto = $_GET['lide'];

    // récupération du nom de la photo
    $sql1 = "SELECT lenom, lextention FROM tgj_photos WHERE id=$idphoto;";
    $nom_photo = mysqli_fetch_assoc(mysqli_query($connect, $sql1));

    //suppression dans la table photo
    $sql2 = "DELETE FROM tgj_photos WHERE id = $idphoto";
    mysqli_query($connect, $sql2);

    $dossier_ori . $nom_photo['lenom'] . "." . $nom_photo['lextention'];

    // supression physique des fichiers
    unlink($dossier_ori . $nom_photo['lenom'] . "." . $nom_photo['lextention']);
    unlink($dossier_gd . $nom_photo['lenom'] . ".jpg");
    unlink($dossier_mini . $nom_photo['lenom'] . ".jpg");
}


/* PAGINATION */
// on va compter le nombre de lignes de résultat pour la pagination, le COUNT ne renvoie q'une ligne de résultat
$recup_nb_photo = "SELECT COUNT(*) AS nb FROM tgj_photos";

// requete de récupération
$tot = mysqli_query($connect, $recup_nb_photo);
// transformation du résultat en tableau associatif
$maligne = mysqli_fetch_assoc($tot);
// variable contenant le nombre total de proverbes
$nb_total = $maligne['nb'];

// Vérification de la variable GET de la pagination
if (isset($_GET[$get_pagination])) {
    //Si la var est un entier positif
    if (ctype_digit($_GET[$get_pagination])) {
        // on récupère la valeur de la var ssi elle est numeric +
        $pg_actu = $_GET[$get_pagination];
    } else {
        $pg_actu = 1; // par défaut aller en page 1
    }
} else {
    $pg_actu = 1;
}

// Création de la varible $debut utilisée dans le LIMIT
$debut = (($pg_actu - 1) * $elements_par_page);
/* FIN PAGINATION */




// récupérations des images dans la table photos avec leur section
$sqlaffich = "SELECT p.*,c.lintitule
    FROM tgj_photos p
    INNER JOIN tgj_photos_cat c ON p.tgj_cat_id = c.id
        GROUP BY p.id
        ORDER BY p.id DESC
 LIMIT $debut,$elements_par_page";


$recup_sql = mysqli_query($connect, $sqlaffich) or die(mysqli_error($connect));



// récupération de toutes les rubriques pour le formulaire d'insertion
$sqlrub = "SELECT * FROM tgj_photos_cat ORDER BY id ASC;";
$recup_section = mysqli_query($connect, $sqlrub);


       
 


