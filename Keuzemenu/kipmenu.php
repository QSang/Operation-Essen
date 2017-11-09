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
    <a href="#">Bestellen</a>
</div>

<h1>KFC®</h1>

<?php
include('../connect.php');

$getMenu = $db->prepare("SELECT fooditems_id, vendor_id, price, description, fooditem_name FROM fooditems WHERE vendor_id = 3");

$getMenu->execute();

$getMenu->bind_result($fooditems_id, $vendor_id, $price, $description, $fooditemname);

while ($getMenu->fetch()) {
	$assortment[$fooditems_id] = array('foodItemId' => $fooditems_id, 'vendorId' => $vendor_id, 'price' => $price, 'description' => $description, 'fooditemname' => $fooditemname);
}

$getMenu->close();
?>

<div class= "content-container">
    <table border="2px" width="50%" align="center">
        <?php
            foreach ($assortment as $key => $value) {
                ?>
                <tr>
                    <td>
                        <?php echo $value['fooditemname']."<br/>" . "<br/>". $value['description'] ?>
                    </td>
                <td>
                    <form action="../Winkelwagen/addCart.php" method="POST">
                        <input type = "hidden" name="menu" value="kip">
                        <input type = "hidden" name="fooditemsid" value="<?php echo $value['foodItemId']; ?>">
                        <input type = "hidden" name="price" value="<?php echo $value['price']; ?>">
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