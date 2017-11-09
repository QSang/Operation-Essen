<html>
<body>

<title>Kom Essen  </title>
<title> Lekker en snel geleverd </title>

<link href="../index.css" rel="stylesheet" type="text/css"/>

<?php
include('../menu.html');
?>

<h3>Nieuws</h3>
<p>Kom Essen is dit jaar genomineerd voor de beste website voor het bestellen van eten! Stemmen dus!</p>
<h3>Tijdelijke actie</h3>
<p>Bestel eten voor 1 december 2017 en verdien een korting van 20% op het totale betaalbedrag</p>
<h3>Gratis eten?</h3>
<p>Als je het hele jaar door van deze website gebruikt maakt, verdien je een gratis maaltijd naar keuze!</p>
</div>


<div id="content">
<div id="breadcrumb">
    <a href="#">Home</a> &qt;
    <a href="#">Contactgegevens</a>
</div>
<?php

function inputTest($data){
    $data= trim($data);
    $data= stripslashes($data);
    $data= htmlspecialchars($data);
return $data;
}
// Database connectie maken
include('../connect.php');

// Een lege waarde toekennen aan de variabelen
$firstnameErr = $lastnameErr = $usernameErr = $passcodeErr = $phonenumberErr = $emailadressErr = $cityErr = "";
$firstname = $lastname = $username = $passcode = $phonenumber = $emailadress = $city =  "";

$query = "SELECT account_id, First_name, Last_name, username, passcode, phone_number, email_adress, join_date, city FROM accounts_komessen WHERE First_name = '$firstname'";

$result = mysqli_query($db, $query);
$gegevens = mysqli_fetch_assoc($result);

	$gebruikersnaam = $gegevens['username'];
	$voornaam = $gegevens['First_name'];
	$achternaam = $gegevens['Last_name'];
	$emailadres = $gegevens['email_adress'];
	$wachtwoord = $gegevens['passcode'];
	$stad = $gegevens['city'];
	$telefoon = $gegevens['phone_number'];

?>

