<?php
$filename='kontakt2.txt';
$dat= file($filename);

print_r($dat);

echo '<hr>';

foreach ($dat as $value) {
    echo '<br>'.$value;
}

echo '<hr>';
echo file_get_contents($filename);
