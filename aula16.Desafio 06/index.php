<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 6 - Salário mínino</title>

    <?php
        $salario = $_GET["salario"] ?? 0;
        $minino = 1412;
        $dif = $salario % $minino;
    ?>

</head>
<body>
    <main>
        <section class="container-form">
            <h1>Sálario mínino</h1>

            <form action="<?= $_SERVER["PHP_SELF"]; ?>" method="get">
                <label for="salario">Salário (R$):</label>
                <input type="number" name="salario" id="input-salario" require>

                <p>Considerando que um sálario mínino é <strong><?= number_format($minino, 2, ",", ".") ?></strong></p>

                <button type="submit">Calcular</button>
            </form>
        </section>

        <section class="container-salario">
            <h1>Resultado</h1>

            <p><?= "Quem recebe um sálario mínino de R\$ "  . number_format($salario, 2, ",", ".") . " ganha <strong>" . intdiv($salario, $minino) . " sálarios míninos</strong> + R\$ " . number_format($dif, 2, ",", "."); ?></p>
        </section>
    </main>
</body>
</html>