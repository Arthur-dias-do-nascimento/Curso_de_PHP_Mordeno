<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 9 - Calculando sua idade</title>

    <?php
        $ano_nascimento = $_GET["ano_nascido"] ?? 0;
        $ano_idade = $_GET["ano_idade"] ?? 0;
        $ano_atual = date("Y");
        $idade = $ano_idade - $ano_nascimento;
    ?>

</head>
<body>
    <main>
        <section class="container-form">
            <h1>Calculando sua idade</h1>

            <form action="<?= $_SERVER["PHP_SELF"]; ?>" method="get">
                <label for="ano_nascido">Ano que você nasceu:</label>
                <input type="number" name="ano_nascido" id="input-number-nascido" max="<?= $ano_atual; ?>" value="2010" require> <br>

                <label for="ano_idade">Ano que quer saber qual sua idade (atualmente em <?= $ano_atual ?>):</label>
                <input type="number" name="ano_idade" id="input-number-idade" value="<?= $ano_atual ?>" require> <br>

                <button type="submit">Calcular</button>
            </form>
        </section>

        <section class="container-result">
            <h1>Resultado</h1>
            <p><?= "Quem nasceu no ano de $ano_nascimento vai ter  $idade anos em $ano_idade" ?></p>
        </section>
    </main>
</body>
</html>