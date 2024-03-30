<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 14 de PHP - Super Globais</title>

    <style>
        pre {
            margin: 0;
            padding: 0;

            & p {
                margin: 0;
                padding: 0;
            }
        }
    </style>

    <?php
        setcookie("dia-da-semaa", "Domingo", time() + 3600);

        session_start();
        $_SESSION["Teste"] = "Hello World!"
    ?>

</head>
<body>
    <!--
        Super globais

        $_GET
        Essa super global ela gera um array associativo com todas as variáveis que foram passadas por parâmetro através de uma URL

        $_POST
        Essa super global não deixa os parâmetros visíveis na URL quando submetemos o formulario. Mas é a mesma coisa da super global $_GET

        $_REQUEST
        São uma mistura das super globais $_GET e $_POST 

        $_COOKIE
        A super global $_COOKIE ela pega as informações sobre os cookies da sua aplicação PHP

        $_FILES
        A super global $_FILES se você fizer um upload de um arquivo ele vai conseguir pegar os dados desse arquivo que seja

        $_SESSION
        A super global $_SESSION ela permite que variáveis de sessão não são perdidas entres as navegações das páginas

        $_ENV
        A super global $_ENV são variáveis de ambiente do servidor

        $_SERVER
        Essa super global mostrar coisas do nosso servidor local

        $GLOBALS
        Essa super global mostrar todas as informações de todas as outas super globais
    -->

    <pre>
        <h1>$_GET</h1>
        <p>
            <?php
                var_dump($_GET);
            ?>
        </p>

        <h1>$_POST</h1>
        <p>
            <?php
                var_dump($_POST);
            ?>
        </p>

        <h1>$_REQUEST</h1>
        <p>
            <?php
                var_dump($_REQUEST);
            ?>
        </p>

        <h1>$_COOKIE</h1>
        <p>
            <?php
                var_dump($_COOKIE)
            ?>
        </p>

        <h1>$_SESSION</h1>
        <p>
            <?php
                var_dump($_SESSION)
            ?>
        </p>

        <h1>$_SERVER</h1>
        <p>
            <?php
                var_dump($_SERVER)
            ?>
        </p>

        <h1>$GLOBALS</h1>
        <p>
            <?php
                var_dump($GLOBALS)
            ?>
        </p>
    </pre>
</body>
</html>