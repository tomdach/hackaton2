<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
  <title>Book</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/thomas.css">
  <link rel="stylesheet" type="text/css" href="css/navbar.css">
  <link rel="stylesheet" href="chris/chriscss/forum.css">
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
<!-- Début d'image -->

<div class="container">

    <a href="http://boulogne.simplon.co/"> <img style="height: 100px; width: 300px;  margin-left: 35%; "  src="img/simplonBSM.png"></a>
    </div>
<div class="focus pic" id="imagesD">
	<img id="groupeImg" src="img/simplon.jpg">


 <div id="Remy" style="position: absolute; margin-top: 190px; margin-left: 35px;">
    <div class="cube1">
     <div class="cube-titre1">
       <div class="divimg" style=" width: 200px; height: 200px; margin-left: 410px; margin-top: -165px;     border-radius: 20px;
       ">

       <h4>Rémy</h4>
       <h4>De Winne</h4>
       <br>
       <h5>Front</h5>
   </div>
</div>
</div>



</div>
<!-- ############################################################################ -->

<div class="cube" id="Benjamin" style="position: absolute; margin-top: 225px; margin-left: 15px; ">

    <div class="cube-titre">
        <div class="divimg" style="  width: 200px; height: 200px; margin-left: 410px; margin-top: -200px;    border-radius: 20px;
        ">
        <h4>Benjamin</h4>
        <h4>Caroux</h4>
        <br>
        <h5>Front</h5>
    </div>
</div>

</div>

<!-- ####################################################################################### -->

<div id="Simon" style="position: absolute; font-size: 20px;margin-top: 210px; margin-left: 130px;">
    <div class="cubez">
        <div class="cube-titrez">
           <div class="divimg" style="  width: 200px; height: 200px; margin-left:362px; margin-top: -185px;    border-radius: 20px;
           ">
           <h4>Simon</h4>
           <h4>Ellart</h4>
           <br>
           <h5>front</h5>
       </div>
   </div>
</div>
</div>

<!-- ####################################################################################### -->
<div id="Christian" style="position: absolute; font-size: 20px;margin-top: 220px; margin-left: 225px;">
 <div class="cubee">
  <div class="cube-titree">
     <div class="divimg" style="  width: 200px; height: 200px; margin-left:315px;    border-radius: 20px; margin-top: -195px;">
         <h4>Christian</h4>
         <h4>Vidal</h4>
         <br>
         <h5>front</h5>

     </div>
 </div>
</div>
</div>


<!-- ####################################################################################### -->
<div id="Alexis" style="position: absolute; font-size: 20px;margin-top: 200px; margin-left: 180px;">

   <div class="cuber">
      <div class="cube-titrer">
         <div class="divimg" style="  width: 200px; height: 200px; margin-left:337px; margin-top: -175px;border-radius: 20px;">
             <h4>Alexis</h4>
             <h4>Merlier</h4>
             <br>
             <h5>front</h5>

         </div>
     </div>
 </div>
</div>

<!-- ####################################################################################### -->

<div id="Quentin" style="position: absolute; font-size: 20px;margin-top: 195px; margin-left: 305px;">

  <div class="cubet">
      <div class="cube-titret">
         <div class="divimg" style="  width: 200px; height: 200px; margin-left:275px; border-radius:20px; margin-top: -170px;">
             <h4>Quentin</h4>
             <h4>Volant</h4>
             <br>
             <h5>Full-Stack</h5>

         </div>
     </div>
 </div>

</div>


<!-- ####################################################################################### -->

<div id="François" style="position: absolute; font-size: 20px;margin-top: 215px; margin-left: 340px;">

  <div class="cubey">
      <div class="cube-titrey">
         <div class="divimg" style="  width: 200px; height: 200px; margin-left:257px; margin-top: -190px;border-radius: 20px;">
             <h4>François</h4>
             <h4 style="font-size: 10px;">ANDRZEJEWSKI</h4>
             <br>
             <h5>Back</h5>

         </div>
     </div>
 </div>
</div>

<!-- ####################################################################################### -->

