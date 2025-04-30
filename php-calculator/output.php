<?php
// jika tombol submit nya diklik 
if(isset($_POST['proses'])) {
// ambil nilai di input
$variabel_angka1 = $_POST["angka1"]; //angka1 dari name="angka1
$variabel_angka2 = $_POST["angka2"]; //angka2 dari name="angka2
// jika lagsung masuk file ini dari url browser
    if (!is_numeric($variabel_angka1) or !is_numeric($variabel_angka2)) {
        // jika input kosong dan bukan angka
        echo "error!";
    } else {
        // jika input tidak kosong dan angka
        $hasil = $variabel_angka1 + $variabel_angka2;
        echo "Hasilnya adalah: $hasil";
    }
} else {
    // jika input tidak kosong dan angka
    $hasil = $variabel_angka1 + $variabel_angka2;
    echo "Hasilnya adalah: $hasil";
}

// semoga allah mudahkan amiin