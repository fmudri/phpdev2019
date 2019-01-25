<?php
include_once 'Linija.php';

$t1 = new Tocka(1, 1);
$t2 = new Tocka(5, 3);

$line1 = new Linija($t1, $t2);
echo $line1;


$line2 = new Linija(new Tocka(0, 0), new Tocka(4, 3));
echo $line2;
$line2->trans_x(5);
$line2->trans_y(5);
echo $line2;