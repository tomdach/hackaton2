<?php 
include_once("pages/connexion.php");
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

<?php include("pages/navbarIndex.php"); ?>
  
<div class="container-fluid text-center fill">    
  <div class="row content">
    <div class="col-sm-2 sidenav fill">
      <p><a href="#">Articles</a></p>
      <p><a href="#">Link</a></p>
      <p><a href="#">Link</a></p>
    </div>
    <div class="col-sm-8 text-left"> 
      <h1 class="text-center">Bienvenue !</h1>
      <div class="text-center">
      	<img class="img-responsive" id="logoIndex" src="img/simplonBSM.png">
      </div>
      <hr>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do 
        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
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
                        <h3>'.$don["titre"].'</h3>
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