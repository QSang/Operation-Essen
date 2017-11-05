<!DOCTYPE html>
<html>
<head>
<title>Komessen</title>
<link rel="stylesheet" type="text/css" href="keuzemenu.css">
</head>
<body>

<h1>Komessen</h1>
<h2>Pick where you want to eat</h2>

<?php
$assortment = array();
$assortment['kip'] = array('name' => "Kip", 'value' => 'kip', 'image' => "kip-logo.jpg" , 'description' => "pok pok <br/> chicken", 'price' => "25 min delivery <br/> 4.95 delivery costs <br/> free delivery from 15.00 <br/> 4/5 rating in 214 reviews");
$assortment['vlees'] = array('name' => "Vlees", 'value' => 'vlees', 'image' => "vlees-logo.png" , 'description' => "kraa kraa <br/> all kinds of meat with vegetable", 'price' => "40 min delivery <br/> 4.95 delivery costs <br/> free delivery from 15.00 <br/> 4/5 rating in 158 reviews");
$assortment['vis'] = array('name' => "Vis", 'value' => 'vis', 'image' => "vis-logo.png" , 'description' => "lil'fishy <br/> fishmeals ", 'price' => "25 min delivery <br/> 3.99 delivery costs <br/> free delivery from 15.00 <br/> 5/5 rating in 45 reviews");

?>
<div class= "content-container">
    <div id = "filter-list">
        <div id= "content"> 
            <table border="2px" width="50%" align="center">
                <?php
                foreach ($assortment as $key => $value) {
                    ?>
                    <tr>
                        <td>
                            <img src="<?php echo $value['image']; ?>" width="100px" height="90px" align="center" right="500px">
                        </td>
                        <td>
                            <?php echo $value['description']; ?>
                        </td>
                        <td>
                            <?php echo $value['price']; ?>
                        </td>
                        <td>
                            <form action="menu.php" method="POST">
                                <input type = "hidden" name="chosenMenu" value="<?php echo $value['value']; ?>">
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
</div>

</body>
</html>
<html>
<body>