<!DOCTYPE html>
<html>
<head>
<title>Komessen</title>
<link rel="stylesheet" type="text/css" href="menu.css">
</head>
<body>

<h1>Komessen</h1>
<h2>Choose your fish dish</h2>

<?php
$assortment = array();
$assortment['vissensoep'] = array('name' => "vissensoep", 'description' => "<h5>vispesoep met ui</h5>", 'price' => 14.99);
$assortment['vissate'] = array('name' => "vissate", 'description' => "<h5>vissate met rijst</h5>", 'price' => 14.99);
$assortment['viskerrie'] = array('name' => "kerrievisrijst", 'description' => "<h5>vis kerrie met rijst</h5>", 'price' => 14.99);
$assortment['vissenvleugels'] = array('name' => "vissenvleugels", 'description' => "<h5>vissenvleugels met rijst</h5>", 'price' => 14.99);
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