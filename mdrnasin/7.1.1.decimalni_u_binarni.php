<?php

/**
 * @author mdrnasin
 * @return string binarni broj sa mogućnošći leading zero 
 * @param int $broj
 * 22 decimalni je 10110 binarno
 * 22|0
 * 11|1
 * 05|1
 * 02|0
 * 01|1
 *    ↑
 * čita se od dolje na gore
 */

function ubinarno(int $broj): string {
    $rez="";
    while($broj>0){
    $ostatak=$broj%2;
    $broj=(int)($broj/2);
    $rez.=$ostatak;


} return strrev($rez);

    }

$ulazni_broj=22;

echo ubinarno($ulazni_broj);



