<?php

$polje=array();

// po referenci -> najbolji način
function show(&$p){
 // global $polje;
  $p[]=11;
  $p[]=100;
  $p[]=111; 
 //print_r($polje); 
}
// p vrijednosti - > manje dobar ali opet bolji od global
function v_show($p){
 // global $polje;
  $p[]=11;
  $p[]=100;
  $p[]=111; 
 return $p;//print_r($polje); 
}
  $polje[]=211;
  $polje[]=2100;
  $polje[]=2111; 
 print_r($polje); 
 
 show($polje);
 
  print_r($polje);
  
  $polje=v_show($polje);
  print_r($polje);