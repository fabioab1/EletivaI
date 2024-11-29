<?php
    require_once 'cabecalho.php'; 
    require_once 'navbar.php';    
    require_once '../funcoes/viagens.php';
    require_once '../funcoes/veiculos.php';
    require_once '../funcoes/motoristas.php';
    require_once '../funcoes/rotas.php';
?>

<div class="container mt-5">
    <h2>Gerenciamento de Viagens</h2>
    <a href="nova_viagem.php" class="btn btn-success mb-3">Nova Viagem</a>
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Data</th>
                <th>Veículo</th>
                <th>Motorista</th>
                <th>Rota</th>
                <th>Horário de saída</th>
                <th>Horário de chegada</th>
                <th>Tempo de viagem</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>

            <?php
                $viagens = todasViagens();
                foreach($viagens as $vg):
            ?>

            <?php
                $veiculo = retornaVeiculoPorId($vg['veiculo_id']);
                $motorista = retornaMotoristaPorId($vg['motorista_id']);
                $rota = retornaRotaPorId($vg['rota_id']);
            ?>

            <tr>
                <td> <?= $vg['id'] ?> </td>
                <td> <?= $vg['data_viagem'] ?> </td>
                <td> <?= $veiculo['modelo'] ?> </td>
                <td> <?= $motorista['nome'] ?> </td>
                <td> <?= $rota['nome'] ?> </td>
                <td> <?= substr($vg['saida'], 0, 5) ?> </td>
                <td> <?= substr($vg['chegada'], 0, 5) ?> </td>
                <td> <?= $vg['tempo_viagem'] ?> </td>
                <td>
                    <a href="excluir_viagem.php?id=<?=$vg['id']?>" class="btn btn-danger">Excluir</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?php require_once 'rodape.php'; ?>
