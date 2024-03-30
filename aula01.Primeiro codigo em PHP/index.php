<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 01 de PHP - Primeiro Codigo em PHP</title>
</head>
<body>
    <!--
        Algumas coisas o PHP não diferencia manúsculo de minúsculo.
    -->

    <h1>
        <?php
            echo "Olá, mundo! \u{1F44D}";
            print "Oi!"
        ?>
    </h1>

    <p>Vamos tentar nos livrar da maldição</p>

    <h1>Dados do servidor</h1>

    <?php 
        phpinfo()
    ?>
</body>
</html>