<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado</h1>
    </header>
    <main>
        <?php 
            $numero = $_POST["numero"] ?? "número não informado!";
            $antecessor = $numero - 1;
            $sucessor = $numero + 1;
            echo "<p>O número escolhido foi $numero<br>
                Seu antecessor é $antecessor<br> 
                Seu sucessor é $sucessor!</p>"
        ?>
        <input type="button" value="Voltar" onclick="history.go(-1)">
    </main>
</body>
</html>