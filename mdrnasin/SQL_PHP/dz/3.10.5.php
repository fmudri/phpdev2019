<?php

include_once './mysqli_connection_obj.php';
$query = "SELECT * FROM stud where stud.imeStud like 'a%'";
if ($result = $mysqli->query($query)) {
    echo 'Broj studenata čije ime pocinje sa slovom a je ' . mysqli_num_rows($result);
}

