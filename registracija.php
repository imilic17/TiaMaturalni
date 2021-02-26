<?php
session_start();


include_once 'db_connection.php';

$Ime="";
$KorisnickoIme = "";
$Email    = "";
$errors = array(); 

if (isset($_POST['reg_user'])) {
    $Ime= mysqli_real_escape_string($db, $_POST['Ime']);
    $KorisnickoIme=  mysqli_real_escape_string($db, $_POST['KorisnickoIme']);
    $Email= mysqli_real_escape_string($db, $_POST['Email']);
    $Lozinka= mysqli_real_escape_string($db, $_POST['Lozinka']);
    $Ponovljena_lozinka= mysqli_real_escape_string($db, $_POST['Ponovljena_lozinka']);

    if (empty($Ime)) { array_push($errors, "Niste unijeli ime"); }
    if (empty($KorisnickoIme)) { array_push($errors, "Niste unijeli korisničko ime"); }
    if (empty($Email)) { array_push($errors, "niste unijeli email"); }
    if (empty($Lozinka)) { array_push($errors, "Lozinka je obavezna"); }
    if ($Lozinka != $Ponovljena_lozinka) {
      array_push($errors, "Lozinke se ne podudaraju");
    }

    $user_check_query = "SELECT * FROM korisnik WHERE KorisnickoIme='$KorisnickoIme' OR Email='$Email' LIMIT 1";
    $result = mysqli_query($db, $user_check_query);
    $user = mysqli_fetch_assoc($result);

    if ($user) { // if user exists
        if ($user['KorisnickoIme'] === $KorisnickoIme) {
          array_push($errors, "Korisničko ime već postoji");
        }
    
        if ($user['Email'] === $Email) {
          array_push($errors, "Email adresa već postoji");
        }
      }

      if (count($errors) == 0) {
        $Lozinka = ($Lozinka);//encrypt the password before saving in the database - nije napravljeno
  

    $sql="INSERT INTO  isnik (Ime, KorisnickoIme, Email, Lozinka)  VALUES ( '".$_POST['Ime']."','".$_POST['KorisnickoIme']."', '".$_POST['Email']."','".$_POST['Lozinka']."')";
    mysqli_query($db, $sql);

    $_SESSION['KorisnickoIme'] = $KorisnickoIme;
  	$_SESSION['success'] = "Uspješno ste se prijavili";
  	header('location: index.php');
      }
}

//za login

if (isset($_POST['login_user'])) {
    $KorisnickoIme=$_POST['KorisnickoIme'];
    $Lozinka=$_POST['Lozinka'];
  
    if (empty($KorisnickoIme)) {
        array_push($errors, "Korisničko ime je obavezno za unos");
    }
    if (empty($Lozinka)) {
        array_push($errors, "Lozinka je obavezna");
    }
  
    if (count($errors) == 0) {
        $Lozinka = ($Lozinka);
        $query = "SELECT * FROM korisnik WHERE KorisnickoIme='$KorisnickoIme' AND Lozinka='$Lozinka'";
        $result = mysqli_query($db, $query) or die(mysqli_error($db));
        if (mysqli_num_rows($result) == 1) {
          $_SESSION['KorisnickoIme'] = $KorisnickoIme;
          $_SESSION['success'] = "Uspješno ste prijavljeni";
          header('location: index.php');
        }else {
            array_push($errors, "Korisničko ime i lozinka se ne podudaraju");
        }
    }
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
<<body">



<script src="kalkulator.js"></script>
</body>
</html>