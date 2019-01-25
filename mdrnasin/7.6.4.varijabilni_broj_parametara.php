<?php

/**
 * varijabilni broj parametara 
 */

/*function sum($a, $b) {
    return $a + $b;
}

sum(4, 7, 18, 2, 3, 4, 5);
*/
echo '<hr>';

function sum(){
    $rez=0;
    for($i=0; $i<func_num_args();$i++){
        $rez+= func_get_arg($i);
    }
    return $rez;
}

echo sum(4, 7, 18, 2, 3, 4, 5);
