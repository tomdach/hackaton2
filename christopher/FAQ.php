<?php
session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/christopher.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="icon" href="http://boulogne.simplon.co/wp-content/uploads/2015/11/cropped-square-32x32.png">
    <title>Foire Aux Questions</title>
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
      <a class="navbar-brand" href="../index.php"><img id="logo" src="img/logo.png"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="../index.php">Home</a></li>
        <li><a href="../simon/index.php">Présentation</a></li>
        <li><a href="actus.php">Actualités</a></li>
        <li><a href="../book.php">Book</a></li>
        <li><a href="FAQ.php">FAQ</a></li>
        <li><a href="../chris/contact.php">Contact</a></li>
        <li><a href="../chris/forum.php">Forum</a></li>
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
    <h1 id="titleFAQ">Foire Aux Questions !</h1>
    <h2 style="text-align:center">Présentation Simplon :</h2>
    <div class="container-fluid" id="FAQ">
      <div class="row text-center col-md-offset-1 col-md-10">
        <p class="questions" id="question1">1. Qu'est ce que Simplon(.co) ?</p>
        <p class="reponses"  id="answer1">Simplon(.co) est une start-up basée à Montreuil (Seine Saint-Denis) dans le domaine de l'apprentissage de la programmation et du numérique. Fondée notemment par <a data-toggle="modal" data-target=".modalEK">Erwan Kezzar</a> et <a data-toggle="modal" data-target=".modalfb">Frédéric Bardeau</a> en 2013, la start-up permet à des personnes avec des profils peu courants dans la profession (sans diplômes, des personnes avec une déficience physique, des jeunes issus de quartiers défavorisés) de se former à la production de code informatique. Certaines fabriques sont labélisées <span style="font-style:italic">"Grande Ecole du Numérique"</span>.</p>
        <p class="questions" id="question2">2. Quelles sont les formations proposées ?</p>
        <p class="reponses" id="answer2">Plusieurs <a data-toggle="modal" data-target=".modalformation">formations</a> y sont dispensées dont celle en développement Web.</p>
        <p class="questions" id="question3">3. Où est-implanté Simplon(.co) ?</p>
        <p class="reponses" id="answer3">Fort de son succès, Simplon est international : les centres de formation se trouvent en <a data-toggle="modal" data-target=".modalfrance">France + un en réunion</a> mais également en <a data-toggle="modal" data-target=".modalafrique">Afrique du Sud</a>, <a data-toggle="modal" data-target=".modalroumanie">Roumanie</a>, <a data-toggle="modal" data-target=".modalCI">Côte d'Ivoire</a> & au <a data-toggle="modal" data-target=".modalLiban">Liban</a> !</p>
        <p class="questions" id="question4">4. Simplon(.co) est aussi implanté à Boulogne-Sur-Mer, quelle(s) formation(s) sont proposées ?</p>
        <p class="reponses" id="answer4">Simplon(.co) Boulogne-Sur-Mer propose une formation en développement web !</p>
        <h2>Candidatures :</h2>
        <p class="questions" id="question5">5. Qui peut proposer sa candidature ?</p>
        <p class="reponses" id="answer5">Tout le monde peut candidater chez Simplon.co … et en moyenne 80% sont débutant.e.s !<br>
          Chaque Simplon a ses critères de séléctions, ils sont indiqués dans le tableau des candidatures ouvertes. Cependant les profils suivants auront accès en priorité à la formation : <a data-toggle="modal" data-target=".modalprofil">critères</a> prioritaires !
        </p>
        <p class="questions" id="question6">6. Je suis intéressé(e) par la formation Simplon, mais je n'ai pas tout les critères du profil prioritaire, est-ce un problème ?</p>
        <p class="reponses" id="answer6">Eh bien non, comme dit plus haut (cf question 1) : Simplon est ouvert à tous.</p>
        <p class="questions" id="question7">7. Je n'ai jamais codé(e) avant, puis-je candidater malgrès tout ?</p>
        <p class="reponses" id="answer7">Oui, pas de soucis (cf question 1). 80% sont débutant(e)s.</p>
        <p class="questions" id="question8">8. Que faut-il faire pour candidater ?</p>
        <p class="reponses" id="answer8">
          - Etape 1 : Vous devez tout d’abord remplir le formulaire de candidature.<br>
          - Etape 2 : Si vous êtes pré-sélectionné.e vous allez être convoqué.e à des entretiens individuels.<br>
          - Etape 3 : Vous saurez ensuite par mail si votre candidature a été retenue.<br>
          Plus de détatils : <a href="http://simplon.co/comment-candidater/">Comment candidater ?</a>.</p>
          <p style="color:#2E60BB;font-style:italic">Pour une FAQ plus complète : <a href="http://simplon.co/faq-candidatures/">Cliquez ici !</a></p>
      </div>
    </div>
    <div class="modal fade modalEK" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <img src="http://1b663dd7bf.url-de-test.ws/wp-content/uploads/2014/11/Selection_246.png" style="height:70%;width:50%;margin-left:25%;margin-top:2%;">
          <p class="text-center">Erwan Kezzar : co-fondateur de Simplon(.co)</p>
          <a class="btn btn-danger text-center" href="#" data-dismiss="modal" style="margin-left:45%">Retour</a>
        </div>
      </div>
    </div>
    <div class="modal fade modalfb" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <img src="http://simplon.co/wp-content/uploads/2014/11/Capture-d%E2%80%99e%CC%81cran-2016-07-05-a%CC%80-21.08.42.png" style="height:70%;width:50%;margin-left:25%;margin-top:2%;">
          <p class="text-center">Frédéric Bardeau : Président & co-fondateur de Simplon(.co)</p>
          <a class="btn btn-danger text-center" href="#" data-dismiss="modal" style="margin-left:45%">Retour</a>
        </div>
      </div>
    </div>
    <div class="modal fade modalformation" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <img src="http://1b663dd7bf.url-de-test.ws/wp-content/uploads/2014/11/Capture-d’écran-2014-11-14-à-16.03.41-300x92.png" style="height:70%;width:50%;margin-left:25%;margin-top:2%;">
          <p class="text-center">Formations proposés : développeur.se Web, développeur.se Java, Wordpress...</p>
          <a class="btn btn-primary text-center" href="http://simplon.co/" target="_blank" style="margin-left:40%;outline:none">En savoir +</a>
          <a class="btn btn-danger text-center" href="#" data-dismiss="modal">Retour</a>
        </div>
      </div>
    </div>
    <div class="modal fade modalfrance" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <img src="img/simplon-france.png" style="height:70%;width:50%;margin-left:25%;margin-top:2%;">
          <img src="img/reunion.png" style="width:50%;margin-left:25%;margin-top:2%;">
          <p class="text-center">Localisation des centres de formation en France + Simplon réunion !</p>
          <a class="btn btn-primary text-center" href="http://simplon.co/ecosysteme/essaimage-simplon-co/#france" target="_blank" style="margin-left:40%;outline:none">En savoir +</a>
          <a class="btn btn-danger text-center" href="#" data-dismiss="modal">Retour</a>
        </div>
      </div>
    </div>
    <div class="modal fade modalafrique" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <img src="http://simplon.co/wp-content/uploads/2015/12/IMG_0712.jpg" style="height:70%;width:50%;margin-left:25%;margin-top:2%;">
          <p class="text-center">Le SAP / Simplon Lab basé à Johannesburg !</p>
          <a class="btn btn-primary text-center" href="http://simplon.co/ecosysteme/dans-le-monde/afrique-du-sud/" target="_blank" style="margin-left:40%;outline:none">En savoir +</a>
          <a class="btn btn-danger text-center" href="#" data-dismiss="modal">Retour</a>
        </div>
      </div>
    </div>
    <div class="modal fade modalroumanie" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <img src="http://simplon.co/wp-content/uploads/2016/02/SimplonRoumanie.jpg" style="height:70%;width:50%;margin-left:25%;margin-top:2%;">
          <p class="text-center">Simplon basé à Cluj !</p>
          <a class="btn btn-primary text-center" href="http://simplon.co/ecosysteme/dans-le-monde/roumanie" target="_blank" style="margin-left:40%;outline:none">En savoir +</a>
          <a class="btn btn-danger text-center" href="#" data-dismiss="modal">Retour</a>
        </div>
      </div>
    </div>
    <div class="modal fade modalCI" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <img src="http://simplon.co/wp-content/uploads/2015/12/logo-Final-BOOTCAMP.png" style="height:70%;width:50%;margin-left:25%;margin-top:2%;">
          <p class="text-center">Simplon.CI basé à Bouaké !</p>
          <a class="btn btn-primary text-center" href="http://simplon.co/ecosysteme/dans-le-monde/cote-divoire" target="_blank" style="margin-left:40%;outline:none">En savoir +</a>
          <a class="btn btn-danger text-center" href="#" data-dismiss="modal">Retour</a>
        </div>
      </div>
    </div>
    <div class="modal fade modalLiban" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <img src="http://simplon.co/wp-content/uploads/2017/01/IMG_20170119_162556_724.jpg" style="height:70%;width:50%;margin-left:25%;margin-top:2%;">
          <p class="text-center">Simplon basé à Beyrouth au Liban !</p>
          <a class="btn btn-primary text-center" href="http://simplon.co/ecosysteme/dans-le-monde/liban" target="_blank" style="margin-left:40%;outline:none">En savoir +</a>
          <a class="btn btn-danger text-center" href="#" data-dismiss="modal">Retour</a>
        </div>
      </div>
    </div>
    <div class="modal fade modalprofil" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <p style="text-align:center;font-size: 20px">Critères de séléctions souhaitées :</p>
          <ul id="UL">
            <li>- les 18-25 ans et les plus de 45 ans</li>
            <li>- les non-diplômé·e·s ou peu diplômé·e·s</li>
            <li>- les personnes inscrites à Pôle Emploi (si vous êtes sans activité, cela peut se faire rapidement)</li>
            <li>- les bénéficiaires de minima sociaux (RSA, ASS, etc.)</li>
            <li>- les femmes (car il y a encore trop peu de développeuses)</li>
            <li>- les personnes originaires de quartiers prioritaires de la politique de la ville ou de zones rurales</li>
          </ul>
          <a class="btn btn-danger text-center" href="#" data-dismiss="modal" style="margin-left:45%">Retour</a>
        </div>
      </div>
    </div>
    <footer><img src="img/simplon.png"width="30%" height="100px"></footer>
    <a href="#" id="toTop" style="color:#2E60BB"class="fa fa-chevron-up fa-2x"></a>
    <script src="https://use.fontawesome.com/8d66db2fbe.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/hackton.js"></script>
  </body>
</html>
