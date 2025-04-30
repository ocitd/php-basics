<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <?php
    $nama = ['iphone 15 pro max', 'samsung s21 ultra', 'xiaomi mi 11 ultra'];
    $harga = [30000000, 18000000, 15000000];
    $stok = [5, 10, 15];

    echo '<table class="table table-striped table-bordered">';
        echo '<thead class="table-dark"><tr>';
            echo '<th>No</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Stock</th>';
        echo '</tr></thead>';
        echo '<tbody>';
        $nomor = 1;
        foreach ($nama as $key => $data) {
            echo '<tr>';
                echo '<td>'.$nomor.'</td>';
                echo '<td>'.$data.'</td>';
                echo '<td>'.$harga[$key].'</td>';
                echo '<td>'.$stok[$key].'</td>';
            echo '</tr>';
            $nomor++;
        }
        echo '</tbody>';
    echo '</table>';
    ?>
</body>
</html>