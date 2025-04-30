<?php

$product = ['susu', 'telor', 'tepung', 'cokelat'];

echo "<pre>";
print_r($product);
echo "</pre>";

foreach ($product as $key => $value) {
    echo "$value <br>";
}

echo '<br>';

for ($i=0; $i < count($product); $i++) {
    echo $product[$i] . "<br>";
}

// dengan for
$klereng = [5, 4, 3, 2, 1];

$total = 0;

for ($i = 0; $i < count($klereng); $i++) {
    $total += $klereng[$i];
}

echo "Total klereng: $total <br>";

// dengan foreach
$klereng = [5, 4, 3, 2, 1];

$jumlah = 0;

foreach ($klereng as $k) {
    $jumlah += $k;
}

echo "Total klereng: $jumlah <br>";