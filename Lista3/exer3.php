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

        <form action="respexer3.php" method="POST">
            <div class="row mb-3">
                <div class="col-2">
                    <label for="a" class="form-label">A:</label>
                    <input type="number" id="a" name="a" class="form-control">
                </div>
                <div class="col-2">
                    <label for="b" class="form-label">B:</label>
                    <input type="number" id="b" name="b" class="form-control">
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Enviar</button>

        </form>

    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>