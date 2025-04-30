<?php

$murid = [ // namanya bracket
    // value => selector
    // id akan jadi value jika tak ada selectornya
    // id akan jadi index jika ada selectornya 
    ['id' => 1, 'nama' => 'abiyu', 'status' => 0],
    ['id' => 2, 'nama' => 'hamad', 'status' => 0],
    ['id' => 3, 'nama' => 'rasyid', 'status' => 0],
];

echo "<pre>";
print_r($murid);
echo "</pre>";

    //$variable[index][value]
echo $murid[0]['nama'];