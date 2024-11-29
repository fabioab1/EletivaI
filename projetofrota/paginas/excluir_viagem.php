<?php 
    require_once 'cabecalho.php'; 
    require_once 'navbar.php';
    require_once '../funcoes/viagens.php';
    require_once '../funcoes/veiculos.php';
    require_once '../funcoes/motoristas.php';
    require_once '../funcoes/rotas.php';

    $id = $_GET['id'];
    if (!$id)
    {
        header ("Location: viagens.php");
        exit();
    }

    $viagem = retornaViagemPorId($id);
    
    if ($viagem == null)
    {
        header ("Location: viagens.php");
        exit();
    }
    
    $veiculo = retornaVeiculoPorId($viagem['veiculo_id']);
    $motorista = retornaMotoristaPorId($viagem['motorista_id']);
    $rota = retornaRotaPorId($viagem['rota_id']);
    
    if ($veiculo == null || $motorista == null || $rota == null)
    {
        header ("Location: viagens.php");
        exit();
    }

    $erro = "";

    if ($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        try {
            $id = intval($_POST['id']);

            if (empty($id))
            {
                header ("Location: viagens.php");
                exit();
            }
            else
            {
                if (excluirViagem($id))
                {
                    header ("Location: viagens.php");
                    exit();
                }
            }
        } catch (Exception $e) {
            $erro = 'Erro: '.$e->getMessage();
        }
    }

?>

<div class="container mt-5">
    <h2>Excluir Viagem</h2>

    <?php if (!empty($erro)): ?>
        <p class="text-danger"><?= $erro ?></p>
    <?php endif; ?>

    <p>Tem certeza de que deseja excluir a viagem abaixo?</p>

    <ul>
        <li><strong>Data:</strong> <?= $viagem['data_viagem'] ?> </li>
        <li><strong>Veículo:</strong> <?= $veiculo['modelo'] ?> </li>
        <li><strong>Motorista:</strong> <?= $motorista['nome'] ?> </li>
        <li><strong>Rota:</strong> <?= $rota['nome'] ?> </li>
        <li><strong>Horário de saída:</strong> <?= substr($viagem['saida'], 0, 5) ?> </li>
        <li><strong>Horário de chegada:</strong> <?= substr($viagem['chegada'], 0, 5) ?> </li>
        <li><strong>Tempo de viagem:</strong> <?= $viagem['tempo_viagem'] ?> </li>
    </ul>

    <form method="post">
        <input type="hidden" name="id" value="<?= $id ?>">
        <button type="submit" name="confirmar" class="btn btn-danger">Excluir</button>
        <a href="viagens.php" class="btn btn-secondary">Cancelar</a>
    </form>

</div>

<?php require_once 'rodape.php'; ?>
