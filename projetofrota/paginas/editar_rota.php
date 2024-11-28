<?php
    require_once 'cabecalho.php';
    require_once 'navbar.php';
    require_once '../funcoes/rotas.php';

    $id = $_GET['id'];
    if (!$id)
    {
        header ("Location: rotas.php");
        exit();
    }

    $rota = retornaRotaPorId($id);

    if ($rota = null)
    {
        header ("Location: rotas.php");
        exit();
    }

    $erro = "";

    if ($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        try {
            $nome = $_POST['nome'];
            $origem = $_POST['origem'];
            $destino = $_POST['destino'];
            $distancia = floatval($_POST['distancia']);
            $id = intval($_POST['id']);

            if (empty($nome) || empty($origem) || empty($destino) || empty($distancia) || empty($id))
                $erro = "Preencha os campos obrigatórios!";
            else
            {
                if (editarRota($nome, $origem, $destino, $distancia, $id))
                {
                    header ("Location: rotas.php");
                    exit();
                }
                else
                    $erro = "Erro ao editar a rota!";
            }
        } catch (Exception $e) {
            $erro = 'Erro: '.$e->getMessage();
        }
    }

?>

<div class="container mt-5">
    <h2>Editar Rota</h2>

    <?php if(!empty($erro)):?>
        <p class="text-danger"><?= $erro ?></p>
    <?php endif; ?>

    <form method="POST">
        <input type="hidden" name="id" value="<?= $id ?>"/>
        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" name="nome" id="nome" value="<?= $rota['nome'] ?>" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="origem" class="form-label">Origem</label>
            <input type="text" name="origem" id="origem" value="<?= $rota['origem'] ?>" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="destino" class="form-label">Destino</label>
            <input type="text" name="destino" id="destino" value="<?= $rota['destino'] ?>" class="form-control" required>
        </div>
        <label for="distancia" class="form-label">Distância</label>
        <div class="input-group mb-3">
            <input type="number" min="0.1" step="0.1" name="distancia" id="distancia" value="<?= $rota['distancia'] ?>" class="form-control" required>
            <span class="input-group-text" id="km">km</span>
        </div>
        <button type="submit" class="btn btn-primary">Atualizar Rota</button>
        <a href="rotas.php" class="btn btn-light">Cancelar</a>
    </form>
</div>

<?php require_once 'rodape.php'; ?>