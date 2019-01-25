<?php

//1. Napišite program koji čita sadržaj iz neke tekstualne datoteke.

$filename = 'datoteka.txt';

 $handle = fopen($filename, 'r');
 
 $contents = fread($handle, $filesize($filename));
fclose($handle);

 echo $contents;
 
 echo '<hr>';
 
//2.Pripremite obrazac(formu) u koji korisnik upisuje neki tekst i nakon
 //predavanja(engl. submit) podataka tog obrasca zapišite tekst u neku datoteku.
 //Ako datoteka ne postoji, napravite ju.
 
 
 $filename='datoteka.txt';
 
$handle= fopen($filename, 'w');

 fwrite($handle, 'datoteka'.PHP_EOL);
fclose($handle);

