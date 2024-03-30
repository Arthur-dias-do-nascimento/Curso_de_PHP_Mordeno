<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 11 - Calculadora de tempo</title>

    <?php
        $segundos = $_GET["segundos"] ?? 0;

        # Semanas

        $int_semanas = $segundos / 604800;
        $res_semanas = $segundos % 604800;

        # Dias

        $int_dias = $res_semanas / 86400;
        $res_dias = $res_semanas % 86400;

        # Horas

        $int_horas = $res_dias / 3600;
        $res_horas = $res_dias % 3600;

        # Minutos

        $int_minutos = $res_horas / 60;

        # Segundos

        $int_segundos = $res_horas % 60;
    ?>

</head>
<body>
    <main>
        <section class="container-form">
            <h1>Calculadora de tempo</h1>

            <form action="<?= $_SERVER["PHP_SELF"]; ?>" method="get">
                <label for="segundos">Coloque um tempo em segundos:</label>
                <input type="number" name="segundos" id="input-number-segundos" require> <br>

                <button type="submit">Calcular</button>
            </form>
        </section>

        <section class="container-result">
            <h1>Resultado</h1>
            <p><?= "Analisando o valor que digitou, <strong>" . number_format($segundos, 3, ",", ".") .  " segundos</strong> equivalem a:"; ?></p>

            <ul>
                <li><?= number_format($int_semanas, 0, ",", ".") . " semanas";  ?></li>
                <li><?= number_format($int_dias, 0, ",", ".") . " dias"  ?></li>
                <li><?= number_format($int_horas, 0, ",", ".") . " horas"  ?></li>
                <li><?= number_format($int_minutos, 0, ",", ".") . " minutos"  ?></li>
                <li><?= number_format($int_segundos, 0, ",", ".") . " segundos"  ?></li>
            </ul>
        </section>
    </main>
</body>
</html>