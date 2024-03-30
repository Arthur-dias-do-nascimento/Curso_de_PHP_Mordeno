<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 04 de PHP - Manipulação de Strings</title>
</head>
<body>
    <?php
        # Formatos de strings

        // Existem 4 forma de string. veja abaixo.

        /*
            Double quoted = "",
            Single quoted = '',
            Heredoc = <<< FRASE,
            Nowdoc
        */

        # Double quoted

        // Com o double quoted ele faz uma interpretação antes de mostrar o conteúdo. Com isso podemos usar codigos unicode para mostrar emojis e tambem podemos mostrar valores de variaveis antes de mostrar o conteúdo. Um detalhe importante, não podemos colocar double quoted detro de outro double quoted, vai dar error, com isso para colocar double quoted dentro de outro double quoted faça isso: "texto \"texto\" texto";, isso serve para o single quoted.

        $txt1 = "Texto";

        echo "olha esse \"$txt1\" <br>";

        # Single quote

        // Com o single quoted ele não faz a interpretaçao antes de mostrar o conteúdo. Com isso não podemos usar codigos unicode para mostrar emojis e tambem não podemos mostrar valores de variaveis antes de mostrar o conteúdo.

        echo 'olha esse outro \'$txt1\' <br>';

        # Heredoc

        // Com o heredoc podemos colocar multiplicas linhas em um texto e ela interpreta o conteúdo, não conseguimos mostrar isso no html so em textos.

        /*
            echo <<< TESTE 
                Olá
                    Mundo!
            TESTE;
        */

        # Nowdoc

        // Mesma sintaxe do heredoc mas ela não interpreta o conteudo e muda uma coisa na sintaxe.

        /*
            echo <<< 'TESTE' 
                Olá
                    Mundo!
            TESTE;
        */

        # Sequencias de escape

        /*
            \n, (Quebra uma linha pra baixo)
            \t, (Tabulação horizontal, um espaco maior)
            \\, (Barra invertida)
            \$, (Sinal de cifrão)
            \u{}, (Codepoint Unicode)
        */

        # Concantenação de strings

        // Para concatenar uma string usa-se o ".".

        $curso = "Curso " . "de " . "PHP \u{1f596} <br>";

        echo $curso;

        const Canal = "Curso em Video";

        echo "Adoro o canal " . Canal;
    ?>
</body>
</html>