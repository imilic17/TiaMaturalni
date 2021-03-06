<?php
session_start(); 

  /*if (!isset($_SESSION['KorisnickoIme'])) {
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
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
<link rel="stylesheet" href="bulma-collapsible-master/dist/css/bulma-collapsible.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">


</head>
      
<div class="columns">
<div class="column is-11 is-offset-1">

<div id="accordion_first">
	<article class="message is-primary">
		<div class="message-header">
      
			<p>	Studenti koji imaju izravno pravo na subvencionirano stanovanje:</p> <a href="#collapsible-message-accordion-1" data-action="collapse"><div class="button">Prikaži </div></a>
		</div>
		<div id="collapsible-message-accordion-1" class="message-body is-collapsible" data-parent="accordion_first">
			<div class="message-body-content">
      <b>Izravno pravo na subvencionirano stanovanje prema kriteriju izvrsnosti ostvaruju studenti kojima mjesečni prihodi obitelji u prethodnoj kalendarskoj godini ne prelaze po članu obitelji iznos od 75% proračunske osnovice (2.494,50 kn)
        koja se utvrđuje svake godine odgovarajućim propisom i koji <u>ispunjavaju jedan od sljedećih uvjeta:</u> </b>
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
        <br>
        <b>Izravno pravo na subvencionirano stanovanje ostvaruju studenti kojima mjesečni prihodi njihove obitelji u prethodnoj kalendarskoj godini ne prelaze po članu obitelji iznos od 60% (1.995,60 kn) proračunske osnovice koja se utvrđuje svake godine 
        odgovarajućim propisom i koji <u>ispunjavaju jedan od sljedećih uvjeta:</u></b>
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
        <b>Izravno pravo na subvencionirano stanovanje imaju i studenti koji <u>ostvaruju jedan od sljedećih uvjeta:</u></b>
      <ol>
        <li>Studenti kojima su oba roditelja umrla, nestala ili nepoznata.</li>
        <li>Studenti čiji su roditelji razvedeni (uključujući i djecu iz izvanbračnih zajednica), a preminuo je onaj kome su bili sudski dodijeljeni ili s kojim su živjeli, što se dokazuje odlukom o privremenom uzdržavanju nadležnoga centra za socijalnu skrb, donesenom
          sukladno odredbi članka 352. <a href="https://www.zakon.hr/z/88/Obiteljski-zakon">Obiteljskoga zakona</a> zbog propuštanja drugog roditelja da ispunjava obvezu uzdržavanja studenta. </li>
        <li>Studenti koji su bili smješteni u domove socijalne skrbi ili u udomiteljske obitelji.</li>
        <li>Studenti s invaliditetom od 1. do 5. kategorije invaliditeta (iznad 50% tjelesnog oštećenja), uključujući i studente s invaliditetom na poslijediplomskome sveučilišnom studiju. Status osoba iz ovoga stavka dokazuje se rješenjem o postotku tjelesnog oštećenja
          (invalidnosti) nadležne ustanove </li>
      </ol>
			</p>
			</div>
		</div>
	</article>
	<article class="message is-warning">
		<div class="message-header">
			<p>Pravo na subvencionirani smještaj u studentskom domu imaju: </p>  <a href="#collapsible-message-accordion-2" data-action="collapse"><div class="button">Prikaži </div></a>
		</div>
		<div id="collapsible-message-accordion-2" class="message-body is-collapsible" data-parent="accordion_first">
			<div class="message-body-content">
      <ol>
      <li>Redoviti studenti, državljani Republike Hrvatske</li>
      <li>Redoviti studenti, državljani EU s prijavljenim boravkom u RH sa statusom stranca na stalnom boravku u RH</li>
      <li>Osobe sukladno Zakonu o međunarodnoj i privremenoj zaštiti, koje su upisane na visokim učilištima u RH</li>
      <li>Studenti s invaliditetom poslijediplomskih sveučilišnih studija</li>
    </ol>
			</div>
		</div>
	</article>
	<article class="message is-danger">
		<div class="message-header">
			<p>Pravo na subvencionirani smještaj u studentskom domu nemaju: </p> <a href="#collapsible-message-accordion-3" data-action="collapse"><div class="button">Prikaži </div></a>
		</div>
		<div id="collapsible-message-accordion-3" class="message-body is-collapsible" data-parent="accordion_first">
			<div class="message-body-content">
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
	</article>
</div>
</div>
</div>


<script src="bulma-collapsible-master/dist/js/bulma-collapsible.min.js"></script>
<script>

const bulmaCollapsibleElement=bulmaCollapsible.attach('.is-collapsible')

</script>

     

      
</body>
</html>