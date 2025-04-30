<?php

$hostname = 'localhost';
$database = 'php_mysql_pdo';
$username = 'root';
$password = '';

try {
    $pdo = new PDO("mysql:host=$hostname;dbname=$database", $username, $password);
    echo "success";
} catch (Throwable $error) {
    echo $error->getMessage();
}

try {
    $pdo = new PDO("mysql:host=$hostname;dbname=$database", $username, $password);
    echo "success";
} catch (PDOException $error) {
    echo $error->getMessage();
}

try {
    $pdo = new PDO("mysql:host=$hostname;dbname=$database", $username, $password);
    echo "success";
} catch (PDOException $error) {
    echo $error->getMessage();
}

try {
    $pdo = new PDO("mysql:host=$hostname;dbname=$database", $username, $password);
    echo "success";
} catch (PDOException $error) {
    echo $error->getMessage();
}

try {
    $pdo = new PDO("mysql:host=$hostname;dbname=$database", $username, $password);
    echo "success";
} catch (PDOException $error) {
    echo $error->getMessage();
}

try {
    $pdo = new PDO("mysql:host=$hostname;dbname=$database", $username, $password);
    echo "success";
} catch (PDOExeption $error) {
    echo $error->getMessage();
}

try {
    $pdo = new pdo("mysql:host=$hostname;dbname=$database", $username, $password);
    echo "success";
} catch (PDOException $error) {
    echo $error->getmessage();
}
try {
    $pdo = new PDO("mysql:host=$hostname;dbname=$database", $username, $password);
    echo "success";
} catch (PDOException $error) {
    echo $error->getMessage();
}

try {
    $pdo = new PDO("mysql:host=$hostname;dbname=$database", $username, $password);
    echo "success";
} catch (PDOExeption $error) {
    echo $error->getMessage();
}

try {
    $pdo = new pdo("mysql:host=$hostname;dbname=$database", $username, $password);
    echo "success";
} catch (PDOException $error) {
    echo $error->getmessage();
}

try {
    $pdo = new PDO("mysql:host=$hostname;dbname=$database", $username, $password);
    echo "success";
} catch (PDOException $error) {
    echo $error->getMessage();
}

try {
    $pdo = new PDO("mysql:host=$hostname;dbname=$database", $username, $password);
    echo "success";
} catch (PDOExeption $error) {
    echo $error->getMessage();
}

try {
    $pdo = new pdo("mysql:host=$hostname;dbname=$database", $username, $password);
    echo "success";
} catch (PDOException $error) {
    echo $error->getmessage();
}

try {
    $pdo = new PDO("mysql:host=$hostname;dbname=$database", $username, $password);
    echo "success";
} catch (PDOException $error) {
    echo $error->getMessage();
}

try {
    $pdo = new PDO("mysql:host=$hostname;dbname=$database", $username, $password);
} catch (PDOException $error) {
    echo $error->getmessage();
}

try {
    $pdo = new PDO("mysql:host=$hostname;dbname=$database", $username, $password);
    echo "success";
} catch (PDOException $error) {
    echo $error->getmessage();
}

try {
    $pdo = new PDO("mysql:host=$hostname;dbname=$database", $username, $password);
    echo "success";
} catch (PDOException $error) {
    echo $error->getMessage();
}

try {
    $pdo = new PDO("mysql=:host=$hostname;dbname=$database", $username, $password);
    echo "success";
} catch (PDOException $error) {
    echo $error->getmessage();
}

try {
    $pdo = new PDO("mysql:host=$hostname;dbname=$database", $username, $password);
    echo "success";
} catch (PDOException $error) {
    echo $error->getmessage();
}

try {
    $pdo = new PDO("mysql:host=$hostname;dbname=$database", $username, $password);
    echo "success";
} catch (PDOException $error) {
    echo $error->getmessage();
}

try {
    $pdo = new PDO("mysql:host=$hostname;dbname=$database", $username, $password);
    echo "success";
} catch (PDOException $error) {
    die($error->getmessage());
}

// new pdo("", $username, $password) (bentuk umum PDO)