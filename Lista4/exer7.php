<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercício 7</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <main class="container">
        <h1>Exercício 7</h1>

        <form action="exer7resp.php" method="POST">
            <div class="row mb-3">
                <label for="data1" class="col-form-label col-1">1ª Data:</label>
                <div class="col-2">
                    <input type="text" placeholder="dd/mm/YYYY" id="data1" name="data1" class="form-control">
                </div>
            </div>
            
            <div class="row mb-3">
                <label for="data2" class="col-form-label col-1">2ª Data:</label>
                <div class="col-2">
                    <input type="text" placeholder="dd/mm/YYYY" id="data2" name="data2" class="form-control">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>