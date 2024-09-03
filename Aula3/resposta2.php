<?php
    declare(strict_types=1);
?>
<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aula 3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <main class="container">
        <h1>Aula 3</h1>

        <?php

        function soma(int $a, int $b): int
        {
            return $a + $b;
        }

        function subtracao(int $a, int $b): void
        {
            echo "<p>Subtração: " . ($a - $b) . " </p>";
        }

        function saudacao(string $nome = "Visitante") : void
        {
            echo "<p>Olá $nome!</p>";
        }

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            try {
                $valor1 = (int) $_POST['valor1'] ?? 0;
                $valor2 = (int) $_POST['valor2'] ?? 0;
                $soma = soma($valor1, $valor2);
                echo "<p>Soma: $soma </p>";
                subtracao($valor1, $valor2);
                saudacao();
                saudacao("Vanessa");
            } catch (Exception $e) {
                echo 'Erro! ' . $e->getMessage();
            }
        }

        ?>

    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>