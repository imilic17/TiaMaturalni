<?php 
session_start();

if (!isset($_SESSION['KorIme'])) {
  $_SESSION['msg'] = "Niste prijavljeni";
  header('location: index2.php');
}
if (isset($_GET['logout'])) {
  session_destroy();
  unset($_SESSION['KorIme']);
  header("location: index2.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="jquery-3.3.1.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"> 
    </script>
    <link rel="icon" href="Logo2.png" type="image">
   <!--
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
     -->
     <link rel="stylesheet" href="bulma-0.9.1/bulma/css/bulma.min.css">
    <link rel="stylesheet" href="https://bulma.io/vendor/fontawesome-free-5.15.2-web/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Studentski dom - bodovi</title>
</head>
<body>




	<!-- notification message -->
  <?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['KorIme'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['KorIme']; ?></strong></p>
    	<p> <a href="index2.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?>

    <div class="container">
    <nav class="navbar" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
          <a class="navbar-item" href="index2.php">
            <img src="Logo2.png" height="48" width="40">
            
          </a>
      
          <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
          </a>
        </div>
      
        <div id="navbarBasicExample" class="navbar-menu">
          <div class="navbar-start">
            <a class="navbar-item" href="index2.php">
              Početna
            </a>
      
            <a id="navOStranici" class="navbar-item">
              O stranici
            </a>
      
            <a class="navbar-item">
              Ljestvica
            </a>

            <div class="navbar-item has-dropdown is-hoverable">
              <a class="navbar-link">
                Kalkulator
              </a>

              <div class="navbar-dropdown">
                <a id="navBrucosi" class="navbar-item">
                  Brucoši
                </a>
                <a id="navDrugaGodPreddiplomski" class="navbar-item">
                  Preddiplomski studij
                </a>
                <a class="navbar-item">
                  Diplomski studij
                </a>
            
              </div>
            </div>

            <div class="navbar-item has-dropdown is-hoverable">
                <a class="navbar-link">
                  Više o
                </a>
        
                <div class="navbar-dropdown">
                  <a id="navSubvencioniranoStanovanje" class="navbar-item">
                    Subvencioniranom stanovanju
                  </a>
                  <hr class="navbar-divider">
                  <a id="navPrijaviProblem" class="navbar-item">
                    Prijavi problem
                  </a>
                </div>
              </div>
               
              <a href="#kontakt" class="navbar-item">
                  Kontakt
              </a>
        
        </div>
      
          <div class="navbar-end">
            <div class="navbar-item">
              <div class="buttons">
                <a id="navRegistracija" class="button is-link">
                  <strong>Registriraj se</strong>
                </a>
                <a id="navPrijava" class="button is-light">
                  Prijavi se
                </a>
              </div>
            </div>
          </div>
        </div>
      </nav>





</div>


    <script src="kalkulator.js"></script>
</body>
</html>