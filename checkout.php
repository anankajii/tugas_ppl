<?php
session_start();

$total = 0;

foreach ($_SESSION['cart'] as $item) {
    $total += $item['harga'];
}

$diskon = 10; 

$totalBayar = $total - ($total * $diskon);

echo "Total bayar: " . $totalBayar;