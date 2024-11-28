<?php

    declare(strict_types=1);
    require_once('../config/bancodedados.php');

    function novoVeiculo(int $marcaid, string $modelo, int $ano, string $placa, float $motor, int $passageiros_max, int $condicao): bool
    {
        global $pdo;
        $stmt = $pdo->prepare("INSERT INTO veiculo (marca_id, modelo, ano, placa, motor, passageiros_max, condicao) VALUES (?, ?, ?, ?, ?, ?, ?)");
        return $stmt->execute([$marcaid, $modelo, $ano, $placa, $motor, $passageiros_max, $condicao]);
    }

    function excluirVeiculo(int $id): bool
    {
        global $pdo;
        $stmt = $pdo->prepare("DELETE FROM veiculo WHERE id = ?");
        return $stmt->execute([$id]);
    }

    function todosVeiculos(): array 
    {
        global $pdo;
        $stmt = $pdo->query("SELECT * FROM veiculo");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    function retornaVeiculoPorId(int $id): ?array
    {
        global $pdo;
        $stmt = $pdo->prepare("SELECT * FROM marca WHERE id = ?");
        $stmt->execute([$id]);
        $marca = $stmt->fetch(PDO::FETCH_ASSOC);
        return $marca ? $marca : null;
    }

    function editarVeiculo(int $marcaid, string $modelo, int $ano, string $placa, float $motor, int $passageiros_max, int $condicao, int $id): bool
    {
        global $pdo;
        $stmt = $pdo->prepare("UPDATE veiculo SET marca_id = ?, modelo = ?, ano = ?, placa = ?, motor = ?, passageiros_max = ?, condicao = ? WHERE id = ?");
        return $stmt->execute([$marcaid, $modelo, $ano, $placa, $motor, $passageiros_max, $condicao, $id]);
    }

?>