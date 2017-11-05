<!DOCTYPE html>
<html>
<head>
<title>Kip</title>
<link rel="stylesheet" type="text/css" href="Eetmenu.css">
</head>
<body>

<h1>Kip</h1>
<h2>Pick where you want to eat</h2>

<?php
$assortment = array();
$assortment['kip'] = array('name' => "Kip", 'value' => 'kip', 'image' => "kip-logo.jpg" , 'description' => "pok pok <br/> test <br> test", 'price' => 14.99, );
$assortment['vlees'] = array('name' => "Vlees", 'value' => 'vlees', 'image' => "vlees-logo.png" , 'description' => "pok pok <br/> test <br> test", 'price' => 14.99, );
$assortment['vis'] = array('name' => "Vis", 'value' => 'vis', 'image' => "vis-logo.png" , 'description' => "pok pok <br/> test <br> test", 'price' => 14.99, );

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
                            <img src="<?php echo $value['image']; ?>" width="100px" height="90px" align="center">
                        </td>
                        <td>
                            <?php echo $value['description']; ?>
                        </td>
                        <td>
                            <?php echo $value['price']; ?>
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