<html>
<body>

<title>Kom Essen  </title>
<title> Lekker en snel geleverd </title>

<link href="../index.css" rel="stylesheet" type="text/css"/>

<div id="header">
    <div id="topmenu">
        <a href="index.php">Home</a>
        <a href="keuzemenu.php">Bestellen</a>
        <a href="faq.php">FAQ</a>
        <a href="contact.php">Contact</a>
        <a href="Login2.php">Inloggen</a>
</div>
<span class="first_title"><h3>Kom Essen, Lekker en snel geleverd!</h3></span>

<div id="left_sidebar">
<div id="menu">
    <h3>Menu</h3>
    <a href="/index.php">Home</a>
        <a href="index.php">Bestellen</a>
        <a href="faq.php">FAQ</a>
        <a href="contact.php">Contact</a>
        <a href="Login2.php">Inloggen</a>
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
    <a href="/index.php">Home</a> &qt;
    <a href="/index.php">Home</a>
</div>
<h2>Met Kom Essen krijg de klant snel en lekker eten geleverd!</h2>
<div id="block">
  <section id = "blankDiv"></section>

  <center>
  <section id = "verwerken2">
    <?php
    include ('../connect.php'); // Verbindt het script de database

    if($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST)) {

    				$error_msg = "";

    				// random user id:
    				$account_id = rand(0, 999999);
            $First_name = mysqli_real_escape_string($db, $_POST['First_name']);
            $Last_name = mysqli_real_escape_string($db, $_POST['Last_name']);
            $username = mysqli_real_escape_string($db, $_POST['username']);
            $email = mysqli_real_escape_string($db, $_POST['email_adress']);
            $password = mysqli_real_escape_string($db,$_POST['password']);
            $phonenumber = mysqli_real_escape_string($db, $_POST['phonenumber']);
            $city = mysqli_real_escape_string($db, $_POST['city']);

            //controleer email:
            if(!preg_match("/^[_a-zA-Z0-9-]+(\.[_a-zA-Z0-9-]+)*@([a-zA-Z0-9-]+\.)+([a-zA-Z]{2,4})$/",$email)){
              $error_msg.="</br>"."<li class=\"formerror\">e-mail adres in niet geldig.</li>";
            }

    				// Als het wachtwoord korter is dan 6 symbolen
            if(strlen($password)<6){
              $error_msg.="</br>"."<li >Het wachtwoord moet minstens 6 tekens bevatten.</li>";
            }

    				// selecteer de ingevoerde email in de database om te kijken of die al bestaat
            $query = "SELECT * from accounts_komessen WHERE email_adress ='$email';";
    		    $result = mysqli_query($db, $query) or die ("FOUT: " . mysqli_error());

            if (mysqli_num_rows($result) > 0) {
    		        // e-mailadres al aanwezig in de database, foutmelding tonen
    		          $error_msg.="</br>"."<li class=\"formerror\">Dit email adress is al in gebruik.</li>";
    	      }

    				// Select de random user id en controleer of deze al bestaat in de database
    				$query = "SELECT * from accounts_komessen WHERE account_id ='$account_id';";
    		    $result = mysqli_query($db, $query) or die ("FOUT: " . mysqli_error());

            if (mysqli_num_rows($result) > 0) {
    		        // user id = al aanwezig in de database, genereer een nieuwe
    		          $idUser = rand(0, 999999);
    	      }

    				// Check of een van de velden niet juist is ingevuld
            if(strlen($error_msg) > 0) {
              echo ("</br>"."<p>U kunt zich niet registreren omdat:<p><ul>"."</br>");
           	  echo $error_msg;
           	  echo "</ul><p><a href=\"javascript:history.back(1)\">Klik hier om terug te gaan.</a></p><br/>";
            }
            else { // Als er geen error is, Insert de ingevulde account data in de database
    		        $query = ("INSERT INTO accounts_komessen (account_id, First_name, Last_name, username, phone_number, passcode , email_adress, city)
    		        	VALUES('$account_id','$First_name','$Last_name' ,'$username', '$phonenumber', '$password','$email', '$city')") or die (mysqli_error());
    		        $result = mysqli_query($db, $query);
    						If($result){ // Als de data succesvol is ingevult in de database
    							echo("<hr></br></br>"."De gegevens zijn succesvol opgeslagen in de database:<br>\n"."</br>");
    			        echo("<a href=\"login.php\">Naar het inlogscherm</a>");
    						}else{ // Er ging iets fout probeer opnieuw
    							echo("</br>"."Error er ging iets fout probeer het opnieuw"."</br>");
    						}

    	      }
    }
    
    ?>
  </section>
</center>
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
