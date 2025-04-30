<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php dan html form</title>
    <style>
        body {
            font-family: Arial,;
        }
        input {
            border: 0;
            padding: 10px;
            margin-bottom: 5px;
            background-color: #efefef;
            border-radius: 4px;
            display: block;
        }
        button {
            background-color: darkblue;
            color: white;
            border: 0;
            padding: 10px 30px;
            border-radius: 4px;
        }
    </style>
</head>
<body>
    <form action="" method="post">
        <input type="text" name = "number1" placeholder="Masukkan angka">
        <input type="text" name = "number2" placeholder="Masukkan angka">
        <button type="submit" name="tombol">Jumlahkan</button>
    </form>
    <?php
    if (isset($_POST["tombol"])) {
        $number1 = $_POST["number1"];
        $number2 = $_POST["number2"];
        
        // Validasi input
        if (is_numeric($number1) && is_numeric($number2)) {
            $total = $number1 + $number2; // Lakukan penjumlahan jika input valid
            echo $number1 . " + " . $number2 . " = " . $total;
        } else {
            echo "Harap masukkan angka yang valid!";
        }
    }
    ?>
</body>
</html>