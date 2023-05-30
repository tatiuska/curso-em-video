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
    <main>
        <h1>Conversor de Moedas</h1>
        <?php 
            //Cotação da API do BC
            $inicio = date("m-d-Y", strtotime("-7 days")); //dia de hoje -7 dias
            $fim = date("m-d-Y"); //dia de hoje
            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''. $inicio .'\'&@dataFinalCotacao=\''. $fim .'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
    
            $dados = json_decode(file_get_contents($url), true); //se não seta em true, o JSON vai mostrar object ao invés de array
    
            $cotacao = $dados["value"][0]["cotacaoCompra"];

            //Quantos R$ você têm?
            $real = $_GET["din"] ?? 0;

            //Equivalência em U$
            $dolar = $real / $cotacao;

            //Mostrar o resultado - utlizando a biblioteca intl
            $padrao = numfmt_create("pt-BR", NumberFormatter::CURRENCY);
            echo "<p>Seus " . numfmt_format_currency($padrao, $real, "BRL") . " equivalem a <strong>" . numfmt_format_currency($padrao, $dolar, "USD") . "</strong></p>";
        ?>
        <button onclick="javascript:history.go(-1)"><<< Voltar</button>
    </main>
</body>
</html>