<?php 
include_once("connexion.php");
session_start();

mysqli_query($cnx, "ALTER TABLE commentaires DROP id");

mysqli_query($cnx, "ALTER TABLE commentaires ADD `id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY FIRST");

$texte = $_POST["texte"];
$user = $_SESSION["user"];
$article = $_SESSION["article"];

if (isset($_SESSION["user"])) {


mysqli_query($cnx, "INSERT INTO commentaires (username, comment, article) VALUES ('".$_SESSION["user"]."', '".$_POST["texte"]."', '".$_SESSION["article"]."')");

}
elseif (!isset($_SESSION["user"]) && isset($_POST["commenter"])) {
	header("location:pageConnexion.php");
}

header("location:article.php?id=".$_SESSION["article"]."");


?>