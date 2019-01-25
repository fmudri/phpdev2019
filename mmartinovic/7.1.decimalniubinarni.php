<?php

/**
 * *22 decimalno je 10110 binarno
 * 22 | 0
 * 11 | 1
 * 05 | 1
 * 02 | 0
 * 01 | 1 ↑ 
 * @author mmartinovic
 * @return string binarni broj sa mogucim leading zero 
 * @param int $broj ulazni dektski broj
 
 * 
 *        čita se od dolje na gore
 */
function ubinarno(int $broj): string {
    $rez='';
    while($broj>0){
    $ostatak=$broj%2;
    $broj=(int)($broj/2);
    $rez.=$ostatak;
    }
    return strrev($rez);
}

$ulazni_broj=22;

echo ubinarno($ulazni_broj);
try {
    echo ubinarno("petnaest");
} 
catch (typeerror $exc) {
    echo "funkicja prima samo int".$exc->getTraceAsString();
}

