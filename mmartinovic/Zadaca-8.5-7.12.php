<?php

/*
 * Zadaća 8.5 str 91. DATOTEKE
 */

echo "Zadatak 1.<br>"; //ZADATAK PRVI,UCITATI .TXT DATOTEKU


$filename = 'ucenici.txt';

$handle = fopen($filename, 'r');
$contents = fread($handle, filesize($filename));
fclose($handle);

echo $contents;


echo "<hr>Zadatak 2.<br>"; //ZADATAK DRUGI NAPRAVITI OBRAZAC ZA UNOS TEKSTA

echo '
<form method = "POST" action="">
 Tekst: <input type= "text" name ="txt" value =""/><br/>
<input type ="submit" name ="btn" value="Spremi"/><br/>
</form>';

if (isset($_POST["btn"])) {
    $filenam = 'obrazacfile.txt';
    $hand = fopen($filenam, 'a+');
    fwrite($hand, $_POST["txt"]);
    fclose($hand);
}

echo "<hr>Zadatak 3.<br>"; //ZADATAK TRECI UREDJIVANJE I SPREMANJE ISTE DATOTEKE

$filename = 'obrazac.txt';

echo'
<form method ="post" sction ="">
tekst:
<textarea name ="txt">';

$datoteka = file($filename);

foreach ($datoteka as $line_num => $line) {
    echo $line . "\n";
}

echo'
</textarea>
<br />
<input type= "submit" name= "btn2" value = "Spremi" />
</form>';

if (isset($_POST["btn2"])) {


    $handl = fopen($filename, 'a+');
    fwrite($handl, $_POST["txt"]);

    fclose($handl);
}
