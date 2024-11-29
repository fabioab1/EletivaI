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

    if ($rota == null)
    {
        header ("Location: rotas.php");
        exit();
    }

    $erro = "";

    if ($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        try {
            $id = intval($_POST['id']);

            if (empty($id))
            {
                header ("Location: rotas.php");
                exit();
            }
            else
            {
                if (excluirRota($id))
                {
                    header ("Location: rotas.php");
                    exit();
                }
            }
        } catch (Exception $e) {
            $erro = 'Erro: '.$e->getMessage();
        }
    }

?>

<div class="container mt-5">
    <h2>Excluir Rota</h2>

    <?php if (!empty($erro)): ?>
        <p class="text-danger"><?= $erro ?></p>
    <?php endif; ?>

    <p>Tem certeza que deseja excluir a rota abaixo?</p>

    <ul>
        <li><strong>Nome:</strong> <?= $rota['nome'] ?> </li>
        <li><strong>Origem:</strong> <?= $rota['origem'] ?> </li>
        <li><strong>Destino:</strong> <?= $rota['destino'] ?> </li>
        <li><strong>Distância:</strong> <?= $rota['distancia'] ?> </li>
    </ul>

    <form method="POST">
        <input type="hidden" name="id" value="<?= $id ?>">
        <button type="submit" name="confirmar" class="btn btn-danger">Excluir</button>
        <a href="rotas.php" class="btn btn-secondary">Cancelar</a>
    </form>

</div>

<?php require_once 'rodape.php'; ?>