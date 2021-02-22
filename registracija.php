<?php
$server="localhost";
$username="root";
$password="";
$Baza="registracija";

$db=mysqli_connect ($server,$username,$password);
$db_selected=mysqli_select_db ($db,$Baza);

if(!$db){

    die("Baza neuspješno spojena:" .mysqli_connect_errno());
}

else{
    echo "Baza uspješno spojena";
}

?>