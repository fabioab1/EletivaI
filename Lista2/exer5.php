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

        <form action="exer5resp.php" method="POST">

            <div class="row mb-3">

                <div class="col-2">
                    <label for="nota1" class="form-label">Digite a primeira nota:</label>
                    <input type="number" min="0"; step="0.01" id="nota1" name="nota1" class="form-control">
                </div>

                <div class="col-2">
                    <label for="nota2" class="form-label">Digite a segunda nota:</label>
                    <input type="number" min="0" step="0.01" id="nota2" name="nota2" class="form-control">
                </div>

                <div class="col-2">
                    <label for="nota3" class="form-label">Digite a terceira nota:</label>
                    <input type="number" min="0" step="0.01" id="nota3" name="nota3" class="form-control">
                </div>

            </div>

            <div class="d-flex justify-content-start">
                <button type="submit" class="btn btn-primary">Calcular</button>
            </div>

        </form>

    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>