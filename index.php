<?php
session_start(); 

  if (!isset($_SESSION['KorisnickoIme'])) {
    $_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['KorisnickoIme']);
  	header("location: login.php");
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
             <!-- logged in user information -->
             <?php  if (isset($_SESSION['KorisnickoIme'])) : ?>
                <a id="navKorisnik">  Bok <strong><?php echo $_SESSION['KorisnickoIme']; ?></strong> </a>
                <a id="navOdjava" class="media" href="index.php?logout='1'">
                <figure>
              <img src="log_out.jpg" alt="odjava">
            </figure>
                </a>
              </div>
              <?php endif ?>
              </div>
            </div>
          </div> 
            
          </div>
      </nav>




<div id="stranica0">
  <br><br>
<div class="columns">
<div class="column is-3">
  
</div>
  <div class="column is-6">
  <div class="box boox">
    <article class="media">
      <div class="media-left">
        <figure class="image is-64x64">
          <img src="https://bulma.io/images/placeholders/128x128.png" alt="Image">
        </figure>
      </div>
      <div class="media-content">
        <div class="content">
          <p>
            <strong>John Smith</strong> <small>@johnsmith</small> <small>31m</small>
            <br>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean efficitur sit amet massa fringilla egestas. Nullam condimentum luctus turpis.
          </p>
        </div>
        
      </div>
    </article>
  </div>
  </div>

<div class="column is-3">
  
</div>
</div>



  <br><br>
</div>
  


<div id="stranica1" class="stranicaDisabled">
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
      <iframe src="https://www.google.com/maps/d/embed?mid=14Q2FWQi97rEU5_CH1tTofprgyGcZtGm1" width="874" height="380"></iframe>
  </div>
  </div>
  
</div>
<br>
   <!--        <button id="btnBrucos" class="brucos">Brucoš</button><br><br>
<button id="btnStudent" class="student">Student</button>-->





<!--stranica2-->
<div id="stranica2" class="stranicaDisabled">
  <div class="notification">
    <div id="anketa">
        <pre class="upitnik"><span class="upitnikText">Potrebno je izračunati i unijeti<br> osobni prosjek ocjena na tri decimale iz svih <br>razreda srednjoškolskog obrazovanja</span>&#10068;</pre>
    <h1 class="subtitle is-1">Prosjek ocjena</h1>
    <!-- izračunani osobni prosjek na 3 DECIMALE(sva 4 razreda) (OBVEZNO) podjeliti s prosjekom svih brucoša na 3 decimale(prosjek brucoša = 4,314) 
    dobiveni broj s 3 decimale množi se sa 1000 i dobiveni rezultat su bodovi -->
    <br><br>
    <div>
    <form name="prosjek" id="prosjek">
      1. godina:
      <input type="text" id="t1" name="text" size="5" maxlength="5"
      onkeyup="provjeriDuljinu(this,'t2');" onChange="tocka(this);" />
      <span id = "greska0"></span>
     
   <br>
      2. godina:
      <input type="text" id="t2" name="text" size="5" maxlength="5" 
      onkeyup="provjeriDuljinu(this,'t3');" onChange="tocka(this);"/>
      <span id = "greska1"></span>
   <br>
      3. godina:
      <input type="text" id="t3" name="text" size="5" maxlength="5" 
      onkeyup="provjeriDuljinu(this,'t4');" onChange="tocka(this);"/>
      <span id = "greska2"></span>
   <br>
      4. godina:
      <input type="text" id="t4" name="text" size="5" maxlength="5" onChange="tocka(this);"/>
      <span id = "greska3"></span>

      <input id = "button" type = "button" value = "Provjeri bodove" onclick = "Izracunaj();">
     </form>
     

