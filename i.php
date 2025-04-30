<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
    <input type="text" name="satu" placeholder="masukan angka">
    <input type="text" name="dua" placeholder="masukan angka">
    <input type="submit" name="submit" value="kirim">
    </form>
    <?php
    if (isset($_POST['submit'])) {
        $satu = $_POST['satu'];
        $dua = $_POST['dua'];
        echo "Hasil penjumlahan: " . ($satu + $dua);
    }
    ?>
</body>
</html>