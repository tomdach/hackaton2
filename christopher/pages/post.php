<?php 
include_once("connexion.php");
session_start();

mysqli_query($cnx, "ALTER TABLE articles DROP id");

mysqli_query($cnx, "ALTER TABLE articles ADD `id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY FIRST");


$path = "../img/articles/"; // Chemin d'upload

if (isset($_POST["poster"])) { // Si le bouton pour le post est activé


if ($_FILES['userfiles']['type'] != "image/jpg" && $_FILES['userfiles']['type'] != "image/jpeg" && $_FILES['userfiles']['type'] != "image/png" && $_FILES['userfiles']['type'] != "image/gif") {
		$_SESSION["error"] = "ERROR"; // Vérifie le type de fichier, si != a une image, erreur, sinon upload.
	}
	else{
		$res = move_uploaded_file( $_FILES['userfiles']['tmp_name'],
		$path .$_FILES['userfiles']['name']); // Upload de l'image
	}

if ((int) $res == 1 ) { // Ajout a la base de données
	
	$sql1 = "INSERT INTO articles (titre, texte, photo)
		VALUES ( '".$_POST['titre']."' ,'".$_POST['texte']."' ,'".$_FILES['userfiles']['name']."')";

if ($cnx->query($sql1) === TRUE) {
    echo "New record created successfully uploaded <br>";
} else {
    echo "Error: " . $sql1 . "<br>" . $cnx->error;
}

$cnx->close();

}


echo "upload result = " .(int) $res;
echo "<br>";
echo "DOCUMENT_ROOT = ".$_SERVER['DOCUMENT_ROOT'];
echo "<br>";

$_SESSION["res"] = $res;

echo "type = ". $_FILES['userfiles']['type'] . "<br>";
echo "name = ". $_FILES['userfiles']['name'] . "<br>";
echo "size = ". $_FILES['userfiles']['size'] . "<br>";
echo "tmp_name = ". $_FILES['userfiles']['tmp_name'] . "<br>";
echo $_FILES["userfiles"]["error"];
echo "<br>";

}


header("location:admin.php");

?>