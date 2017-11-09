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

<?php
//Maak connectie met de database
include('../connect.php');

//Zoek naar de tabel en maak extra gegevens
$checkName = $db->prepare("SELECT vendor_name, email, phone_number, city, adress, delivery_time, delivery_costs, image, description FROM vendors");
$checkName->execute();
$checkName->bind_result($vendor, $email, $phoneNumber, $city, $address, $del_time, $del_cost, $image, $description);

//Checkt alle queries
while ($checkName->fetch()) {
	$assortment[$vendor] = array('name' => $vendor, 'email' => $email, 'phoneNumber' => $phoneNumber, 'city' => $city, 
								'adress' => $address, 'del_time' => $del_time, 'del_cost' => $del_cost, 'image' => $image, 'description' => $description );
} 
$checkName->close();
?>
<div class= "content-container">
        <table border="2px" width="70%" align="center">
            <?php
            //Gaat elke assortment bij langs en laat het ook zien
            foreach ($assortment as $key => $value) {
                ?>
                <tr>
                    <td>
                        <img src="../Afbeeldingen/<?php echo $value['image']; ?>" width="100px" height="90px" align="center" right="500px">
                    </td>
                    <td>
                        <?php echo $value['name']?>
                    </td>
                    <td>
                        <?php echo $value['description'];?>
                    </td>
                    <td>
                        <?php echo $value['email'] . "<br/>" . $value['phoneNumber'] . "<br/>" . $value['city']. "<br/>" . $value['adress'] . "<br/>" . "Bezorgtijd: " . $value['del_time'] . " min" ."<br/>" . "Bezorgkosten: €" . $value['del_cost'];  ?>
                    </td>
                    <td>
                        <form action="checkMenu.php" method="POST">
                            <input type = "hidden" name="chosenMenu" value="<?php echo $value['name']; ?>">
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