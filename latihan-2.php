<?php

$nama = ['rasyid' => 100, 'azema' => 80, 'hasby' => 50];

foreach ($nama as $key => $value) {
    if ($value >= 75) {
        echo $key . 'lulus<br>';
    } else {
        echo $key . 'tidak lulus<br>';
    }
}


$stok_buku = ['fiqh' => 5, 'arabiyyah' => 0, 'tauhid' => 5, 'english' => 5, 'kamus' => 0];
$buku_yang_dicari = 0;
$apakah_ada = false;

foreach ($stok_buku as $key => $value) {
    if ($value == $buku_yang_dicari) {
        $apakah_ada = true;
        break;
    }
}

if ($apakah_ada == true) {
    echo 'buku'. $key . 'habis';
} else {
    echo 'semua masih ada stoknya';
}