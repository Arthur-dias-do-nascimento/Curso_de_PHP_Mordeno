<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 03 - Conversor de moedas - 1.0</title>

    <?php
        $cotação = 5.02;
        $dinheiro_real = $_GET["moeda"];
        $dinheiro_dolar = $dinheiro_real / $cotação;
    ?>

</head>
<body>
    <p>
        <?php
            $padrão = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

            echo("Seus " . numfmt_format_currency($padrão, $dinheiro_real, "BRL") . " equivalem a " . numfmt_format_currency($padrão, $dinheiro_dolar, "USD"));
        ?>
    </p>
</body>
</html>