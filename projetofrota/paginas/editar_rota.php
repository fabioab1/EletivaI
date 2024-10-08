<?php
    require_once 'cabecalho.php';
    require_once 'navbar.php';
?>

<div class="container mt-5">
    <h2>Editar Rota</h2>

    <form method="POST">
        <div class="mb-3">
            <label for="origem" class="form-label">Origem</label>
            <input type="text" name="origem" id="origem" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="destino" class="form-label">Destino</label>
            <input type="text" name="destino" id="destino" class="form-control" required>
        </div>
        <label for="distancia" class="form-label">Distância</label>
        <div class="input-group mb-3">
            <input type="number" min="0.1" step="0.1" name="distancia" id="distancia" class="form-control" required>
            <span class="input-group-text" id="km">km</span>
        </div>
        <button type="submit" class="btn btn-primary">Atualizar Rota</button>
        <a href="rotas.php" class="btn btn-light">Cancelar</a>
    </form>
</div>

<?php require_once 'rodape.php'; ?>