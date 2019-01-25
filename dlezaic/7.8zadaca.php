<?php

//1. Napišite funkciju koja vraća hrvatski naziv za trenutačni mjesec.
// Parametar koji prosljeđujete funkciji je rezultat funkcije date('n').

function hr_mjeseci($mjeseci)
{
    $mjeseci_array[1] = "Sječanj";
    $mjeseci_array[2] = "Veljača";
    $mjeseci_array[3] = "Ožujak";
    $mjeseci_array[4] = "Travanj";
    $mjeseci_array[5] = "Svibanj";
    $mjeseci_array[6] = "Lipanj";
    $mjeseci_array[7] = "Srpanj";
    $mjeseci_array[8] = "Kolovoz";
    $mjeseci_array[9] = "Rujan";
    $mjeseci_array[10] = "Listopad";
    $mjeseci_array[11] = "Studeni";
    $mjeseci_array[12] = "Prosinac";
    
    return $mjeseci_array[$mjeseci];
}

$mjeseci = date('n');
echo hr_mjeseci($mjeseci);

echo "<hr>";

//2. Napišite funkciju koja ispisuje HTML tablicu imena i prezimena učenika. 
//Kao parametar joj se prosljeđuje polje s imenima i prezimenima.

function tablica($imenaArray){
    
    echo '<table border="1">';
    echo '<tr>';
    echo '<th>Ime</th>';
    echo '<th>Prezime</th>';
    echo '</tr>';
    
    foreach ($imenaArray as $key => $ucenik){
        
         echo '<tr>';
    echo '<td>'.$ucenik["ime"].'';
    echo '<td>'.$ucenik["prezime"].'';
    echo '<tr>';
    
    }
    
    echo '</table>';
        
    }
    
    $ucenici = array();
    
    $ucenici[1]["ime"] = "Marko";
     $ucenici[1]["prezime"] = "Marić";
     
      $ucenici[2]["ime"] = "Ana";
       $ucenici[2]["prezime"] = "Anić";
       
       tablica($ucenici);
       
       echo'<hr>';
       
//3.Napišite funkcije za zbrajanje, razliku, umnožak i dijeljenje dva broja. 
//Zatim napišite funkciju koja će pozivati sve te funkcije odjednom.
       


function zbrajanje($a, $b) {
    return $a + $b;
}
 function oduzimanje($a, $b) {
    return $a - $b;
}
 function mnozenje($a, $b) {
    return $a * $b;
}
 function dijeljenje($a, $b) {
    return $a / $b;
}
 function zajedno($a, $b) {
    echo zbrajanje($a, $b);
    echo oduzimanje($a, $b);
    echo mnozenje($a, $b);
    echo dijeljenje($a, $b);
}
 $i = 5;
$j = 10;
 zajedno($i, $j);


    