<?php
    require_once 'cabecalho.php'; 
    require_once 'navbar.php';    
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
            <tr>
                <td>1</td>
                <td>10/10/2024</td>
                <td>Veículo 1</td>
                <td>Teo</td>
                <td>Linha 1</td>
                <td>17:50</td>
                <td>18:30</td>
                <td>00h40m</td>
                <td>
                    <a href="excluir_viagem.php" class="btn btn-danger">Excluir</a>
                </td>
            </tr>
        </tbody>
    </table>
</div>

<?php require_once 'rodape.php'; ?>
