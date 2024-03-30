<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 12 - Caixa eletrônico</title>

    <?php
        $saque = $_GET["dinheiro"] ?? 0;

        $res = $saque;

        # Notas de 100

        $tot_100 = (int) ($res / 100);
	
        $res %= 100;
        
        # Notas de 50
        
        $tot_50 = (int) ($res / 50);
        
        $res %= 50;
        
        # Notas de 10
        
        $tot_10 = (int) ($res / 10);
        
        $res %= 10;
        
        # Notas de 5
        
        $tot_5 = (int) ($res / 5);
    ?>

</head>
<body>
    <main>
        <section class="container-form">
            <h1>Caixa eletrônico</h1>

            <form action="<?= $_SERVER["PHP_SELF"]; ?>" method="get">
                <label for="dinheiro">Qual valor deseja sacar? (R$):</label>
                <input type="number" name="dinheiro" id="input-number-dinheiro" step="5" require>

                <p>Obs: Notas disponiveis são de R$ 100, R$ 50, R$ 10 e R$ 5.</p>

                <button type="submit">Sacar</button>
            </form>
        </section>

        <section class="container-result">
            <h1>Saque de <?= "R\$" . number_format($saque, 2, ",", "."); ?>  realizado</h1>
            <p>O caixa eletrônico vai entregar as seguintes notas:</p>

            <ul>
                <li>
                    <img src="src/img/100-reais.jpg" alt="Imagem de uma nota de R$ 100,00 reais">
                    <span><?= "x$tot_100"; ?></span>
                </li>
                <li>
                    <img src="src/img/50-reais.jpg" alt="Imagem de uma nota de R$ 50,00 reais">
                    <span><?= "x$tot_50" ?></span>
                </li>
                <li>
                    <img src="src/img/10-reais.jpg" alt="Imagem de uma nota de R$ 10,00 reais">
                    <span><?= "x$tot_10" ?></span>
                </li>
                <li>
                    <img src="src/img/5-reais.jpg" alt="Imagem de uma nota de R$ 5,00 reais">
                    <span><?= "x$tot_5" ?></span>
                </li>
            </ul>
        </section>
    </main>
</body>
</html>