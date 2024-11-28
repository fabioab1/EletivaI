<?php
    require_once 'cabecalho.php';
    require_once 'navbar.php';
    require_once '../funcoes/rotas.php';
?>

<div class="container mt-5">
    <h2>Gerenciamento de Rotas</h2>
    <a href="nova_rota.php" class="btn btn-success mb-3">Nova Rota</a>
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Origem</th>
                <th>Destino</th>
                <th>Distância</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>

            <?php
                $rotas = todasRotas();
                foreach ($rotas as $r):
            ?>

            <tr>
                <td> <?= $r['id'] ?> </td>
                <td> <?= $r['nome'] ?> </td>
                <td> <?= $r['origem'] ?> </td>
                <td> <?= $r['destino'] ?></td>
                <td> <?= $r['distancia'] ?> km</td>
                <td>
                    <a href="editar_rota.php?id=<?= $r['id'] ?>" class="btn btn-warning">Editar</a>
                    <a href="excluir_rota.php?id=<?= $r['id'] ?>" class="btn btn-danger">Excluir</a>
                </td>
            </tr>

            <?php
                endforeach;
            ?>

        </tbody>
    </table>
</div>

<?php require_once 'rodape.php'; ?>