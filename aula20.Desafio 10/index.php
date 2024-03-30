<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 10 - Reajuste de preços</title>

    <script src="app.js" defer></script>

    <?php
        $preço_produto = $_GET["preco_produto"] ?? 0;
        $porcetagem = $_GET["porcetual"] ?? 0;
        $reajuste = (($porcetagem / 100) * $preço_produto) + $preço_produto;
    ?>

</head>
<body>
    <main>
        <section class="container-form">
            <h1>Reajuste de preços</h1>

            <form action="<?= $_SERVER["PHP_SELF"] ?>" method="get">
                <label for="preco_produto">Preço do produto: </label>
                <input type="text" name="preco_produto" id="input-text-produto" require> <br>

                <label for="porcetual">Qual sera o porcetual do reajuste? (<span id="value_porcetual"></span>%)</label> <br>
                <input type="range" name="porcetual" id="input-range-porcetual" min="0" max="100" step="1"> <br>

                <button type="submit">Reajustar</button>
            </form>
        </section>

        <section class="container-result">
            <h1>Resultado</h1>
            <p><?= "O produto que custava R\$ ". number_format($preço_produto, 2, "," ,".")  .", com <strong>$porcetagem% de aumento</strong> vai passar a custar R\$ " . number_format($reajuste, 2, ",", ".") . " a partir de agora!" ?></p>
        </section>
    </main>
</body>
</html>