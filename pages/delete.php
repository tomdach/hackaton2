<?php 

include_once("connexion.php");
include_once("utils.php");
session_start();

if (isset($_POST["supprimerArticle"])) {
	mysqli_query($cnx, "DELETE FROM articles WHERE id='".$_POST["selectionArticle"]."'");
	resetId("hackathon2", "articles");
	header("location:admin.php?choix=supprimerArticle");
}

if (isset($_POST["supNumArt"])) {
	$save = $_POST["numArt"];
	$_SESSION["article"] = $save;
	
	header("location:admin.php?choix=supprimerCommentaire");

}
if (isset($_POST["supNumCom"])) {

	$save = $_POST["numCom"];

	mysqli_query($cnx, "DELETE FROM commentaires WHERE id='".$save."'");

	unset($_SESSION['article']);

	resetId("hackathon2", "commentaires");

	header("location:admin.php?choix=supprimerCommentaire");
}

if (isset($_POST["supprUser"])) {
	$save = $_POST["pseudoDelete"];
	mysqli_query($cnx, "DELETE FROM users WHERE username='".$save."'");

	resetId("hackathon2", "users");

	header("location:admin.php?choix=gerer");
}

?>