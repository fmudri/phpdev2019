<?php
include_once './Tocka.php';

$t1=new Tocka(2,3);
echo "<br>Točka t1 ima kordinatu x:".$t1->get_x();

echo '<br>__construct() t1: '.$t1->getkoords();

$t1->postavi(1, 3);

echo '<br>postavi() t1: '.$t1->getkoords();

$t1->move_apsolute(2,3);

echo '<br>move_apsolute() t1: '.$t1->getkoords();

$t1->move_relative(1, 2);

echo '<br>move_relative() t1: '.$t1->getkoords();

$t1->set_x(2);

echo '<br>set_x() t1: '.$t1->getkoords();

$t1->set_y(6);

echo '<br>set_y() t1: '.$t1->getkoords();

// objekt bez povijesti samo zadnja koord
$t2=$t1->kloniraj();  

echo '<br>kloniraj() t2: '.$t2->getkoords();

$t3= new Tocka();
echo '<br>new Tocka() t3: '.$t3->getkoords();

echo $t1;
echo $t2;
$t4 = new Tocka();
$t4= clone $t1;  // duplikat objekta ukljucujuci povijest
$t1->move_relative(-2, 4);
echo $t1;
echo $t4;


//nobjekt postoji ali je resetiran
$t4->unisti();

// unset($t4)  // ovime ubijamo cijeli objekt
echo $t4;