<div id = "rezultat_prosjeka">
<p id = "prosjek_svi"></p>

    </div>

    

         <br><br>
        </div>
      </div>
    </div>
  
  <br>
  <div class="notification">
    <h1 class="subtitle is-1">Nagrade i uspijeh</h1>
    <pre class="upitnik"><span class="upitnikText">Položena državna matura "A" <br>razine iz (svih predmeta)<br> obveznih ispita državne mature<br>u ukupnom postotku</span>&#10068;</pre>
    <h3 class="subtitle is-3">Državna matura</h3>
        <!--državna matura položena A razina svih obveznih ispita(hrvatski, matematika, strani jezik) državne mature u ukupnom postotku -->
        Položio/la sam obvezne ispite državne mature u ukupnom postotku:
        <div class="select is-link is-rounded is-normal">
        <select id="nagrade" class="is-focused">
        <option value="0">manjem od 80%</option>
        <option value="200">od 80% do 90%</option>
        <option value="300">višem od 90%</option>
        </select>
    </div>
    
        <pre class="upitnik"><span class="upitnikText">Osvojena nagrada na službenim natjecanjima<br> (jedno od prvih triju mjesta) koja <br>su vezana uz nastavni program tijekom<br>srednjoškolskog obrazovanja.<br> Bodovi se mogu ostvariti samo po <br>jednoj osnovi i za samo jednu<br> državnu ili međunarodnu nagradu</span>&#10068;</pre>
    <h3 class="subtitle is-3">Međunarodna nagrada</h3>
    <!-- MEĐUNARODNA NAGRADA (1,2,3 mjesto) -->
    <form name="nagradaRB" id="nagradaRB">
        <input type="radio" id="medunarodnaNemam"  name="nagrada"  value="0"  checked>
        <label for="medunarodnaNemam">Nemam</label>
        <input type="radio" id="medunarodnaMjesto" name="nagrada"  value="400" >
        <label for="medunarodnaMjesto">1.,2.,3, mjesto</label>
        
    <div id="drzavnaNagradaEnb">
    <h3 class="subtitle is-3">Državna nagrada</h3>
    <!-- DRŽAVNA NAGRADA (1,2,3 mjesto) 
        <input type="radio" id="rbtnDrzNagNe" name="nagrada"   value="0" checked>
        <label for="rbtnDrzNagNe">Nemam</label>    -->
        <input type="radio" id="rbtnDrzNagMj" name="nagrada"   value="300" >
        <label for="rbtnDrzNagMj">1.,2.,3, mjesto</label> <br><br><br>
    </div>
    
    
    <div id="drzavnaNagradaDis" class="drzavnaNagradaDisabled">
            <h3>Državna nagrada</h3>
    <!-- DRŽAVNA NAGRADA (1,2,3 mjesto) 
        <input type="radio" name="nagrada" value="0" disabled>
        <label for="no">Nemam</label>-->
        <input type="radio"  name="nagrada"  value="300" disabled>
        <label for="yes">1.,2.,3, mjesto</label>
        <br><br><br>
        
    <!-- <input id = "button" type = "button" value = "Provjeri bodove na račun nagrada" onclick = "Izracunaj();"> -->
    </form>

    <div id = "rezultat_nagrade">
        <p id = "sve_nagrade"></p>
    
        </div>

        
     
    </div>
 
    <div class="notification">
    <pre class="upitnik"><span class="upitnikText">Deficitarni programi na županijskoj<br> razini prema mjestu studiranja<br> (prvih 10 na listi HZZ-a). <br>Studenti na dvopredmetnim studijima<br> mogu ostvariti bodove za samo jedan predmet.</span>&#10068;</pre>
    <h1 class="subtitle is-1">Deficitarni studijski program</h1> 
    <!--<ul>
    <li>studenti koji se upisuju na studijske programe koji se vode kao deficitarni 
    na županijskoj razini prema mjestu studiranja </li>
    </ul>-->
    <br>
    Upisat ću:  
    <div class="select is-link is-rounded is-normal"> 
        <select id="deficitarno" class="is-focused"> 
        <option value="0">ništa od navedenog</option>
        <option value="200">medicinu</option>
        <option value="200">matematiku, nastavnički smjer</option>
        <option value="200">računalstvo</option>
        <option value="200">elektrotehniku i informacijsku tehnologiju</option>
        <option value="200">rehabilitaciju</option>
        <option value="200">logopediju</option>
        <option value="200">strojarstvo</option>
        <option value="200">germanistiku</option>
        <option value="200">farmaciju</option>
        <option value="200">fiziku, nastavnički smjer</option>
        </select></div><br><br><hr id="treciOdjeljak"><br>
      </div>
    
      <div class="notification">
    <h1 class="subtitle is-1">Socijalno-ekonomski status</h1>
    <pre class="upitnik"><span class="upitnikText">Ako je studentu jedan roditelj preminuo,<br> nestao ili nepoznat, student ne može<br> ostvariti bodove i na razvedene <br>roditelje. Inače student <br>(uključujući i djecu iz izvanbračnih zajednica)<br> razvedenih roditelja ostvaruje bodove,<br> ako živi u obitelji samo s jednim roditeljem. </span>&#10068;</pre>
   
    <h3 class="subtitle is-3">Jedan roditelj</h3>
        <input type="radio" id="nista" name="roditelj" value="0" checked>
        <label for="nista">Ništa od navedenog</label>
        <input type="radio" id="preminuo" name="roditelj" value="600">
        <label for="preminuo">Preminuo, nestao ili nepoznat</label>    
        
    <div id="nepoznatEnb">
    <h3 class="subtitle is-3">Razvedeni roditelji</h3>
    <p class="kalkulator">* Uključujući i djecu iz izvanbračnih zajednica</p> 
        <input type="radio" id="rbtnNera" name="razRod" value="0" checked>
        <label for="rbtnNera">Nisu razvedeni</label>    
        <input type="radio" id="rbtnRa" name="razRod" value="0">
        <label for="rbtnRa">Razvedeni su</label>

    <div id="razvedeniEnb">
        <br><input type="radio" id="rbtnJed" name="razvedeni" value="150" >
        <label for="rbtnJed">Živim samo s jednim roditeljem</label>
        <input type="radio" id="rbtnDva" name="razvedeni" value="0" checked>
        <label for="rbtnDva">Živim s oba roditelja</label>
    </div>

    <div id="razvedeniDis" class="razvedeniDisabled">
        <br><br><input type="radio" id="rbtnJed" name="razvedeni" value="0" disabled>
        <label for="rbtnJed">Živim samo s jednim roditeljem</label>
        <input type="radio" id="rbtnDva" name="razvedeni" value="0" disabled>
        <label for="rbtnDva">Živim s oba roditelja</label>
    </div>
    </div>

    <div id="nepoznatDis" class="nepoznatDisabled">
        <h3>Razvedeni roditelji</h3>
        <p class="kalkulator">* Uključujući i djecu iz izvanbračnih zajednica</p> 
            <input type="radio" id="rbtnRa" name="razRod" value="0" disabled>
            <label for="rbtnRa">Razvedeni su</label>    
            <input type="radio" id="rbtnNera" name="razRod" value="0" disabled>
            <label for="rbtnNera">Nisu razvedeni</label>
    
        <div id="razvedeniEnb">
            <br><br><input type="radio" id="rbtnJed" name="razvedeni" value="0" disabled>
            <label for="rbtnJed">Živim samo s jednim roditeljem</label>
            <input type="radio" id="rbtnDva" name="razvedeni" value="0" disabled>
            <label for="rbtnDva">Živim s oba roditelja</label>
        </div>
    
        <div id="razvedeniDis" class="razvedeniDisabled">
            <br><br><input type="radio"  id="rbtnJed" name="razvedeni" value="0" disabled>
            <label for="rbtnJed">Živim samo s jednim roditeljem</label>
            <input type="radio" id="rbtnDva" name="razvedeni" value="0" disabled>
            <label for="rbtnDva">Živim s oba roditelja</label>
        </div>
        </div>

    <br><br>
    <h3 class="subtitle is-3">Brat ili sestra</h3>
