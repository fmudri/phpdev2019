<!DOCTYPE html>
<html>
  <head>
    <title>TODO supply a title</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
    <div>
      <form action="#" method="POST">
        Ime: <input type="text" name="ime" value="" size="22" /><br>
        Prezime: <input type="text" name="prezime" value="" size="22" /><br>
        spol: <input type="radio" name="spol" value="M" checked="checked" />musko
        <input type="radio" name="spol" value="Z" />žensko<br>

        Županija:
        <select name="zupanija">
          <option value="1">Grad Zagreb</option>
          <option value="2">Zagrebačka županija</option>
        </select><br>

        Interesi: <br>
        <input type="checkbox" name="interesi[]" value="1" />sport<br>
        <input type="checkbox" name="interesi[]" value="2" />muzika<br>
        <input type="checkbox" name="interesi[]" value="3" />racunala<br>
        <br>
        Napomena:<br>
        <textarea name="napomena" rows="4" cols="20">
        </textarea>
        <br><br>
        <input type="submit" value="Obrada" name="submit_btn" />

      </form>


    </div>
  </body>
</html>
<?php
if (isset($_POST['submit_btn'])) {
  var_dump($_POST);
  echo '<br>';
  echo 'varijabla ime je:' . $_POST['ime'];

  foreach ($_POST['interesi'] as $key => $value) {
    switch ($value) {
      case 1:$v = 'sportski';
        break;
      case 2:$v = 'muzički';
        break;
      case 3:$v = 'računala';
        break;
    }

    echo 'moj interes je: ' . $v . '<br>';
  }
}
