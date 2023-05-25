<!-- documento php para receber o número informado via método post e mostrar o resultado -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <!-- link para carregar o style.css -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado</h1>
    </header>
    <main>
        <?php 
            $numero = $_POST["numero"] ?? "número não informado!"; //operador de coalescência nula caso se carregue o resultado.php diretamente
            $antecessor = $numero - 1; //cálculo do número antecessor
            $sucessor = $numero + 1; //cálculo do número sucessor
            
            //impressão dos resultados
            echo "<p>O número escolhido foi $numero<br>
                Seu antecessor é $antecessor<br> 
                Seu sucessor é $sucessor!</p>"
        ?>
        <!-- botão para voltar para o index.html -->
        <input type="button" value="<<< Voltar" onclick="javascript:history.go(-1)">
    </main>
</body>
</html>