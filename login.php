<?php include('registracija.php') ?>
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
    </div>
  </nav>


	 
  <div id="prijava">
  <br>
  <div class="columns">
    <div class="column is-3">
      
    </div>
    <div class="column is-6">
  <form class="notification is-info" action="login.php" method="POST" enctype="multipart/form-data">
  <?php include('errors.php'); ?>
  <br>
  <div class="field">
    <p class="control has-icons-left has-icons-right">
      <input class="input is-dark" type="text" placeholder="Korisničko ime" name="KorisnickoIme">
      <span class="icon is-small is-left">
        <i class="fas fa-user-circle"></i>
      </span>
    </p>
  </div>
  <div class="field">
    <p class="control has-icons-left has-icons-right">
      <input class="input is-dark" type="password" placeholder="Lozinka" name="Lozinka">
      <span class="icon is-small is-left">
        <i class="fas fa-lock"></i>
      </span>

    </p>
  </div>
  <div class="field">
    <p class="control">
      <br>
      <button class="button is-dark" type="submit" name="login_user">
        Prijavi se
      </button>
    </p>
  </div>
  <br>
  <p>
  		Još nisi prijavljen? <a href="za_registraciju.php">Registriraj se</a>
  	</p>
</form>
  </div>
  <div class="column is-3">
    
  </div>
  </div>
<br><br><br>
</div>

<script src="kalkulator.js"></script>
</body>
</html>