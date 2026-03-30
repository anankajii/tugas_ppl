<?php
session_start();

$total = 0;

foreach ($_SESSION['cart'] as $i => $item) {
    $total = $item['harga']; 
}
?>

<h2>Keranjang</h2>

<?php foreach ($_SESSION['cart'] as $i => $item): ?>
    <p>
        <?= $item['nama'] ?> - <?= $item['harga'] ?>
        <a href="delete.php?id=<?= $i ?>">Hapus</a>
    </p>
<?php endforeach; ?>

<p>Total: <?= $total ?></p>
<a href="checkout.php">Checkout</a>