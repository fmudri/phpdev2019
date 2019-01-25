<?php

/**
 * Funkcija prima ime polja i ispisuje HTML tablicu
 * @example ispis imena ([ivo, mia]) -> html tablicu
 * @param array $ucenici Polje ucenika
 * @return string HTML Tablica 
 */


function ispis_imena($uc){
    echo '<table border="1">';
    foreach ($uc as $value) {
    
    echo '<tr>';
    echo '<td>';
    echo $value;
    echo '</td>';
    echo '</tr>';
    
    }
    echo '</table>';
}

$ucenici=array('Marko', 'Janko', 'Filip');
ispis_imena($ucenici);