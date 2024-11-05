<?php 
    require_once 'cabecalho.php'; 
    require_once 'navbar.php'; 
    require_once '../funcoes/usuarios.php';

    $usuarios = todosUsuarios();

?>

<div class="container mt-5">
    <h2>Gerenciamento de Usuários</h2>
    <a href="novo_usuario.php" class="btn btn-success mb-3">Novo Usuário</a>
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Nível</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($usuarios as $u): ?>
            <tr>
                <td> <?= $u['id'] ?> </td>
                <td> <?= $u['nome'] ?> </td>
                <td> <?= $u['email'] ?> </td>
                <td> <?php echo $u['nivel'] == 'adm' ? 'Administrador' : 'Colaborador'?> </td>
                <td>
                    <a href="editar_usuario.php?id=<?=$u['id']?>" class="btn btn-warning">Editar</a>
                    <a href="excluir_usuario.php?id=<?=$u['id']?>" class="btn btn-danger">Excluir</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?php require_once 'rodape.php'; ?>
