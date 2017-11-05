<html>
<body>


<title> Kom Essen </title>
<link href="theme.css" rel="stylesheet" type="text/css"/>


<div id="header"> 
    <div id="topmenu">
        <a href="index.php">Home</a>
        <a href="#">Bestellen</a>
        <a href="faq.php">FAQ</a>
        <a href="contact.php">Contact</a>
        <a href="#">Inloggen</a>
</div>
<span class="first tittle"><h3>Kom Essen!</h3></span>

<div id="left_sidebar">
<div id="menu">
    <h3>Menu</h3>
    <a href="index.php">Home</a>
        <a href="#">Bestellen</a>
        <a href="faq.php">FAQ</a>
        <a href="contact.php">Contact</a>
        <a href="#">Inloggen</a>
</div>

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
    <a href="#">Contact</a>
</div>

<h2> Contact </h2>
<p> Telefoonnummer: 0643520531</p>



<?php

$onderwerpErr = $naamErr = $telefoonErr = $emailErr = $textareaErr= "";
$onderwerp = $naam = $telefoon = $email = $textarea= "";

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    if(empty($_POST["onderwerp"])){
        $onderwerpErr = "Onderwerp is verplicht";
    }
    else{
        $onderwerp= test_input($_POST["onderwerp"]);
    }
    if (empty($_POST["naam"])){
        $naamErr = "Naam is verplicht";
    }
    else{
        $naam= test_input($_POST["naam"]);
        if (!preg_match("/^[a-zA-Z ]*$/",$naam)) { 
        $naamErr = "Alleen letters en spaties zijn toegestaan"; 		
    } 
    }
    if (empty($_POST["telefoon"])){
            $telefoonErr = "telefoonnummer is verplicht";
        }
    else{
         $telefoonnummer = test_input($_POST["telefoon"]);
}
    if(empty($_POST["email"])){
        $emailErr = "Email is verplicht";
}
    else{
        $email= test_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "E-mailadres is niet valide"; 
        	}
}
    if(empty($_POST["melding"])){
        $textareaErr = "Tekst is verplicht";
}
    else{
        echo "Bedankt voor het invullen, wij zullen zo spoedig mogelijk reageren";
}
}
?>


<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
<p>*Verplichte velden</p> 
<p>Onderwerp:</p>
<input type="text" name="onderwerp"><span class="error">*<?php echo $onderwerpErr; ?></span><br>

<p>Naam:</p>
<input type="text" name="naam"><span class="error">*<?php echo $naamErr; ?></span><br>

<p>Telefoonnummer:</p>
<input type="text" name="telefoon"><span class="error">*<?php echo $telefoonErr; ?></span><br>

<p>E-mail:</p>
<input type="text" name="email"><span class="error">*<?php echo $emailErr; ?><span><br>

<p>Bericht:</p>
<textarea name="melding" rows="10" cols="40"></textarea><span class="error">*<?php echo $textareaErr; ?></span><br>

<input type="submit" value="Verzenden">

</form>
</div>
<?php

function test_input($data){
    $data= trim($data);
    $data= stripslashes($data);
    $data= htmlspecialchars($data);
return $data;
}


if ($_SERVER["REQUEST_METHOD"] == "POST") { 
    $onderwerp = test_input($_POST['onderwerp']);
    $naam = test_input($_POST['naam']);
    $telefoonnummer = test_input($_POST['telefoon']);
    $email = test_input($_POST['email']);
    $textarea = test_input($_POST['melding']);
}




?>

<div id="right_sidebar">
    <h3> Openingstijden </h3>
    <p><b>Maandag:</b>15:00 - 00:00 </p>
    <p><b>Dinsdag:</b>15:00 - 00:00 </p>
    <p><b>Woensdag:</b>15:00 - 00:00 </p>
    <p><b>Donderdag:</b>15:00 - 00:00 </p>
    <p><b>Vrijdag:</b>15:00 - 02:00 </p>
    <p><b>Zaterdag:</b>15:00 - 02:00 </p>
    <p><b>Zondag:</b>15:00 - 02:00 </p>
</div>


<div id="footer"> 	
<p>Copyright &copy; <?php echo date("Y"); ?> Kom Essen</p> 
</div>



 </body>
 </html>