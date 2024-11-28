<?php
    require_once 'cabecalho.php';
    require_once 'navbar.php';
    require_once '../funcoes/motoristas.php';

    $motoristas = todosMotoristas();

    $erro = "";

    if ($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        try {
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $celular = $_POST['celular'];
            $horas = floatval($_POST['horas']);

            if (empty($nome) || empty($email) || empty($celular) || empty($horas))
                $erro = "Todos os campos são obrigatórios!";
            else
            {
                if (novoMotorista($nome, $email, $celular, $horas))
                {
                    header ("Location: motoristas.php");
                    exit();
                }
                else
                    $erro = "Erro ao cadastrar o veículo.";
            }
        } catch (Exception $e) {
            $erro = 'Erro: '.$e->getMessage();
        }
    }

?>

<div class="container mt-5">
    <h2>Cadastrar Novo Motorista</h2>

    <?php if (!empty($erro)) : ?>
        <p class="text-danger"><?= $erro ?></p>
    <?php endif; ?>

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
            <input type="tel" name="celular" id="celular" placeholder="DDD12345-6789" pattern="[0-9]{3}[0-9]{5}-[0-9]{4}" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="horas" class="form-label">Horas de serviço</label>
            <input type="number" min="0" step="0.1" name="horas" id="horas" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Cadastrar Motorista</button>
    </form>
</div>

<?php require_once 'rodape.php'; ?>