<!DOCTYPE html>
<html>
<head>
<title>Komessen</title>
<link rel="stylesheet" type="text/css" href="Eetmenu.css">
</head>
<body>

<h1>Komessen</h1>
<h2>Pick where you want to eat</h2>

<?php
$assortment['Kip'] = array('afbeelding' => "<img src=\"kip-logo.jpg\" width=\"100\" height=\"90\" align=\"center\" right=\"500px\">" , 'beschrijving'=> "pok pok <br/> test <br> test", 'prijs'=>14.99,'button'=> "<form action=\"Kipmenu.php\" method=\"post\"><input type=\"submit\" value=\"Toon keuze\"></form>");
$assortment['Vlees']  = array('afbeelding' => "<img src=\"vlees-logo.png\" width=\"100\" height=\"90\" align=\"center\">", 'beschrijving'=> "kraa kraa", 'prijs'=>28.45, 'button'=> "<form action=\"Vleesmenu.php\" method=\"post\"><input type=\"submit\" value=\"Toon keuze\"></form>");
$assortment['Vis'] = array('afbeelding' => "", 'beschrijving'=> "lil fishy", 'prijs'=>34.95, 'button'=> "<form action=\"Kipmenu.php\" method=\"post\"><input type=\"submit\" value=\"Toon keuze\"></form>");
?>
<div class= "content-container">
    <div id = "filter-list">
        <div id= "content"> 

        <TABLE BORDER="2" WIDTH="50%" align="center">
                
        <?php
                
        ?>
        <ul>      
        <?php foreach ($assortment as $key => $value) { ?>
            <ul><?php echo "<tr>" . "<td width = 40%>" . $value['afbeelding']; "<td>" . "<td>"  ?> </ul>    
            <ul><?php echo "<td>" . $value['beschrijving'];"<td>" ?> </ul>    
            <ul><?php echo "<td>" . $value['prijs'];"<td>" ?> </ul>    
            <ul><?php echo "<td>" . $value['button'];"<td>" ?> </ul>    

        <?php } ?>
        </ul>
        </div>
    </div>
</div>

</body>
</html>
<html>
<body>