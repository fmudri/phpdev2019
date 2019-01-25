<?php

include_once './mysqli_connection_obj.php';
$query = "SELECT * FROM stud where stud.prezStud like 'b%'";
if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        echo $row['prezStud'].' '.$row['imeStud'];
        echo '<br>';
    }
}

