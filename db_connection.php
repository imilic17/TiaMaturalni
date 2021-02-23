<?php
$server="localhost";
$username="root";
$password="";
$Baza="tiamaturalni";

$db=mysqli_connect ($server,$username,$password);


if($db){
    echo "Spojeni ste sa serverom <br>";

    $db_selected=mysqli_select_db ($db,$Baza);
    
    if($db_selected){
        echo "Baza podataka je uspješno odabrana";
    }
    else{
        echo "Došlo je do pogreške kod odabira baze";
    }
}

else{
    echo "Došlo je do pogreške prilikom spajanja";
}

?>