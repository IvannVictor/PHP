<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario com while</title>
</head>
<body>
    <form method="get" action="Ex011 - Formulario2.php">
        <?php
            // Iniciando a variavel contadora
            $contador = 1;

            // Iniciando o while
            while($contador <=5){
                echo "Valor $contador: <input type='number' name='v$contador' id='V$contador' mim='0' max='100'><br>";
                $contador++
            }
        ?>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>