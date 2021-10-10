<?php include 'header.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!--afficher l'article -->
    <?php if (isset($_GET['id'])) {
        $id = $_GET['id'];
        //echo 'titre';
        $bdd = new mysqli('localhost', 'root', '', 'articles');

        $res = $bdd->query("SELECT * FROM articles WHERE id= $id") or die($bdd->error);
        //afficher un article
        $row = $res->fetch_array();
        echo $titre = $row['titre'] . '<br />';
        echo $texte = $row['texte'] . '<br />';
        echo $auteur = $row['auteur'] . '<br />';
        echo $date = $row['date_pub'] . '<br />';
    }
    ?>
    <h1>comments</h1>

    <!--afficher le commentaire -->
    <?php
    include('afficher.php'); //formulaire
    // connection db
    $com = new mysqli('localhost', 'root', '', 'articles');
    // Check connection
    if (!$com) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $texte = isset($_POST['texte']) ? $_POST['texte'] : NULL;
    $auteur = isset($_POST['auteur']) ? $_POST['auteur'] : NULL;
    $date = isset($_POST['date']) ? $_POST['date'] : NULL;
    $id_article = isset($_POST['id_article']) ? $_POST['id_article'] : NULL;
    //insert data into db
    $com->query("INSERT INTO commentaires (texte, auteur, date, id_article) VALUES ('$texte', '$auteur', '$date', '$id_article')") or die($com->error);

    //affichage
    $reponse = $com->query("SELECT * FROM commentaires");

    // On affiche chaque entrée une à une
    while ($donnees = $reponse->fetch_assoc()) {

        echo $donnees['texte'] . '<br />';
        echo $donnees['auteur'] . '<br />';
        echo $donnees['date'];
    }
    ?>
    <?php /*if (isset($_GET['id_article'])) {
        $id = $_GET['id_article'];
        $com->query("SELECT * FROM commentaires WHERE id= $id") or die($com->error);
            }
    }*/
    ?>

</body>

</html>
