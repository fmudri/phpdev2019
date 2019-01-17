<?php
session_start();
unset ($_SESSION);// ovo ne radi
foreach ($_SESSION as $key => $value) { // ovo ne radi
    unset($value);
}
session_destroy(); // ovo uništava podatke u sessiona, ali moguce ih je ponovo
//pokrenuti
//session_abort zaustavlja session u potpunosti, valjda
?>
