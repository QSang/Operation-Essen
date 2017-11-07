<?php
$chosenMenu = $_POST['chosenMenu'];

switch ($chosenMenu) {
  case 'burger':
    include 'burgermenu.php';
  break;

  case 'pizza':
    include 'pizzamenu.php';
  break;

  case 'kip':
    include 'kipmenu.php';
     break;

   default:
  }   
?>

