<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercício 5</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <main class="container">
        <h1>Exercício 5</h1>

        <form action="" method="POST">
            <?php for($i=0;$i<5;$i++): ?>
                <div class="row mb-3">
                    <div class="col-4">
                        <label for="titulo" class="form-label">Título:</label>
                        <input type="text" id="titulo" name="titulos[]" placeholder="Livro <?= $i+1?>" class="form-control">
                    </div>
                    <div class="col-2">
                        <label for="qntd" class="form-label">Quantidade:</label>
                        <input type="number" min="0" id="qntd" name="quantidades[]" class="form-control">
                    </div>
                </div>
            <?php endfor; ?>
            <button type="submit" class="btn btn-primary mb-3">Verificar</button>

        </form>

        <?php
            if($_SERVER['REQUEST_METHOD'] == 'POST')
            {
                try
                {
                    $titulos = $_POST['titulos'];
                    $quantidades = $_POST['quantidades'];

                    $livros = array();

                    for($i=0; $i<5; $i++)
                        $livros[$titulos[$i]] = $quantidades[$i];

                    ksort($livros);

                    foreach($livros as $titulo => $quantidade)
                    {
                        if($quantidade<5)
                            echo "<div class='row align-items-center mb-3'><div class='col-md-auto'>Título: $titulo - Quantidade: $quantidade </div>  <div class='col'> <div class='badge text-bg-danger text-wrap ms-3' style='width: 6rem;'>Baixa quantidade!</div>  </div> </div>";
                        else
                            echo"<div class='row align-items-center mb-3'><div class='col'>Título: $titulo - Quantidade: $quantidade </div> </div>";
                    }
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