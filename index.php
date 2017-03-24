<?php
include_once("pages/connexion.php");
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Accueil</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/style.css">
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
    <a class="navbar-brand" href="index.php"><img style="width:30px;height:22px;border-radius:0" id="logo" src="img/logo.png"></a>
  </div>
  <div class="collapse navbar-collapse" id="myNavbar">
    <ul class="nav navbar-nav">
      <li class="active" styyle="margin-top:0"><a href="index.php">Home</a></li>
      <li><a href="christopher/actus.php">Actualités</a></li>
      <li><a href="book.php">Book</a></li>
      <li><a href="christopher/FAQ.php">FAQ</a></li>
      <li><a href="chris/contact.php">Contact</a></li>
      <li><a href="chris/forum.php">Forum</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li>
        <?php

        $req = mysqli_query($cnx, "SELECT * FROM users WHERE id=1");
        $data = mysqli_fetch_assoc($req);

        if ($_SESSION["user"] == $data["username"]) {
            echo "<a href=\"pages/admin.php\"><span class=\"glyphicon glyphicon-log-in\"></span> Admin</a>";
        } ?>
      </li>
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
<div class="container-fluid text-center fill">
  <div class="row content">
    <div class="col-sm-2 sidenav fill">
    </div>
    <div class="col-sm-8 text-left">
      <h1 class="text-center">Bienvenue !</h1>
      <div class="text-center">
      	<img class="img-responsive" id="logoIndex" src="img/simplonBSM.png">
      </div>
      <hr>
      <p style="text-align:justify; font-size:15px">Simplon.co est une start-up basée à Montreuil (Seine Saint-Denis) dans le domaine de l'apprentissage de la programmation et du numérique. Fondée notemment par Erwan Kezzar et Frédéric Bardeau en 2013, la start-up permet à des personnes avec des profils peu courants dans la profession (sans diplômes, des personnes avec une déficience physique, des jeunes issus de quartiers défavorisés) de se former à la production de code informatique, plusieurs formations y sont dispensées dont celle du développement Web.

Elle a obtenu un des prix de l'innovation de la Ville de Paris en 2014.<br> Plusieurs formations Simplon.co ont reçu le label Grande École du Numérique.<br>

Fort de son succès, Simplon.co s'est implantée un peu partout dans le monde mais surtout en France dont la ville de Boulogne-Sur-Mer.
      </p>
      <hr>

      <?php
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
                        <h3 style="margin-left:2%">'.$don["titre"].'</h3>
                        <div class="col col-s-12 col-md-4 col-xs-4">
                          <img class="articlesImg img-responsive" src="img/articles/'.$don["photo"].'">
                        </div>
                        <div class="col col-s-12 col-md-8 col-xs-8">
                        <p>'.substr($don["texte"], 0, 300).'...</p>
                        </div>
                        <a style="float: right;" href="pages/article.php?id='.$don["id"].'">Lire la suite...</a>
                        </div>
                        <hr>
                      ';
            }
      ?>

    </div>
    <div class="col-sm-2 sidenav fill">
      </div>
    </div>
  </div>
</div>

<footer class="container-fluid text-center">
  <?php include_once("pages/footer.php");?>
  <p style="margin-top:22px">Coryright 2017 <br> Tous droits réservés</p>
</footer>
<a href="#" id="toTop" class="fa fa-chevron-up fa-2x"></a>
    <script src="https://use.fontawesome.com/8d66db2fbe.js"></script>
    <script src="js/hackton.js" charset="utf-8"></script>
  </body>
</html>
