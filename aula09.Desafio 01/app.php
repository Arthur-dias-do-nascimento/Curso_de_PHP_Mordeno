<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 01 - Antecessor e Sucessor</title>
</head>
<body>
    <h1>Resultado:</h1>

    <p>
        <?php
            $numero = $_GET["numero"];
            $numeroAntecessor = $numero - 1;
            $numeroSucessor = $numero + 1;

            echo("Número Digitado: " . "<strong>$numero</strong>" . "<br>");

            echo("Antecessor do número: " . "<strong>$numeroAntecessor</strong>" . "<br>");

            echo("Sucessor do número: " . "<strong>$numeroSucessor</strong>" . "<br>")
        ?>
    </p>

    <button>
        <a href="index.html">&#x2B05; Voltar</a>
    </button>
</body>
</html>