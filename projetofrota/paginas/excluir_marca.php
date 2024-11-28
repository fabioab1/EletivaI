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
            $id = intval($_POST['id']);

            if (empty($id))
            {
                header ("Location: marcas.php");
                exit();
            }
            else
            {
                if (excluirMarca($id))
                {
                    header ("Location: marcas.php");
                    exit();
                }
            }
        } catch (Exception $e) {
            $erro = 'Erro: '.$e->getMessage();
        }
    }

?>

<div class="container mt-5">
    <h2>Excluir Marca</h2>

    <?php if (!empty($erro)): ?>
        <p class="text-danger"><?= $erro ?></p>
    <?php endif; ?>

    <p>Tem certeza de que deseja excluir a marca abaixo?</p>
    <ul>
        <li><strong>Nome:</strong> <?= $marca['nome'] ?> </li>
    </ul>
    <form method="POST">
        <input type="hidden" name="id" value="<?= $id ?>">
        <button type="submit" name="confirmar" class="btn btn-danger">Excluir</button>
        <a href="marcas.php" class="btn btn-secondary">Cancelar</a>
    </form>
</div>

<?php require_once 'rodape.php'; ?>