<pre class="upitnik"><span class="upitnikText">Bodovi se mogu ostvariti samo<br> po jednoj osnovi za svakog <br>brata ili sestru, <br>uz uvjet da žive u obitelji.</span>&#10068;</pre>
   
    <p class="kalkulator">* Predškolske dobi ili na redovitom školovanju koji žive u obitelji</p>
    <div class="field is-horizontal">
      <div class="field-label is-normal">
    <label class="label">Imam</label>
  </div>
  <div class="field-body">
    <div class="field">
      <p class="control">
    <input class="input column is-focused is-one-fifth" type="number" id="txtBraceSestara" min="0" max="20" value="0"> braće/sestara </div>
  </p>
</div>
</div>
   
    <p class="kalkulator">* S teškoćama u razvoju zbog kojih nisu obuhvaćeni sustavom redovitog
    školovanja, uz uvjet da žive u obitelji</p>
    <div class="field is-horizontal">
      <div class="field-label is-normal">
    <label class="label">Imam</label>
  </div>
  <div class="field-body">
    <div class="field">
      <p class="control">
        <input class="input column is-focused is-one-fifth" type="number" id="txtTeskocaURazvoju" min="0" max="20" value="0"> braće/sestara </div>
      </p>
    </div>
    </div>
    
    <p class="kalkulator">* S invaliditetom od 1. do 5. kategorije invaliditeta (iznad 50% 
    tjelesnog oštećenja) na redovitom školovanju, uz uvjet da žive u obitelji</p>
    <div class="field is-horizontal">
      <div class="field-label is-normal">
    <label class="label">Imam</label>
  </div>
  <div class="field-body">
    <div class="field">
      <p class="control">
       <input class="input column is-focused is-one-fifth" type="number" id="txtBraceSestaraInvaliditet" min="0" max="20" value="0"> braće/sestara </div>
      </p>
    </div>
    </div>


<pre class="upitnik"><span class="upitnikText">Studenti koji imaju jednog<br> ili oba roditelja s tjelesnim<br> oštećenjem od 100% (osim tjelesnog<br> oštećenja iz Domovinskoga rata).</span>&#10068;</pre>
   
    <h3 class="subtitle is-3">Jedan ili oba roditelja</h3>
    <p class="kalkulator">* S tjelesnim oštećenjem od 100% (osim tjelesnog oštećenja iz Domovinskog rata)</p>
    Mi je:    
    <div class="select is-link is-rounded is-normal">
        <select id="ostecenje" class="is-focused">
        <option value="0">niti jedan roditelj</option>
        <option value="200">jedan roditelj</option>
        <option value="400">oba roditelja</option>
        </select>
        </div> 

    <br><br>
    <pre class="upitnik"><span class="upitnikText">Student s invaliditetom od <br>6. do 10. kategorije invaliditeta.</span>&#10068;</pre>
    
    <h3 class="subtitle is-3">Studenti s invaliditetom</h3>
    Student sam: 
    <div class="select is-link is-rounded is-normal">
        <select id="invaliditet" class="is-focused">
        <option value="0">bez invaliditeta</option>
        <option value="400">6. kategorije invaliditeta (50% tjelesnog oštećenja)</option>
        <option value="320">7. kategorije invaliditeta (40% tjelesnog oštećenja)</option>
        <option value="250">8. kategorije invaliditeta (30% tjelesnog oštećenja)</option>
        <option value="200">9. kategorije invaliditeta (20% tjelesnog oštećenja)</option>
        <option value="150">10. kategorije invaliditeta (10% tjelesnog oštećenja)</option>
        </select>
        </div>
    
        <pre class="upitnik"><span class="upitnikText">Student čija obitelj koristi<br> zajamčenu minimalnu naknadu<br> ne može ostvariti bodove i za <br>ukupni prosječni mjesečni prihod <br>po članu obitelji u prethodnoj<br> kalendarskoj godini.</span>&#10068;</pre>
   
    <h3 class="subtitle is-3">Minimalna naknada</h3>
    <p class="kalkulator">* Studenti čija obitelj koristi zajamčenu minimalnu naknadu</p>
        <input type="radio" id="nekoristi" name="minimalna" value="0" checked>
        <label for="nekoristi">Ne koristimo</label>   
        <input type="radio" id="koristi" name="minimalna" value="750">
        <label for="koristi">Koristimo</label>
    
    <br><br><br>
    
    <div id="prihodEnb">
    <h3>Mjesečni prihod</h3>
    <p class="kalkulator">* Studenti čiji ukupni prosječni mjesečni prihod po članu obitelji u prethodnoj 
        kalendarskoj godini iznosi:</p>
        <select id="mjesecniENB">
        <option value="0">više od 65% proračunske osnovice</option>
        <option value="750">do 500 kn</option>
        <option value="600">od 500,01 do 700,00 kn</option>
        <option value="525">od 700,01 do 900,00 kn</option>
        <option value="450">od 900,01 do 1.100,00 kn</option>
        <option value="375">od 1.100,01 do 1.300,00 kn</option>
        <option value="300">od 1.300,01 do 1.500,00 kn</option>
        <option value="225">od 1.500,01 do 1.700,00 kn</option>
        <option value="150">od 1.700,01 do 1.900,00 kn</option>
        <option value="300">od 1.900,01 do 65% proračunske osnovice</option>
        </select>
    </div>
    
    
    <div id="prihodDis" class="prihodDisabled">
      <h3>Mjesečni prihod</h3>
      <p class="kalkulator">* Studenti čiji ukupni prosječni mjesečni prihod po članu obitelji u prethodnoj 
          kalendarskoj godini iznosi:</p>
          <select id="mjesecni" disabled>
          <option value="0">više od 65% proračunske osnovice</option>
          <option value="750">do 500 kn</option>
          <option value="600">od 500,01 do 700,00 kn</option>
          <option value="525">od 700,01 do 900,00 kn</option>
          <option value="450">od 900,01 do 1.100,00 kn</option>
          <option value="375">od 1.100,01 do 1.300,00 kn</option>
          <option value="300">od 1.300,01 do 1.500,00 kn</option>
          <option value="225">od 1.500,01 do 1.700,00 kn</option>
          <option value="150">od 1.700,01 do 1.900,00 kn</option>
          <option value="300">od 1.900,01 do 65% proračunske osnovice</option>
          </select>
      </div>

    <br><br>
    <pre class="upitnik"><span class="upitnikText">Studentica majka ili student<br> otac koji imaju malodobno dijete.</span>&#10068;</pre>
    <h3 class="subtitle is-3">Studenti majka ili otac</h3>
    <p class="kalkulator">* Studenti koji imaju malodobno dijete</p>
    <div class="field is-horizontal">
      <div class="field-label is-normal">
    <label class="label">Imam</label>
  </div>
  <div class="field-body">
    <div class="field">
      <p class="control">
    <input class="input column is-focused is-one-fifth" type="number" id="txtStudentiMajkaOtac" min="0" max="20" value="0"> dijete/djece </div>
  </p>
