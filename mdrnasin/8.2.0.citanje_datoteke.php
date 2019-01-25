<?php

/**
 * Čitanje iz datoteke fopen() 
 */

$filename='kontakt2.txt';

$handle= fopen($filename, 'w+');

fwrite($handle, "Marko Drnasin \n");
fwrite($handle, "Marko Drnasin \n");
fwrite($handle, "Marko Drnasin \n");
fclose($handle);