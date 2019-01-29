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

$upit = "SELECT d.oznDvorana FROM dvorana AS d ORDER BY d.oznDvorana LIMIT 2";

        if ($rez = $mysqli->query($upit)) {
            echo '<table border=1><tr>';
            echo '<td>Ime dvorane</td></tr>';
            while ($row = $rez->fetch_assoc()) {

echo '<tr><td><a href=rezervacije.php?oznDvorana='
  .$row['oznDvorana']
  .'>' 
  . $row['oznDvorana'] 
  . '</a></td></tr>';

                 
                };
                echo '</table>';
            };
            //var_dump ($_SESSION['rezerva']);
            //session_unset();
            ?>