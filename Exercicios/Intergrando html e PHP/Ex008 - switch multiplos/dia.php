<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dia</title>
</head>
<body>
    <?php
        // Declarando as variaveis
        $ds = isset($_GET["ds"]) ? $_GET["ds"] : 0;

        // Validando os dias da semana!
        switch(ds){
            case 2:
            case 3:
            case 4:
            case 5:
            case 6:
                echo "Levante para ir estudar!"
                break;

            case 7:
            case 8:
                echo "Pode descansar meu caro!" 
                break;

            default:
                echo "Dia da semana invalido!"
        }
    ?>

    <!--// Comando para voltar a pagina anterior-->
    <a href="javascript:history.go(-1)" class="botao">voltar</a>
</body>
</html>