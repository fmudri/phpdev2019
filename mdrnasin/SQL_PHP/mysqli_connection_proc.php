<?php
$host='localhost';
$user='root';
$password='';
$database='fakultet';
$port=3306;

$link = mysqli_connect($host, $user, $password, $database, $port);

if(!$link){
    echo 'Pogreška u konekciji'.'<br>';
    echo mysqli_connect_error();
}