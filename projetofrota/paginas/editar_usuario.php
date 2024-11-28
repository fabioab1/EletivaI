<?php 
    require_once 'cabecalho.php'; 
    require_once 'navbar.php';
    require_once '../funcoes/usuarios.php';

    $id = intval($_GET['id']);
    if (!$id)
    {
        header ("Location: usuarios.php");
        exit();
    }

    $usuario = retornaUsuarioPorId($id);

    if ($usuario == null)
    {
        header ("Location: usuarios.php");
        exit();
    }

    $erro = "";

    if ($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        try
        {
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $senha = $_POST['senha'];
            $id = intval($_POST['id']);
            
            if (empty($nome) || empty($email) || empty($senha))
                $erro = "Preencha os campos obrigatórios!";
            else
            {
                if (editarUsuario($nome, $email, $senha, $id))
                {
                    header('Location: usuarios.php');
                    exit();
                }
                else
                    $erro = "Erro ao editar o usuário!";
            }
        }
        catch (Exception $e)
        {
            $erro = 'Erro! '.$e->getMessage();
        }
    }
?>

<div class="container mt-5">
    <h2>Editar Usuário</h2>

    <?php if(!empty($erro)):?>
            <p class="text-danger"><?= $erro ?></p>
    <?php endif; ?>
        
    <form method="post">
        <input type="hidden" name="id" value="<?= $id ?>"/>
        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" name="nome" value="<?= $usuario['nome'] ?>" id="nome" class="form-control" value="" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" value="<?= $usuario['email'] ?>" id="email" class="form-control" value="" required>
        </div>
        <div class="mb-3">
            <label for="senha" class="form-label">Nova Senha</label>
            <input type="password" name="senha" id="senha" class="form-control" >
        </div>
        <button type="submit" class="btn btn-primary">Atualizar dados</button>
        <a href="usuarios.php" class="btn btn-light">Cancelar</a>
    </form>
</div>

<?php require_once 'rodape.php'; ?>
