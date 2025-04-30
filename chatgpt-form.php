<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1>Data Belanja</h1>
        <form action="" method="post">
            <input type="text" name="namabarang" placeholder="Nama barang" required>
            <input type="number" name="jumlah" placeholder="Jumlah" min="1">
            <button type="submit">submit</button>
        </form>
        <?php
            if(isset($_POST['namabarang']) && isset($_POST['jumlah'])){
                $namabarang = htmlspecialchars ($_POST['namabarang']);
                $jumlah = (int)$_POST['jumlah'];
                if ($jumlah > 0) {
                    // Lanjutkan proses
                } else {
                    echo "Jumlah barang harus lebih dari 0.";
                }
                echo "Nama Barang : $namabarang <br>";
                echo "Jumlah : $jumlah <br>";
                echo "Total : Rp" . number_format($jumlah * 10000, 0, ',', '.');
            }
            ?>
    </div>
</body>
</html>