<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercício 1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <main class="container">
        <h1>Exercício 1</h1>

        <form action="" method="POST">
            <?php for($i=1;$i<=5;$i++): ?>
                <div class="row mb-3">
                    <div class="col-3">
                        <label for="nome" class="form-label">Nome</label>
                        <input type="text" name="nomes[]" id="nome" class="form-control" placeholder="Nome <?= $i ?>">
                    </div>
                    <div class="col-3">
                        <label for="numero" class="form-label">Número</label>
                        <input type="text" name="numeros[]" id="numero" class="form-control" placeholder="Número <?= $i ?>">
                    </div>
                </div>

            <?php endfor; ?>
            <button type="submit" class="btn btn-primary mb-3">Enviar</button>
        </form>

        <?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST')
            {
                try
                {
                    $nomes = $_POST['nomes'];
                    $numeros = $_POST['numeros'];

                    $contatos = array();
    
                    for ($i=0; $i<5; $i++)
                    {
                        $nomeParecido = false;
                        $numeroParecido = false;

                        $nomeAtual = $nomes[$i];
                        $numeroAtual = $numeros[$i];

                        #echo $nomeAtual;
                        #echo $numeroAtual;

                        for ($j=0; $j<5; $j++)
                        {
                            if ($nomeAtual == $nomes[$j] && $j != $i)
                            {
                                #echo "<p>$nomes[$j]</p>";
                                $nomeParecido = true;
                                break;
                            }
                        }

                        for ($j=0; $j<5; $j++)
                        {
                            if ($numeroAtual == $numeros[$j] && $j != $i)
                            {
                                #echo "<p>$numeros[$j]</p>";
                                $numeroParecido = true;
                                break;
                            }
                        }

                        if (!$nomeParecido && !$numeroParecido)
                            $contatos[$nomeAtual] = $numeroAtual;
                    }
                    
                    ksort($contatos);
                    echo "<p>Lista de contatos ordenada sem duplicatas:</p>";
                    foreach ($contatos as $chave => $valor)
                        echo "<p>Nome: $chave - Número: $valor.</p>";

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