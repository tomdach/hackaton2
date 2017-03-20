
<?php
include_once('connection.php');

$res1 = mysqli_query($cnx, "SELECT * FROM users ORDER BY id  LIMIT 24");
?>


<!DOCTYPE html>
<html>
  <head>

    <meta charset="utf-8">
    <title>forum</title>
    <link rel="stylesheet" href="chriscss/forum.css" media="screen" title="no title">
<link rel="stylesheet" href="chriscss/bootstrap.min.css" media="screen" title="no title">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  </head>
  <body>
    <div class="banderol">
</div>





<h1 id="forum"></h1>

<div id="tableau" class="col-md-12">

    <div class="container-fluid">
      <div class="row">
   <?php  while($data1 = mysqli_fetch_assoc($res1))
   {
     ?>
     <div id="users"class="col-md-4">
       <?php
       /*if(@$data['id'])
       {*/
       ?>
       <?php
       /*}*/
       ?>
               <table>
               <thead>
                   <tr>
                   <h3 style="text-align:center;">nom :<span><?= $data1['nom'];?></span></h3>

                   </tr>
               </thead>
               <tr>
                    <p style="text-align:center;">prenom :<?= $data1['prenom'];?></p>
                   <p style="text-align:center;"> <span>age :<?= $data1['age'];?></span></p>
                    <p style="text-align:center;"> <span>develloppeur :<?= $data1['web'];?></span></p>
               </tr>
           </table>

</div>
      <?php
       }
       ?>
        </div>
</div>

</div>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
<script src="chrisjs/bootstrap.min.js"></script>
    <script src="chrisjs/forum.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  </body>
</html>
