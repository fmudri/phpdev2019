<?php

/**
 * ne prima nikakav parametar,vraca hr naziv danasnjeg dana u tjednu
 * npr: ponedjeljak,utorak...
 * @return string dan u tjednu
 */
function hr_day(): string {
    switch (date('w')) {
        case 0:return 'nedjelja';
            break;
        case 1:return 'ponedjeljak';
            break;
        case 2:return 'utorak';
            break;
        case 3:return 'sri';
            break;
        case 4:return 'cet';
            break;
        case 5:return 'pet';
            break;




          

        default:return 'subota';
            break;
    }
    //return date('w'); // w day of week (0 on sunday)
}

echo hr_day();


function sumiraj(float $a,$b){
    return $a+$b;
}

echo sumiraj(4, 7);
echo sumiraj(4.1, 7);


