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
<body onLoad="document.forms['prosjek'].elements['t1'].focus();"> 
  <div class="prolaz"> 
     	<!-- notification message -->
  <?php if (isset($_SESSION['success'])) : ?>
      <div class="error success">
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <div class="container">

    <nav class="navbar" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
          <a class="navbar-item" href="index.php">
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
            <a class="navbar-item" href="index.php">
              Početna
            </a>
      
            <a id="navOStranici" class="navbar-item" href="ostranici.php">
              O stranici
            </a>
      
            <a id="ljestvica" class="navbar-item" href="ljestvica.php">
              Ljestvica
            </a>

            <div class="navbar-item has-dropdown is-hoverable">
              <a class="navbar-link">
                Kalkulator
              </a>

              <div class="navbar-dropdown">
                <a id="navBrucosi" class="navbar-item" href="brucosi.php">
                  Brucoši
                </a>
                <a id="navPreddiplomski" class="navbar-item" href="preddiplomski.php">
                  Preddiplomski studij
                </a>
                <a id="navDiplomski"class="navbar-item" href="diplomski.php">
                  Diplomski studij
                </a>
            
              </div>
            </div>

            <div class="navbar-item has-dropdown is-hoverable">
                <a class="navbar-link">
                  Više o
                </a>
        
                <div class="navbar-dropdown">
                  <a id="navSubvencioniranoStanovanje" class="navbar-item" href="subven_stan.php">
                    Subvencioniranom stanovanju
                  </a>
                  <hr class="navbar-divider">
                  <a id="navPrijaviProblem" class="navbar-item" href="prijavi_problem.php">
                    Prijavi problem
                  </a>
                </div>
              </div>
               
              <a href="#kontakt" class="navbar-item">
                  Kontakt
              </a>
              </div>
<?php
              if (!isset($_SESSION['KorisnickoIme'])) {
    ?>
    <div class="navbar-end">
            <div class="navbar-item">
            <div class="buttons">
            <a id="navRegistracija" class="button is-light" href="za_registraciju.php">
              <strong>Registriraj se</strong>
            </a>
            <a id="navPrijava" class="button is-link" href="login.php">
              Prijavi se
            </a>
          </div>
          </div>
  </div>
          <?php
  }else{?>  
        <div class="navbar-end">
            <div class="navbar-item">
            <div class="buttons">
       <a id="navKorisnik">  Bok <strong><?php echo $_SESSION['KorisnickoIme']; ?></strong> </a>
       <a id="navOdjava" class="media" href="index.php?logout='1'">
       <figure>
     <img src="log_out.jpg" alt="odjava">
   </figure>
       </a>
       </div>
  </div>
  </div>
     <?php  
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['KorisnickoIme']);
  	header("location: login.php");
  }
?>


    </div> 
        
            
  </div>
</nav>

