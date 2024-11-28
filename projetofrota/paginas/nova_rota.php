<?php
    require_once 'cabecalho.php';
    require_once 'navbar.php';
    require_once '../funcoes/rotas.php';

    $erro = "";

    if ($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        try {
            $nome = $_POST['nome'];
            $origem = $_POST['origem'];
            $destino = $_POST['destino'];
            $distancia = floatval($_POST['distancia']);

            if (empty($nome))
                $erro = "Todos os campos são obrigatórios!";
            else
            {
                if (novaRota($nome, $origem, $destino, $distancia))
                {
                    header ("Location: rotas.php");
                    exit();
                }
                else
                    $erro = "Erro ao criar a rota.";
            }
        } catch (Exception $e) {
            $erro = 'Erro: '.$e->getMessage();
        }
    }

?>

<div class="container mt-5">
    <h2>Criar Nova Rota</h2>

    <?php if (!empty($erro)): ?>
        <p class="text-danger">$erro</p>
    <?php endif; ?>

    <form method="POST">
        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" name="nome" id="nome" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="origem" class="form-label">Origem</label>
            <input type="text" name="origem" id="origem" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="destino" class="form-label">Destino</label>
            <input type="text" name="destino" id="destino" class="form-control" required>
        </div>
        <label for="distancia" class="form-label">Distância</label>
        <div class="input-group mb-3">
            <input type="number" min="0.1" step="0.1" name="distancia" id="distancia" class="form-control" required>
            <span class="input-group-text" id="km">km</span>
        </div>
        <button type="submit" class="btn btn-primary">Criar Rota</button>
    </form>
</div>

<?php require_once 'rodape.php'; ?>