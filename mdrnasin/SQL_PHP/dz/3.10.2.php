<?php

include_once './mysqli_connection_obj.php';
$query = "SELECT * FROM pred order by pred.nazPred asc;";
if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        echo $row['nazPred'];
        echo '<br>';
    }
}

