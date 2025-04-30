<?php
$peserta = [
    ["id" => 1, "nama" => "Hammad", "status" => "status", "poin" => 90],
    ["id" => 2, "nama" => "Azema", "status" => "status", "poin" => 80],
    ["id" => 3, "nama" => "Abiyu", "status" => "status", "poin" => 95],
    ["id" => 4, "nama" => "Fakhry", "status" => "status", "poin" => 55],
    ["id" => 5, "nama" => "Ziyad", "status" => "status", "poin" => 50],
];

$menang = "Menang";
$nyaris = "Nyaris Menang";
$gagal = "Gagal";

foreach($peserta as $index => $person){
    if ($person['poin'] >= 85) {
        echo $person['nama'] . ", " . $person['status'] . ": " . $menang. "<br>";
    } elseif ($person['poin'] >= 60 and $person['poin'] < 85) {
        echo $person['nama'] . ", " . $person['status'] . ": " . $nyaris. "<br>";
    } else {
        echo $person['nama'] . ", " . $person['status'] . ": " . $gagal. "<br>";

    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <table class="table table-bordered table-striped tablle-hover">
            <thead class="table-dark">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach($peserta as $index => $person){
                    echo "<tr>";
                        echo "<td>" . $index+1 . "</td>";

                        if ($person['poin'] >= 85) {
                            echo "<td>" . $person['nama'] . "</td>";
                        } elseif ($person['poin'] >= 60 and $person['poin'] < 85) {
                            echo "<td>" . $person['nama'] . "</td>";
                        } else {
                            echo "<td>" . $person['nama'] . "</td>";
                        }

                        if ($person['poin'] >= 85) {
                            echo "<td>" . "Menang" . "</td>";
                        } elseif ($person['poin'] >= 60 and $person['poin'] < 85) {
                            echo "<td>" . "Nyaris menang" . "</td>";
                        } else {
                            echo "<td>" . "Gagal" . "</td>";
                        }
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>