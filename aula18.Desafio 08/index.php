<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 7 - Média aritmetica e ponderada</title>
</head>
<body>
    
    <?php
        $nota_01 = $_GET["nota01"] ?? 0;
        $nota_02 = $_GET["nota02"] ?? 0;
        $peso_01 = $_GET["peso01"] ?? 0;
        $peso_02 = $_GET["peso02"] ?? 0;
    ?>

    <main>
        <section class="container-form">
            <form action="<?= $_SERVER["PHP_SELF"] ?>" method="get">
                <label for="nota01">Nota 1:</label>
                <input type="number" name="nota01" id="input-number-nota-01" require> <br>

                <label for="peso01">Peso 1:</label>
                <input type="number" name="peso01" id="input-number-peso-01" require> <br>

                <label for="nota02">Nota 2:</label>
                <input type="number" name="nota02" id="input-number-nota-02" require> <br>

                <label for="peso02">Peso 2:</label>
                <input type="number" name="peso02" id="input-number-peso-02" require> <br>

                <button type="submit">
                    Calcular médias
                </button>
            </form>
        </section>

        <section class="container-medias">
            <h1>Calculo das médias</h1>
            <p><?= "Analisado os valores $nota_01 e $nota_02"; ?></p>

            <section class="medias">
                <ul>
                    <li><?= "A Média Aritmetica Simples entre os valores é igual a " . ($nota_01 + $nota_02) / 2; ?></li>
                    <li><?= "A Média Aritmetica Ponderada com pesos $peso_01 e $peso_02 e igual a " . ($nota_01 * $peso_01) + ($nota_02 * $peso_02) / ($peso_01 + $peso_02); ?></li>
                </ul>
            </section>
        </section>
    </main>
</body>
</html>