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
        <li><a href="christopher.php">Actualités</a></li>
        <li><a href="FAQ.php">FAQ</a></li>
        <li><a href="../chris/chris.php">Contact</a></li>
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
