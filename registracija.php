<?php
session_start();


include_once 'db_connection.php';

$username = "";
$email    = "";
$errors = array(); 

    $Ime=addslashes($_POST['Ime']);
    $KorisnickoIme=$_POST['KorIme'];
    $Email=$_POST['Email'];
    $Lozinka=$_POST['Lozinka'];

    $user_check_query = "SELECT * FROM korisnik WHERE KorIme='$KorisnickoIme' OR Email='$Emaoč' LIMIT 1";
    $result = mysqli_query($db, $user_check_query);
    $user = mysqli_fetch_assoc($result);

    if ($user) { // if user exists
        if ($user['KorIme'] === $KorisnickoIme) {
          array_push($errors, "Korisničko ime već postoji");
        }
    
        if ($user['email'] === $email) {
          array_push($errors, "Email adresa već postoji");
        }
      }

      if (count($errors) == 0) {
        $password = md5($password_1);//encrypt the password before saving in the database
  

    $sql="INSERT INTO korisnik (Ime, KorisnickoIme, Email, Lozinka)  VALUES ( '".$_POST['Ime']."','".$_POST['KorIme']."', '".$_POST['Email']."','".$_POST['Lozinka']."')";
    $rezultat=mysqli_query($db, $sql) or die("Greška");

    $_SESSION['KorIme'] = $KorisnickoIme;
  	$_SESSION['success'] = "Uspješno ste se prijavili";
  	header('location: index.html');
      }
    
?>