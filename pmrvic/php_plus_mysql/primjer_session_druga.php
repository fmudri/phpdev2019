<?php
session_start();
if(isset($_SESSION['ime'])){

print_r(json_decode($_SESSION['ime'])); // pretvara ga u array
//var_dump($_SESSION['ime']);
$nadimak=json_decode($_SESSION['ime']);
echo "Maricu još zovu ".$nadimak->a2;

echo $_SESSION['prezime'];
}
?>


