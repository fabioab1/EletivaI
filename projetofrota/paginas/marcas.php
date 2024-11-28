<?php
    require_once 'cabecalho.php';
    require_once 'navbar.php';
    require_once '../funcoes/marcas.php';
?>

<div class="container mt-5">
    <h2>Gerenciamento de Marcas</h2>
    <a href="nova_marca.php" class="btn btn-success mb-3">Nova Marca</a>
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>

            <?php
                $marcas = todasMarcas();
                foreach ($marcas as $m):
            ?>

            <tr>
                <td> <?= $m['id'] ?> </td>
                <td> <?= $m['nome'] ?> </td>
                <td>
                    <a href="editar_marca.php?id=<?= $m['id'] ?>" class="btn btn-warning">Editar</a>
                    <a href="excluir_marca.php?id=<?= $m['id'] ?>" class="btn btn-danger">Excluir</a>
                </td>
            </tr>

            <?php
                endforeach;
            ?>

        </tbody>
    </table>
</div>

<?php require_once 'rodape.php'; ?>