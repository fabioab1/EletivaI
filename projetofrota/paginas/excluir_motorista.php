<?php require_once 'cabecalho.php'; ?>
<?php require_once 'navbar.php'; ?>

<div class="container mt-5">
    <h2>Excluir Motorista</h2>

    <p>Tem certeza que deseja excluir o motorista abaixo?</p>

    <ul>
        <li><strong>Nome:</strong></li>
        <li><strong>E-mail:</strong></li>
        <li><strong>Número de celular:</strong></li>
        <li><strong>Horas de serviço:</strong></li>
    </ul>

    <form method="POST">
        <button type="submit" name="confirmar" class="btn btn-danger">Excluir</button>
        <a href="motoristas.php" class="btn btn-secondary">Cancelar</a>
    </form>

</div>

<?php require_once 'rodape.php'; ?>