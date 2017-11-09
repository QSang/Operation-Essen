
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
// Connectie leggen met database
include('../connect.php');


// Contactgegevens van gebruiker Tim swarts

$checkName = $db->prepare("SELECT account_id, First_name, Last_name, username, passcode, phone_number, email_adress, join_date, city FROM accounts_komessen");
$checkName->execute();
$checkName->bind_result($accountid, $firstname, $lastname, $username, $passcode, $phonenumber, $emailadres, $joindate, $city);

while ($checkName->fetch()) {
	$assortment[$accountid] = array('account_id' => $accountid, 'First_name' => $firstname, 'Last_name' => $lastname, 'username' => $username, 
								'passcode' => $passcode, 'phone_number' => $phonenumber, 'email_adress' => $emailadres, 'join_date' => $joindate, 'city' => $city );
}

$checkName->close();
?>

<div class= "content-container">
<h1> Contactgevens van de klanten </h1>
<table border="2px" width="70%" align="center">
    <?php
    foreach ($assortment as $key => $value) {
        ?>
        <tr>
            <td>
               <?php echo "Account ID = ". $value['account_id']?>
            <td>
                <?php  echo  "Naam = ". $value['First_name']. " ". $value['Last_name']?>
            </td>
            <td>
                <?php echo "Gebruikersnaam = ".$value['username'] . "<br/>" . "Wachtwoord = ".$value['passcode'] . "<br/>" . "Telefoonnummer = ". $value['phone_number']. "<br/>" . "Emailadres = ". $value['email_adress'] . "<br/>" . "Joindate =  " . $value['join_date'] . "<br/>" . "Stad= " . $value['city'];  ?>
            </td>
            <td>
             <?php echo ("<td> <a href=\"updateklant2.php"."\"> Wijzig</a></td>");?>

            </td>
        </tr>
        <?php
    }
    ?>
</table>
</div>
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