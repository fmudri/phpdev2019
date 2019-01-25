<?php

echo "1. Napišite funkciju koja vraća hrvatski naziv za trenutačni mjesec.
Parametar koji prosljeđujete funkciji koja je rezultat funkcije date(`n`)."; 

echo "<br><br>";

function hrvdate($d)
{
    $t = "nepoznati mjesec";
    if ($d == 1) $t = "Siječanj";
    if ($d == 2) $t = "Veljača";
    if ($d == 3) $t = "OŽujak";
    if ($d == 4) $t = "Travanj";
    if ($d == 5) $t = "Svibanj";
    if ($d == 6) $t = "Lipanj";
    if ($d == 7) $t = "Srpanj";
    if ($d == 8) $t = "Kolovoz";
    if ($d == 9) $t = "Rujan";
    if ($d == 10) $t = "Listopad";
    if ($d == 11) $t = "Studeni";
    if ($d == 12) $t = "Prosinac";
    return $t;
}
 
 echo hrvdate(date('n'))."<br><br>";
 
echo "<br><br>";
echo "<hr>";

echo "2. Napišite funkciju koja ispiisuje HTML tablicu imena i prezimena učenika.
 Kao parametar joj se prosljeđuje poolje s imenima i prezimenima."; 

echo "<br><br>";

function napravi_tablicu($imena, $prezimena)
{
    echo "<table border=\"1\">";
    echo "<tr>";
    echo "<th>Ime</th>";
    echo "<th>Prezime</th>";
    echo "</tr>";
    for ($i = 0; $i < count($imena); $i++)
    { 
        echo "<tr>";
        echo "<td>$imena[$i]</td>";
        echo "<td>$prezimena[$i]</td>"; 
        echo "</tr>";
    }  
    echo "</table>";
}
 $polje_imena = array("Jozo", "Marica", "Perica");
$polje_prezimena = array("Trovach", "Ivich", "Mirkovic");
napravi_tablicu($polje_imena, $polje_prezimena);

echo "<br>";
echo "<hr>";



echo "3. Napišite funkcije za zbrajanje, razliku, umnožak i dijeljenje dva broja.
 Zatim napišite funkciju koja ce pozivati sve te funkcije odjednom.";

echo "<br><br>";

function suma ($a,$b)
{
    return $a + $b;
}
 function razlika ($a,$b)
{
    return $a - $b;
}
 function  umnozak ($a, $b)
{
    return $a * $b;
}
 function  dijeljenje ($a, $b)
{
    return $a / $b;
}
 function pozovi_sve()
{
    $a=10;
    $b=5;
echo suma ($a, $b);
echo "<br>";
echo razlika ($a, $b);
echo "<br>";
echo umnozak  ($a, $b);
echo "<br>";
echo dijeljenje ($a, $b);
echo "<br>";
}
 pozovi_sve();

echo "<br>";
echo "<hr>";


echo "4. Napišite funkciju koja prima varijabilni broj parametra. parametri su
 kombinirani brojevi i stringovi. Za svaki parametar ispišite kojeg je tipa.";

echo "<br><br>";


function a1()
{
    for ($i = 0; $i < func_num_args(); $i++)
    {
        $var = func_get_arg($i); 
        if (is_string($var))
            echo "string ";
        elseif (is_numeric($var))
            echo "broj ";
        else
            echo "nista ";
    }
}
 a1(1, "str1", 2, 3, "str2", "1.23");

echo "<br><br>";
echo "<hr>";

echo "5. Napišite program koji čita sadržaj iz neke tekstualne datoteke.";

echo "<hr>";
echo "<br>";


$filename='datoteka.txt';

$dat= file($filename);  

print_r($dat);

echo $dat[2];

foreach ($dat as $value) {
  echo $value;
}

echo "<hr>";
echo file_get_contents($filename);

echo "<hr>";
echo "<br>";

echo "6. Pripremite obrazac (formu) u koju korisnik upisuje neki tekst i nakon 
 predavanja (eng. submit) podataka tog obrasca zapisite tekst u neku datoteku.
 Ako datoteka ne postoji , napravite ju.";

echo "<hr>";
echo "<br>";

$filename = "datoteka.txt";
$handle = fopen($filename, 'w'); 

fwrite($handle, 'OVO je neki TEKST upisan'.PHP_EOL);
$fwrite = "valjalo 
bi nesta upisati \n";
fwrite($handle, $fwrite);
fclose($handle);


echo "<hr>";
echo "<br>";

echo "7. Napišite program preko kojeg korisnik dohvaca sadrzaj neke tekstualne
datoteke,uređuje ga i ponovo sprema u istu datoteku.";

 



        
       
    
    
        
    
        
    
    
    
        
        

    
  
  






