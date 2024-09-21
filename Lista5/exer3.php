<?php
    declare(strict_types=1);
?>
<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercício 3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <main class="container">
        <h1>Exercício 3</h1>

        <form action="" method="POST">
            <?php for($i=0; $i<5; $i++): ?>
                <div class="row mb-3">
                    <div class="col-1">
                        <label for="cod" class="form-label">Código:</label>
                        <input type="number" id="cod" min="0" name="cods[]" class="form-control">
                    </div>

                    <div class="col-3">
                        <label for="nome" class="form-label">Nome:</label>
                        <input type="text" id="nome" name="nomes[]" placeholder="Produto <?= $i+1 ?>" class="form-control">
                    </div>

                    <div class="col-2">
                        <label for="preco" class="form-label">Preço:</label>
                        <input type="number" id="preco" min="0" step="0.01" name="precos[]" class="form-control">
                    </div>
                </div>
            <?php endfor; ?>
            <button type="submit" class="btn btn-primary mb-3">Enviar</button>

        </form>

        <?php
            function ordena()

            if ($_SERVER['REQUEST_METHOD'] == 'POST')
            {
                try
                {
                    $codigos = $_POST['cods'];
                    $nomes = $_POST['nomes'];
                    $precos = $_POST['precos'];

                    $produtos = array();
                    
                    for ($i = 0; $i < 5; $i++)
                    {
                        $valores = array();

                        if ($precos[$i] > 100)
                            $valores[$nomes[$i]] = $precos[$i] - $precos[$i] * 10 / 100;
                        else
                            $valores[$nomes[$i]] = $precos[$i];

                        $produtos[$codigos[$i]] = $valores;
                    }

                    ksort()

                    echo "<p>Lista dos produtos ordenada por nome e com um desconto de 10% aplicado:</p>";
                    foreach ($produtos as $chave => $valor)
                    {
                        echo "<p>Código: $chave - ";
                        foreach($valor as $nome => $preco)
                            echo"Nome: $nome - Preço: R$ ".number_format($preco, 2, ',', '.')."</p>";
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