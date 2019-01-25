<!DOCTYPE html>
<html>
  <head>
    <title>TODO supply a title</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
    <div>
      <form method="POST" name="upload" action="#" enctype="multipart/form-data">
        <input type="file" name="datoteka" accept="image/png, image/jpeg">
        <input type="submit" name="uploadaj">
        
      </form>
      
      
    </div>
  </body>
</html>
<?php

if(isset($_POST['uploadaj'])){
  echo '<br>Vaša datoteka je uploadana:<br>';
  
  $upload_dir=__DIR__.'\upload';
  $upload_file= basename($_FILES['datoteka']['name']);
  $varexp= explode('.', $upload_file);
  print_r($varexp);
 echo "<br>ekstenzija je:".end($varexp);
  array_pop($varexp);
echo "<br>novi array<br>";
print_r($varexp);
echo "<br>Ime filea je<br>". implode(' ',$varexp);
echo "<hr>";
  
  echo $upload_dir.'<br>';
  echo $upload_file.'<br>';
  
  if(move_uploaded_file(
    $_FILES['datoteka']['tmp_name'],
    $upload_dir.'/'.$upload_file)){
    echo 'file je uploadan: ';
    echo '<a href="upload/'.$upload_file.'">file</a>';
    //var_dump(mime_content_type ( $upload_dir.'/'.$upload_file));
    if(mime_content_type ( $upload_dir.'/'.$upload_file )=='image/jpeg'){
      echo '<img src="upload/'.$upload_file.'">';
      
    }
  }
  var_dump($_FILES);
}

