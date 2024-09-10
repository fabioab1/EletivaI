<?php
    declare(strict_types=1);
?>
<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Resposta do Exercício 7</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <main class="container">
        <h1>Resposta do Exercício 7</h1>

        <?php
            if($_SERVER['REQUEST_METHOD'] == 'POST')
            {
                function diferencaDias(string $data1, string $data2): int
                {
                    $timestamp1 = strtotime(str_replace("/","-", $data1));
                    $timestamp2 = strtotime(str_replace("/","-", $data2));
                    
                    $segundos = $timestamp1 - $timestamp2;
                    $dias = $segundos / 86400;

                    if ($dias < 0)
                        return (int) $dias * (-1);
                    return (int) $dias;
                }

                try
                {
                    $data1 = $_POST['data1'] ?? "10/09/2024";
                    $data2 = $_POST['data2'] ?? "11/09/2024";

                    $diferdias = diferencaDias($data1, $data2);

                    echo "<p>A diferença de dias entre as duas datas é de $diferdias dias.</p>";
                }
                catch (Exception $e)
                {
                    echo 'Erro! '.$e->getMessage();
                }
                catch (TypeError $e)
                {
                    echo 'Insira uma data válida.';
                }
            }
            else
            {
                echo '<h5>Ops! Algo deu errado...</h5>';
                echo '<p>Tente novamente.</p>';
                echo '<a class="btn btn-primary" href="exer7.php" role="button">Voltar</a>';
            }
        ?>

    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>