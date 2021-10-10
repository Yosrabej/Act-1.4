<?php include('header.php'); ?>
<form method="post" action="articles.php">
    <input type="text" name='titre' placeholder="ajouter le titre" />
    <input type="text" name='texte' placeholder="ajouter le texte" />
    <input type="text" name='auteur' placeholder="auteur" />
    <input type="date" name='date_pub' placeholder="date" />
    <input type="submit" value="Publier" />
</form>


<?php include('footer.php'); ?>
