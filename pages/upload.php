<?php

include_once("connexion.php");
session_start();

mysqli_query($cnx, "ALTER TABLE users DROP id");

mysqli_query($cnx, "ALTER TABLE users ADD `id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY FIRST");

// ALTER TABLE `users` ADD `lastCo` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP AFTER `dateInscription`;


$valPseudo = preg_match('#^[0-9]#', $_POST['username']);
$valDate = preg_match("/[0-9]{2}\/[0-9]{2}\/[0-9]{4}/", $_POST["dateNaissance"]);
$valMail = preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", $_POST["mail"]);

$lenPseudo = strlen($_POST['username']);

if ($valPseudo) {
	// header('location:contact.php');
	$_SESSION["message"] = "Pseudo invalide";
	header("location:inscription.php");
} 

elseif ($valDate == false) {
	// header('location:contact.php');
	$_SESSION["message"] = "Date invalide";
	header("location:inscription.php");
} 

elseif ($valMail == false) {
	// header('location:contact.php');
	$_SESSION["message"] = "Mail invalide";
	header("location:inscription.php");
} elseif ($lenPseudo > 30) {
	// header('location:contact.php');
	$_SESSION["message"] = "Pseudo trop long";
	header("location:inscription.php");
}

//---------------------------------------------------

// Vérifier la disponibilité du pseudo

$res = mysqli_query($cnx,"SELECT username FROM users WHERE username='".$_POST["username"]."'");
$data = mysqli_fetch_assoc($res);

$res1 = mysqli_query($cnx,"SELECT username FROM users WHERE mail='".$_POST["mail"]."'");
$data1 = mysqli_fetch_assoc($res1);


if (isset($data)) {
	$_SESSION["message"] = "Username déjà utilisé";
	// header("location:admin.php");
}
elseif (isset($data1)) {
	$_SESSION["message"] = "Mail déjà enregistré";
	// header("location:admin.php");
}
else{

	echo "ok<br>";

//-----------------------------------------------------


if (isset($_POST["username"]) && isset($_POST["password1"]) && isset($_POST["password2"]) && isset($_POST["mail"]) && isset($_POST["dateNaissance"]) && $_POST["password1"] == $_POST["password2"] ) {
	

	$sql1 = "INSERT INTO users (username, password, mail, dateNaiss, connected)
		VALUES ('".$_POST["username"]."', '".$_POST["password1"]."', '".$_POST["mail"]."', '".$_POST["dateNaissance"]."', 'non')";

if ($cnx->query($sql1) === TRUE) {
    echo "New record created successfully";
    $_SESSION["message"] = "Votre compte a bien été enregistré.";
} else {
    echo "Error: " . $sql1 . "<br>" . $cnx->error;
}

$cnx->close();

// !!!!!!!!!!!!!!!!!!
// Messages pour les différents cas
// !!!!!!!!!!!!!!!!!!

}

}

header("location:inscription.php");

?>