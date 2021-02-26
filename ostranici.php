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

<div id="navOStranici">
  <br><br>
  <nav class="level is-mobile">
    <div class="level-item has-text-centered">
      <div>
        <p class="heading brojevi">Prijavljenih korisnika</p>
        <p class="title">3,456</p>
      </div>
    </div>
    <div class="level-item has-text-centered">
      <div>
        <p class="heading brojevi">Broj puta izračunavanja bodova</p>
        <p class="title">123</p>
      </div>
    </div>
    <div class="level-item has-text-centered">
      <div>
        <p class="heading brojevi">Objava</p>
        <p class="title">456K</p>
      </div>
    </div>
  </nav>
  <br><br>
  <div class="columns is-variable is-8">
    <div class="column is-three-fifths">
  <div class="notification is-link is-light">
    <h1 class="subtitle is-2">Kako je nastala stranica</h1>
    Svakom studentu koji ne živi u mjestu studiranja, osim Državne mature i upisa na željeni fakultet je
    potreban pronalazak i smještaja tijekom studiranja. Svima nam je prva opcija Studenski dom jer je financijski
    najprihvatljiviji te se živi i radi u 100% studenskoj atmosferi, koja je motivirajuća za studente.
    Za izračun bodova za smještaj u studenskim domovima Zagreba je potrebno izdvojiti dosta vremena. Kako bi olakšala
    izračun ostalim studentima odlučila sam za maturalni rad napraviti web aplikaciju koja će
    omogućiti izračun ostalim budućim i trenutnim studentima da lakše kroz nekoliko klikova izračunaju
    svoje bodove za smještaj u Zagrebu.
    <br><br>Podloga za izradu ove web aplikacije je <strong>Pravilnik o uvjetima i načinu ostvarivanja prava redovitih
    studenata na subvencionirano stanovanje (NN 63/2019)</strong>, kojeg je izdalo <strong>Ministarstvo znanosti i
    obrazovanja.</strong>
    <br><br>Daljnji razvoj ove web aplikacije će ovisiti isključivo o interesu studenata sa ostalih Sveučilišta u RH, a
    interes će se ispitati anketnim upitnikom. Također kroz daljnje školovanje mi je želja razviti i mobilnu
    aplikaciju ove web aplikacije kako bi bila još prihvatljivija budućim i postojećim studentima.
    <br><br><strong>Izračun bodova je isključivo informativnog karaktera.</strong>
  </div>
    </div>

    <div class="column is-one-quarter">
    <div class="notification poll">
      <span class="rating">Kako ti se sviđa stranica?</span>
      <br><br>
      <span id="zvijezda" class="fa fa-star checked"></span>
      <span id="zvijezda" class="fa fa-star checked"></span>
      <span id="zvijezda" class="fa fa-star checked"></span>
      <span id="zvijezda" class="fa fa-star checked"></span>
      <span id="zvijezda" class="fa fa-star"></span>
      <br><br><br>
      <p class="brojevi">4.1 average based on 254 reviews.</p>
      <hr style="border:1px solid #9e9e9e">
      
      <div class="row">
        <div class="side">
          <div>5 star</div>
        </div>
        <div class="middle">
          <div class="bar-container">
            <div class="bar-5"></div>
          </div>
        </div>
        <div class="side right">
          <div>150</div>
        </div>
        <div class="side">
          <div>4 star</div>
        </div>
        <div class="middle">
          <div class="bar-container">
            <div class="bar-4"></div>
          </div>
        </div>
        <div class="side right">
          <div>63</div>
        </div>
        <div class="side">
          <div>3 star</div>
        </div>
        <div class="middle">
          <div class="bar-container">
            <div class="bar-3"></div>
          </div>
        </div>
        <div class="side right">
          <div>15</div>
        </div>
        <div class="side">
          <div>2 star</div>
        </div>
        <div class="middle">
          <div class="bar-container">
            <div class="bar-2"></div>
          </div>
        </div>
        <div class="side right">
          <div>6</div>
        </div>
        <div class="side">
          <div>1 star</div>
        </div>
        <div class="middle">
          <div class="bar-container">
            <div class="bar-1"></div>
          </div>
        </div>
        <div class="side right">
          <div>20</div>
        </div>
      </div>
    </div>

  </div>
  </div>
  <br>

  <div class="columns is-variable is-8">
    <div class="column is-one-third">
      <div>
       <br> <h1 id="VrijemePotrebnoZaIzraduStranice" class="subtitle is-5">Vrijeme potrebno za izradu stranice: </h1><br>
      <nav class="level is-mobile">
        <div class="level-item has-text-centered">
          <div>
            <p class="heading brojevi">Sati</p>
            <p class="title">3,456</p>
          </div>
        </div>
        <div class="level-item has-text-centered">
          <div>
            <p class="heading brojevi">Dana</p>
            <p class="title">123</p>
          </div>
        </div>
        <div class="level-item has-text-centered">
          <div>
            <p class="heading brojevi">Tjedana</p>
            <p class="title">456K</p>
          </div>
        </div>
      </nav>
    </div>

      <br><br>
    <article id="StudentskaNaseljaUZagrebu" class="message is-warning is-light">
      <div class="message-body">
       <h1 id="StudentskaNaseljaUZG">STUDENTSKA NASELJA U ZAGREBU:</h1><br>
        "Stjepan Radić"<br>
        "Cvjetno naselje"<br>
        "Dr. Ante Starčević"<br>
        "Lašćina"
      </div>
    </article>
  </div>
    <div class="column">
      <iframe src="https://www.google.com/maps/d/embed?mid=14Q2FWQi97rEU5_CH1tTofprgyGcZtGm1" width="911" height="380"></iframe>
  </div>
  </div>
  
</div>
<br>
<?php include "./footer.php" ?>
      </body>
      </html>