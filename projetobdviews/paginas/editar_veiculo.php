<?php
    require_once 'cabecalho.php';
    require_once 'navbar.php';
?>

<div class="container mt-5">
    <h2>Editar Veículo</h2>

    <form method="POST">
        <div class="mb-3">
            <label for="marca_id" class="form-label">Marca</label>
            <select name="marca_id" id="marca_id" class="form-select" required>
                <option value="1">Marca</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="modelo" class="form-label">Modelo</label>
            <input type="text" name="modelo" id="modelo" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="ano" class="form-label">Ano de fabricação</label>
            <input type="number" min="1885" max="<?=date("Y")?>" name="ano" id="ano" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="placa" class="form-label">Placa</label>
            <input type="text" name="placa" id="placa" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="motor" class="form-label">Motor</label>
            <input type="number" name="motor" min="1" step="0.1" id="motor" class="form-control" requiired>
        </div>
        <div class="mb-3">
            <label for="capacidade" class="form-label">Capacidade de passageiros</label>
            <input type="number" name="capacidade" min="1" id="capacidade" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="condicao" class="form-label">Condição de uso</label>
            <select name="condicao" id="condicao" class="form-select" required>
                <option value="1">Ótimo</option>
                <option value="2">Bom</option>
                <option value="3">Regular</option>
                <option value="4">Ruim</option>
                <option value="5">Quebrado</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Atualizar Veículo</button>
        <a href="veiculos.php" class="btn btn-light">Cancelar</a>
    </form>
</div>

<?php require_once 'rodape.php'; ?>