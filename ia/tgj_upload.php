<?php

require_once 'connect.php';

if (isset($_FILES['lefichier']) && isset($_POST['letitre'])) {
    $letitre = htmlspecialchars(strip_tags(trim($_POST['letitre'])), ENT_QUOTES);
    (isset($_POST['lid'])&&ctype_digit($_POST['lid']))? $lid = $_POST['lid'] : $lid=8;
    // chemin du dossier d'upload
    $dossier = "../docs/";
    // récupération du nom d'origine avec son extension
    $nom_origine = basename($_FILES['lefichier']['name']);

    // on récupère l'extension en prenant le texte se trouvant derrière le dernier point => strrchr(j.jpg.tata.gif, '.') => .gif
    $extension = strrchr($nom_origine, '.');

    // liste des extensions acceptées dans un tableau
    $ext_valides = ['.pdf'];

    // mise en minuscule des extensions des fichiers pour vérification
    $extension = strtolower($extension);

    // si l'extension n'est pas valide, on arrête le script
    if (!in_array($extension, $ext_valides)) {
        exit("Type de fichier non valide <a href='admin.php'>Retour</a>");
    }

    // taille maximale autorisée
    $taille = 5000000;

    // taille réelle du fichier
    $taille_fichier = filesize($_FILES['lefichier']['tmp_name']);

    // si le fichier est trop lourd, on arrête le script
    if ($taille_fichier > $taille) {
        exit("Taille du fichier trop grande !  <a href='admin.php'>Retour</a>");
    }

    // création d'un nom semi-aléatoire
    $nom = date('YmdHis') . mt_rand(100000, 999999);

    // on déplace le fichier du dossier temporaire vers le dossier final sur le serveur
    if (move_uploaded_file(
                    $_FILES['lefichier']['tmp_name'], $dossier . $nom . $extension)) {

        mysqli_query($connect, "INSERT INTO tgj_docs 
                            (lurl,letitre,lepoids,tgi_pages_id)
                            VALUES
                            ('$dossier$nom$extension','$letitre',$taille_fichier,$lid);
        
        ") or die("Erreur lors de l'insertion: " . mysqli_error($connect));
    } else {
        echo "Erreur lors de l'upload du fichier";
    }
}

// on va afficher les liens vers les docs sauvés dans la db
$recup_dim = mysqli_query($connect, "SELECT * FROM tgj_docs WHERE tgi_pages_id=5 ORDER BY id DESC LIMIT 1;") or die(mysqli_error($connect));

$recup_docs = mysqli_query($connect, "SELECT * FROM tgj_docs WHERE tgi_pages_id=7 ORDER BY id DESC;") or die(mysqli_error($connect));
