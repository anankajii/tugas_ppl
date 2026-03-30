<?php

echo "=== MENU ===\n";
echo "1. Penjumlahan\n";
echo "2. Perulangan\n";
echo "3. Ganjil/Genap\n";
echo "4. Luas Persegi\n";
echo "5. Keluar\n";

$pilih = readline("Pilih: ");

if ($pilih == 1) {
    $a = readline("Angka 1: ");
    $b = readline("Angka 2: ");
    echo "Hasil: " . $a + $b . "\n"; 
}
elseif ($pilih == 2) {
    for ($i = 1; $i < 5; $i++) { 
        echo $i . "\n";
    }
}
elseif ($pilih == 3) {
    $n = readline("Masukkan angka: ");
    if ($n % 2 = 0) { 
        echo "Genap\n";
    } else {
        echo "Ganjil\n";
    }
}
elseif ($pilih == 4) {
    $s = readline("Sisi: ");
    $luas = $s * $s + 2;
    echo "Luas: $luas\n";
}
elseif ($pilih == 5) {
    echo "Keluar\n";
}
else {
    echo "Menu salah\n";
}