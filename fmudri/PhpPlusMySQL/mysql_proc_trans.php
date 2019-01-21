<?php

include './mysqli_connection_proc';

function begin(&$link) {
    $query = 'BEGIN;';
    mysqli_query($link, $query);
}

function commit(&$link) {
    $query = 'COMMIT;';
    mysqli_query($link, $query);
}

function rollback(&$link) {
    $query = 'ROLLBACK;';
    mysqli_query($link, $query);
}

begin($link);
$error_num = 0;
