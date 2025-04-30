<!-- buat login page sederhana -->

<?php

$username ='admin';
$password = 'salah';

if ($username == 'admin' && $password == 'admin') {
    echo 'login berhasil';
} else {
    echo 'login gagal,';
}