</div>
</div>

    <pre class="upitnik"><span class="upitnikText">Studenti ostvaruju bodove za svakog <br>od roditelja koji ostvaruju pravo iz navedenog.</span>&#10068;</pre>
    
    <h3 class="subtitle is-3">Djeca branitelja</h3>
    <p class="kalkulator">* Studenti:<br>
        - djeca smrtno stradaloga branitelja iz Domovinskoga rata i pripadnika HVO-a <br>
        - djeca nestaloga hrvatskog branitelja iz Domovinskoga rata i pripadnika HVO-a<br>
        - djeca HRVI-a iz Domovinskoga rata i pripadnika HVO-a kojem je priznat status
         ratnoga vojnog invalida po pravomoćnom rješenju nadležnog tijela Bosne i Hercegovine<br>
        - djeca hrvatskih branitelja iz Domovinskoga rata i pripadnika HVO-a koji su u obrani 
        suvereniteta sudjelovali najmanje 100 dana u borbenome sektoru
        - djeca smrtno stradalih osoba iz članka 107. <a href="https://www.zakon.hr/z/834/Zakon-o-protuminskom-djelovanju">Zakona o protuminskom djelovanju</a><br>
        - djeca stradalih osoba I. i II. skupine iz članka 110. gore navedenog zakona
    </p>
    Dijete sam:
    <div class="select is-link is-rounded is-normal">
    <select id="branitelji" class="is-focused">
        <option value="0">niti jednog takvog roditelja </option>
        <option value="200">jednog takvog roditelja</option>
        <option value="400">oba takva roditelja</option>
        </select>
        </div>
      </div>
    <br><br>
    <input id = "btnIzracunaj" type = "button" class = "izracunaj" value = "Izračunaj" onclick = "Izracunaj();">
    <br><br>
    
    <h2 id="rez">0</h2>
</div>
<br>
</div>

<!--
<div id="drugaGodPreddiplomski" class="stranicaDisabled">
  <div id="anketa">
    <pre class="upitnik"><span class="upitnikText">Potrebno je izračunati i unijeti<br> osobni prosjek ocjena na tri decimale iz svih <br>razreda srednjoškolskog obrazovanja</span>&#10068;</pre>
<h1 class="subtitle is-1">Prosjek ocjena</h1>
 izračunani osobni prosjek na 3 DECIMALE(sva 4 razreda) (OBVEZNO) podjeliti s prosjekom svih brucoša na 3 decimale(prosjek brucoša = 4,314) 
dobiveni broj s 3 decimale množi se sa 1000 i dobiveni rezultat su bodovi 
<br><br>
    <form name="prosjek" id="prosjek">
      <div class="field is-horizontal">
        <div class="field-label is-normal">
      <label class="label">Prosjek ocjena svih položenih ispita:</label>
    </div>
    <div class="field-body">
      <div class="field">
        <p class="control">
        <input class="input column is-focused is-one-fifth" type="text" id="t1" name="text" size="5" maxlength="5"
        onkeyup="provjeriDuljinu(this,'t2');" onChange="tocka(this);" />
        <span id = "greska0"></span>
      </p>
    </div>
  </div>
