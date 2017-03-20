<?php
$cnx = mysqli_connect("localhost","root","vidal62","simplon") or
die("error=".mysqli_connect_erno());
session_start();
$nom = isset($_POST['nom'])?mysqli_real_escape_string($cnx,$_POST['nom']) :"" ;
$age = isset($_POST['age'])?mysqli_real_escape_string($cnx,$_POST['age']) :"" ;
$prenom= isset($_POST['prenom'])?mysqli_real_escape_string($cnx,$_POST['prenom']) :"";
$web= isset($_POST['web'])?mysqli_real_escape_string($cnx,$_POST['web']) :"";
$res1 = mysqli_query($cnx, "SELECT * FROM users ");
$res = mysqli_query($cnx,"INSERT INTO users(nom,prenom,age,web) VALUES('$nom', '$prenom', '$age','$web')");
?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>map</title>
    <link rel="stylesheet" href="chriscss/chris.css" media="screen" title="no title">
    <link rel="stylesheet" href="chriscss/bootstrap.min.css" media="screen" title="no title">
  </head>
  <body  onload="doWave(0);">

  <div class="container-fluid">
    <h1> <img src="img/slice_490x155.png"width="20%"height="100px"style="margin-left:40%;"/></h1>
    <div class="map">


</div>
    <div class="col-md-12 sm-12 xs-12">

<div id="deco"style="text-align: center"></div>

      <div class="row">
        <div class="col-md-6 xs-6 ">
          <form id="contact"  enctype="multipart/form-data" action="chris.php" method="post">

            <div class="form-group">
              <label for="nom">nom</label>
              <input type="ext" class="form-control" id="nom" name="nom"placeholder="Nom">
            </div>
            <div class="form-group">
              <label for="prenom">prenom</label>
              <input type="text" class="form-control" id="prenom" name="prenom" placeholder="Prenom">
            </div>
            <div class="form-group">
              <label for="age">age</label>
              <input type="Number"class="form-control" id="age" name="age" placeholder="age">
              <p class="help-block">Example block-level help text here.</p>
            </div>
            <div class="form-group">
              <label for="web">web</label>
              <input type="text"class="form-control" id="web" name="web" placeholder="developpeur">
              <p class="help-block">Example block-level help text here.</p>
            </div>
            <div class="checkbox">
              <label>
                <input type="checkbox"> Check me out
              </label>
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
          </form>
          </div>
        <div class="col-md-6 ms-6 xs-6 ">
<iframe id="carte" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1307.0361040021355!2d1.6068547491594825!3d50.725500934009766!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47dc2c44275e85ab%3A0xdf0e375f6f269142!2s10+Rue+des+Carreaux%2C+62200+Boulogne-sur-Mer!5e1!3m2!1sfr!2sfr!4v1489755087180" width="600" height="340" frameborder="0" style="border:0" allowfullscreen></iframe>
  </div>
        </div>

      </div>
      </div>



  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
    <script src="chrisjs/chris.js" charset="utf-8"></script>
    <script src="chrisjs/bootstrap.min.js" charset="utf-8"></script>


  </body>
</html>
