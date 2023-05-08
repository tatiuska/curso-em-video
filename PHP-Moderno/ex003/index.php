<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos Primitivos em PHP</title>
</head>
<body>
    <h1>Teste de Tipos Primitivos</h1>
    <?php 
        $num = 300;
        echo "O valor da variável é $num" . "<br>"; //aplicando a concatenação do ex 004 para fazer a quebra de linhas entre os exemplos

        // 0x = Hexadecimal, 0b = Binário, 0 = Octal
        // número Hexadecimal
        $num2 = 0x1A;
        echo "O valor da variável é $num2" . "<br>";

        // número Binário
        $num3 = 0b1011;
        echo "O valor da variável é $num3" . "<br>";

        // número Octal
        $num4 = 010;
        echo "O valor da variável é $num4" . "<br>";

        $v = 300;
        var_dump($v); // mostra não apenas o valor da variável, mas seu tipo primitivo.

        $num5 = 3e2; // 3 x 10(2)
        echo "O valor da variável é $num5" . "<br>";

        $num6 = 3e2;
        var_dump($num6);

        $num7 = (int) 3e2; // coerção: forçando um número que apareceria como float a aparecer como int
        var_dump($num7);

        $num8 = (int) "950"; // aplicando a coerção no caso string-int
        var_dump($num8);

        $casado = true; // se chamar essa variável num print ou echo, vai imprimir 1 se for true e nada se for false
        var_dump($casado);

        // Tipo Primitivo Composto: Array
        $vet = [6, 2.5, "Maria", 3, false];
        var_dump($vet);

        // Tipo Primitivo Composto: Object
        class Pessoa {
            private string $nome;
        }

        $p = new Pessoa;
        var_dump($p);
    ?>
</body>
</html>