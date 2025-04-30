<?php
// Array berisi nama-nama bulan
$bulan = [
    "Januari",
    "Februari",
    "Maret",
    "April",
    "Mei",
    "Juni",
    "Juli",
    "Agustus",
    "September",
    "Oktober",
    "November",
    "Desember"
];

// Menggunakan for untuk mencetak daftar bulan
for ($i = 0; $i < count($bulan); $i++) {
    echo ($i + 1) . ". " . $bulan[$i] . "<br>";
}
?>