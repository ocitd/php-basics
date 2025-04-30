<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            border-collapse: collapse;
            font-family: arial;
            width: 500px;
        }
        thead > tr {
            background-color: #333;
            color: #DDD;
        }
        thead > tr > td{
            text-align: left;
        }
        th, td{
            padding: 10px;
            border: solid 1px #AAA;
        }
        tbody > tr:nth-child(odd) {
            background-color: #EFEFEF;
        }
    </style>
</head>
<body>
<?php

$murid = [ // namanya bracket
    // value => selector
    // id akan jadi value jika tak ada selectornya
    // id akan jadi index jika ada selectornya 
    ['id' => 1, 'nama' => 'abiyu', 'status' => 0],
    ['id' => 2, 'nama' => 'hamad', 'status' => 0],
    ['id' => 3, 'nama' => 'rasyid', 'status' => 1],
    ['id' => 4, 'nama' => 'hasby', 'status' => 1],
    ['id' => 5, 'nama' => 'azema', 'status' => 1],
];

?>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>NAMA</th>
                <th>STATUS</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($murid as $m) : ?>
                <tr>
                    <td><?= $m['id'] ?></td>
                    <td><?= $m['nama'] ?></td>
                    <td><?= $m['status'] ?></td>
                </tr>
                <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>