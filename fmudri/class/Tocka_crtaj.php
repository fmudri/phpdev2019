<?php
include_once './Tocka.php';

$t1=new Tocka(2,3);
echo "<br>Točka t1 ima koordinatu x:".$t1->get_x();

echo '<br>__construct()t1:'.$t1->getkoords();

$t1->setup(1,3);
echo '<br>setup() t1:'.$t1->getkoords();

$t1->move_apsolute(2, 3);
echo '<br>move_apsolute() t1:'.$t1->getkoords();

$t1->move_relative(1, 2);
echo '<br>move_relative() t1:'.$t1->getkoords();

$t1->set_x(2);
echo '<br>set_x() t1:'.$t1->getkoords();

$t1->set_y(6);
echo '<br>set_y() t1:'.$t1->getkoords();

$t2=$t1->kloniraj();
echo '<br>kloniraj() t2:'.$t2->getkoords();

$t4->delete();
echo $t4;