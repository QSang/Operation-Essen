<?php
session_start();

include ('../connect.php');

if (isset($_POST['fooditemsid'])){
    $fooditemid = mysqli_real_escape_string($db, $_POST['fooditemsid']);

    if (!$_SESSION['shop_cart']) {
        $_SESSION['shop_cart'] = array();
    }

    array_push($_SESSION['shop_cart'], $fooditemid);

    print_r($_SESSION['shop_cart']);
}
print_r($_POST);
$menu = $_POST['menu'];

if ($menu == "burger") {
    header("Refresh: 0; ../Keuzemenu/burgermenu.php");
} elseif ($menu == "pizza") {
    header("Refresh: 0; ../Keuzemenu/pizzamenu.php");
} elseif ($menu == "kip") {
    header("Refresh: 0; ../Keuzemenu/kipmenu.php");
} else {
    header("Refresh: 0; ../Keuzemenu/keuzemenu.php");
}

?>

