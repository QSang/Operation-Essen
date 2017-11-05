<?php
$chosenMenu = $_POST['chosenMenu'];

//change to switch statement

switch ($chosenMenu) {
  case 'kip':
    include 'Kipmenu.php';
  break;

  case 'vlees':
    include 'Vleesmenu.php';
  break;
  
  case 'vis':
    include 'Vismenu.php';
     break;

   default:

}   
?>

