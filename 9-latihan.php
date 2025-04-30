<?php

// buat program yang mengecek apakah bilangan tersebut adalah bilangan positif atau negatif atau nol

$bilangan = 0;

if ($bilangan > 0) {
    echo "Angka $bilangan adalah bilangan positif";
} elseif ($bilangan < 0) {
    echo "Angka $bilangan adalah bilangan negatif";
} else {
    echo "Angka $bilangan adalah bilangan nol";
}