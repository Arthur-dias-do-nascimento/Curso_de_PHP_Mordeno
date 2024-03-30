<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 4 - Analisador de números reais</title>

    <?php
        $number = $_GET["numero"] ?? 0;

        # Convertemos o número decimal para número inteiro

        $int = (int) $number;

        # Para pode pegar a parte francionaria de um número, basta que faça o número menos a parte inteira dele

        $fra = $number - $int;
    ?>

</head>
<body>
    <h1>Analisador de número reais</h1>
    <p><?php echo("Analisado o número <strong>" . number_format($number, 3, ",", ".") . "</strong> informando pelo usuário"); ?></p>
    
    <?php
        echo("
            <ul>
                <li>A parte inteira do número <strong>$number</strong> é <strong>". number_format($int, 0, ",", ".") ."</strong></li>
                <li>A parte francionaria do número <strong>$number</strong> é <strong>" . number_format($fra, 3, ",", ".") ."</strong></li>
            <ul>
        ");
    ?>

</body>
</html>