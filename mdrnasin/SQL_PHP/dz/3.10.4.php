<?php

include_once './mysqli_connection_obj.php';
$query = "SELECT * FROM stud WHERE stud.pbrRod BETWEEN 10000 AND 10100";
if ($result = $mysqli->query($query)) {
  echo '<ol>';
  while ($row = $result->fetch_assoc()) {
    echo '<li>' . $row['prezStud'] . ' ' . $row['imeStud'] . '</li>';
  }
  echo '</ol>';
}