<div id="Christopher" style="position: absolute; font-size: 20px;margin-top: 235px; margin-left: 400px;">
  <div class="cubeu">
      <div class="cube-titreu">
         <div class="divimg" style="  width: 200px; height: 200px; margin-left:227px;border-radius: 20px; margin-top: -210px;">
             <h4>Christopher</h4>
             <h4>Dachicourt</h4>
             <br>
             <h5>Front</h5>

         </div>
     </div>
 </div>
</div>

<!-- ####################################################################################### -->

<div id="Victor" style="position: absolute; font-size: 20px;margin-top: 220px; margin-left: 535px;">
    <div class="cubei">
      <div class="cube-titrei">
         <div class="divimg" style="  width: 200px; height: 200px; margin-left:160px; margin-top: -195px;     border-radius: 20px;
         ">
         <h4>Victor</h4>
         <h4>Marié</h4>
         <br>
         <h5>Full-Stack</h5>

     </div>
 </div>
</div>	 </div>

<!-- ####################################################################################### -->

<div id="Jonathan" style="position: absolute; font-size: 20px;margin-top: 210px; margin-left: 600px;">
	<div class="cubeo">
      <div class="cube-titreo">
         <div class="divimg" style=";  width: 200px; height: 200px; margin-left:127px; margin-top: -185px;    border-radius: 20px;
         ">
         <h4>Jonathan</h4>
         <h4>Lamirault</h4>
         <br>
         <h5>Full-Stack</h5>

     </div>
 </div>
</div>
</div>


<!-- ####################################################################################### -->

<div id="Jérémy" style="position: absolute; font-size: 20px;margin-top: 195px; margin-left: -150px;">
    <div class="cubep">
      <div class="cube-titrep">
         <div class="divimg" style="  width: 200px; height: 200px; margin-left:502px; margin-top: -170px;    border-radius: 20px;
         ">
         <h4>Jérémy</h4>
         <h4 style="font-size: 16px;">Le Prunenec</h4>
         <br>
         <h5>Front</h5>

     </div>
 </div>
</div>
</div>
<!-- ####################################################################################### -->

<div id="Giovani" style="position: absolute; font-size: 20px;margin-top: 209px; margin-left: -52px;">
	<div class="cubeq">
      <div class="cube-titreq">
         <div class="divimg" style="  width: 200px; height: 200px; margin-left:453px; margin-top: -184px;    border-radius: 20px;
         ">
         <h4>Giovanie</h4>
         <h4>Boutillier</h4>
         <br>
         <h5>Front</h5>

     </div>
 </div>
</div>
</div>
<!-- ####################################################################################### -->

<div id="Aurélie" style="position: absolute; font-size: 20px;margin-top: 230px; margin-left: -125px;">
    <div class="cubed">
      <div class="cube-titred">
         <div class="divimg" style=" width:200px; height:200px; margin-left:490px; margin-top: -205px;    border-radius: 20px;
         ">
         <h4>Aurélie</h4>
         <h4>Slodczyk</h4>
         <br>
         <h5>Full-Stack</h5>

     </div>
 </div>
</div>
</div>
<!-- ####################################################################################### -->

<div id="Aledrorian" style="position: absolute; font-size: 20px;margin-top: 210px; margin-left: -210px;">
 <div class="cubes">
  <div class="cube-titres">
     <div class="divimg" style="  width: 200px; height: 200px; margin-left:532px; margin-top: -185px;    border-radius: 20px;
     ">
     <h4>Alédorian</h4>
     <h4>Legrand</h4>
     <br>
     <h5>Back</h5>

 </div>
</div>
</div>
</div>
<!-- ####################################################################################### -->

<div id="Thomas" style="position: absolute; font-size: 20px;margin-top: 213px; margin-left: -270px;">
    <div class="cubef">
      <div class="cube-titref">
         <div class="divimg" style="  width: 200px; height: 200px; margin-left:562px; margin-top: -188px;    border-radius: 20px;
         ">
         <h4>Thomas</h4>
         <h4>Dachicourt</h4>
         <br>
         <h5>Front</h5>

     </div>
 </div>
