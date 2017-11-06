<!DOCTYPE html>
<html>
<head>
<title>Komessen</title>
<link rel="stylesheet" type="text/css" href="menu.css">
</head>
<body>

<h1>Komessen</h1>
<h2>Choose your meat dish</h2>

<?php
$assortment = array();
$assortment['vleessoep'] = array('name' => "vleessoep", 'description' => "<h5>vleessoep met ui</h5>", 'price' => 14.99);
$assortment['vleessate'] = array('name' => "vleessate", 'description' => "<h5>vleessate met rijst</h5>", 'price' => 14.99);
$assortment['vleeskerrie'] = array('name' => "kerrievleesrijst", 'description' => "<h5>vlees kerrie met rijst</h5>", 'price' => 14.99);
$assortment['vleessenvleugels'] = array('name' => "vleessenvleugels", 'description' => "<h5>vleessenvleugels met rijst</h5>", 'price' => 14.99);
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