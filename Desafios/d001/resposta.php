<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Resltados</title>
</head>
<body>
    <main> 
        <h1>Resultado Final</h1>
        <p>
            <?php 
                $n = $_GET["num"] ?? 0;
                echo "Número escolhido foi <strong>$n</strong>";
                echo "<br>O seu antecessor é " . ($n - 1);
                echo "<br>O seu sucessor é " . ($n + 1);
            ?>
        </p>
        <button onclick="javascript:history.go(-1)">&#x2B05; Voltar</button>
    </main>
</body>
</html>