let prvaGod=document.querySelector('#txtPrvaGodina')
let drugaGod=document.querySelector('#txtDrugaGodina')
let trecaGod=document.querySelector('#txtTrecaGodina')
let cetvrtaGod=document.querySelector('#txtCetvrtaGodina')
let btnIzracunaj=document.querySelector('#btnIzracunaj')
let rez=document.querySelector('#rez')

let deficitarno=document.querySelector('#deficitarno')
let ostecenje=document.querySelector('#ostecenje')

let drzavnaNagradaEnb=document.querySelector('#drzavnaNagradaEnb')
let drzavnaNagradaDis=document.querySelector('#drzavnaNagradaDis')
let medunarodnaNemam=document.querySelector('#medunarodnaNemam')
let medunarodnaMjesto=document.querySelector('#medunarodnaMjesto')

letnavPrijava=document.querySelector('#navPrijava')
let navRegistracija=document.querySelector('#navRegistracija')
let navBrucosi=document.querySelector('#navBrucosi')
let navOStranici=document.querySelector('#navOStranici')
let navDrugaGodPreddiplomski=document.querySelector('#navDrugaGodPreddiplomski')
let navSubvencioniranoStanovanje=document.querySelector('#navSubvencioniranoStanovanje')
let navPrijaviProblem=document.querySelector('#navPrijaviProblem')

let prijava=document.querySelector('#prijava')
let registracija=document.querySelector('#registracija')
let stranica0=document.querySelector('#stranica0')
let stranica1=document.querySelector('#stranica1')
let stranica2=document.querySelector('#stranica2')
let drugaGodPreddiplomski=document.querySelector('#drugaGodPreddiplomski')
let subvencioniranoStanovanje=document.querySelector('#subvencioniranoStanovanje')
let prijaviProblem=document.querySelector('#prijaviProblem')
let btnBrucos=document.querySelector('#btnBrucos')
let rbtnDrzNagMj=document.querySelector('#rbtnDrzNagMj')

let preminuoDis=document.querySelector('#preminuoDis')
let preminuoEnb=document.querySelector('#preminuoEnb')
let rbtnNista=document.querySelector('#rbtnNista')
let rbtnPreminuo=document.querySelector('#rbtnPreminuo')

let razvedeniEnb=document.querySelector('#razvedeniEnb')
let razvedeniDis=document.querySelector('#razvedeniDis')
let rbtnNera=document.querySelector('#rbtnNera')
let rbtnRa=document.querySelector('#rbtnRa')

let nekoristi=document.querySelector('#nekoristi')
let koristi=document.querySelector('#koristi')
let prihodEnb=document.querySelector('#prihodEnb')
let prihodDis=document.querySelector('#prihodDis')

let nepoznatEnb=document.querySelector('#nepoznatEnb')
let nepoznatDis=document.querySelector('#nepoznatDis')
let nista=document.querySelector('#nista')
let preminuo=document.querySelector('#preminuo')


let txtBraceSestara=document.querySelector('#txtBraceSestara')
let txtTeskocaURazvoju=document.querySelector('#txtTeskocaURazvoju')
let txtBraceSestaraInvaliditet=document.querySelector('#txtBraceSestaraInvaliditet')

let txtStudentiMajkaOtac=document.querySelector('#txtStudentiMajkaOtac')


let bodovi = document.querySelectorAll(".check:checked")





