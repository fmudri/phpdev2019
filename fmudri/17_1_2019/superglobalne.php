<?php

$polje = array();
//po referenci, bolji način
function show(&$p) {
    //global $polje;   ovo nikada ne stavljati, izbjegavaj
    $p[] = 11;
    $p[] = 100;
    $p[] = 111;
    //print_r($polje);
}

$polje[] = 211;
$polje[] = 2100;
$polje[] = 2111;
print_r($polje);

show($polje);
print_r($polje);

