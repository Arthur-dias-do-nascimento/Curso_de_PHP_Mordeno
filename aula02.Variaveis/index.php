<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 02 de PHP - Variaveis</title>
</head>
<body>
    <!-- 
        Esqueci de falar, o PHP precisar colocar o ponto e virgula no final de cada comando de codigo.
    -->

    <!--
        No PHP para declaração de variaveis para variaveis que podem ser atribuidas elas não precisam ser declarada para ser uma variavei, mas caso seja uma constante ai tem que declarar essa constante.

        Variavel
        $nomeDaVariavel = valor;

        Precisase de um sifrão para ser uma variavel
    -->

    <?php
        # Regras do PHP

        // 1.Variaveis sempre começam com o simbolo $,
        // 2.O segundo caractere de uma variavel pode ser letra ou simbolo _, não pode ser numero,
        // 3.Aceita caracteres de [a-z], [A-Z], [0-9] e _,
        // 4.Aceita caracteres da tabela ASCII a partir de 128,
        // 5.Aceita caracteres acentuados como á, õ, ç,
        // 6.A linguagem a case sensitive em relação aos nomes,
        // 7.Nomes especias como $this não podem ser usados,
        // 8.Não pode ter espaços em nomes de variaveis e constantes.

        # Recomendações do PHP

        // 1.Tente dar nomes de variaveis claros e facieis,
        // 2.Evite nomes de variaveis curtos ou longos,
        // 3.Defina um padrão e siga em todo projeto, ex: Nomear todas as variaveis em minúsculas,
        // 4.Para variaveis, dê preferência a letras minúsculas,
        // 5.Para constantes, dê preferência a letras manúsculas,
        // 6.Use camelCase para métodos e atributos,
        // 7.Use SNAKE_CASE para nomear constantes.

        # Variavel

        $nome = "Arthur";
        $sobreNome = "Dias";

        # Constante
        // No PHP ele suporta acetuaçoes de caracteres, entre outras coisas tambem.

        const PAÍS = "Brasil";

        # Atribuição

        $nome = "Gabriel";

        echo "Muito prazer, $nome $sobreNome! Você mora no " . PAÍS;
    ?>

    <!--
        Tem como usar cometarios no PHP com // ou #
    -->
</body>
</html>