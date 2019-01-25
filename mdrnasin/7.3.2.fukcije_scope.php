<?php

function inc_a(){
    static $a=0;
    $a++;
    echo $a;
}
inc_a();
inc_a();
inc_a();
echo $a;

