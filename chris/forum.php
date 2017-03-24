
<?php
include_once('connection.php');
include_once("../pages/connexion.php");
session_start();

$res1 = mysqli_query($cnx1, "SELECT * FROM users ORDER BY id  LIMIT 24");

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Forum</title>
    <link rel="stylesheet" href="chriscss/forum.css" media="screen" title="no title">
    <link rel="stylesheet" href="chriscss/bootstrap.min.css" media="screen" title="no title">
    <link rel="stylesheet" href="chriscss/navbar.css" media="screen" title="no title">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
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
      <a class="navbar-brand" href="../index.php"><img style="width:30px;height:22px;border-radius:0" id="logo" src="img/logo.png"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active" styyle="margin-top:0"><a href="../index.php">Home</a></li>
        <li><a href="../christopher/actus.php">Actualités</a></li>
        <li><a href="../book.php">Book</a></li>
        <li><a href="../christopher/FAQ.php">FAQ</a></li>
        <li><a href="contact.php">Contact</a></li>
        <li><a href="forum.php">Forum</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li>
          <?php

          $req = mysqli_query($cnx, "SELECT * FROM users WHERE id=1");
          $data = mysqli_fetch_assoc($req);

          if ($_SESSION["user"] == $data["username"]) {
              echo "<a href=\"../pages/admin.php\"><span class=\"glyphicon glyphicon-log-in\"></span> Admin</a>";
          } ?>
        </li>
        <li><?php
              if (isset($_SESSION["user"])) {
                echo "<a href=\"../pages/profile.php\"><span class=\"glyphicon glyphicon-log-in\"></span> Profile</a>";
              }
              else{
                echo "<a href=\"../pages/inscription.php\"><span class=\"glyphicon glyphicon-log-in\"></span> Sign In</a>";
              }
            ?>
        </li>
        <li>
          <?php
            if (isset($_SESSION["user"])) {
              echo "<a href=\"../pages/logout.php\"><span class=\"glyphicon glyphicon-log-in\"></span> Logout</a>";
            }
            else{
              echo "<a href=\"../pages/pageConnexion.php\"><span class=\"glyphicon glyphicon-log-in\"></span> Login</a>";
            }
          ?>
        </li>
      </ul>
    </div>
  </div>
  </nav>
    <div class="banderol">
</div>

<div class="container-fluid">


  <div class="row">
    <div class="img">
       <div class="col-md-6 ">
         <img id="superimage"src="img/eco.jpg"height="200px"width="100%">
       </div>
       <div class="col-md-6">
         <img id="superimage2" src="img/eco2.jpg"height="200px"width="100%"/>
       </div>

  </div>

</div>
</div>

<h1 id="forum"></h1>

<div id ="container"class="container-fluid">
  <div class="row">

  <div id="text" class="col-md-4 sm-4 xs-4">


  <p id="tee"></p>

  </div>

<div  id="box" class="col-md-8 sm-8 xs-8">
   <?php  while($data1 = mysqli_fetch_assoc($res1))
   {
     ?>
<div id="contact"class="col-md-8 sm-8 xs-8">
     <div id="users"class="col-md-2 sm-2 xs-2">


                   <h3 style="text-align:center;"><span><?= $data1['nom'];?></span></h3>


                    <p style="text-align:center;"><?= $data1['prenom'];?></p>

                  </div>

                  <div id="message"class="col-md-6 sm-6 xs-6">
                  </br><p style="text-align:center;"> message :</br> <?= $data1['message'];?></p>


               <?php
               if (isset($_SESSION["user"])) {
                 $checkbox = '<input type="checkbox" name="checkbox"value="sur"/>';?>
                 <form id="delete"action="delete.php" method ='post'>
                   <?php echo $checkbox; ?>
                   <input name="suppr" type="hidden" value="<?= $data1['id'];?>">
                   <input type="submit" name="tsurgro"value='X'>
                 </form>
                 <?php
               }
               ?>

                 </div>
            </div>
               <?php
               /*}*/
               ?>


      <?php
       }
       ?>


</div>
</div>
</div>
<footer><img src="img/simplon.png"width="30%" height="100px"></footer>

    <a href="#" id="toTop" class="fa fa-chevron-up fa-2x"></a>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/8d66db2fbe.js"></script>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
    <script src="chrisjs/bootstrap.min.js"></script>
    <script src="chrisjs/forum.js"></script>
    <script src="chrisjs/hackton.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  </body>
</html>
