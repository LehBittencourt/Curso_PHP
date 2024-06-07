<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos em PHP</title>
</head>
<body>
    <h1>Testes de tipos primitivos</h1>
    <?php 
        // 0x = hexadecimal 0b = binário 0 = Octal
        $n1 = 0x1A; 
        echo "O valor da variável é $n1";
        
        $v = 45.2;
        var_dump($v);
        
        $n2 = 3e2; // 3 x 10^2
        echo "O valor da variável é $n2";

        $n3 = (string) 2; // Força o tipo da variável ser string
        echo "O valor da variável é $n3";
        var_dump($n3);

        $casado1 = false; // Exibe: vazio
        print "O valor para casado é $casado1";

        $casado2 = true; // Exibe: 1
        print "O valor para casado é $casado2";

        $vet = [6, 2.5, "Maria", 3, false];
        var_dump($vet);

        class Pessoa {
            private string $nome;
        }

        $p = new Pessoa;
        var_dump($p);
    ?>
</body>
</html>