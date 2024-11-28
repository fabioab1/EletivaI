<?php
    require_once 'cabecalho.php';
    require_once 'navbar.php';
    require_once '../funcoes/motoristas.php';
?>

<div class="container mt-5">
    <h2>Controle de Motoristas</h2>
    <a href="novo_motorista.php" class="btn btn-success mb-3">Adicionar Motorista</a>
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Número de celular</th>
                <th>Horas de serviço</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>

            <?php
                $motoristas = todosMotoristas();
                foreach ($motoristas as $m):
            ?>

            <tr>
                <td> <?= $m['id'] ?> </td>
                <td> <?= $m['nome'] ?> </td>
                <td> <?= $m['email'] ?> </td>
                <td> <?= $m['numero_cel'] ?> </td>
                <td> <?= $m['horas_serv'] ?> </td>
                <td>
                    <a href="editar_motorista.php?id=<?= $m['id'] ?>" class="btn btn-warning">Editar</a>
                    <a href="excluir_motorista.php?id=<?= $m['id'] ?>" class="btn btn-danger">Excluir</a>
                </td>
            </tr>

            <?php
                endforeach;
            ?>

        </tbody>
    </table>
</div>

<?php require_once 'rodape.php'; ?>