<!DOCTYPE html>
<html>
<head>
<title>Komessen</title>
<link rel="stylesheet" type="text/css" href="menu.css">
</head>
<body>

<h1>Komessen</h1>
<h2>Choose your chicken dish</h2>

<?php
$assortment = array();
$assortment['kippensoep'] = array('name' => "kippensoep", 'description' => "<h5>kippesoep met ui</h5>", 'price' => 14.99);
$assortment['kipsate'] = array('name' => "kipsate", 'description' => "<h5>kipsate met rijst</h5>", 'price' => 14.99);
$assortment['kipkerrie'] = array('name' => "kerriekiprijst", 'description' => "<h5>kip kerrie met rijst</h5>", 'price' => 14.99);
$assortment['kippenvleugels'] = array('name' => "kippenvleugels", 'description' => "<h5>kippenvleugels met rijst</h5>", 'price' => 14.99);
?>
<div class= "content-container">
    <div id= "content"> 
        <table border="2px" width="50%" align="center">
            <?php
            foreach ($assortment as $key => $value) {
                ?>
                <tr>
                    <td>
                        <?php echo $value['name']."<br/>". $value['description'] ?>
                    </td>
                <td>
                    <form action="menu.php" method="POST">
                        <input type = "hidden" name="chosenMenu" value="<?php echo $value['value']; ?>">
                        <input type = "submit" value="<?php echo $value['price']; ?>">
                    </form>
                </td>
                </tr>

                <?php
            }
            ?>
        </table>
</body>
</html>
<html>
<body>