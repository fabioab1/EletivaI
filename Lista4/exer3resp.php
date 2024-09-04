<?php
    declare(strict_types=1);
?>
<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Resposta do Exercício 3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <main class="container">
        <h1>Resposta do Exercício 3</h1>

        <?php
            function contemPalavra(string $palavra1, string $palavra2): bool
            {
                if (is_int(strpos($palavra1, $palavra2)))
                {
                    return true;
                }
                return false;
            }

            if($_SERVER['REQUEST_METHOD'] == 'POST')
            {
                try
                {
                    $palavra1 = $_POST['palavra1'] ?? "";
                    $palavra2 = $_POST['palavra2'] ?? "";

                    if (contemPalavra($palavra1, $palavra2))
                        echo 'A palavra "'.$palavra2.'" se encontra na palavra "'.$palavra1.'".';
                    else
                        echo 'A palavra "'.$palavra2.'" não se encontra na palavra "'.$palavra1.'".';
                        
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
                echo "<a class='btn btn-primary' href='exer3.php' role='button'>Voltar</a>";
            }

        ?>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>