</div>

     <br>
     <div class="field is-horizontal">
     <div class="field-label is-normal">
   <label class="label">2. godina:</label>
 </div>
 <div class="field-body">
   <div class="field">
     <p class="control">
        <input class="input column is-focused is-one-fifth" type="text" id="t2" name="text" size="5" maxlength="5" 
        onkeyup="provjeriDuljinu(this,'t3');" onChange="tocka(this);"/>
        <span id = "greska1"></span>
      </p>
    </div>
  </div>
</div>

     <br>
     <div class="field is-horizontal">
      <div class="field-label is-normal">
    <label class="label">3. godina:</label>
  </div>
  <div class="field-body">
    <div class="field">
      <p class="control">
        <input class="input column is-focused is-one-fifth" type="text" id="t3" name="text" size="5" maxlength="5" 
        onkeyup="provjeriDuljinu(this,'t4');" onChange="tocka(this);"/>
        <span id = "greska2"></span>
      </p>
    </div>
  </div>
</div>

     <br>
     <div class="field is-horizontal">
      <div class="field-label is-normal">
    <label class="label">4. godina:</label>
  </div>
  <div class="field-body">
    <div class="field">
      <p class="control">
        <input class="input column is-focused is-one-fifth" type="text" id="t4" name="text" size="5" maxlength="5" onChange="tocka(this);"/>
        <span id = "greska3"></span>
      </p>
    </div>
  </div>
</div><br><br>
        <input class="button is-link is-hovered" id = "button" type = "button" value = "Provjeri bodove" onclick = "Izracunaj();">
       </form>

       

<div id = "rezultat_prosjeka">
<p id = "prosjek_svi"></p>

</div>
</div>
</div>
-->


