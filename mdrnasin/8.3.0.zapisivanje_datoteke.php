<?php

/**
 * Čitanje iz datoteke fopen() 
 */
$filename = 'kontakt.txt';

$handle = fopen($filename, 'r');

var_dump($handle);
echo '<br>';
$contents = fread($handle, 11);
var_dump($contents);
echo '<br>';
$contents = fread($handle, 11);
var_dump($contents);
echo '<br>';
echo 'trenutno se nalazim na ' . ftell($handle) . ' znaku u datoteci';

$filename = __DIR__ . '\..\\pmrvic\\kontakt.txt';

$handle = fopen($filename, 'r');

var_dump($handle);
echo '<br>';
$contents = fread($handle, 11);
var_dump($contents);
echo '<br>';
$contents = fread($handle, 11);
var_dump($contents);
echo '<br>';
echo 'trenutno se nalazim na ' . ftell($handle) . ' znaku u datoteci';
