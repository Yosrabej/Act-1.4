<?php
include('header.php');
?>
<?php /*function getArticles()
{
    $get=file_get_contents('articles.json');
    print_r($get);
    }
    getArticles()*/ ?>

<?php
// Sous WAMP connection db
$bdd = new mysqli('localhost', 'root', '', 'articles');
// Check connection
if (!$bdd) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";


$titre = isset($_POST['titre']) ? $_POST['titre'] : NULL;
$texte = isset($_POST['texte']) ? $_POST['texte'] : NULL;
$auteur = isset($_POST['auteur']) ? $_POST['auteur'] : NULL;
$date = isset($_POST['date_pub']) ? $_POST['date_pub'] : NULL;

//insert data into db
$bdd->query("INSERT INTO articles (titre, texte, auteur, date_pub) VALUES ('$titre', '$texte', '$auteur', '$date')") or die($bdd->error);

//affichage
$reponse = $bdd->query('SELECT * FROM articles');

// On affiche chaque entrée une à une
while ($donnees = $reponse->fetch_assoc()) {
    echo $donnees['titre'] . '<br />';
    echo $donnees['texte'] . '<br />';
    echo $donnees['auteur'] . '<br />';
    echo $donnees['date_pub'];
?>
    <form action="delete.php" method="post">

        <button><a href="articles.php?id=<?php echo $donnees['id']; ?>">Delete</a></button>
        <button><a href="index.php?id=<?php echo $donnees['id']; ?>">Afficher</a></button>
        <!--  <input type='submit' name='delete' value='delete' />-->
        <!--<input type='hidden' name='deleteid' value='<?php echo $donnees['id']; ?>' />-->
    </form>
<?php

}


//$reponse->closeCursor(); // Termine le traitement de la requête

?>
<?php if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $bdd->query("DELETE FROM articles WHERE id= $id") or die($bdd->error);
}
?>
