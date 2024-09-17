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

        <?php
            $frutas = array("morango", "maçã", "abacaxi");

            echo "<p>".$frutas[0]."</p>";

            $frutas[0] = "laranja";

            $frutas["fruta"] = 15;

            $cores[0] = "azul";
            $cores["cor"] = "laranja";

            $mapa = [
                "valor1" => 1,
                "valor2" => 2,
                "valor3" => 3
            ];

            var_dump($cores);
            echo "<p></p>";
            print_r($mapa);

            asort($frutas); # Ordena o mapa pelo valor de cada chave;
            ksort($frutas); # Ordena o mapa pela chave;

            # foreach($frutas as $valor) # Apenas acessar o valor

            foreach($frutas as $chave => $valor) # Aqui ele acessa o valor e fornece acesso à chave também
                echo "<p>Na posição $chave temos a fruta: $valor</p>";

            echo "<p>Quantidade de elementos:".count($frutas)."</p>";

        ?>

    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>