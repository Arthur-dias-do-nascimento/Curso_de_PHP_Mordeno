<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 08 de PHP - Operadores Aritmeticos</title>
</head>
<body>
    <?php
        # Operadores Aritmeticos

        /*
            + = Adição;
            - = Subtração;
            * = Multiplicação;
            / = Divisão real;
            % = Resto da divisão inteira;
            ** = Pontencia;
        */

        $n1 = 5;
        $n2 = 2;

        echo($n1 + $n2 . "<br>");

        echo($n1 - $n2 . "<br>");

        echo($n1 * $n2 . "<br>");

        echo($n1 / $n2 . "<br>");

        echo($n1 % $n2 . "<br>");

        echo($n1 ** $n2 . "<br>");

        echo($n1 + $n2 / $n2);
    ?>
</body>
</html>