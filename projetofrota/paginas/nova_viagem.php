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
            $horas = intval($_POST['horas']) ?? 0;
            $minutos = intval($_POST['minutos']) ?? 0;

            $h = (string) $horas;
            $m = (string) $minutos;
            $tempo_viagem = ""; 
            if (strlen($h) == 1)
                $h = "0".$h;
            if (strlen($m) == 1)
                $m = "0".$m;

            $tempo_viagem = $h."h".$m."m";

            if (empty($data_viagem) || empty($veiculo_id) || empty($motorista_id) || empty($rota_id) || empty($saida) || empty($chegada))
                $erro = "Todos os campos são obrigatórios!";
            else
            {
                if (novaViagem($data_viagem, $veiculo_id, $motorista_id, $rota_id, $saida, $chegada, $tempo_viagem))
                {
                    header ("Location: viagens.php");
                    exit();
                }
                else
                    $erro = "Erro ao criar a viagem";
            }

        } catch (Exception $e) {
            $erro = 'Erro: '.$e->getMessage();
        }
    }

?>

<div class="container mt-5">
    <h2>Criar Nova Viagem</h2>

    <?php if (!empty($erro)) : ?>
        <p class="text-danger"><?= $erro ?></p>
    <?php endif; ?>
    
    <form method="post">
        <div class="mb-3">
            <label for="data_viagem" class="form-label">Data</label>
            <input type="date" name="data_viagem" id="data_viagem" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="veiculo_id" class="form-label">Veículo</label>
            <select name="veiculo_id" id="veiculo_id" class="form-select" required>
                <?php foreach($veiculos as $ve) : ?>
                    <option value="<?= $ve['id'] ?>"> <?= $ve['placa'] ?> - <?= $ve['modelo'] ?> </option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="mb-3">
            <label for="motorista_id" class="form-label">Motorista</label>
            <select name="motorista_id" id="motorista_id" class="form-select" required>
                <?php foreach($motoristas as $m) : ?>
                    <option value="<?= $m['id'] ?>"> <?= $m['nome'] ?> </option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="mb-3">
            <label for="rota_id" class="form-label">Rota</label>
            <select name="rota_id" id="rota_id" class="form-select" required>
                <?php foreach($rotas as $r) : ?>
                    <option value="<?= $r['id'] ?>"> <?= $r['nome'] ?> </option>
                <?php endforeach; ?>
            </select>
        </div>
        <label for="saida" class="form-label">Horário de saída</label>
        <div class="mb-3 col-2">
            <input type="time" name="saida" id="saida" class="form-control" required>
        </div>
        <label for="chegada" class="form-label">Horário de chegada</label>
        <div class="mb-3 col-2">
            <input type="time" name="chegada" id="chegada" class="form-control" required>
        </div>
        <label for="tempoviagem" class="form-label">Tempo de viagem</label>

        <div class="row g-3 align-items-center mb-3">
            <div class="col-1" >
                <label for="horas" class="col-form-label">Horas:</label>
            </div>
            <div class="col-1">
                <input type="number" id="horas" name="horas" min="0" step="1" class="form-control">
            </div>
        </div>

        <div class="row g-3 align-items-center mb-3">
            <div class="col-1" >
                <label for="minutos" class="col-form-label">Minutos:</label>
            </div>
            <div class="col-1">
                <input type="number" id="minutos" name="minutos" min="0" max="60" step="1" class="form-control">
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Criar Viagem</button>
    </form>
</div>

<?php require_once 'rodape.php'; ?>
