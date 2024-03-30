<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 14 de PHP - Formulários retroalimentados</title>

    <?php
        $n1 = $_GET["n1"];
        $n2 = $_GET["n2"];
        $result = $n1 + $n2;
    ?>

</head>
<body>
    <form action="<?= $_SERVER["PHP_SELF"] ?>" method="get">
        <label for="n1">Número 1:</label>
        <input type="number" name="n1" id="input-number-n1" require> <br>

        <label for="n2">Número 2:</label>
        <input type="number" name="n2" id="input-number-n2" require> <br>

        <button type="submit">
            Enviar
        </button>
    </form>

    <div class="container-result ">
        <h1>Resultado</h1>
        <p>
            <?php
                echo("$n1 + $n2 = $result");
            ?>
        </p>
    </div>
</body>
</html>