<?php
$chosenMenu = $_POST['chosenMenu'];

switch ($chosenMenu) {
  case 'kip':
    include 'kipmenu.php';
  break;

  case 'vlees':
    include 'vleesmenu.php';
  break;

  case 'vis':
    include 'vismenu.php';
     break;

   default:
  }   
?>