document.addEventListener('DOMContentLoaded', () => {

    // Get all "navbar-burger" elements
    const $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);
  
    // Check if there are any navbar burgers
    if ($navbarBurgers.length > 0) {
  
      // Add a click event on each of them
      $navbarBurgers.forEach( el => {
        el.addEventListener('click', () => {
  
          // Get the target from the "data-target" attribute
          const target = el.dataset.target;
          const $target = document.getElementById(target);
  
          // Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
          el.classList.toggle('is-active');
          $target.classList.toggle('is-active');
  
        });
      });
    }
  
  });





  navBrucosi.addEventListener('click',()=>{
      
      stranica0.classList.add('stranicaDisabled');
      stranica2.classList.remove('stranicaDisabled');
  })

  navOStranici.addEventListener('click',()=>{
      
    stranica0.classList.add('stranicaDisabled');
    stranica1.classList.remove('stranicaDisabled');
})

    navDrugaGodPreddiplomski.addEventListener('click',()=>{
        
        stranica0.classList.add('stranicaDisabled');
        drugaGodPreddiplomski.classList.remove('stranicaDisabled');
    })

    navRegistracija.addEventListener('click',()=>{
        
        stranica0.classList.add('stranicaDisabled');
        registracija.classList.remove('stranicaDisabled');
    })

    navPrijava.addEventListener('click',()=>{
        
        stranica0.classList.add('stranicaDisabled');
        prijava.classList.remove('stranicaDisabled');
    })

    navSubvencioniranoStanovanje.addEventListener('click',()=>{
        
        stranica0.classList.add('stranicaDisabled');
        subvencioniranoStanovanje.classList.remove('stranicaDisabled');
    })


    navPrijaviProblem.addEventListener('click',()=>{
        
        stranica0.classList.add('stranicaDisabled');
        prijaviProblem.classList.remove('stranicaDisabled');
    })




/*
medunarodnaNemam.addEventListener('click',()=>{
   drzavnaNagradaEnb.classList.remove('drzavnaNagradaDisabled')
  // drzavnaNagradaDis.classList.add('drzavnaNagradaDisabled')

})
medunarodnaMjesto.addEventListener('click',()=>{
   drzavnaNagradaEnb.classList.add('drzavnaNagradaDisabled')
   drzavnaNagradaDis.classList.remove('drzavnaNagradaDisabled')
})
rbtnDrzNagMj.addEventListener('click',()=>{
    medunarodnaMjesto.classList.remove('medunarodnaMjesto')
    medunarodnaMjesto.classList.remove('medunarodnaNemam')
})



btnBrucos.addEventListener('click',() =>{
   stranica2.classList.remove('stranicaDisabled')
   stranica1.classList.add('stranicaDisabled')

} )
*/
rbtnRa.addEventListener('click',()=>{
      razvedeniEnb.classList.remove('razvedeniDisabled')
      razvedeniDis.classList.add('razvedeniDisabled')

})
rbtnNera.addEventListener('click',()=>{
      razvedeniEnb.classList.add('razvedeniDisabled')
      razvedeniDis.classList.remove('razvedeniDisabled')
})

nekoristi.addEventListener('click',()=>{
   prihodEnb.classList.remove('prihodDisabled')
   prihodDis.classList.add('prihodDisabled')
})
koristi.addEventListener('click',()=>{
   prihodEnb.classList.add('prihodDisabled')
   prihodDis.classList.remove('prihodDisabled')
})
nista.addEventListener('click',()=>{
   nepoznatEnb.classList.remove('nepoznatDisabled')
   nepoznatDis.classList.add('nepoznatDisabled')

})
preminuo.addEventListener('click',()=>{
   nepoznatEnb.classList.add('nepoznatDisabled')
   nepoznatDis.classList.remove('nepoznatDisabled')
})

