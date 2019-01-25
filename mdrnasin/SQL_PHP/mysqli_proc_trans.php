<?php
include_once './mysqli_connection_proc.php';

function begin(&$link){
    $query='BEGIN;';
    mysqli_query($link, $query);
}

function commit(&$link){
    $query='COMMIT;';
    mysqli_query($link, $query);
}

function rollback(&$link){
    $query='ROLLBACK;';
    mysqli_query($link, $query);
}

begin($link);
$error_num=0;
$query='insert into'.'fakultet'.'mjesto';

