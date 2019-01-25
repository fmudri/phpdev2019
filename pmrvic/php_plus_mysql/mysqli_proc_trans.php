<?php
include './mysqli_connection_proc.php';
function begin(&$link){  // ispravan način
 // global $link; loše rješenje
  $query='BEGIN;';
  mysqli_query($link, $query);
}
function commit(&$link){  // ispravan način
 // global $link; loše rješenje
  $query='COMMIT;';
  mysqli_query($link, $query);
}
function rollback(&$link){  // ispravan način
 // global $link; loše rješenje
  $query='ROLLBACK';
  mysqli_query($link, $query);
}
begin($link);
$error_num=0;

$query="INSERT INTO `fakultet`.`mjesto` (`pbr`, `nazMjesto`, `sifZupanija`) ";
$query.="VALUES ('10997', 'Zagreb-TEST3', '21');";

$result=mysqli_query($link, $query);

if(!$result){
  $error_num++;
}

$query="INSERT INTO `fakultet`.`mjesto` (`pbr`, `nazMjesto`, `sifZupanija`) ";
$query.="VALUES ('10998', 'Zagreb-TEST2', '21');";

$result=mysqli_query($link, $query);

if(!$result){
  $error_num++;
}

$query="INSERT INTO `fakultet`.`mjesto` (`pbr`, `nazMjesto`, `sifZupanija`) ";
$query.="VALUES ('10999', 'Zagreb-TEST1', '21');";

$result=mysqli_query($link, $query);

if(!$result){
  $error_num++;
}

if($error_num<=0){
  echo "zadnji insertani ID je.".mysqli_insert_id($link);
  commit($link);
}
 else {
  rollback($link); 
}
