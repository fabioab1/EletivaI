<?php
    declare(strict_types=1);
?>
<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Resposta do Exercício 4</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <main class="container">
        <h1>Resposta do Exercício 4</h1>

        <?php
            function verificarData(int $dia, int $mes, int $ano)
            {
                return checkdate($mes, $dia, $ano);
            }

            if($_SERVER['REQUEST_METHOD'] == 'POST')
            {
                try
                {
                    $dia = (int) $_POST['dia'] ?? 1;
                    $mes = (int) $_POST['mes'] ?? 1;
                    $ano = (int) $_POST['ano'] ?? 1;

                    if (verificarData($dia, $mes, $ano))
                        echo "<p>Data válida!</p>";
                    else
                        echo "<p>Data inválida.</p>";

                    echo "<p>".str_pad("$dia", 2, '0', STR_PAD_LEFT)."/".str_pad("$mes", 2, '0', STR_PAD_LEFT)."/$ano.</p>";
                }
                catch (Exception $e)
                {
                    echo 'Erro! '.$e->getMessage();
                }
            }
            else
            {
                echo "<h5>Ops! Algo deu errado...</h5>";
                echo "<p>Tente novamente.</p>";
                echo "<a class='btn btn-primary' href='exer4.php' role='button'>Voltar</a>";
            }
        ?>

    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>