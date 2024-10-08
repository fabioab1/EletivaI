<?php
    require_once 'cabecalho.php';
    require_once 'navbar.php';
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
            <tr>
                <td>1</td>
                <td>Volkswagen</td>
                <td>Gol</td>
                <td>2004</td>
                <td>BRA1S23</td>
                <td>1.6</td>
                <td>5</td>
                <td>Regular</td>
                <td>
                    <a href="editar_veiculo.php" class="btn btn-warning">Editar</a>
                    <a href="excluir_veiculo.php" class="btn btn-danger">Excluir</a>
                </td>
            </tr>
        </tbody>
    </table>
</div>

<?php require_once 'rodape.php'; ?>