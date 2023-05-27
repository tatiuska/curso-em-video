<!-- Aplicação para conversão de moedas simples -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 003: Conversor de Moedas Simples</title>
    <!-- Link para chamada do style.css -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        //Cotação consultada pelo Google
        $cotacao = 4.99;

        //Quantos R$ você têm?
        $real = 1000;

        //Equivalência em U$
        $dolar = $real / $cotacao;

        //Mostrar o resultado - formato mais traidicional
        //echo "Seus R\$" . number_format($real, 2, ",", ".") . " equivalem a US\$" . number_format($dolar, 2, ",", ".");

        //Mostrar o resultado - formato mais profissional
        //Formatação de moedas com internacionalização
        //Biblioteca intl - desabilitada por padrão no XAMPP
        $padrao = numfmt_create("pt-BR", NumberFormatter::CURRENCY);
        echo "Seus " . numfmt_format_currency($padrao, $real, "BRL") . " equivalem a " . numfmt_format_currency($padrao, $dolar, "USD");
    ?>
</body>
</html>