</div>
</div>
<!-- ####################################################################################### -->

<div id="Germain" style="position: absolute; font-size: 20px;margin-top: 185px; margin-left: -290px;">
 <div class="cubeg">
  <div class="cube-titreg">
     <div class="divimg" style="  width: 200px; height: 200px; margin-left:572px; margin-top: -160px;    border-radius: 20px;
     ">
     <h4>Germain</h4>
     <h4>Déliance</h4>
     <br>
     <h5>Front</h5>

 </div>
</div>
</div>
</div>
<!-- ####################################################################################### -->

<div id="remi" style="position: absolute; font-size: 20px;margin-top: 210px; margin-left: -325px;">
    <div class="cubeh">
      <div class="cube-titreh">
         <div class="divimg" style="  width: 200px; height: 200px; margin-left:590px; margin-top: -185px;    border-radius: 20px;
         ">
         <h4>Rémi</h4>
         <h4>De Graw</h4>
         <br>
         <h5>Front</h5>

     </div>
 </div>
</div>
</div>
<!-- ####################################################################################### -->

<div id="ThomasP" style="position: absolute; font-size: 20px;margin-top: 205px; margin-left: -415px;">
   <div class="cubej">
      <div class="cube-titrej">
         <div class="divimg" style="  width: 200px; height: 200px; margin-left:635px; margin-top: -180px;    border-radius: 20px;
         ">
         <h4>Thomas</h4>
         <h4>Provain</h4>
         <br>
         <h5>Front</h5>

     </div>
 </div>
</div>

</div>
<!-- ####################################################################################### -->

<div id="Grégory" style="position: absolute; font-size: 20px;margin-top: 210px; margin-left: -465px;">
  <div class="cubek">
      <div class="cube-titrek">
         <div class="divimg" style="  width: 200px; height: 200px; margin-left:660px; margin-top: -185px;    border-radius: 20px;
         ">
         <h4>Grégory</h4>
         <h4>Mathieux</h4>
         <br>
         <h5>Front</h5>

     </div>
 </div>
</div>

</div>
<!-- ####################################################################################### -->

<div id="Ludovic" style="position: absolute; font-size: 20px;margin-top: 195px; margin-left: -500px;">
 <div class="cubel">
  <div class="cube-titrel">
     <div class="divimg" style="  width: 200px; height: 200px; margin-left:677px; margin-top: -170px;    border-radius: 20px;
     ">
     <h4>Ludovic</h4>
     <h4>Soret</h4>
     <br>
     <h5>Back</h5>

 </div>
</div>
</div>

</div>
<!-- ####################################################################################### -->

<div id="hélène" style="position: absolute; font-size: 20px;margin-top: 230px; margin-left: -585px;">

    <div class="cubem">
      <div class="cube-titrem">
         <div class="divimg" style="  width: 200px; height: 200px; margin-left:720px; margin-top: -205px;    border-radius: 20px;
         ">
         <h4>Hélène</h4>
         <h4>Papin</h4>
         <br>
         <h5>Formatrice</h5>

     </div>
 </div>
</div>

</div>
<!-- ####################################################################################### -->

<div id="Antoine" style="position: absolute; font-size: 20px;margin-top: 220px; margin-left: -650px;">

    <div class="cubew">
      <div class="cube-titrew">
         <div class="divimg" style="  width: 200px; height: 200px; margin-left:752px; margin-top: -195px;    border-radius: 20px;
         ">
         <h4>Antoine</h4>
         <h4>Sotty</h4>
         <br>
         <h5>Full-Stack</h5>

     </div>
 </div>
</div>
</div>
</div>
<!-- Fin d'image -->
<!-- <div class="cube">
    <div class="cube-titre">
        Projet numéro : 1
    </div>
</div> -->

<!-- debut persoone -->

<div id="contain" class="container">

	<div id="div2" class="col-md-3">
		<button style="background-color:#00A1D2;" id="promo2" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModalp">
         PROMO 2
     </button>
 </div>
</div>



<!-- ############################################################################################# -->

