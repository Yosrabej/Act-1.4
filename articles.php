<?php
include ('header.php');
?>
 <?php /*function getArticles()
{
    $get=file_get_contents('articles.json');
    print_r($get);
    }
    getArticles()*/ ?>

<?php
// Sous WAMP
$bdd = new PDO('mysql:host=localhost;dbname=articles;charset=utf8', 'root', ''); 
// if($bdd){echo 'yes';}   

$titre = isset($_POST['titre']) ? $_POST['titre'] : NULL;
$texte = isset($_POST['texte']) ? $_POST['texte'] : NULL;
$auteur = isset($_POST['auteur']) ? $_POST['auteur'] : NULL;
$date = isset($_POST['date_pub']) ? $_POST['date_pub'] : NULL;

$bdd->exec("INSERT INTO articles (titre, texte, auteur, date_pub) VALUES ('$titre', '$texte', '$auteur', '$date')");

//affichage
$reponse = $bdd->query('SELECT * FROM articles');

// On affiche chaque entrée une à une
while ($donnees = $reponse->fetch()){
    echo $donnees['titre'] . '<br />';
    echo $donnees['texte'] . '<br />';
    echo $donnees['auteur'] . '<br />';
    echo $donnees['date_pub']; 
    ?>
    <form action="delete.php" method="post">
 
   <button><a href="delete.php?id=<?php echo $donnees['id']; ?>">Delete</a></button>
   <input type= 'submit' name='delete' value='delete' />
   <input type= 'hidden' name='deleteid' value='<?php echo $donnees['id']; ?>' />
</form>
    <?php
 
}


$reponse->closeCursor(); // Termine le traitement de la requête

?>
   