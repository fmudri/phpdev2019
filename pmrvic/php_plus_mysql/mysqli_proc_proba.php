<?php
include './mysqli_connection_proc.php';
include '../class/Covjek.php';

$query='SELECT * FROM stud LIMIT 3';

// FETCH ASSOC
if($result=mysqli_query($link, $query)){
  while ($row = mysqli_fetch_assoc($result)) {
   // var_dump($row);
    echo $row['mbrStud'].' '.$row['imeStud'].' '.$row['prezStud'];
  }
  echo "<br>";
  echo 'broj redova:'.mysqli_num_rows($result);
}
else{
  echo 'Upit nije izvršen';
  echo mysqli_error($link);
}

  echo "<hr>";
// FETCH ROW
if($result=mysqli_query($link, $query)){
  while ($row = mysqli_fetch_row($result)) {
    //var_dump($row);
    echo $row[0].' '.$row[1].' '.$row[2];
  }
  echo "<br>";
  echo 'broj redova:'.mysqli_num_rows($result);
}
else{
  echo 'Upit nije izvršen';
  echo mysqli_error($link);
}
///////////////////////////////
  echo "<hr>";
// FETCH ARRAY
if($result=mysqli_query($link, $query)){
  while ($row = mysqli_fetch_array($result)) {
    echo $row[0].' '.$row['imeStud'].' '.$row[2];
  }
  echo "<br>";
  echo 'broj redova:'.mysqli_num_rows($result);
}
else{
  echo 'Upit nije izvršen';
  echo mysqli_error($link);
}
///////////////////////////////
  echo "<hr>";
// FETCH OBJECT
if($result=mysqli_query($link, $query)){
  while ($row = mysqli_fetch_object($result,$classname='stdClasss')) {
    var_dump($row);
    echo $row->mbrStud.' '.$row->imeStud.' '.$row->prezStud;
  }
  echo "<br>";
  echo 'broj redova:'.mysqli_num_rows($result);
}
else{
  echo 'Upit nije izvršen';
  echo mysqli_error($link);
}

class stdClasss extends stdClass{
  public $test;
  public function __construct() {
    $this->test='Tralala';
  }
}

///////////////////////////////
  echo "<hr> Fetch object Covjek <br>";
// FETCH OBJECT
$people=array();
if($result=mysqli_query($link, $query)){
  while ($row = mysqli_fetch_object($result,$classname='Covjek')) {
    //var_dump($row);
    echo $row->mbrStud.' '.$row->imeStud.' '.$row->prezStud;
    echo $row->ime();
    $people[$row->imeStud]=$row;
  }
  echo "<br>";
  echo 'broj redova:'.mysqli_num_rows($result);
}
else{
  echo 'Upit nije izvršen';
  echo mysqli_error($link);
}
var_dump($people);
$people['Danijel']->komuniciraj($people['Jozefina']);
var_dump($people);
$people['Danijel']->komuniciraj($people['Zdenko']);
var_dump($people);