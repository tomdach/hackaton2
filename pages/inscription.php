<?php

include_once("connexion.php");
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Inscription</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="../css/style.css">
  <link rel="icon" href="http://boulogne.simplon.co/wp-content/uploads/2015/11/cropped-square-32x32.png">
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
        <li><a href="../christopher/actus.php">Actualités</a></li>
        <li><a href="../book.php">Book</a></li>
        <li><a href="../christopher/FAQ.php">FAQ</a></li>
        <li><a href="../chris/contact.php">Contact</a></li>
        <li><a href="../chris/forum.php">Forum</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
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

    </div>
    <div class="col-sm-8 text-left">
      <h1 class="text-center">S'inscrire</h1>
      <div class="text-center">
      </div>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
      <hr>


<div id="divtst" class="text-center form-group">
<br>
<form method="post" action="upload.php">

	<input required class="form-control" type="text" name="username" placeholder="Nom d'utilisateur"><br>
	<input required class="form-control" type="password" name="password1" placeholder="Mot de passe"><br>
	<input required class="form-control" type="password" name="password2" placeholder="Confirmer mot de passe"><br>
	<input required class="form-control" type="text" name="mail" placeholder="Mail"><br>
	<input required class="form-control" type="text" name="dateNaissance" placeholder="JJ/MM/AAAA"><br>
	<input class="btn" type="submit" name="inscription" value="S'inscrire">

</form>
<?php echo "<br>".$_SESSION["message"]; $_SESSION["message"] = ""; ?>
</div>

    </div>
    <div class="col-sm-2 sidenav fill">
      <div class="well">

      </div>
      <div class="well">

      </div>
    </div>
  </div>
</div>

<footer class="container-fluid text-center">
  <p>Footer Text</p>
</footer>

</body>
</html>
