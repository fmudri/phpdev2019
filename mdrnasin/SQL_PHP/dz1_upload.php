<!DOCTYPE html>
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    </head>
    <body>
        <div style="width: auto">
            <form method="GET" action="#">
                Broj datoteka za upload: <input name="broj_datoteka" type="number" required="true" max="5"><br>
                <input type="submit" name="broj_datoteka_btn" value="submit">
                 
            </form>

        </div>

        <div style="width:auto">
          <form method="POST" action="#" enctype="multipart/form-data">
                <?php
                if (isset($_GET['broj_datoteka_btn'])) {
                    for ($i = 1; $i <= $_GET['broj_datoteka']; $i++) {
                        ?>
                        <fieldset>       

                            <input type="file" name="datoteka[]" >
                            
                        </fieldset>
                    <?php } ?>
                    <input type="submit" name="upload" value="upload">
                <?php } ?>

            </form>

        </div>
    </body>
</html>
<?php
if (isset($_POST['upload'])) {

    echo "<hr>";   
   // echo $_FILES['datoteka']['name'][0];  // ocekujem 25CF.tmp
    $upload_dir=__DIR__;
    foreach ($_FILES['datoteka']['tmp_name']as $key => $imedatoteke) {
      $tmp_ime=explode("\\", $imedatoteke);
      
      $destination=$upload_dir.'\\'.time().end($tmp_ime);
      var_dump($destination);
       if(move_uploaded_file($imedatoteke, $destination)){
             echo 'Vaše datoteke su uploadane';
       }
       else{
         echo 'problem prilikom upoada';
       }
    }
    
    echo "<br>";
    print_r($_FILES);
    var_dump($_POST);
}