<?php
$host='localhost';
$user='root'; 
$password=''; 
$database='fakultet'; 
$port=3306;
$link= mysqli_connect($host, $user, $password, $database, $port);
mysqli_set_charset($link,'utf8');