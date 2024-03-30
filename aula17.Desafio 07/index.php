<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 07 - Raízes</title>

    <?php
        $numero = $_GET["n1"] ?? 0;
        
        $quadrada = sqrt($numero);
        $cubica = $numero ** (1/3);
    ?>

</head>
<body>
    <main>
        <section class="container-form">
            <h1>Raízes</h1>

            <form action="<?= $_SERVER["PHP_SELF"]; ?>" method="get">
                <label for="n1">Número: </label>
                <input type="number" name="n1" id="input-number-n1" require> <br>

                <button type="submit">Calcular</button>
            </form>
        </section>

        <section class="container-result">
            <h1>Resultado</h1>
            <p>Analisando o <strong>número <?= $numero ?></strong>, temos:</p>

            <ul>
                <li><?= "A sua raiz quadrada é " . number_format($quadrada, 3, ",", "."); ?></li>
                <li><?= "A sua raiz cubica é " . number_format($cubica, 3, ",", "."); ?></li>
            </ul>
        </section>
    </main>
</body>
</html>