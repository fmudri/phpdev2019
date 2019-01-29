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

var_dump($_GET);
?>

<!DOCTYPE html>
<html>
  <head>
    <title>TODO supply a title</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
    <div>Kliknut je link: </div>
    <?php
    $upit = "SELECT * FROM rezervacija WHERE oznDvorana LIKE '".$_GET['oznDvorana']."'";

        if ($rez = $mysqli->query($upit)) {
            while ($row = $rez->fetch_assoc()) {
              echo $row['sat'];
            }
        }
    ?>
    
    
    
  </body>
</html>


