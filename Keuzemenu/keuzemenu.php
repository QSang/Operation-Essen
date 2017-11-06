<html>
<body>

<title>Kom Essen  </title>
<title> Lekker en snel geleverd </title>

<link href="index.css" rel="stylesheet" type="text/css"/>

<div id="header"> 
    <div id="topmenu">
        <a href="index.php">Home</a>
        <a href="./Eetmenu/keuzemenu.php">Bestellen</a>
        <a href="faq.php">FAQ</a>
        <a href="contact.php">Contact</a>
        <a href="login.php">Inloggen</a>
</div>

<span class="first_title"><h3>Kom Essen, Lekker en snel geleverd!</h3></span>

<div id="left_sidebar">
    <div id="menu">
        <h3>Menu</h3>
        <a href="#">Home</a>
        <a href="index.php">Bestellen</a>
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
<?php
$assortment = array();
$assortment['kip'] = array('name' => "Kip", 'value' => 'kip', 'image' => "kip-logo.jpg" , 'description' => "pok pok <br/> chicken", 'price' => "25 min delivery <br/> 4.95 delivery costs <br/> free delivery from 15.00 <br/> 4/5 rating in 214 reviews");
$assortment['vlees'] = array('name' => "Vlees", 'value' => 'vlees', 'image' => "vlees-logo.png" , 'description' => "kraa kraa <br/> all kinds of meat with vegetable", 'price' => "40 min delivery <br/> 4.95 delivery costs <br/> free delivery from 15.00 <br/> 4/5 rating in 158 reviews");
$assortment['vis'] = array('name' => "Vis", 'value' => 'vis', 'image' => "vis-logo.png" , 'description' => "lil'fishy <br/> fishmeals ", 'price' => "25 min delivery <br/> 3.99 delivery costs <br/> free delivery from 15.00 <br/> 5/5 rating in 45 reviews");

?>
<div class= "content-container">
    <div id = "filter-list">
        <div id= "content"> 
            <table border="2px" width="50%" align="center">
                <?php
                foreach ($assortment as $key => $value) {
                    ?>
                    <tr>
                        <td>
                            <img src="<?php echo $value['image']; ?>" width="100px" height="90px" align="center" right="500px">
                        </td>
                        <td>
                            <?php echo $value['description']; ?>
                        </td>
                        <td>
                            <?php echo $value['price']; ?>
                        </td>
                        <td>
                            <form action="menu.php" method="POST">
                                <input type = "hidden" name="chosenMenu" value="<?php echo $value['value']; ?>">
                                <input type = "submit" value="Bestel hier">
                            </form>
                        </td>
                    </tr>
                    <?php
                }
                ?>
            </table>
        </div>
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