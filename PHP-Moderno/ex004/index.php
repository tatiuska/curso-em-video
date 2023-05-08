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
        echo "$nome $sobrenome \u{1F596}" . "<br />"; //tem que deixar espaço entre uma string, a outra e o ponto para funcionar!!!

        //single quoted
        echo '$nome $sobrenome \u{1F596}' . "<br />";

        //concatenação de constantes
        const CANAL = "Curso em Vídeo \u{1F499}";
        echo "Eu adoro o " . CANAL . "<br />";

        //concatenação de funções
        echo "Estamos no ano " . date('Y');

        //utilizando sequências de escape
        $nom = "Joãozinho";
        $apelido = "Gafanhoto";
        $snom = "da Silva";
        echo "$nom \"$apelido\" $snom" . "<br>";
    ?>
</body>
</html>