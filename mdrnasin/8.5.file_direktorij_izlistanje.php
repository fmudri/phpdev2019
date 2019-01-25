<?php

/**
 * izlisataj sve iz mog foldera
 */

$fscan=scandir('.');

/*foreach ($fscan as $value) {
    if (is_file($value)){
        //echo $value.' je datoteka';
        if(is_dir('Poglavlje_'.substr($value, 0,3))){
        }else{
        
        mkdir('Poglavlje_'.substr($value, 0,3));
        }
    
}}    