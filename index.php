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
  <link rel="stylesheet" type="text/css" href="css/style.css">
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
      <a class="navbar-brand" href="index.php"><img id="logo" src="img/logo.png"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Projects</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><?php
              if (isset($_SESSION["user"])) {
                echo "<a href=\"pages/profile.php\"><span class=\"glyphicon glyphicon-log-in\"></span> Profile</a>";
              }
              else{
                echo "<a href=\"pages/inscription.php\"><span class=\"glyphicon glyphicon-log-in\"></span> Sign In</a>";
              }
            ?>
          
        </li>
        <li>
          <?php 
            if (isset($_SESSION["user"])) {
              echo "<a href=\"pages/logout.php\"><span class=\"glyphicon glyphicon-log-in\"></span> Logout</a>";
            }
            else{
              echo "<a href=\"pages/pageConnexion.php\"><span class=\"glyphicon glyphicon-log-in\"></span> Login</a>";
            }
          ?>
        </li>
      </ul>
    </div>
  </div>
</nav>


<!-- <a href="pages/pageConnexion.php"><span class="glyphicon glyphicon-log-in"></span> Login</a> -->

<!-- FIN NAVBAR -->
  
<div class="container-fluid text-center fill">    
  <div class="row content">
    <div class="col-sm-2 sidenav fill">
      <p><a href="#">Link</a></p>
      <p><a href="#">Link</a></p>
      <p><a href="#">Link</a></p>
    </div>
    <div class="col-sm-8 text-left"> 
      <h1 class="text-center">Bienvenue !</h1>
      <div class="text-center">
      	<img class="img-responsive" id="logoIndex" src="img/simplonBSM.png">
      </div>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do 
        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
      </p>
      <hr>
      <div>
      <h3>Article 1</h3>
      <div>
      	<img class="articlesImg img-responsive" src="img/template.png">
      </div>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo...</p>
      <a href="#">Lire la suite</a>
      </div>
      <hr>
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