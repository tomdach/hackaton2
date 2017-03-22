<?php

include_once("connexion.php");
session_start();

$username = $_POST["username"];

echo $username;

$req = mysqli_query($cnx, "SELECT * FROM users WHERE username= '$username'");
$data = mysqli_fetch_assoc($req);

if ($data["username"] == $_POST["username"] && $data["password"] == $_POST["password"] ) {
		$_SESSION["connected"] = "yes";
		$_SESSION["user"] = $username;
		$_SESSION["message"] = $username;
		// mysqli_query($cnx, "UPDATE lastCo SET lastCo = CURRENT_TIMESTAMP WHERE username = '$username'");
	}else{
		$_SESSION["message"] = "Identifiants ou mot de passe incorrect.";
	}


	$req1 = mysqli_query($cnx, "SELECT * FROM theme WHERE id=1");
	$theme = mysqli_fetch_assoc($req1);
	mysqli_query($cnx, "UPDATE theme SET login = 'non', signIn = 'non' WHERE id = 1");

	header("location:../../index.php");

	// lastCo ne s'update pas

?>
