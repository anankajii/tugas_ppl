<?php
session_start();

$products = [
    ["nama" => "Baju", "harga" => 50000],
    ["nama" => "Celana", "harga" => 75000],
    ["nama" => "Sepatu", "harga" => 100000]
];

if (isset($_GET['add'])) {
    $id = $_GET['add'];

    $_SESSION['cart'][] = $products[$id];
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Shop</title>
</head>
<body>

<h2>Produk</h2>

<?php foreach ($products as $i => $p): ?>
    <p>
        <?= $p['nama'] ?> - <?= $p['harga'] ?>
        <a href="?add=<?= $i ?>">Tambah</a>
    </p>
<?php endforeach; ?>

<a href="cart.php">Lihat Keranjang</a>

</body>
</html>