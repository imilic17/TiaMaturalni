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
  include "./header.php"
?>

<!--stranica2-->
<div id="navBrucosi">
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
<p style="color:black;" id = "prosjek_svi"></p>

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

<script src="kalkulator.js"></script>
<?php include "./footer.php" ?>
</body>
</html>
