<html>
<body>


<title>Kom Essen  </title>
<title> Lekker en snel geleverd </title>

<link href="../index.css" rel="stylesheet" type="text/css"/>

<div id="header"> 
    <div id="topmenu">
    <a href="../index.php">Home</a>
    <a href="../Keuzemenu/keuzemenu.php">Bestellen</a>
    <a href="../FAQ/faq.php">FAQ</a>
    <a href="../Contact/contact.php">Contact</a>
    <a href="../Login/login.php">Inloggen</a>
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
    <a href="#">Bestellen</a>
</div>

<h1>Burger King®</h1>

<?php
$assortment = array();
$assortment['Bacon king'] = array('name' => "Bacon King", 'description' => "<h5>Echte Bacon Liefde. 100% flame-grilled beef, krokante bacon plakken, delicate-gesmolten kaas, mayonaise en ketchup.</h5>", 'price' => "€14.99");
$assortment['Hamburger'] = array('name' => "Hamburger", 'description' => "<h5>Eerst was er de burger. Toen kwam de King. De Hamburger van Burger King® is “the real thing”: een Flame-Grilled Burger met augurken, ketchup en mosterd tussen een heerlijk versgeroosterd sesambroodje.</h5>", 'price' => "€14.99");
$assortment['Whopper'] = array('name' => "Whopper", 'description' => "<h5>De WHOPPER® heeft eigenlijk geen uitleg nodig. Zodra je tanden in het versgeroosterde sesambroodje zinken en je de unieke BBQ-smaak van de Flame-Grilled burger proeft, snap je waarom de Whopper® onze concurrenten al sinds 1957 tot waanzin drijft. Het is de absolute Koning onder de burgers. Door velen gekopieerd maar nog nooit verbeterd.</h5>", 'price' => "€14.99");
$assortment['Big King'] = array('name' => "Big King", 'description' => "<h5>De Big King maakt zijn royale titel meer dan waar. Tussen het versgeroosterde sesambroodje bevindt zich de Koninklijke kern van twee heerlijke stukken Flame-Grilled Beef, een dikke plak Cheddar Cheese, augurken, knapperige sla, uitjes en de onovertroffen King Sauce. Heerlijk!</h5>", 'price' => "€14.99");
?>
<div class= "content-container">
    <table border="2px" width="50%" align="center">
        <?php
            foreach ($assortment as $key => $value) {
                ?>
                <tr>
                    <td>
                        <?php echo $value['name']."<br/>". $value['description'] ?>
                    </td>
                <td>
                    <form action="addcart.php" method="POST">
                        <input type = "hidden" name="chosenMenu" value="<?php echo $value['value']; ?>">
                        <input type = "submit" value="<?php echo $value['price']; ?>">
                    </form>
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