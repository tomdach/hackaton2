<?php

include_once("connexion.php");
session_start();

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
      <p><a href="#">Link</a></p>
      <p><a href="#">Link</a></p>
      <p><a href="#">Link</a></p>
    </div>
    <div class="col-sm-8 text-left"> 
      <h1 class="text-center"><?php echo $_SESSION["user"]?></h1>
      <div class="text-center">
      </div>


<div class="text-center form-group">
<br>
<?php 

	$username = $_SESSION["user"];

	$req = mysqli_query($cnx, "SELECT * FROM users WHERE username = '$username'");
	$data = mysqli_fetch_assoc($req);

	echo $data["username"];
	echo "<br>";
	echo "Mail : ".$data["mail"];
	echo "<br>";
	echo "Date de naissance : ".$data["dateNaiss"];
	echo "<br>";
	echo "Date d'inscription : ".$data["dateInscription"];
	echo "<br>";
	echo "Dernière connexion : ".$data["lastCo"]; 

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