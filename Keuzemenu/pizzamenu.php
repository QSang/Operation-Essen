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
<?php
$assortment = array();
$assortment['kippensoep'] = array('name' => "kippensoep", 'description' => "<h5>kippesoep met ui</h5>", 'price' => "€14.99");
$assortment['kipsate'] = array('name' => "kipsate", 'description' => "<h5>kipsate met rijst</h5>", 'price' => "€14.99");
$assortment['kipkerrie'] = array('name' => "kerriekiprijst", 'description' => "<h5>kip kerrie met rijst</h5>", 'price' => "€14.99");
$assortment['kippenvleugels'] = array('name' => "kippenvleugels", 'description' => "<h5>kippenvleugels met rijst</h5>", 'price' => "€14.99");
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
                    <form action="menu.php" method="POST">
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