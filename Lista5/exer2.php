<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercício 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <main class="container">
        <h1>Exercício 2</h1>

        <form action="" method="POST">
            <?php for($i=0;$i<5;$i++): ?>
                <div class="row mb-3">
                    <div class="col-3">
                        <label for="nome" class="form-label">Nome:</label>
                        <input type="text" id="nome" name="nomes[]" placeholder="Aluno <?= $i+1 ?>" class="form-control">
                    </div>

                    <div class="col-1">
                        <label for="n1" class="form-label">Nota 1:</label>
                        <input type="number" step="0.01" min="0" id="n1" name="notas1[]" class="form-control">
                    </div>

                    <div class="col-1">
                        <label for="n2" class="form-label">Nota 2:</label>
                        <input type="number" step="0.01" min="0" id="n2" name="notas2[]" class="form-control">
                    </div>

                    <div class="col-1">
                        <label for="n3" class="form-label">Nota 3:</label>
                        <input type="number" step="0.01" min="0" id="n3" name="notas3[]" class="form-control">
                    </div>
                </div>
            <?php endfor; ?>
            <button type="submit" class="btn btn-primary mb-3">Calcular</button>

        </form>

        <?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST')
            {
                try
                {
                    $alunos = $_POST['nomes'];
                    $notas1 = $_POST['notas1'];
                    $notas2 = $_POST['notas2'];
                    $notas3 = $_POST['notas3'];

                    $listaAlunos = array();

                    for($i=0; $i<5; $i++)
                    {
                        $listaAlunos[$alunos[$i]] = ($notas1[$i] + $notas2[$i] + $notas3[$i]) / 3;
                    }

                    echo "<p>Lista ordenada de alunos com suas médias:</p>";
                    foreach ($listaAlunos as $chave => $valor)
                        echo "<p>Aluno: $chave - Média: ".number_format($valor, 1, ',', '.').".</p>";

                }
                catch (Exception $e)
                {
                    echo 'Erro! '.$e->getMessage();
                }
            }




        ?>


    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>