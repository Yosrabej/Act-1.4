<?php include ('header.php');?>
<form method="post" action="articles.php">
<input type="text" name='titre' value="ajouter le titre"/>
<input type="text" name='texte' value="ajouter le texte"/>
<input type="text" name='auteur' value="auteur"/>
<input type="date" name='date_pub' value="date"/>
<input type="submit" value="Publier" />
</form>


<?php include ('footer.php');?>
