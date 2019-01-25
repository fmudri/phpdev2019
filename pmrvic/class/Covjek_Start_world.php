<?php

include_once "./Covjek.php";  // dok ne naucimo autoloading


$c1=new Covjek();  // nova instanca klase Covjek

$c1->broj=5;  // postava public svojstva

echo $c1->ime; // dohvacanje public svojstva

$c2=new Covjek();  // nova instanca klase Covjek
$c2->ime="Martina"; // postava public svojstva
// postavljanje private svojstva uz pomoć public metode
// to se zove enkapsulacija
$c2->set_spol('Z'); 
echo $c2->ime;
echo '<hr>';
$c1->ime();  // pozivanje public metoda
$c2->ime();  // pozivanje public metoda

echo $c2->trenutna_brzina;
$c1->komuniciraj($c2);    // pozivanje public metoda uz parametre
echo $c2->trenutna_brzina;
$c1->komuniciraj($c2);
echo $c2->trenutna_brzina;
$c1->komuniciraj($c2);


echo '<br>ja sam '. $c2->get_spol();
$c2->set_spol('M');
echo '<br>ja sam '. $c2->get_spol();

echo "<br>c2 speed: ".$c2->trenutna_brzina;
echo "<br>c1 speed: ".$c1->trenutna_brzina;

$c1->komuniciraj($c2);
echo "<br>c2 speed: ".$c2->trenutna_brzina;
echo "<br>c1 speed: ".$c1->trenutna_brzina;

var_dump($c2);
$c2json= json_encode($c2);
var_dump($c2json);
$c2json_decoded= json_decode($c2json);
var_dump($c2json_decoded);
echo 'Ime je '.$c2json_decoded->ime;






