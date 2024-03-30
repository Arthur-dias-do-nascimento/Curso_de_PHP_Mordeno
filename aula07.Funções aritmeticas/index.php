<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 07 de PHP - Funções aritmeticas</title>
</head>
<body>
    <?php
        # Funções aritmeticas

        # abs()
        // A função abs retorna um valor absoluto de um número.

        echo(abs(-300) . "<br>");

        # base_convert()
        // A função base_convert ele é um converto de bases.

        echo("Octal: " . base_convert(254, 10, 8) . " Hexadecimal: " . base_convert(254, 10, 16) . " Binario: " . base_convert(254, 10, 2) . "<br>");

        # ceil() - floor() - round()
        // Funções de arrendondamento de números, ceil() arrendonda pra um número pra cima, floor() arrendonda um número pra baixo e round() é o arrendondamento normal.

        echo(ceil(1.5) . " " . floor(1.5) . " " . round(1.5) . "<br>");

        # hypot()
        // A função hypot() ela calcula a hipotenusa.

        echo(hypot(10, 5) . "<br>");

        # intdiv()
        // A função intdiv() ela faz divisão inteira, ou seja, sem nenhuma casa decimal.

        echo(intdiv(5, 2) . "<br>");

        # min() - max()
        // As funções min() e max() retorno um valor mínino e máximo de uma sequência.

        echo("Valor mínio e máximo de 5 e 2, min " . min(5, 2) . " max " . max(5, 2) . "<br>");

        # pi()
        // Retorna o valor de PI.

        echo(pi() . "<br>");

        # pow()
        // A função pow() ele calcula uma ponteçia

        echo(pow(5, 2) . "<br>");

        # sin() - cos() - tan()
        // Funções para calcular o seno, cosseno e tangente.

        echo(sin(5) . " " . cos(5) . " " . tan(5) . "<br>");

        # sqrt()
        // A função sqrt() ela vai calcular a raiz quadrada de um número.

        echo(sqrt(81))
    ?>
</body>
</html>