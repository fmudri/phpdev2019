<?php

/* 
 primjeri funkcija
 */

$timestamp = time();
echo $timestamp;

echo "<hr>";

$naziv = "Algebra";
$broj_znakova = strlen($naziv);
echo $broj_znakova;
echo "<hr>";

if(is_array($broj_znakova)){
    //true
}else{
    echo "<br> ovo je ipak nije array <br>";
}

echo "<hr>";

