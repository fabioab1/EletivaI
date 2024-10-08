<?php
    require_once 'cabecalho.php';
    require_once 'navbar.php';
?>

<div class="container mt-5">
    <h2>Excluir Marca</h2>

    <p>Tem certeza de que deseja excluir a marca abaixo?</p>
    <ul>
        <li><strong>Nome:</strong> </li>
    </ul>
    <form method="POST">
        <button type="submit" name="confirmar" class="btn btn-danger">Excluir</button>
        <a href="marcas.php" class="btn btn-secondary">Cancelar</a>
    </form>
</div>

<?php require_once 'rodape.php'; ?>