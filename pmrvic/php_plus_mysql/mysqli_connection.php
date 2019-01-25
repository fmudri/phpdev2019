<?php
$host='localhost';
$user='root'; 
$password=''; 
$database='fakultet'; 
$port=3306;
$mysqli= new mysqli($host, $user, $password, $database, $port);
if(mysqli_connect_errno()){
  echo "Ne mogu se spojiti na bazu podataka, je li server podignut?<br>";
  echo mysqli_connect_error();
  exit;  
}
