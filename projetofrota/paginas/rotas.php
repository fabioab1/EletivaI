<?php
    require_once 'cabecalho.php';
    require_once 'navbar.php';
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
            <tr>
                <td>1</td>
                <td>Linha 1</td>
                <td>Rancharia</td>
                <td>Presidente Prudente</td>
                <td>60 km</td>
                <td>
                    <a href="editar_rota.php" class="btn btn-warning">Editar</a>
                    <a href="excluir_rota.php" class="btn btn-danger">Excluir</a>
                </td>
            </tr>
        </tbody>
    </table>
</div>

<?php require_once 'rodape.php'; ?>