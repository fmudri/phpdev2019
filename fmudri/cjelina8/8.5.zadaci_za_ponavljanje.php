<?php
//Program koji čita iz txt datoteke
echo "Prvi zadatak:<br />";
echo '<hr>';

$filename = 'datoteka.txt';

$handle = fopen($filename, 'r');

$contents = fread($handle, filesize($filename));
fclose($handle);

echo $contents;


echo "Drugi zadatak:<br />";
echo '<hr>';
/*Pripremite obrazac (formu) u koji korisnik upisuje neki tekst i nakon
 * predavanja (submit) podataka tog obrasca zapišite tekst u neku datoteku.
 * Ako datoteka ne postoji, napravite ju
 */

$filename='automobili.txt';
$handle= fopen($filename, 'w');

fwrite($handle, 'nekakav automobil'.PHP_EOL);
fclose($handle);


echo "Treći zadatak:<br />";
echo '<hr>';
//program s kojim se dohvaća sadržaj, uređuje se i vraća u istu datoteku

//if(is_file($filename)){
//    $handle = fopen($filename, 'a');
//    fwrite($handle, $filename);
//    fclose($handle);
//}
// rjesenje je aursanic/zadaca3b.php
