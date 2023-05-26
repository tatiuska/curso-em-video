<!-- aplicação para sortear um número aleatório -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 02: Sorteador de números aleatórios</title>
    <!-- link para carregar o style.css -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Gerando um número aleatório</h1>
        <?php 
            $min = 0;
            $max = 100;

            //função mt_rand() - Mersenne Twister (1997)
            $num = mt_rand($min, $max);

            echo "<p>O número gerado foi $num.</p>";
        ?>
        <button onclick="javascript:document.location.reload()">Gerar outro número</button>
    </main>
</body>
</html>