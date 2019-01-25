<?php

$mysqli = new mysqli('localhost', 'root', '', 'fakultet');

if (mysqli_connect_errno()) {
    echo 'Došlo je do pogreske';
    echo mysqli_connect_error();
}

