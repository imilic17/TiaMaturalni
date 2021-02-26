<?php
session_start(); 

 /* if (!isset($_SESSION['KorisnickoIme'])) {
    $_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }*/
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['KorisnickoIme']);
  	header("location: login.php");
  }

  include "./header.php"
?>



      </div>
  <div class="column is-8">
 <div class="notification is-danger is-light">
     <form action="mailto:tia@novemogucnosti.com" method="get" enctype="text/plain">
<h1 class="subtitle is-3">Prijavi problem</h1>
  <textarea class="textarea is-danger" placeholder="Ovdje opišite problem s kojim ste se susreli, prijedloge za web stranciu, itd."></textarea> </br>
  <input class="input" type="email" placeholder="Unesite e-mail adresu"> <br>
  <p class="control">
        <button class="button">Pošalji</button>
      </p>
             </form>
</div>

</div>
 </div>
<br>
</div>


</body>
</html>