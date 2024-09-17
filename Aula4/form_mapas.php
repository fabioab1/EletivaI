<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mapas Aula 4</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <main class="container">
        <h1>Mapas Aula 4</h1>

        <form action="" method="POST">
        
            <?php for($i=1;$i<=10; $i++): ?>
                <input type="text" name="nomes[]" placeholder="Valor <?= $i ?>" />
            <?php endfor; ?>
            <button type="submit">Enviar</button>
        </form>

        <?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST')
            {
                try
                {
                    $valores = $_POST['nomes'];
                    foreach ($valores as $chave => $valor)
                        echo "<p>$chave: $valor</p>";
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