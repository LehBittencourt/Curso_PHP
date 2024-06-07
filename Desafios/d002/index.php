<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Desafio 2</title>
</head>
<body>
    <header>
        <h1>Trabalhando com Núneros Aleatórios</h1>
    </header>
    <main>
        <p>    
            <?php 
                $num = mt_rand(0, 100);
                echo "Gerando um número aleatório entre 0 e 100... <br>O valor gerado foi <strong>$num</strong>";
            ?>
        </p>
        <button onclick="javascript:document.location.reload()">&#x1f504 Voltar</button>
    </main>
</body>
</html>