$(document).ready(function(){
    //nakon što se stranica učitala

    greske=[false, false, false, false];

    $('#prosjek').submit(function(e){
        //tik prije slanja obrasca
        for (i in greske){
            if (greske[i]){
                alert('Ispravi podatke"');
                e.preventDefault();
                return;
            }
        }
    });
});
$('#t1').blur(function(){
    //nakon što t1 izgubi fokus

    var unos1 = $(this).val();
    unos1=parseFloat(unos1);
    var dotpos = $(this).val().indexOf(".");

    if (isNaN(unos1)|| dotpos < 1 || dotpos >1 || $(this).val().length <5){
        $('#greska0').text('Neispravan unos');
        greske[0] = true;
    }else{
        $('#greska0').text('');
        greske[0]=false;
    }
});
$('#t2').blur(function(){
    //nakon što t2 izgubi fokus

    var unos2 = $(this).val();
    unos2=parseFloat(unos2);
    var dotpos = $(this).val().indexOf(".");

    if (isNaN(unos2)|| dotpos < 1 || dotpos >1 || $(this).val().length <5){
        $('#greska1').text('Neispravan unos');
        greske[1] = true;
    }else{
        $('#greska1').text('');
        greske[1]=false;
    }
});
$('#t3').blur(function(){
    //nakon što t3 izgubi fokus

    var unos3 = $(this).val();
    unos3=parseFloat(unos3);
    var dotpos = $(this).val().indexOf(".");

    if (isNaN(unos3)|| dotpos < 1 || dotpos >1 || $(this).val().length <5){
        $('#greska2').text('Neispravan unos');
        greske[2] = true;
    }else{
        $('#greska2').text('');
        greske[2]=false;
    }
});
$('#t4').blur(function(){
    //nakon što t4 izgubi fokus

    var unos4 = $(this).val();
    unos4=parseFloat(unos4);
    var dotpos = $(this).val().indexOf(".");

    if (isNaN(unos4)|| dotpos < 1 || dotpos >1 || $(this).val().length <5){
        $('#greska3').text('Neispravan unos');
        greske[3] = true;
    }else{
        $('#greska3').text('');
        greske[3]=false;
    }
});


function provjeriDuljinu(x, nextName){
                    if(x.value.length >= x.maxLength){
                x.form.elements[nextName].focus();
                    }
                }


function tocka(e) {
   e.value=e.value.replace(/,/g, '.')
}



