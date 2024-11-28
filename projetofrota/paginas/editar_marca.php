<?php 
    require_once 'cabecalho.php';
    require_once 'navbar.php';
    require_once '../funcoes/marcas.php';

    $id = $_GET['id'];
    if (!$id)
    {
        header ("Location: marcas.php");
        exit();
    }

    $marca = retornaMarcaPorId($id);

    if ($marca == null)
    {
        header ("Location: marcas.php");
        exit();
    }

    $erro = "";

    if ($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        try {
            $nome = $_POST['nome'];
            $id = intval($_POST['id']);

            if (empty($nome) || empty($id))
                $erro = "Preencha os campos obrigatórios!";
            else
            {
                if (editarMarca($nome, $id))
                {
                    header ("Location: marcas.php");
                    exit();
                }
                else
                    $erro = "Erro ao editar a marca!";
            }
        } catch (Exception $e) {
            $erro = 'Erro: '.$e->getMessage();
        }
    }
?>

<div class="container mt-5">
    <h2>Editar Marca</h2>

    <?php if(!empty($erro)):?>
        <p class="text-danger"><?= $erro ?></p>
    <?php endif; ?>

    <form method="POST">
        <input type="hidden" name="id" value="<?= $id ?>"/>
        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" name="nome" id="nome" value="<?= $marca['nome'] ?>" class="form-control" value="" required>
        </div>
        <button type="submit" class="btn btn-primary">Atualizar Marca</button>
        <a href="marcas.php" class="btn btn-light">Cancelar</a>
    </form>
</div>

<?php require_once 'rodape.php'; ?>