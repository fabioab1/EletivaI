<?php
    require_once 'cabecalho.php';
    require_once 'navbar.php';
?>

<div class="container mt-5">
    <h2>Excluir Rota</h2>

    <p>Tem certeza que deseja excluir a rota abaixo?</p>

    <ul>
        <li><strong>Origem:</strong></li>
        <li><strong>Destino:</strong></li>
        <li><strong>Distância:</strong></li>
    </ul>

    <form method="POST">
        <button type="submit" name="confirmar" class="btn btn-danger">Excluir</button>
        <a href="rotas.php" class="btn btn-secondary">Cancelar</a>
    </form>

</div>

<?php require_once 'rodape.php'; ?>