<div class="modal fade" id="myModalp" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4  class="modal-title" >PROMO 2</h4>
    </div>
    <div  class="modal-body">
        <button style="margin-right: 4%;background-color:#00A1D2;" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal1">
         <h6>ANDRZEJEWSKI François</h6>
     </button>
     <!-- ############################################################################################# -->


     <button style="margin-right: 4%;background-color:#00A1D2;" type="button" class="btn btn-primary btn-lg"  data-toggle="modal" data-target="#myModal2">
         <h6>BOILLOT Frédéric </h6>
     </button>
     <!-- ############################################################################################# -->


     <button  type="button" style="background-color:#00A1D2;" class="btn btn-primary btn-lg"  data-toggle="modal" data-target="#myModal23">
         <h6>BOUTILLIER Giovani </h6>
     </button>
     <!-- ############################################################################################# -->

     <button style="margin-right: 4%;background-color:#00A1D2;" type="button" class="btn btn-primary btn-lg"  data-toggle="modal" data-target="#myModal3">
         <h6>CAROUX Benjamin </h6>
     </button>
     <!-- ############################################################################################# -->

     <button style="margin-right: 4%;background-color:#00A1D2;" type="button" class="btn btn-primary btn-lg"  data-toggle="modal" data-target="#myModal4">
         <h6>DACHICOURT Christopher </h6>
     </button>
     <!-- ############################################################################################# -->

     <button type="button" class="btn btn-primary btn-lg" style="background-color:#00A1D2;"  data-toggle="modal" data-target="#myModal5">
         <h6>DACHICOURT Thomas </h6>
     </button>
     <!-- ############################################################################################# -->

     <button style="margin-right: 4%;background-color:#00A1D2;"  type="button" class="btn btn-primary btn-lg"  data-toggle="modal" data-target="#myModal6">
         <h6>DE GRAW Rémi </h6>
     </button>
     <!-- ############################################################################################# -->

     <button style="margin-right: 4%;background-color:#00A1D2;" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal7">
      <h6> DELIANCE Germain </h6>
  </button>
  <!-- ############################################################################################# -->

  <button  type="button" class="btn btn-primary btn-lg" style="background-color:#00A1D2;" data-toggle="modal" data-target="#myModal8">
      <h6> DE WINNE Rémy </h6>
  </button>

  <!-- ############################################################################################# -->


  <button style="margin-right: 4%;background-color:#00A1D2;" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal9">
     <h6>ELLART Simon </h6>
 </button>
 <!-- ############################################################################################# -->


 <button style="margin-right:4%;background-color:#00A1D2;" type="button" class="btn btn-primary btn-lg"  data-toggle="modal" data-target="#myModal10">
  <h6> LAMIRAULT Jonathan </h6>
</button>
<!-- ############################################################################################# -->

<button type="button" class="btn btn-primary btn-lg" style="background-color:#00A1D2;"  data-toggle="modal" data-target="#myModal11">
  <h6> LEGRAND Alédorian </h6>
</button>
<!-- ############################################################################################# -->

<button style="margin-right: 4%;background-color:#00A1D2;" type="button" class="btn btn-primary btn-lg"  data-toggle="modal" data-target="#myModal12">
  <h6> MARIE Victor </h6>
</button>
<!-- ############################################################################################# -->

<button style="margin-right: 4%;background-color:#00A1D2;" type="button" class="btn btn-primary btn-lg"  data-toggle="modal" data-target="#myModal13">
  <h6> MATHIEUX Grégory </h6>
</button>
<!-- ############################################################################################# -->

<button type="button" class="btn btn-primary btn-lg" style="background-color:#00A1D2;"  data-toggle="modal" data-target="#myModal14">
  <h6> MERLIER Alexis </h6>
</button>
<!-- ############################################################################################# -->

<button style="margin-right: 4%;background-color:#00A1D2;" type="button" class="btn btn-primary btn-lg"  data-toggle="modal" data-target="#myModal15">
  <h6> LE PRUNENEC Jérémy </h6>
</button>
<!-- ############################################################################################# -->

<button style="margin-right: 4%;background-color:#00A1D2;" type="button" class="btn btn-primary btn-lg"  data-toggle="modal" data-target="#myModal16">
  <h6> PROVAIN Thomas </h6>
