<?php

/*
 * Zadaća 7.8 str.85
 */

echo "Zadatak 1.<br>"; //ZADATAK PRVI - NAPISATI FUNKCIJU KOJA NAM GOVORI 

//KOJI JE MJESEC


function hr_mounth(): string {
    switch (date('n')) {
        case 0:return 'Prosinac';
            break;
        case 1:return 'Siječanj';
            break;
        case 2:return 'Veljača';
            break;
        case 3:return 'Ožujak';
            break;
        case 4:return 'Travanj';
            break;
        case 5:return 'Svibanj';
            break;
        case 6:return 'Lipanj';
            break;
        case 7:return 'Srpanj';
            break;
        case 8:return 'Kolovoz';
            break;
        case 9:return 'Rujan';
            break;
        case 10:return 'Listopad';
            break;
        case 11:return 'Studeni';
            break;






        default:return 'Prosinac';
            break;
    }
}

echo hr_mounth();


echo "<hr> Zadatak 2. <br>";//ZADATAK DRUGI - ISPIS UCENIKA U HTML TABLICU


/**
 * Funkcija prima polje imena i ispisuje ih u html tablicu 
 * 
 * @example path ispis imena (['Janko','Leo'])
 * 
 * -> html tablica 3 reda
 * @param array $ucenici polje ucenika
 * @return string html tablica
 */ 
function ispis_ucenika($uc) {
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
$ucenici=array('Pero Perić','Đorđe Armani','Vito Corleone');
ispis_ucenika($ucenici);


echo "<hr> Zadatak 3. <br>"; //ZADATAK TREĆI
        //FUNCIJA ZA ZBRAJANJE,RAZLIKU.UMNOŽAK,DIJELJENJE,
        //TE FUNKCIJU KOJA RADI SVE GORE NAVEDENO

function zbrajanje($a,$b){
    return $a+$b;
}

function razlika($a,$b){
    return $a-$b;
}

function mnozenje($a,$b){
    return $a*$b;
}

function djeljenje($a,$b){
    return $a/$b;
}

function kalkulator($a,$b){
    echo "Rezultat zbrajanja: ";
    echo zbrajanje($a, $b);
    echo "<br> Rezultat oduzimanja: ";
    echo razlika($a, $b);
    echo "<br> Rezultat množenja: ";
    echo mnozenje($a, $b);
    echo "<br> Rezultat djeljenja: ";
    echo djeljenje($a, $b);
    
}

$a=5;
$b=9;

kalkulator($a, $b);

echo "<hr> Zadatak 4.<br>";/**ZADATAK ČETVRTI FUNKCIJA KOJA PRIMA VARIJABLU
 * @param int string 
 */
        
 function par(){
     $parametri = func_get_args();
     
     foreach ($parametri as $par){
         echo "<li>";
         if (is_int($par)){
             echo $par." je broj.";
         }else{
             echo $par." je string.";
         }
         echo "</li>";
     }
 }      

 echo par("Algebra",5,"PHP",465);