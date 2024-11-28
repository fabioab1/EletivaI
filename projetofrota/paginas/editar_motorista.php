<?php
    require_once 'cabecalho.php';
    require_once 'navbar.php';
    require_once '../funcoes/motoristas.php';

    $id = $_GET['id'];
    if (!$id)
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
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $celular = $_POST['celular'];
            $horas_serv = floatval($_POST['horas']);
            $id = intval($_POST['id']);

            if (empty($nome) || empty($email) || empty($celular) || empty($horas_serv))
                $erro = "Todos os campos são obrigatórios!";
            else
            {
                if (editarMotorista($nome, $email, $celular, $horas_serv, $id))
                {
                    header ("Location: motoristas.php");
                    exit();
                }
                else
                    $erro = 'Erro: '.$e->getMessage();
            }
        } catch (Exception $e) {
            $erro = 'Erro: '.$e->getMessage();
        }
    }
?>

<div class="container mt-5">
    <h2>Editar Motorista</h2>

    <?php if(!empty($erro)):?>
        <p class="text-danger"><?= $erro ?></p>
    <?php endif; ?>

    <form method="POST">
        <input type="hidden" name="id" value="<?= $id ?>"/>
        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" name="nome" id="nome" value="<?= $motorista['nome'] ?>" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">E-mail</label>
            <input type="email" name="email" id="email" value="<?= $motorista['email'] ?>" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="celular" class="form-label">Número de celular</label>
            <input type="tel" name="celular" id="celular" value="<?= $motorista['numero_cel'] ?>" placeholder="DDD12345-6789" pattern="[0-9]{3}[0-9]{5}-[0-9]{4}" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="horas" class="form-label">Horas de serviço</label>
            <input type="number" min="0" step="0.1" name="horas" id="horas" value="<?= $motorista['horas_serv'] ?>" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Atualizar Motorista</button>
        <a href="motoristas.php" class="btn btn-light">Cancelar</a>
    </form>
</div>

<?php require_once 'rodape.php'; ?>