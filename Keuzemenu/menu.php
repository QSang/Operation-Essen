<?php
$chosenMenu = $_POST['chosenMenu'];

//change to switch statement

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

