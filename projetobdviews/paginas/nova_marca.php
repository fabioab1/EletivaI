<?php
    require_once 'cabecalho.php';
    require_once 'navbar.php';
?>

<div class="container mt-5">
    <h2>Criar Nova Marca</h2>

    <form method="POST">
        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" name="nome" id="nome" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Criar Marca</button>
    </form>
</div>

<?php require_once 'rodape.php'; ?>