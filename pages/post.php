<?php 
include_once("connexion.php");
session_start();

mysqli_query($cnx, "ALTER TABLE articles DROP id");

mysqli_query($cnx, "ALTER TABLE articles ADD `id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY FIRST");




// $path = "../img/";

// if ($_FILES['userfiles']['type'] != "image/jpg" && $_FILES['userfiles']['type'] != "image/jpeg" && $_FILES['userfiles']['type'] != "image/png" && $_FILES['userfiles']['type'] != "image/gif") { 
// 		$_SESSION["error"] = "ERROR"; // Vérifie le type de fichier, si != a une image, erreur, sinon upload.
// 	}
// 	else{
// 		$res = move_uploaded_file( $_FILES['userfiles']['tmp_name'],
// 		$path .$_FILES['userfiles']['name']); // Upload de l'image
// 	}

// if ((int) $res == 1 ) { // Ajout a la base de données
	
// 	$sql1 = "INSERT INTO articles (titre, texte, photo)
// 	VALUES ('".$_POST["titre"]."', '".$_POST["texte"]."', '".$_FILES['userfiles']['name']."')";

// if ($cnx->query($sql1) === TRUE) {
//     echo "New record created successfully uploaded <br>";
// } else {
//     echo "Error: " . $sql1 . "<br>" . $cnx->error;
// }

// $cnx->close();

// }

// echo "upload result = " .(int) $res; // Résultat de l'upload
// echo "<br>";
// echo "DOCUMENT_ROOT = ".$_SERVER['DOCUMENT_ROOT']; // Racine du dossier
// echo "<br>";

// $_SESSION["res"] = $res;

// echo "type = ". $_FILES['userfiles']['type'] . "<br>";
// echo "name = ". $_FILES['userfiles']['name'] . "<br>";
// echo "size = ". $_FILES['userfiles']['size'] . "<br>";
// echo "tmp_name = ". $_FILES['userfiles']['tmp_name'] . "<br>";
// echo $_FILES["userfiles"]["error"];
// echo "<br>";

// if (isset($_POST["titre"]) && isset($_POST["texte"])) {
// 	mysqli_query($cnx, "INSERT INTO articles (titre, texte)
// 	VALUES ('".$_POST["titre"]."', '".$_POST["texte"]."'");
// }

// header("location:admin.php");

?>