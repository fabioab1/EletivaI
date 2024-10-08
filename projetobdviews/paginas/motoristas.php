<?php
    require_once 'cabecalho.php';
    require_once 'navbar.php';
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
            <tr>
                <td>1</td>
                <td>Teo</td>
                <td>teodorosampaio23@gmail.com</td>
                <td>(18) 99612-3456</td>
                <td>348</td>
                <td>
                    <a href="editar_motorista.php" class="btn btn-warning">Editar</a>
                    <a href="excluir_motorista.php" class="btn btn-danger">Excluir</a>
                </td>
            </tr>
        </tbody>
    </table>
</div>

<?php require_once 'rodape.php'; ?>