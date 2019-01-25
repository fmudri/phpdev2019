<?php
/**
 * Predaja parametara putem reference
 */

function potencija(&$val){
    //$val=$val*$val; //mogli i $val*=$val
    $val=pow($val, 2);
}
$val=3;
potencija($val);

echo $val;
