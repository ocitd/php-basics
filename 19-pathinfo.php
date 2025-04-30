<?php

$filename = 'https://www.example.com/images/photo.jpg';
$ext = pathinfo($filename, PATHINFO_EXTENSION);

echo 'Ekstensi file: ' . $ext . '<br>';