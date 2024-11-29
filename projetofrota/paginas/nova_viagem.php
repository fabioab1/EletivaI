<?php 
    require_once 'cabecalho.php'; 
    require_once 'navbar.php';
    require_once '../funcoes/viagens.php';
    require_once '../funcoes/veiculos.php';
    require_once '../funcoes/motoristas.php';
    require_once '../funcoes/rotas.php';

    $veiculos = todosVeiculos();
    $motoristas = todosMotoristas();
    $rotas = todasRotas();

    $erro = "";

    if ($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        try {
            $data_viagem = $_POST['data_viagem'];
            $veiculo_id = intval($_POST['veiculo_id']);
            $motorista_id = intval($_POST['motorista_id']);
            $rota_id = intval($_POST['rota_id']);
            $saida = $_POST['saida'];
            $chegada = $_POST['chegada'];


        } catch (Exception $e) {
            $erro = 'Erro: '.$e->getMessage();
        }
    }




?>

<div class="container mt-5">
    <h2>Criar Nova Viagem</h2>

    <form method="post">
        <div class="mb-3">
            <label for="data_viagem" class="form-label">Data</label>
            <input type="date" name="data_viagem" id="data_viagem" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="veiculo_id" class="form-label">Veículo</label>
            <select name="veiculo_id" id="veiculo_id" class="form-select" required>
                    <option value="1">Veículo 1</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="motorista_id" class="form-label">Motorista</label>
            <select name="motorista_id" id="motorista_id" class="form-select" required>
                    <option value="1">Teo</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="rota_id" class="form-label">Rota</label>
            <select name="rota_id" id="rota_id" class="form-select" required>
                    <option value="1">Linha 1</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="saida" class="form-label">Horário de saída</label>
            <input type="time" name="saida" id="saida" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="chegada" class="form-label">Horário de chegada</label>
            <input type="time" name="chegada" id="chegada" class="form-control" required>
        </div>
        <label for="tempoviagem" class="form-label">Tempo de viagem</label>
        <div class="input-group mb-3 col-2">
            <input type="number" min="0.1" step="0.1" name="tempoviagem" id="tempoviagem" class="form-control" required>
            <span class="input-group-text" id="h">horas</span>
        </div>
        <div class="input-group mb-3 col-2">
            <input type="number" min="0.1" step="0.1" name="tempoviagem" id="tempoviagem" class="form-control" required>
            <span class="input-group-text" id="h">horas</span>
        </div>
        <button type="submit" class="btn btn-primary">Criar Viagem</button>
    </form>
</div>

<?php require_once 'rodape.php'; ?>
