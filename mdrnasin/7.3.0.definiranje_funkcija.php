<?php

/**
 * Ne prima parametar, vraća hrvatski naziv današenjeg dana u tjednu
 * npr: Ponedjeljak, Utorak ...
 * @return string Dan u tjednu
 */
function hr_day($dan): string {
    switch ($dan) {
        case 0:return'Nedjelja';
        case 1:return'Ponedjeljak';
        case 2:return'Utorak';
        case 3:return'Srijeda';
        case 4:return'Četvrtak';
        case 5:return'Petak';
        case 6:return'Subota';
        default:
            break;
    }
}
echo hr_day(date('w'));




