<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <?php
        $nome = "Lola";
        $sobrenome = "Silva";
        const PAÍS = "Brasil";


        // PAÍS = "EUA"; - DA ERRO, nao pode atribuir outro valor a uma constante.



        echo "Muito prazer, $nome $sobrenome! Você mora no " . PAÍS ;
    ?>
</body>
</html>