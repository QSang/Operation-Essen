<html>
<body>

<head>
<title>Kom Essen  </title>
<title> Lekker en snel geleverd </title>
</head>
<link href="theme.css" rel="stylesheet" type="text/css"/>



<div id="header"> 
    <div id="topmenu">
        <a href="index.php">Home</a>
        <a href="keuzemenu.php">Bestellen</a>
        <a href="faq.php">FAQ</a>
        <a href="contact.php">Contact</a>
        <a href="login2.php">Inloggen</a>
</div>
<span class="first_title"><h3>Kom Essen, Lekker en snel geleverd!</h3></span>

<div id="left_sidebar">
<div id="menu">
    <h3>Menu</h3>
    <a href="index.php">Home</a>
        <a href="keuzemenu.php">Bestellen</a>
        <a href="faq.php">FAQ</a>
        <a href="contact.php">Contact</a>
        <a href="login2.php">Inloggen</a>
</div>

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
            <form method = "POST" action = "dit.php">
                            <tr>
                                    <td>Username:</td>
                                    <td><input type = "text" name = "username" value="TimSwarts"></td>
                            </tr></br>
                            <tr>
                                    <td>Password:</td>
                                    <td><input type = "password" name = "password" value = "password"></td>
                            </tr></br>
                            <tr><td></td>
                                <?php//don't question the line above^?>
                                <td><input type = "submit" value = "Log in" name = "Login"></td>
                            <tr>
            </form>
            <?php//wachwoord vergeten:?>
            <tr><td></td><td><a href="forgottenPassword.php">Wachtwoord vergeten?</a></td></tr>
            </table>
    </section>



    <?php//registreren:?>
    <section id = "registreren">
        <b>Don't have an account yet?<br>please register:</b>
        <?php//gegevens invoeren:?>
            <table>
            <form method = "POST" action = "dit.php">
                            <tr>
                                    <td>Email:</td>
                                    <td><input type = "text" name = "email"></td>
                            </tr>
                            <tr>
                            <tr>
                                    <td>Username:</td>
                                    <td><input type = "text" name = "username"></td>
                            </tr>
                            <tr>
                                    <td>Password:</td>
                                    <td><input type = "password" name = "passwordConfirms"></td>
                            </tr></br>
                            <tr>
                                    <td>Confrim password:</td>
                                    <td><input type = "password" name = "password"></td>
                            </tr></br>
                            <tr><td></td>
                                <?php//don't question the line above^?>
                                <td><input type = "submit" value = "register" name = "register"></td>
                            <tr>
                            </table>
            </form>
    </section>
</div>



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
