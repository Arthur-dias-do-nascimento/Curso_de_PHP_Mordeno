<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 03 de PHP - Tipos Primitivos</title>
</head>
<body>
    <?php
        # Categorias do tipos primitivos

        /*
            Escalares,
            Compostos,
            Especias,
        */

        # Tipos primitivos escalares

        /*
            String, (Cadeia de caracteres)
            Int / Integer, (Numeros inteiros)
            Float / Double / Real, (Numeros decimais)
            Bool / Boolean, (true ou false)

            Obs: o tipo primitivo real deixou de existem na versão 7.4 do PHP.
        */

        # Tipos primitivos compostos

        /*
            Array,
            Object,
        */

        # Tipos primitivos especiais

        /*
            Null,
            Resource,
            Callabe,
            Mixed, (o mixed ele representa todos os tipos primitivos)
        */

        $n1 = 300;
        $n2 = 0x1a;

        // 0x = hexadecimal, 0b = binário, 0 = Octal

        echo "O valor da variavel n1 é $n1 <br>";
        echo "O valor da variavel n2 é $n2 <br>";

        // O var_dump ele vai mostrar o tipo da variavel e o valor.

        var_dump($n1);

        // Tem como forçar um tipo primitivo de uma variavel

        $nome = (string) "<br> arthur";

        var_dump($nome);

        $trabalha = false;

        var_dump($trabalha);

        $array = [12, "Arthur", false, 5.5];

        var_dump($array);

        class Pessoa {
            private string $nome;
        };

        $pessoa = new Pessoa;
        var_dump($pessoa);
    ?>
</body>
</html>