<?php 
    require_once 'cabecalho.php'; 
    require_once 'navbar.php';
    require_once '../funcoes/motoristas.php';

    $id = $_GET['id'];
    if(!$id)
    {
        header ("Location: motoristas.php");
        exit();
    }

    $motorista = retornaMotoristaPorId($id);

    if ($motorista == null)
    {
        header ("Location: motoristas.php");
        exit();
    }

    $erro = "";

    if ($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        try {
            $id = intval($_POST['id']);

            if (empty($id))
            {
                header ("Location: motoristas.php");
                exit();
            }
            else
            {
                if (excluirMotorista($id))
                {
                    header ("Location: motoristas.php");
                    exit();
                }
            }
        } catch (Exception $e) {
            $erro = 'Erro: '.$e->getMessage();
        }
    }

?>


<div class="container mt-5">
    <h2>Excluir Motorista</h2>

    <?php if (!empty($erro)): ?>
        <p class="text-danger"><?= $erro ?></p>
    <?php endif; ?>

    <p>Tem certeza que deseja excluir o motorista abaixo?</p>

    <ul>
        <li><strong>Nome:</strong> <?= $motorista['nome'] ?> </li>
        <li><strong>E-mail:</strong> <?= $motorista['email'] ?></li>
        <li><strong>Número de celular:</strong> <?= $motorista['numero_cel'] ?> </li>
        <li><strong>Horas de serviço:</strong> <?= $motorista['horas_serv'] ?> </li>
    </ul>

    <form method="POST">
        <input type="hidden" name="id" value="<?= $id ?>">
        <button type="submit" name="confirmar" class="btn btn-danger">Excluir</button>
        <a href="motoristas.php" class="btn btn-secondary">Cancelar</a>
    </form>

</div>

<?php require_once 'rodape.php'; ?>