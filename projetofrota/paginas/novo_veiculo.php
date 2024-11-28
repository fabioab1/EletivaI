<?php
    require_once 'cabecalho.php';
    require_once 'navbar.php';
    require_once '../funcoes/veiculos.php';
    require_once '../funcoes/marcas.php';

    $marcas = todasMarcas();

    $erro = "";

    if ($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        try {
            $marca_id = intval($_POST['marca_id']);
            $modelo = $_POST['modelo'];
            $ano = intval($_POST['ano']);
            $placa = $_POST['placa'];
            $motor = floatval($_POST['motor']);
            $capacidade = intval($_POST['capacidade']);
            $condicao = intval($_POST['condicao']);

            if (empty($marca_id) || empty($modelo) || empty($ano) || empty($placa) || empty($motor) || empty($capacidade) || empty($condicao))
                $erro = "Todos os campos são obrigatórios!";
            else
            {
                if (novoVeiculo($marca_id, $modelo, $ano, $placa, $motor, $capacidade, $condicao))
                {
                    header ("Location: veiculos.php");
                    exit();
                }
                else
                    $erro = "Erro ao cadastrar o veículo.";
            }
        } catch (Exception $e) {
            $erro = 'Erro: '.$e->getMessage();
        }
    }
?>

<div class="container mt-5">
    <h2>Criar Novo Veículo</h2>

    <?php if (!empty($erro)) : ?>
        <p class="text-danger"><?= $erro ?></p>
    <?php endif; ?>

    <form method="POST">
        <div class="mb-3">
            <label for="marca_id" class="form-label">Marca</label>
            <select name="marca_id" id="marca_id" class="form-select" required>
                <?php foreach($marcas as $m) : ?>
                    <option value="<?= $m['id'] ?>"> <?= $m['nome'] ?> </option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="mb-3">
            <label for="modelo" class="form-label">Modelo</label>
            <input type="text" name="modelo" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="ano" class="form-label">Ano de fabricação</label>
            <input type="number" min="1885" max="<?= date("Y");?>" name="ano" id="ano" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="placa" class="form-label">Placa</label>
            <input type="text" name="placa" id="placa" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="motor" class="form-label">Motor</label>
            <input type="number" min="1" step="0.1" name="motor" id="motor" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="capacidade" class="form-label">Capacidade de passageiros</label>
            <input type="number" min="1" name="capacidade" id="capacidade" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="condicao" class="form-label">Condição de uso</label>
            <select name="condicao" id="condicao" class="form-select" required>
                <option value="1">Ótimo</option>
                <option value="2">Bom</option>
                <option value="3">Regular</option>
                <option value="4">Ruim</option>
                <option value="5">Quebrado</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Criar Veículo</button>
    </form>
</div>

<?php require_once 'rodape.php'; ?>