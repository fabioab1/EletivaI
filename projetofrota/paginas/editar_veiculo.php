<?php
    require_once 'cabecalho.php';
    require_once 'navbar.php';
    require_once '../funcoes/veiculos.php';
    require_once '../funcoes/marcas.php';

    $id = $_GET['id'];

    if (!$id)
    {
        header ("Location: veiculos.php");
        exit();
    }

    $veiculo = retornaVeiculoPorId($id);
    
    if ($veiculo == null)
    {
        header ("Location: veiculos.php");
        exit();
    }

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
            $id = intval($_POST['id']);

            if (empty($marca_id) || empty($modelo) || empty($ano) || empty($placa) || empty($motor) || empty($capacidade) || empty($condicao))
                $erro = "Preencha os campos obrigatórios!";
            else
            {
                if (editarVeiculo($marca_id, $modelo, $ano, $placa, $motor, $capacidade, $condicao, $id))
                {
                    header ("Location: veiculos.php");
                    exit();
                }
                else
                    $erro = "Erro ao alterar o produto!";
            }
        } catch (Exception $e) {
            $erro = "Erro: ".$e->getMessage();
        }
    }
?>

<div class="container mt-5">
    <h2>Editar Veículo</h2>

    <?php if(!empty($erro)):?>
        <p class="text-danger"><?= $erro ?></p>
    <?php endif; ?>

    <form method="POST">
        <input type="hidden" name="id" value="<?= $id ?>"/>
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
            <input type="text" name="modelo" id="modelo" value="<?= $veiculo['modelo'] ?>" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="ano" class="form-label">Ano de fabricação</label>
            <input type="number" min="1885" max="<?=date("Y")?>" name="ano" id="ano" value="<?= $veiculo['ano'] ?>" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="placa" class="form-label">Placa</label>
            <input type="text" name="placa" id="placa" value="<?= $veiculo['placa'] ?>" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="motor" class="form-label">Motor</label>
            <input type="number" name="motor" min="1" step="0.1" id="motor" value="<?= $veiculo['motor'] ?>" class="form-control" requiired>
        </div>
        <div class="mb-3">
            <label for="capacidade" class="form-label">Capacidade de passageiros</label>
            <input type="number" name="capacidade" min="1" id="capacidade" value="<?= $veiculo['passageiros_max'] ?>" class="form-control" required>
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
        <button type="submit" class="btn btn-primary">Atualizar Veículo</button>
        <a href="veiculos.php" class="btn btn-light">Cancelar</a>
    </form>
</div>

<?php require_once 'rodape.php'; ?>