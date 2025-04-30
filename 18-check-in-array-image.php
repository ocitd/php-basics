<?php

$ext = ['jpg', 'jpeg', 'png', 'gif'];
$apa = 'jpg';

if (in_array($apa, $ext)) {
    echo $apa . ' adalah ekstensi gambar yang valid';
} else {
    echo $apa . ' bukan ekstensi gambar yang valid';
}