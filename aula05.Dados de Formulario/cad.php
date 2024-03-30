<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 05 de PHP - Formulario foi um sucesso</title>
</head>
<body>
    <h1>User:</h1>

    <?php
        // Para pegar valores de um formulario podemos usar super globais, com essas super globais podemos pegar valores de formularios pela URL. Dependendo de qual method usar vai ter uma super glabal pra isso, como a super global $_GET e $_POST, tem uma junção desses dois com mais um que é o $_COOKIES, com isso essa super global que estou falando é $_REQUEST

        $nome = $_GET["nome"] ?? "error";
        $sobreNome = $_GET["sobreNome"] ?? "error";

        echo "Nome: $nome <br> Sobrenome: $sobreNome";
    ?>
</body>
</html>