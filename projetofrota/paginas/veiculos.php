<?php
    require_once 'cabecalho.php';
    require_once 'navbar.php';
    require_once '../funcoes/veiculos.php';
    require_once '../funcoes/marcas.php';
?>

<div class="container mt-5">
    <h2>Gerenciamento de Veículos</h2>
    <a href="novo_veiculo.php" class="btn btn-success mb-3">Novo Veículo</a>
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Ano de fabricação</th>
                <th>Placa</th>
                <th>Motor</th>
                <th>Capacidade de passageiros</th>
                <th>Condição de uso</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>

            <?php
                $veiculos = todosVeiculos();
                foreach($veiculos as $v):
            ?>

            <?php
                $marca = retornaMarcaPorId($v['marca_id']);
                $condicao = "";
                if ($v['condicao'] == 1)
                    $condicao = "Ótimo";
                else if ($v['condicao'] == 2)
                    $condicao = "Bom";
                else if ($v['condicao'] == 3)
                    $condicao = "Regular";
                else if ($v['condicao'] == 4)
                    $condicao = "Ruim";
                else if ($v['condicao'] == 5)
                    $condicao = "Quebrado";
            ?>

            <tr>
                <td> <?= $v['id'] ?> </td>
                <td> <?php echo $marca['nome'] ?> </td>
                <td> <?= $v['modelo'] ?> </td>
                <td> <?= $v['ano'] ?> </td>
                <td> <?= $v['placa'] ?> </td>
                <td> <?= $v['motor'] ?> </td>
                <td> <?= $v['passageiros_max'] ?> </td>
                <td> <?= $condicao ?> </td>
                <td>
                    <a href="editar_veiculo.php?id=<?=$v['id']?>" class="btn btn-warning">Editar</a>
                    <a href="excluir_veiculo.php?id=<?=$v['id']?>" class="btn btn-danger">Excluir</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?php require_once 'rodape.php'; ?>