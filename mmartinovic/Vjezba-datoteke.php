<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$filename = 'vjezba-obrazac.txt';

echo'
<form method ="post" sction ="">
tekst:
<textarea name ="txt">';

$datoteka = file($filename);

foreach ($datoteka as $line_num => $line){
    echo $line."\n";
}

echo'
</textarea>
<br />
<input type= "submit" name= "btn" value = "Spremi" />
</form>';

if(isset($_POST["btn"])){
    
    
    $handl= fopen($filename,'w+');
    fwrite($handl,$_POST["txt"]);
    
    fclose($handl);
}