</button>
<!-- ############################################################################################# -->

<button type="button" class="btn btn-primary btn-lg" style="background-color:#00A1D2;" data-toggle="modal" data-target="#myModal17">
 <h6>SLODCZYK Aurélie </h6>
</button>
<!-- ############################################################################################# -->


<button style="margin-right: 4%;background-color:#00A1D2;" type="button" class="btn btn-primary btn-lg"  data-toggle="modal" data-target="#myModal18">
  <h6> SORET Ludovic </h6>
</button>
<!-- ############################################################################################# -->

<button style="margin-right: 4%;background-color:#00A1D2;" type="button" class="btn btn-primary btn-lg"  data-toggle="modal" data-target="#myModal19">
  <h6> SOTTY Antoine </h6>
</button>
<!-- ############################################################################################# -->

<button type="button" class="btn btn-primary btn-lg" style="background-color:#00A1D2;"  data-toggle="modal" data-target="#myModal20">
  <h6> VIDAL Christian </h6>
</button>
<!-- ############################################################################################# -->

<button style="margin-right: 4%;background-color:#00A1D2;" type="button" class="btn btn-primary btn-lg"  data-toggle="modal" data-target="#myModal21">
  <h6> VOLANT Quentin </h6>
</button>
<!-- ############################################################################################# -->

<button type="button" class="btn btn-primary btn-lg" style="background-color:#00A1D2;"  data-toggle="modal" data-target="#myModal22">
  <h6> PAPIN hélène </h6>
</button>
<!-- ############################################################################################# -->



</div>

<div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
</div>
</div>
</div>
</div>

<!-- ############################################################################################# -->

<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" >ANDRZEJEWSKI François</h4>
    </div>
    <div class="modal-body">
     <p>26 Ans Back</p>
 </div>
 <div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
</div>
</div>
</div>
</div>

<!-- ############################################################################################# -->

<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">BOILLOT Frédéric</h4>
    </div>
    <div class="modal-body">
     <p>31 Ans Full-Stack</p>
 </div>
 <div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
</div>
</div>
</div>
</div>



<!-- ############################################################################################# -->

<div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" >Caroux Bajamain</h4>
    </div>
    <div class="modal-body">
     <p>23 Ans Front</p>
 </div>
 <div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
</div>
</div>
</div>
</div>

<!-- ############################################################################################# -->

<div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">DACHICOURT Christopher</h4>
    </div>
    <div class="modal-body">
     <p>20 Ans Front</p>
 </div>
 <div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
</div>
</div>
</div>
</div>


<!-- ############################################################################################# -->

<div class="modal fade" id="myModal5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">DACHICOURT Thomas</h4>
    </div>
    <div class="modal-body">
     <p>18 Ans Front</p>
 </div>
 <div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
</div>
</div>
</div>
</div>

<!-- ############################################################################################# -->

<div class="modal fade" id="myModal6" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">DE GRAW Rémi</h4>
    </div>
    <div class="modal-body">
     <p>27 Ans Back</p>
 </div>
 <div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
</div>
</div>
</div>
</div>


<!-- ############################################################################################# -->

<div class="modal fade" id="myModal7" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">DELIANCE Germain</h4>
    </div>
    <div class="modal-body">
     <p>27 Ans Front</p>
 </div>
 <div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
</div>
</div>
</div>
</div>

<!-- ############################################################################################# -->

<div class="modal fade" id="myModal8" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">DE WINNE Rémy</h4>
    </div>
    <div class="modal-body">
     <p>30 Ans Front</p>
 </div>
 <div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
</div>
</div>
</div>
</div>


<!-- ############################################################################################# -->

<div class="modal fade" id="myModal9" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Ellart Simon</h4>
    </div>
    <div class="modal-body">
     <p>22 Ans Front</p>
 </div>
 <div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
</div>
</div>
</div>
</div>

<!-- ############################################################################################# -->

<div class="modal fade" id="myModal10" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" >LAMIRAULT Jonathan</h4>
    </div>
    <div class="modal-body">
     <p>24 Ans Full-Stack</p>
 </div>
 <div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