<div id="subvencioniranoStanovanje" class="stranicaDisabled">
  <br>
  <div class="columns is-variable is-4">
    <div class="column is-half">
  <div class="notification is-link is-light">
    <h1 class="subtitle is-4">Pravo na subvencionirani smještaj u studentskom domu imaju:</h1>
    <div class="content">
    <ol>
      <li>Redoviti studenti, državljani Republike Hrvatske</li>
      <li>Redoviti studenti, državljani EU s prijavljenim boravkom u RH sa statusom stranca na stalnom boravku u RH</li>
      <li>Osobe sukladno Zakonu o međunarodnoj i privremenoj zaštiti, koje su upisane na visokim učilištima u RH</li>
      <li>Studenti s invaliditetom poslijediplomskih sveučilišnih studija</li>
    </ol>
  </div>
  </div>
  <div class="notification is-danger is-light">
    <h1 class="subtitle is-4">Pravo na subvencionirani smještaj u studentskom domu nemaju:</h1>
    <div class="content">
      <ol>
        <li><strong>Studenti koji mijenjaju studijski program, bez završetka studija </strong>  i na drugome studiju ponovno upisuju prvu godinu, ako se prijave s prosjekom ocjena iz srednje škole.
          Studenti koji mijenjaju studijski program <strong>natječu se s prosjekom ocjena i brojem ostvarenih ECTS bodova s prethodnoga studijskog programa,</strong>  uključujući i prethodni studij 
          koji su prekinuli te upisuju drugi studij nakon nekoliko godina od prekida prethodnoga, a u tom slučaju tekućom godinom smatra se zadnja godina prethodnoga studija.</li><br>
        <li><strong>Studenti koji su ostvarili manje od 18 ECTS bodova u akademskoj godini prijave na natječaj.</strong><br><u> Ovaj uvjet ne odnosi se na:</u></li>
        <ul>
          <li>studente koji će u akademskoj godini za koju se raspisuje natječaj<strong> prvi put upisati prvu godinu prve razine studija</strong></li>
          <li>studente koji će u akademskoj godini za koju se raspisuje natječaj <strong>prvi put upisati prvu godinu druge razine studija,</strong> a trenutno imaju upisano zaostajanje zadnje godine
             prve razine studija ili im je u tekućoj godini ostao samo završni rad i ispit koji zajedno nose manje od 18 ECTS bodova ili su prvu razinu studija završili ranijih godina</li>
          <li><strong>studente s invaliditetom od 1. do 5. kategorije invaliditeta</strong> uz uvjet da je student u tekućoj akademskoj godini ostvario <strong>najmanje 1 ECTS</strong> bod</li>
          <li><strong>studente koji su bili smješteni u domove socijalne skrbi ili u udomiteljske obitelji, studente kojima su oba roditelja umrla, nestala ili nepoznata</strong> uz uvjet da je student
            u tekućoj akademskoj godini ostvario <strong>najmanje 1 ECTS</strong> bod</li>
          <li><strong>studente prve godine druge razine </strong> koji su upisali godinu u <strong>ljetnome semestru,</strong> uz uvjet da su u tekućoj akademskoj godini ostvarili <strong>najmanje 10 ECTS</strong> bodova</li>
          <li><strong>studente čiji ukupni mjesečni prihod po članu obitelji</strong> u prethodnoj kalendarskoj godini <strong>iznosi manje ili jednako 65% proračunske osnovice,</strong> iznimno, do popunjenja smještajnih 
            kapaciteta (od ukupnoga broja smještajnih kapaciteta obnovljenih ili izgrađenih sredstvima iz Strukturnih fondova Europske unije najmanje 50% ili prema definiranome postotku u
            potpisanome ugovoru o izgradnji doma mora biti namijenjeno studentima s invaliditetom i studentima čiji ukupni mjesečni prihod po članu obitelji u prethodnoj kalendarskoj godini 
            iznosi manje ili jednako 65% proračunske osnovice) uz uvjet da su u tekućoj akademskoj godini ostvarili <strong>najmanje 5 ECTS</strong> bodova. Prednost pri ostvarivanju prava na subvencionirano 
            stanovanje na temelju ovog kriterija ostvaruju studenti koji su u ukupnome poretku rang-liste ostvarili veći broj bodova </li>
        </ul>
        <li><strong>Studenti koji su ostvarili manje od 40 ECTS bodova prosječno u prethodnim godinama studiranja.</strong><br><u>Ovaj uvjet ne odnosi se na:</u></li>
        <ul>
          <li>studente koji su u trenutku prijave na natječaj<strong> prvi put upisani u prvu godinu prve razine studija</strong></li>
          <li>studente koji će u akademskoj godini za koju se raspisuje natječaj <strong>prvi put upisati prvu godinu prve razine studija</strong></li>
          <li><strong>studente s invaliditetom od 1. do 5. kategorije invaliditeta</strong> koji trebaju ostvariti <strong>najmanje 15 ECTS</strong> bodova prosječno u prethodnim godinama studiranja da bi ostvarili
            pravo na subvencionirano stanovanje</li>
            <li><strong>studente koji su bili smješteni u domove socijalne skrbi ili u udomiteljske obitelji, studente kojima su oba roditelja umrla, nestala ili nepoznata</strong> koji trebaju ostvariti <strong>najmanje
              15 ECTS</strong> bodova prosječno u prethodnim godinama studiranja da bi ostvarili pravo na subvenconirano stanovanje</li>
            <li><strong>stedente čiji ukupni mjesečni prihod po članu obitelji</strong> u prethodnoj kalendarskoj godini <strong>iznosi manje ili jednako 65% proračunske osnovice,</strong> iznimno, do popunjenja smještajnih 
              kapaciteta (od ukupnoga broja smještajnih kapaciteta obnovljenih ili izgrađenih sredstvima iz Strukturnih fondova Europske unije najmanje 50% ili prema definiranome postotku u 
              potpisanome ugovoru o izgradnji doma mora biti namijenjeno studentima s invaliditetom i studentima čiji ukupni mjesečni prihod po članu obitelji u prethodnoj kalendarskoj godini 
              iznosi manje ili jednako 65% proračunske osnovice), uz uvjet da su ostvarili <strong>najmanje 20 ECTS</strong> bodova prosječno u prethodnim godinama studiranja. Prednost pri ostvarivanju prava na
             subvencionirano stanovanje na temelju ovoga kriterija, ostvaruju studenti koji su u ukupnome poretku rang-liste ostvarili veći broj bodova</li>
        </ul>
        <li><strong>Studenti koji su dva puta mijenjali studijski program.</strong></li><br>
        <li><strong>Studenti koji su stekli kvalifikaciju određene razine ako ponovno upisuju studij te razine ili su upisani na istu razinu studija drugi put.</strong></li><br>
        <li><strong>Studenti koji upišu mirovanje</strong> u akademskoj godini za koju im je dodijeljeno pravo na subvencionirano stanovanje gube pravo na isto tijekom trajanja mirovanja. Navedeni uvjet <strong>ne odnosi se 
          na studente s invaliditetom od 1. do 5. kategorije, studente koji su bili smješteni u domove socijalne skrbi ili u udomiteljske obitelji te studente kojima su oba roditelja umrla, nestala ili 
          nepoznata.</strong> Iznimno za sve navedene studente, to dodijeljeno pravo na subvencionirano stanovanje <strong>gube ako upišu mirovanje studija 3. akademsku godinu uzastopno.</strong></li><br>
        <li>Studenti koji pošalju dokumentaciju na Natječaj izvan natječajnog roka.</li><br>
        <li>Studenti koji u natječajnom roku ne dostave osnovnu dokumentaciju propisanu Natječajem.</li><br>
        <li>Redoviti studenti kojima je mjesto prebivališta u mjestu u kojem studiraju.</li>
      </ol>
    </div>
  </div>
    </div>
    <div class="column is-half">
      <div class="notification is-warning is-light">
        <h1 class="subtitle is-4">Studenti koji imaju izravno pravo na subvencionirano stanovanje:</h1>
        <div class="content">
        Izravno pravo na subvencionirano stanovanje prema kriteriju izvrsnosti ostvaruju studenti kojima mjesečni prihodi obitelji u prethodnoj kalendarskoj godini ne prelaze po članu obitelji iznos od 75% proračunske osnovice (2.494,50 kn)
        koja se utvrđuje svake godine odgovarajućim propisom i koji <u>ispunjavaju jedan od sljedećih uvjeta:</u>
        <ol>
          <li>Studenti koji će prvi put upisati prvu godinu preddiplomskoga sveučilišnog, integriranoga preddiplomskog i diplomskoga sveučilišnog studija, kratkoga stručnog studija ili preddiplomskoga stručnog studija u Republici Hrvatskoj,
            a koji imaju aritmetički prosjek ocjena 5,000 tijekom svih razreda srednjoškolskog obrazovanja</li>
          <li>Studenti prvi put upisani u prvu godinu preddiplomskoga sveučilišnog, kratkoga stručnog i preddiplomskoga stručnog te integriranoga preddiplomskog i diplomskoga sveučilišnog studija koji imaju prosjek svih položenih ispita
            najmanje 4,500 uz najmanje stečenih 55 ECTS boda u tekućoj akademskoj godini, a zaključno do dana prijave na natječaj</li>
          <li>Studenti viših godina preddiplomskoga sveučilišnog, kratkoga stručnog studija i preddiplomskoga stručnog studija te integriranoga preddiplomskog i diplomskoga sveučilišnog studija koji imaju prosjek ocjena svih položenih ispita 
            na studiju najmanje 4,500 uz najmanje stečenih 55 ECTS bodova u tekućoj akademskoj godini, a zaključno do dana prijave na natječaj, te prosječno 55 i više ECTS bodova u prethodnim godina studiranja</li>
          <li>Studenti koji prvi put upisuju prvu godinu diplomskoga sveučilišnog studija i prvu godinu specijalističkog diplomskoga stručnog studija, a koji imaju prosjek ocjena svih položenih ispita na prethodnoj razini studija 
            (preddiplomskom sveučilišnom ili preddiplomskom stručnom studiju) najmanje 4,500 te prosječno 55 i više ECTS bodova u prethodnim godinama studiranja na prethodnoj razini studija</li>
          <li>Studenti prve godine diplomskoga sveučilišnog studija i specijalističkoga diplomskoga stručnog studija koji imaju prosjek ocjena svih položenih ispita na prethodno završenoj razini studija (preddiplomskom sveučilišnom ili preddiplomskom 
            stručnom studiju) te na prvoj godini diplomskoga sveučilišnog studija ili specijalističkoga diplomskoga stručnog studija najmanje 4,500 uz najmanje stečenih 55 ECTS bodova u tekućoj akademskoj godini, a zaključno do dana prijave na natječaj 
            te prosječno 55 i više ECTS bodova u prethodnim godinama studiranja</li>
          <li>Iznimno, studenti prve godine diplomskoga sveučilišnog studija koji su upisali samo ljetni semestar i koji imaju prosjek ocjena svih položenih ispita na prethodno završenoj razini studija (preddiplomskom sveučilišnom studiju) te u ljetnome
            semestru najmanje 4,500 uz najmanje stečenih 27 ECTS bodova u tekućoj akademskoj godini, a zaključno do dana prijave na natječaj te prosječno 55 i više ECTS bodova u prethodnim godinama studiranja</li>
        </ol>
        Izravno pravo na subvencionirano stanovanje ostvaruju studenti kojima mjesečni prihodi njihove obitelji u prethodnoj kalendarskoj godini ne prelaze po članu obitelji iznos od 60% (1.995,60 kn) proračunske osnovice koja se utvrđuje svake godine 
        odgovarajućim propisom i koji <u>ispunjavaju jedan od sljedećih uvjeta:</u>
        <ol>
          <li>Studenti, djeca smrtno stradaloga hrvatskog branitelja iz Domovinskoga rata i pripadnika Hrvatskog vijeća obrane (u daljnjem tekstu: HVO), djeca nestaloga hrvatskog branitelja iz Domovinskoga rata i pripadnika HVO-a i studenti djeca hrvatskoga 
            ratnoga vojnog invalida iz Domovinskoga rata (u daljnjem tekstu: HVRVI iz Domovinskoga rata) i pripadnika HVO-a kojem je priznat status ratnoga vojnog invalida po pravomoćnom rješenju nadležnog tijela Bosne i Hercegovine, koji:</li>
            <ul>
              <li>imaju prosječno 55 i više ECTS bodova u prethodnim godinama studiranja ili</li>
              <li> prvi put upisuju prvu godinu studija, a u srednjoj školi su imali prosjek 4,000 i više ili </li>
              <li>su u tekućoj akademskoj godini prvi put upisali prvu godinu prve razine studija i do dana prijave na natječaj stekli 30 i više ECTS bodova</li>
            </ul>
          <li>Studenti, djeca poginulih, umrlih i nestalih pod okolnostima iz članka 6., 7. i 8. <a href="https://www.zakon.hr/z/864/Zakon-o-za%C5%A1titi-vojnih-i-civilnih-invalida-rata">Zakona o zaštiti vojnih i civilnih invalida rata</a>, studenti koji su 
          civilni invalidi rata čije je oštećenje organizma nastalo pod okolnostima iz članka 8. navedenoga zakona te studenti, djeca mirnodopskih vojnih i civilnih invalida rata 1. skupine sa 100% oštećenjem organizma, koji:</li>
          <ul>
            <li>imaju prosječno 55 i više ECTS bodova u prethodnim godinama studiranja ili</li>
            <li>prvi put upisuju prvu godinu studija, a u srednjoj školi su imali prosjek 4,000 i više ili</li>
            <li>su u tekućoj akademskoj godini prvi put upisali prvu godinu prve razine studija i do dana prijave na natječaj stekli 30 i više ECTS bodova</li>
          </ul>
          <li>Studenti koji primaju potporu za obrazovanje prema propisima o hrvatskim braniteljima iz Domovinskog rata i članova njihovih obitelji, uz uvjet da:</li>
          <ul>
            <li>imaju prosječno 55 i više ECTS bodova u prethodnim godinama studiranja ili</li>
            <li>su u tekućoj akademskoj godini prvi put upisali prvu godinu prve razine studija i do dana prijave na natječaj stekli 30 i više ECTS bodova te da imaju potpisan ugovor o dodjeli studentske potpore (ne odnosi se na studente koji upisuju prvu godinu 
              studija te imaju ugovor o dodijeli potpore za srednjoškolsko obrazovanje)</li>
          </ul>
          <li>Studenti, djeca smrtno stradalih osoba iz članka 107. i studenti, djeca stradalih osoba 1. i 2. skupine iz članka 110. <a href="https://www.zakon.hr/z/834/Zakon-o-protuminskom-djelovanju">Zakona o protuminskom djelovanju</a>, koji:</li>
        <ul>
          <li>imaju prosječno 55 i više ECTS bodova u prethodnim godinama studiranja ili</li>
          <li>prvi put upisuju prvu godinu studija, a u srednjoj školi su imali prosjek 4,000 i više ili</li>
          <li>su u tekućoj akademskoj godini prvi put upisali prvu godinu prve razine studija i do dana prijave na natječaj stekli 30 i više ECTS bodova</li>
        </ul>
      </ol>
        Izravno pravo na subvencionirano stanovanje imaju i studenti koji <u>ostvaruju jedan od sljedećih uvjeta:</u>
      <ol>
        <li>Studenti kojima su oba roditelja umrla, nestala ili nepoznata.</li>
        <li>Studenti čiji su roditelji razvedeni (uključujući i djecu iz izvanbračnih zajednica), a preminuo je onaj kome su bili sudski dodijeljeni ili s kojim su živjeli, što se dokazuje odlukom o privremenom uzdržavanju nadležnoga centra za socijalnu skrb, donesenom
          sukladno odredbi članka 352. <a href="https://www.zakon.hr/z/88/Obiteljski-zakon">Obiteljskoga zakona</a> zbog propuštanja drugog roditelja da ispunjava obvezu uzdržavanja studenta. </li>
        <li>Studenti koji su bili smješteni u domove socijalne skrbi ili u udomiteljske obitelji.</li>
        <li>Studenti s invaliditetom od 1. do 5. kategorije invaliditeta (iznad 50% tjelesnog oštećenja), uključujući i studente s invaliditetom na poslijediplomskome sveučilišnom studiju. Status osoba iz ovoga stavka dokazuje se rješenjem o postotku tjelesnog oštećenja
          (invalidnosti) nadležne ustanove </li>
      </ol>
      </div>
      </div>
  </div>
  </div>
  <br>
  
