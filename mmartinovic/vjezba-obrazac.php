<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

echo '<hr>';

echo '
<form method = "POST" action="">
 Tekst: <input type= "text" name ="txt" value =""/><br/>
<input type ="submit" name ="btn" value="Spremi"/><br/>
</form>';

if (isset($_POST["btn"]))
{$filenam = 'NEKITXT.txt';
$hand= fopen($filenam,'a+');
fwrite($hand, $_POST["txt"]);
fclose($hand);
}