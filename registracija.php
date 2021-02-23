<?php
include_once 'db_connection.php';


    $Ime=addslashes($_POST['Ime']);
    $KorisnickoIme=$_POST['KorIme'];
    $Email=$_POST['Email'];
    $Lozinka=$_POST['Lozinka'];


    $sql="INSERT INTO korisnik (Ime, KorisnickoIme, Email, Lozinka)  VALUES ( '".$_POST['Ime']."','".$_POST['KorIme']."', '".$_POST['Email']."','".$_POST['Lozinka']."')";
    $result=mysqli_query($db, $sql) or die("Greška");




?>