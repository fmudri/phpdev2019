<?php

/*
 * Funkcije
 */

$timestamp= time();
echo $timestamp .'<br>';

$naziv='Algebra';
$broj_znakova=strlen($naziv);
echo $broj_znakova .'<br>';

echo '<hr>';

$polje=array('tesla', 'edison', 'bell');
if(is_array($polje)){
    echo 'ovo je broj';
}else{
    echo 'Ovo nije broj';
}


