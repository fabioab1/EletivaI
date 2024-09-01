<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Resposta do Exercício 5</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <main class="container">
        <h1>Resposta do Exercício 5</h1>
        <?php
            if($_SERVER['REQUEST_METHOD'] == 'POST')
            {
                try
                {
                    $valor = (int) $_POST['valor'] ?? 1;
                    switch ($valor)
                    {
                        case 0:
                            echo "<p>Insira um número válido.</p>";
                            break;
                        case 1:
                            echo "<p>$valor - Janeiro.</p>";
                            break;
                        case 2:
                            echo "<p>$valor - Fevereiro.</p>";
                            break;
                        case 3:
                            echo "<p>$valor - Março.</p>";
                            break;
                        case 4:
                            echo "<p>$valor - Abril.</p>";
                            break;
                        case 5:
                            echo "<p>$valor - Maio.</p>";
                            break;
                        case 6:
                            echo "<p>$valor - Junho.</p>";
                            break;
                        case 7:
                            echo "<p>$valor - Julho.</p>";
                            break;
                        case 8:
                            echo "<p>$valor - Agosto.</p>";
                            break;
                        case 9:
                            echo "<p>$valor - Setembro.</p>";
                            break;
                        case 10:
                            echo "<p>$valor - Outubro.</p>";
                            break;
                        case 11:
                            echo "<p>$valor - Novembro.</p>";
                            break;
                        default:
                            echo "<p>$valor - Dezembro.</p>";
                    }
                    echo "<a class='btn btn-primary' href='exer5.php' role='button'>Voltar</a>";
                }
                catch (Exception $e)
                {
                    echo 'Erro! '.$e->getMessage();
                }
            }
            else
                echo "<h3>Ops! Algo deu errado...</h3><p>Tente novamente.</p><a class='btn btn-primary' href='exer5.php' role='button'>Voltar</a>";
        ?>

    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>