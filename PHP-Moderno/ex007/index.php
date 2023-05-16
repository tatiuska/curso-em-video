<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções Aritméticas</title>
</head>
<body>
    <h2>Função abs():</h2>
    <p>fornece o valor absoluto de um número.</p>
    <p>Qual o valor absoluto de 500?</p>
    <?php 
        $r = abs(500);
        echo "A resposta é $r";
    ?>
    <p>Qual o valor absoluto de -2000?</p>
    <?php 
        $r = abs(-2000); //essa função retira o sinal de uma variável
        print("A resposta é $r");
    ?>
    <hr>
    <h2>Função base_convert():</h2>
    <p>Utilizada para conversão de bases de números.</p>
    <p>Converter o número 254 (decimal) para a base octal:</p>
    <?php 
        $r = base_convert(254, 10, 8);
        echo "A resposta é: $r";
    ?>
    <p>Converter o número 254 (decimal) para a base hexadecimal:</p>
    <?php 
        $r = base_convert(254, 10, 16);
        echo "A resposta é: $r";
    ?>
    <p>Converter o número 254 (decimal) para a base binária:</p>
    <?php 
        $r = base_convert(254, 10, 2);
        echo "A resposta é: $r";
    ?>
    <hr>
    <h2>Funções ceil(), floor() e round():</h2>
    <p>Funções de arredondamento: para cima, para baixo e arredondamento aritmético.</p>
    <p>Arredondando o número 17.667 usando a função ceil():</p>
    <?php 
        $r = ceil(17.667);
        print("Resposta: $r");
    ?>
    <p>Arredondando o número 17.667 usando a função floor():</p>
    <?php 
        $r = floor(17.667);
        print("Resposta: $r");
    ?>
    <p>Arredondando o número 17.667 usando a função round():</p>
    <?php 
        $r = round(17.667);
        print("Resposta: $r");
    ?>
    <hr>
    <h2>Função intdiv():</h2>
    <p>Calcula a divisão inteira</p>
    <p>5/2</p>
    <?php 
        $r = intdiv(5, 2);
        echo "Resposta: $r";
    ?>
    <hr>
    <h2>Função min(), max()</h2>
    <p>mostra valor mínimo e máximo de uma sequência.</p>
    <p>valor mínimo entre 5 e 2:</p>
    <?php 
        $r = min(5, 2);
        print("Resposta: $r");
    ?>
    <p>valor máximo entre 5, 2, 7, 5, 1, 9, 7 e 6:</p>
    <?php 
        $r = max(5, 2, 7, 5, 1, 9, 7, 6);
        print("Resposta: $r");
    ?>
    <hr>
    <h2>Função sqrt():</h2>
    <p>para cálculo de raiz quadrada.</p>
    <p>calcular a raiz quadrada de 81:</p>
    <?php 
        $r = sqrt(81);
        echo "Resposta: $r";
    ?>
    <p>pode usar potênciação também para o cálculo de raiz quadrada. no exemplo a seguir, a utilizaremos para calcular a raiz cúbica de 27:</p>
    <?php 
        $r = 27 ** (1/3);
        echo "Resposta: $r";
    ?>
</body>
</html>