</div>
</div>
</div>
</div>


<!-- ############################################################################################# -->

<div class="modal fade" id="myModal11" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" >LEGRAND Alédorian</h4>
    </div>
    <div class="modal-body">
     <p>19 ANS Back</p>
 </div>
 <div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
</div>
</div>
</div>
</div>

<!-- ############################################################################################# -->

<div class="modal fade" id="myModal12" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">MARIE Victor</h4>
    </div>
    <div class="modal-body">
     <p>21 Ans Back</p>
 </div>
 <div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
</div>
</div>
</div>
</div>

<!-- ############################################################################################# -->

<div class="modal fade" id="myModal13" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" >MATHIEUX Grégory</h4>
    </div>
    <div class="modal-body">
     <p>22 Ans Front</p>
 </div>
 <div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
</div>
</div>
</div>
</div>
<!-- ############################################################################################# -->

<div class="modal fade" id="myModal14" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" >Merlier Alexis</h4>
    </div>
    <div class="modal-body">
     <p>23 ans Front</p>
 </div>
 <div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
</div>
</div>
</div>
</div>
<!-- ############################################################################################# -->

<div class="modal fade" id="myModal15" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" >Jérémy Le Prunenec</h4>
    </div>
    <div class="modal-body">
     <p>24ans Front</p>
 </div>
 <div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
</div>
</div>
</div>
</div>

<!-- ############################################################################################# -->

<div class="modal fade" id="myModal16" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">PROVAIN Thomas</h4>
    </div>
    <div class="modal-body">
     <p> 27 Ans front</p>
 </div>
 <div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
</div>
</div>
</div>
</div>

<!-- ############################################################################################# -->

<div class="modal fade" id="myModal17" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">SLODCZYK Aurélie</h4>
    </div>
    <div class="modal-body">
     <p>24 Ans Full-Stack</p>
 </div>
 <div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
</div>
</div>
</div>
</div>

<!-- ############################################################################################# -->

<div class="modal fade" id="myModal18" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" >SORET Ludovic</h4>
    </div>
    <div class="modal-body">
     <p>37 Ans Back</p>
 </div>
 <div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
</div>
</div>
</div>
</div>

<!-- ############################################################################################# -->

<div class="modal fade" id="myModal19" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">SOTTY Antoine</h4>
    </div>
    <div class="modal-body">
     <p>24 Ans Full-Stack</p>
 </div>
 <div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
</div>
</div>
</div>
</div>

<!-- ############################################################################################# -->
<div class="modal fade" id="myModal20" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" >VIADAL Christian</h4>
    </div>
    <div class="modal-body">
     <p>41Ans Front</p>
 </div>
 <div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
</div>
</div>
</div>
</div>
<!-- ############################################################################################# -->


<div class="modal fade" id="myModal21" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">VOLANT Quentin</h4>
    </div>
    <div class="modal-body">
     <p>26 Ans Full-Stack</p>
 </div>
 <div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
</div>
</div>
</div>
</div>


<!-- ############################################################################################# -->

<div class="modal fade" id="myModal22" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" >PAPIN hélène</h4>
    </div>
    <div class="modal-body">
     <p>22 Ans Formatrice</p>
 </div>
 <div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
</div>
</div>
</div>
</div>


<!-- ############################################################################################# -->

<div class="modal fade" id="myModal23" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Boutiller Giovani</h4>
    </div>
    <div class="modal-body">
     <p>24 Ans FRONT</p>
 </div>
 <div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
</div>
</div>
</div>
</div>

<!-- ############################################################################################# -->
<a href="#" id="toTop" class="fa fa-chevron-up fa-2x"></a>
<footer class="text-center"><img style="height:80px; margin:auto; margin-top: 15px;" src="chris/img/simplon.png"></footer>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://use.fontawesome.com/8d66db2fbe.js"></script>
<script type="text/javascript" src="js/jquery.dotter.min.js"></script>
<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="js/thomas.js"></script>
<script type="text/javascript" src="js/hackton.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>
