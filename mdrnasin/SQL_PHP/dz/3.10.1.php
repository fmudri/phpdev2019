<?php
/*z 3.10.1 ispisi ime i prez studenta*/
include_once './mysqli_connection_obj.php';
$query = "SELECT * FROM stud where imeStud = 'Ivan'";
if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
      var_dump($row);
        echo $row['imeStud'] . $row['prezStud'] . $row['mbrStud'];
        echo '<br>';
    }
}

