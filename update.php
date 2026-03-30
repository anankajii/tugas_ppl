<?php
session_start();

$id = $_POST['id'];
$qty = $_POST['qty'];

$_SESSION['cart'][$id]['qty'] = $qty; 
header("Location: cart.php");