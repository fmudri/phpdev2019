<?php
include_once "Tocka.php";

$t1 = new Tocka (2, 3);
echo "<br>Točka t1 ima koordinatu x:" . $t1->get_x();

echo '<br>t1:' . $t1->get_koords();

$t1->postavi(1, 3);

echo '<br>t1:' . $t1->get_koords();

$t1->moveaps(2, 30);

echo '<br>t1:' . $t1->get_koords();

$t1->move_relative(1, 2);

echo '<br>t1:' . $t1->get_koords();

$t1->set_x(2);

echo '<br>t1:' . $t1->get_koords();
