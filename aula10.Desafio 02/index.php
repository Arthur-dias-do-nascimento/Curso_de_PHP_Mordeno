<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 02 - Gerador de números</title>

    <?php
        $min = 0;
        $max = 100;
        $random_number = mt_rand($min, $max);
    ?>

    <!-- Não sabia que dava pra fazer isso, podemos declarar mais de uma super variavel no php -->

</head>
<body>
    <h1>Gerador de números</h1>
    <p>Esse gerador vai gerar um número aleatorio entre 0 e 100...</p>
    <p><?php echo("O número gerado aleatoriamente foi $random_number"); ?></p>

    <button class="btn-generation">
        Gerar outro número
    </button>

    <script src="index.js"></script>
</body>
</html>