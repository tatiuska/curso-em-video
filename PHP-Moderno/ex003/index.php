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
        echo "O valor da variável é $num";
    ?>
    <?php 
        // 0x = Hexadecimal, 0b = Binário, 0 = Octal
        // número Hexadecimal
        $num2 = 0x1A;
        echo "O valor da variável é $num2";
    ?>
    <?php 
        // número Binário
        $num3 = 0b1011;
        echo "O valor da variável é $num3";
    ?>
    <?php 
        // número Octal
        $num4 = 010;
        echo "O valor da variável é $num4";
    ?>
    <?php 
        $v = 300;
        var_dump($v); // mostra não apenas o valor da variável, mas seu tipo primitivo.
    ?>
    <?php 
        $num5 = 3e2; // 3 x 10(2)
        echo "O valor da variável é $num5";
    ?>
        <?php 
        $num6 = 3e2;
        var_dump($num6);
    ?>
    <?php 
        $num7 = (int) 3e2; // coerção: forçando um número que apareceria como float a aparecer como int
        var_dump($num7);
    ?>
    <?php 
        $num8 = (int) "950"; // aplicando a coerção no caso string-int
        var_dump($num8);
    ?>
</body>
</html>