<?php
//include './mysqli_connection.php';
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

//$query = "SELECT * FROM stud where stud.email like '" . $_GET['email'] . "'";
$query_template="SELECT imeStud,prezStud,email FROM stud where stud.email like ?";
$email='adrian.lukac@algebra.hr';

if ($stmt=$mysqli->prepare($query_template)){
  $stmt->bind_param('s',$email);
  $stmt->execute();
  $stmt->bind_result($ime,$prezime,$maildresa);
  $stmt->fetch();
  echo $ime.' '.$prezime." ".$maildresa;
  $stmt->close();
}






