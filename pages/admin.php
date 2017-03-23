<?php

include_once("connexion.php");
include_once("utils.php");
session_start();

$req = mysqli_query($cnx, "SELECT * FROM users WHERE id=1");
$data = mysqli_fetch_assoc($req);

if ($_SESSION["user"] != $data["username"]) {
  header("location:../index.php");
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="../index.php"><img id="logo" src="../img/logo.png"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="../index.php">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Projects</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
      <li>
        <?php 

        $req = mysqli_query($cnx, "SELECT * FROM users WHERE id=1");
        $data = mysqli_fetch_assoc($req);

        if ($_SESSION["user"] == $data["username"]) {
            echo "<a href=\"admin.php\"><span class=\"glyphicon glyphicon-log-in\"></span> Admin</a>";
        } ?>
      </li>
        <li><?php
              if (isset($_SESSION["user"])) {
                echo "<a href=\"profile.php\"><span class=\"glyphicon glyphicon-log-in\"></span> Profile</a>";
              }
              else{
                echo "<a href=\"inscription.php\"><span class=\"glyphicon glyphicon-log-in\"></span> Sign In</a>";
              }
            ?>
          
        </li>
        <li>
          <?php 
            if (isset($_SESSION["user"])) {
              echo "<a href=\"logout.php\"><span class=\"glyphicon glyphicon-log-in\"></span> Logout</a>";
            }
            else{
              echo "<a href=\"pageConnexion.php\"><span class=\"glyphicon glyphicon-log-in\"></span> Login</a>";
            }
          ?>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- FIN NAVBAR -->
  
<div class="container-fluid text-center fill">    
  <div class="row content">
    <div class="col-sm-2 sidenav fill">
      <p><a href="admin.php?choix=publier">Publier un article</a></p>
      <hr>
      <p><a href="admin.php?choix=supprimerArticle">Supprimer un article</a></p>
      <hr>
      <p><a href="admin.php?choix=supprimerCommentaire">Supprimer un commentaire</a></p>
      <hr>
      <p><a href="admin.php?choix=gerer">Gérer les utilisateurs</a></p>
      <hr>
    </div>
    <div class="col-sm-8 text-left"> 
      <div class="text-center">
      </div>

      <h1 class="text-center">Administration</h1>


<div class="text-center form-group">
<br>

<?php 
if (!isset($_GET["choix"])) {
  header("location:admin.php?choix=publier");
}
?>

<?php if ($_GET["choix"] == "publier") {
  echo '<form enctype="multipart/form-data" method="POST" action="post.php">
  <label>Titre</label><br>
  <input style="margin-left: 10vh;" class="form-control" type="text" name="titre" placeholder="Titre"><br>
  <label for="texte">Contenu</label><br>
  <textarea style="height: 50vh; width: 50vh; resize: none;" class="form-control" id="texte" name="texte" placeholder="Texte"></textarea><br>
  <input style="margin-left: 10vh;" class="form-control" type="file" name="userfiles"><br>
  <input type="submit" name="poster" value="Valider">
</form>
';
} elseif ($_GET["choix"] == "supprimerArticle") {
  echo '<form method="post" action="delete.php">
  <label>Id de l\'article</label><br>
  <input class="form-control" type="text" name="selectionArticle"><br>
  <input class="btn" type="submit" name="supprimerArticle">
</form>';

$resul = mysqli_query($cnx,"SELECT * FROM articles");
            $result = mysqli_fetch_assoc($resul);
            $fnbr = $result["id"];
            $fnbr;

            $rez = mysqli_query($cnx, "SELECT MAX(id) FROM articles");
            $rezu = mysqli_fetch_assoc($rez);
            $max = $rezu["MAX(id)"];
            $max++;

            for ($i=$fnbr; $i < $max; $i++) {
            
            $resu = mysqli_query($cnx,"SELECT * FROM articles WHERE id=".$i."");
            $don = mysqli_fetch_assoc($resu);

                echo '<div class="row">
                        <h4>'.$don["titre"].' #'.$don["id"].'</h4>
                        </div>
                        ';
            }

} elseif ($_GET["choix"] == "supprimerCommentaire") {




if (!isset($_SESSION["article"])) {
  $_SESSION["dispSuppr"] = '<form action="delete.php" method="POST">
  <label>Numéro de l\'article</label><br>
  <input class="form-control" type="text" name="numArt"><br>
  <input class="btn" type="submit" name="supNumArt">
  </form>';
}else{
  $_SESSION["dispSuppr"] = '<form action="delete.php" method="POST">
  <label>Numéro du commentaire</label><br>
  <input class="form-control" type="text" name="numCom"><br>
  <input class="btn" type="submit" name="supNumCom">
  </form>';

  


}


echo $_SESSION["dispSuppr"];


if (isset($_SESSION["article"])) {

  $resul = mysqli_query($cnx,"SELECT * FROM commentaires");
            $result = mysqli_fetch_assoc($resul);
            $fnbr = $result["id"];
            $fnbr;

            $rez = mysqli_query($cnx, "SELECT MAX(id) FROM commentaires");
            $rezu = mysqli_fetch_assoc($rez);
            $max = $rezu["MAX(id)"];
            $max++;


      for ($i= $fnbr; $i < $max; $i++) { 
      
      $req = mysqli_query($cnx, "SELECT * FROM commentaires WHERE id = '$i'");
      $data = mysqli_fetch_assoc($req);

      if ($data["article"] == $_SESSION["article"]) {
        echo '
        <div>
        <p>'.$data["username"].' : '.$data["comment"].' #'.$data["id"].'</p>
        </div>';
      }
        
      

      }
}












} elseif ($_GET["choix"] == "gerer") {


echo '<form method="post" action="delete.php">
  <label>Pseudo de l\'utilisateur</label><br>
  <input class="form-control" type="text" name="pseudoDelete"><br>
  <input class="btn " type="submit" name="supprUser">
</form>';

            $resul = mysqli_query($cnx,"SELECT * FROM users");
            $result = mysqli_fetch_assoc($resul);
            $fnbr = $result["id"];
            $fnbr;

            $rez = mysqli_query($cnx, "SELECT MAX(id) FROM users");
            $rezu = mysqli_fetch_assoc($rez);
            $max = $rezu["MAX(id)"];
            $max++;

            echo '<div style="margin-top: 30px;">';

            for ($i=$fnbr; $i < $max; $i++) {
            
            $resu = mysqli_query($cnx,"SELECT * FROM users WHERE id=".$i."");
            $data = mysqli_fetch_assoc($resu);

                echo '<p>'.$data["username"].'</p>';
            }

            echo "</div>";

            



}



?>







</div>

    </div>
    <div class="col-sm-2 sidenav fill">
      <div class="well">
        <p>ADS</p>
      </div>
      <div class="well">
        <p>ADS</p>
      </div>
    </div>
  </div>
</div>

<footer class="container-fluid text-center">
  <p>Footer Text</p>
</footer>

</body>
</html>