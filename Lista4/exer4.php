<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercício 4</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <main class="container">
        <h1>Exercício 4</h1>

        <form action="exer4resp.php" method="POST">
            <div class="row mb-3">
                <div class="col-2">
                    <label for="dia" class="form-label">Informe o dia:</label>
                    <input type="number" id="dia" name="dia" class="form-control">
                </div>
                <div class="col-2">
                    <label for="mes" class="form-label">Informe o mês:</label>
                    <input type="number" id="mes" name="mes" class="form-control">
                </div>
                <div class="col-2">
                    <label for="ano" class="form-label">Informe o ano:</label>
                    <input type="number" value="2024" id="ano" name="ano" class="form-control">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
        
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>