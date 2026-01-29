<?php

$nama_barang = "Baju Ultraman";
$harga_barang = 15000000;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>
<body>
    <p>Hello World</p>
    <p>
        <?php
        echo "Justine membeli baju " . $nama_barang . " seharga Rp " . $harga_barang . ".";
        ?>
    </p>
</body>
</html>