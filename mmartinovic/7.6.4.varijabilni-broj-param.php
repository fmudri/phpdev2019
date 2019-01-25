<?php

/*
 * varijabilni broj parametara
 */

//function sum($a,$b){
//  return $a+$b;
//} minimalno 3 parametra


function sum() {
    //print_r(func_get_args())
    $rez=0;
    for($i = 0;$i < func_num_arg();$i++) {
       $rez+(func_get_arg($i));
    }
}

echo sum(4, 7, 18);
