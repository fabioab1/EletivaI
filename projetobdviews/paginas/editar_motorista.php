<?php
    require_once 'cabecalho.php';
    require_once 'navbar.php';
?>

<div class="container mt-5">
    <h2>Editar Motorista</h2>

    <form method="POST">
        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" name="nome" id="nome" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">E-mail</label>
            <input type="email" name="email" id="email" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="celular" class="form-label">Número de celular</label>
            <input type="text" name="celular" id="celular" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="horas" class="form-label">Horas de serviço</label>
            <input type="number" min="0" step="0.01" name="horas" id="horas" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Atualizar Motorista</button>
        <a href="motoristas.php" class="btn btn-light">Cancelar</a>
    </form>
</div>

<?php require_once 'rodape.php'; ?>