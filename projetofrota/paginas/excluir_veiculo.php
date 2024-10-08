<?php require_once 'cabecalho.php'; ?>
<?php require_once 'navbar.php'; ?>

<div class="container mt-5">
    <h2>Excluir Veículo</h2>

    <p>Tem certeza que deseja excluir o véiculo abaixo?</p>

    <ul>
        <li><strong>Marca:</strong></li>
        <li><strong>Modelo:</strong></li>
        <li><strong>Ano de fabricação:</strong></li>
        <li><strong>Placa:</strong></li>
        <li><strong>Motor:</strong></li>
        <li><strong>Capacidade de passageiros:</strong></li>
        <li><strong>Condição de uso:</strong></li>
    </ul>

    <form method="POST">
        <button type="submit" name="confirmar" class="btn btn-danger">Excluir</button>
        <a href="veiculos.php" class="btn btn-secondary">Cancelar</a>
    </form>

</div>

<?php require_once 'rodape.php'; ?>