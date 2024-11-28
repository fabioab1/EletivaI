<?php 
    require_once 'cabecalho.php';
    require_once 'navbar.php'; 
    require_once '../funcoes/veiculos.php';
    require_once '../funcoes/marcas.php';

    if ($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        try {
            $id = intval($_POST['id']);
            
            if (excluirVeiculo(($id)))
            {
                header ("Location: veiculos.php");
                exit();
            }
            else
                $erro = "Erro ao excluir o veículo.";

        } catch (Exception $e) {
            $erro = "Erro: ".$e->getMessage();
        }
    }
    else
    {
        if(isset($_GET['id']))
        {
            try
            {
                $id = intval($_GET['id']);
                $veiculo = retornaVeiculoPorId($id);
                if ($veiculo == null)
                {
                    header ("Location: veiculos.php");
                    exit();
                }
            } catch (Exception $e) {
                $erro = "Erro: ".$e->getMessage();
            }
        }
        else
        {
            header ("Location: veiculos.php");
            exit();
        }
    }

?>

<div class="container mt-5">
    <h2>Excluir Veículo</h2>

    <p>Tem certeza que deseja excluir o véiculo abaixo?</p>

    <?php
        $marca = retornaMarcaPorId($veiculo['marca_id']);
        $condicao = "";
        if ($veiculo['condicao'] == 1)
            $condicao = "Ótimo";
        else if ($veiculo['condicao'] == 2)
            $condicao = "Bom";
        else if ($veiculo['condicao'] == 3)
            $condicao = "Regular";
        else if ($veiculo['condicao'] == 4)
            $condicao = "Ruim";
        else if ($veiculo['condicao'] == 5)
            $condicao = "Quebrado";
    ?>

    <ul>
        <li><strong>Marca:</strong> <?php echo $marca['nome'] ?> </li>
        <li><strong>Modelo:</strong> <?= $veiculo['modelo'] ?> </li>
        <li><strong>Ano de fabricação:</strong> <?= $veiculo['ano'] ?> </li>
        <li><strong>Placa:</strong> <?= $veiculo['placa'] ?> </li>
        <li><strong>Motor:</strong> <?= $veiculo['motor'] ?> </li>
        <li><strong>Capacidade de passageiros:</strong> <?= $veiculo['passageiros_max'] ?> </li>
        <li><strong>Condição de uso:</strong> <?= $condicao ?> </li>
    </ul>

    <form method="POST">
        <input type="hidden" name="id" value="<?= $veiculo['id'] ?>"/>
        <button type="submit" name="confirmar" class="btn btn-danger">Excluir</button>
        <a href="veiculos.php" class="btn btn-secondary">Cancelar</a>
    </form>

</div>

<?php require_once 'rodape.php'; ?>