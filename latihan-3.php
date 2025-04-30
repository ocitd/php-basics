<?php

$bulan = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];

echo '<pre>';
foreach ($bulan as $index => $namaBulan) {
    echo ($index + 1) . ". $namaBulan\n";
}
echo '</pre>';

for ($i = 0; $i < 7; $i+=2) {
    if ($i < 6) {
        echo "$i adalah bilangan genap<br>";
    } else {
        echo "$i adalah bilangan genap banget!<br>";
    }
}

for ($i = 0; $i < 7; $i+=2) {
    echo $i == 6 ? "$i adalah bilangan genap banget!<br>" : "$i adalah bilangan genap<br>";
}