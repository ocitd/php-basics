<?php

$nilai= $_POST['nilai'];

if ($nilai >= 90) {
    echo "Nilai A";
} elseif ($nilai >= 80) {
    echo "Nilai B";
} else {
    echo "Nilai E";
}