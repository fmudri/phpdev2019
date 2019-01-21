<?php

$host = 'localhost';
$user = 'root';
$password = '';
$database = 'fakultet';
$port = 3306;
$link = new mysqli($host, $user, $password, $database, $port);

if (mysqli_connect_errno()) {
    echo "ne mogu se spojiti na bazu podataka, je li server podignut?<br>";
    echo mysqli_connect_error();
    exit;
}
