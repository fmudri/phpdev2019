<?php

include_once 'covjek.php'; //dok ne naucimo autoloading

$c1 = new covjek(); //nova instanca klase covjek
$c1->broj = 5; //postava public svojstva
echo $c1->ime; //dohvacanje svojstva (public)


$c2 = new covjek(); //opet nova instanca
$c2->ime = "Martina"; //postavljanje public svojstva
//postavljanje private svojstva uz pomoc public metode
//to se zove enkapsulacija
$c2->set_spol('z');
echo $c2->ime;
echo '<hr>';
$c2->ime(); //pozivanje public metoda
$c1->ime(); //pozivanje public metoda

echo $c2->trenutna_brzina; //postavljanje svojstva
$c1->komuniciraj($c2); //pozivanje public metode uz parametre
echo $c2->trenutna_brzina;
$c2->set_spol('z');
echo 'ja sam ' . $c2->get_spol();//ispisivanje
