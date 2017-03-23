<?php

include_once("connexion.php");
session_start();

$req = mysqli_query($cnx, "SELECT * FROM articles WHERE id= ".$_GET["id"]."");
$data = mysqli_fetch_assoc($req);

$_SESSION["article"] = $_GET["id"];

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

        $req1 = mysqli_query($cnx, "SELECT * FROM users WHERE id=1");
        $data1 = mysqli_fetch_assoc($req1);

        if ($_SESSION["user"] == $data1["username"]) {
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
      <p><a href="#">Link</a></p>
      <p><a href="#">Link</a></p>
      <p><a href="#">Link</a></p>
    </div>
    <div class="col-sm-8 text-left"> 
      <h1 class="text-center"><?php echo $data["titre"]; ?></h1>
      <hr>
      <div class="text-center">
      	<div>
          <img class="articlesImg img-responsive img-center" src="../img/articles/	<?php echo $data["photo"]  ?>">
       	</div>
       	<hr>
       	<p><?php echo $data["texte"]; ?></p>

      </div>
      <hr>
      <div>
     	<h2>Commentaires</h2>

     	<?php 

      $resul = mysqli_query($cnx,"SELECT * FROM commentaires");
            $result = mysqli_fetch_assoc($resul);
            $fnbr = $result["id"];
            $fnbr;

            $rez = mysqli_query($cnx, "SELECT MAX(id) FROM commentaires");
            $rezu = mysqli_fetch_assoc($rez);
            $max = $rezu["MAX(id)"];
            $max++;


      for ($i= $fnbr; $i < $max; $i++) { 
        # code...
      

      $req = mysqli_query($cnx, "SELECT * FROM commentaires WHERE id = '$i' AND article = '".$_SESSION["article"]."'");
      $data = mysqli_fetch_assoc($req);

      if ($data["article"] == $_SESSION["article"]) {
        echo '
        <div>
        <hr>
        <h4 style="text-decoration: underline;">'.$data["username"].'</h4>
          <p>'.$data["comment"].'</p>
          <p style="font-style: italic;">Posté le '.$data["datePost"].'</p>
        </div>';
      }

      }

     	?>






      </div class="form-group">
      <hr>
      <form method="POST" action="comment.php" >
      	<textarea style="width: 60vh; height: 10vh" class="form-control" name="texte"></textarea><br>
      	<input class="btn" type="submit" name="commenter">
      </form>




















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

      	<!--  <div>
      	<hr>
      	<h4>From Username</h4>
      		<p>First comment Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
      		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
      		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
      		<p>Date de post</p>
      	</div>

      	<div>
      	<hr>
      	<h4>From Username</h4>
      		<p>2nd comment Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
      		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
      		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
      		<p>Date de post</p>
      	</div>

      	<div>
      	<hr>
      	<h4>From Username</h4>
      		<p>3e comment Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
      		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
      		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
      		<p>Date de post</p>
      	</div>

      	<div>
      	<hr>
      	<h4>From Username</h4>
      		<p>4e comment Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
      		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
      		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
      		<p>Date de post</p>
      	</div> -->