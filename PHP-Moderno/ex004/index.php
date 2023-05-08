<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manipulação de Strings com PHP</title>
</head>
<body>
    <h1>Exercícios de Manipulação de Strings</h1>
    <?php 
        $nome = "Ana";
        $sobrenome = "Vieira";
        //double quoted
        echo "$nome $sobrenome \u{1F596}";

        //single quoted
        echo '$nome $sobrenome \u{1F596}';
    ?>
</body>
</html>