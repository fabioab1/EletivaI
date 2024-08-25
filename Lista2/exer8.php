<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercício 8</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>

    <main class="container">

        <h1>Exercício 8</h1>
        <p>a (cm) * b (cm) = c (cm).</p>
        <form action="exer8resp.php" method="POST">

            <div class="row mb-3">

                <div class="col-2">
                    <label for="largura" class="form-label">Digite a largura:</label>
                    <input type="number" step="0.01" id="largura" name="largura" class="form-control">
                </div>

                <div class="col-2">
                    <label for="altura" class="form-label">Digite a altura:</label>
                    <input type="number" step="0.01" id="altura" name="altura" class="form-control">
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