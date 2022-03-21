<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada</title>
</head>
<body>
    <form method="get" action="Ex015 - Tabuada2.php">
        <select name="nun" id="Nun">
            <?php
                for($cont = 1; $cont <= 10; $cont++){
                    echo "<option value='Nun$cont'>$cont</option>";
                }
            ?>
        </select>
    </form>
</body>
</html>