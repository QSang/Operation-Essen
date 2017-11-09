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

<h1>Winkelwagen</h1>

<?php
include('../connect.php');

$winkelwagen = array();

// Create array with info of items from the shop_cart
foreach($_SESSION['shop_cart'] as $key => $artikel){
    $getMenu = $db->prepare("SELECT fooditems_id, vendor_id, price, description, fooditem_name FROM fooditems WHERE fooditems_id = '$artikel'");
    $getMenu->execute();
    $getMenu->bind_result($fooditems_id, $vendor_id, $price, $description, $fooditemname);
    while($getMenu->fetch()) {
        $winkelwagen[$key] = array('foodItemId' => $fooditems_id, 'vendorId' => $vendor_id, 'price' => $price, 'description' => $description, 'fooditemname' => $fooditemname);
    }
}
?>

<div class= "content-container">
    <table border="2px" width="50%" align="center">
        <?php
        $totalAmount = 0;
        $bezorgKosten = 4.99;        
        $totaleBezorgKosten = $totalAmount + $bezorgKosten;
        
        // Loop through array and set remove button (form)
        foreach ($winkelwagen as $key => $item) {
            $totalAmount += $item['price'];
            
            ?>
            <form action="removeFromCart.php" method="POST">
                <?php echo $item['fooditemname'] . " " . $item['price'] . "<br>"; ?>
                <input type = "hidden" name="arrayId" value="<?php echo $key; ?>">
                <input type = "submit" value="x">
            </form><br>
            <?php
        }

        echo "<p>Totale prijs: $totalAmount</p>";
        echo "<p>Bezorgkosten: $bezorgKosten</p>";
        echo "<p>Totale prijs met bezorgkosten: $totaleBezorgKosten</p>";
        
        ?>
        <form action="../Login/afreken.php" method="POST">
            <input type = "submit" value="afrekenen">
        </form><br>
        <?php
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