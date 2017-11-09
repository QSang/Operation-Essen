<html>
<body>

<head>
<title>Kom Essen  </title>
<title> Lekker en snel geleverd </title>
</head>
<link href="../index.css" rel="stylesheet" type="text/css"/>

<?php
include("../menu.php");
?>


<div id="header"> 
    <div id="topmenu">

<a href="../index.php">Home</a>
<a href="../Keuzemenu/keuzemenu.php">Bestellen</a>
<a href="../FAQ/faq.php">FAQ</a>
<a href="../Contact/contact.php">Contact</a>
<a href="../Login/login.php">Inloggen</a>
<a href="contactgegevens.php">Contactgegevens</a>
</div>
<span class="first_title"><h3>Kom Essen, Lekker en snel geleverd!</h3></span>

<div id="left_sidebar">
<div id="menu">
    <h3>Menu</h3>
    <a href="../index.php">Home</a>
    <a href="../Keuzemenu/keuzemenu.php">Bestellen</a>
    <a href="../FAQ/faq.php">FAQ</a>
    <a href="../Contact/contact.php">Contact</a>
    <a href="../Login/login.php">Inloggen</a>
    <a href="../Login/contactgegevens.php">Contactgegevens</a>
</div>
<?php
include("../connect.php");
?>

<h3>Nieuws</h3>
<p>Kom Essen is dit jaar genomineerd voor de beste website voor het bestellen van eten! Stemmen dus!</p>
<h3>Tijdelijke actie</h3>
<p>Bestel eten voor 1 december 2017 en verdien een korting van 20% op het totale betaalbedrag</p>
<h3>Gratis eten?</h3>
<p>Als je het hele jaar door van deze website gebruikt maakt, verdien je een gratis maaltijd naar keuze!</p>
</div>

<?php//de rest?>
<div id="content">
<div id="breadcrumb">
    <a href="#">Home</a> &qt;
    <a href="#">Inloggen</a>
</div>
<section id = "blankDiv"></section>
    <section id = "inlogGegevens">
        <b> already have an account?<br>Log in:</b>
        <?php//inlog gegevens invoeren?>
            <table>
            <form method = "POST" action = "verwerken.php">
                            <tr>
                                    <td>Username:</td>
                                    <td><input type = "text" name = "username" value="qsang12"></td>
                            </tr></br>
                            <tr>
                                    <td>Password:</td>
                                    <td><input type = "password" name = "password" value = "test123"></td>
                            </tr></br>
                            <tr><td></td>
                                <?php//don't question the line above^?>
                                <td><input type = "submit" value = "Log in" name = "Login"></td>
                            <tr>
            </form>
            <?php//wachwoord vergeten:?>
            <tr><td></td><td><a href="forgottenPassword.php">I forgot my password!</a></td></tr>
            </table>
    </section>



    <?php//registreren:?>
    <section id = "registreren">
        <b>Don't have an account yet?<br>please register:</b>
        <?php//gegevens invoeren:?>
            <table>
            <form method = "POST" action = "verwerken1.php">


                            <tr>
                                    <td>First name:</td>
                                    <td><input type = "text" name = "First_name"></td>
                            </tr>
                            <tr>
                                    <td>Last name:</td>
                                    <td><input type = "text" name = "Last_name"></td>
                            </tr>
                            <tr>
                                    <td>Email:</td>
                                    <td><input type = "text" name = "email_adress"></td>
                            </tr>
                            <tr>
                            <tr>
                                    <td>Username:</td>
                                    <td><input type = "text" name = "username"></td>
                            </tr>
                            <tr>
                                    <td>Phonenumber:</td>
                                    <td><input type = "text" name = "phonenumber"></td>
                            </tr>
                            <tr>
                                    <td>Adress:</td>
                                    <td><input type = "text" name = "adress"></td>
                            </tr></br>
                            <tr>
                                    <td>City:</td>
                                    <td><input type = "text" name = "city"></td>
                            </tr>
                            <tr>
                                    <td>Password:</td>
                                    <td><input type = "password" name = "passwordConfirm"></td>
                            </tr></br>
                            <tr>
                                    <td>Confirm password:</td>
                                    <td><input type = "password" name = "password"></td>
                            </tr>
                            <tr><td></td>

                                <td><input type = "submit" value = "Registreer" name = "register"></td>
                            <tr>
                            </table>
            </form>
    </section>
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