<br>
</div>

<div id="prijaviProblem" class="stranicaDisabled">
 <br>
 <div class="columns">
  <div class="column is-2">
    
  </div>
  <div class="column is-8">
 <div class="notification is-danger is-light">
<h1 class="subtitle is-3">Prijavi problem</h1>
  <textarea class="textarea is-danger" placeholder="Warning textarea"></textarea>
</div>
</div>
<div class="column is-2">
    
</div>
 </div>
<br>
</div>



<footer class="footer">
  <div class="columns is-variable is-4">
    <div class="column is-one-third">
      <br><br><br><br><br><br><br>
      <a href="index.php">
       <img src="Logo3.png" height="100" width="100"></a>
    </div>
    <div class="column is-one-third" id="OMeni">
      <h3 class="title is-4">O meni</h3><br>
      Zovem se Tia Lneniček, maturantica<br>
      sam Tehničke škole Daruvar,<br>
      smijer: Tehničar za računalstvo.<br>
      Daljnje studiranje planiram nastaviti <br>
      na Rochester Institute of Technology, <br>
      smijer: Web and mobile computing u Zagrebu.<br><br>
      Ukoliko imate bilo kakvih pitanja i savjeta<br> za daljnji razvoj 
      i eventualno poboljšanje<br> stranice kontaktirajte me na:<br><br>
       <a href = "mailto: tia.lnenicek@gmail.com" class="link">tia.lnenicek@gmail.com</a><br><br>
       <a class="social" href="https://www.instagram.com/tia.lnenicek/?hl=en">
        <img alt="instagram" src="instagram.png" width="30" height="30" ></a>
        <a class="social" href="https://www.facebook.com/tia.lnenicek/">
            <img alt="facebook" src="facebook.png" width="30" height="30"></a>
    </div>
    <div class="column is-one-third" id="OstaliKontakti">
      <h3 class="title is-4">Ostali kontakti</h3><br>
      <b>Studentski Centar u Zagrebu:</b><br><a href = "mailto: smjestaj@sczg.hr" class="link">smjestaj@sczg.hr</a><br><hr id="FooterMail">
  <b>Studentska naselja:</b><br><br>
  SN "Stjepan Radić"<br>
  <a href = "mailto: snsradic@sczg.hr" class="link">snsradic@sczg.hr</a><br>
  <br>
  SN "Cvjetno naselje"<br>
  <a href = "mailto: sncvjetno@sczg.hr" class="link">sncvjetno@sczg.hr</a><br>
  <br>
  SN "Dr. Ante Starčević"<br>
  <a href = "mailto: snastarcevic@sczg.hr" class="link">snastarcevic@sczg.hr</a><br>
  <br>
  SN "Lašćina"<br>
  <a href = "mailto: snlascina@sczg.hr" class="link">snlascina@sczg.hr</a>
    </div>
  </div>

    <div class="content has-text-centered">
      <br><br><br>
      <p id="kontakt">Sva prava pridržana. &copy; 2021. </p>
    </div>
  </footer>

</div>


    <script src="kalkulator.js"></script>
</body>
</html>