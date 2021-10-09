
<?php /*
//$id = $_POST['deleteid'];
$id = $_GET['id']
echo $id;
function delete(){ 
 $bdd = new PDO('mysql:host=localhost;dbname=articles;charset=utf8', 'root', ''); //db connection
 //$del= "DELETE FROM articles WHERE id = :id";
$del = $bdd->prepare("DELETE FROM articles WHERE id = :id");
 $del->bindParam(':id', $id, PDO::PARAM_INT);
 $del->execute();
echo "deleted";
}
  delete(); */?>
             
         
               


