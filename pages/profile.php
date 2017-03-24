<?php

include_once("connexion.php");
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Profil Utilisateur</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="../css/style.css">
  <link rel="icon" href="http://boulogne.simplon.co/wp-content/uploads/2015/11/cropped-square-32x32.png">
</head>
<body>

<?php include("navbar2.php"); ?>

<!-- FIN NAVBAR -->

<div class="container-fluid text-center fill">
  <div class="row content">
    <div class="col-sm-2 sidenav fill">

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
