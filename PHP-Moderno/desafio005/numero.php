<!-- processamento do resultado -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Analisador de Números Reais</title>
    <!-- link para carregar o style.css -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Analisador de Número Real</h1>
        <?php 
            //método post com operador de coalescência nula para o caso do usuário não informar um número
            $num = $_POST["n"] ?? 0;

            echo "<p>Analisando o número <strong>" . number_format($num, 3, ",", ".") . "</strong> informado pelo usuário:</p>";

            //separando a parte inteira da parte fracionária do número
            $p_int = (int) $num;
            $p_fra = $num - $p_int;

            echo "<ul><li>A parte inteira do número é <strong>" . number_format($p_int, 0, ",", ".") . "</strong></li>";
            echo "<li>A parte fracionária do número é <strong>" . number_format($p_fra, 3, ",", ".") . "</strong></li></ul>";
        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>