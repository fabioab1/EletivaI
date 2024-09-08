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
            function verificarData(int $dia, int $mes, int $ano): bool
            {
                return checkdate($mes, $dia, $ano);
            }

            function apresentarData(int $dia, int $mes, int $ano): void
            {
                $timestamp = mktime(0, null, null, $mes, $dia, $ano);
                $data = date("d-m-Y", $timestamp);
                echo "<p>".str_replace("-", "/", $data).".</p>";
            }

            if($_SERVER['REQUEST_METHOD'] == 'POST')
            {
                try
                {
                    $dia = (int) $_POST['dia'] ?? 1;
                    $mes = (int) $_POST['mes'] ?? 1;
                    $ano = (int) $_POST['ano'] ?? 1;

                    if (verificarData($dia, $mes, $ano))
                    {
                        echo "<p>Data válida!</p>";
                    }
                    else
                        echo "<p>Data inválida.</p>";

                    apresentarData($dia, $mes, $ano); /* MESMO com a data INVÁLIDA ele ainda tenta converter para uma válida, pegando a diferença das datas aumentando-a.
                    Exemplo: 34/54/2024 vai retirar a diferença da quantidade máxima de meses e transformar em anos, a mesma coisa para os dias, em que o excedente será 
                    convertido em meses, ficando assim 04/07/2024. (54 meses / 12 meses = 4 anos + 2024 = 2028; 34 dias - 30 dias = 1 mês). */

                    // echo "<p>".str_pad("$dia", 2, '0', STR_PAD_LEFT)."/".str_pad("$mes", 2, '0', STR_PAD_LEFT)."/$ano.</p>";
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