<?php 
    require_once 'cabecalho.php'; 
    require_once 'navbar.php';
?>

<div class="container mt-5">
    <h2>Excluir Viagem</h2>
    <p>Tem certeza de que deseja excluir a viagem abaixo?</p>
    <ul>
        <li><strong>Data:</strong> </li>
        <li><strong>Veículo:</strong> </li>
        <li><strong>Motorista:</strong> </li>
        <li><strong>Rota:</strong> </li>
        <li><strong>Horário de saída:</strong></li>
        <li><strong>Horário de chegada:</strong></li>
        <li><strong>Tempo de viagem:</strong></li>
    </ul>

    <form method="post">
        <button type="submit" name="confirmar" class="btn btn-danger">Excluir</button>
        <a href="viagens.php" class="btn btn-secondary">Cancelar</a>
    </form>

</div>

<?php require_once 'rodape.php'; ?>
