<?php

$host = 'shopianka.ct8.pl';
$dbname = 'm49159_galerianka';
$user = 'm49159_admin';
$pass = 'hygCH2AXdVMP8Fa';

try {
    $pdo = new PDO('mysql:host='.$host.';dbname='.$dbname, $user, $pass);
    $pdo->query('SET NAMES utf8');
} catch (PDOException $e) {
    echo 'Połączenie nie mogło zostać utworzone: ' . $e->getMessage();
    exit();
}

?>