<?php
if ($_SERVER["REQUEST_METHOD"]=="POST") {
	//Kijk of er een error is
	$hasError = false;
//testen of de velden zijn ingevuld
        if (empty($_POST['username'])) {
          $usernameErr="je moet een gebruikersnaam invullen";
        }
        else {
		  $username_new = mysqli_real_escape_string($db, inputTest($_POST['username']));
		  if (!preg_match("/^[a-zA-Z\d]*$/",$username_new)) {
		      			$usernameErr = "Alleen letters en cijfers zijn toegestaan";
						$hasError = true;
 		   			}
        }

        if (empty($_POST['firstname'])) {
          $firstnameErr="je moet een voornaam invullen ";
        }
        else {
          $firstname_new = mysqli_real_escape_string($db, inputTest($_POST['firstname']));
		  if (!preg_match("/^[a-zA-Z]*$/",$firstname_new)) {
		      			$firstnameErr = "Alleen letters zijn toegestaan";
		      			$hasError = true;
		  }
        }

        if (empty($_POST['lastname'])) {
          $lastnameErr="je moet een achternaam invullen";
        }
        else {
          $lastname_new = mysqli_real_escape_string($db, inputTest($_POST['lastname']));
		  		    	if (!preg_match("/^[a-zA-Z]*$/",$lastname_new)) {
		      			$lastnameErr = "Alleen letters zijn toegestaan";
		      			$hasError = true;
						}
        }
        if (empty($_POST['email'])) {
          $emailadressErr="je moet een emailadres invullen";
        }
        else {
          $email_new = mysqli_real_escape_string($db, inputTest($_POST['email']));
		  if (!filter_var($email_new, FILTER_VALIDATE_EMAIL)) {
      					$emailErr = "E-mail is niet valide";
      					$hasError = true;
		  }
        }
		if (empty($_POST['passcode'])) {
          $passcodeErr="je moet een wachtwoord invullen";
        }
        else {
          $passcode_new = mysqli_real_escape_string($db, inputTest($_POST['passcode']));
		  		    		if (!preg_match("/^[a-zA-Z\d ]*$/",$passcode_new)) {
		      			$adressErr = "Alleen letters en cijfers zijn toegestaan";
		      			$hasError = true;
							}
        }
		if (empty($_POST['city'])) {
          $cityErr="je moet een stad invullen";
        }
        else {
          $city_new = mysqli_real_escape_string($db, inputTest($_POST['city']));
			if (!preg_match("/^[a-zA-Z ]*$/",$city_new)) {
		      			$cityErr = "Alleen letters zijn toegestaan";
		      			$hasError = true;
			}
		}
		if (empty($_POST['phone'])) {
          $phonenumberErr="je moet een telefoonnummer invullen";
        }
        else {
          $phone_new = mysqli_real_escape_string($db, inputTest($_POST['phone']));
			if (!preg_match("/^[\d]*$/",$phone_new)) {
		      			$phoneErr = "Alleen cijfers zijn toegestaan";
		      			$hasError = true;
			}
		}
	if ($_SERVER["REQUEST_METHOD"]=="POST" AND !empty($username_new) AND !empty($firstname_new) AND !empty($lastname_new) AND !empty($email_new) AND !empty($passcode_new) AND !empty($city_new) AND !empty($phone_new) AND !$hasError){

    $update="UPDATE accounts_komessen SET username= '$username_new', First_name = '$firstname_new', Last_name = '$lastname_new', email ='$email_new', passcode ='$passcode_new', city = '$city_new', phone_number = '$phone_new' WHERE First_name = '$firstname';";

	          if(mysqli_query($db, $update)){
				  echo "het is gelukt!";
				  $gebruikersnaam = $username_new;
				  $voornaam = $firstname_new;
				  $achternaam = $lastname_new;
				  $emailadres = $email_new;
				  $wachtwoord = $passcode_new;
				  $stad = $city_new;
				  $telefoon = $phone_new;
			  }
			  else {
				  echo "Updaten is niet gelukt.";
			  }
    } else {
	echo "Het veranderen van de gegevens is niet gelukt, er was nog een veld open of niet goed ingevuld";
	}
}
?>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" align="center">  
Gebruikersnaam: <input type="text" name="username" value="<?php echo $gebruikersnaam;?>">
  			<span class="error">* <?php echo $usernameErr;?></span>
  			<br><br>
Voornaam: <input type="text" name="firstname" value="<?php echo $voornaam;?>">
  			<span class="error">* <?php echo $firstnameErr;?></span>
  			<br><br>
Achternaam: <input type="text" name="lastname" value="<?php echo $achternaam;?>">
  			<span class="error">* <?php echo $lastnameErr;?></span>
  			<br><br>
E-mail: <input type="text" name="email" value="<?php echo $emailadres;?>">
  			<span class="error">* <?php echo $emailadressErr;?></span>
  			<br><br>
Wachtwoord: <input type="text" name="passcode" value="<?php echo $wachtwoord;?>">
  			<span class="error">* <?php echo $passcodeErr;?></span>
  			<br><br>
Woonplaats: <input type="text" name="city" value="<?php echo $stad;?>">
  			<span class="error">* <?php echo $cityErr;?></span>
  			<br><br>
Telefoonnummer: <input type="text" name="phone" value="<?php echo $telefoon;?>">
  			<span class="error">* <?php echo $phonenumberErr;?></span>
  			<br><br>
  			<input type="submit" name="submit" value="Veranderen">
</form>
</div>


<div id="right_sidebar">
    <h3> Openingstijden </h3>
    <p><b>Maandag:</b> 15:00 - 00:00 </p>
    <p><b>Dinsdag:</b> 15:00 - 00:00 </p>
    <p><b>Woensdag:</b> 15:00 - 00:00 </p>
    <p><b>Donderdag:</b> 15:00 - 00:00 </p>
    <p><b>Vrijdag:</b> 15:00 - 02:00 </p>
    <p><b>Zaterdag:</b> 15:00 - 02:00 </p>
    <p><b>Zondag:</b> 15:00 - 02:00 </p>
</div>

<div id="footer"> 	
<p>Copyright &copy; <?php echo date("Y"); ?> Kom Essen</p> 
</div>





</body>
</html>