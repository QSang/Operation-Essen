<?php
$chosenMenu = $_POST['chosenMenu'];
switch ($chosenMenu) {
  case 'Burger King':
    include 'burgermenu.php';
  break;

  case 'Domino\'s':
    include 'pizzamenu.php';
  break;

  case 'KFC':
    include 'kipmenu.php';
     break;

   default:
  }   
?>

