<?php
session_start();
print_r($_SESSION);  // ovo ne radi
foreach ($_SESSION as $key => $value) {
  unset($value);
}
session_unset();

$_SESSION['ime']='Milka';

?>


