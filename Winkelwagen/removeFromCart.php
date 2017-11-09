<?php
session_start();

//Fooditems zitten nu in een array
//Door met unset te werken returned hij de value

$arrayId = $_POST['arrayId'];
unset($_SESSION['shop_cart'][$arrayId]);

header("Refresh: 0; winkelwagen.php");
?>