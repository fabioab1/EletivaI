<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercício 12</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <main class="container">

        <h1>Exercício 12</h1>
        
        <?php
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                try{
                    $base = (float) $_POST['base'] ?? 0;
                    $expoente = (float)$_POST['expoente'] ?? 0;
                    $resultado = $base**$expoente;

                    echo "O resultado de $base^$expoente é: $resultado.";
                } catch(Exception $e){
                    echo 'Erro! '.$e->getMessage();
                }
            } else{
                echo '<h3>Ops! Algo deu errado...</h3><p>Tente novamente.</p><a class="btn btn-primary" href="exer12.php" role="button">Voltar</a>';
            }
        ?>

    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>