<html>
<body>

<title>Kom Essen  </title>
<title> Lekker en snel geleverd </title>

<link href="../index.css" rel="stylesheet" type="text/css"/>

<?php
include('../menu.php');
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
$lastname = $username = $passcode = $phonenumber = $emailadress = $city =  "";
?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$firstname = $_POST['username'];

	//Kijk of er een error is
	$hasError = false;

	// Set variabelen to update
	$username_new = $_POST['username']; 
	$firstname_new = $_POST['firstname'];
	$lastname_new = $_POST['lastname'];
	$email_new = $_POST['email'];
	$passcode_new = $_POST['passcode'];
	$city_new = $_POST['city'];
	$phone_new = $_POST['phone'];

	$update="UPDATE accounts_komessen SET username = '$username_new', First_name = '$firstname_new', Last_name = '$lastname_new', 
	email_adress ='$email_new', passcode ='$passcode_new', city = '$city_new', phone_number = '$phone_new' WHERE username = '$firstname';";

	if(mysqli_query($db, $update)){
		// Update is gelukt
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
		// Update is gefaalt
		echo "Het veranderen van de gegevens is niet gelukt, er was nog een veld open of niet goed ingevuld.";
	}
}

$firstname = $_SESSION['username'];
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
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" align="center"> 
Gebruikersnaam: <input type="text" name="username" value="<?php echo $_SESSION['username']; ?>" readonly>
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
Wachtwoord: <input type="password" name="passcode" value="<?php echo $wachtwoord;?>">
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