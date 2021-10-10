<form method="post" action="comment.php">
    <input type="text" name='texte' placeholder="ajouter commentaire" />
    <input type="text" name='auteur' placeholder="votre nom" />
    <input type="hidden" name='date' value='<?php echo date('Y-m-d') ?>' />
    <!--<button><a href="comment.php?id=<? //php echo $donnees['id']; 
                                        ?>">Commenter</a></button>-->
    <input type="submit" value="commenter" />
</form>