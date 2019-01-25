<!DOCTYPE html>
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    </head>
    <body>
        <div style="width: 350px">
            <form method="GET" action="#">
                Ime: <input name="broj_imena" type="number" required="true"><br>
                <input type="submit" name="broj_imena_sbm" value="submit">
            </form>

        </div>

        <div style="width: 350px">
            <form method="POST" action="#">
                <?php
                if (isset($_GET['broj_imena_sbm'])) {
                    for ($i = 1; $i <= $_GET['broj_imena']; $i++) {
                        ?>
                        <fieldset>       

                            Ime: <input name="ime_<?= $i ?>" type="text"><br>
                            Prezime: <input name="prezime_<?= $i ?>" type="text"><br>
                        </fieldset>
                    <?php } ?>
                    <input type="submit" name="imena_sbm" value="submit">
                <?php } ?>

            </form>

        </div>
    </body>
</html>
<?php
if (isset($_POST['imena_sbm'])) {
    var_dump($_POST);
}