function Izracunaj() {

   var prosjek1 = parseFloat(document.prosjek.t1.value);
   var prosjek2 = parseFloat(document.prosjek.t2.value);
   var prosjek3 = parseFloat(document.prosjek.t3.value);
   var prosjek4 = parseFloat(document.prosjek.t4.value);

   var medunarodnaNemam = parseFloat(document.nagradaRB.medunarodnaNemam.value)
   var medunarodnaMjesto = parseFloat(document.nagradaRB.medunarodnaMjesto.value)
  // var drzavnaNemam = parseFloat(document.nagradaRB.rbtnDrzNagNe.value)
   var drzavnaMjesto = parseFloat(document.nagradaRB.rbtnDrzNagMj.value)

  


//za prosjek ocjena

   var ukupno=0;
   ukupno =(prosjek1 + prosjek2 + prosjek3 + prosjek4);
   ukupno=(Math.round(ukupno*1000)/1000).toFixed(3); //zbroj svih prosjeka
   ukupno=((Math.round(ukupno*1000)/1000)/4).toFixed(3);  // moj osobni prosjek
  
   ukupno =((Math.round(ukupno*1000)/1000)/4.314).toFixed(3); //moj prosjek / 4.314

   ukupno = ukupno*1000; //broj bodova


document.getElementById("rezultat_prosjeka").style.visibility = "visible";

document.getElementById("prosjek_svi").innerHTML = "Imate bodova: " + ukupno;




// za bodove na račun nagrada

/*document.getElementById("rezultat_nagrade").style.visibility = "visible";
document.getElementById("sve_nagrade").innerHTML = "Stanje bodova na račun nagrada : " + choice;
*/


//braće i sestre



btnIzracunaj.addEventListener('click',function(){
    // switch(invalidtet.value){
    // case
    // }
    //alert(radio_value);
   
    let drzNag;


    var ukupno=0;
   ukupno =(prosjek1 + prosjek2 + prosjek3 + prosjek4);
   ukupno=(Math.round(ukupno*1000)/1000).toFixed(3); //zbroj svih prosjeka
   ukupno=((Math.round(ukupno*1000)/1000)/4).toFixed(3);  // moj osobni prosjek
  
   ukupno =((Math.round(ukupno*1000)/1000)/4.314).toFixed(3); //moj prosjek / 4.314

   ukupno = ukupno*1000; //broj bodova


document.getElementById("rezultat_prosjeka").style.visibility = "visible";

document.getElementById("prosjek_svi").innerHTML = "Imate bodova: " + ukupno;



// za bodove na račun nagrada
    var choice=0;
   choices = document.getElementsByName("nagrada");
   for(var i=0; i<choices.length; i++){
       if(choices[i].checked){
           choice = choices[i].value;
       }
    }
 //Roditelj Preminuo, nestao ili nepoznat
    var socijalno=0;
   socijalni = document.getElementsByName("roditelj");
   for(var i=0; i<socijalni.length; i++){
       if(socijalni[i].checked){
        socijalno = socijalni[i].value;
       }
    }

    //Razvedeni roditelji DA/NE
    var razvedeniDANE =0;
   razvod = document.getElementsByName("razRod");
   for(var i=0; i<razvod.length; i++){
       if(razvod[i].checked){
        razvedeniDANE = razvod[i].value;
       }
    }

    //Zivim samo s jednim roditeljem ili oba
    var razvedeni =0;
   zivim = document.getElementsByName("razvedeni");
   for(var i=0; i<zivim.length; i++){
       if(zivim[i].checked){
        razvedeni = zivim[i].value;
       }
       
    }

    //Braca i sestre



    //minimalna naknada
    var naknada =0;
   minNaknada = document.getElementsByName("minimalna");
   for(var i=0; i<minNaknada.length; i++){
       if(minNaknada[i].checked){
        naknada = minNaknada[i].value;
       }
       
    }

    //student majka ili otac
    
       rez.innerHTML= ukupno
                        +parseFloat(nagrade.value)
                        +parseFloat(deficitarno.value)
                        //+parseFloat(ostecenje.value)
                        +parseFloat(choice)
                        +parseFloat(socijalno)
                        +parseFloat(razvedeniDANE)
                        +parseFloat(razvedeni)
                        +parseFloat(txtBraceSestara.value*150)
                        +parseFloat(txtTeskocaURazvoju.value*200)
                        +parseFloat(txtBraceSestaraInvaliditet.value*200)
                        +parseFloat(ostecenje.value)
                        +parseFloat(invaliditet.value)
                        +parseFloat(naknada)
                        +parseFloat(mjesecniENB.value)
                        +parseFloat(txtStudentiMajkaOtac.value*500)
                        +parseFloat(branitelji.value)

                        
            
                        
        
                        
       /*if(rbtnDrzNagMj.checked){
          drzNag=200
       }
       else{
          drzNag=0
       }
    */
                        
    
    })
}
var divs = new Array();
    divs[0] = "errIme";
    divs[1] = "errKorIme";
    divs[2] = "errEmail";
    divs[3] = "errPassword";
    divs[4] = "errConfirm";
    function validate()
    {
        var inputs = new Array();
        inputs[0] = document.getElementById('ime').value;
        inputs[1] = document.getElementById('korime').value;
        inputs[2] = document.getElementById('email').value;
        inputs[3] = document.getElementById('password').value;
        inputs[4] = document.getElementById('confirm').value;
        var errors = new Array();
        errors[0] = "<span style='color:'LightCoral'>Unesite ime</span>";
        errors[1] = "<span style='color:LightCoral'>Unesite korisničko ime</span>";
        errors[2] = "<span style='color:LightCoral'>Unesite email</span>";
        errors[3] = "<span style='color:LightCoral'>Unesite lozinku</span>";
        errors[4] = "<span style='color:LightCoral'>Potvrdite lozinku</span>";
        for (i in inputs)
        {
          var errMessage = errors[i];
          var div = divs[i];
          if (inputs[i] == "")
              document.getElementById(div).innerHTML = errMessage;
         else if (i==2)
              {
                var atpos=inputs[i].indexOf("@");
                var dotpos=inputs[i].lastIndexOf(".");
                if (atpos<1 || dotpos<atpos+2 || dotpos+2>=inputs[i].length)
                  document.getElementById('errEmail').innerHTML = "<span style='color: LightCoral'>Unesite ispravnu email adresu</span>";
                else
                  document.getElementById(div).innerHTML = "";
              }
              else if (i==4)
          {
            var first = document.getElementById('password').value;
            var second = document.getElementById('confirm').value;
            if (second != first)
              document.getElementById('errConfirm').innerHTML = "<span style='color: LightCoral'>Lozinke se ne podudaraju</span>";
            else
                 document.getElementById(div).innerHTML = "";
          }
          else
              document.getElementById(div).innerHTML = "";
         }
        }
