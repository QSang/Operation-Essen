<?php
session_start();

$_SESSION['totalPrice'] += $_POST['price'];
?>