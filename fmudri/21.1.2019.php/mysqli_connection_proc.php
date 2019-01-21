<?php

$host = 'localhost';
$user = 'root';
$password = '';
$database = 'fakultet';
$port = 3306;
$link = new mysqli($host, $user, $password, $database, $port);
//ovo je rucni nacin za postaviti znakove na utf8
mysqli_set_charset($link, "utf-8");
