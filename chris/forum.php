
<?php
include_once('connection.php');

$res1 = mysqli_query($cnx, "SELECT * FROM users ORDER BY id  LIMIT 24");



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
  </head>
  <?php include_once("pages/navbarIndex.php");?>
  <body>
    <div class="banderol">
</div>

<h1 id="forum"></h1>

<div id ="container"class="container-fluid">
  <div class="row">


   <?php  while($data1 = mysqli_fetch_assoc($res1))
   {
     ?>
<div id="contact"class="col-md-10 sm-10 xs-10">
     <div id="users"class="col-md-4 sm-4 xs-4">


                   <h3 style="text-align:center;">nom : <span><?= $data1['nom'];?></span></h3>


                    <p style="text-align:center;">prenom : <?= $data1['prenom'];?></p>

                  </div>

                  <div id="message"class="col-md-6 sm-6 xs-6">
                  </br><p style="text-align:center;"> message :</br> <?= $data1['message'];?></p>


               <?php
               /*if(@$data['id'])
               {*/
               ?>
                 <form id="delete"action="delete.php" method ='post'>
                   <input type="checkbox" name="checkbox"value="sur"/>
                   <input name="suppr" type="hidden" value="<?= $data1['id'];?>">
                   <input type="submit" name="tsurgro"value='X'>
                 </form>
                 </div>
                 </div>
               <?php
               /*}*/
               ?>


      <?php
       }
       ?>



</div>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
<script src="chrisjs/bootstrap.min.js"></script>
    <script src="chrisjs/forum.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  </body>
</html>
