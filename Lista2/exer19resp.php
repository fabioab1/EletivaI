<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Resposta do Exercício 19</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <main class="container">
        <h1>Resposta do Exercício 19</h1>
        <?php

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            try {
                $dias = (float) $_POST['dias'] ?? 0;
                $horas = 24 * $dias;
                $minutos = fmod($horas, 1) * 60;
                $segundos = fmod($minutos, 1) * 60;

                echo "$dias dia(s) equivalem a: " . ((int) $horas) . " horas, " . ((int) $minutos) . " minutos e " . number_format($segundos, 1, ",", ".") . " segundos.";

                $convhoras = 24 * $dias;
                $convminutos = 60 * $convhoras;
                $convsegundos = 60 * $convminutos;

                echo "<p class='m-0'>ou</p><p>$dias dia(s) equivalem a: " . number_format($convhoras, 1, ",", ".") . " horas ou " . number_format($convminutos, 1, ",", ".") . " minutos ou " . number_format($convsegundos, 1, ",", ".") . " segundos.</p>";
            } catch (Exception $e) {
                echo 'Erro! ' . $e->getMessage();
            }
        } else {
            echo '<h3>Ops! Algo deu errado...</h3><p>Tente novamente.</p><a class="btn btn-primary" href="exer19.php" role="button">Voltar</a>';
        }

        ?>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>