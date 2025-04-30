<?php

// hampir dalam seluruh bahasa pemrograman array di dicirikan dengan siku atau bracket
// array dapat menyimpan lebih dari satu nilai dalam satu variabel
// array pasti selalu ada pada setiap bahasa pemrograman

// WARNING; dalam bahasa php wajib diakhiri titik koma (;) pada akhir baris jika tidak akan error

// didalam php cara mendeklarasikan variabel dengan dolar
// WARNING beda bahasa beda deklarasinya

// nilai array dapat berupa string, integer, float bilangan pecahan, boolean true false, object, array, 

$warna = ["apel", "jeruk", "mangga", "anggur", "melon"];

// cara untuk mengeluarkan seluruh isi elemen atau nilai array adalah dengan print_r()
// WARNING; gunakan tag pre agar lebih rapi dan juga agar tidak menjadi satu baris atau flex

echo "<pre>";
print_r($warna);
echo "</pre>";

// outputnya adalah :
// Array
// (
//     [0] => apel
//     [1] => jeruk
//     [2] => mangga
//     [3] => anggur
//     [4] => melon
// )

// cara mencetak nilai elemennya tinggal akses indeksnya

echo $warna[0]; // apel 