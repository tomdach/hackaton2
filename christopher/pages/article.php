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

<?php include("navbar2.php"); ?>

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
     	// $req1 = mysqli_query($cnx, "SELECT * FROM commentaires WHERE article = ".$_GET["id"]."");
     	// $data1 = mysqli_fetch_assoc($req1);




     	?>






      </div>
      <hr>
      <form method="POST" action="comment.php" >
      	<textarea name="texte"></textarea><br>
      	<input type="submit" name="commenter">
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