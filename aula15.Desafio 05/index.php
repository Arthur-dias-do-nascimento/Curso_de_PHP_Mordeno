<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 5 - Anatomia da divisão</title>
    <link rel="stylesheet" href="style.css">

    <?php
        $dividendo = $_GET["dividendo"] ?? 0;
        $divisor = $_GET["divisor"] ?? 1;
        
        $dividendo_result = $dividendo / $divisor;
        $divisor_result = $dividendo % $divisor;
    ?>

</head>
<body>
    <main>
        <section class="container-form">
            <h1>Anatomia da divisão</h1>

            <form action="<?= $_SERVER["PHP_SELF"]; ?>" method="get">
                <div class="label-dividendo">
                    <label for="dividendo">Dividendo:</label>
                    <input type="number" name="dividendo" id="input-number-dividendo" value="<?= $dividendo ?>" require>
                </div>
    
                <div class="label-divisor">
                    <label for="divisor">Divisor:</label>
                    <input type="number" name="divisor" id="input-number-divisor" value="<?= $divisor ?>" require>
                </div>
    
                <button type="submit">
                    Analisar
                </button>
            </form>
        </section>

        <section class="container-anatomia">
            <h1>Estrutura da divisão</h1>

            <section class="divisao">
                <div class="row-0">
                    <span><?= $divisor ?></span>
                    <span><?= $divisor_result ?></span>
                </div>

                <div class="row-1">
                    <span><?= $dividendo ?></span>
                    <span><?= $dividendo_result ?></span>
                </div>
            </section>
        </section>
    </main>
</body>
</html>