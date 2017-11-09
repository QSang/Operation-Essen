<?php
//Houd de cart in de gaten
session_start();
if(isset($_SESSION["shop_cart"])){

}
else {
	$_SESSION["shop_cart"] = array ();
}
?>

<div id="header"> 
	<div id="topmenu">
	<a href="../index.php">Home</a>
	<a href="../Keuzemenu/keuzemenu.php">Bestellen</a>
	<a href="../FAQ/faq.php">FAQ</a>
	<a href="../Contact/contact.php">Contact</a>
	<a href="../Login/login.php">Inloggen</a>
	<a href="../Winkelwagen/winkelwagen.php">Winkelwagen</a>
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
	<a href="../Winkelwagen/winkelwagen.php">Winkelwagen</a>
</div>